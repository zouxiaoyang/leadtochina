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
class ClienttravelViewClienttravel extends JView
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

		//$document->addscript("/Joomla/jquery"."/"."jquery-1.4.min.js");

		$poll =& JTable::getInstance('clienttravel', 'Table');
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
			. ' FROM #__cos_client_package'
			. ' WHERE id = '.(int) $uid
			. ' ORDER BY id'
			;
			$db->setQuery($query);
			$options = $db->loadObjectList();
		}


		if(empty($options[0]->ufile)==false){
		
			$picpath="/".$options[0]->filedir."thumb/thumb_".$options[0]->ufile;
			$imgstr="<img src=\"".$picpath."\" >";
		}else{
			$imgstr="";
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



	
		JFilterOutput::objectHTMLSafe( $options, ENT_QUOTES, array("pinclude","tour_intro","notice") );
		


		$this->assignRef('imgstr',	$imgstr);
		$this->assignRef('options',	$options);
		$this->assignRef('grade_str',	$grade_str);


		//$this->assignRef('pro_str',$pro_str);
		$this->assignRef('cat_str',$cat_str);
		parent::display($tpl);

	}
}