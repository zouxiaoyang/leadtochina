<?php 
    defined('_JEXEC') or die('Restricted access');
    require_once(JApplicationHelper::getPath('admin_html'));
    JTable::addIncludePath(JPATH_COMPONENT.DS.'tables');
	
	// var_dump(JPATH_COMPONENT.DS.'tables');exit;

    switch($task){
        case 'add':
            editReview($option);             
            break;
    }
    function editReview($option){
		
        $row = &JTable::getInstance('review','Table');

        $lists = array();
		
        $reservations = array(
            '0'=>array('value'=>'None Taken','text'=>'None Taken'),
            '1'=>array('value'=>'Accepted','text'=>'Accepted'),
            '2'=>array('value'=>'Suggested','text'=>'Suggested'),
            '3'=>array('value'=>'Required','text'=>'Required')
        );
        $lists['reservations'] = JHTML::_('select.genericList',$reservations,'reservations','class="inputbox"'.'','value','text',$row->reservations);

        $lists['smoking'] = JHTML::_('select.booleanlist','somking','class="inputbox"',$row->smoking);

        $lists['published'] = JHTML::_('select.booleanlist','published','class="inputbox"',$row->published);

        HTML_reviews::editReview($row,$lists,$option);
    }
     
?>