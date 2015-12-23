<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
JHTML::_('behavior.tooltip');
JHTML::_('behavior.calendar');
?>

<?php
    $editor =& JFactory::getEditor();
      
	JToolBarHelper::title(   JText::_( 'Cruise 房间' ).': <small><small>[编辑]</small></small>' );
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
					房间名称：
				</label>
			</td>
			<td>	<input class="text_area" type="text" name="name" id="name" size="32" maxlength="250" value="<?php echo $this->cruise->name ;?>"  />
	
                         </td>
		</tr>
	      <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					房间数：
				</label>
			</td>
			<td>	<input class="text_area" type="text" name="price" id="price" size="32" maxlength="250" value="<?php echo $this->cruise->price ;?>"  />
	
                         </td>
		</tr>
    
           <tr>
			<td width="100" align="right" class="key">
				<label for="title">
					是否提供早餐:
				</label>
			</td>
				<td>
            <?php if($this->cruise->breakfast==0){?>
				<select name="breakfast" size=1>
                <option value="0" selected="selected">不提供</option>
                <option value="1">提供</option>
                </select>
                <?php }else if($this->cruise->breakfast==1){?>
                
                <select name="breakfast" size=1>
                <option value="0" >不提供</option>
                <option value="1" selected="selected">提供</option>
                </select>
                
                
               <?php }else{?>
                 <select name="breakfast" size=1>
                <option value="0" >不提供</option>
                <option value="1" >提供</option>
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
    <input type="hidden" name="c" value="cruiseroom" />
    <input type="hidden" name="cruiseid" value="<?php echo $this->cruiseid; ?>" />
    <input type="hidden" name="cruise_name" value="<?php echo $this->cruise_name; ?>" />
	<input type="hidden" name="task" value="" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
