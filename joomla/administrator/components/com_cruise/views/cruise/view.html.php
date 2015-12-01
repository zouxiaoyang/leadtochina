<?php
/**
* @version		$Id: view.html.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	cruises
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the cruises component
 *
 * @static
 * @package		Joomla
 * @subpackage	cruises
 * @since 1.0
 */
class CruiseViewCruise extends JView
{
	function display($tpl = null)
	{
		

		global $mainframe, $option;

		$db		=& JFactory::getDBO();
		$uri 	=& JFactory::getURI();
		$user 	=& JFactory::getUser();
		$model	=& $this->getModel();

		$document =& JFactory::getDocument();
		


		$id = JRequest::getVar('id', array(0), '', 'array');    
		$lists = array();
		//get the cruise
		$cruise	=& $this->get('data');
		$cheackbox=explode(",",$cruise->equipment);
		//print_r($cheackbox);exit;
		$db->setQuery("SELECT * FROM jos_cos_cruisefacilitiles");
        $cruisefacilitiles = $db->loadObjectList();
		//print_r($cruisefacilitiles);exit;
		// build the html select list
		//$lists['published'] 		= JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $cruise->published );
      
		//clean cruise data
		JFilterOutput::objectHTMLSafe( $cruise, ENT_QUOTES, 'description' );
		$file 	= JPATH_COMPONENT.DS.'models'.DS.'cruise.xml';
		$params = new JParameter( $cruise->params, $file );
		$this->assignRef('lists',		$lists);
		$this->assignRef('cheackbox',		$cheackbox);
		$this->assignRef('cruise',		$cruise);
		$this->assignRef('cruisefacilitiles',$cruisefacilitiles);
		$this->assignRef('params',		$params);
		parent::display($tpl);
	}

	
}
