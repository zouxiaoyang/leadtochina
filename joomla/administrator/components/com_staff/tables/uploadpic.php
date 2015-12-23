<?php
/**
 * @version		$Id: poll.php 14401 2010-01-26 14:10:00Z louis $
 * @package		Joomla
 * @subpackage	Polls
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

/**
* @package		Joomla
* @subpackage	Polls
*/
class TableUploadpic extends JTable{
	var $id	= 0;
	var $staffid = 0;
	var $pic_alt ='';
	function __construct( &$db ){
		parent::__construct( '#__cos_uploadpic', 'id', $db );
	}

	function bind( $array, $ignore='' )	{
		$result = parent::bind( $array );
		$this->id	= (int) $this->id;
		return $result;
	}

	function check(){
		return true;
	}
}
