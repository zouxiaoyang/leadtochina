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
class ToursOderViewToursOder extends JView
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
		//$document->addStyleSheet("/Joomla/SWFUpload1"."/"."css"."/"."default.css");
		//$document->addscript("/Joomla/SWFUpload1"."/"."swfupload"."/"."swfupload.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."swfupload.queue.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."fileprogress.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."handlers.js");
		//$poll =& JTable::getInstance('hotel', 'Table');
		// load the row from the db table
		$query = 'SELECT *'
		. ' FROM jos_cos_tours_order  WHERE id='.$id;
		$db->setQuery( $query);
		$rows = $db->loadObjectList();


		$packageid=$rows[0]->packageid;
		if($packageid>0){
			$query = 'SELECT package_type'
			. ' FROM jos_cos_tours_package  WHERE id='.$packageid;
			$db->setQuery( $query);

		$package_res = $db->query();

		$pack_row=mysql_fetch_assoc($package_res);

			$package_cate=$pack_row['package_type'];
			mysql_free_result($package_res);
		}

		$contactid=$rows[0]->contactid;

		$query = 'SELECT *'
		. ' FROM jos_cos_user_contact WHERE id='.$contactid;
		$db->setQuery( $query);
		$contacts = $db->loadObjectList();

		$this->assignRef('rows',	$rows);
		$this->assignRef('contacts',$contacts);
		$this->assignRef('package_cate',$package_cate);
		parent::display($tpl);

	}
}