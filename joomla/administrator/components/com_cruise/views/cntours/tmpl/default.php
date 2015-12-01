<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
JHTML::_('behavior.tooltip');
JHTML::_('behavior.calendar');
?>

<?php
    $editor =& JFactory::getEditor();
      
	JToolBarHelper::title(   JText::_( 'Cruise 行程' ).': <small><small>[编辑]</small></small>' );
	JToolBarHelper::save();
	if (!$edit)  {
		JToolBarHelper::cancel();
	} else {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	}
	JToolBarHelper::help( 'screen.cruise.edit');
       
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
			alert( "<?php echo JText::_( 'cruise item must have a title', true ); ?>" );
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
					游轮名称:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="cruise_name" id="cruise_name" size="32" maxlength="250" value="<?php echo $this->cruise_name ;?>" disabled="disabled" />
			</td>
		</tr>
           <tr>
           <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					游轮的行程：
				</label>
			</td>
			<td><?php echo $editor->display( 'activition', $this->cruise->activition, '170%', '450', '40', '5' ) ; ?>
	
                         </td>
		</tr>
           <tr>
           <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					上行/下行:
				</label>
			</td>
				<td>
            <?php if($this->cruise->upOrdown==0){?>
				<select name="upOrdown" size=1>
                <option value="0" selected="selected">上行</option>
                <option value="1">下行</option>
                </select>
                <?php }else if($this->cruise->upOrdown==1){?>
                
                <select name="upOrdown" size=1>
                <option value="0" >上行</option>
                <option value="1" selected="selected">下行</option>
                </select>
                
                
               <?php }else{?>
                 <select name="upOrdown" size=1>
                <option value="0" >上行</option>
                <option value="1" >下行</option>
                </select>
               
                <?php }?>
			</td>
		</tr>
          
          
		
	</table>
	</fieldset>
</div>

<div class="clr"></div>

	<input type="hidden" name="option" value="com_cruise" />
	<input type="hidden" name="id" value="<?php echo $this->cruise->id; ?>" />
    <input type="hidden" name="c" value="route" />
      <input type="hidden" name="cruiseid" value="<?php echo $this->cruiseid; ?>" />
       <input type="hidden" name="cruise_name" value="<?php echo $this->cruise_name; ?>" />
	<input type="hidden" name="task" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
