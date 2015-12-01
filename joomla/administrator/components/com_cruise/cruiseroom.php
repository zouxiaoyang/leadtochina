<?php
/**
 * @version		$Id: controller.php 15096 2010-02-27 14:16:40Z ian $
 * @package		Joomla
 * @subpackage	Config
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );
define( 'JPATH_INCLUDES',         JPATH_ROOT.DS.'includes');
jimport( 'joomla.application.component.controller' );

/**
 * @package		Joomla
 * @subpackage	Config
 */
class CruiseControllerCruiseroom extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{

		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');
		$this->registerTask( 'editcruiseroom' , 		'display' );//编辑行程
		$this->registerTask( 'edit', 		'display');
		$this->registerTask( 'add' , 		'display' );

	}

	function display( )
	{
		
		switch($this->getTask())
		{
			case 'add'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'default'  );
				JRequest::setVar( 'view', 'cruiseroom'  );
				JRequest::setVar( 'edit', false  );
				
			} break;

			case 'editcruiseroom'     :
			{


				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'cruiseroom'  );
				JRequest::setVar( 'view', 'cruiseroom'  );
				JRequest::setVar( 'edit', false  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');
		
		if(empty($view)) {
			JRequest::setVar('view', 'cruiserooms');
		};

		parent::display();
	}

	function save()
	{
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$db		=& JFactory::getDBO();
		$model = $this->getModel('cruiseroom');
		//$row	=& JTable::getInstance('cruiseroom', 'Table');

		$post	= JRequest::get( 'post' );
		
		
		//print_r($post);exit;
		
		/*$query ="UPDATA  jos_cos_cruisecycle SET cruiseid=".$post['cruiseid'].", activition='".$post['activition']."', upOrdown=".$post['upOrdown'].",cruise_name='".$post['cruise_name']."' where id =".$post['id'];
		$db->setQuery($query);
		echo $query;*/

		if ($model->store($post)) {
			
			$msg = JText::_( 'cruise 房间 Saved' );

		} else {

			$msg = JText::_( 'Error Saving cruise' );

		}


		$link ='index.php?option=com_cruise&view=cruiserooms&c=cruiseroom&task=cruiseroom&cid[]='.$post['cruiseid'];
		$this->setRedirect($link, $msg);
	}

	function remove()
	{
		
		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );

		JArrayHelper::toInteger($cid);


		if (count( $cid ) < 1) {

			JError::raiseError(500, JText::_( 'Select an item to delete' ) );

		}



		$model = $this->getModel('cruiseroom');

		if(!$model->delete($cid)) {

			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";

		}


		$link ='index.php?option=com_cruise';
		$this->setRedirect($link, $msg);
	}

	

	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$id		= JRequest::getVar( 'id', 0, '', 'int' );
		$this->setRedirect( 'index.php?option=com_cruise' );
	}
}