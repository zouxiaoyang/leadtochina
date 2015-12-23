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
class KeywordController extends JController
{
	/**
	 * Custom Constructor
	 */
	function __construct( $default = array())
	{

		parent::__construct( $default );

		$this->registerTask( 'apply', 		'save');

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
				JRequest::setVar( 'view', 'keyword'  );
				JRequest::setVar( 'edit', false  );
			} break;
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'keyword'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;


		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'keywords');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the cos_province parent information
		$row	=& JTable::getInstance('keyword', 'Table');
		
//array(8) { ["proname"]=> string(8) "Shanghai" ["description"]=> string(8) "dfsfsdfs" 
//["task"]=> string(4) "save" ["option"]=> string(12) "com_province" 
//["id"]=> string(1) "2" ["cid"]=> array(1) { [0]=> string(1) "2" } 
//["textfieldcheck"]=> string(0) "" ["c293f03092a989911df312e31cbf88f2"]=> string(1) "1" } 
		$post	= JRequest::get( 'post' );
		//$post	= JRequest::get( 'post' );
	$post['description'] = JRequest::getVar( 'description', '', 'post', 'string', JREQUEST_ALLOWRAW );
	$post['notes'] = JRequest::getVar( 'notes', '', 'post', 'string', JREQUEST_ALLOWRAW );

	$post['remark'] = JRequest::getVar( 'remark', '', 'post', 'string', JREQUEST_ALLOWRAW );


		if($_FILES['ufile']['size']){
			require_once(JPATH_ROOT .DS.'includes'.DS."Upload.php");
			require_once(JPATH_ROOT .DS.'includes'.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."scenery","sce");
			$return_obj=$fupload->run($_FILES['ufile']);

			//var_dump($return_obj->_fileList);
			//exit;
			$fnewpath="uploads/scenery/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."scenery".DS.$return_obj->_fileList['name'],180,150,0,JPATH_SITE.DS."uploads".DS."scenery".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$row->ufile=null;
			$post = array_merge($post,$filenewname);

		}
		if($post['provinceid']>0){
		
			$db->setQuery("SELECT name FROM jos_cos_province WHERE id={$post['provinceid']}");
			$pro_res=$db->query();
			$pro_row=mysql_fetch_array($pro_res);
			$post['province_name']=$pro_row['name'];
			$row->province_name=$post['province_name'];
		
		}

		if($post['cityid']>0){
		
			$db->setQuery("SELECT name FROM jos_cos_city WHERE id={$post['cityid']}");
			$city_res=$db->query();
			$city_row=mysql_fetch_array($city_res);
			$post['city_name']=$city_row['name'];
			$row->city_name=$post['city_name'];
		
		}

		if(empty($post['cat1'])==false){
		
			if(empty($post['cat2'])==false){
			
				if(empty($post['cat3'])==false){
				
					$s_parentid=$post['cat3'];
					$s_catpath=$post['cat1'].",".$post['cat2'].",".$post['cat3'];

				}else{
				
					$s_parentid=$post['cat2'];
					$s_catpath=$post['cat1'].",".$post['cat2'];				
				
				}
			
			}else{
				
					$s_parentid=$post['cat1'];
					$s_catpath=$post['cat1'];
			
			}
			$row->categoreid=$s_parentid;
			$row->cat_path=$s_catpath;
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
		// save the poll options
		$options = JArrayHelper::getValue( $post, 'name', array(), 'array' );
		//var_dump($options);
		//exit;


		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to Poll saved' );
				$link = 'index.php?option=com_scenery&view=scenery&task=edit&cid[]='. $row->id .'';
				break;

			case 'save':
			default:
				$msg = JText::_( 'Poll saved' );
				$link = 'index.php?option=com_scenery';
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
			$poll =& JTable::getInstance('keyword', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_keyword', $msg );
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
		$row	=& JTable::getInstance('keyword', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_keyword' );
	}
}