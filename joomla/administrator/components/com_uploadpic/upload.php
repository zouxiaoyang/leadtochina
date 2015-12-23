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
class UploadpicControllerUpload extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{
		
		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');

	}

	function display( )
	{



		switch($this->getTask())
		{

			case 'upload'     :
			{


				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'uploadpic'  );
				JRequest::setVar( 'edit', false  );
			} break;
		}


		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'scenerys');
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
		
//array(8) { ["proname"]=> string(8) "Shanghai" ["description"]=> string(8) "dfsfsdfs" 
//["task"]=> string(4) "save" ["option"]=> string(12) "com_province" 
//["id"]=> string(1) "2" ["cid"]=> array(1) { [0]=> string(1) "2" } 
//["textfieldcheck"]=> string(0) "" ["c293f03092a989911df312e31cbf88f2"]=> string(1) "1" }

		$post	= JRequest::get( 'post' );
	
		//var_dump($_FILES['ufile']);
		//echo "<br />";
		//var_dump($post);
		//exit;
    if($_FILES['ufile']['size']){
      require_once(JPATH_INCLUDES.DS."Upload.php");
      require_once(JPATH_INCLUDES.DS."ThumbImage.php");
      $fupload=new Upload(JPATH_ROOT.DS."uploads".DS."content","con");
      $return_obj=$fupload->run($_FILES['ufile']);
      $fnewpath="uploads/content/";
      $filename=$return_obj->_fileList['name'];
    
      $filenewname=array("pic_path"=>$filename,"pic_dir"=>$fnewpath);
      $thum=new resizeimage(JPATH_SITE.DS."uploads".DS."city".DS.$return_obj->_fileList['name'],200,200,0,JPATH_SITE.DS."uploads".DS."content".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
      $row->pic_dir=null;
      $row->pic_path=null;
      $post = array_merge($post,$filenewname);

    }  
    /*
		if($_FILES['ufile']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."content","con","com_content");
			$image_info=getimagesize($_FILES['ufile']['tmp_name']);
			if($image_info[0]<500 OR $image_info[1]<315){
				echo "上传失败！图片文件尺寸必须是500x315以上。";
				exit;
			
			}
			$return_obj=$fupload->run($_FILES['ufile']);
			
			$fnewpath="uploads/content/";
			$filename=$return_obj->_fileList['name'];
			
			$filenewname=array("pic_path"=>$filename,"pic_dir"=>$fnewpath);

			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."content".DS.$return_obj->_fileList['name'],140,140,0,JPATH_SITE.DS."uploads".DS."content".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);

			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."scenery".DS.$return_obj->_fileList['name'],500,315,1,JPATH_SITE.DS."uploads".DS."content".DS.$return_obj->_fileList['name']);
			$row->pic_dir=null;
			$row->pic_path=null;
			$post = array_merge($post,$filenewname);

		}
     */



		if(empty($post['contentid'])){
			
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


			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = "index.php?option=com_uploadpic&c=upload&view=uploadpic&task=upload&cid[]=". $post['contentid'];
				break;
		}

		$this->setRedirect($link, $msg);
	}


	function cancel()
	{
		// Check for request forgeries
		//$pre_url=$_SERVER[""];
		$this->setRedirect( 'index.php?option=com_content' );
	}


}
