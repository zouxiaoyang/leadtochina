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
class StaffcommentsController extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array()){
		parent::__construct( $default );
	}

	function display(){
		parent::display();
	}
	   
  function remove(){
    JRequest::checkToken() or jexit( 'Invalid Token' );
    $cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
    JArrayHelper::toInteger($cid);
    if (count( $cid ) < 1) {
      JError::raiseError(500, JText::_( 'Select an item to delete' ) );
    }   
    $model = $this->getModel('staffcomments');
    if($model->delete($cid)) {
      $this->setRedirect( 'index.php?option=com_staffcomments&view=staffcomments', 'Delete success.');   
    }else{
      $this->setRedirect( 'index.php?option=com_staffcomments&view=staffcomments', 'Delete failed.');   
    }   
  }
  
  function change_status(){
  	$db=&JFactory::getDbo();
  	$id=JRequest::getInt('id');
  	$status=JRequest::getInt('status');
  	$value=0;
  	if($status==0){
  		$value=1;
  	}
  	$sql="update #__cos_staffcomments set status='$value' where id='$id'";
  	$db->setQuery($sql);
  	if($db->query()){
  		echo '1';
  	}else{
  		echo '0';  		
  	}
  	exit;
  }
}
