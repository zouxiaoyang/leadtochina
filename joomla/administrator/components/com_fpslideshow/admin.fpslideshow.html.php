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

class HTML_FPSlideShow {

	// Header
	function showHeader($option, $task) {
		global $mainframe;

		$jw_fpss_head = '
		<!-- JoomlaWorks "Frontpage Slideshow" v1.7.1 starts here -->
		<link href="components/'.$option.'/style/fpss.css" rel="stylesheet" type="text/css" />
		<!-- JoomlaWorks "Frontpage Slideshow" v1.7.1 ends here -->
		';
		
		if($task=="slides" || $task=="") {
			echo '<script type="text/javascript" src="components/'.$option.'/style/slimbox.js"></script>';
		}	

		$mainframe->addCustomHeadTag($jw_fpss_head);

	}



	// Navigation
	function showNavBar($option, $task) {
	?>
    
<!-- JoomlaWorks "Frontpage Slideshow" v1.7.1 starts here -->
<div id="jwfpss">
<?php 

if($task=='' || $task=="slides") {$pg_sid = ' id="current"';}
if($task=="config") {$pg_cfgid = ' id="current"';}
if($task=="credits") {$pg_crdid = ' id="current"';}

if(!$task || $task=="slides" || $task=="config" || $task=="credits") {
	echo '
		<ul id="jwfpss-menu">
			<li><a href="index2.php?option='.$option.'&amp;task=slides"'.$pg_sid.'>'.JText::_('FPSS_SHOW_IMAGES').'</a></li>
			<li><a href="index2.php?option='.$option.'&amp;task=config"'.$pg_cfgid.'>'.JText::_('FPSS_SHOW_CONFIG').'</a></li>
			<li><a href="index2.php?option='.$option.'&amp;task=credits"'.$pg_crdid.'>'.JText::_('FPSS_SHOW_CREDITS').'</a></li>
		</ul>
		';
} else {
	echo '
		<ul id="jwfpss-menu" class="inactive">
			<li>'.JText::_('FPSS_SHOW_IMAGES').'</li>
			<li>'.JText::_('FPSS_SHOW_CONFIG').'</li>
			<li>'.JText::_('FPSS_SHOW_CREDITS').'</li>
		</ul>
		';
}

	}



	// Footer
	function showFooter() {
		echo '
	<div id="jwfpss-footer">'.JText::_('FPSS_COPYRIGHTS').'</div>
</div>
<!-- JoomlaWorks "Frontpage Slideshow" v1.7.1 ends here -->
	';
	}



	/* ------------------------------ PAGES ------------------------------ */

