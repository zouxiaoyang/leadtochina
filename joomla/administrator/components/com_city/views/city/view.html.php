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
class CityViewCity extends JView
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
		$edit=JRequest::getVar( 'edit', true );

		$poll =& JTable::getInstance('city', 'Table');
		// load the row from the db table
		if($edit and $cityid)
		$poll->load( $cityid );


		$city_cat=array(1=>"一类城市",2=>"二类城市",3=>"三类城市");

		
		$options = array();
		$city_option="";
		if($cityid){
			$city_sql="SELECT provinceid,hot FROM #__cos_city WHERE id=$cityid";
			$citys =$db->GetRow($city_sql);
			//$provinces = $db->loadResult();
	
			$provinceid=$citys[0];
			$hot=$citys[1];
			for($i=1;$i<=3;$i++){
			
				if($hot==$i){
					$hot_sel="selected='selected'";
				}else{
					$hot_sel="";
				}
				$city_option.="<option value=$i $hot_sel>{$city_cat[$i]}</option>";
			}
			
			$province_sql="SELECT name FROM #__cos_province WHERE id=$provinceid";
			$provinces=$db->GetRow($province_sql);
			$provinceName=$provinces[0];
		}elseif($uid){
			$province_sql="SELECT name FROM #__cos_province WHERE id=$uid";
			$provinces=$db->GetRow($province_sql);
			$provinceName=$provinces[0];
			$provinceid=$uid;	
		}

		if ($edit and $cityid)
		{
			//$poll->checkout( $user->get('id') );
			$query = 'SELECT * '
			. ' FROM #__cos_city'
			. ' WHERE id = '.(int) $cityid
			. ' ORDER BY id'
			;
			$db->setQuery($query);
			$options = $db->loadObjectList();
		}
		else
		{
			$poll->lag = 3600*24;
		}
$this->assignRef('city_option',	$city_option);
		$this->assignRef('poll',	$poll);
		$this->assignRef('options',	$options);
	$this->assignRef('provinceName',	$provinceName);
		$this->assignRef('provinceid',	$uid);	
		parent::display($tpl);

	}
}