<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport( 'joomla.application.component.view');

class TagsViewDetails extends JView
{
  function display($tpl = null){
    global $mainframe;
    $db		=& JFactory::getDBO();
    
    $id = $mainframe->getUserStateFromRequest( $option.'filter_id',	'filter_id', '', 'int' );
    $sql = "select * from #__cos_tours_package_tag where parent_id = '$id'";
    $query = $db->setQuery($sql);
    $this->items = $db->loadObjectList();
    
    parent::display($tpl);
  }
}
