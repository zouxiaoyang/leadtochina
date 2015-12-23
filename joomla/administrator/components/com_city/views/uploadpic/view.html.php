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
class CityViewUploadpic extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$pid=JRequest::getVar("pid");
		$option = JRequest::getCmd( 'option');
		$c = JRequest::getCmd( 'c');
		$uid 	= (int) @$cid[0];
		//$edit=JRequest::getVar( 'edit', true );
		//$document	= & JFactory::getDocument();
		//$document->addStyleSheet("/Joomla/SWFUpload1"."/"."css"."/"."default.css");
		//$document->addscript("/Joomla/SWFUpload1"."/"."swfupload"."/"."swfupload.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."swfupload.queue.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."fileprogress.js");
		//$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."handlers.js");
		//$poll =& JTable::getInstance('packagepic', 'Table');
		// load the row from the db table
		//if($edit)
		//$poll->load( $uid );

		// fail if checked out not by 'me'


		$options = array();
/*
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

*/
		$db->setQuery("SELECT id,pic_dir,pic_path,pic_alt,title FROM jos_cos_citymap  WHERE cityid='$uid' ORDER BY id DESC");
		//$pro_res=$db->query();
		$piclist = $db->loadObjectList();
    $this->piclist = $piclist;
		

		$pic_count=count($piclist);
		$pic_str="<tr>";
		$j=1;
		for($i=1;$i<=$pic_count;$i++){

			if($i!=1 AND $i%2==1){
			
				$pic_str.="<tr>";
			}

			$temp_index=$i-1;
			$temp_dir="/".$piclist[$temp_index]->pic_dir;
			$temp_file_path=$temp_dir."thumb/thumb_".$piclist[$temp_index]->pic_path;
			$pic_str.="<td><img src=\"$temp_file_path\"><br /><a href=\"#\" onclick=\"javascript:del('../index.php?option=com_delpic&from=city&id={$piclist[$temp_index]->id}')\">删除</a></td>";
		
			if($i%2==0){
				$j=1;
				$pic_str.="</tr>";
			}

		$j++;
		
		}


		if($j==2){
		
			$pic_str.="<td></td></tr>";
		}
		$this->assignRef('cityid',	$uid);
		$this->assignRef('pid',	$pid);
		//$this->assignRef('options',	$options);
		//$this->assignRef('pro_str',$pro_str);
		$this->assignRef('pic_str',$pic_str);
		parent::display($tpl);

	}
}
