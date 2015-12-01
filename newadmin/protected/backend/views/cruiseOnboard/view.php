<?php
/* @var $this CruiseOnboardController */
/* @var $model CruiseOnboard */

$this->breadcrumbs=array(
	'Cruise Onboards'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表CruiseOnboard', 'url'=>array('index')),
	array('label'=>'新建CruiseOnboard', 'url'=>array('create')),
	array('label'=>'修改CruiseOnboard', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CruiseOnboard', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CruiseOnboard', 'url'=>array('admin')),
);
?>

<h1>查看 CruiseOnboard #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cruiseid',
		'cruise_name',
		'name',
		'description',
		'onboard_pic',
	),
)); ?>
