<?php
/* @var $this ChinacultureController */
/* @var $model Chinaculture */

$this->breadcrumbs=array(
	'Chinacultures'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表Chinaculture', 'url'=>array('index')),
	array('label'=>'新建Chinaculture', 'url'=>array('create')),
	array('label'=>'修改Chinaculture', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Chinaculture', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Chinaculture', 'url'=>array('admin')),
);
?>

<h1>查看 Chinaculture #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'catid',
		'cat_path',
		'content',
		'ufile',
		'filedir',
		'url',
		'seo_title',
		'seo_key',
		'seo_description',
		'enable',
		'update_route',
	),
)); ?>
