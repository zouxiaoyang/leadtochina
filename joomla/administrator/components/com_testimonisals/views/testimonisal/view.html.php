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
class TestimonisalsViewTestimonisal extends JView {

    function display($tpl = null) {
    	global $mainframe,$option;
      $db = & JFactory::getDBO();		
			$this->item=$this->get('Data');
			
			if($catid=JRequest::getVar('catid', 0)){
				$catid=JRequest::getVar('catid', 0);
				$mainframe->setUserState($option.'_categories',JRequest::getVar('catid', 0),0);
			}else{
				$catid=$mainframe->getUserState($option.'_categories');
			}
			$model=$this->getModel('testimonisal');			
			$this->city_obj=$model->getCity($catid);
			
			$tid=JRequest::getInt('tid');
			$this->package_title=$model->getPackage($tid);
			
      parent::display($tpl); 
    }

}
