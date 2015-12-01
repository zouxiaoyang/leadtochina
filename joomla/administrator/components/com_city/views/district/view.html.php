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
class CityViewDistrict extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$option = JRequest::getCmd( 'option');
		$cityid=JRequest::getVar( 'cityid', array(0), '', 'array' );
		$cityid=(int) @$cityid[0];
		$uid 	= (int) @$cid[0];

		$document	= & JFactory::getDocument();
		//$document->addStyleSheet("/Joomla/SWFUpload1"."/"."css"."/"."default.css");
		//$document->addscript("/Joomla/SWFUpload1"."/"."swfupload"."/"."swfupload.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."swfupload.queue.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."fileprogress.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."handlers.js");


		$db->setQuery("SELECT * FROM jos_cos_district WHERE cityid=$cityid");
		$dislist = $db->loadObjectList();

		$count=count($dislist);
		$dis_str="";
		for($i=0;$i<$count;$i++){
		
			$dis_str.="<tr><td border=1 colspan=2>{$dislist[$i]->name}</td></tr>";
		
		}
		//echo $uid;
		//exit;
		$this->assignRef('cityid',	$cityid);
		$this->assignRef('dis_str',	$dis_str);
		$this->assignRef('options',	$options);
		$this->assignRef('provinceName',	$provinceName);
		$this->assignRef('provinceid',	$uid);	
		parent::display($tpl);

	}
}