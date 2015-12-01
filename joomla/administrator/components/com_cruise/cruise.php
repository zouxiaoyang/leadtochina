<?php
/**
* @version        $Id: weblinks.php 14401 2010-01-26 14:10:00Z louis $
* @package        Joomla
* @subpackage    Feedback
* @copyright    Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license        GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/*
 * Make sure the user is authorized to view this page
 
$user = & JFactory::getUser();
if (!$user->authorize( 'com_feedback', 'manage' )) {
    $mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}*/
// Require the base controller
$controllerName = JRequest::getCmd( 'c', 'controller' );

if($controllerName=="route"){
	require_once( JPATH_COMPONENT.DS.$controllerName.'.php' );
	$controller	= new CruiseControllerRoute( );
	
	}
else if($controllerName=="cruiseact"){
	require_once( JPATH_COMPONENT.DS.$controllerName.'.php' );
	$controller	= new CruiseControllerCruiseact( );

	}	
else if($controllerName=="cruiseroom"){
	require_once( JPATH_COMPONENT.DS.$controllerName.'.php' );
	$controller	= new CruiseControllerCruiseroom( );

	}	
else if($controllerName == 'upload') {
	
	require_once( JPATH_COMPONENT.DS.$controllerName.'.php' );
	$controller	= new CruiseControllerUpload( );

}	
	else{
		
require_once (JPATH_COMPONENT.DS.'controller.php');
$controller    = new CruiseController( );}

JTable::addIncludePath( JPATH_COMPONENT.DS.'tables' );
// Perform the Request task
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();