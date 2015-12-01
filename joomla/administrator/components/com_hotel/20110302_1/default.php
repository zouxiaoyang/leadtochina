<?php // no direct access
defined('_JEXEC') or die('Restricted access');
$i=0;
?>
<div class="hotelinfo">

<!--酒店图片-->
<div class="hotelimg">
<img src="<?php echo $this->hotel_info[0]['pic'];?>" alt="<?php echo $this->hotel_info[0]['alt'];?>">
</div>

<div class="hoteldescription">

<div class="hoteldesright"></div>
<div class="hoteltitle"><!--酒店名称-->
<a href="index.php?com_showhotel&view=default&hotelid=<?php echo $this->hotel_info[0]['id'];?>"><?php echo $this->hotel_info[0]['name'];?></a> <span class="star">★★★</span></span> <span class="hotelgrade"> (<?php echo $this->hotel_info[0]['grade'];?>)</span>

</div>
<!--酒店地图预留-->
<div class="googleMap">$googleMap</div>

<div><?php echo $this->hotel_info[0]['district'];?></div>

<div><?php echo $this->hotel_info[0]['addr'];?></div>

<div><?php echo $this->hotel_info[$i]['surrounding'];?></div>


<!--酒店简介-->
<p><?php echo $this->hotel_info[$i]['description'];?></p>
<!--酒店图片预留的,到时候估计采用一个图片播放器-->
<div class="showpiclist"></div>


<!--酒店的设施，服务等信息-->
<div class="hotelservices">
<?php echo $this->hotel_info[$i]['service'];?>

</div>



</div><div>
<div class="roominfo">
             <table width="100%" border="0" cellpadding="0" cellspacing="0">
               <tr>
				<th width="35%" class="hotelName">Room Type</th>
				
				<th width="12%">Breakfast</th>

				<th width="16%">Payment</th>
				<th width="13%">Avg. Rate</th>
				<th width="10%">Internet</th>
				
               </tr>
<?php 
	
	$room_count=count($this->room_info);

	for($j=0;$j<$room_count;$j++){
?>	


	<tr>
	<td><?php echo $this->room_info[$j]->name;?></td>
	<td>
	<!--是否包含早餐变量-->
	<?php if($this->room_info[$j]->breakfast==1){
		echo "Excluded";
	}else{
	
		echo "";
	}
		
	
	?></td>
	<td>Prepay</td>
	<td><?php echo "$".$this->room_info[$j]->price;?></td>
	<td><a href="index.php?option=com_hotelorder&roomid=<?php echo $this->room_info[$j]->id;?>">BOOK</a></td>
<?php	
	}			
?>

</table>




</div>

</div></div>