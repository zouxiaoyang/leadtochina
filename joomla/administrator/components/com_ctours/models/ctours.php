<?php
/**
 * @version		$Id: weblink.php 14401 2010-01-26 14:10:00Z louis $
 * @package		Joomla
 * @subpackage	Content
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

jimport('joomla.application.component.model');

/**
 * Weblinks Component Weblink Model
 *
 * @package		Joomla
 * @subpackage	Weblinks
 * @since 1.5
 */
class CtoursModelCtours extends JModel
{

	/**
	 * Weblink data
	 *
	 * @var array
	 */
	var $_data = null;

	/**
	 * Constructor
	 *
	 * @since 1.5
	 */
	function __construct()
	{
		parent::__construct();
	}
	
	function getTags()
	{
	  $db = JFactory::getDBO();
	  $sql = "select * from #__cos_tours_package_tag where parent_id = 0";
	  $db->setQuery($sql);
	  return $db->loadObjectList();
	}
	
	function getSubTags()
	{
	  $db = JFactory::getDBO();
	  $sql = "select * from #__cos_tours_package_tag where parent_id > 0";
	  $db->setQuery($sql);
	  return $db->loadObjectList();
	}
	
}