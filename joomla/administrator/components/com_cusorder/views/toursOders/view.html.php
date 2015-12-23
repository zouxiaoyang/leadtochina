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
class ToursOderViewToursOders extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;
		//$option是为组件名称
		$db					=& JFactory::getDBO();
		


		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );

date_default_timezone_set('Asia/Shanghai');

		$orderby 	= ' ORDER BY id DESC';

		$query = 'SELECT COUNT(id)'
		. ' FROM #__cos_tours_order'
		;
		$db->setQuery( $query );
		$total = $db->loadResult();

		jimport('joomla.html.pagination');
		$pagination = new JPagination( $total, $limitstart, $limit );

		$query = 'SELECT *'
		. ' FROM #__cos_tours_order'
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


		$this->assignRef('user',		JFactory::getUser());
		//$this->assignRef('lists',		$lists);
		$this->assignRef('items',		$rows);
		$this->assignRef('pagination',	$pagination);

		parent::display($tpl);
	}
}
