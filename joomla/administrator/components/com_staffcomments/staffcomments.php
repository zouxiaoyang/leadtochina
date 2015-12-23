<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Make sure the user is authorized to view this page

require_once( JPATH_COMPONENT.DS.'controller.php' );
$controller	= new StaffcommentsController( );

JTable::addIncludePath( JPATH_COMPONENT.DS.'tables' );
$controller->execute( JRequest::getCmd( 'task' ) );
$controller->redirect();