	// Slide List Page
	function showSlides( &$rows, $pageNav, $option ) {
		global $mainframe;

		jimport('joomla.utilities.date');
		jimport('joomla.filter.filteroutput');

		$db =& JFactory::getDBO();
		$config	=& JFactory::getConfig();
		JHTML::_('behavior.tooltip');

		// action buttons
		JToolBarHelper::title( '<h2 id="jwfpss-logo"></h2>','' );
		JToolBarHelper::publishList('publish');
		JToolBarHelper::unpublishList('unpublish');
		JToolBarHelper::addNew('new');
		JToolBarHelper::deleteList(JText::_( 'FPSS_SLIDES_ALERT_DELETE' ),'deleteslides');

?>

<h2><?php echo JText::_('FPSS_LIST_OF_IMAGES'); ?></h2>
<form action="index2.php" method="post" name="adminForm">
  <table class="adminlist">
    <thead>
      <tr>
        <th>#</th>
        <th><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
        <th><?php echo JText::_('FPSS_IMAGES_IMAGENAME'); ?></th>
        <th><?php echo JText::_('FPSS_IMAGES_PUBLISHED'); ?></th>
        <th colspan="2"><?php echo JText::_('FPSS_IMAGES_REORDER'); ?></th>
        <th><?php echo JText::_('FPSS_IMAGES_ORDER'); ?> <a href="javascript: saveorder( <?php echo count( $rows )-1; ?> )"><img style="vertical-align:text-top;" src="components/com_fpslideshow/images/disk.png" alt="Save Order" /></a></th>
        <th><?php echo JText::_('FPSS_IMAGES_REGISTERS_ACCESS'); ?></th>
        <th><?php echo JText::_('FPSS_IMAGES_PATH'); ?></th>
        <th><?php echo JText::_('FPSS_IMAGES_PREVIEW'); ?></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="10"><?php echo $pageNav->getListFooter(); ?> </td>
      </tr>
    </tfoot>
    <tbody>
      <?php
    $k = 0;

    $nullDate 	= $db->getNullDate();
    $now 		= new JDate();

    for ($i=0, $n=count( $rows ); $i < $n; $i++) {
    	$row = &$rows[$i];
    	//$link 	= 'index2.php?option='.$option.'&amp;task=edit&amp;hidemainmenu=1&amp;id='. $row->id;
    	$link 	= JFilterOutput::ampReplace( 'index2.php?option='.$option.'&amp;task=edit&amp;hidemainmenu=1&amp;cid[]='. $row->id );

    	$publish_up = new JDate($row->publish_up);
    	$publish_down = new JDate($row->publish_down);
    	$publish_up->setOffset($config->getValue('config.offset'));
    	$publish_down->setOffset($config->getValue('config.offset'));
    	if ( $now->toUnix() <= $publish_up->toUnix() && $row->state == 1 ) {
    		$img = 'publish_y.png';
    		$alt = JText::_( 'Published' );
    	} else if ( ( $now->toUnix() <= $publish_down->toUnix() || $row->publish_down == $nullDate ) && $row->state == 1 ) {
    		$img = 'publish_g.png';
    		$alt = JText::_( 'Published' );
    	} else if ( $now->toUnix() > $publish_down->toUnix() && $row->state == 1 ) {
    		$img = 'publish_r.png';
    		$alt = JText::_( 'Expired' );
    	} else if ( $row->state == 0 ) {
    		$img = 'publish_x.png';
    		$alt = JText::_( 'Unpublished' );
    	}

    	$times = '';
    	if (isset($row->publish_up)) {
    		if ($row->publish_up == $nullDate) {
    			$times .= JText::_( 'Start: Always' );
    		} else {
    			$times .= JText::_( 'Start' ) .": ". $publish_up->toFormat();
    		}
    	}
    	if (isset($row->publish_down)) {
    		if ($row->publish_down == $nullDate) {
    			$times .= "<br />". JText::_( 'Finish: No Expiry' );
    		} else {
    			$times .= "<br />". JText::_( 'Finish' ) .": ". $publish_down->toFormat();
    		}
    	}

    	$checked 	= JHTML::_('grid.checkedout',   $row, $i );
    	$registers  = mosFPSlideShow::AccessProcessing( $row, $i );
	?>
      <tr class="<?php echo "row$k"; ?>">
        <td><?php echo $pageNav->getRowOffset( $i );; ?></td>
        <td><?php echo $checked; ?></td>
        <td><a href="<?php echo $link; ?>" title="Edit Slide"> <?php echo htmlspecialchars($row->name, ENT_QUOTES); ?> </a></td>
        <?php if ($times) { ?>
        <td><span class="editlinktip hasTip" title="<?php echo JText::_( 'Publish Information' );?>::<?php echo $times; ?>"><a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $row->state ? 'unpublish' : 'publish' ?>')"> <img src="components/com_fpslideshow/images/<?php echo $img;?>" /></a> </span> </td>
        <?php } ?>
        <td><?php echo $pageNav->orderUpIcon( $i ); ?></td>
        <td><?php echo $pageNav->orderDownIcon( $i, $n ); ?></td>
        <td><input type="text" name="order[]" size="5" value="<?php echo $row->ordering; ?>" /></td>
        <td><?php echo $registers; ?></td>
        <td><?php echo $row->path; ?></td>
        <td><a href="<?php echo $mainframe->getSiteURL().$row->path; ?>" rel="lightbox[fpss]" title="<?php echo JText::_('FPSS_FE_SLIMBOX').' <b>'.$row->name.'</b>'; ?>"><img src="components/com_fpslideshow/images/picture.png" /></a></td>
      </tr>
      <?php
    $k = 1 - $k; }
?>
    </tbody>
  </table>
  <input type="hidden" name="option" value="<?php echo $option; ?>" />
  <input type="hidden" name="task" value="slides" />
  <input type="hidden" name="boxchecked" value="0" />
  <input type="hidden" name="hidemainmenu" value="0" />
  <?php echo JHTML::_( 'form.token' ); ?>
</form>
<?php
	}



