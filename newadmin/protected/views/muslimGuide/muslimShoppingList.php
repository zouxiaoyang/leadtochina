<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner5.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimShoppingIndex');?>">Shopping Malls in China</a> <?php echo $shoppingCity->name;?> Shopping</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h3>Shopping in <?php echo $shoppingCity->name;?></h3>
       <?php if(strip_tags($shoppingCity->muslim_shop_des)!='欢迎使用ueditor!')echo $shoppingCity->muslim_shop_des;?>
   </div>
   <div class="market">
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