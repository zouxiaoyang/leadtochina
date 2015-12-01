<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<style type="text/css">
<!--
#menu-guide{ width:930px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a> China Attraction</div>
<div class="clear"></div>
<!--  attraction start  -->
<div id="attraction">
   <div class="tobanner">
      <div class="tobanner-top"><span>China Attraction</span></div>
      <div class="tobanner-cont">
      	<h2>By Major Cities:</h2>
      		<?php foreach (Yii::app()->params['attraction_city'] as $k=>$v):?>
          <ul>
            <li class="letter"><?php echo $k;?>:</li>
            <li>
               <ol>
               		 <?php foreach ($v as $k1=>$v1):?>
                   <li <?php if($v1=='hot'):?>class="hot"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityAttraction',array('cityname'=>strtolower($k1)));?>"><?php echo $k1;?></a></li>
                   <?php endforeach;?>
               </ol>
            </li>
          </ul>
    		  <?php endforeach;?>
          
          <?php foreach ($attractions as $k=>$v):?>
          <h2>By <?php echo $v->title;?></h2>
          <ul class="two">
          	<?php foreach ($v->subCategory as $v1):?>        
          	<li><a href="/china-guide/<?php echo SiteUtils::stringURLSafe($v1->title);?>/"><?php echo $v1->title;?></a></li>
          	<?php endforeach;?>
          </ul>
          <?php endforeach;?>
          <div class="clear"></div>
          <div class="attract-search" style="display:none;">
          <form name="searchcity" id="searchcity" action="/index.php?option=com_searchcity&Itemid=180" method="post">
          <input name="cityname" id="searchContent" type="text" /> <span id="submitSearch" style="cursor:pointer;">Attractions Search</span>
					</form>
          
          </div> 
      </div>
   </div>
   <div class="attract-hot">
      <h2>Hot China Attractions</h2>
      <div class="banner2">
         <div class="one">
            <a href="/great-wall/"><img src="/images/chinaGuide/pic62.jpg" alt="" /></a>
            <a href="/li-river/"><img src="/images/chinaGuide/pic63.jpg" alt="" /></a>
            <a href="/huangshan/attraction/mount-huangshan.html"><img src="/images/chinaGuide/pic64.jpg" alt="" /></a>
         </div>
         <div class="two">
            <a href="/forbidden-city/"><img src="/images/chinaGuide/pic65.jpg" alt="" /></a>
            <a href="/west-lake/"><img src="/images/chinaGuide/pic66.jpg" alt="" /></a>
            <a href="/potala-palace/"><img src="/images/chinaGuide/pic67.jpg" alt="" /></a>
         </div>
         <div class="three">
            <a href="/nanjing/attraction/yangtze-river-bridge.html"><img src="/images/chinaGuide/pic68.jpg" alt="" /></a>
            <a href="/chengdu/attraction/chengdu-giant-panda-breeding-research-base.html"><img src="/images/chinaGuide/pic69.jpg" alt="" /></a>
            <a href="/summer-palace/"><img src="/images/chinaGuide/pic70.jpg" alt="" /></a>
         </div>
         <div class="four">
            <a href="/terra-cotta-warriors/"><img src="/images/chinaGuide/pic71.jpg" alt="" /></a>
         </div>
      </div>
      <h2>Best of China Attractions &raquo;</h2>
      <div class="best">
      	<?php foreach ($recommendAttractions as $k=>$v):?>
         <ul>
            <li class="pic"><a href="<?php echo Yii::app()->createUrl('chinaGuide/recommandAttractionView',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));?>"><img src="<?php echo ImageUtils::getThumbnail(JosCosScenery::UPLOAD_PATH.$v->ufile, '128x95');?>" alt="" /></a></li>
            <li class="desc"><a href="<?php echo Yii::app()->createUrl('chinaGuide/recommandAttractionView',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));?>"><?php echo $v->name;?></a>
             <?php echo SiteUtils::mb_truncate_text(strip_tags($v->description),'200');?> <a href="<?php echo Yii::app()->createUrl('chinaGuide/recommandAttractionView',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));?>" class="detail">Details</a>         
            </li>
         </ul>
     		<?php endforeach;?>
      </div>
      <div class="clear"></div>
      <div class="last3"><a href="/index.php?option=com_diy&template=customize1&view=customize"><img src="/images/chinaGuide/pic82.jpg" alt="" /></a></div>
   </div>
</div>
<!--  attraction end  -->
<script>
$('#submitSearch').click(function(){
	$('#searchcity').submit();
});
</script>
