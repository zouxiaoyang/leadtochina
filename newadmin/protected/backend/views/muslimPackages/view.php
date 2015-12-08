<?php
/* @var $this MuslimPackagesController */
/* @var $model AllPackages */

$this->breadcrumbs=array(
	'All Packages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Muslim Tour', 'url'=>array('index')),
	array('label'=>'新建Muslim Tour', 'url'=>array('create')),
	array('label'=>'修改Muslim Tour', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Muslim Tour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Muslim Tour', 'url'=>array('admin')),
);
?>

<h1>查看 AllPackages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'package_id',
		'muslim_cat_id',
		'province_id',
		'city_id',
		'package_type',
	),
)); ?>
