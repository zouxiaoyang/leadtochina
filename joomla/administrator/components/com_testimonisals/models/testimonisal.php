
<?php
/**
 * @version   $Id: weblink.php 14401 2010-01-26 14:10:00Z louis $
 * @package   Joomla
 * @subpackage  Content
 * @copyright Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license   GNU/GPL, see LICENSE.php
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
 * @package   Joomla
 * @subpackage  Weblinks
 * @since 1.5
 */
class TestimonisalsModelTestimonisal extends JModel
{
  var $_id = null;
  var $_data = null;

  function __construct()
  {
    parent::__construct();
    $edit = JRequest::getVar('edit',true);
    if($edit){
    	$cid = JRequest::getVar( 'cid', array(0), 'post', 'array' );
      $id=$cid[0];
    } $this->setId($id);
  }
  
  function setId($id)
  {
    $this->_id    = $id;
    $this->_data  = null;
  }

  
  function &getData()
  {
    // Lets load the data if it doesn't already exist
      if (empty( $this->_data ))
      {
        if($this->_id){
          $query = "select * from #__cos_testimonisal where id=". (int)$this->_id;
      $this->_db->setQuery($query);
        $this->_data = $this->_db->loadObject();
        }else{
          $this->_initData();
        }
      }
      return $this->_data;
  }
  
  function &getCity($catid){  	
  	$query="select title from #__categories where id=".$catid;
  	$this->_db->setQuery($query);
  	return $this->_db->loadObject();
  }
  
  //得到行程标题
  function &getPackage($tid){
  	$query="select id,name,package_type,days from jos_cos_tours_package where id='$tid'";
  	$this->_db->setQuery($query);
  	$packageInfo=$this->_db->loadObjectList();
  	if($packageInfo[0]->package_type==2){			
		$pagetitle=$packageInfo[0]->name;		
		}else{
			$pre_days='';
			if($packageInfo[0]->days=="1"){
				$pre_days = '1 Day ';
			}elseif($packageInfo[0]->days=="0"){
				$pre_days = 'Half Day ';
			}else{
			$pre_days = $packageInfo[0]->days.' Days ';
		}
		$pagetitle=$pre_days.$packageInfo[0]->name;
		}
		return $pagetitle;
  }
  
  //save
    function store($data)
  {
    $row =& $this->getTable();
    if (!$row->bind($data)) {
      $this->setError($this->_db->getErrorMsg());
      return false;
    }
    $is_new = ($row->id==0);
    if($is_new){
      if (!$row->check()) {
      $this->setError(JText::_("$row->getErrors()"));
      return false;
    	}
    }
    if (!$row->store()) {
      $this->setError($this->_db->getErrorMsg());
      return false;
    }

    return true;
  }

  function _initData()
  {
    if (empty($this->_data))
    {
      $obj = new stdClass();
      $obj->id = 0;
      $obj->city_id = 0;
      $obj->day = 0;
      $obj->packageid= 0;
      $obj->title= '';
      $obj->pic_path='';
      $obj->description='';
      $obj->pic_alt='';
      $obj->recomment=0;
      $obj->type= 1;
	  $obj->extension='';
      $obj->pic = null;
	  $obj->image=null;
      $obj->created = 0;
      $this->_data = $obj;
      return (boolean) $this->_data;
    }
    return true;
  }
  
}
