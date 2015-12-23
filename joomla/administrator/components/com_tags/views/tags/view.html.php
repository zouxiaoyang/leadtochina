<?php
defined('_JEXEC') or die( 'Restricted access' );
jimport( 'joomla.application.component.view');

class TagsViewTags extends JView
{
  function display($tpl = null){
    global $mainframe;
    $db		=& JFactory::getDBO();
	$uri	=& JFactory::getURI();

	$id = $mainframe->getUserStateFromRequest( $option.'filter_id',	'filter_id', '', 'int' );
	$filter_state		= $mainframe->getUserStateFromRequest( $option.'filter_state',		'filter_state',		'',				'word' );
	$filter_catid		= $mainframe->getUserStateFromRequest( $option.'filter_catid',		'filter_catid',		0,				'int' );
	$filter_order		= $mainframe->getUserStateFromRequest( $option.'filter_order',		'filter_order',		'a.ordering',	'cmd' );
	$filter_order_Dir	= $mainframe->getUserStateFromRequest( $option.'filter_order_Dir',	'filter_order_Dir',	'',				'word' );
	$search				= $mainframe->getUserStateFromRequest( $option.'search',			'search',			'',				'string' );
	if (strpos($search, '"') !== false) {
		$search = str_replace(array('=', '<'), '', $search);
	}
	$search = JString::strtolower($search);

	// sanitize $filter_order
	if (!in_array($filter_order, array('a.title', 'a.published', 'a.ordering', 'category', 'a.hits', 'a.id'))) {
		//$filter_order = 'a.ordering';
		$filter_order = 'a.id';
	}

	if (!in_array(strtoupper($filter_order_Dir), array('ASC', 'DESC'))) {
		$filter_order_Dir = '';
	}

	// Get data from the model
	$items		= & $this->get( 'Data');
	$total		= & $this->get( 'Total');
	$pagination = & $this->get( 'Pagination' );

	// table ordering
	$lists['order_Dir'] = $filter_order_Dir;
	$lists['order'] = $filter_order;

	// search filter
	$lists['search']= $search;

	$this->assignRef('user',		JFactory::getUser());
	$this->assignRef('lists',		$lists);
	$this->assignRef('items',		$items);
	$this->assignRef('pagination',	$pagination);
	
	$this->appendMenu();
    parent::display($tpl);
  }
  
  private function appendMenu()
  {
    JSubMenuHelper::addEntry(JText::_('套餐管理'), 'index.php?option=com_ctours');
	JSubMenuHelper::addEntry(JText::_('套餐分类'), 'index.php?option=com_categories&section=com_ctours');
	JSubMenuHelper::addEntry(JText::_('行程标签'), 'index.php?option=com_tags');
  }
}
