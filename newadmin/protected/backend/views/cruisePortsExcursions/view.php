<?php
/* @var $this CruisePortsExcursionsController */
/* @var $model CruisePortsExcursions */

$this->breadcrumbs=array(
	'Cruise Ports Excursions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表CruisePortsExcursions', 'url'=>array('index')),
	array('label'=>'新建CruisePortsExcursions', 'url'=>array('create')),
	array('label'=>'修改CruisePortsExcursions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CruisePortsExcursions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CruisePortsExcursions', 'url'=>array('admin')),
);
?>

<h1>查看 CruisePortsExcursions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cid',
		'schedule',
		'tour_ids',
	),
)); ?>
