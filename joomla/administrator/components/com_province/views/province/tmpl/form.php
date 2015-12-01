<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '省份' ).': <small><small>[ ' . $text.' ]</small></small>' );
	JToolBarHelper::Preview('index.php?option=com_poll&controller=poll&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	JToolBarHelper::help( 'screen.polls.edit' );
?>

<?php
JFilterOutput::objectHTMLSafe( $this->poll, ENT_QUOTES );
?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {

		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
		// do field validation
		if (form.name.value == "") {
			alert( "<?php echo JText::_( 'Poll must have a title', true ); ?>" );
		} else{
			<?php
					echo $editor->save( 'description' ) ; ?>
			submitform( pressbutton );
		}
	}
</script>

<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">

<div class="col width-55">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
	

		
		<tr>
			<td class="key">
				<label for="polloption">
					省份名称
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="name" id="name" value="<?php echo $this->options['0']->name;?>" size="60" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					省份描述
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'description',  htmlspecialchars($this->options['0']->description,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					天气
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'weather',  htmlspecialchars($this->options['0']->weather,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					交通
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'traffic',  htmlspecialchars($this->options['0']->traffic,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					饮食
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'eat',  htmlspecialchars($this->options['0']->eat,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					著名景点
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'scenery',  htmlspecialchars($this->options['0']->scenery,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					地图
				</label>
			</td>
			<td>
<input type="file" name="ufile" id="ufile" size=50>
				
			</td>
		</tr>											
	</table>
	</fieldset>
</div>
<div class="col width-35">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Details' ); ?></legend>
	<table class="admintable">
		<tr>
			<td width="110" class="key">
				<label for="title">
					页面Title:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="seo_title" id="seo_title" size="60" value="<?php echo $this->options[0]->seo_title; ?>" />
			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="alias">
					页面Key:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="seo_key" id="seo_key" size="60" value="<?php echo $this->options[0]->seo_key; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					页面Description:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" size="60" name="seo_description" id="seo_description" size="10" value="<?php echo $this->options[0]->seo_description; ?>" />
				
			</td>
		</tr>

	</table>
	</fieldset>
</div>
<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_province" />
	<input type="hidden" name="id" value="<?php echo $this->options[0]->id; ?>" />
	<input type="hidden" name="cid[]" value="<?php echo $this->options[0]->id; ?>" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
