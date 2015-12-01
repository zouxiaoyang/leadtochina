<?php
/**
* @version		$Id: view.html.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	Config
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

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Poll component
 *
 * @static
 * @package		Joomla
 * @subpackage	Poll
 * @since 1.0
 */
class FlicruorderViewFlicruorder extends JView
{
	function display($tpl = null)
	{
		global $mainframe;
		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();
		$id 	= JRequest::getVar( 'orderid');
		$option = JRequest::getCmd( 'option');
		//$uid 	= (int) @$cid[0];
		$edit=JRequest::getVar( 'edit', true );
		date_default_timezone_set('Asia/Shanghai');
		$document	= & JFactory::getDocument();
		$query = 'SELECT *'
		. ' FROM jos_cos_cruflight_order  WHERE id='.$id;
		$db->setQuery( $query);
		$rows = $db->loadObjectList();
		$this->assignRef('rows',	$rows);
		parent::display($tpl);

	}
}