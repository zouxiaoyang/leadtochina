<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$controllerName = JRequest::getCmd( 'c', 'controller' );
if($controllerName == 'upload'){
	require_once( JPATH_COMPONENT.DS.'upload.php' );
	$controller	= new StaffControllerUpload( );
}else{
	require_once( JPATH_COMPONENT.DS.'controller.php' );
	$controller	= new StaffController( );
}
JTable::addIncludePath( JPATH_COMPONENT.DS.'tables' );
$controller->execute( JRequest::getCmd( 'task' ) );
$controller->redirect();