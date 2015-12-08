<style type="text/css">
.city-menu a{cursor:pointer;}
</style>
<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> Muslim Tours</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text">
       <h2>China Muslim Tour</h2>
       <p><img src="/images/muslim/pic1.jpg" alt="" />Hefei Full View Travel Service Company is a national registered and reputable China Hefei Tour Operator offering the best deals on China Tours from budget group tours to luxury private tours with great service quality control. </p>
       <br/>
       <p>Meanwhile,  Hefei Full View travel service company offers best <a href="<?php echo Yii::app()->createUrl('muslimTour/muslimChinaTour');?>">China Muslim Tour packages</a>, &nbsp;<a href="<?php echo Yii::app()->createUrl('muslimTour/muslimCityTourIndex');?>">City Muslim Tour</a> and halal holidays with decent halal food and real mosques experiences. Join us in 2013, and find the best China Muslim Travel packages with low price guarantee.</p>
   </div>
   <div class="best">
      <div class="city">
         <h2>Best Selling China City Muslim Tour Packages</h2>
         <div class="city-menu"><span>Beijing</span><span>Shanghai</span><span>Guilin</span><span>Guangzhou</span><span>Hangzhou</span><span>Kunming</span><span class="lastone">Shenzhen</span></div>
         <span id="recommendCityTour">
	         
         </span>
      </div>
   </div>
   <div class="best-bootom"></div>
   <div class="best">
     <div class="best1">
      <div class="recommend">
          <h2>Recommended China Muslim Tours</h2>
          <ul>
             <li class="pic"><a target="_blank" href="/index.php?option=com_showpc&view=default&Itemid=137&pcid=604"><img src="/images/muslim/pic6.jpg" alt="8 Days Golden Triangle Muslim Tour" /></a></li>
             <li class="name"><a target="_blank" href="/index.php?option=com_showpc&view=default&Itemid=137&pcid=604">8 Days Golden Triangle Muslim Tour</a>(Destinations:Beijing,Xian,Shanghai)</li>
             <li class="from">From only <span><?php echo SiteUtils::getCurrencyPrice(1919);?></span> <a target="_blank" href="/index.php?option=com_showpc&view=default&Itemid=137&pcid=604">More Details</a></li>
          </ul>
      </div>
      <div class="reasons">
          <h2>Reasons to Choose HFV</h2>
          <ul>
             <li>Reliable China Travel Agency</li>
             <li>Multi-Choice of China Tour</li>
             <li>Honest Price No Hidden Fees</li>
             <li>Free Last Minute Change</li>
          </ul>
      </div>
     </div>
   </div>
   <div class="best-bootom"></div>
   <div class="best">
       <div class="listcity">
           <ul>
              <li class="title"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesIndex')?>">China Mosques</a></li>
              <li class="pic"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesIndex')?>"><img src="/images/muslim/pic7.jpg" alt="" /></a></li>
              <li>
                  <ol>
                  	<?php foreach ($indexMosquesRecommend as $k=>$v):?>
                     <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesView', array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->title)))?>" title="<?php echo $v->title;?>"><?php echo substr($v->title,0,20);?>...</a></li>
                    <?php endforeach;?>
                     <li class="more"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesIndex')?>">More Mosques</a></li>
                  </ol>
              </li>
           </ul>
           <ul>
              <li class="title"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodList')?>">Halal Food</a></li>
              <li class="pic"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodList')?>"><img src="/images/muslim/pic8.jpg" alt="" /></a></li>
              <li>
                  <ol>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimHalalRestaurantList",array('cityid'=>'11','title'=>'beijing-halal-food'));?>">Beijing Muslim restaurants</a></li>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimHalalRestaurantList",array('cityid'=>'14','title'=>'shanghai-halal-food'));?>">Shanghai Muslim restaurants</a></li>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimHalalRestaurantList",array('cityid'=>'173','title'=>'lanzhou-halal-food'));?>">Lanzhou Muslim restaurants</a></li>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimHalalRestaurantList",array('cityid'=>'180','title'=>'xian-halal-food'));?>">Xian Muslim restaurants</a></li>
                     <li class="more"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodList')?>">More Restaurants</a></li>
                  </ol>
              </li>
           </ul>
           <ul>
              <li class="title"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimPrayerList')?>">Prayer Time</a></li>
              <li class="pic"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimPrayerList')?>"><img src="/images/muslim/pic9.jpg" alt="" /></a></li>
              <li>
                  <ol>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimPrayerTimeView",array('title'=>'beijing'));?>">Beijing Prayer time</a></li>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimPrayerTimeView",array('title'=>'shanghai'));?>">Shanghai Prayer time</a></li>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimPrayerTimeView",array('title'=>'guangzhou'));?>">Guangzhou Prayer time</a></li>
                     <li><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimPrayerTimeView",array('title'=>'xian'));?>">Xian Prayer time</a></li>
                     <li class="more"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimPrayerList')?>">More Time</a></li>
                  </ol>
              </li>
           </ul>
       </div>
   </div>
   <div class="best-bootom"></div>
</div>
<script>
$(document).ready(function(){
	$(".city-menu span").eq(0).trigger("click")
});
$(".city-menu span").click(function(){
	$(this).addClass("dq");
	$(this).siblings("span").removeClass("dq");
	cityName=$(this).html();
	$.get("<?php echo Yii::app()->createUrl('muslimTour/ajaxCityTours')?>",{cityName:cityName},function(ret){
		$("#recommendCityTour").html(ret);
		});
});
</script>
