<?php
/**
 * @version		$Id: feedbacks.php 14401 2010-01-26 14:10:00Z louis $
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
 * feedbackss Component feedbacks Model
 *
 * @package		Joomla
 * @subpackage	feedbackss
 * @since 1.5
 */
class FeedbackModelFeedbacks extends JModel
{
	/**
	 * feedbacks id
	 *
	 * @var int
	 */
	var $_id = null;

	/**
	 * feedbacks data
	 *
	 * @var array
	 */
	var $_data = null;

	/**
	 * Constructor
	 *
	 * @since 1.5
	 */
	function __construct()
	{
		parent::__construct();

		$array = JRequest::getVar('id', array(0), '', 'array');    
		$edit	= JRequest::getVar('edit',true);
		if($edit)
			$this->setId((int)$array[0]);
	}

	/**
	 * Method to set the feedbacks identifier
	 *
	 * @access	public
	 * @param	int feedbacks identifier
	 */
	function setId($id)
	{
		// Set feedbacks id and wipe data
		$this->_id		= $id;
		$this->_data	= null;
	}

	/**
	 * Method to get a feedbacks
	 *
	 * @since 1.5
	 */
	function &getData()
	{
		// Load the feedbacks data
		if ($this->_loadData())
		{
		}
		else  $this->_initData();

		return $this->_data;
	}

	
	/**
	 * Method to (un)publish a feedbacks
	 *
	 * @access	public
	 * @return	boolean	True on success
	 * @since	1.5
	 */
	function publish($cid = array(), $publish = 1)
	{
		$user 	=& JFactory::getUser();

		if (count( $cid ))
		{
			JArrayHelper::toInteger($cid);
			$cids = implode( ',', $cid );

			$query = 'UPDATE #__feedback'
				. ' SET published = '.(int) $publish
				. ' WHERE id IN ( '.$cids.' )'
				. ' AND ( checked_out = 0 OR ( checked_out = '.(int) $user->get('id').' ) )'
			;
			$this->_db->setQuery( $query );
			if (!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}

		return true;
	}

	
	/**
	 * Method to load content feedbacks data
	 *
	 * @access	private
	 * @return	boolean	True on success
	 * @since	1.5
	 */
	function _loadData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
//			$query = 'SELECT w.*, cc.title AS category,'.
//					' cc.published AS cat_pub, cc.access AS cat_access'.
//					' FROM #__feedbackss AS w' .
//					' LEFT JOIN #__categories AS cc ON cc.id = w.catid' .
//					' WHERE w.id = '.(int) $this->_id;
                   
                        $query ='SELECT * FROM #__cos_feedback WHERE id='.(int) $this->_id;
                        $this->_db->setQuery($query);
			$this->_data = $this->_db->loadObject();
                        return (boolean) $this->_data;
		}
		return true;
	}

	/**
	 * Method to initialise the feedbacks data
	 *
	 * @access	private
	 * @return	boolean	True on success
	 * @since	1.5
	 */
	function _initData()
	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
			$feedbacks = new stdClass();
			$feedbacks->id					= 0;
			$feedbacks->title				= null;
			$feedbacks->published			= 0;
                        $this->_data					= $feedbacks;
			return (boolean) $this->_data;
		}
		return true;
	}
      /**
	 * Tests if feedbacks is checked out
	 *
	 * @access	public
	 * @param	int	A user id
	 * @return	boolean	True if checked out
	 * @since	1.5
	 */
	function isCheckedOut( $uid=0 )
	{
		if ($this->_loadData())
		{
			if ($uid) {
				return ($this->_data->checked_out && $this->_data->checked_out != $uid);
			} else {
				return $this->_data->checked_out;
			}
		}
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


	
}