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
class TableOrder extends JTable
{
	/** @var int Primary key */
	var $id					= 0;
	/** @var string */
	var $username 			= '';
	/** @var string */

	/**
	* @param database A database connector object
	*/
	function __construct( &$db )
	{
		parent::__construct( '#__cos_question', 'id', $db );
	}

	/**
	 * Binds an array to the object
	 * @param 	array	Named array
	 * @param 	string	Space separated list of fields not to bind
	 * @return	boolean
	 */
	function bind( $array, $ignore='' )
	{
		$result = parent::bind( $array );
		// cast properties
		$this->id	= (int) $this->id;

		return $result;
	}

	/**
	 * Overloaded check function
	 *
	 * @access public
	 * @return boolean
	 * @see JTable::check
	 * @since 1.5
	 */
	function check()
	{
		return true;
	}

	// overloaded delete function
	function delete( $oid=null )
	{
		$k = $this->_tbl_key;
		if ( $oid ) {
			$this->$k = intval( $oid );
		}

	    $sql = 'SELECT question_type_id FROM #__cos_question WHERE id = ' . (int)$this->$k;
	    $this->_db->setQuery($sql);
	    $question = $this->_db->loadObject();
	  
		$query = 'DELETE FROM #__cos_question' . ' WHERE id = '.(int) $this->$k;
		$this->_db->setQuery( $query );
		if ( !$this->_db->query() ) {
			$this->_error .= $this->_db->getErrorMsg() . "\n";
		}
		$sql = "SELECT count(*) c FROM #__cos_question WHERE question_type_id= " . $question->question_type_id;
		$this->_db->setQuery($sql);
		$question_count = $this->_db->loadObject();
		$sql = "UPDATE #__cos_tours_package SET reviews = " . $question_count->c . " WHERE id=" . $question->question_type_id;
        $this->_db->setQuery($sql);
        $this->_db->query();
		return true;
	}
}
