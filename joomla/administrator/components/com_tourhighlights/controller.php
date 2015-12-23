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
class TourhighlightsController extends JController
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
        JRequest::setVar( 'view', 'tourhighlight' );
        JRequest::setVar( 'edit', false  );
      } 
      break;
      case 'edit':
      {
        JRequest::setVar( 'hidemainmenu', 1 );
        JRequest::setVar( 'layout', 'form'  );
        JRequest::setVar( 'view', 'tourhighlight' );
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
     $post['created_at'] = time();

     if($_FILES && $_FILES['ufile']['size']){
      require_once(JPATH_INCLUDES.DS."Upload.php");
      require_once(JPATH_INCLUDES.DS."ThumbImage.php");
      $fupload=new Upload(JPATH_ROOT.DS."uploads".DS."tour_highlight","cndes");
      $return_obj=$fupload->run($_FILES['ufile']);
      $filename=$return_obj->_fileList['name'];
      
      $filenewname=array("pic"=>$filename);
      $thum=new resizeimage(JPATH_SITE.DS."uploads".DS."tour_highlight".DS.$return_obj->_fileList['name'],169, 119,0,JPATH_SITE.DS."uploads".DS."tour_highlight".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
      $row->pic_dir=null;
      $row->pic_path=null;
      $post = array_merge($post,$filenewname);
    }
      
     $model = $this->getModel('tourhighlight');
     if ($model->store($post)) {
       $msg = JText::_('保存成功.' );
     } else {
       $msg = JText::_( 'Error! 保存失败.' );
     }
     $this->setRedirect( 'index.php?option=com_tourhighlights&view=tourhighlights&cid='.$post['tid'], $msg );   
	}

   
  function remove(){
    // Check for request forgeries
    JRequest::checkToken() or jexit( 'Invalid Token' );

    $cid = JRequest::getVar( 'ids', array(), 'post', 'array' );
    JArrayHelper::toInteger($cid);
    if (count( $cid ) < 1) {
      JError::raiseError(500, JText::_( 'Select an item to delete' ) );
    }   
    $model = $this->getModel('tourhighlight');
    if($model->delete($cid)) {
      $this->setRedirect( 'index.php?option=com_tourhighlights&view=tourhighlights&cid='.JRequest::getVar('tid'), 'Delete success.');   
    }else{
      $this->setRedirect( 'index.php?option=com_tourhighlights&view=tourhighlights&cid='.JRequest::getVar('tid'), 'Delete failed.');   
    }   
  }

  function cancel()
  {
    $this->setRedirect( 'index.php?option=com_tourhighlights&view=tourhighlights&cid='.JRequest::getVar('tid'));   
  }

  function returnCtours()
  {
    $this->setRedirect('index.php?option=com_ctours');   
  }

}
