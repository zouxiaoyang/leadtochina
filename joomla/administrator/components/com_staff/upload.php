<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );
define( 'JPATH_INCLUDES',         JPATH_ROOT.DS.'includes');
jimport( 'joomla.application.component.controller' );

class StaffControllerUpload extends JController
{
	function __construct( $default = array())
	{
		parent::__construct( $default );
		$this->registerTask( 'apply', 		'save');
		$this->registerTask( 'editprice', 	'display');//编辑价格
		$this->registerTask( 'editroute' , 	'display');//编辑行程
		$this->registerTask( 'edit', 		'display');
		$this->registerTask( 'add' , 		'display');

	}

	function display( )
	{
		switch($this->getTask())
		{
			
			case 'editpic':
				{
					JRequest::setVar( 'hidemainmenu', 1 );
					JRequest::setVar( 'layout', 'form2'  );
					JRequest::setVar( 'view', 'uploadpic'  );
					JRequest::setVar( 'edit', false  );
				} break;
			case 'upload':
				{
					JRequest::setVar( 'hidemainmenu', 1 );
					JRequest::setVar( 'layout', 'form'  );
					JRequest::setVar( 'view', 'uploadpic'  );
					JRequest::setVar( 'edit', false  );
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
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$db		=& JFactory::getDBO();
		$row	=& JTable::getInstance('uploadpic', 'Table');
		$post	= JRequest::get( 'post' );
		
		if($_FILES['ufile']['size']){
			require_once(JPATH_INCLUDES.DS."Upload.php");
			require_once(JPATH_INCLUDES.DS."ThumbImage.php");
			$fupload=new Upload(JPATH_ROOT.DS."uploads".DS."staff","cndes");
			$return_obj=$fupload->run($_FILES['ufile']);
			$fnewpath="uploads/staff/";
			$filename=$return_obj->_fileList['name'];

			$filenewname=array("pic_path"=>$filename,"pic_dir"=>$fnewpath);
			$thum=new resizeimage(JPATH_SITE.DS."uploads".DS."staff".DS.$return_obj->_fileList['name'],245,325,0,JPATH_SITE.DS."uploads".DS."staff".DS."thumb".DS."thumb_".$return_obj->_fileList['name']);
			$row->pic_dir=null;
			$row->pic_path=null;
			$post = array_merge($post,$filenewname);
		}

		if(empty($post['staffid'])){

			echo "ID有误，请跟管理员联系。";
			exit;
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
				$msg = JText::_( 'Changes to  saved' );
				$link = 'index.php?option=com_staff&view=staff&task=edit&cid[]='. $row->staffid;
				break;

			case 'save':
			default:
				$msg = JText::_( 'saved' );
				$link = "index.php?option=com_staff&c=upload&view=uploadpic&task=upload&cid[]=". $post['staffid'];
				break;
		}

		$this->setRedirect($link, $msg);
	}

	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$id		= JRequest::getVar( 'id', 0, '', 'int' );
		$db		=& JFactory::getDBO();
		$row	=& JTable::getInstance('staff', 'Table');

		$row->checkin( $id );
		$this->setRedirect( 'index.php?option=com_staff' );
	}
}