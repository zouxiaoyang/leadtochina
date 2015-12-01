<?php
defined('_JEXEC') or die('Restricted access');

class TableTourhighlight extends JTable
{
  var $id = null;
  
  var $tid = 0;

  var $title = '';

  var $type = 0;

  var $description = '';

  var $pic = null;

  var $created = 0;
  

  /**
   * Constructor
   *
   * @param object Database connector object
   * @since 1.0
   */
  function __construct(& $db) {
    parent::__construct('#__cos_tour_highlight', 'id', $db);
  }



  function check()
  {
    return true;
  }

}
