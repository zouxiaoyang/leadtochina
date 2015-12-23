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
class TableUploadpic extends JTable
{
	/** @var int Primary key */
	var $id					= 0;
	/** @var string */
	var $provinceid			= 0;
	var $state			= 0;

	var $title  =null;
	/** @var time */
	//var $packagename		= '';
	var $pic_alt          ='';


	/**
	* @param database A database connector object
	*/
	function __construct( &$db )
	{
		parent::__construct( '#__cos_provincemap', 'id', $db );
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
		// check for valid name
		if (trim( $this->pic_path ) == '')
		{
			$this->setError(JText::_( '必须选择图片进行上传' ));
			return false;
		}
		// check for valid lag
			// check for valid name




		return true;
	}

	// overloaded delete function
	function delete( $oid=null )
	{
		$k = $this->_tbl_key;
		if ( $oid ) {
			$this->$k = intval( $oid );
		}
			//die("test");

			$pack_query="SELECT packageid FROM #__cos_tours_des WHERE id=".(int) $this->$k;

			$this->_db->setQuery( $pack_query );

			$pack_row=$this->_db->loadAssoc();
			$packageid=$pack_row['packageid'];

			$query = 'DELETE FROM #__cos_tours_des'
			. ' WHERE id = '.(int) $this->$k
			;
			$this->_db->setQuery( $query );
			if ( !$this->_db->query() ) {
				$this->_error .= $this->_db->getErrorMsg() . "\n";
			}
			$this->_db->setQuery( "SELECT id FROM #__cos_tours_des WHERE packageid=$packageid");
			$res=$this->_db->query();
			$rows=$this->_db->getNumRows($res);

			$this->_db->setQuery( "UPDATE #__cos_tours_package SET days=$rows WHERE id=$packageid");
			if(!$this->_db->query()){
				$this->_error .= $this->_db->getErrorMsg() . "\n";
			
		
		}else{
		return true;
		}
		
		return false;
	}
}
