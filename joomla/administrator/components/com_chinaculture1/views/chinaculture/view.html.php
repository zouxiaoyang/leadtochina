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
class ChinacultureViewChinaculture extends JView
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
		$document->addStyleSheet("/Joomla/SWFUpload1"."/"."css"."/"."default.css");
		$document->addscript("/Joomla/jquery"."/"."jquery-1.4.min.js");
		$document->addscript("/Joomla/SWFUpload1"."/"."swfupload"."/"."swfupload.js");
		$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."swfupload.queue.js");
		$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."fileprogress.js");
		$document->addscript("/Joomla/SWFUpload1"."/"."js"."/"."handlers.js");
		$poll =& JTable::getInstance('chinaculture', 'Table');
		// load the row from the db table
		if($edit)
		$poll->load( $uid );

		// fail if checked out not by 'me'
/*		
		if ($poll->isCheckedOut( $user->get('id') )) {
			$msg = JText::sprintf( 'DESCBEINGEDITTED', JText::_( 'The poll' ), $poll->title );

			$this->setRedirect( 'index.php?option='. $option, $msg );
		}
*/

		
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
			. ' FROM #__cos_chinaculture'
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

	/*	
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
	*/	

		if(empty($options[0]->catid)==false){
			
			$db->setQuery("SELECT parent_id,sce_cat_path,title FROM jos_categories WHERE id={$options[0]->catid}");
			$pcat_res=$db->query();
			$pcat_row=mysql_fetch_array($pcat_res);

			$parent_path=$pcat_row['sce_cat_path'];

			$parent_id_arr=explode(",",$parent_path);

			$parent_count=count($parent_id_arr);

			$par_id=$parent_id_arr[0];

			mysql_free_result($pcat_res);

			if(empty($parent_path)==false){
			

				switch($parent_count){
				
					case 1:
						break;
					case 2:
						$sec_parentid=$parent_id_arr[1];
						break;
					case 3:
						$sec_parentid=$parent_id_arr[1];
						$third_parentid=$parent_id_arr[2];
						break;
					case 4:
						$sec_parentid=$parent_id_arr[1];
						$third_parentid=$parent_id_arr[2];
						$four_parentid=$parent_id_arr[3];
						break;				
				
				}
		
		}else{
		
			$par_id=$options[0]->categoreid;
		}

		}
		$db->setQuery("SELECT id,title FROM jos_categories WHERE parent_id=0 AND section='com_chinaculture' AND published=1");
		$cat_res=$db->query();
		$cat_seled="";
		$cat_str='';
		while($cat_row=mysql_fetch_assoc($cat_res)){
			if(empty($par_id)==false and $par_id==$cat_row['id']){
				$cat_seled="selected='selected'";
			}else{
				$cat_seled="";
			}			
			$cat_str.="<option value={$cat_row['id']} $cat_seled>{$cat_row['title']}</option>";
		
		}
		mysql_free_result($cat_res);		
		










		$this->assignRef('sec_parentid',	$sec_parentid);
		$this->assignRef('third_parentid',	$third_parentid);
		$this->assignRef('four_parentid',	$four_parentid);
		$this->assignRef('poll',	$poll);
		$this->assignRef('options',	$options);
		$this->assignRef('pro_str',$pro_str);
		$this->assignRef('cat_str',$cat_str);
		parent::display($tpl);

	}
}