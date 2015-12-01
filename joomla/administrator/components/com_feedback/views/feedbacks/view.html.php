<?php
/**
* @version		$Id: view.html.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	feedbackss
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
 * HTML View class for the feedbackss component
 *
 * @static
 * @package		Joomla
 * @subpackage	feedbackss
 * @since 1.0
 */
class FeedbackViewFeedbacks extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		if($this->getLayout() == 'form') {
			$this->_displayForm($tpl);
			return;
		}

		//get the feedbacks
		$feedbacks =& $this->get('data');
		parent::display($tpl);
	}

	function _displayForm($tpl)
	{
		global $mainframe, $option;

		$db		=& JFactory::getDBO();
		$uri 	=& JFactory::getURI();
		$user 	=& JFactory::getUser();
		$model	=& $this->getModel();
		$lists = array();
		//get the feedbacks
		$feedbacks	=& $this->get('data');
		// build the html select list
        $lists['status'] 		= JHTML::_('select.booleanlist',  'status', 'class="inputbox"', $feedbacks->status );
		$lists['published'] 		= JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $feedbacks->published );
        $lists['isowner'] 		= JHTML::_('select.booleanlist',  'isowner', 'class="inputbox"', $feedbacks->isowner );
		//clean feedbacks data
		JFilterOutput::objectHTMLSafe( $feedbacks, ENT_QUOTES, 'description' );
		$file 	= JPATH_COMPONENT.DS.'models'.DS.'feedbacks.xml';
		$params = new JParameter( $feedbacks->params, $file );
		$this->assignRef('lists',		$lists);
		$this->assignRef('feedbacks',		$feedbacks);
		$this->assignRef('params',		$params);
		parent::display($tpl);
	}
}
