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
class CityViewDefault1 extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;
		//$option是为组件名称
		
		
		$cid 	= JRequest::getVar( 'cid', array(0), '', 'array' );
		$pid 	= (int) @$cid[0];
		$db		=& JFactory::getDBO();
		$option = JRequest::getCmd( 'option');

		$search = JString::strtolower($search);

		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );

		$where 		= " WHERE m.provinceid=$pid";

		// sanitize $filter_order
		if (!in_array($filter_order, array('m.title', 'm.published', 'a.ordering', 'catname', 'm.voters', 'numoptions', 'm.lag', 'm.id'))) {
			$filter_order = 'm.id';
		}

		if (!in_array(strtoupper($filter_order_Dir), array('ASC', 'DESC'))) {
			$filter_order_Dir = '';
		}

		$orderby 	= ' ORDER BY  m.id DESC ';

		$query = 'SELECT COUNT(m.id)'
		. ' FROM #__cos_city AS m'
		. $where
		;
		$db->setQuery( $query );
		$total = $db->loadResult();

		jimport('joomla.html.pagination');
		$pagination = new JPagination( $total, $limitstart, $limit );

		$query = 'SELECT m.*'
		. ' FROM #__cos_city AS m'
		. $where
		. ' GROUP BY m.id'
		. $orderby
		;
		$db->setQuery( $query, $pagination->limitstart, $pagination->limit );
		$rows = $db->loadObjectList();

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
		$this->assignRef('items',		$rows);
		$this->assignRef('pagination',	$pagination);
		$this->assignRef('pid',	$pid);

		parent::display($tpl);
	}
}