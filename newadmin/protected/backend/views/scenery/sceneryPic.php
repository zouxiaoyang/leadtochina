<table style="border:1px solid #ccc; width:80%;background: #CAE8EA  no-repeat;">
<?php foreach ($sceneryPic as $k=>$v):?>
  <tr>
  	<td width="5%"><input type="checkbox" name="scenery[]" <?php if($v[0]['scenery_recommand']=='1'):?>checked="checked"<?php endif;?> value="<?php echo $v[0]['scenery_id'];?>"/></td>
 		<td width="20%"><?php echo $v[0]['name'];?></td>
 		<?php foreach ($v as $k1=>$v1):?>
 		<td width="20%"><img src="/<?php echo $v1['pic_dir'].$v1['pic_path'];?>" width="100" height="100"/><br/><input type="checkbox" name="scenery_pic[]" <?php if($v1['pic_recommand']=='1'):?>checked="checked"<?php endif;?> value="<?php echo $v1['pic_id'];?>"/></td>
 		<?php endforeach;?>
  </tr>
  <?php endforeach;?>
</table>
<?php exit;?>
