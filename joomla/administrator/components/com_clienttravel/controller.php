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
class ClienttravelController extends JController
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
				JRequest::setVar( 'view', 'clienttravel'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'editprice'     :
			{

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view', 'clienttravel'  );
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
				JRequest::setVar( 'view', 'clienttravel'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'clienttravel'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'clienttravels');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the cos_province parent information
		$row	=& JTable::getInstance('clienttravel', 'Table');
		


		$post	= JRequest::get( 'post' );



		$post['c_name']=$post['Gender'].$post['c_name'];

		$url="";
		if(empty($post['seo_title'])==false){
		
			$seo_title=explode(",",$post['seo_title']);

			$cat_name=str_replace(chr(32),"-",strtolower(trim($seo_title[0])));

			$url="/tour/".$cat_name.".html";

			$db->setQuery("SELECT id FROM jos_cos_client_package WHERE url LIKE '$url'");
			//$exist_res=$db->query();
			$exist_url = $db->loadObjectList();
			if(empty($exist_url[0]->id)==false){
				$url="/tour/".$cat_name."-{$exist_url[0]->id}.html";
			}
			$row->url="";
			$filenewname=array("url"=>$url);
			$post = array_merge($post,$filenewname);
		}

	$post['tour_intro'] = JRequest::getVar( 'tour_intro', '', 'post', 'string', JREQUEST_ALLOWRAW );
		
	$post['pinclude'] = JRequest::getVar( 'pinclude', '', 'post', 'string', JREQUEST_ALLOWRAW );	
		
	$post['notice'] = JRequest::getVar( 'notice', '', 'post', 'string', JREQUEST_ALLOWRAW );
		
	
		


		

		

		
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
			$row->ufile=null;
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
		if($days>0){
			if($isNew){
				for($i=1;$i<=$days;$i++){
					

						$obj = new stdClass();
						$obj->c_packageid = (int)$row->id;
						$obj->packagename   = $post['package_name'];
						$db->insertObject('#__cos_client_route', $obj);
				}
			}else{
			$cpid=$row->id;
			$db->setQuery("SELECT id FROM jos_cos_client_route WHERE c_packageid=$cpid");
			//$exist_res=$db->query();
			$route_arr = $db->loadObjectList();
				if(!$route_arr[0]->id){

					for($i=1;$i<=$days;$i++){
						

							$obj = new stdClass();
							$obj->c_packageid = (int)$row->id;

							$obj->packagename   = $post['package_name'];
							$db->insertObject('#__cos_client_route', $obj);
					}			
					
				
				}
			}
		}


		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'Changes to Poll saved' );
				$link = 'index.php?option=com_clienttravel&view=clienttravel&task=edit&cid[]='. $row->id .'';
				break;

			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = 'index.php?option=com_clienttravel';
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
			$poll =& JTable::getInstance('clienttravel', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_clienttravel', $msg );
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
		$row	=& JTable::getInstance('clienttravel', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_clienttravel' );
	}
}