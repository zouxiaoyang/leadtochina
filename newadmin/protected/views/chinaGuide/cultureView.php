<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureIndex');?>">Chinese Culture</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('title'=>SiteUtils::stringURLSafe($oneCategory->title),'cultureid'=>$oneCategory->id));?>"><?php echo $oneCategory->title;?></a> <?php echo Categories::model()->findByPk($catid)->title;?> - <?php echo $thisArticle->title;?></div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <!--  text start  -->
       <div class="text">
         <h2><?php echo Categories::model()->findByPk($catid)->title;?></h2>
          <div class="festival">             
             <div class="fest-right">
                <ul>
                	<?php foreach ((array)$articleList as $k=>$v):?>                	
                   <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureView',array('articleid'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->title),'catid'=>$catid,'onecatid'=>$oneCategory->id));?>"><?php echo $v->title;?></a></li>
                  <?php endforeach;?>
                </ul>
             </div>
          </div>
          <div class="text1">
          <?php echo $thisArticle->content;?>
         
       </div>
       </div>
       <!--  text end  -->
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <h2><a href="/travel/china-guide/attractions">Famous China Attractions</a></h2>
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
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <!--  right1 start  -->
        <div class="right1" style="margin-top:25px;">
          <h2>Other <?php echo $oneCategory->title;?> TOPIC</h2>
          <ul style="background:#f8f8f8;">
          	<?php foreach ((array)$oneCategory->subCategory as $k=>$v):?>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$oneCategory->id,'title'=>SiteUtils::stringURLSafe($oneCategory->title)));?>#anchor_<?php echo $v->id;?>"><?php echo $v->title;?></a></li>
						<?php endforeach;?>
          </ul>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <div class="right4" style="display:none;"><a href="/travel/china-diy-tours"><img src="/images/tourism/left_custom_29.jpg" alt="" /></a></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->

