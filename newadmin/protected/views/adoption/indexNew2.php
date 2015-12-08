
<?php
 $this->setPageTitle("China Adoption Homeland Tours, China Adoption Travel, China Heritage Tour");
 Yii::app()->clientScript->registerMetaTag('keywords','china homeland tours, china adoption travel, china heritage tour');
 Yii::app()->clientScript->registerMetaTag('description','Lead to China Company is specialized in operating China homeland tours, China heritage tour, China root-seeking Tour and visit to orphanage etc. Customize China adoption travel now and save more.');
?>
<style type="text/css">
<!--
 .errorMessage{color:red;}
 #CDSWIDSSP{width:210px !important;}
  #CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {
    width: auto !important;
}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {display:none;}
 -->
.adop_group{background:url(/images/adoptionNew/apt_listbg.jpg) no-repeat;width:930px;height:237px;margin-top:20px;font-family:Verdana, Geneva, sans-serif}
.adop_group a{ color:#604920; font-size:11px; line-height:15px; text-decoration:none}
.adop_group a:hover{ text-decoration:underline}
.adop_group1{width:460px; float:left}
.adop_group1_tit{ font-size:14px; font-weight:bold; text-align:center; color:#604920;padding:10px 0px 5px 0px}
.adop_group1 ul li{ list-style:none; float:left;width:218px; margin-left:9px}
.adop_group1_mt{margin-top:3px}
.adop_group2{width:470px; float:left}
.adop_group2 ul li{ list-style:none; float:left;width:218px; }
</style>
<div class="content1">
   <div class="aoptees">
     <div class="aopteesleft"><h2>THE CHINA'S # 1 TRAVEL COMPANY FOR AOPTEES</h2>
                         We are specialized in arranging heritage tours for families with children adopted from China.
     </div>
     <div class="aopteesright">
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Flead2china&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21&amp;appId=132342830175639" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe></div>
   </div>
   <div class="clear"></div>
   <div class="adop_group">
    <div class="adop_group1">
      <ul>
         <li>
         <p class="adop_group1_tit">2015 Winter Promotion</p>
         <p><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1"><img src="/images/adoptionNew/listpic1a.jpg" alt="" /></a></p>
         <p class="adop_group1_mt"><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1">
         Beijing-Xi'an-Guilin-Birth City<br />
         Departure: Dec 19th, 2015<br />
         <span style="color:#C00; font-weight:bold">$1850 for Adult, Kid FREE !</span></a></p>
         </li>
         <li>
         <p class="adop_group1_tit">2016 Summer Promotion</p>
         <p><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2"><img src="/images/adoptionNew/listpic2a.jpg" alt="" /></a></p>
         <p class="adop_group1_mt"><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2">
         Bjing-Xi'an-Chengdu-Birth City<br />
         Departure: July 04th, 2016<br />
         <span style="color:#C00; font-weight:bold">$2000 for Adult, Kid FREE !</span></a></p>
         </li>
      </ul>
      </div>
      <div class="adop_group2">
      <ul>
         <li style="margin-left:13px">
         <p class="adop_group1_tit">Orphange Visit</p>
         <p><a href="/travel/adoption/orphanageVisit"><img src="/images/adoptionNew/listpic3.jpg" alt="" /></a></p>      
         <p class="adop_group1_mt" style="padding-top:2px;"><a href="/travel/adoption/orphanageVisit">Book China orphanage trips with <br />local travel agency. Best Price !</a></p>
         </li>
         <li style="margin-left:9px">
         <p class="adop_group1_tit">Customize Tour</p>
         <p><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>"><img src="/images/adoptionNew/listpic4.jpg" alt="" /></a></p>      
         <p class="adop_group1_mt"><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>">No time for a group tour? We will carefully design a trip to match your budget & ideas.</a></p>
         </li>
      </ul>
      </div>
   </div>
   <div class="clear"></div>
   <!-- province -->
   <?php $this->renderPartial("_province");?>
   <div class="latest">
      <div class="title"><a href="<?php echo Yii::app()->createUrl('adoption/storyIndex');?>">More &raquo;</a></div>
      <?php 
        $latest_stories = array_chunk($latestStories, 2);
      ?>
      <?php if($latest_stories[0]):?>
      <div class="latestlist">
          <?php foreach($latest_stories[0] as $v):?>
          <ul>
             <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageArticle', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>"><?php echo $v->title;?></a>
                  <?php echo mb_substr(strip_tags($v->content),0, 280);?>... 
             </li>
             <li><img src="/travel/<?php echo AdoptionOrphanageAddressArticle::UPLOAD_PATH.$v->pic;?>" /></li>
             <li><span>Date: <?php echo date('M dS, Y', strtotime($v->date));?></span>
             </li>
          </ul>
        <?php endforeach;?>
      </div>
      <?php endif;?>

      <?php if($latest_stories[1]):?>
      <div class="latestlist">
          <?php foreach($latest_stories[1] as $v):?>
           <ul>
             <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageArticle', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>"><?php echo $v->title;?></a>
                  <?php echo mb_substr(strip_tags($v->content),0, 280);?>... 
             </li>
             <li><img src="/travel/<?php echo AdoptionOrphanageAddressArticle::UPLOAD_PATH.$v->pic;?>" /></li>
             <li><span>Date: <?php echo date('M dS, Y', strtotime($v->date));?></span>
             </li>
          </ul>
        <?php endforeach;?>
      </div>
      <?php endif;?>

      <?php if($latest_stories[2]):?>
      <div class="latestlist" style="float:right; margin-right:0px;">
          <?php foreach($latest_stories[2] as $v):?>
          <ul>
             <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageArticle', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>"><?php echo $v->title;?></a>
                  <?php echo mb_substr(strip_tags($v->content),0, 280);?>... 
             </li>
             <li><img src="/travel/<?php echo AdoptionOrphanageAddressArticle::UPLOAD_PATH.$v->pic;?>" /></li>
             <li><span>Date: <?php echo date('M dS, Y', strtotime($v->date));?></span>
             </li>
          </ul>
        <?php endforeach;?>
      </div>
      <?php endif;?>
   </div>
   
   <div class="plan">
      <?php $this->renderPartial('/message/_adoptionform',array(
            'model'=>$message,
      )); ?>
       
      <div class="planright">
         <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
      </div>
   </div>
</div>
