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
class StaffController extends JController
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
        JRequest::setVar( 'view', 'staff' );
        JRequest::setVar( 'edit', false  );
      } 
      break;
      case 'edit':
      {
        JRequest::setVar( 'hidemainmenu', 1 );
        JRequest::setVar( 'layout', 'form'  );
        JRequest::setVar( 'view', 'staff' );
        JRequest::setVar( 'edit', true );
      }
      break;
    }    

    $view=JRequest::getCmd('view');
    if(empty($view)) {
			JRequest::setVar('view', 'staffs');
		}
		parent::display();
	}

	function save()
	{
     $db =& JFactory::getDBO();
     $post = JRequest::get('post');
     $post['created'] = time();
			if($_FILES['pic']['size']){
					require_once(JPATH_INCLUDES.DS."Upload.php");
					require_once(JPATH_INCLUDES.DS."ThumbImage.php");
					$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."staff","staff");
					$return_obj=$fupload->run($_FILES['pic']);
		
					$fnewpath="uploads/staff/";
					$filename=$return_obj->_fileList['name'];
					$filenewname=array("pic_name"=>$filename,"pic_dir"=>$fnewpath);
					$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."staff".DS.$return_obj->_fileList['name'],195,195,0,JPATH_SITE.DS."uploads".DS."staff".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
					$post = array_merge($post,$filenewname);
				}
     $model = $this->getModel('staff');
     if ($model->store($post)) {
       $msg = JText::_('保存成功.' );
     } else {
       $msg = JText::_('保存失败：姓名和简介不能为空.');
     }
     $this->setRedirect( 'index.php?option=com_staff', $msg );   
	}

   
  function remove(){
    JRequest::checkToken() or jexit( 'Invalid Token' );
    $cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
    JArrayHelper::toInteger($cid);
    if (count( $cid ) < 1) {
      JError::raiseError(500, JText::_( 'Select an item to delete' ) );
    }   
    $model = $this->getModel('staffs');
    if($model->delete($cid)) {
      $this->setRedirect( 'index.php?option=com_staff', 'Delete success.');   
    }else{
      $this->setRedirect( 'index.php?option=com_staff', 'Delete failed.');   
    }   
  }

  function cancel()
  {
    $this->setRedirect( 'index.php?option=com_staff');   
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
