<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner5.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> Shopping Malls in China</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h2 class="align">Shopping in China</h2>
       <p>While in China, most travelers want to bring some wonderful souvenirs for their family members and friends. So it's definitely to have some idea of China's shopping and products.</p>
       <p>As a fantastic shopping paradise, Shopping in China is getting more convenient. Brands of daily necessities can be found in most of the large department stores and shopping malls. Open markets with negotiable price are warmly welcomed by tourists. The silk, jade, porcelain, Chinese medicines, antiques tea, etc., will highlight your tour experience in China.</p>
       <p>Definitely, shopping could be time-consuming, confusing and exhausting. However, our tour guides are the best help to help you find the most worthy products with reasonable price.</p>
       <p>They will prove essential in finding the real stuff and bringing the prices down!</p>
   </div>
   <div class="shopping">
      <h2>Popular Shopping Places in China</h2>
      <?php foreach ($hotMulslimShoppingArticles as $k=>$v):?>
      <ul>
         <li class="pic"><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingView', array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->title)));?>"><img src="<?php echo ImageUtils::getThumbnail(MuslimContents::UPLOAD_PATH . $v->image, '202x83');?>" alt="<?php echo $v->title;?>" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingView', array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->title)));?>"><?php echo $v->title;?></a></li>
      </ul>
     <?php endforeach;?>
   </div>
   <?php $this->renderPartial('_muslimShopping');?>   
</div>
