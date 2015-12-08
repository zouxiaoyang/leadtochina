<?php
/* @var $this TrafficController */
/* @var $model Traffic */

$this->breadcrumbs=array(
	'Traffics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Traffic', 'url'=>array('index')),
	array('label'=>'新建Traffic', 'url'=>array('create')),
	array('label'=>'修改Traffic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Traffic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Traffic', 'url'=>array('admin')),
);
?>

<h1>查看 Traffic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tid',
		'date',
		'depart_time',
		'depart_city',
		'arrive_time',
		'arrive_city',
		'flight_train_info',
		'e_tickets',
	),
)); ?>
