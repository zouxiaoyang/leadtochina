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
class CtoursControllerRoute extends JController
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
				JRequest::setVar( 'view', 'addroute'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'editprice'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'ctours'  );
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
				JRequest::setVar( 'view', 'addroute'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'ctours'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'ctourss');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the cos_province parent information
		$row	=& JTable::getInstance('route', 'Table');
		
//array(8) { ["proname"]=> string(8) "Shanghai" ["description"]=> string(8) "dfsfsdfs" 
//["task"]=> string(4) "save" ["option"]=> string(12) "com_province" 
//["id"]=> string(1) "2" ["cid"]=> array(1) { [0]=> string(1) "2" } 
//["textfieldcheck"]=> string(0) "" ["c293f03092a989911df312e31cbf88f2"]=> string(1) "1" }

		$post	= JRequest::get( 'post' );
		
	$post['activities'] = JRequest::getVar( 'activities', '', 'post', 'string', JREQUEST_ALLOWRAW );
	$post['activities_summ'] = JRequest::getVar( 'activities_summ', '', 'post', 'string', JREQUEST_ALLOWRAW );
		
	$post['package_tips'] = JRequest::getVar( 'package_tips', '', 'post', 'string', JREQUEST_ALLOWRAW );		
		//var_dump($_FILES['ufile']);
		//echo "<br />";
		//var_dump($post);
		//exit;

		if($_FILES['ufile']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."cityTours","cndes");
			$return_obj=$fupload->run($_FILES['ufile']);
			$fnewpath="uploads/cityTours/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."cityTours".DS.$return_obj->_fileList['name'],200,150,0,JPATH_SITE.DS."uploads".DS."cityTours".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$row->ufile=null;
			$post = array_merge($post,$filenewname);

		}


		if($post['packageid']){
			$db->setQuery("SELECT name FROM jos_cos_tours_package WHERE id=".$post['packageid']);
			$p_res=$db->loadAssoc();
			$pname=$p_res['name'];
			$post=array_merge($post,array('packagename'=>$pname));

		}

		if($post['hotel_grade']>0){
		
			if($post['hotel_grade']==136){
				
				$hotel_grade_str="3 Start";
			}elseif($post['hotel_grade']==137){
			
			   $hotel_grade_str="4 Start";

			}elseif($post['hotel_grade']==138){
				$hotel_grade_str="5 Start";
			}
			$hotel_array=array("hotel_grade_str"=>$hotel_grade_str);
			$row->hotel_grade_str="";
			$row->hotel_grade=0;
			$post = array_merge($post,$hotel_array);
		}else{
			$hotel_grade_str="";
			$hotel_name=$post['hotel_name'];
			$hotel_array=array("hotel_grade_str"=>$hotel_grade_str,"hotel_name"=>$hotel_name);
			$row->hotel_grade_str="";
			$row->hotel_grade=0;
			$post = array_merge($post,$hotel_array);
		}
		if(str_replace(' ', '', trim($post['hotel_name']))==""){
			$post['hotel_grade']=0;
			$post['hotel_grade_str']="";
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

		if($isNew){//创建要jos_cos_tours_packag更新days字段
			$packageid=$post['packageid'];
			$u_sql="UPDATE jos_cos_tours_package SET days=days+1 WHERE id=$packageid";
			$db->setQuery($u_sql);
			$db->query();
		}


		$row->checkin();

		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to  saved' );
				$link = 'index.php?option=com_ctours&view=ctours&task=edit&cid[]='. $row->packageid;
				break;

			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = 'index.php?option=com_ctours&view=ctours&c=route&task=editroute&cid[]='.$row->packageid;
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
		$packageid =JRequest::getVar( 'packageid', 0, '', 'int' );

		JArrayHelper::toInteger($cid);
		$msg = '';

		for ($i=0, $n=count($cid); $i < $n; $i++)
		{
			$poll =& JTable::getInstance('route', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( "index.php?option=com_ctours&view=ctours&c=route&task=editroute&cid[]=$packageid", $msg );
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
		$row	=& JTable::getInstance('ctours', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_ctours' );
	}
}
