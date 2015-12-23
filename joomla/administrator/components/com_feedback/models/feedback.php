<?php
/**
 * @version		$Id: weblinks.php 19343 2010-11-03 18:12:02Z ian $
 * @package		Joomla
 * @subpackage	Content
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.model');

/**
 * Weblinks Component Weblink Model
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 1.5
 */
class FeedbackModelFeedback extends JModel
{
	var $_data = null;
	var $_total = null;
	var $_pagination = null;
	function __construct()
	{
		parent::__construct();

		global $mainframe, $option;

		// Get the pagination request variables
		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );
		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);
                
		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}

	/**
	 * Method to get weblinks item data
	 *
	 * @access public
	 * @return array
	 */
	function getData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
		}

		return $this->_data;
	}

	/**
	 * Method to get the total number of weblink items
	 *
	 * @access public
	 * @return integer
	 */
	function getTotal()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_total))
		{
			$query = $this->_buildQuery();
			$this->_total = $this->_getListCount($query);
		}

		return $this->_total;
	}

	/**
	 * Method to get a pagination object for the weblinks
	 *
	 * @access public
	 * @return integer
	 */
	function getPagination()
	{

		// Lets load the content if it doesn't already exist
		if (empty($this->_pagination))
		{
			jimport('joomla.html.pagination');
                        $this->_pagination = new JPagination( $this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
		}

		return $this->_pagination;
	}

	function _buildQuery()
	{
		// Get the WHERE and ORDER BY clauses for the query
		$where		= $this->_buildContentWhere();
		//$orderby	= $this->_buildContentOrderBy();

//		$query = ' SELECT a.*, cc.title AS category, u.name AS editor '
//			. ' FROM #__weblinks AS a '
//			. ' LEFT JOIN #__categories AS cc ON cc.id = a.catid '
//			. ' LEFT JOIN #__users AS u ON u.id = a.checked_out '
//			. $where
//			. $orderby
//		;
                $query ="SELECT * FROM #__cos_feedback"
                .$where." ORDER BY id DESC"
               // .$orderby
                ;

		return $query;
	}
	function _buildContentWhere()
	{
		global $mainframe, $option;
		$db					=& JFactory::getDBO();
		$filter_state		= $mainframe->getUserStateFromRequest( $option.'filter_state','filter_state','','word' );					
		$search			= $mainframe->getUserStateFromRequest( $option.'search','search','','string' );
		if (strpos($search, '"') !== false) {
			$search = str_replace(array('=', '<'), '', $search);
		}
		$search = JString::strtolower($search);
                $where = array();

		if ($search) {
			$where[] = 'LOWER(title) LIKE '.$db->Quote( '%'.$db->getEscaped( $search, true ).'%', false );
		}
                if ($id) {
			$where[] = ' id= '.$id;
		}
		if ( $filter_state ) {
			if ( $filter_state == 'P' ) {
				$where[] = 'published = 1';
			} else if ($filter_state == 'U' ) {
				$where[] = 'published= 0';
			}
		}

		$where 		= ( count( $where ) ? ' WHERE '. implode( ' AND ', $where ) : '' );
                //echo $where;
		return $where;
	}

        function publish($id = array(), $publish = 1)
	{
		$user 	=& JFactory::getUser();

		if (count( $id ))
		{
			JArrayHelper::toInteger($id);
			$ids = implode( ',', $id );

			$query = 'UPDATE #__cos_feedback'
				. ' SET published = '.(int) $publish
				. ' WHERE id IN ( '.$ids.')'
			;
			$this->_db->setQuery( $query );
			if (!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
             //echo $query;exit;
		return true;
	}

        function store($data)
	{
		$row =& $this->getTable();
        if(empty($data['times'])==false){
       $row->times=$data['times'];
       
       } 
		// Bind the form fields to the web link table
		if (!$row->bind($data)) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Store the web link table to the database
		if (!$row->store()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		return true;
	}
       /**
	 * Method to checkin/unlock the feedbacks
	 *
	 * @access	public
	 * @return	boolean	True on success
	 * @since	1.5
	 */
	function checkin()
	{
		if ($this->_id)
		{
			$feedbacks = & $this->getTable();
			if(! $feedbacks->checkin($this->_id)) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
		return false;
	}
	/**
	 * Method to remove a feedbacks
	 *
	 * @access	public
	 * @return	boolean	True on success
	 * @since	1.5
	 */
	function delete($cid = array())
	{
		$result = false;

		if (count( $cid ))
		{
			JArrayHelper::toInteger($cid);
			$cids = implode( ',', $cid );
			$query = 'DELETE FROM #__cos_feedback'
				. ' WHERE id IN ( '.$cids.' )';
			$this->_db->setQuery( $query );
			if(!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}

		return true;
	}
 }
