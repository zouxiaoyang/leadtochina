<?php
/* @var $this InternationalCruiseChinaExcursionsController */
/* @var $model InternationalCruiseChinaExcursions */

$this->breadcrumbs=array(
	'International Cruise China Excursions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表InternationalCruiseChinaExcursions', 'url'=>array('index')),
	array('label'=>'新建InternationalCruiseChinaExcursions', 'url'=>array('create')),
	array('label'=>'修改InternationalCruiseChinaExcursions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除InternationalCruiseChinaExcursions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理InternationalCruiseChinaExcursions', 'url'=>array('admin')),
);
?>

<h1>查看 InternationalCruiseChinaExcursions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cid',
		'name',
		'intro',
		'tour_ids',
	),
)); ?>
