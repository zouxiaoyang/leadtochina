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
class HotelController extends JController
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
				JRequest::setVar( 'view', 'hotel'  );
				JRequest::setVar( 'edit', false  );
			} break;
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'hotel'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
			} break;

			case 'preview' :
			{
				JRequest::setVar( 'tmpl', 'component' );
				JRequest::setVar( 'view', 'hotel'  );
			} break;
		}

		//Set the default view, just in case
		$view = JRequest::getCmd('view');

		if(empty($view)) {
			JRequest::setVar('view', 'hotels');
		};

		parent::display();
	}

	function save()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();

		// save the cos_province parent information
		$row	=& JTable::getInstance('hotel', 'Table');
		

		$post	= JRequest::get( 'post' );

		$edit=(bool)JRequest::getVar( 'edit', true );

if(empty($post['description'])==false){
	$post['description'] = JRequest::getVar( 'description', '', 'post', 'string', JREQUEST_ALLOWRAW );
	}
	//$post['food'] = JRequest::getVar( 'food', '', 'post', 'string', JREQUEST_ALLOWRAW );
if(empty($post['surrounding'])==false){		
	$post['surrounding'] = JRequest::getVar( 'surrounding', '', 'post', 'string', JREQUEST_ALLOWRAW );	
}
if(empty($post['service'])==false){
	$post['service'] = JRequest::getVar( 'service', '', 'post', 'string', JREQUEST_ALLOWRAW );	
	
	}



		
		//var_dump($post['room']);
		//exit;

		if($_FILES['ufile']['size']){
			require_once(JPATH_ROOT .DS.'includes'.DS."Upload.php");
			require_once(JPATH_ROOT .DS.'includes'.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."hotel","hotel");
			$return_obj=$fupload->run($_FILES['ufile']);

			//var_dump($return_obj->_fileList);
			//exit;
			$fnewpath="uploads/hotel/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."hotel".DS.$return_obj->_fileList['name'],140,140,0,JPATH_SITE.DS."uploads".DS."hotel".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
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

		if($post['brand']>0){
		

			$row->brandid=$post['brand'];
		
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


		$route_title_arr=explode(" ",trim($post['name']));
		$route_title_str=implode("-",$route_title_arr);
		$route_url="/hotel/".strtolower($route_title_str).".html";

		if($edit==false){


			$surl="/index.php?option=com_showhotel&view=default&hotelid=".$row->id."&Itemid=69";
			$hotel_sql="INSERT INTO jos_cos_route_hotel (id,url,rurl,hotelid) VALUES (null,'".addslashes($route_url)."','".addslashes($surl)."',{$row->id})";
			$db->setQuery($hotel_sql);
			$db->query();

		}else{
		
			$db->setQuery("SELECT id FROM jos_cos_route_hotel WHERE hotelid={$row->id}");
			$exist_res=$db->query();
			if($exist_row=mysql_fetch_array($exist_res)){
				$hotel_sql="UPDATE jos_cos_route_hotel SET url='".addslashes($route_url)."' WHERE hotelid={$row->id}";
				$db->setQuery($hotel_sql);
				$db->query();
			}else{
				$surl="/index.php?option=com_showhotel&view=default&hotelid=".$row->id."&Itemid=69";
				$hotel_sql="INSERT INTO jos_cos_route_hotel (id,url,rurl,hotelid) VALUES (null,'".addslashes($route_url)."','".addslashes($surl)."',{$row->id})";
				$db->setQuery($hotel_sql);
				$db->query();			
			
			}
		
		}





		if(empty($post['room'])==false AND is_array($post['room'])){
		
			$room_count=count($post['room']);
			
				foreach($post['room'] AS $rkey=>$rval){
					if($edit==false){

						$temp_breakfast=$post['breakfast'][$rkey];
						if(empty($temp_breakfast)){
							$temp_breakfast=0;
						}else{
							$temp_breakfast=1;
						}
						$insert_sql="INSERT INTO jos_cos_room_type (id,hotelid,name,price,breakfast) VALUES (NULL,{$row->id},'".addslashes($post['room'][$rkey])."',{$post['price'][$rkey]},{$temp_breakfast})";
						mysql_query($insert_sql);
					
					}elseif($edit==true){

						$exist_sql="SELECT hotelid FROM jos_cos_room_type WHERE id=$rkey";

						$db->setQuery("$exist_sql");
						$exist_res=$db->query();

						//$exist_res=mysql_query($exist_sql);
						if($exist=mysql_fetch_assoc($exist_res)){

							if($exist['hotelid']==$row->id){
								$temp_room=$post['room'][$rkey];
								$temp_price=$post['price'][$rkey];
								$temp_breakfast=$post['breakfast'][$rkey];
								if(empty($temp_breakfast)){
									$temp_breakfast=0;
								}else{
									$temp_breakfast=1;
								}

								$insert_sql="UPDATE jos_cos_room_type SET name='".addslashes($temp_room)."',price={$temp_price},breakfast={$temp_breakfast} WHERE id=$rkey";
								$db->setQuery("$insert_sql");
								$db->query();
							}else{


								$temp_breakfast=$post['breakfast'][$rkey];
								if(empty($temp_breakfast)){
									$temp_breakfast=0;
								}else{
									$temp_breakfast=1;
								}
								//echo "INSERT INTO jos_cos_room_type (id,hotelid,name,price,breakfast) VALUES (NULL,{$row->id},{$post['room'][$rkey]},{$post['price'][$rkey]},{$temp_breakfast})";
								$insert_sql="INSERT INTO jos_cos_room_type (id,hotelid,name,price,breakfast) VALUES (NULL,{$row->id},'".addslashes($post['room'][$rkey])."',{$post['price'][$rkey]},{$temp_breakfast})";								//exit;

						$db->setQuery("$insert_sql");
						$db->query();


								//mysql_query($insert_sql);							
							
							}
						}else{
								$temp_breakfast=$post['breakfast'][$rkey];
								if(empty($temp_breakfast)){
									$temp_breakfast=0;
								}else{
									$temp_breakfast=1;
								}
								$insert_sql="INSERT INTO jos_cos_room_type (id,hotelid,name,price,breakfast) VALUES (NULL,{$row->id},'".addslashes($post['room'][$rkey])."',{$post['price'][$rkey]},{$temp_breakfast})";
								$db->setQuery("$insert_sql");
								$db->query();							
								
						
						}				
					
					}
					
				}

		}


		switch ($this->_task)
		{
			case 'apply':
				$msg = JText::_( 'saved' );
				$link = 'index.php?option=com_hotel&view=hotel&task=edit&cid[]='. $row->id .'';
				break;

			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = 'index.php?option=com_hotel';
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
			$poll =& JTable::getInstance('hotel', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_hotel', $msg );
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
		$row	=& JTable::getInstance('hotel', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_hotel' );
	}
}