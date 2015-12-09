<style type="text/css">
<!--
*{ margin:0px; padding:0px;}
ul.moreul{ width:100%; height:auto; float:left;}
ul.moreul li{ width:50%; height:222px; float:left; padding:5px 0px;}
ul.moreul li a{ display:inline-block; width:100%; text-align:center;}
ul.moreul li span{ text-align:center; display:inline-block; width:100%;}
-->
</style>
<h1 style="display:block; line-height:26px; font-size:18px;"><?php echo $cityname?>  Maps</h1>
Find maps of <?php echo $cityname?>, including <?php echo $cityname?>'s regional location to other parts of China as well as .

Our <?php echo $cityname;?> travel guide ( includes weather, living, food, sight, transportation, etc.) has heaps of useful information and tips!
 <script src="http://ditu.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBSbxIsZ0S3_xwwvrFNtzjgjumDwpCbwRk&hl=en&v=2" type="text/javascript"></script>
<script type="text/javascript">
 
 	 function initialize() {
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var myOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  }

 
    function showAddress(address) {
	var map = new GMap2(document.getElementById("map_canvas"));
	var geocoder = new GClientGeocoder(); 
	  geocoder.getLatLng(
		address,
		function(point) {
		  if (!point) {
			alert("无法解析:" + address);
		  } else {
			map.setCenter(point, 11);
			var marker = new GMarker(point);
			map.addOverlay(marker);
			marker.openInfoWindowHtml(address);
		  }
		}
	  ); 
	 }
 
    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map_canvas"));
		<?php echo "var city='". $cityname."'";?>;
		this.showAddress(city);
        //map.setCenter(new GLatLng(39.917, 116.397), 14);
      }

    }
 </script>
<div id="map_canvas" style="width: 630px; height: 300px; margin-top:10px;"></div>
<?php if(!empty($maps)){ ?>
	<h2 style="display:block; font-size:18px; line-height:28px; margin-top:10px;">More <?php echo $cityname?>  Maps</h2>
	<ul class="moreul">
	<?php foreach($maps as $map):?>
	<li>
	<a href="<?php echo $map['pic_dir'].$map['pic_path'];?>" target="_blank"><img src="<?php echo $map['pic_dir']."thumb/thumb_".$map['pic_path'];?>" /></a>
	<span><?php echo $map['pic_alt'];?></span>
	</li>
	<?php endforeach;?>
	</ul>
<?php } ?>
<script>
	window.onload=initialize;
	window.onunload=GUnload;
</script>
