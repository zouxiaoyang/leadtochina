<?php
/* @var $this CruiseactController */
/* @var $model Cruiseact */

$this->breadcrumbs=array(
	'Cruiseacts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Cruiseact', 'url'=>array('index')),
	array('label'=>'新建Cruiseact', 'url'=>array('create')),
	array('label'=>'修改Cruiseact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Cruiseact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Cruiseact', 'url'=>array('admin')),
);
?>

<h1>查看 Cruiseact #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cruiseid',
		'cruise_name',
		'cruise_date',
		'year',
		'month',
		'days',
		'upOrdown',
	),
)); ?>
