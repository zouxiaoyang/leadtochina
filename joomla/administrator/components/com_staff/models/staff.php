
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
class StaffModelStaff extends JModel
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
          $query = "select * from #__cos_staff where id=". (int)$this->_id;
      $this->_db->setQuery($query);
        $this->_data = $this->_db->loadObject();
        }else{
          $this->_initData();
        }
      }
      return $this->_data;
  }  
  
  //save
    function store($data)
  {
    $row =& $this->getTable();
    if (!$row->bind($data)) {
      $this->setError($this->_db->getErrorMsg());
      return false;
    }

    if (!$row->check()) {
    $this->setError(JText::_("$row->getErrors()"));
    return false;
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
      $obj->introduction='';
      $obj->pic_dir=null;
      $obj->pic_name=null;
      $obj->like = 0;
      $obj->dislike =0;
      $obj->reviews=0;
      $this->_data = $obj;
      return (boolean) $this->_data;
    }
    return true;
  }
  
}
