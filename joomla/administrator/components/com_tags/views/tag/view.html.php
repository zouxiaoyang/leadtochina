<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport( 'joomla.application.component.view');

class TagsViewTag extends JView
{
  function display($tpl = null){
    global $mainframe;
    $this->item = $this->get('Data');
    parent::display($tpl);
  }
}
