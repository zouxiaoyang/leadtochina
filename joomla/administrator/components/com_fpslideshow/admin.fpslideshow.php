<?php
/*
// "Frontpage Slideshow" Component for Joomla! 1.5.x - Version 1.7.1
// Copyright (c) 2006 - 2008 JoomlaWorks, a Komrade LLC company.
// This code cannot be redistributed without permission from JoomlaWorks - http://www.joomlaworks.gr.
// More info at http://www.joomlaworks.gr and http://www.frontpageslideshow.net
// Developers: Fotis Evangelou - George Chouliaras
// ***Last update: February 27th, 2008***
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Set the table directory
JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_fpslideshow'.DS.'tables');

$mosConfig_absolute_path 	= JPATH_SITE;
$mosConfig_live_site 		= $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();

require_once( JApplicationHelper::getPath('class') );
require_once( JApplicationHelper::getPath('admin_html') );

$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
JArrayHelper::toInteger($cid, array(0));

// Output
HTML_FPSlideShow::showHeader($option, $task);
HTML_FPSlideShow::showNavBar($option, $task);

switch ($task) {

	// CONFIG
	case "save_config":
		saveConfig( $option, $mosConfig_absolute_path );
		break;

	case "config":
		editConfig( $fpss_config, $option );
		break;

		// SLIDES
	case "cancel":
		cancelSlide( $option );
		break;

	case "slides":
		showSlides( $option );
		break;

	case "new":
		editSlide( 0, $option, $fpss_config );
		break;

	case "edit":
		editSlide( $cid[0], $option, $fpss_config );
		break;

	case "save":
		saveSlide( $option );
		break;

	case "orderup":
		orderSlide( $cid[0], -1, $option );
		break;

	case "orderdown":
		orderSlide( $cid[0], 1, $option );
		break;

	case "saveorder":
		saveOrder( $cid, $option );
		break;

	case "publish":
		publishImages( $cid, 1, $option );
		break;

	case "unpublish":
		publishImages( $cid, 0, $option );
		break;

	case "deleteslides":
		deleteSlides( $cid, $option );
		break;

	case 'accesspublic':
		accessMenu( intval( $cid[0] ), 0, $option, $task );
		break;

	case 'accessregistered':
		accessMenu( intval( $cid[0] ), 1, $option, $task );
		break;

	case 'accessspecial':
		accessMenu( intval( $cid[0] ), 2, $option, $task );
		break;

		// CREDITS
	case "credits":
		viewCredits( $option );
		break;

		// DEFAULT
	default:
		showSlides( $option );
		break;
}

HTML_FPSlideShow::showFooter();

function viewCredits( $option ) {

	HTML_FPSlideShow::viewCredits( $option );

}


// CONFIG
function editConfig( &$fpss_config, $option ) {
	global $mainframe;

	// Make sure the user is authorized to view this page
	$user = & JFactory::getUser();
	if (!$user->authorize( 'com_config', 'manage' )) {
		$mainframe->redirect('index.php', JText::_('ALERTNOTAUTH'));
	}


	$lists = array();

	$lists['editor'] 			= JHTML::_('select.booleanlist', 'editor', '', intval($fpss_config->editor));
	$lists['show_width'] 		= JHTML::_('select.booleanlist', 'show_width', '', intval($fpss_config->show_width));
	$lists['show_quality'] 		= JHTML::_('select.booleanlist', 'show_quality', '', intval($fpss_config->show_quality));
	$lists['showtitle'] 		= JHTML::_('select.booleanlist', 'showtitle', '', intval($fpss_config->showtitle));
	$lists['showseccat'] 		= JHTML::_('select.booleanlist', 'showseccat', '', intval($fpss_config->showseccat));
	$lists['showcustomtext'] 	= JHTML::_('select.booleanlist', 'showcustomtext', '', intval($fpss_config->showcustomtext));
	$lists['showplaintext'] 	= JHTML::_('select.booleanlist', 'showplaintext', '', intval($fpss_config->showplaintext));
	$lists['showreadmore'] 		= JHTML::_('select.booleanlist', 'showreadmore', '', intval($fpss_config->showreadmore));

	HTML_FPSlideShow::editConfig( $fpss_config, $lists, $option );

}

function saveConfig( $option, $mosConfig_absolute_path ) {
	global $mainframe;

	$user = & JFactory::getUser();
	if ($user->gid!=25) {
		$mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
	}

	// Check for request forgeries
	JRequest::checkToken() or die( 'Invalid Token' );

	// Set FTP credentials, if given
	jimport('joomla.client.helper');
	JClientHelper::setCredentialsFromRequest('ftp');
	$ftp = JClientHelper::getCredentials('ftp');

	$config = new JRegistry('config');
	$config_array = array();

	// CONFIG SETTINGS
	$config_array['editor']				= JRequest::getVar('editor', 1, 'post', 'int');
	$config_array['show_width']			= JRequest::getVar('show_width', 0, 'post', 'int');
	$config_array['show_quality']		= JRequest::getVar('show_quality', 0, 'post', 'int');
	$config_array['width']				= JRequest::getVar('width', 300, 'post', 'int');
	$config_array['quality']			= JRequest::getVar('quality', 80, 'post', 'int');
	$config_array['basepath']			= JRequest::getVar('basepath', 'images/stories', 'post', 'text');
	$config_array['showtitle']			= JRequest::getVar('showtitle', 1, 'post', 'int');
	$config_array['showseccat']			= JRequest::getVar('showseccat', 1, 'post', 'int');
	$config_array['showcustomtext']		= JRequest::getVar('showcustomtext', 1, 'post', 'int');
	$config_array['showplaintext']		= JRequest::getVar('showplaintext', 1, 'post', 'int');
	$config_array['showreadmore']		= JRequest::getVar('showreadmore', 1, 'post', 'int');

	if (!is_dir($mosConfig_absolute_path.DS.$config_array['basepath'])) {
		$msg=JText::_('FPSS_CONFIG_ERROR_PATH');
		$mainframe->redirect('index.php?option=com_fpslideshow&task=config', $msg);
		exit();
	}

	$config->loadArray($config_array);

	// Get the path of the configuration file
	$fname =  JPATH_ADMINISTRATOR.DS.'components'.DS.'com_fpslideshow'.DS.'configuration.php';

	JClientHelper::getCredentials('ftp', true);

	// Try to make configuration.php writeable
	jimport('joomla.filesystem.path');
	if (!JPath::setPermissions($fname, '0644')) {
		JError::raiseNotice('SOME_ERROR_CODE', 'Could not make configuration.php writable');
	}

	// Get the config registry in PHP class format and write it to configuation.php
	jimport('joomla.filesystem.file');
	if (JFile::write($fname, $config->toString('PHP', 'config', array('class' => 'FPSSConfig')))) {
		$msg = JText::_('FPSS_CONFIG_SAVED');
	} else {
		$msg = JText::_('FPSS_CONFIG_SAVED_ERROR');
	}

	// Try to make configuration.php unwriteable
	if (!JPath::setPermissions($fname, '0444')) {
		JError::raiseNotice('SOME_ERROR_CODE', 'Could not make configuration.php unwritable');
	}

	// Redirect appropriately
	$mainframe->redirect('index.php?option=com_fpslideshow&task=config', $msg);
}


// SLIDES
function showSlides( $option ) {
	global $mainframe;

	$db = &JFactory::getDBO();

	// limit
	$limit = JRequest::getVar('limit', $mainframe->getCfg('list_limit'));
	$limitstart = JRequest::getVar('limitstart', 0);

	// query count
	$query = 'SELECT COUNT(s.id)'
	. ' FROM '._FPSS_TABLE_SLIDES.' AS s'
	;
	$db->setQuery( $query );
	$total = $db->loadResult();

	// pagination
	jimport('joomla.html.pagination');
	$pagination = new JPagination( $total, $limitstart, $limit );

	// main query
	$query = 'SELECT s.*, g.name as groupname '
	. ' FROM '._FPSS_TABLE_SLIDES.' AS s'
	. ' LEFT JOIN #__groups AS g ON g.id = s.registers'
	. ' ORDER BY s.ordering'
	;
	//echo $query;

	$db->setQuery( $query, $pagination->limitstart, $pagination->limit );
	$slides = $db->loadObjectList();

	HTML_FPSlideShow::showSlides( $slides, $pagination, $option );
}

function publishImages( $cid=null, $state=0, $option ) {
	global $mainframe;
	
	$limit = JRequest::getVar('limit', $mainframe->getCfg('list_limit'));
	$limitstart = JRequest::getVar('limitstart', 0);

	$db = &JFactory::getDBO();

	// Check for request forgeries
	JRequest::checkToken() or die( 'Invalid Token' );

	JArrayHelper::toInteger($cid);

	if (count( $cid ) < 1) {
		$action = $publish ? 'publish' : 'unpublish';
		JError::raiseError(500, JText::_( 'Select a slide to '.$action, true ) );
	}

	$total = count($cid);
	$cids = implode( ',', $cid );

	$query = "UPDATE "._FPSS_TABLE_SLIDES
	. "\n SET state = $state "
	. "\n WHERE id IN ( $cids )"
	;
	$db->setQuery( $query );
	if (!$db->query()) {
		JError::raiseError(500, $db->getErrorMsg() );
	}

	if (count( $cid ) == 1) {
		$row = new mosFPSlideShowImages( $database );
		$row->checkin( $cid[0] );
	}

	switch ( $state ) {
		case 1:
			$msg = $total .' '.JText::_('FPSS_IMAGES_PUBLISHED_DONE');
			break;

		case 0:
		default:
			$msg = $total .' '.JText::_('FPSS_IMAGES_UNPUBLISHED_DONE');
			break;
	}

	$mainframe->redirect( 'index.php?option='.$option.'&task=slides&limit='.$limit.'&limitstart='.$limitstart, $msg );
}

function accessMenu( $uid, $access, $option, $task ) {
	global $mainframe;

	// Check for request forgeries
	JRequest::checkToken() or die( 'Invalid Token' );

	$db  =& JFactory::getDBO();
	$cid = JRequest::getVar( 'cid', array(), '', 'array' );
	$n   = count( $cid );

	switch ($task) {

		case 'accessregistered' :
			$access = 1;
			break;

		case 'accessspecial' :
			$access = 2;
			break;

		case 'accesspublic' :
		default:
			$access = 0;
			break;

	}

	JArrayHelper::toInteger( $cid );
	$cids = implode( ',', $cid );

	$query = 'UPDATE '._FPSS_TABLE_SLIDES
	. ' SET registers = ' . (int) $access
	. ' WHERE id IN ( '. $cids.'  )'
	; echo $query;
	$db->setQuery( $query );
	if (!$db->query()) {
		return JError::raiseWarning( 500, $row->getError() );
	}

	$msg =JText::sprintf( 'FPSS_IMAGES_CHANGE_ACCESS_IMAGES', $n );

	$mainframe->redirect('index.php?option='.$option.'&task=slides', $msg);
}

function orderSlide( $uid, $inc, $option ) {
	global $mainframe, $option;

	// Check for request forgeries
	JRequest::checkToken() or die( 'Invalid Token' );

	// Initialize variables
	$db		= & JFactory::getDBO();

	$row = & JTable::getInstance('slide', 'Table');
	$row->load( (int) $uid );
	$row->move( $inc );

	$cache = & JFactory::getCache($option);
	$cache->clean();

	$mainframe->redirect('index.php?option='.$option.'&task=slides');

}

function saveOrder( &$cid, $option ) {
	global $mainframe, $option;

	// Check for request forgeries
	JRequest::checkToken() or die( 'Invalid Token' );

	// Initialize variables
	$db			= & JFactory::getDBO();

	$cid		= JRequest::getVar( 'cid', array(0), 'post', 'array' );
	$order		= JRequest::getVar( 'order', array (0), 'post', 'array' );
	$total		= count($cid);
	$conditions	= array ();

	JArrayHelper::toInteger($cid, array(0));
	JArrayHelper::toInteger($order, array(0));

	// Instantiate an slide table object
	$row = & JTable::getInstance('slide', 'Table');

	// Update the ordering for items in the cid array
	for ($i = 0; $i < $total; $i ++)
	{
		$row->load( (int) $cid[$i] );
		if ($row->ordering != $order[$i]) {
			$row->ordering = $order[$i];
			if (!$row->store()) {
				JError::raiseError( 500, $db->getErrorMsg() );
				return false;
			}
			// remember to updateOrder this group
			$condition = '';
			$found = false;
			foreach ($conditions as $cond)
			if ($cond[1] == $condition) {
				$found = true;
				break;
			}
			if (!$found)
			$conditions[] = array ($row->id, $condition);
		}
	}

	// execute updateOrder for each group
	foreach ($conditions as $cond)
	{
		$row->load($cond[0]);
		$row->reorder($cond[1]);
	}

	$cache = & JFactory::getCache($option);
	$cache->clean();

	$msg = JText::_('FPSS_IMAGES_FULLREORDERING_DONE');
	$mainframe->redirect('index.php?option='.$option.'&task=slides', $msg);
}

function editSlide( $uid, $option, $config ) {
	global $mainframe;

	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );

	JArrayHelper::toInteger($cid, array(0));
	$db =& JFactory::getDBO();

	// SLIDE
	$row =& JTable::getInstance('slide', 'Table');
	$id = intval($uid);
	$row->load($id);
	$slide =& $row;

	$editor =& JFactory::getEditor();

	if(!$slide->id) {
		$slide->showtitle=$config->showtitle;
		$slide->showseccat=$config->showseccat;
		$slide->showcustomtext=$config->showcustomtext;
		$slide->showplaintext=$config->showplaintext;
		$slide->showreadmore=$config->showreadmore;
		$slide->registers=0;
	}

	$nullDate = $db->getNullDate();
	if($slide->publish_up==$nullDate) $slide->publish_up="";
	if($slide->publish_down==$nullDate) $slide->publish_down="Never";

	$lists['published'] = JHTML::_('select.booleanlist', 'state', '', $slide->state);
	$lists['publish_up'] = JHTML::_('calendar', $slide->publish_up, 'publish_up', 'publish_up', '%Y-%m-%d', array('class'=>'inputbox', 'size'=>'25', 'maxlength'=>'19'));
	$lists['publish_down'] = JHTML::_('calendar', $slide->publish_down, 'publish_down', 'publish_down', '%Y-%m-%d', array('class'=>'inputbox', 'size'=>'25',  'maxlength'=>'19'));
	$lists['editor'] = $editor->display( 'ctext',  $slide->ctext , '100%', '350', '30', '10' ) ;

	if($slide->menu) {
		$content =& JTable::getInstance('content');
		$content->load( (int)$slide->menu );
		$sectionid = $content->sectionid;
		$categoryid = $content->catid;
	} else { $sectionid = ""; $categoryid = ""; }

	$javascript = "onchange='getCategoryList(this)'";
	$lists['jsections']	= mosFPSlideShow::getJSections( 'sectionid', $sectionid, $javascript );

	if($slide->menu) {
		$javascript = "onchange='getContentList(this)'";
		$lists["jcategories"] = mosFPSlideShow::getJCategories( 'categoryid', $categoryid, $sectionid, $javascript );
		$lists["jcontents"] = mosFPSlideShow::getJContents( 'contentid', $slide->menu, $categoryid, NULL );
	} else {
		$lists["jcategories"] = "<select id=\"categoryid\" name=\"categoryid\" class=\"inputbox\" size=\"1\" onchange=\"getContentList(this)\"><option value=\"0\">".JText::_( 'FPSS_SEL_CATEGORY' )."</option></select>";
		$lists["jcontents"] = "<select id=\"contentid\" name=\"contentid\" class=\"inputbox\" size=\"1\"><option value=\"0\">".JText::_( 'FPSS_SEL_CONTENT' )."</option></select>";
	}

	$lists["menu"] = mosFPSlideShow::builtDropDownMenu( $slide->menu2 );

	$lists['target'] = JHTML::_('select.booleanlist', 'target', '', $slide->target);
	$lists['groups'] = mosFPSlideShow::getAccessgroups($slide->registers);

	$lists['showtitle'] = JHTML::_('select.booleanlist', 'showtitle', '', $slide->showtitle);
	$lists['showseccat'] = JHTML::_('select.booleanlist', 'showseccat', '', $slide->showseccat);
	$lists['showcustomtext'] = JHTML::_('select.booleanlist', 'showcustomtext', '', $slide->showcustomtext);
	$lists['showplaintext'] = JHTML::_('select.booleanlist', 'showplaintext', '', $slide->showplaintext);
	$lists['showreadmore'] = JHTML::_('select.booleanlist', 'showreadmore', '', $slide->showreadmore);


	HTML_FPSlideShow::editSlide( $slide, $option, $lists, $config );


}

function cancelSlide( $option ) {
	global $mainframe;

	$mainframe->redirect('index.php?option='.$option.'&task=slides', $msg);
}

function saveSlide( $option ) {
	global $mainframe;

	$db =& JFactory::getDBO();

	// Check for request forgeries
	JRequest::checkToken() or die( 'Invalid Token' );

	// load config file
	require_once (JPATH_ADMINISTRATOR.DS.'components'.DS.'com_fpslideshow'.DS.'configuration.php');
	$config = new FPSSConfig();

	// load upload file
	require_once (JPATH_ADMINISTRATOR.DS.'components'.DS.'com_fpslideshow'.DS.'class.upload.php');

	$live_site = $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
	//JPATH_ROOT

	$nullDate 	= $db->getNullDate();

	$option = JRequest::getCmd( 'option');

	$row =& JTable::getInstance('slide', 'Table');

	//JRequest::getVar( 'listdir', _FPSSBASEPATH, 'get', 'text' );
	$imageaction = JRequest::getVar( 'imageaction', 1, 'post', 'int' );
	$oldpathtype = JRequest::getVar( 'oldpathtype', 0, 'post', 'int' );
	$serverimage = JRequest::getVar( 'serverimage', '', 'post', 'text' );
	$resize_x = JRequest::getVar( 'resize_x', $config->width, 'post', 'int' );
	$quality = JRequest::getVar( 'quality', $config->quality, 'post', 'int' );

	if ((!$_FILES['image']['size'] && $serverimage==""  ) && !$oldpathtype)
	{
		$mainframe->redirect( JRoute::_('index.php?option='.$option.'&task=slides&Itemid='.$Itemid), JText::_('FPSS_IMAGES_ALERT_MUST_IMAGE') );
		exit();
	}

	if (!$row->bind(JRequest::get('post')))
	{
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}

	//upload image
	if($imageaction==2) {
		if($_FILES['image']['size']>0) {
			$handle = new Upload($_FILES['image']);
			if ($handle->uploaded) {

				if($resize_x == 0) {
					$width  = $config->width;
					$height = 0;
				} else {
					$width  = $resize_x;
					//$height = intval($FPSS_CONFIG['height']);
				}

				if($width > 0 || $height > 0) {
					$handle->image_resize = true;
				}
				if($width > 0 && $height > 0) {
					$handle->image_x = $width;
					$handle->image_y = $height;
				}
				if($width > 0 && $height == 0) {
					$handle->image_x = $width;
					$handle->image_ratio_y = true;
				}
				if($height > 0 && $width == 0) {
					$handle->image_y = $height;
					$handle->image_ratio_x = true;
				}

				// quality checker -- must convert the image to JPG
				$handle->image_convert = 'jpg';
				if($quality>10) {
					$handle->jpeg_quality  = $quality;
				} else {
					$handle->jpeg_quality  = $config->quality;
				}

				$handle->Process(JPATH_ROOT.DS."components".DS.$option.DS."images".DS);
				if ($handle->processed) {
					$row->path = "components/".$option."/images/".$handle->file_dst_name;
					if($oldpathtype==1) {
						$sl =& JTable::getInstance('slide', 'Table');
						$sl->load((int)$row->id);
						@unlink(JPATH_ROOT.DS.$sl->path);
					}
					$row->path_type=1;
				} else {
					echo "<script> alert('Cannot save uploaded file'); window.history.go(-1); </script>\n";
					exit();
				}
			} else {
				echo "<script> alert('Cannot upload file ".$_FILES['image']['size']."'); window.history.go(-1); </script>\n";
				exit();
			}
		}
	} elseif($imageaction==3) {
		$row->path = str_replace($live_site,"",$serverimage);
		if($oldpathtype==1) {
			$sl =& JTable::getInstance('slide', 'Table');
			$sl->load((int)$row->id);
			@unlink(JPATH_ROOT.DS.$sl->path);
		}
		$row->path_type=2;
	}


	// sanitise id field
	$row->id = (int) $row->id;

	if ($row->publish_up == '') {
		$row->publish_up = $nullDate;
	}

	if (trim( $row->publish_down ) == 'Never' || trim( $row->publish_down ) == '') {
		$row->publish_down = $nullDate;
	}
	
	if($row->publish_up>$row->publish_down) {
		$row->publish_up = $nullDate;
		$row->publish_down = $nullDate;
	}

	$row->state = JRequest::getVar( 'published', 0, 'post', 'int' );
	$row->target = JRequest::getVar( 'target', 0, 'post', 'int' );
	$row->menu = JRequest::getVar( 'contentid', 0, 'post', 'int' );
	$row->registers = JRequest::getVar( 'registers', 0, 'post', 'int' );

	$row->name = $name = JRequest::getVar( 'name', '', 'post', 'text' );
	$row->ctext = JRequest::getVar( 'ctext', '', 'post', 'string', JREQUEST_ALLOWRAW );
	$row->plaintext = JRequest::getVar( 'plaintext', '', 'post', 'text' );

	$row->showtitle = JRequest::getVar( 'showtitle', 0, 'post', 'int' );
	$row->showseccat = JRequest::getVar( 'showseccat', 0, 'post', 'int' );
	$row->showcustomtext = JRequest::getVar( 'showcustomtext', 0, 'post', 'int' );
	$row->showplaintext = JRequest::getVar( 'showplaintext', 0, 'post', 'int' );
	$row->showreadmore = JRequest::getVar( 'showreadmore', 0, 'post', 'int' );

	$linkto = JRequest::getVar( 'linkto', 0, 'post', 'int' );
	switch ($linkto) {
		case 1:
			$row->menu=0;
			$row->menu2=0;
			break;

		case 2:
			$row->clink="";
			$row->menu2=0;
			break;

		case 3:
		default:
			$row->clink="";
			$row->menu=0;
			break;

	}

	if (!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}

	$row->checkin();
	$row->reorder();

	$msg = JText::sprintf( 'FPSS_SLIDE_SAVED' );
	$mainframe->redirect( 'index.php?option='.$option.'&task=slides', $msg );

}

function deleteslides( $cid, $option )
{
	global $mainframe, $option;

	// Check for request forgeries
	JRequest::checkToken() or die( 'Invalid Token' );

	$db  =& JFactory::getDBO();
	$cid = JRequest::getVar( 'cid', array(), '', 'array' );
	$n   = count( $cid );

	JArrayHelper::toInteger( $cid );

	foreach ($cid as $id) {

		$slide =& JTable::getInstance('slide', 'Table');
		$slide->load($id);
		if($slide->delete( $id )) {
			if($slide->path_type==1) @unlink(JPATH_ROOT.DS.$slide->path);
			$slide->reorder();
		}

	}

	$msg =JText::sprintf( 'FPSS_SLIDES_SUCC_DELETED', $n );

	$mainframe->redirect(JROUTE::_('index.php?option='.$option.'&task=slides', false), $msg);

}

?>