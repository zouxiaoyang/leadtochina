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
class EmailViewEmails extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;
		$db					=& JFactory::getDBO();
		$filter_catid		= $mainframe->getUserStateFromRequest( $option.'filter_catid',		'filter_catid',		"",				'word' );
		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );
		$where_sql="";

		date_default_timezone_set('Asia/Shanghai');
		if($filter_catid=="read"){

			$where_sql="1 AND readed=1 ";
			$isread="selected=\"selected\"";
			$isclick="";
		
		}elseif($filter_catid=="click"){

			$where_sql="1 AND clicked=1 ";
			$isclick="selected=\"selected\"";
			$isread="";

		}else{
			$isread="";
			$isclick="";
			$isnull="selected=\"selected\"";
		}
		$orderby 	= ' ORDER BY id DESC';

		$query = 'SELECT COUNT(id)'
		. ' FROM client_email WHERE '.$where_sql
		;
		$db->setQuery( $query );
		$total = $db->loadResult();

		jimport('joomla.html.pagination');
		$pagination = new JPagination( $total, $limitstart, $limit );

		$query = 'SELECT *'
		. ' FROM client_email WHERE '
		.$where_sql.$orderby
		;
		$db->setQuery( $query, $pagination->limitstart, $pagination->limit );
		$rows = $db->loadObjectList();
		if ($db->getErrorNum())
		{
			echo $db->stderr();
			return false;
		}
		$this->assignRef('user',		JFactory::getUser());
		//$this->assignRef('lists',		$lists);
		$this->assignRef('items',		$rows);

		$this->assignRef('isread',		$isread);
		$this->assignRef('isclick',		$isclick);
		$this->assignRef('isnull',		$isnull);
		$this->assignRef('pagination',	$pagination);

		parent::display($tpl);
	}
}
