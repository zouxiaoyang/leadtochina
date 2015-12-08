<?php
/* @var $this CruisePorstTypeController */
/* @var $model CruisePorstType */

$this->breadcrumbs=array(
	'Cruise Porst Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表CruisePortType', 'url'=>array('index')),
	array('label'=>'新建CruisePortType', 'url'=>array('create')),
	array('label'=>'修改CruisePortType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CruisePortType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CruisePortType', 'url'=>array('admin')),
);
?>

<h1>查看 CruisePortType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cid',
		'pid',
		//'schedule',
		'tour_type_ids',
	),
)); ?>
