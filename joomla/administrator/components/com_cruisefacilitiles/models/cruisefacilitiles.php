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
class CruisefacilitilesModelCruisefacilitiles extends JModel
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
		//$where		= $this->_buildContentWhere();
        $query ="SELECT * FROM jos_cos_cruisefacilitiles"
                //.$where
               // .$orderby
                ; 
		return $query;
	}


        function publish($id = array(), $publish = 1)
	{
		$user 	=& JFactory::getUser();

		if (count( $id ))
		{
			JArrayHelper::toInteger($id);
			$ids = implode( ',', $id );

			$query = 'UPDATE #__cos_cruise'
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

     
       /**
	 * Method to checkin/unlock the cruises
	 *
	 * @access	public
	 * @return	boolean	True on success
	 * @since	1.5
	 */
	function checkin()
	{
		if ($this->_id)
		{
			$cruises = & $this->getTable();
			if(! $cruises->checkin($this->_id)) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
		return false;
	}
	
 }
