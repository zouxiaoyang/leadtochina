<?php
/**
* @version		$Id: view.html.php 19343 2010-11-03 18:12:02Z ian $
* @package		Joomla
* @subpackage	Config
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Poll component
 *
 * @static
 * @package		Joomla
 * @subpackage	Poll
 * @since 1.0
 */
class CtoursViewCtourss extends JView
{
	function display( $tpl = null )
	{
		global $mainframe, $option;
		//$option是为组件名称
		$db					=& JFactory::getDBO();

		$limit		= $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart	= $mainframe->getUserStateFromRequest( $option.'.limitstart', 'limitstart', 0, 'int' );

		$search	= $mainframe->getUserStateFromRequest( "$option.search", 'search', '', 'string' );	
		$c=JRequest::getVar('c');
		$search = mysql_real_escape_string(JString::strtolower($search));
        $cat_id_search	= $mainframe->getUserStateFromRequest( "$option.categoried_str", 'categoried_str', '', 'int' );
                

        //sql基础语句
        $sql="SELECT * FROM #__cos_tours_package WHERE package_type=2 ";
        if($search){ $sql.=" AND (name like '%{$search}%' or package_code like '%$search%')";}
        
        if($cat_id_search){$sql.=" AND category_parentid =$cat_id_search";}
        $sql.=" ORDER BY id DESC";
    
		$db->setQuery($sql);
        $rows_total=$db->loadObjectList();
        $total=count($rows_total);

                
        jimport('joomla.html.pagination');
		$pagination = new JPagination( $total, $limitstart, $limit );    
                
        $db->setQuery( $sql, $pagination->limitstart, $pagination->limit );
        $rows = $db->loadObjectList();
		if ($db->getErrorNum())
		{
			echo $db->stderr();
			return false;
		}

        //套餐类型
        $db->setQuery("SELECT id,title FROM #__categories WHERE parent_id=0 and section='com_ctours' AND published=1");
        $this->categories = $db->loadObjectList();

		$this->assignRef('user',		JFactory::getUser());
		$this->assignRef('search',		$search);
		$this->assignRef('items',		$rows);
		$this->assignRef('pagination',          $pagination);
        $this->assignRef('total',		$total);
        $this->assignRef('cat_id_search',	$cat_id_search);
		parent::display($tpl);
	}
}
