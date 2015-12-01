<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	JToolBarHelper::title(  JText::_( '套餐价格管理' ) );
	JToolBarHelper::save();
	JToolBarHelper::cancel( 'cancel', 'Close' );	
	$editor = &Jfactory::getEditor();
?>
<script src="/js/jquery-1.4.js"></script>
<form action="index.php?option=com_ctours" method="post" name="adminForm">

<div id="tablecell">
<table class="adminlist" style="width:60%;float:left;">
	<thead>
		<tr>
			<th colspan="6">2015年</th>
		</tr>
		<tr>
			<th>Date&Price</th>
			<th>1 person</th>
			<th>2-5 persons</th>
			<th>6-9 persons</th>
			<th>≥10 persons</th>
			<th>Solo Occupancy</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center" style="font-weight:bold; background-color:#efefef;">Nov.1-Mar.31</td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[0];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[1];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[2];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[3];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[4];?>" size="12"/></td>
		</tr>
		<tr>
			<td align="center" style="font-weight:bold; background-color:#efefef;">Apr.1-Oct.31</td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[5];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[6];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[7];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[8];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize[]" value="<?php echo $this->price_list[9];?>" size="12"/></td>
		</tr>
		<!--<tr>
			<td colspan="6"></td>
		</tr>
		<tr>
			<td colspan="6" align="center" style="font-weight:bold; background-color:#efefef;">2013年</td>
		</tr>
		<tr>
			<td align="center" style="font-weight:bold; background-color:#efefef;">Date&Price</td>
			<td align="center" style="font-weight:bold; background-color:#efefef;">1 person</td>
			<td align="center" style="font-weight:bold; background-color:#efefef;">2-5 persons</td>
			<td align="center" style="font-weight:bold; background-color:#efefef;">6-9 persons</td>
			<td align="center" style="font-weight:bold; background-color:#efefef;">≥10 persons</td>
			<td align="center" style="font-weight:bold; background-color:#efefef;">Solo Occupancy</td>
		</tr>
		<tr>
			<td align="center" style="font-weight:bold; background-color:#efefef;">Nov.1-Mar.31</td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[0];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[1];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[2];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[3];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[4];?>" size="12"/></td>
		</tr>
		<tr>
			<td align="center" style="font-weight:bold; background-color:#efefef;">Apr.1-Oct.31</td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[5];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[6];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[7];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[8];?>" size="12"/></td>
			<td align="center"><input type="text" name="price_serialize_1[]" value="<?php echo $this->price_list_1[9];?>" size="12"/></td>
		</tr>-->
		<tr>
			<td>Price Inclusion</td>
      <td colspan="5"><?php echo $editor->display( 'price_include',  htmlspecialchars($this->price_obj->price_include,ENT_QUOTES), '600', '250', '60', '20', array('pagebreak', 'readmore'));?></td>
		</tr>
		<tr>
			<td>Price Exclusion</td>
			<td colspan="5"><?php echo $editor->display( 'price_exclude',  htmlspecialchars($this->price_obj->price_exclude,ENT_QUOTES), '600', '250', '60', '20', array('pagebreak', 'readmore'));?></td>
		</tr>	
	</tbody>
	</table>
	
</div>

	<input type="hidden" name="option" value="com_ctours" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="serialize" value="1" />
	<input type="hidden" name="c" value="<?php echo $this->c;?>" />
	<input type="hidden" name="packageid" value="<?php echo $this->cid;?>" />
	<input type="hidden" name="package_class" value="<?php echo $this->package_class;?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<script>
	$("input[name='price_serialize[]']").blur(function(){	
		var regNum =/^[0-9]*$/;
		if(!regNum.test(this.value)){
				alert("Please enter the numbers 0-9!");
				$(this).val("");
				$(this).focus();
			}
		});
</script>
