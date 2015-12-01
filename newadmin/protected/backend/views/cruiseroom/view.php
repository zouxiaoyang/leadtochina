<?php
/* @var $this CruiseroomController */
/* @var $model Cruiseroom */

$this->breadcrumbs=array(
	'Cruiserooms'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表Cruiseroom', 'url'=>array('index')),
	array('label'=>'新建Cruiseroom', 'url'=>array('create')),
	array('label'=>'修改Cruiseroom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Cruiseroom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Cruiseroom', 'url'=>array('admin')),
);
?>

<h1>查看 Cruiseroom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cruiseid',
		'cruise_name',
		'name',
		'price',
		'breakfast',
	),
)); ?>
