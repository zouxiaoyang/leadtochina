
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
class TourhighlightsModelTourhighlight extends JModel
{
  /**
   * Weblink id
   *
   * @var int
   */
  var $_id = null;

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
    $edit = JRequest::getVar('edit',true);
    if($edit) $this->setId(JRequest::getVar('id'));
  }
  
  function setId($id)
  {
    // Set weblink id and wipe data
    $this->_id    = $id;
    $this->_data  = null;
  }

  
  function &getData()
  {
    // Lets load the data if it doesn't already exist
      if (empty( $this->_data ))
      {
        if($this->_id){
          $query = "select * from #__cos_tour_highlight where id=". (int)$this->_id;
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
    $is_new = ($row->id==0);  
    
    //check data is legal.
      if (!$row->check()) {
      $this->setError($this->_db->getErrorMsg());
      return false;
    }
    // Store the web link table to the database
    if (!$row->store()) {
      $this->setError($this->_db->getErrorMsg());
      return false;
    }

    return true;
  }

  //delete
  function delete($cid = array())
  {
    $result = false;
    if (count( $cid ))
    {
      
      JArrayHelper::toInteger($cid);
      $cids = implode( ',', $cid );
      $query = 'DELETE FROM #__cos_tour_highlight'
        . ' WHERE id IN ( '.$cids.' )';
      $this->_db->setQuery( $query );
      if(!$this->_db->query()) {
        $this->setError($this->_db->getErrorMsg());
        return false;
      }
    }
    return true;
  }
  
  /**
   * Method to initialise the weblink data
   *
   * @access  private
   * @return  boolean True on success
   * @since 1.5
   */
  function _initData()
  {
    // Lets load the content if it doesn't already exist
    if (empty($this->_data))
    {
      $obj = new stdClass();
      $obj->id = 0;
      $obj->tid = 0;
      $obj->title= '';
      $obj->type= 0;
      $obj->description= '';
      $obj->pic = null;
      $obj->created = 0;
      $this->_data = $obj;
      return (boolean) $this->_data;
    }
    return true;
  }
  
}
