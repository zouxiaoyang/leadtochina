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
class TourhighlightsViewTourhighlights extends JView {

    function display($tpl = null) {
        global $mainframe, $option;
        //$option是为组件名称
        $db = & JFactory::getDBO();

        $limit = $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
        $limitstart = $mainframe->getUserStateFromRequest($option . '.limitstart', 'limitstart', 0, 'int');

        $search = $mainframe->getUserStateFromRequest("$option.search", 'search', '', 'string');
        $c = JRequest::getVar('c');
        if (strpos($search, '"') !== false) {
            $search = str_replace(array('=', '<'), '', $search);
        }
        $search = JString::strtolower($search);
        if (empty($c)) {
            if (empty($search) == false) {
                $db->setQuery("SELECT id FROM jos_categories WHERE title like '$search%'");
                $catid = $db->loadObjectList();
                $wheresql = " AND category_parentid='{$catid[0]->id}' ";
            }
        }
        $orderby = " ORDER BY id DESC ";
        $query = 'SELECT COUNT(id)'
                . " FROM #__cos_tours_package WHERE package_type=2 $wheresql"
        ;
        $db->setQuery($query);
        $total = $db->loadResult();

        jimport('joomla.html.pagination');
        $pagination = new JPagination($total, $limitstart, $limit);

        $query = 'SELECT *'
                . ' FROM #__cos_tours_package WHERE package_type=2 ' . $wheresql . $orderby
        ;
        $db->setQuery($query, $pagination->limitstart, $pagination->limit);
        $rows = $db->loadObjectList();

        if ($db->getErrorNum()) {
            echo $db->stderr();
            return false;
        }
        
        
        //tour highlights功能增加
        $cid=  JRequest::getVar('cid');
        $sql_highlights="select * from jos_cos_tour_highlight where tid=$cid";
        $db->setQuery($sql_highlights);
        $tour_highlight_array=$db->loadObjectList();
        //var_dump($tour_highlight_array);


        $this->assignRef('user', JFactory::getUser());
        $this->assignRef('search', $search);
        $this->assignRef('items', $rows);
        $this->assignRef('pagination', $pagination);
        $this->assignRef('items', $tour_highlight_array);
        parent::display($tpl);
    }

}
