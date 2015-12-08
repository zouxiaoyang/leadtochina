<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner1.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHistoryList')?>">China Muslim in History</a> <?php echo $muslimHistoryArticle->title;?></div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h3><?php echo $muslimHistoryArticle->title;?></h3>
       	<?php echo $muslimHistoryArticle->description;?>
   </div>
   <div class="guide-list">
      <?php $this->renderPartial('_muslimHistory');?>
   </div>
   
</div>