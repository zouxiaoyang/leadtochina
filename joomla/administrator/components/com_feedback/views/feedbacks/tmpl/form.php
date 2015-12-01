<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
JHTML::_('behavior.tooltip');
JHTML::_('behavior.calendar');
?>

<?php
         $editor =& JFactory::getEditor();
      
	JToolBarHelper::title(   JText::_( 'Feedback' ).': <small><small>[编辑]</small></small>' );
	JToolBarHelper::save();
	if (!$edit)  {
		JToolBarHelper::cancel();
	} else {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	}
	JToolBarHelper::help( 'screen.feedbacks.edit' );
       
?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}

		// do field validation
		if (form.title.value == ""){
			alert( "<?php echo JText::_( 'feedbacks item must have a title', true ); ?>" );
		} else {
			submitform( pressbutton );
		}
	}
</script>
<style type="text/css">
	table.paramlist td.paramlist_key {
		width: 92px;
		text-align: left;
		height: 30px;
	}
</style>

<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col width-70">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>

		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( 'Title' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="title" id="title" size="32" maxlength="250" value="<?php echo $this->feedbacks->title;?>" />
			</td>
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo '用户名'; ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="client_name" id="client_name" size="32" maxlength="250" value="<?php echo $this->feedbacks->client_name;?>" />
			</td>
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo '国家'; ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="nationality" id="nationality" size="32" maxlength="250" value="<?php echo $this->feedbacks->nationality;?>" />
			</td>
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( 'Email' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="email" id="email" size="32" maxlength="250" value="<?php echo $this->feedbacks->email;?>" />
			</td>
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( 'Content' ); ?>:
				</label>
			</td>
			<td><?php echo $editor->display( 'content', $this->feedbacks->content, '190%', '450', '40', '5' ) ; ?>
	
                         </td>
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( 'Year' ); ?>:
				</label>
			</td>
			<td>
                            <input class="text_area" type="text" name="year" id="year" size="32" maxlength="250" value="<?php echo $this->feedbacks->year;?>" />
                            <input type="reset"  id="intro_date_img" value="..." onclick="return showCalendar('year', 'y-mm-dd');" />

                            <script type="text/javascript">
                                    Calendar.setup(
                                      {
                                        inputField  : "year",         // ID of the input field
                                        ifFormat    : "%Y-%m-%d",    // the date format
                                        button      : "intro_date_img"       // ID of the button
                                      }
                                    );
                               </script>
			</td>
   
		</tr>
                <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					<?php echo JText::_( '是否网站发布' ); ?>:
				</label>
			</td>
			<td>
                            <?php echo $this->lists['isowner']; ?>
	
			</td>
		</tr>
        <tr>
			<td valign="top" align="right" class="key">
				<?php echo JText::_( '是否首页显示' ); ?>:
			</td>
			<td>
				<?php echo $this->lists['status']; ?>
			</td>
		</tr>
        
        
		<tr>
			<td valign="top" align="right" class="key">
				<?php echo JText::_( 'Published' ); ?>:
			</td>
			<td>
				<?php echo $this->lists['published']; ?>
			</td>
		</tr>
		
		
	</table>
	</fieldset>
</div>
<div class="col width-30">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Parameters' ); ?></legend>

		<table class="admintable">
		<tr>
			<td colspan="2">
				<?php echo $this->params->render();?>
			</td>
		</tr>
		</table>
	</fieldset>
</div>
<div class="clr"></div>

	<input type="hidden" name="option" value="com_feedback" />
	<input type="hidden" name="id[]" value="<?php echo $this->feedbacks->id; ?>" />
	<input type="hidden" name="task" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
