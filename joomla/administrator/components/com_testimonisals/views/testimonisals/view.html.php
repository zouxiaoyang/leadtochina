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
class TestimonisalsViewTestimonisals extends JView {

    function display($tpl = null) {
        global $mainframe, $option;
        $db = & JFactory::getDBO();      
				if(JRequest::getvar('packageid',0)){
					$this->packageid=JRequest::getvar('packageid',0);
					$mainframe->setUserState($option.'_packageid',JRequest::getvar('packageid',0),0,'int');
				}else{
					$this->packageid=$mainframe->getUserState($option.'_packageid');
				}
        if(JRequest::getInt('chinatours',0)){
        	$mainframe->setUserState($option.'_prepage_state',JRequest::getInt('chinatours',0),0);
        }   
        $sql="SELECT COUNT(id) FROM #__cos_testimonisal where packageid='$packageid'";
        $db->setQuery($sql);
        $total=$db->loadResult();
        $limit = $mainframe->getUserStateFromRequest($option.'.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
        $limitstart = $mainframe->getUserStateFromRequest($option . '.limitstart', 'limitstart', 0, 'int');
        jimport('joomla.html.pagination');
        $pagination = new JPagination($total, $limitstart, $limit);
        
        $sql="SELECT * FROM #__cos_testimonisal WHERE packageid='$this->packageid'";
        $db->setQuery($sql,$pagination->limitstart,$pagination->limit);
        $this->items=$db->loadObjectList();        
        $this->assignRef('user', JFactory::getUser());
        $this->assignRef('search', $search);
        $this->assignRef('pagination', $pagination);
        parent::display($tpl);
    }

}
