<?php
/* @var $this BeijingPackageController */
/* @var $model BeijingPackage */

$this->breadcrumbs=array(
	'Beijing Packages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表BeijingPackage', 'url'=>array('index')),
	array('label'=>'新建BeijingPackage', 'url'=>array('create')),
	array('label'=>'修改BeijingPackage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除BeijingPackage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理BeijingPackage', 'url'=>array('admin')),
);
?>

<h1>查看 BeijingPackage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'package_id',
		'cat_id',
		'province_id',
		'description',
		'ufile',
	),
)); ?>
