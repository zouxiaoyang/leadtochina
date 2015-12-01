<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner5.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingIndex');?>">Shopping Malls in China</a> <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingList', array('cityid'=>$muslimShoppingCity->id,'title'=>strtolower($muslimShoppingCity->name)));?>"><?php echo strtolower($muslimShoppingCity->name);?> Shopping</a> <?php echo $muslimShoppingArticle->title;?></div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h3><?php echo $muslimShoppingArticle->title;?></h3>
       	<?php echo $muslimShoppingArticle->description;?>
   </div>
   <div class="market" style="padding-top:15px;border-top:1px dashed #B2B2B2;">
   	<?php $this->widget('zii.widgets.CListView',array(
   				'dataProvider'=>$muslimCityShoppingList,
   				'itemView'=>'_shoppingItemView',
   				'ajaxUpdate'=>false,
		              'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
   		  ));?>
   </div>
  <?php $this->renderPartial('_muslimShopping');?>
</div>
