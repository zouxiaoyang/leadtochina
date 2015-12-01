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

jimport( 'joomla.application.component.controller' );

/**
 * feedback feedback Controller
 *
 * @package		Joomla
 * @subpackage	feedback
 * @since 1.5
 */
class FeedbackController extends JController
{
	function __construct($config = array())
	{
		parent::__construct($config);

		// Register Extra tasks
		$this->registerTask( 'edit', 'display' );
	}

	function display( )
	{
		switch($this->getTask())
		{
			
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view'  , 'feedbacks');
				JRequest::setVar( 'edit', true );

				// Checkout the feedback
				$model = $this->getModel('feedbacks');
      				
			} break;
               	}
                $view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'feedback');
		};
		parent::display();
	}

	function save()
	{
            
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$post	= JRequest::get('post');
		$id	= JRequest::getVar( 'id', array(0), 'post', 'array' ); 
        if($post['status']==1){
            
            $post['times']=time();            

            }
		$post['id'] = (int) $id[0];
        $post['content']= JRequest::getVar( 'content', '', 'post', 'string', JREQUEST_ALLOWRAW );
        $model = $this->getModel('feedback');
               
		if ($model->store($post)) {
			$msg = JText::_( 'Feedback Saved' );
		} else {
			$msg = JText::_( 'Error Saving Feedback' );
		}

		// Check the table in so it can be edited.... we are done with it anyway
		
		$link = 'index.php?option=com_feedback';
		$this->setRedirect($link, $msg);
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

		$model = $this->getModel('feedback');
		if(!$model->delete($cid)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}

		$this->setRedirect( 'index.php?option=com_feedback' );
	}


	function publish()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1) {
			JError::raiseError(500, JText::_( 'Select an item to publish' ) );
		}

		$model = $this->getModel('feedback');
		if(!$model->publish($cid, 1)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}

		$this->setRedirect( 'index.php?option=com_feedback' );
	}


	function unpublish()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1) {
			JError::raiseError(500, JText::_( 'Select an item to unpublish' ) );
		}

		$model = $this->getModel('feedback');
		if(!$model->publish($cid, 0)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}

		$this->setRedirect( 'index.php?option=com_feedback' );
	}
        function edit()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$id = JRequest::getVar( 'id', array(), 'post', 'array' );
		JArrayHelper::toInteger($id);
		$model = $this->getModel('feedback');
		if(!$model->publish($cid, 0)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}

		$this->setRedirect( 'index.php?option=com_feedback' );
	}

	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		// Checkin the feedback
		$model = $this->getModel('feedback');
		$model->checkin();
		$this->setRedirect( 'index.php?option=com_feedback' );
	}

}