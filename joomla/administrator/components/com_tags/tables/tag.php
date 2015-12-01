<?php
/**
* @version		$Id: weblink.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	Weblinks
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

/**
* Weblink Table class
*
* @package		Joomla
* @subpackage	Weblinks
* @since 1.0
*/
class TableTag extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	var $tour_id = 0;
	
	var $name = '';
	
	var $parent_id = 0;

	/**
	 * @var int
	 */
	var $created = null;

	
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__cos_tours_package_tag', 'id', $db);
	}


	/**
	 * Overloaded check method to ensure data integrity
	 *
	 * @access public
	 * @return boolean True on success
	 * @since 1.0
	 */
	function check()
	{
//		if (JFilterInput::checkAttribute(array ('href', $this->url))) {
//			$this->setError( JText::_('Please provide a valid URL'));
//			return false;
//		}
//
//		//Remove all HTML tags from the title and description
//		$filter = new JFilterInput(array(), array(), 0, 0);
//		$this->description = $filter->clean($this->description);
//		$this->title = $filter->clean($this->title);


//		if (!(preg_match('#http://#i', $this->url) || (preg_match('#https://#i', $this->url)) || (preg_match('#ftp://#i', $this->url)))) {
//			$this->url = 'http://'.$this->url;
//		}
//
//		/** check for existing name */
//		$query = 'SELECT id FROM #__weblinks WHERE title = '.$this->_db->Quote($this->title).' AND catid = '.(int) $this->catid;
//		$this->_db->setQuery($query);
//
//		$xid = intval($this->_db->loadResult());
//		if ($xid && $xid != intval($this->id)) {
//			$this->setError(JText::sprintf('WARNNAMETRYAGAIN', JText::_('Web Link')));
//			return false;
//		}
//
//		if(empty($this->alias)) {
//			$this->alias = $this->title;
//		}
//		$this->alias = JFilterOutput::stringURLSafe($this->alias);
//		if(trim(str_replace('-','',$this->alias)) == '') {
//			$datenow =& JFactory::getDate();
//			$this->alias = $datenow->toFormat("%Y-%m-%d-%H-%M-%S");
//		}

		return true;
	}
}