	// Slides edit page
	function editSlide( &$slide, $option, $lists, $config ) {
		global $mainframe;

		JHTML::_('behavior.tooltip');
		JHTML::_('behavior.calendar');

		$text = intval($slide->id) ? JText::_( 'Edit' ) : JText::_( 'New' );

		// action buttons
		JToolBarHelper::title( '<h2 id="jwfpss-logo"></h2>','' );
		JToolBarHelper::save('save');
		JToolBarHelper::cancel('cancel');

		// clean item data
		JFilterOutput::objectHTMLSafe( $slide );

?>
<script language="javascript" type="text/javascript">
function submitbutton(pressbutton) {
	var form = document.adminForm;
	if (pressbutton == 'cancel') {
		submitform( pressbutton );
		return;
	}

	// do field validation
	if (trim(form.name.value) == "") {
		alert( "<?php echo JText::_( 'FPSS_IMAGES_ALERT_MUST_NAME', true ); ?>" );
	} else if ( (form.clink.value == "") && (form.contentid.value == 0) && (form.menu2.value == -999 || form.menu2.value == 0) ){
		alert( "<?php echo JText::_( 'FPSS_IMAGES_ALERT_MUST_MENU', true ); ?>" );
	} else if ( form.registers.value == "-1" ){
		alert( "<?php echo JText::_( 'FPSS_IMAGES_ALERT_MUST_REGIST', true ); ?>" );
	} else {
		submitform( pressbutton );
	}
}

</script>
<script type="text/javascript" src="<?php echo $mainframe->getSiteURL(); ?>administrator/components/com_fpslideshow/ajax.js"></script>
<script type="text/javascript">	
var ajax = new sack();
function getCategoryList(sel) {
	//check radio
	document.adminForm.linkto[0].checked=true;
	var sectionId = sel.options[sel.selectedIndex].value;
	document.getElementById('categoryid').options.length = 0;	// Empty category select box
	document.getElementById('contentid').options.length = 0;	// Empty category select box
	if(sectionId.length>0){
		ajax.requestFile = '<?php echo $mainframe->getSiteURL(); ?>index2.php?option=<?php echo $option; ?>&task=getcategories&sid='+sectionId;	// Specifying which file to get
		ajax.onCompletion = createCategories;	// Specify function that will be executed after file has been found
		ajax.runAJAX();		// Execute AJAX function
	}
}
function createCategories() {
	var obj = document.getElementById('categoryid');
	eval(ajax.response);	// Executing the response from Ajax as Javascript code
	var obj2 = document.getElementById('contentid');
	obj2.options[obj2.options.length] = new Option('<?php echo JText::_( 'FPSS_SEL_CONTENT' ); ?>','0');
}
function getContentList(sel) {
	var categoryId = sel.options[sel.selectedIndex].value;
	document.getElementById('contentid').options.length = 0;	// Empty category select box
	if(categoryId.length>0){
		ajax.requestFile = '<?php echo $mainframe->getSiteURL(); ?>index2.php?option=<?php echo $option; ?>&task=getcontents&cid='+categoryId;	// Specifying which file to get
		ajax.onCompletion = createContents;	// Specify function that will be executed after file has been found
		ajax.runAJAX();		// Execute AJAX function
	}
}
function createContents() {
	var obj = document.getElementById('contentid');
	eval(ajax.response);	// Executing the response from Ajax as Javascript code
}
</script>
<script type="text/javascript">
<!--
function popup(url, w, h)
{
	var width  = w;
	var height = h;
	var left   = (screen.width  - width)/2;
	var top    = (screen.height - height)/2;
	var params = 'width='+width+', height='+height;
	params += ', top='+top+', left='+left;
	params += ', directories=no';
	params += ', location=no';
	params += ', menubar=no';
	params += ', resizable=yes';
	params += ', scrollbars=yes';
	params += ', status=no';
	params += ', toolbar=no';
	newwin=window.open(url,'Image Gallery', params);
	if (window.focus) {newwin.focus()}
	return false;
}
// -->
</script>

<h2><?php if($slide->name) echo JText::_( 'FPSS_IMAGES_EDIT_IMAGE')." <span>".$slide->name."</span>"; else echo JText::_( 'FPSS_IMAGES_NEW_IMAGE'); ?></h2>
<form action="index2.php" method="post" enctype="multipart/form-data" name="adminForm">
  <table class="adminForm">
    <tr>
      <td colspan="2"><h3><?php echo JText::_( 'FPSS_SLIDE_EDIT_INTROTEXT'); ?></h3></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_IMAGENAME'); ?></th>
      <td><input class="inputbox" type="text" name="name" value="<?php echo $slide->name; ?>" size="40" /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_PUBLISHED'); ?></th>
      <td><input type="checkbox" name="published" value="1" <?php echo $slide->state ? 'checked="checked"' : ''; ?> /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_START_PUBLISHING'); ?></th>
      <td><?php echo $lists['publish_up']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_FINISH_PUBLISHING'); ?></th>
      <td><?php echo $lists['publish_down']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_CUSTOM_TEXT'); ?></th>
      <td>
		<?php
            if($config->editor==1) {
                echo $lists['editor'];
            } else {
                echo "<textarea class=\"inputbox\" name=\"ctext\" cols=\"75\" rows=\"3\">".$row->ctext."</textarea>";
            } 
        ?>
      </td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_CUSTOM_PLAINTEXT'); ?></th>
      <td><input class="inputbox" name="plaintext" type="text" value="<?php echo $slide->plaintext; ?>" size="80" /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_LINKTO'); ?></th>
      <td><input type="radio" name="linkto" value="2" <?php if($slide->menu!=0) echo "checked"; ?> />
        <?php echo $lists["jsections"]; ?> <?php echo $lists["jcategories"]; ?> <?php echo $lists["jcontents"]; ?> <?php echo JText::_( 'FPSS_SLIDEEDIT_LINKS_CI'); ?><br />
        <input type="radio" name="linkto" value="3" <?php if($slide->menu2!=0) echo "checked"; ?> />
        <?php echo $lists["menu"]; ?> <?php echo JText::_( 'FPSS_SLIDEEDIT_LINKS_MI'); ?><br />
        <input type="radio" name="linkto" id="linkto_first" value="1" <?php if($slide->clink!="" || ($slide->menu==0 && $slide->menu2==0) ) echo "checked=\"checked\""; ?> />
        <input class="inputbox" type="text" name="clink" value="<?php echo $slide->clink; ?>" onclick="this.form.linkto[2].checked=true" />
        <?php echo JText::_( 'FPSS_SLIDEEDIT_LINKS_NORMAL'); ?> </td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_TARGET'); ?></th>
      <td><?php echo $lists["target"]; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_REGISTERS'); ?></th>
      <td><?php echo $lists["groups"]; ?></td>
    </tr>
    <tr>
      <td colspan="2"><h3><?php echo JText::_( 'FPSS_IMAGES_DISPLAYOPTIONS') ?></h3></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_SHOWTITLE'); ?></th>
      <td><input type="checkbox" name="showtitle" value="1" <?php echo $slide->showtitle ? 'checked="checked"' : ''; ?> /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_SHOWSECCAT'); ?></th>
      <td><input type="checkbox" name="showseccat" value="1" <?php echo $slide->showseccat ? 'checked="checked"' : ''; ?> /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_SHOWCUSTOMTEXT'); ?></th>
      <td><input type="checkbox" name="showcustomtext" value="1" <?php echo $slide->showcustomtext ? 'checked="checked"' : ''; ?> /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_SHOWPLAINTEXT'); ?></th>
      <td><input type="checkbox" name="showplaintext" value="1" <?php echo $slide->showplaintext ? 'checked="checked"' : ''; ?> /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_SHOWREADMORE'); ?></th>
      <td><input type="checkbox" name="showreadmore" value="1" <?php echo $slide->showreadmore ? 'checked="checked"' : ''; ?> /></td>
    </tr>
    <tr>
      <td colspan="2"><h3><?php echo JText::_( 'FPSS_IMAGES_IMAGEACTION') ?></h3></td>
    </tr>
    <?php if($slide->name) { ?>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_NOACTION') ?></th>
      <td><input type="radio" name="imageaction" value="1" checked="checked" /></td>
    </tr>
    <?php } else { ?>
    <div style="display:none;">
      <input type="radio" name="imageaction" value="1" />
    </div>
    <?php } ?>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_UPLOADFROMPC') ?></th>
      <td><input type="radio" name="imageaction" value="2" <?php if(!$slide->name) echo "checked"; ?> />
        <input type="file" name="image" onclick="this.form.imageaction[1].checked=true" />
        <br />
        <?php if($config->show_width==0) { echo JText::_( 'FPSS_IMAGES_UPLOADFROMPC_DEF_EXP'); } ?>
        <?php if($config->show_width==1) { ?>
        <b class="fpssred"><?php echo JText::_( 'FPSS_IMAGES_UPLOADWIDTH'); ?></b>
        <input class="inputbox" type="text" name="resize_x" size="3">
        <?php } if($config->show_quality==1) { ?>
        <b class="fpssred"><?php echo JText::_( 'FPSS_IMAGES_UPLOADQUALITY'); ?></b>
        <input class="inputbox" type="text" name="quality" size="3">
        <?php } ?>
        <?php if($config->show_width==1) { ?>
        <?php echo JText::_( 'FPSS_IMAGES_UPLOADFROMPC_EXP'); ?>
        <?php } ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_IMAGES_SERVERIMAGE'); ?></th>
      <td><input type="radio" name="imageaction" value="3" />
        <input class="inputbox" type="text" name="serverimage" onclick="this.form.imageaction[2].checked=true" />
        <input class="button" type="button" value="<?php echo JText::_( 'FPSS_IMAGES_BROWSE'); ?>" onClick="popup('<?php echo $mainframe->getSiteURL(); ?>index2.php?option=<?php echo $option; ?>&task=getimages', 600, 700);this.form.imageaction[2].checked=true"  />
        <?php echo JText::_( 'FPSS_IMAGES_BROWSE_EXP'); ?> </td>
    </tr>
    <?php if ($slide->path) { ?>
    <tr>
      <td colspan="2"><h3><?php echo JText::_( 'FPSS_IMAGES_IMAGEPATH'); ?></h3></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_SLIDE_EDIT_EXIMG_PATH'); ?></th>
      <td><?php echo $slide->path; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_SLIDE_EDIT_EXIMG_PREVIEW'); ?></th>
      <td><img class="showimg" src="<?php echo $mainframe->getSiteURL().$slide->path; ?>" /> </td>
    </tr>
    <?php } ?>
  </table>
  <input type="hidden" name="oldpathtype" value="<?php echo $slide->path_type; ?>" />
  <input type="hidden" name="id" value="<?php echo $slide->id; ?>" />
  <input type="hidden" name="option" value="<?php echo $option;?>" />
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="hidemainmenu" value="0" />
  <?php echo JHTML::_( 'form.token' ); ?>
</form>
<?php	

	}



