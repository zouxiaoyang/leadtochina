<?php
/* @var $this PromotionMonthToursController */
/* @var $model PromotionMonthTours */

$this->breadcrumbs=array(
	'Promotion Month Tours'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表PromotionMonthTours', 'url'=>array('index')),
	array('label'=>'新建PromotionMonthTours', 'url'=>array('create')),
	array('label'=>'修改PromotionMonthTours', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除PromotionMonthTours', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理PromotionMonthTours', 'url'=>array('admin')),
);
?>

<h1>查看 PromotionMonthTours #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'month',
		'tour_ids',
	),
)); ?>
