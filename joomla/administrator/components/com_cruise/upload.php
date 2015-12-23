<?php
/**
 * @version		$Id: controller.php 15096 2010-02-27 14:16:40Z ian $
 * @package		Joomla
 * @subpackage	Config
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
 * @package		Joomla
 * @subpackage	Config
 */
class CruiseControllerUpload extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{

		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');
		$this->registerTask( 'editprice', 		'display');//编辑价格
		$this->registerTask( 'editroute' , 		'display' );//编辑行程
		$this->registerTask( 'edit', 		'display');
		$this->registerTask( 'add' , 		'display' );
	
	}

	function display( )
	{
		switch($this->getTask())
		{
			case 'add'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'addroute'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'editpic'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form2'  );
				JRequest::setVar( 'view', 'uploadpic'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'upload'     :
			{


				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'uploadpic'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'addroute'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'cntours'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'cruise');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$db		=& JFactory::getDBO();
		// save the cos_province parent information
		$row	=& JTable::getInstance('uploadpic', 'Table');
		//print_r($row);exit;
		//echo empty($row);
		$post	= JRequest::get( 'post' );
	
		//var_dump($_FILES['ufile']);
		//echo "<br />";
		//var_dump($post);
		//exit;

		if($_FILES['ufile']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."hotel","hotel");
			$return_obj=$fupload->run($_FILES['ufile']);
			$fnewpath="uploads/hotel/";
			$filename=$return_obj->_fileList['name'];			
			$filenewname=array("pic_path"=>$filename,"pic_dir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."hotel".DS.$return_obj->_fileList['name'],140,140,0,JPATH_SITE.DS."uploads".DS."hotel".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->pic_dir=null;
			$row->pic_path=null;
			$post = array_merge($post,$filenewname);

		}

		if(empty($post['cruiseid'])){
			
			echo "ID有误，请跟管理员联系。";
			exit;

		}
		if (!$row->bind( $post ))
		{
			JError::raiseError(500, $row->getError() );
		}
		
		$isNew = ($row->id == 0);

		if (!$row->check())
		{
			
			JError::raiseError(500, $row->getError() );
		}

		if (!$row->store())
		{
			JError::raiseError(500, $row->getError() );
		}

		$row->checkin();

		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to  saved' );
				$link = 'index.php?option=com_cruise&view=cntours&task=edit&cid[]='. $row->cruiseid;
				break;

			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = "index.php?option=com_cruise&c=upload&view=uploadpic&task=upload&cid[]=". $post['cruiseid'];
				break;
		}

		$this->setRedirect($link, $msg);
	}

	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$this->setRedirect( 'index.php?option=com_cruise' );
	}
}