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
class MagrequestionController extends JController
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
			case 'showOder'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'order'  );//文件路径设置。是view
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
			JRequest::setVar('view', 'orders');
		};

		parent::display();
	}



	function remove()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		$usergroup = $user->name;
    /*
		if($usergroup!="Administrator"){
			echo "<script>alert('您无权删除！请系统管理员协助。');history.go(-1);</script>";
			exit;
		}
     */
		

		$cid = JRequest::getVar( 'cid', array(), '', 'array' );	
		
		JArrayHelper::toInteger($cid);
		$msg = '';		
		for ($i=0, $n=count($cid); $i < $n; $i++)
		{
			$poll =& JTable::getInstance('order', 'Table');
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		$this->setRedirect( 'index.php?option=com_magrequestion', $msg );
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
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$this->setRedirect( 'index.php?option=com_magrequestion' );
	}
	
	function delete()
	{
	  $id = JRequest::getInt('id', 0);
	  $postid=JRequest::getInt('postid');	  
	  $db =& JFactory::getDBO();
	  $query = $db->getQuery();
	  $sql = "delete from #__cos_question where id='$id'";
	  $db->setQuery($sql);
	  $db->query();
	  $db->setQuery("select count(*) c from #__cos_question where postid=$postid");
	  $reply_count=$db->loadObject();	  
	  $db->setQuery("update #__cos_question set countreply=$reply_count->c where id=$postid");
	  $db->query();
	  echo 0;exit;
	  
	}
  
  function editReply(){
    $db=&JFactory::getDBO();
    $post=JRequest::get('post');
    $username=addslashes($post["username"]);
    $content=addslashes($post["content"]);
    $sql="update #__cos_question set username='$username',content='$content',user_ip='{$post["user_ip"]}' where id='{$post["huifuid"]}'";
    $db->setQuery($sql);
    if($db->query()){
      echo "<script>history.go(-1);</script>";
    }
  }

  function getUnreadNum(){  
      $db		=& JFactory::getDBO();
      $sql="select count(*) as c from #__cos_question where postid = 0 and is_read=0";

      $db->setQuery($sql);
      $question = $db->loadObject();
      echo $question->c;
      exit;
  }
  
  function updateReadStatus(){
    $db=&JFactory::getDBO();
    $post=JRequest::get('post');
    $sql="update #__cos_question set is_read=1 where id={$post["id_num"]}";
    $db->setQuery($sql);
    if($db->query()){
      echo 0;
    }else{
      echo 1;
    }
    exit;
  }
  
  function Reply_message(){
  	$db=&JFactory::getDBO();
  	$username=$_REQUEST['ask_username'];
	$shortcontent=$_REQUEST['shortcontent'];
	$content=$_REQUEST['ask_content'];
	$email=$_REQUEST['ask_email'];
	$replay_postid=$_REQUEST['replay_postid'];
	$sourceurl=$_SERVER['HTTP_REFERER'];	
	if(empty($sourceurl)){	
		echo "URL error!";
		exit;	
	}
	if(empty($username)){	
		echo "Please enter your name!";
		exit;	
	}
	$ip=$_SERVER['REMOTE_ADDR'];
	$datenow=time();	
	$sql="INSERT INTO jos_cos_question (id,postid,content,username,url,user_ip,dateline) VALUES (NULL,$replay_postid,'".addslashes($content)."','".addslashes($username)."','".addslashes($sourceurl)."','{$ip}',{$datenow})";
	$db->setQuery($sql);
	if($db->query()){
		$db->setQuery("update jos_cos_question set countreply=countreply+1 where id=$replay_postid");
		$db->query();
		echo 'ok';
	}else{
		echo 'error';
	}
	exit;
  }

}
