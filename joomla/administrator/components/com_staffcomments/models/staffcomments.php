
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
class StaffcommentsModelStaffcomments extends JModel
{
  var $_id = null;
  var $_data = null;

  function __construct()
  {
    parent::__construct();
    $edit = JRequest::getVar('edit',true);
    if($edit) $this->setId(JRequest::getVar('id'));
  }
  
  function setId($id)
  {
    $this->_id    = $id;
    $this->_data  = null;
  }
 
  //delete
  function delete($cid = array())
  {
    $result = false;
    if (count( $cid ))
    {      
      JArrayHelper::toInteger($cid);
      $cids = implode( ',', $cid );
      $query = 'DELETE FROM #__cos_staffcomments'
        . ' WHERE id IN ( '.$cids.' )';
      $this->_db->setQuery( $query );
      if(!$this->_db->query()) {
        $this->setError($this->_db->getErrorMsg());
        return false;
      }
    }
    return true;
  }  
}
