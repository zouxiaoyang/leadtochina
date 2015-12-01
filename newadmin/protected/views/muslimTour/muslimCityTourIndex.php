<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> City Muslim Tour</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text">
       <h2>China City Muslim Tour Packages</h2>
       <p>Our China Muslim City Tour Packages cover the most popular Chinese tourist cities including Beijing, Xian, Shanghai, Guilin, Lhasa, Hangzhou, Huangshan, etc., as well as some cities with distinguishing Muslim culture and profound Muslim History.</p>
	   <br/>
	   <p>Meanwhile, all our city tour packages are local design, best tour arrangement at best price and will enable you to enjoy a wonderful China City tour experience. With efficient and secure booking system, and experienced trip consultants 12 hours online, you will have a great China muslim City Tour experience.</p>
   </div>
   <div class="hotnew">
      <h2>Hot Cities Muslim Tour Package</h2>
      <?php foreach ($muslimRecommendCities as $k=>$v):?>
      <ul>
         <li class="title"><a href="<?php echo Yii::app()->createUrl('muslimTour/muslimCityTour', array('cityid'=>$v['cityId'],'title'=>strtolower($v['cityName'].'-muslim-tour')));?>"><?php echo $v['cityName'];?></a><span> (<?php echo $v['packageCount'];?> ltineraries)</span></li>
         <li><a href="<?php echo Yii::app()->createUrl('muslimTour/muslimCityTour', array('cityid'=>$v['cityId'],'title'=>strtolower($v['cityName'].'-muslim-tour')));?>"><img src="/images/muslim/muslimRecommendCity<?php echo $k+1;?>.jpg" alt="<?php echo $v['cityName'];?> Muslim Tour Package" /></a></li>
         <li class="desc" title="<?php echo strip_tags($v['muslimDescription']);?>"><?php echo substr(strip_tags($v['muslimDescription']),0,200);?>...<br />
         <a href="<?php echo Yii::app()->createUrl('muslimTour/muslimCityTour', array('cityid'=>$v['cityId'],'title'=>strtolower($v['cityName'].'-muslim-tour')));?>">View All</a></li>
      </ul>
      <?php endforeach;?>
   </div>
   <div class="single">
      <h2>Single City Muslim Tours Package</h2>
      <?php $this->renderPartial('_muslimCityList');?>
   </div>
</div>
