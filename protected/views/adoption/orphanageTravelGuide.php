<script src="http://ditu.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBSbxIsZ0S3_xwwvrFNtzjgjumDwpCbwRk&hl=en&v=2" type="text/javascript"></script>
<style type="text/css">
<!--
.photoslist{ width:658px; height:auto; float:left; border:1px solid #ccc; border-top:none; background:#fff; padding:0px 0px 15px 10px; overflow:hidden;}
.photoslist img{ width:198px; height:168px; float:left; display:block; margin-right:15px; border:3px solid #ccc; margin-top:15px;}
 .errorMessage{color:red;}
 #CDSWIDSSP{width:210px !important;}
  #CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {
    width: auto !important;
}
.ui-slider-pic{width:575px;height:150px;position:absolute;overflow:hidden; margin-left: 45px;}
.ui-slider-pic ul li{float:left;width:170px;height:144px;margin-right:15px;}
.ui-slider-pic ul li img{width:170px;height:144px;}
 -->
</style>
<div class="content1">
<?php $this->renderPartial('_search');?>
  <div class="menu-three">
    <a href="<?php echo Yii::app()->createUrl('adoption/OrphanageTours', array('id'=>$_GET['id']));?>">TOURS</a>
    <a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>" target="_blank">CUSTOMIZE</a>
    <a class="dq" href="<?php echo Yii::app()->createUrl('adoption/OrphanageTravelGuide', array('id'=>$_GET['id']));?>">TRAVEL GUIDE</a></div>
  <div class="clear"></div>
  <!--  left1 start  -->
  <div id="left1" style="margin-top:0px;">
     <!--  overview start  -->
     <div class="overview">
        <div class="title1"><?php echo $cityinfo->name;?> Overview</div>
        <div class="viewcont">
           <?php echo $orphanage_address_info->description;?>
        </div>
     </div>   
     <!--  overview end  -->
     
     <!--  return start  -->
     <?php if($orphanageArticles):?>


	
     <div class="return">
        <div class="title1">Who Had Been Here</div>
        <div class="latest-list">
          <?php foreach($orphanageArticles as $v):?>
          <ul>
          <li class="pic"><a href="<?php echo Yii::app()->createUrl('adoption/orphanageArticle', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>"><img src="<?php echo ImageUtils::getThumbnail(AdoptionArticle::UPLOAD_PATH.$v->pic, '152x85');?>"/></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageArticle', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" target="_blank"><?php echo $v->title;?></a>
              
             <?php echo mb_substr(strip_tags($v->content),0, 280);?>... 
             <span>Date: <?php echo date('M dS, Y', strtotime($v->date));?></span>
         </li>
      </ul>
         <?php endforeach;?>
   </div>
     </div>
   <?php endif;?>
     <!--  return start  -->
      
      <!--  photos start  -->
     <div class="photos">
        <div class="title1"><span>Images from <?php echo $cityinfo->name;?></span></div>
        <div class="photoslist">
          <?php foreach($adoptionOrphanageAddressPic as $v):?>
          <img src="<?php echo ImageUtils::getThumbnail(AdoptionOrphanageAddressPic::UPLOAD_PATH . $v->pic, '198x168');?>" alt="<?php echo $v->title;?>" />
          <?php endforeach;?>
        </div>
     </div>
     <!--  photos end  -->
     
     <!--  return start  -->
     <div class="return">
        <div class="title1">Return-trip Guide</div>
        <div class="middle">         
         <div class="onecont">
           <h2>Adoption Travel Guide</h2>
           <ul> 
               <?php foreach($chinaAdoptionGuide as $v):?>
                   <li> <a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>"><?php echo $v->title;?></a></li>
              <?php endforeach;?>
           </ul>
         </div>  
         
         <div class="twocont">
           <ul> 
              <li class="pic"><img alt="" src="/images/adoption/orphanages.jpg"></li>
               <?php foreach($chinaAdoptionCatid9 as $k=>$v):?>
                <li><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>"><?php echo $v->title;?></a></li>
              <?php endforeach;?>
           </ul>
         </div>  
         
         <div class="threecont">
           <h2>Facts &amp; Culture about Chinese Children</h2>
           <ul> 
              <?php foreach($chinaAdoptionCulture as $k=>$v):?>
                <li <?php if($k%2!=0):?> class="smallli" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>"><?php echo $v->title;?></a></li>
              <?php endforeach;?>
           </ul>
         </div>        
      </div>
     </div>
     <!--  return start  -->
     
     
  </div>
  <!--  left1 end  -->

  <!--  right1 start  -->
  <div id="right1">
      <div class="glance">
         <h2 class="title2"><?php echo $cityinfo->name;?> at a glance</h2>
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
                        <?php echo "var city='". $cityinfo->name ."'";?>;
                    
                    
                        this.showAddress(city);
                        //map.setCenter(new GLatLng(39.917, 116.397), 14);
                      }

                    }
             
                </script>
            <div id="map_canvas" style="width: 231px; height: 198px;"></div>
            

            <div class="clear"></div>
            <a href="/<?php echo strtolower($cityinfo->name);?>/map.html">more <?php echo $cityinfo->name;?> maps</a>
            <div class="clear"></div>
            <p><span>City Name:</span> <?php echo $cityinfo->name;?><br />
            <span>Population:</span> <?php echo $orphanage_address_info->population;?><br />
            <span>Location:</span> <?php echo $orphanage_address_info->address;?><br />
            <span>Features:</span> <?php echo $orphanage_address_info->features;?><br />
            <span>Area Code:</span> <?php echo $orphanage_address_info->area_code;?><br />
            <span>Zip Code:</span> <?php echo $orphanage_address_info->postal_code;?></p>
         </div>
         <div class="forecast" style="display:none">
            <h2>Local weather</h2>
            <div class="weather">
             <script type="text/javascript" language="javascript" src="http://www.weatherchina.org/plugin/weatherplugin.asp?l=<?php echo $cityinfo->weather;?>&t=6&c=C"></script> 
            </div>
            <?php /** echo $this->renderPartial("/common/weather", array('cityInfo'=>$cityinfo)); */?>
            
         </div>
         </div>
      </div>
      <!--  planning start  -->
      <?php $this->renderPartial('/message/_form2',array(
            'model'=>$message,
      )); ?>
       <!--  planning end  -->
  </div>
  <!--  right1 end  -->
</div>
<script type="text/javascript">
    $(function () {

     var ti = 0;
     var li = $("#pic_list").find("li");
     var li_width = li.eq(0).width()+20;

     var num = 3;
     $("#pic_left").click(function(){
         ti--;
         scroll(ti);
     })
     $("#pic_right").click(function(){
      
        ti++;
        console.log(ti);
        scroll(ti);
     })
     
     function scroll(i){
       
        var move_width = num * li_width * i;
        if(move_width < 0) {ti=0;console.log(ti);return;}
        if(move_width > li_width * li.length) {ti = ti-1;return;}
        $("#pic_list ul").animate({marginLeft:-move_width}, 1000);
     }
     
    });
</script>
<script>
  window.onload=initialize;
  window.onunload=GUnload;
</script>
