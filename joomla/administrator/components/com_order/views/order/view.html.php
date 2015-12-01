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
class OrderViewOrder extends JView
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

		$url_referer=$rows[0]->url_referer;
		//echo $url_referer;die;
		if($rows[0]->customizeid==0){

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

		}elseif($rows[0]->customizeid>0){
		
		
			$cusid=$rows[0]->customizeid;
			$tempoderNo=$rows[0]->orderNO;
			unset($rows);

			$query = 'SELECT *'
			. ' FROM jos_cos_customize_order  WHERE id='.$cusid;
			$db->setQuery( $query);
			$rows = $db->loadObjectList();
			//print_r($rows);die;
			$rows[0]->orderNO=$tempoderNo;
			$rows[0]->entry_date=$rows[0]->departuredate;
			if(empty($rows[0]->plans)==false){
			$rows[0]->destinations=$rows[0]->plans;
			}else{
				$rows[0]->destinations=$rows[0]->chooseplace;
			}
			$rows[0]->other_mes=$rows[0]->other_info;
			$rows[0]->usr_ip=$rows[0]->user_ip;
			//$rows[0]->url_referer=$rows[0]->url_referer;
			$rows[0]->hotel=$rows[0]->hotelclass;

			$contacts[0] = new stdClass();
			$contacts[0]->gender=$rows[0]->gender;
			$contacts[0]->full_name=$rows[0]->full_name;
			$contacts[0]->nationality=$rows[0]->nationality;
			$contacts[0]->email=$rows[0]->email;
			$contacts[0]->phone=$rows[0]->phone;
			$package_cate="Customize";
		}
		
		$rows[0]->url_referer=$url_referer;
			//print_r($rows);die;
		
		$this->assignRef('rows',	$rows);
		$this->assignRef('contacts',$contacts);
		$this->assignRef('package_cate',$package_cate);
		parent::display($tpl);

	}
}