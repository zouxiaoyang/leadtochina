<style type="text/css">
.body{ font-size:12px; font-family:Verdana, Geneva, sans-serif; color:#333;}
.datebox_cont1_off{ float:right; padding:0px 0px 5px 0;}
.datebox_new{ background:#FFC;font-size:12px; margin:0px 0 0 8px; color:#000;font-family:Verdana, Geneva, sans-serif;}
.datebox_new1{ background:#FCC;font-size:12px; margin:15px 0 15px 8px;color:#000;font-family:Verdana, Geneva, sans-serif}
.datebox_new td{}
.datebox_new_txt1{ font-size:16px;font-style:italic; color:#000; font-family:"Times New Roman", Times, serif}
</style>
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script>
$(function(){
  $("#cboxclose").click(function(){
	parent.jQuery.colorbox.close();
  })

})
</script>
<div class="datebox_cont1_off" style="position:fixed;top:0;right:0;z-index: 999;"><a id="cboxclose" href=""><img src="/images/cruisePorts/date_off1.jpg"/></a></div> 
<div style="clear:both; margin-top:30px;"></div>
<?php $array_status=array(1=>'Start',2=>'Passby',3=>'Terminal');$i=1;?>
<?php if(is_array($schedule_arr)):?>
<?php if(count($schedule_arr[$data_name])>0):?>
<table width="98%" border="0" cellpadding="5" cellspacing="1" class="datebox_new">
		<tr>
			<td colspan="4" class="datebox_new_txt1">2015-2016 <?=$cruise_name?> Timetable (<?=$data_name?>, China)</td>
		</tr>
		<tr>
			<td width="95"><strong>Port</strong></td>
		  <td width="230"><strong>Arrive</strong></td>
		  <td width="230"><strong>Depart</strong></td>
			<td width="90"><strong>Status</strong></td>
		</tr>
	<?php foreach($schedule_arr[$data_name]['arrive'] as $k=>$v):?>	
		<tr>
			<td width="95"><?=$data_name?></td>
		  <td width="230"><?php echo $v?></td>
		  <td width="230"><?php echo $schedule_arr[$data_name]['depart'][$k]?></td>
			<td width="90"><?php echo $array_status[$schedule_arr[$data_name]['status'][$k]]?></td>
		</tr>
	<?php endforeach;?>
	</table>
<?php endif;?>

<?php foreach($schedule_arr as $k1=>$v1):
	
	if($k1!=$data_name):?>

	<table width="98%" border="0" cellpadding="5" cellspacing="1" <?php if($i%2!=0):?> class="datebox_new1" <?php elseif($i%2==0):?> class="datebox_new" <?php endif;?>>
		  <tr>
		    <td colspan="4" class="datebox_new_txt1">2015-2016 <?=$cruise_name?> Timetable (<?=$k1?>, China)</td>
		  </tr>
<tr>
			<td width="95"><strong>Port</strong></td>
			<td width="230"><strong>Arrive</strong></td>
			<td width="230"><strong>Depart</strong></td>
			<td width="90"><strong>Status</strong></td>
</tr>
		<?php foreach($v1['arrive'] as $k2=>$v2):?>	
		  <tr>
			<td width="95"><?php echo $schedule_arr[$k1]['port'][$k2]?></td>
		    <td width="230"><?php echo $v2?></td>
		    <td width="230"><?php echo $schedule_arr[$k1]['depart'][$k2]?></td>
		    <td width="90"><?php echo $array_status[$schedule_arr[$k1]['status'][$k2]]?></td>
		  </tr>
		<?php endforeach;?>
	</table>
<?php $i=$i+1; endif;
	endforeach;?>
<?php endif;?>