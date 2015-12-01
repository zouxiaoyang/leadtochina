<?php
/* @var $this GuestsController */
/* @var $model Guests */

$this->breadcrumbs=array(
	'Guests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Guests', 'url'=>array('index')),
	array('label'=>'新建Guests', 'url'=>array('create')),
	array('label'=>'修改Guests', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Guests', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Guests', 'url'=>array('admin')),
);
?>

<h1>查看 Guests #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tid',
		'number',
		'full_name',
		'passport',
		'nationality',
	),
)); ?>
