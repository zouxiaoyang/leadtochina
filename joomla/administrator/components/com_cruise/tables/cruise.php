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
class TableCruise extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;

	/**
	 * @var int
	 */
	var $cruise_name = null;

	/**
	 * @var int
	 */
	var $year_built  = null;

	/**
	 * @var string
	 */
	var $total_passengers = null;

	/**
	 * @var string
	 */
	var $crew = null;

	/**
	 * @var string
	 */
	var $length = null;
	var $width  = null;
	var $uphighprice = null;
	var $uplowprice = null;
	var $downhighprice = null;
	var $downlowprice = null;
	var $passenger_decks = null;
	var $cruise_grade  = null;
	var $uplink = null;
	var $down = null;
	var $equipment = null;
	var $introduction = null;
	var $seo_title = null;
	var $seo_key = null;
	var $seo_description = null;	
	var $published = null;
	var $upcity = null;
	var $downcity = null;
	var $filedir =null;
	var $ufile =null;
	
	
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('jos_cos_cruise', 'id', $db);
	}


}
