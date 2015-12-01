<?php
/* @var $this InternationalCruiseController */
/* @var $model InternationalCruise */

$this->breadcrumbs=array(
	'International Cruises'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表InternationalCruise', 'url'=>array('index')),
	array('label'=>'新建InternationalCruise', 'url'=>array('create')),
	array('label'=>'修改InternationalCruise', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除InternationalCruise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理InternationalCruise', 'url'=>array('admin')),
);
?>

<h1>查看 InternationalCruise #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'intro',
		'schedule',
	),
)); ?>
