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
class YangtzeController extends JController
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
				JRequest::setVar( 'view', 'yangtze'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'editprice'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'yangtze'  );
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
				JRequest::setVar( 'view', 'yangtze'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'yangtze'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'yangtzes');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the cos_province parent information
		$row	=& JTable::getInstance('yangtze', 'Table');
		
//array(8) { ["proname"]=> string(8) "Shanghai" ["description"]=> string(8) "dfsfsdfs" 
//["task"]=> string(4) "save" ["option"]=> string(12) "com_province" 
//["id"]=> string(1) "2" ["cid"]=> array(1) { [0]=> string(1) "2" } 
//["textfieldcheck"]=> string(0) "" ["c293f03092a989911df312e31cbf88f2"]=> string(1) "1" }

		$post	= JRequest::get( 'post' );

		if(isset($post['childid']) and empty($post['childid'])==false){


			$db->setQuery( "SELECT routes FROM jos_categories  WHERE id={$post['categorieid_str']}" );

			$cate_res = $db->query();

			$route_info=mysql_fetch_assoc($cate_res);
			mysql_free_result($cate_res);

			if(empty($route_info['routes'])!=false){

				$db->setQuery( "UPDATE jos_categories SET routes='{$post['route']}'  WHERE id={$post['categorieid_str']}" );

				$db->query();	
			}

			$post['categorieid_str']=$post['childid'];
		}


		if(isset($post['package_grade']) and empty($post['package_grade'])==false){
			$post['name']=$post['package_grade'];
		}
	


	$post['route_Intro'] = JRequest::getVar( 'route_Intro', '', 'post', 'string', JREQUEST_ALLOWRAW );
	$post['tour_intro'] = JRequest::getVar( 'tour_intro', '', 'post', 'string', JREQUEST_ALLOWRAW );
		
	$post['note'] = JRequest::getVar( 'note', '', 'post', 'string', JREQUEST_ALLOWRAW );		
		
		$cate_arr=array();

		$cate_arr=$post['categorieid_str'];

		if(empty($cate_arr)==false){

			$ca_c=count($cate_arr);

			$cat_name_str='';
			for($i=0;$i<$ca_c;$i++){
				if(is_array($cate_arr)){
					$temp_id=$cate_arr[$i];
				}else{
					$temp_id=$cate_arr;
				}
				$db->setQuery("SELECT title FROM jos_categories WHERE id={$temp_id}");
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
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."chinaTours","cntours");
			$return_obj=$fupload->run($_FILES['ufile']);

			//var_dump($return_obj->_fileList);
			//exit;
			$fnewpath="uploads/chinaTours/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."chinaTours".DS.$return_obj->_fileList['name'],180,150,0,JPATH_SITE.DS."uploads".DS."chinaTours".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$post = array_merge($post,$filenewname);

		}
		//$post['name']=$post['days']."  days ".$post['route'];

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

		$days=$post['days'];
		//echo $days;
		//echo "<br />";
		///echo $isNew;echo "<br />";
		//exit;
		if($isNew){
			for($i=1;$i<=$days;$i++){
				

					$obj = new stdClass();
					$obj->packageid = (int)$row->id;
					$obj->packagename   = $post['name'];
					$db->insertObject('#__cos_tours_des', $obj);
			}
		}

		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to Poll saved' );
				$link = 'index.php?option=com_yangtze&view=yangtze&task=edit&cid[]='. $row->id .'';
				break;

			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = 'index.php?option=com_yangtze';
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
			$poll =& JTable::getInstance('yangtze', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_yangtze', $msg );
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