<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a> Chinese Culture</div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <div class="banner1"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureView',array('onecatid'=>'714','catid'=>'716','articleid'=>'577','title'=>'kung-fu'));?>"><img src="/images/chinaGuide/pic21.jpg" alt="" /></a><a href="/travel/china-guide/chinesae-culture/traditions-608#anchor_636"><img src="/images/chinaGuide/pic22.jpg" alt="" /></a><a href="/travel/china-guide/chinesae-culture/arts-607#anchor_648"><img src="/images/chinaGuide/pic23.jpg" alt="" /></a><a style="padding-right:0px;" href="/travel/china-guide/chinesae-culture/food-609#anchor_664"><img src="/images/chinaGuide/pic24.jpg" alt="" /></a></div>
       <!--  text start  -->
       <div class="text">
          <h2>Chinese Culture</h2>
          <p>With the area of 9.6 million square kilometers, 56 ethnic group and over 5000 years history, China present a differenct culture, attractions and scenery to the world tourists.To make a better China travel guide, we collect huge information of China City Guide, China Attractions, Maps, Culture and others tips for you. Tell you things to do in China including travel, accomadation, travel, shopping, transportation and eating.If you miss something important, be free to tell us and we will give you more details about China tour guide.</p>
       </div>
       <!--  text end  -->
       <div class="clear"></div>
       <!--  culture1 start  -->
       <div class="culture1">
       <?php for ($i=0;$i<4;$i++):?>
          <ul>
             <li class="title"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>"><?php echo $chinaCultureList[$i]->title;?></a></li>
             <li><?php echo SiteUtils::mb_truncate_text($chinaCultureList[$i]->description,135);?></li>
             <li class="desc"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>"><img src="<?php echo ImageUtils::getThumbnail(Categories::UPLOAD_PATH.$chinaCultureList[$i]->ufile,'121x125');?>" alt="" /></a> 
             <span>
             		<?php foreach ((array)$chinaCultureList[$i]->subCategory as $k=>$v):?>
             			<?php if($v->newpublished=='1'):?>
             		<a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>#anchor_<?php echo $v->id;?>"><?php echo $v->title;?></a>
                  <?php endif;?>
             			<?php endforeach;?>
               </span>
             </li>
          </ul>
         <?php endfor;?>
       </div>
       <!--  culture1 end  -->
       
       <!--  history start  -->
       <div class="history"><a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=14"><img src="/images/chinaGuide/pic29.jpg" alt="" /> <span>China World Heritage Tours</span></a></div>
       <!--  history end  -->
       
       <!--  last1 start  -->
       <div class="last1">
           <div class="last-left">
           		<?php for ($i=4;$i<6;$i++):?>
               <ul>
                 <li class="title"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>"><?php echo $chinaCultureList[$i]->title;?></a></li>
                 <li><?php echo SiteUtils::mb_truncate_text($chinaCultureList[$i]->description,150);?></li>
                 <li class="desc">
                 <span>                 
                 <?php foreach ((array)$chinaCultureList[$i]->subCategory as $k=>$v):?>
             			<?php if($v->newpublished=='1'):?>
             		<a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>#anchor_<?php echo $v->id;?>"><?php echo $v->title;?></a>
                 	<?php endif;?>
                 	<?php endforeach;?>
                 </span> 
                 <a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>"><img src="<?php echo ImageUtils::getThumbnail(Categories::UPLOAD_PATH.$chinaCultureList[$i]->ufile, '110x101')?>" alt="" /></a></li>
              </ul> 
           		<?php endfor;?>
           </div>
           <div class="last-right">
           	<?php for ($i=6;$i<9;$i++):?>
              <ul>
                 <li class="title"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>"><?php echo $chinaCultureList[$i]->title;?></a></li>
                 <li class="desc"><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureList',array('cultureid'=>$chinaCultureList[$i]->id,'title'=>SiteUtils::stringURLSafe($chinaCultureList[$i]->title)));?>"><img src="<?php echo ImageUtils::getThumbnail(Categories::UPLOAD_PATH.$chinaCultureList[$i]->ufile, '94x83')?>" alt="" /></a> <span><?php echo SiteUtils::mb_truncate_text($chinaCultureList[$i]->description,150);?></span> </li>
              </ul>
            <?php endfor;?>
           </div>  
       </div>
       <!--  last1 end  -->
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <?php $this->renderPartial('/common/chinaTravelGuide');?>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <!--  right1 start  -->
        <div class="right6">
          <h2>China Cultural Tips</h2>
          <ul>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureView',array('onecatid'=>'704','catid'=>'707','articleid'=>'565','title'=>'spring-festival'));?>"><span>Chinese Traditional Festival</span><img src="/images/chinaGuide/pic35.jpg" alt="" /></a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureView',array('onecatid'=>'708','catid'=>'710','articleid'=>'575','title'=>'zodiac-signs-introduction'));?>"><span>12 Chinese Zodiac Signs</span><img src="/images/chinaGuide/pic36.jpg" alt="" /></a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cultureView',array('onecatid'=>'711','catid'=>'713','articleid'=>'576','title'=>'chinese-lucky-numbers'));?>"><span>Lucky Numbers</span><img src="/images/chinaGuide/pic37.jpg" alt="" /></a></li>
          </ul>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        
        <!--  right1 start  -->
        <div class="right1" style="margin-top:25px;">
          <h2>Cultural City Tours</h2>
          <ul>
          <?php $cultureCityList=Yii::app()->params['culture_city_tours'];?>
          	<?php foreach ((array)$cultureCityList as $v):?>
             <li><a href="<?php echo Yii::app()->createUrl('cityTours/list',array('title'=>SiteUtils::stringURLSafe($v)."-tours"));?>"><?php echo $v;?></a></li>
             <?php endforeach;?>
          </ul>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <div class="right4"><a href="/travel/china-diy-tours"><img src="/images/tourism/left_custom_29.jpg" alt="" /></a></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->

