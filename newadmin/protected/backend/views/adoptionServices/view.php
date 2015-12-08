<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Adoption Services', 'url'=>array('index')),
	array('label'=>'新建Adoption Services', 'url'=>array('create')),
	array('label'=>'修改Adoption Services', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Adoption Services', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Adoption Services', 'url'=>array('admin')),
);
?>

<h1>查看 Services #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'city_id',
		'services_name',
		'price_bus',
		'price_1',
		'price_2_5',
		'price_6_9',
	),
)); ?>
