<script type="text/javascript">
/*
$(document).ready(function(){
	$("div.list li.title span b").click(function(){
	     $(this).parents("li.title").next("li.menu_body").slideDown(1).siblings("li.menu_body").slideUp("slow");
         $("div.list li.title span").removeClass("dq");
         $(this).parents("li.title span").addClass("dq");
	});

	<?php if(strpos(Yii::app()->request->requestUri, 'china-muslim-tour-package')){
			$currentUrl=1;
		}elseif(strpos(Yii::app()->request->requestUri, 'city-muslim-tour')){
			$currentUrl=2;
		}elseif(strpos(Yii::app()->request->requestUri, 'china-muslim-in-history')){
			$currentUrl=3;
		}elseif(strpos(Yii::app()->request->requestUri, 'mosques-in-china')||strpos(Yii::app()->request->requestUri, 'muslim-mosques-guide')){
			$currentUrl=4;
		}elseif(strpos(Yii::app()->request->requestUri, 'halal-food-in-china')||strpos(Yii::app()->request->requestUri, 'muslim-halal-food-guide')){
			$currentUrl=5;
		}elseif(strpos(Yii::app()->request->requestUri, 'prayer-time')){
			$currentUrl=6;
		}elseif(strpos(Yii::app()->request->requestUri, 'shopping-malls-in-China')||strpos(Yii::app()->request->requestUri, 'muslim-shopping-guide')){
			$currentUrl=7;
		}
	?>
	//$(".menu_body:eq(<?php echo $currentUrl-1?>)").show().prev("li.title").find("span").addClass("dq");
	
});
*/
</script>
<style type="text/css">
/**
.menu_body {
	display:none;
}
*/
</style>
   <div class="list-top"><img src="/images/hotel/topbg.jpg" alt="" /></div>
   <div class="list">
      <ul>
          <li class="title" style="margin-top:4px;"><span><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimChinaTour");?>">China Muslim Tour Package </a><b></b></span></li>
          <li class="menu_body">
              <ol>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimChinaTour");?>#chinamuslim1">Classical China Muslim Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimChinaTour");?>#chinamuslim2">China Silk Road Muslim Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimChinaTour");?>#chinamuslim3">China Tibet Muslim Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimChinaTour");?>#chinamuslim4">China Muslim Shopping Tours</a></li>
              </ol>
          </li>
          <li class="title"><span><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimCityTourIndex");?>">City Muslim Tour</a><b></b></span></li>
          <li class="menu_body">
              <ol>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimCityTour",array('cityid'=>'11','title'=>'beijing-muslim-tour'));?>">Beijing Muslim Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimCityTour",array('cityid'=>'14','title'=>'shanghai-muslim-tour'));?>">Shanghai Muslim Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimCityTour",array('cityid'=>'22','title'=>'guilin-muslim-tour'));?>">Guilin Muslim Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl("muslimTour/muslimCityTour",array('cityid'=>'116','title'=>'guangzhou-muslim-tour'));?>">Guangzhou Muslim Tour</a></li>
              </ol>
          </li>
          <li class="title"><span><a href="<?php echo Yii::app()->createUrl("muslimGuide/muslimHistoryList");?>">China Muslim in History</a><b></b></span></li>
          <li class="menu_body">
              <ol>
                   <?php foreach ((array)MuslimContents::getMuslimHistoryArticles() as $k=>$v):?>
				   <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHistoryView', array('id'=>$v->id,'name'=>SiteUtils::stringURLSafe($v->title)));?>" title="<?php echo $v->title;?>"><?php echo substr($v->title,0,30);?>...</a></li>
				   <?php endforeach;?>
              </ol>
          </li>
      </ul>
   </div>
   <div class="list-bottom"><img src="/images/hotel/bottombg.jpg" alt="" /></div>
   <div class="list3">
       <h2>China Muslim Tour Guide</h2>
       <ul>
          <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesIndex')?>"><img src="/images/muslim/mosque.jpg" alt="" /><span>Mosques in China</span></a></li>
          <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodList')?>"><img src="/images/muslim/halal.jpg" alt="" /><span>Halal Food in China</span></a></li>
          <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimPrayerList')?>"><img src="/images/muslim/prayer.jpg" alt="" /><span>Prayer Time</span></a></li>
          <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingIndex')?>"><img src="/images/muslim/shopping.jpg" alt="" /><span>Shopping Malls in China</span></a></li>
       </ul>
   </div>
   <div class="list-bottom"><img src="/images/hotel/bottombg.jpg" alt="" /></div>