<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<script type="text/javascript" src="/travel/js/myfocus-2.0.1.min.js"></script>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
#myFocus{ width:648px; height:284px;}
-->
</style>
<script type="text/javascript">
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_sohusports'
});
</script>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a> <?php echo $scenery->name;?></div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
      <div class="text">
          <h1><?php echo $scenery->name;?></h1>
        <?php echo $scenery->description;?>       
       </div>
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <h2>Famous China Attractions</h2>
          <ul>
             <li><a href="/forbidden-city/">Forbidden City-Beijing</a></li>
             <li><a href="/great-wall/">Great Wall-Beijing</a></li>
             <li><a href="/li-river/">Li River-Guilin</a></li>
             <li><a href="/terra-cotta-warriors/">Terracotta Warriors-Xi'an</a></li>
             <li><a href="/potala-palace/">Potala Palace-Tibet</a></li>
             <li><a href="/travel/china-huangshan-attractions/">Huangshan-Anhui</a></li>
             <li><a href="/silk-road/">Silk Road</a></li>
             <li><a href="/yangtze-river/">Yangtze River</a></li>
             <li class="more"><a href="<?php echo Yii::app()->createUrl('chinaGuide/attractions');?>">More China Attractions</a></li>
          </ul>
        </div>
        <div class="rightbottom"></div>
        <!--  right3 start  -->
        <div class="right3">
            <h2>China Maps</h2>
            <a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>#citymaps"><img src="/images/chinaGuide/map.jpg" alt="" /></a>
        </div>
        <!--  right3 end  -->
        <div class="rightbottom"></div>
        <div class="right4"><?php $this->renderPartial('/common/customizeTour');?></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->
<script>
	$('#searchContent').focus(function(){
		if($(this).val()=='Province/City/Region/Attraction'){
				$(this).val('');
			}
		});
	$('#searchContent').blur(function(){
		if($(this).val()==''){
				$(this).val('Province/City/Region/Attraction');
			}
		});
	$('#submitSearch').click(function(){
			$('#searchcity').submit();
		});
</script>

