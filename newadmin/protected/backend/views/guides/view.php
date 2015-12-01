<?php
/* @var $this GuidesController */
/* @var $model Guides */

$this->breadcrumbs=array(
	'Guides'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表Guides', 'url'=>array('index')),
	array('label'=>'新建Guides', 'url'=>array('create')),
	array('label'=>'修改Guides', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Guides', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Guides', 'url'=>array('admin')),
);
?>

<h1>查看 Guides #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tid',
		'name',
		'city',
		'mobie',
	),
)); ?>
