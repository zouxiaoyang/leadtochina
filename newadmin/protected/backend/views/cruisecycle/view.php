<?php
/* @var $this CruisecycleController */
/* @var $model Cruisecycle */

$this->breadcrumbs=array(
	'Cruisecycles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Cruisecycle', 'url'=>array('index')),
	array('label'=>'新建Cruisecycle', 'url'=>array('create')),
	array('label'=>'修改Cruisecycle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Cruisecycle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Cruisecycle', 'url'=>array('admin')),
);
?>

<h1>查看 Cruisecycle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cruiseid',
		'activition',
		'upOrdown',
		'cruise_name',
	),
)); ?>
