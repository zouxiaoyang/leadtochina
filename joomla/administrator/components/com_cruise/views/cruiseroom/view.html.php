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
class CruiseViewCruiseroom extends JView
{
	function display($tpl = null)
	{
		global $mainframe;
		
		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();
		$document	= & JFactory::getDocument();
		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$post	= JRequest::get( 'post' );
		$option = JRequest::getCmd( 'option');
		$uid 	= (int) @$cid[0];
		$cruiseid= JRequest::getCmd( 'cruiseid');
		if(!$cruiseid){
			$cruiseid=$post['cruiseid'];
			
			}
		
		$db->setQuery("Select 	cruise_name from jos_cos_cruise where id=".	$cruiseid);
		$cruise_names = $db->loadObjectList();
		$cruise_name=$cruise_names[0]->cruise_name;
		//echo $cruise_name;exit;
		$query = 'SELECT * '
		. ' FROM #__cos_cruiseroom'
		. ' WHERE id = '.(int) $uid
		;
		$db->setQuery($query);
		$cruise = $db->loadObjectList();

		$this->assignRef('cruise',$cruise[0]);
		$this->assignRef('cruise_name',$cruise_name);
		$this->assignRef('cruiseid',$cruiseid);
		parent::display($tpl);

	}
}