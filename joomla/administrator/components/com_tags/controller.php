<?php
/**
 * @version		$Id: controller.php 14401 2010-01-26 14:10:00Z louis $
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

jimport('joomla.application.component.controller');

/**
 * Content Component Controller
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 1.5
 */
class TagsController extends JController
{
	/**
	 * Method to show an article as the main page display
	 *
	 * @access	public
	 * @since	1.5
	 */
	function display( )
	{
	  global $mainframe;
		switch($this->getTask())
		{
			case 'add'     :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view'  , 'tag');
				JRequest::setVar( 'edit', false );
				$model = $this->getModel('tag');

			} 
			break;
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view'  , 'tag');
				JRequest::setVar( 'edit', true );
			} 
			break;
			case 'details':
			  JRequest::setVar( 'layout', 'default'  );
		      JRequest::setVar( 'view'  , 'details');
		    break;
			case 'AddSubTag':
			  JRequest::setVar( 'layout', 'form'  );
		      JRequest::setVar( 'view'  , 'detail');
			break;
			case 'editSubTag':
			  JRequest::setVar( 'layout', 'form'  );
		      JRequest::setVar( 'view'  , 'detail');
		      $model = $this->getModel('tag');
			break;
			  
		}
		parent::display();
	}
	
	
    function save()
	{
	    $db =& JFactory::getDBO();
    	$post	= JRequest::get('post');
    	$cid	= JRequest::getVar( 'cid', array(0), 'post', 'array' );
		$post['id'] = (int) $cid[0];
    	$post['created'] = date("Y-m-d H:i:s");

	    $model = $this->getModel('tag');
	    if ($model->store($post)) {
		  $msg = JText::_('保存成功.' );
		} else {
	      $msg = JText::_( 'Error! 保存失败.' );
		}
		if($post['parent_id']){
		  $this->setRedirect( 'index.php?option=com_tags&task=details&filter_id='.$post['parent_id'], $msg );
		}else{
    	  $this->setRedirect( 'index.php?option=com_tags', $msg );
		}
	}
	
    function remove()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);
		if (count( $cid ) < 1) {
			JError::raiseError(500, JText::_( 'Select an item to delete' ) );
		}
		
		$model = $this->getModel('tag');
	    if(!$model->delete($cid)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}
		$this->setRedirect( 'index.php?option=com_tags', '删除成功');
	}
	
	function cancelTags()
	{
	  global $mainframe;
	  $mainframe->setUserState($option.'filter_id', 0);
	  $this->setRedirect( 'index.php?option=com_tags');
	}
}
