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

define( 'JPATH_INCLUDES',         JPATH_ROOT.DS.'includes');

jimport( 'joomla.application.component.controller' );



/**

 * cruise cruise Controller

 *

 * @package		Joomla

 * @subpackage	cruise

 * @since 1.5

 */

class CruiseController extends JController

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

				JRequest::setVar( 'view'  , 'cruise');

				JRequest::setVar( 'edit', true );



				// Checkout the cruise

				$model = $this->getModel('cruise');

      				

			} break;
			
			case 'route'    :

			{

				JRequest::setVar( 'hidemainmenu', 1 );

				JRequest::setVar( 'layout', 'route_tpl'  );

				JRequest::setVar( 'view'  , 'route');

				JRequest::setVar( 'route', true );



				// Checkout the cruise

				$model = $this->getModel('cruise');

      				

			} break;
			
			
		
               	}

                $view = JRequest::getCmd('view');



		if(empty($view)) {

			JRequest::setVar('view', 'cruises');

		};

		parent::display();

	}



	function save()

	{

      

		// Check for request forgeries

		JRequest::checkToken() or jexit( 'Invalid Token' );

		$post	= JRequest::get('post');

		$id	= JRequest::getVar( 'id', array(0), 'post', 'array' ); 
       
		//print_r($post);die;
		$post['id'] = (int) $id[0];
		//foreach($post['checkbox'] as $a){
		//$post['equipment'].= $a.",";
		
		//}
		//echo substr($post['equipment'],0,-1);exit;
		$post['equipment']=JRequest::getVar( 'equipment', '', 'post', 'string', JREQUEST_ALLOWRAW );
        $post['introduction']= JRequest::getVar( 'introduction', '', 'post', 'string', JREQUEST_ALLOWRAW );
		//print_r($post);exit;
        $model = $this->getModel('cruise');



		if($_FILES['ufile']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."cityTours","ctours");
			$return_obj=$fupload->run($_FILES['ufile']);

			//var_dump($return_obj->_fileList);
			//exit;
			$fnewpath="uploads/cityTours/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."cityTours".DS.$return_obj->_fileList['name'],220,235,0,JPATH_SITE.DS."uploads".DS."cityTours".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			//$post['filedir']=null;
			//$post['ufile']=null;
			$post = array_merge($post,$filenewname);

		}

		

		if ($model->store($post)) {
			
			$msg = JText::_( 'cruise Saved' );

		} else {

			$msg = JText::_( 'Error Saving cruise' );

		}



		// Check the table in so it can be edited.... we are done with it anyway

		

		$link = 'index.php?option=com_cruise';

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



		$model = $this->getModel('cruise');

		if(!$model->delete($cid)) {

			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";

		}



		$this->setRedirect( 'index.php?option=com_cruise' );

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



		$model = $this->getModel('cruises');

		if(!$model->publish($cid, 1)) {

			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";

		}



		$this->setRedirect( 'index.php?option=com_cruise' );

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



		$model = $this->getModel('cruises');

		if(!$model->publish($cid, 0)) {

			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";

		}


		$this->setRedirect( 'index.php?option=com_cruise' );

	}

    function edit()

	{

		// Check for request forgeries

		JRequest::checkToken() or jexit( 'Invalid Token' );

		$id = JRequest::getVar( 'id', array(), 'post', 'array' );

		JArrayHelper::toInteger($id);

		$model = $this->getModel('cruise');

		if(!$model->publish($cid, 0)) {

			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";

		}



		$this->setRedirect( 'index.php?option=com_cruise' );

	}
	function add()

	{
		

		// Check for request forgeries

		JRequest::checkToken() or jexit( 'Invalid Token' );



		$id = JRequest::getVar( 'id', array(), 'post', 'array' );

		JArrayHelper::toInteger($id);

		$model = $this->getModel('cruise');

		if(!$model->publish($cid, 0)) {

			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";

		}

		$this->setRedirect( 'index.php?option=com_cruise&task=edit' );

	}


	function cancel()

	{

		// Check for request forgeries

		JRequest::checkToken() or jexit( 'Invalid Token' );

		// Checkin the cruise

		$model = $this->getModel('cruise');

		$model->checkin();

		$this->setRedirect( 'index.php?option=com_cruise' );

	}



}