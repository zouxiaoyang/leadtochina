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
class TourhighlightsViewTourhighlight extends JView {

    function display($tpl = null) {

     // global $mainframe, $option;
      //$option是为组件名称
      $db = & JFactory::getDBO();

   
      //tour highlights功能增加
      $id=  JRequest::getInt('id',0);
      
      $sql_highlights="select * from jos_cos_tour_highlight where id='$id'";
      $db->setQuery($sql_highlights);
      $tour_highlight_content=$db->loadObject();
      //var_dump($tour_highlight_content);
      
      $this->assignRef('user', JFactory::getUser());
      $this->assignRef('tour_highlight_content', $tour_highlight_content);

      parent::display($tpl); 
    }

}
