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
class CtoursControllerPrice extends JController
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
				JRequest::setVar( 'layout', 'price'  );
				JRequest::setVar( 'view', 'addprice'  );
				JRequest::setVar( 'edit', false  );
			} break;

			case 'editprice'     :
			{
				//die("test");

				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'price_tpl'  );
				JRequest::setVar( 'view', 'price'  );
				JRequest::setVar( 'edit', true  );
			} break;

			case 'editroute'     :
			{


				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'route_tpl'  );
				JRequest::setVar( 'view', 'route'  );
				JRequest::setVar( 'edit', false  );
			} break;
			case 'editsmprice'     :
			{


				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'price_tpl'  );
				JRequest::setVar( 'view', 'price'  );
				JRequest::setVar( 'edit', true  );
			} break;
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'price'  );//这里设置使用哪个模板，因为province下面有两个HTML
				JRequest::setVar( 'view', 'addprice'  );//文件路径设置。是view
				JRequest::setVar( 'edit', true  );
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
		$post	= JRequest::get( 'post' );
		if($post["serialize"]==1){			
			$str_price=serialize($post["price_serialize"]);	
			$str_price_2013=serialize($post["price_serialize_1"]);	
			$obj=new stdClass();
			$obj->id=$post['packageid'];

			$obj->price_serialize=$str_price;
			$obj->price_serialize_1=$str_price_2013;

			$obj->price_include=JRequest::getVar( 'price_include', '', 'post', 'string', JREQUEST_ALLOWRAW );
			$obj->price_exclude=JRequest::getVar( 'price_exclude', '', 'post', 'string', JREQUEST_ALLOWRAW );

      if($post['price_serialize'][1]){
        $obj->price = $post["price_serialize"][1];
        $obj->price1 = $post["price_serialize"][8];
      }else{
        $obj->price = $post["price_serialize_1"][1];
        $obj->price1 = $post["price_serialize_1"][8];
      }

			$db->updateObject('jos_cos_tours_package',$obj,'id');
			$this->setRedirect( "index.php?option=com_ctours&c=price&view=price&task=editprice&cid[]={$post['packageid']}", JText::_( 'saved' ) );
			
		}else{
		if($post["package_class"]=="small"){
			$row	=& JTable::getInstance('sprice', 'Table');	
		}else{
			$row	=& JTable::getInstance('price', 'Table');
		}		

		if($post['packageid']){
			$db->setQuery("SELECT name FROM jos_cos_tours_package WHERE id=".$post['packageid']);
			$p_res=$db->loadAssoc();
			$pname=$p_res['name'];
			$post=array_merge($post,array('packagename'=>$pname));
		}

		if (!$row->bind( $post ))
		{
			JError::raiseError(500, $row->getError() );
		}
		
		$isNew =$post['isNew'] ;
		if($post["package_class"]=="small"){
			$packageid=$post['packageid'];
			$gro_options = JArrayHelper::getValue( $post, 'group_code', array(), 'array' );
			$arr_options = JArrayHelper::getValue( $post, 'arrival_date', array(), 'array' );
			$dep_options = JArrayHelper::getValue( $post, 'departure_date', array(), 'array' );
			$dou_options = JArrayHelper::getValue( $post, 'double_occ', array(), 'array' );
			$sin_options = JArrayHelper::getValue( $post, 'single_occ', array(), 'array' );
			$price_in = JRequest::getVar( 'price_in', '', 'post', 'string', JREQUEST_ALLOWRAW );
			$dou_min=min($dou_options);
			$sin_min=min($sin_options);
			if($dou_min<$sin_min){
				$res_min=$dou_min;
			}else{
				$res_min=$sin_min;
			}
			foreach ($gro_options as $i=>$code)
			{
				//$code = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
				if ($isNew=="yes")
				{
					$obj = new stdClass();
					$obj->packageid = (int)$packageid;
					$obj->group_code   = $code;
					$obj->arrival_date   = $arr_options[$i];
					$obj->departure_date   =  $dep_options[$i];
					$obj->double_occ   =  $dou_options[$i];
					$obj->single_occ   =  $sin_options[$i];

					$date_arr=explode('/',$arr_options[$i]);
					$year=$date_arr[2];
					$obj->years  = $year;

					$db->insertObject('#__cos_tours_price1', $obj);
					$db->setQuery("UPDATE jos_cos_tours_package SET price=$res_min,price_include='".addslashes($price_in)."' WHERE id=$packageid");					
					$db->query();
				}
				else
				{
					$obj = new stdClass();
					$obj->id     = (int)$i;
					$obj->packageid = (int)$packageid;
					$obj->group_code   = $code;
					$obj->arrival_date   = $arr_options[$i];
					$obj->departure_date   =  $dep_options[$i];;
					$obj->double_occ   =  $dou_options[$i];;
					$obj->single_occ   =  $sin_options[$i];;
					$date_arr=explode('/',$arr_options[$i]);
					$year=$date_arr[2];
					$obj->years  = $year;

					$db->updateObject('#__cos_tours_price1', $obj, 'id');
					$db->setQuery("UPDATE jos_cos_tours_package SET price=$res_min,price_include='".addslashes($price_in)."' WHERE id=$packageid");					
					$db->query();
				}
			}

		}else{
			$packageid=$post['packageid'];
			$hotel_options = JArrayHelper::getValue( $post, 'hotel_start', array(), 'array' );
			$two_options = JArrayHelper::getValue( $post, 'two', array(), 'array' );
			$three_options = JArrayHelper::getValue( $post, 'three_five', array(), 'array' );
			$six_options = JArrayHelper::getValue( $post, 'six_nice', array(), 'array' );
			$price_in = JRequest::getVar( 'price_in', '', 'post', 'string', JREQUEST_ALLOWRAW );
			//$sing_options = JArrayHelper::getValue( $post, 'single', array(), 'array' );
			$minarr=array();
			$minarr[]=min($two_options);
			//$minarr[]=min($three_options);
			//$minarr[]=min($six_options);
			//$three_min=min($three_options);
			$res_min=min($minarr);

			foreach ($two_options as $i=>$code)
			{
				//$code = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
				if($season_options[$i]=="淡季"){
					$season_options[$i]=1;
				}else{
					$season_options[$i]=0;
				}

/*
				if($sing_options[$i]=="标准间"){
				
					$sing_options[$i]=1;
				}else{
					$sing_options[$i]=0;
				}

*/
				if ($isNew=="yes")
				{
				    $sql = "select id from #__cos_tours_price where id='$i' and packageid='$packageid'";
                    $db->setQuery($sql);
                    $is_exist = $db->loadObject();
                    var_dump($is_exist);
                    var_dump($packageid);
    					$obj = new stdClass();
    					$obj->packageid = (int)$packageid;
    					$obj->hotel_start   = $hotel_options[$i];
    					$obj->two   = $code;
    					$obj->three_five   =  $three_options[$i];
    					$obj->six_nice   =  $six_options[$i];
    					//$obj->single   =  $sing_options[$i];
    					//$date_arr=explode('/',$arr_options[$i]);
    					//$year=$date_arr[2];
    					//$obj->years  = $year;
                    if($is_exist->id){
                        $obj->id = $is_exist->id;
                        $db->updateObject('#__cos_tours_price', $obj, 'id');
                    }else{
    					$db->insertObject('#__cos_tours_price', $obj);
                    }
					$db->setQuery("UPDATE jos_cos_tours_package SET price=$res_min,price_include='".addslashes($price_in)."' WHERE id=$packageid");
					
                    $db->query();
				}
				else
				{
  					$obj = new stdClass();
  					$obj->id     = (int)$i;
  					$obj->packageid = (int)$packageid;
  					$obj->hotel_start   = $hotel_options[$i];
  					$obj->two   = $code;
  					$obj->three_five   =  $three_options[$i];
  					$obj->six_nice   =  $six_options[$i];
  					//$obj->single   =  $sing_options[$i];
  					$db->updateObject('#__cos_tours_price', $obj, 'id');
  					
					$db->setQuery("UPDATE jos_cos_tours_package SET price=$res_min,price_include='".addslashes($price_in)."' WHERE id=$packageid");
					
  					$db->query();
				}
			}		
		}

	  switch ($this->_task){
			case 'apply':
				$msg = JText::_( 'Changes to  saved' );
					$link = 'index.php?option=com_ctours&view=ctours&c=price&task=editsmprice&cid[]='.$post['packageid'];
				break;
			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = 'index.php?option=com_ctours&view=ctours&c=price&task=editsmprice&cid[]='.$post['packageid'];
				break;
		}
		$this->setRedirect($link, $msg);
	}
	}
	function remove()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$db		=& JFactory::getDBO();
		$cid	= JRequest::getVar( 'cid', array(), '', 'array' );
		$packageid =JRequest::getVar( 'packageid', 0, '', 'int' );
		$packclass=JRequest::getVar( 'package_class' );

		JArrayHelper::toInteger($cid);
		$msg = '';

		for ($i=0, $n=count($cid); $i < $n; $i++)
		{
			if($packclass=="small"){
			$poll =& JTable::getInstance('price', 'Table');
			}else{
				$poll =& JTable::getInstance('sprice', 'Table');
			}
			if (!$poll->delete( $cid[$i] ))
			{
				$msg .= $poll->getError();
			}
		}
		if($packclass=="small"){
		$this->setRedirect( "index.php?option=com_ctours&view=ctours&c=price&task=editprice&cid[]=$packageid", $msg );}else{
		$this->setRedirect( "index.php?option=com_ctours&view=ctours&c=price&task=editsmprice&cid[]=$packageid", $msg );		
		}
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
