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

jimport( 'joomla.application.component.controller' );

/**
 * @package		Joomla
 * @subpackage	Config
 */
class HotelorderController extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{

		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');

		$this->registerTask( 'edit', 		'display');
		$this->registerTask( 'add' , 		'display' );

	}

	function display( )
	{
		switch($this->getTask())
		{			
			case 'showOder'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'hotelorder'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'hotel'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'hotelorders');
		};

		parent::display();
	}

	function remove()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();
		$cid	= JRequest::getVar( 'cid', array(), '', 'array' );
		$user 	=& JFactory::getUser();

		$usergroup = $user->name;
		if($usergroup!="Administrator"){
			echo "<script>alert('您无权删除该订单！请系统管理员协助。');history.go(-1);</script>";
			exit;
		}
		
		JArrayHelper::toInteger($cid);
		$msg = '';

		for ($i=0, $n=count($cid); $i < $n; $i++)
		{
			$poll =& JTable::getInstance('hotelorder', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_hotelorder', $msg );
	}
	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$post	= JRequest::get('post');
		$db		=& JFactory::getDBO();
		$id= $post['id'];
		//echo $id;exit;
		$order_state=$post['ostate'];
		//echo $post['order_state'];	exit;
		$query="UPDATE jos_cos_hotel_order SET order_state=".$order_state." WHERE id=".$id;
		$db->setQuery( $query);
		//echo $query;
		//exit;
		if($db->query()){
			
		$msg = JText::_( 'hotelorder Saved' );   
		}else{
		$msg = JText::_( 'hotelorder Error' );   
		} 
				
		$link = 'index.php?option=com_hotelorder';
		$this->setRedirect($link, $msg);
	}
	
	
	
	function cancel()
	{

		$this->setRedirect( 'index.php?option=com_hotelorder' );
	}
}