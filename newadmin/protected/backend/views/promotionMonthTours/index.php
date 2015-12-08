<?php
/* @var $this PromotionMonthToursController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promotion Month Tours',
);

$this->menu=array(
	array('label'=>'新建PromotionMonthTours', 'url'=>array('create')),
	array('label'=>'管理PromotionMonthTours', 'url'=>array('admin')),
);
?>

<h1>Promotion Month Tours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
