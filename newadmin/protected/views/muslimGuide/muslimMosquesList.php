<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="banner1"><img src="/images/muslim/banner3.jpg" alt="" /></div>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> <a href="<?php echo Yii::app()->createUrl('muslimGuide/muslimMosquesIndex')?>">Mosques in China</a> <?php echo $mosquesCity->name;?> Mosques</div>

<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text1">
       <h3><?php echo $mosquesCity->name;?> Mosques</h2>
      <?php if(strip_tags($mosquesCity->muslim_mos_des)!='欢迎使用ueditor!')echo $mosquesCity->muslim_mos_des;?>  
   </div>
   <div class="mosque">
   		<?php $this->widget('zii.widgets.CListView',array(
   			'dataProvider'=>$muslimCityMosquesList,
   				'itemView'=>'_mosquesItemView',
   				'ajaxUpdate'=>false,
		              'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
   		));?>
   </div>
  
   <?php $this->renderPartial('_muslimMosques');?>
</div>