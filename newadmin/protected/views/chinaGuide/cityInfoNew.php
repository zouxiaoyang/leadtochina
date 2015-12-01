<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css');
  $this->setPageTitle($cityInfo->name." Travel Guide,China ".$cityInfo->name." Tours, Hotels, Attractions, Maps, Tips");
  Yii::app()->clientScript->registerMetaTag('keywords',$cityInfo->name." travel, travel to ".$cityInfo->name.", ".$cityInfo->name." travel guide, china ".$cityInfo->name." tours");
  Yii::app()->clientScript->registerMetaTag('description',$cityInfo->name." travel guide offers you the infor on China ".$cityInfo->name." tours, attractions, hotels, tips and other ".$cityInfo->name." travel service.");
  
?>


<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>">China City Guide</a><?php echo $cityInfo->name;?> City Guide</div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <!--  text start  -->
       <div class="text">
          <h2><?php echo $cityInfo->name;?> City Guide</h2>
          <div class="picture"><img src="<?php echo ImageUtils::getThumbnail(CityGuideIndexInfo::UPLOAD_PATH.$cityGuideInfo->figure_img, '344x197');?>" /></div>
          <div class="locatiion">
             <p><?php echo $cityGuideInfo->figure_desc; ?></p>
          </div>
       </div>
       <!--  text end  -->
       <div class="clear"></div>
       <!--  attractions start  -->
       <div class="attractions">
         <h2><?php echo $cityInfo->name;?> Attractions</h2>
         <?php $attractions_info = unserialize($cityGuideInfo->attractions_info);?>
         <?php if($attractions_info):?>
         <ul>
            <?php foreach($attractions_info['title'] as $k=>$v):?>
            <?php if($attractions_info['title'][$k] && $attractions_info['file'][$k]):?>
              <li><a href="<?php echo $attractions_info['url'][$k];?>"><img src="<?php echo ImageUtils::getThumbnail(CityGuideIndexInfo::UPLOAD_PATH.$attractions_info['file'][$k], '154x97');?>" alt="" /> <span><?php echo $attractions_info['title'][$k];?></span></a></li>
            <?php endif;?>
            <?php endforeach;?>
         </ul>
         <?php endif;?>
         <div class="mores"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityAttraction', array('cityname'=>strtolower($cityInfo->name)));?>"><img src="/images/chinaGuide/mores.png" alt="" /></a></div>
       </div>
       <!--  attractions end  -->
       
       <!--  culture start  -->
       <div class="culture">
         <div class="culture-top"></div>
         <!--  trans-cont start  -->
         <div class="trans-cont">
            <h2><?php echo $cityInfo->name;?> Transportation</h2>
           <div class="trans-left"><a href="#"><img src="<?php echo ImageUtils::getThumbnail(CityGuideIndexInfo::UPLOAD_PATH.$cityGuideInfo->transportation_img, '223x163');?>" /></a></div>
           <div class="trans-right">
              <p><?php echo $cityGuideInfo->transportation_desc; ?></p>
           </div>
         </div>
         <!--  trans-cont end  -->
         <div class="culture-bottom"></div>
       </div>
       <!--  culture end  -->
       
       
       <!--  culture start  -->
       <div class="culture">
         <div class="culture-top"></div>
         <!--  trans-cont start  -->
         <div class="maps-cont">
            <h2><strong><?php echo $cityInfo->name;?> Maps</strong> <a href="/<?php echo strtolower($cityInfo->name).'/map.html';//echo Yii::app()->createUrl('chinaGuide/guideContentView',array('cityname'=>strtolower($cityInfo->name),'title'=>'transportations','catid'=>'264'));?>">MORE+</a></h2>
            <ul>
              <?php foreach($citymaps as $v):?>

               <li><a href="<?php echo Yii::app()->request->baseUrl.'/'.Citymap::UPLOAD_PATH.$v->pic_path; ?>" target="_blank"><img src="<?php echo ImageUtils::getThumbnail(Citymap::UPLOAD_PATH.$v->pic_path,'196x144');?>"  style="width:196px;height:144px;" alt="<?php echo $v->pic_alt;?>" /> <span><?php echo $v->pic_alt;?></span></a></li>
             <?php endforeach;?>
            </ul>
         </div>
         <!--  trans-cont end  -->
         <div class="culture-bottom"></div>
       </div>
       <!--  culture end  -->
       
       <!--  recommend start  -->
       <?php if($recommendTours):?>
       <div class="recommend">
          <h2>Recommended <?php echo $cityInfo->name;?> Tours</h2>
          <ul>
            <?php foreach($recommendTours as $v):?>
             <li><a href="<?php echo $v->url();?>"><?php echo $v->name; ?></a></li>
           <?php endforeach;?>
          </ul>
       </div>
     <?php endif;?>
       <!--  recommend end  -->  
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->

        <div class="right1">
          <?php echo $this->renderPartial('/common/cityGuide', array('cityName'=>$cityInfo->name,'cityId'=>$cityInfo->id));?>
        </div>

        <?php echo $this->renderPartial("/common/weather", array('cityInfo'=>$cityInfo));?>
        
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <!--  right1 start  -->
        <div class="right1" style="margin-top:25px;">
          <h2>Top Ten Destinations</h2>
          <ul style=" background:#f8f8f8;">
              <?php $city_arr = array('beijing','shanghai','xian','guilin','lhasa','hangzhou','suzhou','lijiang','chongqing','chengdu');?>
              <?php foreach($city_arr as $v):?>
                <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo',array('cityname'=>$v));?>"><?php echo ucfirst($v);?> Travel Guide</a></li>
              <?php endforeach;?>
          </ul>
          <div class="search" style="display:none;"><input name="" type="text" /> <span><img src="/images/chinaGuide/search.png" alt="" /></span></div>
        </div>
        <!--  right1 end  -->
        <!--
        <div class="rightbottom"></div>
        <div class="right5">
            <h2>Weather</h2>
            <span><img src="/images/chinaGuide/weather.jpg" alt="" /></span>
        </div>
        -->
        <div class="rightbottom"></div>
        <div class="right4">
          <?php $this->renderPartial('/common/customizeTour');?>
        </div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->

