<?php
/**
 * @version		$Id: controller.php 15096 2010-02-27 14:16:40Z ian $
 * @package		Joomla
 * @subpackage	Config
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );
define( 'JPATH_INCLUDES',         JPATH_ROOT.DS.'includes');
jimport( 'joomla.application.component.controller' );

/**
 * @package		Joomla
 * @subpackage	Config
 */
class CntoursController extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{

		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');
		$this->registerTask( 'editprice', 		'display');//编辑价格
		$this->registerTask( 'editroute' , 		'display' );//编辑行程
		$this->registerTask( 'edit', 		'display');
		$this->registerTask( 'add' , 		'display' );

	}

	function display( )
	{
		switch($this->getTask())
		{
			case 'add'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'cntours'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'editprice'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'cntours'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'editroute'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'route_tpl'  );
				JRequest::setVar( 'view', 'route'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'cntours'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'cntours'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'cntourss');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the cos_province parent information
		$row	=& JTable::getInstance('cntours', 'Table');
		
//array(8) { ["proname"]=> string(8) "Shanghai" ["description"]=> string(8) "dfsfsdfs" 
//["task"]=> string(4) "save" ["option"]=> string(12) "com_province" 
//["id"]=> string(1) "2" ["cid"]=> array(1) { [0]=> string(1) "2" } 
//["textfieldcheck"]=> string(0) "" ["c293f03092a989911df312e31cbf88f2"]=> string(1) "1" }

		$post	= JRequest::get( 'post' );
		$cate_arr=array();

		$cate_arr=$post['categorieid_str'];
		if(empty($cate_arr)==false){

			$ca_c=count($cate_arr);
			$cat_name_str='';
			for($i=0;$i<$ca_c;$i++){

				$db->setQuery("SELECT title FROM jos_categories WHERE id={$cate_arr[$i]}");
				$cat_res=$db->query();
				$cat_seled="";
				
				$cat_row=mysql_fetch_assoc($cat_res);
				if($i==0){
					$cat_name_str=$cat_row['title'];
				}else{
					$cat_name_str.=",";
				}
				$cat_name_str.=$cat_row['title'];

				mysql_free_result($cat_res);

			}
		
		}

		$cate_str=implode(",",$cate_arr);
		

		

		if(empty($cate_str)==false){

			$new_cate_arr=array("categorieid_str"=>$cate_str);
			$post=array_merge($post,$new_cate_arr);
		}

		if(empty($cat_name_str)==false){
			$new_cate_name_arr=array("categorie_name_str"=>$cat_name_str);
			$post=array_merge($post,$new_cate_name_arr);
		}

		
		//var_dump($_FILES['ufile']);
		//echo "<br />";
		//var_dump($post);
		//exit;

		if($_FILES['ufile']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."components".DS."com_cntours".DS."uploads","cntours");
			$return_obj=$fupload->run($_FILES['ufile']);
			$fnewpath="components/cntours/uploads/".$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$fnewpath);
			$post = array_merge($post,$filenewname);

		}

		if (!$row->bind( $post ))
		{
			JError::raiseError(500, $row->getError() );
		}
		



		$isNew = ($row->id == 0);

		if (!$row->check())
		{
			
			JError::raiseError(500, $row->getError() );
		}

		if (!$row->store())
		{
			JError::raiseError(500, $row->getError() );
		}

		$row->checkin();

		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to Poll saved' );
				$link = 'index.php?option=com_cntours&view=cntours&task=edit&cid[]='. $row->id .'';
				break;

			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = 'index.php?option=com_cntours';
				break;
		}

		$this->setRedirect($link, $msg);
	}

	function remove()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();
		$cid	= JRequest::getVar( 'cid', array(), '', 'array' );

		JArrayHelper::toInteger($cid);
		$msg = '';

		for ($i=0, $n=count($cid); $i < $n; $i++)
		{
			$poll =& JTable::getInstance('cntours', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_cntours', $msg );
	}

	/**
	* Publishes or Unpublishes one or more records
	* @param array An array of unique category id numbers
	* @param integer 0 if unpublishing, 1 if publishing
	* @param string The current url option
	*/
	/*
	function publish()
	{
		global $mainframe;

		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db 	=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$cid		= JRequest::getVar( 'cid', array(), '', 'array' );
		$publish	= ( $this->getTask() == 'publish' ? 1 : 0 );

		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1)
		{
			$action = $publish ? 'publish' : 'unpublish';
			JError::raiseError(500, JText::_( 'Select an item to' .$action, true ) );
		}

		$cids = implode( ',', $cid );

		$query = 'UPDATE #__polls'
		. ' SET published = ' . (int) $publish
		. ' WHERE id IN ( '. $cids .' )'
		. ' AND ( checked_out = 0 OR ( checked_out = '.(int) $user->get('id').' ) )'
		;
		$db->setQuery( $query );
		if (!$db->query())
		{
			JError::raiseError(500, $db->getErrorMsg() );
		}

		if (count( $cid ) == 1)
		{
			$row =& JTable::getInstance('province', 'Table');
			$row->checkin( $cid[0] );
		}
		$mainframe->redirect( 'index.php?option=com_province' );
	}
*/
	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$id		= JRequest::getVar( 'id', 0, '', 'int' );
		$db		=& JFactory::getDBO();
		$row	=& JTable::getInstance('cntours', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_cntours' );
	}
}