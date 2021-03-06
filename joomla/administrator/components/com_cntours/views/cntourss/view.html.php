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
class CntoursViewCntourss extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;
		//$option是为组件名称
		$db					=& JFactory::getDBO();
		$filter_order		= $mainframe->getUserStateFromRequest( "$option.filter_order",		'filter_order',		'm.id',	'cmd' );
		$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir",	'filter_order_Dir',	'',		'word' );
		$filter_state		= $mainframe->getUserStateFromRequest( "$option.filter_state",		'filter_state',		'',		'word' );
	
		$search				= $mainframe->getUserStateFromRequest( "$option.search",			'search',			'',		'string' );
		$cat_id_search	= $mainframe->getUserStateFromRequest( "$option.categoried_str", 'categoried_str', '', 'int' );
		if (strpos($search, '"') !== false) {
			$search = str_replace(array('=', '<'), '', $search);
		}
		$search = JString::strtolower($search);

		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );

		$where = array();
		$where[] = 'package_type = 1';
		if ( $filter_state )
		{
			if ( $filter_state == 'P' )
			{
				$where[] = 'm.published = 1';
			}
			else if ($filter_state == 'U' )
			{
				$where[] = 'm.published = 0';
			}
		}
		if ($search)
		{
			//$where[] = 'LOWER(m.name) LIKE '.$db->Quote( '%'.$db->getEscaped( $search, true ).'%', false );
      $where[] = "(m.name like '%$search%' or m.package_code like '%$search%')";
		}
		
		if($cat_id_search){
			$where[]="  category_parentid =$cat_id_search";
		}

		$where 		= ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );

		// sanitize $filter_order
		if (!in_array($filter_order, array('m.title', 'm.published', 'a.ordering', 'catname', 'm.voters', 'numoptions', 'm.lag', 'm.id'))) {
			$filter_order = 'm.id';
		}

		if (!in_array(strtoupper($filter_order_Dir), array('ASC', 'DESC'))) {
			$filter_order_Dir = '';
		}

		$orderby 	= ' ORDER BY m.id DESC';

		$query = 'SELECT COUNT(m.id)'
		. ' FROM #__cos_tours_package  AS m'
		. $where
		;
		$db->setQuery( $query );
		$total = $db->loadResult();

		jimport('joomla.html.pagination');
		$pagination = new JPagination( $total, $limitstart, $limit );

		$query = 'SELECT m.*'
		. ' FROM #__cos_tours_package AS m'
		. $where
		
		. $orderby
		;
		$db->setQuery( $query, $pagination->limitstart, $pagination->limit );
		$rows = $db->loadObjectList();
		

		if ($db->getErrorNum())
		{
			echo $db->stderr();
			return false;
		}

		//查询分类
		$db->setQuery("SELECT id,parent_id,title FROM jos_categories WHERE parent_id=0 AND section='com_cntours' AND published=1");
		$this->categories=$db->loadObjectList();
		//var_dump($this->categories);	
		// state filter
		$lists['state']	= JHTML::_('grid.state',  $filter_state );

		// table ordering
		$lists['order_Dir']	= $filter_order_Dir;
		$lists['order']		= $filter_order;

		// search filter
		$lists['search']= $search;

		$this->assignRef('user',		JFactory::getUser());
		$this->assignRef('lists',		$lists);
		$this->assignRef('items',		$rows);
		$this->assignRef('pagination',	$pagination);
		$this->assignRef('cat_id_search',	$cat_id_search);
		$this->assignRef('total', $total);
		parent::display($tpl);
	}
}
