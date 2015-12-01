<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport( 'joomla.application.component.view');

class TagsViewDetail extends JView
{
  function display($tpl = null){
    global $mainframe;
    $db		=& JFactory::getDBO();
    
    $this->parent_id = $mainframe->getUserStateFromRequest( $option.'filter_id',	'filter_id', '', 'int' );
    
    $cid_array = JRequest::getVar('cid', array(0), '', 'array');
    $cid = $cid_array[0];
    
    $sql = "select * from #__cos_tours_package_tag where id='$cid'";
    $db->setQuery($sql);
    $this->item = $db->loadObject();
    
    parent::display($tpl);
  }
}
