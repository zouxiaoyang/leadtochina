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
class CtoursViewAddprice extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;
		//$option是为组件名称
		$db					=& JFactory::getDBO();
		$document	= & JFactory::getDocument();
		$package_class=2;//城市套餐

		$packageid = JRequest::getVar( 'packageid');//套餐ID
		$edit=JRequest::getVar( 'edit', true );
		$c = JRequest::getCmd( 'c');
		$document->addStyleSheet("./js_calendar/css/iframe.css");
		$document->addStyleSheet("./js_calendar/css/calendar.css");

		$document->addStyleSheet("./js_calendar/css/dashboard.css");
		$document->addStyleSheet("./js_calendar/css/i-heart-ny.css");
		$document->addscript("./js_calendar/js/mootools.js");
		$document->addscript("./js_calendar/js/calendar.rc4.js");

		if($package_class=="small"){
			$table_name="jos_cos_tours_price1";
		$table_head="		<tr>
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
			操作
			</td>
		</tr>";
		}else{
			$table_name="jos_cos_tours_price";
		$table_head="		<tr>

			<td>
			2-5人
			</td>
			<td>
			6-9人
			</td>
			<td>
			10人以上
			</td>
			<td >
			宾馆星级
			</td>
			<td>
			操作
			</td>
		</tr>";
		}
		$isNew="";
		if($edit){
			$isNew="";
			$db->setQuery( "SELECT * FROM $table_name WHERE packageid=$packageid" );
			$pricelist = $db->loadObjectList();

			$db->setQuery( "SELECT price_include FROM jos_cos_tours_package WHERE id=$packageid" );
			$packe_price = $db->query();
			$price_include = mysql_fetch_assoc($packe_price);
			$price_in=$price_include['price_include'];
			mysql_free_result($packe_price);			
		
		}else{
			$isNew="yes";
			
		}

		//jimport('joomla.html.pagination');

		//$pagination = new JPagination( $total, $limitstart, $limit );


		//$db->setQuery( $query, $pagination->limitstart, $pagination->limit );
		//$rows = $db->loadObjectList();
		

		if ($db->getErrorNum())
		{
			echo $db->stderr();
			return false;
		}

		// state filter
		$lists['state']	= JHTML::_('grid.state',  $filter_state );

		// table ordering
		$lists['order_Dir']	= $filter_order_Dir;
		$lists['order']		= $filter_order;

		// search filter
		$lists['search']= $search;

		$this->assignRef('user',		JFactory::getUser());
		$this->assignRef('lists',		$lists);
		$this->assignRef('row',		$pricelist);
		
		$this->assignRef('isNew',		$isNew);
		$this->assignRef('c',		$c);
		$this->assignRef('table_head',		$table_head);
		$this->assignRef('package_class',		$package_class);
		$this->assignRef('packageid',		$packageid);
		$this->assignRef('pagination',	$pagination);
		$this->assignRef('price_in',	$price_in);
		parent::display($tpl);
	}
}
