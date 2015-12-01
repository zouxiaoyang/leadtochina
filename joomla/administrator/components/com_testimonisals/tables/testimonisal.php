<?php
defined('_JEXEC') or die('Restricted access');

class TableTestimonisal extends JTable
{
  var $id = null;
  
  var $city_id = '';

  var $day = '';
  
  var $packageid='';
  
  var $name='';
  
  var $nationnality='';
  
  var $tour_time='';
  
  var $type=1;
  
  var $pic_name=null;
  
  var $image=null;

  var $title = '';
  
  var $description='';
  
  var $pic_alt='';

  var $recomment =0;

  var $created = null;
  

  /**
   * Constructor
   *
   * @param object Database connector object
   * @since 1.0
   */
  function __construct(& $db) {
    parent::__construct('#__cos_testimonisal', 'id', $db);
  }

	function bind($array, $ignore = '')
	{
		if (key_exists( 'params', $array ) && is_array( $array['params'] ))
		{
			$registry = new JRegistry();
			$registry->loadArray($array['params']);
			$array['params'] = $registry->toString();
		}

		return parent::bind($array, $ignore);
	}

  function check()
  {
  	if($this->title==''){
  		$this->setError(JText::_('Your testimonisal must contain a title.'));
			return false;
  	}
  	if($this->pic_name==''){
  		$this->setError(JText::_('You must upload a picture.'));
			return false;
  	}
    return true;
  }

}
