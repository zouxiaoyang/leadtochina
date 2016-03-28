 <script src="http://ditu.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBSbxIsZ0S3_xwwvrFNtzjgjumDwpCbwRk&hl=en&v=2" type="text/javascript"></script>
 <style>
 #right1{ line-height: 26px;
    padding: 20px 0 60px;
    text-align: center;}
 </style>

  <div id="right1" class="container">
      <div class="glance">
         <h2 class="title2"><?php echo $res['city_name'];?> at a glance</h2>
         <div class="glancecont">
         <div class="map">
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
                        <?php echo "var city='". $res['city_name'] ."'";?>;

						console.log(city);
                    
                        this.showAddress(city);
                        //map.setCenter(new GLatLng(39.917, 116.397), 14);
                      }

                    }

					// initialize();
             
                </script>
            <div id="map_canvas" style="width: 800px; height: 450px; margin:10px auto;"></div>
            

            <div class="clear"></div>
            <a href="<?php echo Yii::app()->createUrl('adoption/cityMaps',array('city_name'=>strtolower($res['city_name']),'city_id'=>$res['cityid']));?>">more <?php echo $res['city_name'];?> maps</a>
            <div class="clear"></div>
            <p><span>City Name:</span> <?php echo $res['city_name'];?><br />
            <span>Population:</span> <?php echo $res['population'];?><br />
            <span>Location:</span> <?php echo $res['address'];?><br />
            <span>Features:</span> <?php echo $res['features'];?><br />
            <span>Area Code:</span> <?php echo $res['area_code'];?><br />
            <span>Zip Code:</span> <?php echo $res['postal_code'];?></p>
         </div>
         </div>
      </div>
  </div>
  <script>
  google.maps.event.addDomListener(window, 'load', initialize);
//  google.maps.event.addDomListener(window, 'load', initialize);
  //window.onload=initialize;
  window.onunload=GUnload;
</script>