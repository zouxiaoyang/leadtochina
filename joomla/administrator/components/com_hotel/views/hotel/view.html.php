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
class HotelViewHotel extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$option = JRequest::getCmd( 'option');
		$uid 	= (int) @$cid[0];
		$edit=JRequest::getVar( 'edit', true );
		$document	= & JFactory::getDocument();
		//$document->addStyleSheet("/Joomla/SWFUpload1"."/"."css"."/"."default.css");
		//$document->addscript("/Joomla/SWFUpload1"."/"."swfupload"."/"."swfupload.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."swfupload.queue.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."fileprogress.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."handlers.js");
		$poll =& JTable::getInstance('hotel', 'Table');
		// load the row from the db table
		if($edit)
		$poll->load( $uid );

		// fail if checked out not by 'me'
		if ($poll->isCheckedOut( $user->get('id') )) {
			$msg = JText::sprintf( 'DESCBEINGEDITTED', JText::_( 'The poll' ), $poll->title );

			$this->setRedirect( 'index.php?option='. $option, $msg );
		}

		if ($poll->id == 0)
		{
			// defaults
			$row->published	= 1;
		}

		$options = array();

		if ($edit)
		{
			//$poll->checkout( $user->get('id') );
			$query = 'SELECT * '
			. ' FROM #__cos_hotel'
			. ' WHERE id = '.(int) $uid
			. ' ORDER BY id'
			;
			$db->setQuery($query);
			$options = $db->loadObjectList();



			$query1 = 'SELECT * '
			. ' FROM #__cos_room_type'
			. ' WHERE hotelid = '.(int) $uid
			. ' ORDER BY id'
			;
			$db->setQuery($query1);
			$roominfo = $db->loadObjectList();


			$room_count=count($roominfo);
			$hotelroom_str="";
			for($i=0;$i<$room_count;$i++){
				if($roominfo[$i]->breakfast==1){
				
					$breakcheck=" checked";
				}else{
					$breakcheck="";
				}
				$hotelroom_str.="<tr><td><input type=\"text\" id=\"room[".$roominfo[$i]->id."]\" name=\"room[".$roominfo[$i]->id."]\" value=\"{$roominfo[$i]->name}\"  size=20></td><td><input type=\"text\" id=\"price[".$roominfo[$i]->id."]\" name=\"price[".$roominfo[$i]->id."]\" value=\"{$roominfo[$i]->price}\"  size=20></td><td><input type=\"checkbox\" id=\"breakfast[".$roominfo[$i]->id."]\" name=\"breakfast[".$roominfo[$i]->id."]\" value=1 {$breakcheck}></td><td></td></tr>";
			
			}


		}
		else
		{
			$poll->lag = 3600*24;
		}

		$db->setQuery("SELECT id,name FROM jos_cos_province ORDER BY id ASC");
		$pro_res=$db->query();
		$pro_seled="";
		$pro_str="";
		while ($pro_row=mysql_fetch_assoc($pro_res)){
			if(empty($options)==false and $options[0]->provinceid==$pro_row['id']){
				$pro_seled="selected='selected'";
			}else{
				$pro_seled="";
			}
			$pro_str.="<option value={$pro_row['id']} $pro_seled>{$pro_row['name']}</option>";
		}
		mysql_free_result($pro_res);



		$db->setQuery("SELECT id,title FROM jos_categories WHERE section='com_hotel' AND published=1");
		$cat_res=$db->query();
		$cat_seled="";
		$cat_str='';
		while($cat_row=mysql_fetch_assoc($cat_res)){
			if(empty($options)==false and $options[0]->hotel_grade==$cat_row['id']){
				$cat_seled="selected='selected'";
			}else{
				$cat_seled="";
			}			
			$cat_str.="<option value={$cat_row['id']} $cat_seled>{$cat_row['title']}</option>";
		
		}
		mysql_free_result($cat_res);




		$db->setQuery("SELECT id,title FROM jos_categories WHERE section='com_brand' AND published=1");
		$cat_res=$db->query();
		$cat_seled="";
		$brand_str='';
		while($cat_row=mysql_fetch_assoc($cat_res)){
			if(empty($options)==false and $options[0]->brandid==$cat_row['id']){
				$cat_seled="selected='selected'";
			}else{
				$cat_seled="";
			}			
			$brand_str.="<option value={$cat_row['id']} $cat_seled>{$cat_row['title']}</option>";
		
		}
		mysql_free_result($cat_res);





		//$this->assignRef('poll',	$poll);
		$this->assignRef('options',	$options);
		$this->assignRef('edit',	$edit);
		$this->assignRef('pro_str',$pro_str);
		$this->assignRef('cat_str',$cat_str);

		$this->assignRef('brand_str',$brand_str);

		$this->assignRef('hotelroom_str',$hotelroom_str);


		parent::display($tpl);

	}
}