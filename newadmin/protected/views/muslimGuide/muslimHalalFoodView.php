<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner2.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalFoodList')?>">Halal Food in China</a> <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimHalalRestaurantList', array('cityId'=>$muslimHalalCity->id,'cityName'=>strtolower($muslimHalalCity->name)));?>"><?php echo $muslimHalalCity->name;?> Halal Food</a><?php echo $muslimHalalFoodArticle->title;?></div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h3><?php echo $muslimHalalFoodArticle->title;?></h2>
       <?php echo $muslimHalalFoodArticle->description;?>
   <div class="restaurant" style="margin-top:10px;padding-top:5px;border-top:1px dashed #B2B2B2;">
           <?php $this->widget('zii.widgets.CListView',array(
       			'dataProvider'=>$muslimCityHalalList,
   				'itemView'=>'_halalItemView',
   				'ajaxUpdate'=>false,
		              'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
       			));?>
  
     </div>
   </div>
   
   <?php $this->renderPartial('_muslimHalalFood');?>
   
</div>