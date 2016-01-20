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
class TableCntours extends JTable
{
	/** @var int Primary key */
	var $id					= 0;
	/** @var string */
	var $name = '';
	/** @var string */
	//var $alias				= '';
	/** @var string */

	/** @var time */
	var $route		= '';
	var $tour_intro          ='';
	var $route_Intro       ='';
	var $targets    ="";
	var $days   =0;
	var $note  ="";
	var $category_parentid = 0;
	var $categorieid_str = 0;
	//var $ufile ="";
	var $package_type =1;
	var $package_tour_type="";
	var $seo_title ="";
	var $seo_key  = "";
	var $seo_description  ="";
	var $categorie_name_str ="";
	var $package_code ="";
	var $package_grade="";	
	var $attractions="";
	var $recommand_reason="";
	var $promotion="";
	var $departs="";
  var $pic= null;
  var $pic_big =null;
  var $pic_big_alt="";
  var $cruise_recommend_pic=null;
  var $sort = 0;
	//var $is_cheap_tour = 0;
	var $vehicle_type = 0;
	var $theme="";
	var $highlight="";
	var $season="";
	var $fnum="";
	var $tips="";
	var $views=null;
	var $price_yuan="";
  var $hot = 0;
  var $lightbox = "";
  var $map_city="";
  var $index_recommend = 0;
  var $index_recommend_order=0;
  var $start_city = "";
  var $end_city = "";
	
	/**
	* @param database A database connector object
	*/
	function __construct( &$db )
	{
		parent::__construct( '#__cos_tours_package', 'id', $db );
	}

	/**
	 * Binds an array to the object
	 * @param 	array	Named array
	 * @param 	string	Space separated list of fields not to bind
	 * @return	boolean
	 */
	function bind( $array, $ignore='' )
	{
		//var_dump($array['ufile']);
		//exit;


		/*
		if(empty($array['ufile'])){
			$array_size=count($array);
			$new_array=array();
			foreach($array AS $key=>$val){
				if($key=='ufile'){
					
				}else{
					$new_array["$key"]=$val;
				}
			}
			var_dump($new_array);
			exit;
			$result = parent::bind( $new_array );
		}else{

		$result = parent::bind( $array );
		
		}*/

		if(empty($array['ufile'])){
			$result = parent::bind( $array );
		}else{
			$this->ufile=$array['ufile'];
			$result = parent::bind( $array );
		}
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
		if (trim( $this->name ) == '')
		{
			$this->setError(JText::_( '套餐名称不能为空' ));
			return false;
		}
		if (trim( $this->package_code ) == '')
		{
			$this->setError(JText::_( '套餐代码不能为空' ));
			return false;
		}
		if (trim( $this->route) == '')
		{
			$this->setError(JText::_( '套餐路线不能为空' ));
			return false;
		}
		if (trim( $this->days ) == '')
		{
			$this->setError(JText::_( '天数不能为空' ));
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


			$query = 'DELETE FROM #__cos_tours_package'
			. ' WHERE id = '.(int) $this->$k
			;
			$this->_db->setQuery( $query );
			if ( !$this->_db->query() ) {
				$this->_error .= $this->_db->getErrorMsg() . "\n";
			}

			$query = 'DELETE FROM #__cos_tours_des'
			. ' WHERE packageid = '.(int) $this->$k
			;
			$this->_db->setQuery( $query );
			if ( !$this->_db->query() ) {
				$this->_error .= $this->_db->getErrorMsg() . "\n";
			}
			$query = 'DELETE FROM #__cos_tours_price'
			. ' WHERE packageid = '.(int) $this->$k
			;
			$this->_db->setQuery( $query );
			if ( !$this->_db->query() ) {
				$this->_error .= $this->_db->getErrorMsg() . "\n";
			}
		return true;


		
	}
}
