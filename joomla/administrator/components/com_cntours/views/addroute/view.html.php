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
class CntoursViewAddroute extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();
		
		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$d     =JRequest::getVar( 'd',0,'','int');
		$packageid =JRequest::getVar( 'packageid',0,'','int');

		$option = JRequest::getCmd( 'option');
		$c = JRequest::getCmd( 'c');


		$uid 	= (int) @$cid[0];

		$edit=JRequest::getVar( 'edit', true );
		$document	= & JFactory::getDocument();

		//$document->addscript("/Joomla/jquery"."/"."jquery-1.4.min.js");

		//$poll =& JTable::getInstance('cntours', 'Table');
		// load the row from the db table
		///if($edit)
		//$poll->load( $uid );

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
			. ' FROM #__cos_tours_des'
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

		if(!$edit){
			$query1 = 'SELECT * '
			. ' FROM #__cos_tours_des'
			. ' WHERE packageid = '.(int) $packageid
			
			;
			$db->setQuery($query1);
			$p_res=$db->query();
			$rows_num=$db->getNumRows($p_res);
			$d=$rows_num+1;

		}

	//循环获取住宿标准
	$hot_arr=array("136"=>"3 Star","137"=>"4 Star","138"=>"5 Star");
	$hotel_str="";
	$hotel_sel="";
	foreach($hot_arr AS $key=>$val){
		if(empty($options)==false and $options[0]->hotel_grade==$key){
			$hotel_sel="selected='selected'";
		}else{
			$hotel_sel="";
		}

		$hotel_str.="<option value=\"{$key}\" $hotel_sel>{$val}</option>";

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
		
	$db->setQuery("SELECT categorie_name_str FROM jos_cos_tours_package WHERE id=$packageid");
	$cat_res=$db->query();
	$cat_row=mysql_fetch_assoc($cat_res);
	$cat_str=$cat_row['categorie_name_str'];



		mysql_free_result($cat_res);		
		
		$this->assignRef('poll',	$poll);
		$this->assignRef('options',	$options);
		$this->assignRef('hotel_str',$hotel_str);
		$this->assignRef('cat_str',$cat_str);
		$this->assignRef('d',$d);
		$this->assignRef('c',$c);
		$this->assignRef('packageid',$packageid);
		parent::display($tpl);

	}
}