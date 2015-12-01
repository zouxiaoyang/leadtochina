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
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

/**
 * HTML View class for the Poll component
 *
 * @static
 * @package		Joomla
 * @subpackage	Poll
 * @since 1.0
 */
class StaffcommentsViewStaffcomments extends JView {

	function display($tpl = null) {
		global $mainframe, $option;
		$db = & JFactory::getDBO();
		$sql="SELECT COUNT(id) FROM #__cos_staffcomments";
		$db->setQuery($sql);
		$total=$db->loadResult();
		$limit = $mainframe->getUserStateFromRequest($option.'.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
		$limitstart = $mainframe->getUserStateFromRequest($option . '.limitstart', 'limitstart', 0, 'int');
		jimport('joomla.html.pagination');
    $pagination = new JPagination($total, $limitstart, $limit);        
    $sql="SELECT * FROM #__cos_staffcomments order by id desc";
    $db->setQuery($sql,$pagination->limitstart,$pagination->limit);
    $this->items=$db->loadObjectList();
    $this->assignRef('user', JFactory::getUser());
    $this->assignRef('pagination', $pagination);
    parent::display($tpl);
    }

}
