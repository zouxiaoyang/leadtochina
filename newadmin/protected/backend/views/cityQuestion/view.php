<?php
/* @var $this CityQuestionController */
/* @var $model CityQuestion */

$this->breadcrumbs=array(
	'City Questions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表CityQuestion', 'url'=>array('index')),
	array('label'=>'新建CityQuestion', 'url'=>array('create')),
	array('label'=>'修改CityQuestion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CityQuestion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CityQuestion', 'url'=>array('admin')),
);
?>

<h1>查看 CityQuestion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'username',
		'question',
		'reply',
		'time',
	),
)); ?>
