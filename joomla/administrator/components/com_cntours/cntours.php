<?php
/**
* @version		$Id: poll.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	Polls
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Make sure the user is authorized to view this page

/*先注释掉这段权限判断的。
$user = & JFactory::getUser();
if (!$user->authorize( 'com_province', 'manage' )) {

	$mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}
*/
$controllerName = JRequest::getCmd( 'c', 'controller' );

if($controllerName == 'route') {
	
	require_once( JPATH_COMPONENT.DS.$controllerName.'.php' );
	$controller	= new CntoursControllerRoute( );

}elseif($controllerName == 'price'){
	require_once( JPATH_COMPONENT.DS.$controllerName.'.php' );
	$controller	= new CntoursControllerPrice( );
}elseif($controllerName == 'upload'){

	require_once( JPATH_COMPONENT.DS.$controllerName.'.php' );
	$controller	= new CntoursControllerUpload( );
}else{

	require_once( JPATH_COMPONENT.DS.'controller.php' );
	$controller	= new CntoursController( );
}



// Set the table directoryF:\AppServ\www\Joomla\administrator\components\com_province\tables
JTable::addIncludePath( JPATH_COMPONENT.DS.'tables' );

// Create the controller


$controller->execute( JRequest::getCmd( 'task' ) );
$controller->redirect();