	// Configuration Page
	function editConfig( &$fpss_config, $lists, $option ) {
		global $mainframe;

		// Make sure the user is authorized to view this page
		$user = & JFactory::getUser();
		if (!$user->authorize( 'com_config', 'manage' )) {
			$mainframe->redirect('index.php', JText::_('ALERTNOTAUTH'));
		}

		// action buttons
		JToolBarHelper::title( '<h2 id="jwfpss-logo"></h2>','' );
		JToolBarHelper::save('save_config');


?>

<script language="javascript" type="text/javascript">
function submitbutton(pressbutton) {
	var form = document.adminForm;

	// do field validation
	if (trim(form.width.value) == "") {
		alert( "<?php echo JText::_( 'JW_CONFIG_ALERT_REQ_WIDTH', true ); ?>" );
	} else if (trim(form.quality.width) == "") {
		alert( "<?php echo JText::_( 'JW_CONFIG_ALERT_REQ_QUALITY', true ); ?>" );
	} else {
		submitform( pressbutton );
	}
}
</script>

<h2><?php echo JText::_( 'FPSS_CONFIG_TITLE'); ?></h2>
<form method="post" action="index2.php" name="adminForm">
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="option" value="<?php echo $option; ?>" />
  <?php echo JHTML::_( 'form.token' ); ?>
  <table class="adminForm">
    <tr>
      <td colspan="2"><h3><?php echo JText::_( 'FPSS_CONFIG_SHOWPARAMS'); ?></h3></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_SHOWTITLE'); ?></th>
      <td><?php echo $lists['showtitle']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_SHOWSECCAT'); ?></th>
      <td><?php echo $lists['showseccat']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_SHOWCUSTOMTEXT'); ?></th>
      <td><?php echo $lists['showcustomtext']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_SHOWPLAINTEXT'); ?></th>
      <td><?php echo $lists['showplaintext']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_SHOWREADMORE'); ?></th>
      <td><?php echo $lists['showreadmore']; ?></td>
    </tr>
    <tr>
      <td colspan="2"><h3><?php echo JText::_( 'FPSS_CONFIG_SLIDEPARAMS'); ?></h3></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_DEFAULT_WIDTH'); ?></th>
      <td><input type="text" name="width" value="<?php echo $fpss_config->width; ?>" /></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_DEFAULT_QUALITY'); ?></th>
      <td><input type="text" name="quality" value="<?php echo $fpss_config->quality; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><h3><?php echo JText::_( 'FPSS_CONFIG_ADVPARAMS'); ?></h3></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_EDITOR'); ?></th>
      <td><?php echo $lists['editor']; ?></td>
    </tr>    
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_SHOW_WIDTH'); ?></th>
      <td><?php echo $lists['show_width']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_SHOW_QUALITY'); ?></th>
      <td><?php echo $lists['show_quality']; ?></td>
    </tr>
    <tr>
      <th><?php echo JText::_( 'FPSS_CONFIG_BASEPATH_TEXT'); ?></th>
      <td><input type="text" name="basepath" value="<?php echo $fpss_config->basepath; ?>" /></td>
    </tr>
  </table>
</form>
<?php
	}



	// Credits / About page
	function viewCredits( $option ) {
		
		JToolBarHelper::title( '<h2 id="jwfpss-logo"></h2>','' );
		echo '<h2>'.JText::_( 'FPSS_FE_CREDITS').'</h2><div class="jwpds-comments">'.JText::_( 'FPSS_ABOUT').'</div>';
		
	}



	// END CLASS
}

?>
