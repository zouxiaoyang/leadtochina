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

require_once( JPATH_COMPONENT.DS.'controller.php' );

// Set the table directoryF:\AppServ\www\Joomla\administrator\components\com_province\tables
JTable::addIncludePath( JPATH_COMPONENT.DS.'tables' );

// Create the controller
$controller	= new MagrequestionController( );

$controller->execute( JRequest::getCmd( 'task' ) );
$controller->redirect();