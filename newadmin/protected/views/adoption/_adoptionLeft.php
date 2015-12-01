<!--  homeland start  -->
<div class="homeland">
   <ul>
      <li class="homelandtitle"><img src="/images/adoption/homelandtitle.jpg" alt="" /></li>
      <li><a href="<?php echo Yii::app()->createUrl('adoption');?>">First Return Trips</a></li>
      <li><a href="<?php echo Yii::app()->createUrl('adoption');?>">Multi Return Trips</a></li>
      <li><a href="<?php echo Yii::app()->createUrl("adoption/customizeAdoption"); ?>">Customize Service</a></li>
   </ul>
</div>
<!--  homeland end  -->

<!--  latestnew start  -->
<?php
    $chinaGuideArticle=AdoptionContent::model()->findAll(array(
        'condition'=>'cat_id=6',
        'limit' =>4
    ));
?>
<div class="latestnew">
    <div class="latesttitle"><img src="/images/adoption/latesttitle.jpg" alt="" /></div>
    <div class="latestcont">
         <?php foreach($chinaGuideArticle as $v):?>
          <ul>
              <li class="pic"><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>"><img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH.$v->image, '192x118')?>" style="width:192px;height:118px;"  /></a></li>
              <li><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" target="_blank"><?php echo $v->title;?></a>
                <?php echo SiteUtils::mb_truncate_text(strip_tags($v->description),140);?><a class="tesu" href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>">More</a>
              </li>
          </ul>
         <?php endforeach;?>
        
    </div>
</div>
<!--  latestnew end  -->


<!--  whynew start  -->
<div class="whynew">
   <h2><img src="/images/adoption/why.png" alt="" /></h2>
   <ul>
      <li>Professional English Speaking Tour Guide with Extensive Knowledge</li>
      <li>Barrier-free China Orphanage Visiting</li> 
      <li>Tailor made China Tour to your EVERY interest</li>
   </ul>
</div>
<!--  whynew end  -->
