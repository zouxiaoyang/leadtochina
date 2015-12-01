<div>
<h2><?php echo $cityName;?>  Guide</h2>
  <ul class="ulnewback">
     <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'facts','catid'=>'42'));?>" title="<?php echo $cityName;?> facts"><?php echo $cityName;?> Facts</a></li>
     <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityAttraction',array('cityname'=>strtolower($cityName)));?>"><?php echo $cityName;?> Attractions</a></li>
     <li><a href="<?php echo Yii::app()->createUrl('cityTours/list',array('title'=>strtolower($cityName.'-tours')));?>"><?php echo $cityName;?> Tours</a></li>
     <li style="display:none"><a href="<?php echo Yii::app()->createUrl('hotel/list',array('cityname'=>strtolower($cityName),'hotelid'=>$cityId));?>" title="<?php echo $cityName;?> hotel"><?php echo $cityName;?> Hotel</a></li>
     <li><a href="/<?php echo strtolower($cityName);?>/map.html"><?php echo $cityName;?> Maps</a></li>
     <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'climate','catid'=>'266'));?>"><?php echo $cityName;?> Climate</a></li>
     <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'transportations','catid'=>'264'));?>" title="<?php echo $cityName;?> Transportations"><?php //echo $cityName;?> Transportations</a></li>
     <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'travel-tips','catid'=>'265'));?>"><?php echo $cityName;?> Travel Tips</a></li>
     <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName), 'title'=>'food-restaurants','catid'=>'41'));?>"><?php //echo $cityName;?> Food & Restaurants</a></li>
     <?php if($cityName == 'Beijing'):?>
     <li><a href="<?php echo Yii::app()->createUrl('Rental/carRental');?>">Beijing Car Rental</a></li>
     <li><a href="<?php echo Yii::app()->createUrl('Rental/guideRental');?>">Beijing Tour Guide Rental</a></li>
     <?php endif;?>
     <li style="display:none"><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'shopping','catid'=>'263'));?>" title="<?php echo $cityName;?> Shopping"><?php echo $cityName;?> Shopping </a></li>
     <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'nightlife','catid'=>'43'));?>" title="<?php echo $cityName;?> Nightlife"><?php echo $cityName;?> Nightlife</a></li>
  </ul>
</div>

 <div class="moduletable" style="display:none;">
    <div class="modulecontent">
      <div class="mod_des" style="padding:0px;">
      <span style="background:url(/images/newhomepage/right_title_03.jpg) no-repeat; width:270px; height:39px; display:block; padding:0px 0px 0px 16px; line-height:35px; "><?php echo $cityName;?><span style="color:#fff;font-weight:normal;">City Guide</span></span>
      <div id="contentleft" style="width:248px; height:auto; padding:6px 10px 15px 10px; border:1px solid #E2E2E2; border-top:none; border-bottom:none;background:#F8F8F8;">
        <ul class="leftNav">
          <li class="fact">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'facts','catid'=>'42'));?>" title="<?php echo $cityName;?> facts"><?php echo $cityName;?> Facts</a>
          </li>
          <li class="Attraction">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityAttraction',array('cityname'=>strtolower($cityName)));?>"><?php echo $cityName;?> Attractions</a>
          </li>
          <li class="shopping">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'shopping','catid'=>'263'));?>" title="<?php echo $cityName;?> Shopping"><?php echo $cityName;?> Shopping </a>
          </li>
          <li class="Nightlife">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'nightlife','catid'=>'43'));?>" title="<?php echo $cityName;?> Nightlife"><?php echo $cityName;?> Nightlife</a>
          </li>
          <li class="tour">
            <a href="<?php echo Yii::app()->createUrl('cityTours/list',array('title'=>strtolower($cityName.'-tours')));?>"><?php echo $cityName;?> Tours</a>
          </li>
          <li class="food">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName), 'title'=>'food-restaurants','catid'=>'41'));?>"><?php echo $cityName;?> Food & Restaurants</a>
          </li>
          <li class="tip">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'travel-tips','catid'=>'265'));?>"><?php echo $cityName;?> Travel Tips</a>
          </li>
          <li class="Climate">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'climate','catid'=>'266'));?>"><?php echo $cityName;?> Climate</a>
          </li>
          <li class="Transportation">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName),'title'=>'transportations','catid'=>'264'));?>" title="<?php echo $cityName;?> Transportations"><?php echo $cityName;?> Transportations</a>
          </li>       
          <li class="hotel">
            <a href="<?php echo Yii::app()->createUrl('hotel/list',array('cityname'=>strtolower($cityName),'hotelid'=>$cityId));?>" title="<?php echo $cityName;?> hotel"><?php echo $cityName;?> Hotel</a>
          </li>
        </ul>
      </div>
      
    </div>
  </div>
</div>
<div class="rightbottom"></div>
