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
class UploadpicViewUploadpic extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$option = JRequest::getCmd( 'option');
		$c = JRequest::getCmd( 'c');
		$uid 	= (int) @$cid[0];

		$options = array();

		$db->setQuery("SELECT id,pic_dir ,pic_path FROM jos_cos_contentpic  WHERE contentid=$uid ORDER BY id DESC");
		//$pro_res=$db->query();
		$piclist = $db->loadObjectList();
		
		$pic_count=count($piclist);
		$pic_str="<tr>";
		$j=1;
		for($i=1;$i<=$pic_count;$i++){

			if($i!=1 AND $i%2==1){
			
				$pic_str.="<tr>";
			}

			$temp_index=$i-1;
			$temp_dir="/".$piclist[$temp_index]->pic_dir;
			$temp_file_path=$temp_dir.$piclist[$temp_index]->pic_path;
			$pic_str.="<td><img src=\"$temp_file_path\"><br /><a href=\"#\" onclick=\"javascript:del('../administrator/index.php?option=com_delpic&from=content&id={$piclist[$temp_index]->id}')\">删除</a></td>";
		
			if($i%2==0){
				$j=1;
				$pic_str.="</tr>";
			}

		$j++;
		
		}


		if($j==2){
		
			$pic_str.="<td></td></tr>";
		}
		$this->assignRef('contentid',	$uid);
		//$this->assignRef('options',	$options);
		//$this->assignRef('pro_str',$pro_str);
		$this->assignRef('pic_str',$pic_str);
		parent::display($tpl);

	}
}
