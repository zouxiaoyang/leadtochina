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
		$post	= JRequest::get( 'post' );
		/*
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
		*/
		  $post['tips'] = JRequest::getVar( 'tips','', 'post', 'string', JREQUEST_ALLOWRAW);
			if($post['tips']=="<p><br mce_bogus=\"1\"></p>"||$post['tips']=="<p><br></p>"){
				$post['tips']='';
			}
		  $post['route_Intro'] = JRequest::getVar( 'route_Intro', '', 'post', 'string', JREQUEST_ALLOWRAW );
		  $post['tour_intro'] = JRequest::getVar( 'tour_intro', '', 'post', 'string', JREQUEST_ALLOWRAW );
		  $post['note'] = JRequest::getVar( 'note', '', 'post', 'string', JREQUEST_ALLOWRAW );
		 // $post['lightbox'] = JRequest::getVar('lightbox', '', 'post', 'string', JREQUEST_ALLOWRAW );
		  $post['vehicle_type'] = implode(',', $post['vehicle_type']);	
		  $post['highlight'] = implode(',', $post['highlight']);
		  $post['theme'] = implode(',', $post['theme']);

		$cate_arr=array();
		$cate_arr=$post['categorieid_str'];
		/*
		if(empty($cate_arr)==false){
			$ca_c=count($cate_arr);
			$cat_name_str='';
			for($i=0;$i<$ca_c;$i++){
				if(is_array($cate_arr)){
					$temp_id=$cate_arr[$i];
				}else{
					$temp_id=$cate_arr;
				}
				$db->setQuery("SELECT parent_id,title FROM jos_categories WHERE id={$temp_id}");
				$cat_res=$db->query();
				$cat_seled="";
				$cat_row=mysql_fetch_assoc($cat_res);
				if($i==0){
					$cat_name_str=$cat_row['title'];
				}else{
					$cat_name_str.=",";
				}
				$cat_name_str.=$cat_row['title'];
				$paren_arr=array("category_parentid"=>$cat_row['parent_id']);
				$post=array_merge($post,$paren_arr);
				$row->category_parentid=0;
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
		*/
		$post['categorieid_str'] =$post['childid']; 
		if($_FILES['ufile']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."chinaTours","cntours");
			$return_obj=$fupload->run($_FILES['ufile']);

			$fnewpath="uploads/chinaTours/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("ufile"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."chinaTours".DS.$return_obj->_fileList['name'],220,235,0,JPATH_SITE.DS."uploads".DS."chinaTours".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$row->ufile=null;
			$post = array_merge($post,$filenewname);
		}
		
		if($_FILES['pic']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."chinaTours","cntours");
			$return_obj=$fupload->run($_FILES['pic']);

			$fnewpath="uploads/chinaTours/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("pic"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."chinaTours".DS.$return_obj->_fileList['name'],140,117,0,JPATH_SITE.DS."uploads".DS."chinaTours".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$row->pic=null;
			$post = array_merge($post,$filenewname);
		}
		
		if($_FILES['pic_big']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."chinaTours","cntours");
			$return_obj=$fupload->run($_FILES['pic_big']);

			$fnewpath="uploads/chinaTours/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("pic_big"=>$filename,"filedir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."chinaTours".DS.$return_obj->_fileList['name'],213,266,0,JPATH_SITE.DS."uploads".DS."chinaTours".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$row->pic_big=null;
			$post = array_merge($post,$filenewname);
		}

    if($_FILES['cruise_recommend_pic']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."chinaTours","cntours");
			$return_obj=$fupload->run($_FILES['cruise_recommend_pic']);

			$fnewpath="uploads/chinaTours/";
			$filename=$return_obj->_fileList['name'];
			$filenewname=array("cruise_recommend_pic"=>$filename,"filedir"=>$fnewpath);
			//$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."chinaTours".DS.$return_obj->_fileList['name'],150,120,0,JPATH_SITE.DS."uploads".DS."chinaTours".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->filedir=null;
			$row->pic_big=null;
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
		$days=$post['days'];
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




	function copy_info(){
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();
		
		$cid	= JRequest::getVar( 'cid', array(), '', 'array' );
		JArrayHelper::toInteger($cid);

		$msg = '';

		for ($i=0, $n=count($cid); $i < $n; $i++)
		{
			$id = $cid[$i];

$query = 'insert #__cos_tours_package (package_type,category_parentid,categorieid_str,chinatours_cat_id,package_code,categorie_name_str,name,package_grade,route,package_tour_type,tour_intro,targets,route_Intro,departs,price,price1,price_low,price_num,price_serialize,price_serialize_1,price_serialize_2,price_yuan,days,note,ufile,pic,pic_beijing_top,pic_big,pic_big_alt,cruise_recommend_pic,filedir,price_include,price_exclude,tips,seo_title,seo_key,seo_description,attractions,promotion,recommand_reason,published,update_route,hot,hot_tour,reviews,is_half_day,tour_type,beijing_tour_type,vehicle_type,destination_addr,one_category,two_category,by_group,tour_tagids,tour_subtag_ids,sort,theme,highlight,season,fnum,views,top,recommend,city_recommend,index_recommend,index_recommend_order,start_city,end_city,city_num) SELECT package_type,category_parentid,categorieid_str,chinatours_cat_id,package_code,categorie_name_str,name,package_grade,route,package_tour_type,tour_intro,targets,route_Intro,departs,price,price1,price_low,price_num,price_serialize,price_serialize_1,price_serialize_2,price_yuan,days,note,ufile,pic,pic_beijing_top,pic_big,pic_big_alt,cruise_recommend_pic,filedir,price_include,price_exclude,tips,seo_title,seo_key,seo_description,attractions,promotion,recommand_reason,published,update_route,hot,hot_tour,reviews,is_half_day,tour_type,beijing_tour_type,vehicle_type,destination_addr,one_category,two_category,by_group,tour_tagids,tour_subtag_ids,sort,theme,highlight,season,fnum,views,top,recommend,city_recommend,index_recommend,index_recommend_order,start_city,end_city,city_num'. ' FROM #__cos_tours_package where id='.$id;
			$db->setQuery( $query);
			$rows = $db->query();
			$new_id = mysql_insert_id();



			$sql = 'insert #__cos_tours_des (packageid,packagename,eat_standard,today_route,hotel_name,hotel_grade,hotel_grade_str,hotel_standardid,ufile,filedir,activities) SELECT '.$new_id.',packagename,eat_standard,today_route,hotel_name,hotel_grade,hotel_grade_str,hotel_standardid,ufile,filedir,activities'. ' FROM #__cos_tours_des where packageid='.$id;
			$db->setQuery($sql);
			$rows = $db->query();

			$sql2 = 'insert #__cos_testimonisal (city_id,day,packageid,name,nationnality,tour_time,type,pic_name,image,title,description,pic_alt,recomment,created) SELECT city_id,day,'.$new_id.',name,nationnality,tour_time,type,pic_name,image,title,description,pic_alt,recomment,created'. ' FROM #__cos_testimonisal where packageid='.$id;
			$db->setQuery($sql2);
			$rows = $db->query();


			$sql3 = 'insert #__cos_uploadpic (title,packageid,staffid,pic_alt,pic_sort,pic_dir,pic_path,recommend) SELECT title,'.$new_id.',staffid,pic_alt,pic_sort,pic_dir,pic_path,recommend'. ' FROM #__cos_uploadpic where packageid='.$id;
			$db->setQuery($sql3);
			$rows = $db->query();	
		}
		$msg = JText::_( 'saved' );
		$link = 'index.php?option=com_cntours';
		$this->setRedirect($link, $msg);
	}
	

	
	function season_change(){
		JRequest::checkToken() or jexit( 'Invalid Token' );			
		$cid	= JRequest::getVar( 'cid', array(), '', 'array' );
		$season_state = JRequest::getVar('season', '0', 'int');
		JArrayHelper::toInteger($cid);
		$msg="";
		$models=&$this->getModel("cntours");
		if($models->season_changes($cid,$season_state)){
			$msg=JText::_('saved');
		}		
		$this->setRedirect( 'index.php?option=com_cntours', $msg );	
	}
	
	function update_views(){
		$id = JRequest::getInt('id');
		$views = JRequest::getInt('views');
		$db = JFactory::getDBO();
		$sql = "update jos_cos_tours_package set views=$views where id=$id";
		$db->setQuery($sql);
		$db->query();
		echo 0;exit;
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

  function recommend(){
    $id = JRequest::getInt('id',0);
		$db		=& JFactory::getDBO();
    $sql = "select id,recommend from #__cos_uploadpic where id='$id'";
    $db->setQuery($sql);
    $ret = $db->loadObject();

    if($ret->recommend){
      $sql = "update #__cos_uploadpic set recommend=0 where id='$id'";
      $db->setQuery($sql);
      $db->query();
      echo 0;
    }else{
      $sql = "update #__cos_uploadpic set recommend=1 where id='$id'";
      $db->setQuery($sql);
      $db->query();
      echo 1;
    }
    exit;

    
  }

  function modify_pic_alt(){
    $id = JRequest::getInt('id', 0); 
    $pic_alt = JRequest::getVar("pic_alt");

		$db		=& JFactory::getDBO();
    $sql = "update #__cos_uploadpic set pic_alt='$pic_alt' where id='$id'";
    $db->setQuery($sql);
    $db->query();
    echo $sql;
    exit;
  }
  function modify_pic_sort(){
    $id = JRequest::getInt('id', 0); 
    $pic_sort = (int)JRequest::getVar("pic_sort");
	$db		=& JFactory::getDBO();
    $sql = "update #__cos_uploadpic set pic_sort=$pic_sort where id='$id'";
    $db->setQuery($sql);
    $db->query();
    echo $sql;
    exit;
  }
}
