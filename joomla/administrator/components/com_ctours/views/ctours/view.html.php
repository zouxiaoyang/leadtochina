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
class CtoursViewCtours extends JView
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

		$document->addscript("/Joomla/jquery"."/"."jquery-1.4.min.js");

		$poll =& JTable::getInstance('ctours', 'Table');
		// load the row from the db table
		if($edit) $poll->load( $uid );
		if ($poll->id == 0)$row->published	= 1;

		$options = array();
		if ($edit){
			$query = "SELECT * FROM #__cos_tours_package  WHERE id = '$uid' ORDER BY id";
			$db->setQuery($query);
			$options = $db->loadObjectList();
		}else{
			$poll->lag = 3600*24;
		}

		if(empty($options[0]->categorieid_str)==false){
			$cat_array=explode(",",$options[0]->categorieid_str);
		}
		$db->setQuery("SELECT id,title FROM jos_categories WHERE parent_id=0 and section='com_ctours' AND published=1");
		$this->category_list = $db->loadObjectList();
	
		if($options){
		  $db->setQuery("SELECT id,title FROM jos_categories WHERE parent_id=".$options[0]->category_parentid." AND published=1");
		  $this->sub_category_list = $db->loadObjectList();
		}
		
		$this->assignRef('poll',	$poll);
		$this->assignRef('options',	$options);
		//$this->assignRef('cat_str',$cat_str);
		
		$this->tags = $this->get('Tags');
		$this->sub_tags = $this->get('SubTags');
		parent::display($tpl);
	}
}