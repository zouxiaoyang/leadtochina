<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>

<?php
  $this->setPageTitle("Things to Do in China, Places to Visit China, Info about China Trip, Food, Shopping");
  Yii::app()->clientScript->registerMetaTag('keywords',"top 10 things to do in china, when to visit china, places to visit china, travel china");
  Yii::app()->clientScript->registerMetaTag('description',"Lastest China travel Info about things to do in China, best places to visit China, where and when to go China and so on. Offering you how to travel China in a best way.");
?>

<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a> Things To Do In China</div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <!--  text start  -->
       <div class="text">
          <h2>Things To Do</h2>
          <p>Do not know where to visit in China? Which is the best time for China travel? What to see in China? What aer the famous Chinese dishes? Need a unique China Trip? You will find these answer here. Meanwhile,our professional trip advisor are offering the lastest and interesting travel info everyday. Get to know these nust-see before travelling China will make your trip better.</p>
       </div>
       <!--  text end  -->
       <?php 
        $content_arr = array_chunk($new_contents, 3);
       ?>
       <!--  things start  -->
       <div class="things">
         <div class="list1">
            <?php foreach($content_arr[0] as $v):?>
            <ul>
            <li class="pic"><?php if($v['pic_path']):?><img src="/uploads/content/<?php echo $v['pic_path'];?>" /><?php endif;?></li>
               <li class="title"><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>SiteUtils::stringURLSafe($v['title']),'id'=>$v['id']));?>"><?php echo $v['title'];?></a></li>
               <li class="desc"><?php echo substr(strip_tags($v['introtext']),0,200);?>...<a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>SiteUtils::stringURLSafe($v['title']),'id'=>$v['id']));?>">Details</a></li>
            </ul>
            <?php endforeach;?>
          
         </div>
         <div class="list1">
            <?php foreach($content_arr[1] as $v):?>
            <ul>
            <li class="pic"><?php if($v['pic_path']):?><img src="/uploads/content/<?php echo $v['pic_path'];?>" /><?php endif;?></li>
               <li class="title"><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>SiteUtils::stringURLSafe($v['title']),'id'=>$v['id']));?>"><?php echo $v['title'];?></a></li>
               <li class="desc"><?php echo substr(strip_tags($v['introtext']),0,200);?>...<a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>SiteUtils::stringURLSafe($v['title']),'id'=>$v['id']));?>">Details</a></li>
            </ul>
            <?php endforeach;?>
         </div>
         <div class="list1" style="margin-right:0px;">
           <?php foreach($content_arr[2] as $v):?>
            <ul>
               <li class="pic"><?php if($v['pic_path']):?><img src="/uploads/content/<?php echo $v['pic_path'];?>" /><?php endif;?></li>
               <li class="title"><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>SiteUtils::stringURLSafe($v['title']),'id'=>$v['id']));?>"><?php echo $v['title'];?></a></li>
               <li class="desc"><?php echo substr(strip_tags($v['introtext']),0,200);?>...<a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>SiteUtils::stringURLSafe($v['title']),'id'=>$v['id']));?>">Details</a></li>
            </ul>
            <?php endforeach;?>
         </div>
         <div class="clear"></div>
         <div class="things-more"><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList');?>"><img src="/images/chinaGuide/mores.png" alt="" /></a></div>
       </div>
       <!--  things end  -->
       <div class="last2"><a href="#"><img src="/images/chinaGuide/pic61.jpg" alt="" /></a></div>
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
        <div class="right1" style="margin-top:25px;">
          <h2>Things to do in Cities</h2>
          <ul class="three">
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-beijing','catid'=>44));?>">Beijing</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList', array('title'=>'things-to-do-in-xian','catid'=>45));?>">Xi'an</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-guilin','id'=>989));?>">Guilin</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-shanghai','id'=>552));?>">Shanghai</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-hangzhou','id'=>1031));?>">Hangzhou</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-hongkong','id'=>998));?>">Hongkong</a></li>
             <li><a href="#">Tibet</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-chengdu','id'=>1019));?>">Chengdu</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-datong','id'=>1350));?>">Datong</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-luoyang','id'=>996));?>">Luoyang</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-harbin','id'=>995));?>">Harbin</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-guangzhou','id'=>986));?>">Guangzhou</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-kunming','id'=>1029));?>">Kunming</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-hohhot','id'=>1004));?>">Hohhot</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-nanjing','id'=>1005));?>">Nanjing</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-chongqing','id'=>982));?>">Chongqing</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-dunhuang','id'=>984));?>">Dunhuang</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-lijiang','id'=>1030));?>">Lijiang</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-macau','id'=>1009));?>">Macau</a></li>
             <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsArticle', array('title'=>'things-to-do-in-qingdao','id'=>1013));?>">Qingdao</a></li>
             <li class="more"><a href="<?php echo Yii::app()->createUrl('chinaGuide/thingsList'); ?>">More Cities &raquo;</a></li>
             
          </ul>
        </div>
        <!--  right1 end  -->
        <div class="rightbottom"></div>
        <div class="right4"><?php echo $this->renderPartial('/common/customizeTour');?></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->

