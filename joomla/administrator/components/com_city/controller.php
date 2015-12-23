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

jimport( 'joomla.application.component.controller' );

/**
 * @package		Joomla
 * @subpackage	Config
 */
class CityController extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{

		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');

		$this->registerTask( 'edit', 		'display');
		$this->registerTask( 'listtab' , 		'display' );
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
				JRequest::setVar( 'view', 'city'  );
				JRequest::setVar( 'edit', false  );
			} break;
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'city'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;
			case 'listtab' :{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'default'  );//这里设置使用哪个模板，因为views->tmpl文件夹下的模板名称
				JRequest::setVar( 'view', 'default1'  );//文件路径设置。是view下的文件夹default1，当然view_html.php的类也必须是"组件+view+default1"
				JRequest::setVar( 'edit', true  );				
			}break;
			case 'view' :{
			
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为views->tmpl文件夹下的模板名称
				JRequest::setVar( 'view', 'district'  );//文件路径设置。是view下的文件夹default1，当然view_html.php的类也必须是"组件+view+default1"
				JRequest::setVar( 'edit', true  );				
			
			}break;
			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'city'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'citys');
		};

		parent::display();
	}

	
	
	
	
	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the cos_province parent information
		$row	=& JTable::getInstance('city', 'Table');
		
//array(8) { ["proname"]=> string(8) "Shanghai" ["description"]=> string(8) "dfsfsdfs" 
//["task"]=> string(4) "save" ["option"]=> string(12) "com_province" 
//["id"]=> string(1) "2" ["cid"]=> array(1) { [0]=> string(1) "2" } 
//["textfieldcheck"]=> string(0) "" ["c293f03092a989911df312e31cbf88f2"]=> string(1) "1" } 
		$post	= JRequest::get( 'post' );//有上传文件的话。这个自动过滤掉了的。想办法解决上传文件。






	$post['tips'] = JRequest::getVar( 'tips', '', 'post', 'string', JREQUEST_ALLOWRAW );
	$post['weather'] = JRequest::getVar( 'weather', '', 'post', 'string', JREQUEST_ALLOWRAW );
		
	$post['shopping'] = JRequest::getVar( 'shopping', '', 'post', 'string', JREQUEST_ALLOWRAW );


	$post['traffic'] = JRequest::getVar( 'traffic', '', 'post', 'string', JREQUEST_ALLOWRAW );
		
	$post['description'] = JRequest::getVar( 'description', '', 'post', 'string', JREQUEST_ALLOWRAW );


		if($_FILES['ufile']['size']){
			require_once(JPATH_ROOT.DS."includes".DS."Upload.php");
			require_once(JPATH_ROOT.DS."includes".DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."city","city");
			$return_obj=$fupload->run($_FILES['ufile']);

			//var_dump($return_obj->_fileList);
			//exit;
			$fnewpath="uploads/city/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."city".DS.$return_obj->_fileList['name'],180,150,0,JPATH_SITE.DS."uploads".DS."city".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$post = array_merge($post,$filenewname);

		}

		//var_dump($post);
		//exit;
		if (!$row->bind( $post ))
		{
			JError::raiseError(500, $row->getError() );
		}
	
		$isNew = ($row->id == 0);
/*为了允许只输入城市名称
		if (!$row->check())
		{
			JError::raiseError(500, $row->getError() );
		}
*/
		if (!$row->store())
		{
			JError::raiseError(500, $row->getError() );
		}

		$row->checkin();


		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to City saved' );
				$link = 'index.php?option=com_city&view=city&task=edit&cid[]='. $row->id .'';
				break;

			case 'save':
			default:
				$msg = JText::_( 'City saved' );
				$link = 'index.php?option=com_city&view=default1&task=listtab&cid[]='.$post[provinceid];
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
			$poll =& JTable::getInstance('city', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_city', $msg );
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
		$row	=& JTable::getInstance('city', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_city' );
	}

  function saveImgTitle(){
   $id = $_GET['id'];
   $pic_alt = $_GET['pic_alt'];
   $db = JFactory::getDBO();
   $sql = "update jos_cos_citymap set pic_alt='{$pic_alt}' where id='$id'";
   $db->setQuery($sql);
   $db->query();
   exit;
  }
}
