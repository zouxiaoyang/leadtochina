<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
include_once (JPATH_ROOT.'/config/search_config.php');
$edit = JRequest::getVar('edit', true);
$editor = &Jfactory::getEditor();
$text = ( $edit ? JText::_('Edit') : JText::_('New') );
JToolBarHelper::title(JText::_('Testimonisal') . ': <small><small>[ ' . $text . ' ]</small></small>');
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
		<td class="key"><label for="polloption">选择所属城市 </label></td>
		<td>				
			<?php foreach ($city_list as $k=>$v):?>
				<span style="display:block;width:100px;float:left;"><input type="radio" name="city_id" id="city_<?php echo $k;?>" value="<?php echo $k;?>" <?php if($this->item->city_id==$k||(stristr($this->city_obj->title, $v)&&!$edit)):?>checked="checked"<?php endif;?>/><label for="city_<?php echo $k;?>"><?php echo $v;?></label></span>
			<?php endforeach;?>			
			<span style="display:block;width:100px;padding-top:10px;float:left;clear:left;"><input type="radio" name="city_id" id="city_chinatours" value="100" <?php if($this->item->city_id==100||($chinatours_city==1)):?>checked="checked"<?php endif;?>/><label for="city_chinatours">China Tour</label></span>
		</td>
	</tr>
	<tr>
		<td class="key"><label for="polloption"> 图片标题 </label></td>
		<td><input class="inputbox" type="text" name="title" id="title"	value="<?php echo $this->item->title; ?>" size="85" />
		</td>
	</tr>
	<tr>
	<tr>
		<td class="key"><label for="polloption"> 行程天数 </label></td>
		<td>
		  <input type="text" name="day" value="<?php echo $this->item->day;?>">
		</td>
	</tr>

  <tr>
		<td class="key"><label for="polloption"> 所属行程 </label></td>
		<td>
		<?php echo $this->package_title;?>
		</td>
	</tr>

	<tr>
		<td class="key"><label for="polloption"> 姓名 </label></td>
		<td><input class="inputbox" type="text" name="name" id="name" value="<?php echo $this->item->name; ?>"/>
		</td>
	</tr>
	<tr>
		<td class="key"><label for="polloption"> 国籍 </label></td>
		<td><input class="inputbox" type="text" name="nationnality" id="nationnality" value="<?php echo $this->item->nationnality; ?>"/>
		</td>
	</tr>
	<tr>
		<td class="key"><label for="polloption"> 旅行时间 </label></td>
		<td>
		<input name="tour_time" id="tour_time"	value="<?php echo $this->item->tour_time; ?>" onclick="WdatePicker({dateFmt:'d-M-yyyy'});" type="text" class="Wdate" />
		</td>
	</tr>
	<tr>
		<td class="key"><label for="polloption"> 描述 </label></td>
		<td><br/><b>(描述不多余80个字符！)</b><br/><?php 	echo $editor->display( 'description',  htmlspecialchars($this->item->description,ENT_QUOTES), '600', '300', '60', '20', array('pagebreak', 'readmore'));?>

		</td>
	</tr>
	<tr>
		<td class="key"><label for="polloption"> 上传图片 </label></td>
		<td>
		<input name="ufile" type="file" id="uppic" /><br/>
		图片alt：<br/>
		<textarea rows="8" cols="50" name="pic_alt"><?php echo $this->item->pic_alt;?></textarea>
		<br/>
		<?php if($this->item->pic_name):?>
          <img src="/uploads/testimonisal/thumb/thumb_<?php echo $this->item->pic_name;?>" />
    <?php endif;?>
    <br/>    
		</td>
	</tr>
	<tr>
		<td class="key">北京首页图片 </td>
		<td>
		<input name="image" type="file" id="uppic" /><br/>		
		<br/>
		<?php if($this->item->image):?>
          <img src="/uploads/testimonisal/thumb/thumb_<?php echo $this->item->image;?>" />
    <?php endif;?>
    <br/>    
		</td>
	</tr>
	<tr>
		<td class="key">是否推荐</td>
		<td>
			<input type="radio" name="recomment" id="recomment1" value="1" <?php if($this->item->recomment==1):?>checked="checked"<?php endif;?>/><label for="recomment1">推荐</label>
			<input type="radio" name="recomment" id="recomment1" value="0" <?php if($this->item->recomment==0):?>checked="checked"<?php endif;?>/><label for="recomment1">非推荐</label>
		</td>
	</tr>
</table>
</fieldset>
</div>

<input type="hidden" name="option" value="com_testimonisals" /> 
<input	type="hidden" name="task" value="" /> 
<input type="hidden"	name="boxchecked" value="0" /> 
<input type="hidden" name="tid"	value="<?php echo JRequest::getVar('tid', 0); ?>" />
<input type="hidden" name="id"	value="<?php echo $this->item->id; ?>" />
<input type="hidden" name="filter_order"	value="<?php echo $this->lists['order']; ?>" /> 
<input type="hidden"	name="filter_order_Dir"	value="<?php echo $this->lists['order_Dir']; ?>" /> 
<?php echo JHTML::_('form.token'); ?>
</form>
