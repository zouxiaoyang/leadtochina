 <div class="moduletable">
    <div class="modulecontent">
      <div class="mod_des" style="padding:0px;">
      <span style="background:url(/images/newhomepage/right_title_03.jpg) no-repeat; width:270px; height:39px; display:block; padding:0px 0px 0px 16px; line-height:35px; "><?php echo $cityName;?><span style="color:#fff;font-weight:normal;">City Guide</span></span>
      <div id="contentleft" style="width:248px; height:auto; padding:6px 10px 15px 10px; border:1px solid #E2E2E2; border-top:none; border-bottom:none;background:#F8F8F8;">
        <ul class="leftNav">
          <li class="fact">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName).'-facts','cityid'=>$cityId,'catid'=>'42'));?>" title="<?php echo $cityName;?> facts"><?php echo $cityName;?> Facts</a>
          </li>
          <li class="Attraction">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/attraction',array('cityname'=>$cityName,'cityid'=>$cityId));?>"><?php echo $cityName;?> Attractions</a>
          </li>
          <li class="shopping">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName.'-shopping'),'cityid'=>$cityInfo->id,'catid'=>'263'));?>" title="<?php echo $cityName;?> Shopping"><?php echo $cityName;?> Shopping </a>
          </li>
          <li class="Nightlife">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName.'-nightlife'),'cityid'=>$cityInfo->id,'catid'=>'43'));?>" title="<?php echo $cityName;?> Nightlife"><?php echo $cityName;?> Nightlife</a>
          </li>
          <li class="tour">
            <a href="<?php echo Yii::app()->createUrl('cityTours/list',array('title'=>strtolower($cityName.'-tours')));?>"><?php echo $cityName;?> Tours</a>
          </li>
          <li class="food">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName.'-food-restaurants'),'cityid'=>$cityInfo->id,'catid'=>'41'));?>"><?php echo $cityName;?> Food & Restaurants</a>
          </li>
          <li class="tip">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName.'-travel-tips'),'cityid'=>$cityInfo->id,'catid'=>'265'));?>"><?php echo $cityName;?> Travel Tips</a>
          </li>
          <li class="Climate">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName.'-climate'),'cityid'=>$cityInfo->id,'catid'=>'266'));?>"><?php echo $cityName;?> Climate</a>
          </li>
          <li class="Transportation">
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityName.'-transportations'),'cityid'=>$cityInfo->id,'catid'=>'264'));?>" title="<?php echo $cityName;?> Transportations"><?php echo $cityName;?> Transportations</a>
          </li>       
          <li class="hotel">
            <a href="<?php echo Yii::app()->createUrl('hotel/list',array('cityname'=>strtolower($cityName),'hotelid'=>$cityInfo->id));?>" title="<?php echo $cityName;?> hotel"><?php echo $cityName;?> Hotel</a>
          </li>
        </ul>
      </div>
      <div style="width:100%; height:auto; float:left; padding:0px; margin:0px;"><img src="/images/right1_10.jpg"></div>
    </div>
  </div>
</div>
