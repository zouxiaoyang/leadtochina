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
class TestimonisalsController extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{
		parent::__construct( $default );
    $this->registerTask( 'add',  'display' );
    $this->registerTask( 'edit', 'display' );
	}

	function display( )
	{
    switch($this->getTask()){
      case 'add':
      {
        JRequest::setVar( 'hidemainmenu', 1 );
        JRequest::setVar( 'layout', 'form'  );
        JRequest::setVar( 'view', 'testimonisal' );
        JRequest::setVar( 'edit', false  );
      } 
      break;
      case 'edit':
      {
        JRequest::setVar( 'hidemainmenu', 1 );
        JRequest::setVar( 'layout', 'form'  );
        JRequest::setVar( 'view', 'testimonisal' );
        JRequest::setVar( 'edit', true );
      }
      break;
    }
		parent::display();
	}

	function save()
	{
     $db =& JFactory::getDBO();
     $post = JRequest::get('post');	 

     $post['created'] = time();
     $post['packageid']=JRequest::getvar('tid');
     if($_FILES && $_FILES['ufile']['size']){
      require_once(JPATH_INCLUDES.DS."Upload.php");
      require_once(JPATH_INCLUDES.DS."ThumbImage.php");
      $fupload=new Upload(JPATH_ROOT.DS."uploads".DS."testimonisal","cndes");
      $return_obj=$fupload->run($_FILES['ufile']);
      $filename=$return_obj->_fileList['name'];      
      $filenewname=array("pic_name"=>$filename);
      $thum=new resizeimage(JPATH_SITE.DS."uploads".DS."testimonisal".DS.$return_obj->_fileList['name'],800, 800,0,JPATH_SITE.DS."uploads".DS."testimonisal".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
      $row->pic_name=null;
      $row->pic_path=null;
      $post = array_merge($post,$filenewname);	  	  
   }
     if($_FILES && $_FILES['image']['size']){
		  require_once(JPATH_INCLUDES.DS."Upload.php");
		  require_once(JPATH_INCLUDES.DS."ThumbImage.php");
		  $fupload=new Upload(JPATH_ROOT.DS."uploads".DS."testimonisal","cndes");
		  $return_obj_image=$fupload->run($_FILES['image']);
		  $imagename=$return_obj_image->_fileList['name'];
		  $filenewname=array('image'=>$imagename);
		  $thum=new resizeimage(JPATH_SITE.DS."uploads".DS."testimonisal".DS.$return_obj_image->_fileList['name'],800, 800,0,JPATH_SITE.DS."uploads".DS."testimonisal".DS."thumb".DS."thumb_".$return_obj_image->_fileList['name']);
		  $row->image=null;
		  $post = array_merge($post,$filenewname);
	  } 
	  var_dump($post);
     $model = $this->getModel('testimonisal');
	 //
     if ($model->store($post)) {
       $msg = JText::_('保存成功.' );
     } else {
       $msg = JText::_('保存失败：标题和图片不能为空.');
     }
     $this->setRedirect( 'index.php?option=com_testimonisals&view=testimonisals&packageid='.$post['tid'], $msg );   
	}

   
  function remove(){
    JRequest::checkToken() or jexit( 'Invalid Token' );
    $cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
    JArrayHelper::toInteger($cid);
    if (count( $cid ) < 1) {
      JError::raiseError(500, JText::_( 'Select an item to delete' ) );
    }   
    $model = $this->getModel('testimonisals');
    if($model->delete($cid)) {
      $this->setRedirect( 'index.php?option=com_testimonisals&view=testimonisals&packageid='.JRequest::getVar('tid'), 'Delete success.');   
    }else{
      $this->setRedirect( 'index.php?option=com_testimonisals&view=testimonisals&packageid='.JRequest::getVar('tid'), 'Delete failed.');   
    }   
  }

  function cancel()
  {
    $this->setRedirect( 'index.php?option=com_testimonisals&view=testimonisals&packageid='.JRequest::getVar('tid'));   
  }

  function returnCtours()
  {
  	global $mainframe, $option;  	
  	$prepage_state=$mainframe->getUserState($option.'_prepage_state');
  	if($prepage_state==1){
  		$this->setRedirect('index.php?option=com_cntours');
  	}elseif($prepage_state==2){
  		$this->setRedirect('index.php?option=com_ctours');
  	}
  	
  }

}
