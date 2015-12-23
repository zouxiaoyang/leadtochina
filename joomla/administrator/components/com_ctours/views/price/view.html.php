<?php
/**
* @version		$Id: view.html.php 19343 2010-11-03 18:12:02Z ian $
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
class CtoursViewPrice extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;

		//$option是为组件名称
		$db					=& JFactory::getDBO();
		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$c = JRequest::getCmd( 'c');

		$uid 	= (int) @$cid[0];
		
		$sql="select price_serialize,price_serialize_1,price_serialize_2,price_include,price_exclude from #__cos_tours_package where id=$uid";
		$db->setQuery($sql);
		$this->price_obj=$db->loadObject();
		$this->price_list=unserialize($this->price_obj->price_serialize);
		$this->price_list_1=unserialize($this->price_obj->price_serialize_1);
		$this->price_list_2=unserialize($this->price_obj->price_serialize_2);
		
		$db->setQuery( "SELECT categorieid_str FROM jos_cos_tours_package WHERE id=$uid" );
		
		
		$row=$db->loadAssoc();

		$strpos=strpos($row['categorieid_str'],',');


		$package_class="";

		if($strpos===false){
			
			$db->setQuery( "SELECT parent_id,title FROM jos_categories WHERE id={$row['categorieid_str']}" );

			$c_row=$db->loadAssoc();
//假如是China Small Groups类型的话。换另一个模板显示
			if($c_row['parent_id']==68 OR $row['categorieid_str']==68){
			
				$package_class="small";
			}
			
		}

		$table_head="";

		if($package_class=="small"){


			$query = "SELECT *
			 FROM #__cos_tours_price1 WHERE packageid=$uid";
	
			$db->setQuery( $query );
			$priceList = $db->loadObjectList();
			
			$count=count($priceList);
			$table_head="			<tr>

			<td width=\"20\">
				<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll($count ); ?>);\" />
			</td>
			<td >
			Group Code
			</td>
			<td>
			Arrival Date
			</td>

			<td>
			Departure Date
			</td>
			<td>
			Double Occupancy
			</td>
			
			<td>
			Single Occupancy
			</td>
			<td>
			DATE
			</td>
		</tr>";		
		
		}else{
		



			$query = "SELECT *
			 FROM #__cos_tours_price WHERE packageid=$uid";
	
			$db->setQuery( $query );
			$priceList = $db->loadObjectList();			

		
			$count=count($priceList);

			$table_head="	<thead>
		<tr>
			<td >
				<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll($count ); ?>);\" />
			</td>


			<td >
				宾馆星级
			</td>
	
			<td>
			2-5
			</td>
			<td>
			6-9人
			</td>
			<td >
			10人
			</td>
		</tr>
	</thead>
";

		}


		$this->assignRef('user',		JFactory::getUser());
		//$this->assignRef('lists',		$lists);
		$this->assignRef('items',		$priceList);
		//$this->assignRef('pagination',	$pagination);
		$this->assignRef('cid',		$uid);
		$this->assignRef('c',$c);

		$this->assignRef('table_head',$table_head);

		$this->assignRef('package_class',$package_class);

		parent::display($tpl);
	}
}
