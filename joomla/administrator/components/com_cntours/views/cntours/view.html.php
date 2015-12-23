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
class CntoursViewCntours extends JView
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

		$poll =& JTable::getInstance('cntours', 'Table');
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
			. ' FROM #__cos_tours_package'
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

		$pack_array=array("Budget"=>"Budget","Standard"=>"Standard","Luxury"=>"Luxury");
		$p_grade_sel="";
		$grade_str="<select name=\'package_grade\' id=\'package_grade\' onchange=\'GetRoutes(this.options[this.selectedIndex].value);\'><option value=0>请选择套餐等级</option>";


		$packGrade=$options['0']->package_grade;

		if(isset($options)){
			foreach($pack_array AS $key=>$val){

				if($key==$packGrade){

					$p_grade_sel="selected=\'selected\'";

				}else{

					$p_grade_sel="";
				}
				$grade_str.="<option value=\'$key\' $p_grade_sel>$val</option>";
			}
			$grade_str.="</select>";
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
	if(empty($options[0]->categorieid_str)==false){
			$cat_array=explode(",",$options[0]->categorieid_str);
		}


		$category_id=$options[0]->categorieid_str;
		if($category_id>0){
			$db->setQuery("SELECT parent_id FROM jos_categories WHERE id=$category_id AND section='com_cntours' AND published=1");
			$sup_res=$db->query();

			$sup_row=mysql_fetch_assoc($sup_res);

			$sup_id=$sup_row['parent_id'];

			mysql_free_result($sup_res);
		}

		$db->setQuery("SELECT id,parent_id,title FROM jos_categories WHERE parent_id=0 AND section='com_cntours' AND published=1");
		$cat_res=$db->query();
		$cat_seled="";
		$cat_str='';
		$blank="&nbsp;&nbsp;&nbsp;&nbsp;";

		while($cat_row=mysql_fetch_assoc($cat_res)){
			
				if($options[0]->category_parentid==$cat_row['id'] OR $sup_id==$cat_row['id']){
					$cat_seled="selected='selected'";
				}else{
					$cat_seled="";
				}

			$cat_str.="<option value={$cat_row['id']} $cat_seled>{$cat_row['title']}</option>";
			}
		
		mysql_free_result($cat_res);		
		JFilterOutput::objectHTMLSafe( $options, ENT_QUOTES, array("route_Intro","tour_intro","note") );
		


		$this->assignRef('poll',	$poll);
		$this->assignRef('options',	$options);
		$this->assignRef('grade_str',	$grade_str);


		//$this->assignRef('pro_str',$pro_str);
		$this->assignRef('cat_str',$cat_str);
		parent::display($tpl);

	}
}
