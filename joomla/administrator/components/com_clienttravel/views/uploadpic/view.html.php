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
class ClienttravelViewUploadpic extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$option = JRequest::getCmd( 'option');
		$id=JRequest::getCmd('id');
		$c = JRequest::getCmd( 'c');
		$uid 	= (int) @$cid[0];



		$options = array();


		if(empty($id)){
		$db->setQuery("SELECT id,pic_alt,pic_dir ,pic_path FROM jos_cos_clientpic WHERE c_packageid=$uid ORDER BY id DESC");

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
			$temp_file_path=$temp_dir."thumb/thumb_".$piclist[$temp_index]->pic_path;
			$pic_str.="<td><img src=\"$temp_file_path\"><br />
			<p>{$piclist[$temp_index]->pic_alt}</p>
			<a href=\"#\" onclick=\"javascript:del('../index.php?option=com_delpic&from=clientpic&id={$piclist[$temp_index]->id}')\">删除</a> <a href=\"index.php?option=com_clienttravel&c=upload&task=editpic&cid[]=$uid&id={$piclist[$temp_index]->id}\">编辑</a></td>";
		
			if($i%2==0){
				$j=1;
				$pic_str.="</tr>";
			}

		$j++;
		
		}


		if($j==2){
		
			$pic_str.="<td></td></tr>";
		}
		
		}elseif(empty($id)==false){
		
			$db->setQuery("SELECT id,pic_alt,pic_dir ,pic_path FROM jos_cos_clientpic WHERE id=$id");

			$options = $db->loadObjectList();

			$temp_dir="/".$options[0]->pic_dir;

			$temp_file_path=$temp_dir."thumb/thumb_".$options[0]->pic_path;

			$pic_str="<tr><td colspan=2><img src=\"$temp_file_path\"></td></tr>";


		}
		$this->assignRef('packageid',	$uid);
		$this->assignRef('options',	$options);
		$this->assignRef('id',$id);
		$this->assignRef('pic_str',$pic_str);
		parent::display($tpl);

	}
}