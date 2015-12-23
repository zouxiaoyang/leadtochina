<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
include_once (JPATH_ROOT.'/config/search_config.php');
$edit = JRequest::getVar('edit', true);
$editor = &Jfactory::getEditor();
$text = ( $edit ? JText::_('Edit') : JText::_('New') );
JToolBarHelper::title(JText::_('Staff') . ': <small><small>[ ' . $text . ' ]</small></small>');
JToolBarHelper::save();
global $mainframe,$option;
$chinatours_city=$mainframe->getUserState($option.'_prepage_state');
if ($edit) {
	// for existing items the button is renamed `close`
	JToolBarHelper::cancel('cancel', 'Close');
} else {
	JToolBarHelper::cancel();
}
?>
<script type="text/javascript" src="/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js"></script>
<form action="" method="post" name="adminForm" enctype="multipart/form-data">
<div class="col width-70">
<fieldset class="adminform"><legend><?php echo JText::_('Options'); ?></legend>
<table class="admintable">
	<tr>
		<td class="key"><label for="polloption"> 姓名 </label></td>
		<td><input class="inputbox" type="text" name="name" id="name" value="<?php echo $this->item->name; ?>"/>
		</td>
	</tr>
	<tr>
		<td class="key"><label for="polloption"> 描述 </label></td>
		<td><?php 	echo $editor->display( 'introduction',  htmlspecialchars($this->item->introduction,ENT_QUOTES), '600', '300', '60', '20', array('pagebreak', 'readmore'));?>

		</td>
	</tr>	
	<tr>
    <td class="key">
        <label for="polloption">头像图片</label>
    </td>
    <td>
        <input type="file" name="pic" id="pic" size=50><span>头像图片：195x195</span>
         <div>
            <?php if($this->item->pic_name):?>
               <img src="/<?php echo $this->item->pic_dir;?>thumb/thumb_<?php echo $this->item->pic_name;?>"/>
            <?php endif;?>
         </div>
         </td>
  </tr> 	
	<tr>
		<td class="key"><label for="polloption"> LIKE </label></td>
		<td>
		<input class="inputbox" type="text" name="like" id="like" value="<?php echo $this->item->like; ?>"/>
		</td>
	</tr>
	<tr>
		<td class="key"><label for="polloption"> DISLIKE </label></td>
		<td>
		<input class="inputbox" type="text" name="dislike" id="dislike"	value="<?php echo $this->item->dislike; ?>"/>
		</td>
	</tr>
</table>
</fieldset>
</div>

<input type="hidden" name="option" value="com_staff" /> 
<input	type="hidden" name="task" value="" /> 
<input type="hidden"	name="boxchecked" value="0" /> 
<input type="hidden" name="id"	value="<?php echo $this->item->id; ?>" />
<?php echo JHTML::_('form.token'); ?>
</form>
