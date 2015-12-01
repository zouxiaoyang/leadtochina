<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '评论管理' ).': <small><small>[ ' . $text.' ]</small></small>' );
	JToolBarHelper::publishList();
	JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();


	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}

?>

<?php

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

			submitform( pressbutton );
		}
	}
</script>

<form action="index.php?option=com_auditing" method="post" name="adminForm">

<div class="col width-55">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
	
		<tr>
			<td class="key">
				<label for="polloption">
					发布/删除（先选择）：
				</label>
			</td>
			<td>
			<?php 
		$checked 	= JHTML::_('grid.checkedout',   $this->options[0], 0 );
		echo $checked;
		?>

			</td>
		</tr>
		
		<tr>
			<td class="key">
				<label for="polloption">
					评论人：
				</label>
			</td>
			<td>
		
				<?php echo $this->options[0]->user_call;?>
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					IP：
				</label>
			</td>
			<td>
		
				<?php echo $this->options[0]->user_ip;?>
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					提交评论时间：
				</label>
			</td>
			<td>
			<?php 
			date_default_timezone_set('Asia/Shanghai');
			$posttime=date("Y-m-d H:i:s",$this->options[0]->dateline);
			echo $posttime;
			?>
			
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					E-MAIL：
				</label>
			</td>
			<td>
			<?php echo $this->options[0]->email;?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					国家：
				</label>
			</td>
			<td>
			<?php echo $this->options[0]->country;?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					评论内容：
				</label>
			</td>
			<td>
		<?php echo $this->options[0]->message;?>
			
			</td>
		</tr>


											
	</table>
	</fieldset>
</div>

<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_auditing" />
<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
