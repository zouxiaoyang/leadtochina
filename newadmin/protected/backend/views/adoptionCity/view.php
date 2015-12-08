<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Cities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Adoption City', 'url'=>array('index')),
	array('label'=>'新建Adoption City', 'url'=>array('create')),
	array('label'=>'修改Adoption City', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Adoption City', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Adoption City', 'url'=>array('admin')),
);
?>

<h1>查看 City #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'city_name',
		'description',
	),
)); ?>
