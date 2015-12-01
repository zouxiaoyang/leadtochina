<?php
defined('_JEXEC') or die('Restricted access');

class TableStaff extends JTable
{
  var $id = null;
  var $name='';
  var $introduction = '';
  var $like=null;
  var $pic_dir=null;
  var $pic_name=null;
  var $dislike=null;
  var $reviews=null;
  var $created=null;
  
  function __construct(& $db) {
    parent::__construct('#__cos_staff', 'id', $db);
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
  	if($this->name==''){
  		$this->setError(JText::_('必须填写姓名'));
			return false;
  	}
  	if($this->introduction==''){
  		$this->setError(JText::_('必须填写简介'));
			return false;
  	}
    return true;
  }

}
