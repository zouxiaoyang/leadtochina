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
class TotalorderViewOrders extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;
		//$option是为组件名称
		$db					=& JFactory::getDBO();
		
		$document =& JFactory::getDocument();

		$document->addStyleSheet("/js_calendar/css/calendar.css");
		$document->addStyleSheet("/css/com_toursOder/component.css");
		$document->addStyleSheet("/js_calendar/css/dashboard.css");
		$document->addStyleSheet("/js_calendar/css/i-heart-ny.css");
		$document->addScript("/js_calendar/js/administrator/mootools.js");
		$document->addScript("/js_calendar/js/administrator/calendar.rc4.js");

		$search_sql="";
		$executor 	= JRequest::getVar('executor');
		$var_list=array();
		if(empty($executor)==false){
		
			$search_sql.=" AND executor LIKE '%".addslashes($executor)."%' ";
			$var_list['executor']=$executor;
		
		}
		date_default_timezone_set('Asia/Shanghai');

		$starttime 	= JRequest::getVar('starttime');
		$endtime 	= JRequest::getVar('endtime');

		if(empty($starttime)==false){
			$var_list['starttime']=$starttime;

			$start_arr=explode("/",$starttime);
			$start_mktime=mktime(0,0,0,$start_arr[0],$start_arr[1],$start_arr[2]);		

			if(empty($endtime)==false){
			

				$var_list['endtime']=$endtime;
				$end_arr=explode("/",$endtime);
				$end_mktime=mktime(23,59,59,$end_arr[0],$end_arr[1],$end_arr[2]);

				$search_sql.=" AND (dateline >=$start_mktime AND  dateline <=$end_mktime) ";
			
			
			}else{//查找当天的
			
				$end_time=$start_mktime+(24*3600);

				$search_sql.=" AND (dateline >=$start_mktime AND  dateline <=$end_time) ";
			}
		
		}

		if(empty($endtime)==false AND empty($starttime)){
		
			$this->setError(JText::_('请输入开始时间'));
			exit;
		
		}

		$sourcesite 	= JRequest::getVar('sourcesite');

		if(empty($sourcesite)==false){
			$var_list['sourcesite']=$sourcesite;
			$search_sql.=" AND submit_source LIKE '%".$sourcesite."%'";
		
		}

		$order_state 	= JRequest::getVar('orderstate',-1,'','int');
		
		
		if($order_state!=-1){
		
			$search_sql.=" AND order_state=$order_state ";
		
		}

		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );



		$orderby 	= ' ORDER BY id DESC';

		$query = 'SELECT COUNT(id)'
		. ' FROM #__total_order WHERE 1 '.$search_sql;
		;
		$db->setQuery( $query );
		$total = $db->loadResult();

		jimport('joomla.html.pagination');
		$pagination = new JPagination( $total, $limitstart, $limit );

		$query = 'SELECT *'
		. ' FROM #__total_order WHERE 1 '.$search_sql 
		. $orderby
		;
		//echo $query;
			
		//exit;
		$db->setQuery( $query, $pagination->limitstart, $pagination->limit );
		$rows = $db->loadObjectList();

		if ($db->getErrorNum())
		{
			echo $db->stderr();
			return false;
		}

		// state filter


		$this->assignRef('user',		JFactory::getUser());
		$this->assignRef('var_list',		$var_list);
		$this->assignRef('items',		$rows);
		$this->assignRef('pagination',	$pagination);

		parent::display($tpl);
	}
}
