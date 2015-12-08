<?php
/* @var $this FeedbackController */
/* @var $model Feedback */

$this->breadcrumbs=array(
	'Feedbacks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Feedback', 'url'=>array('index')),
	array('label'=>'新建Feedback', 'url'=>array('create')),
	array('label'=>'修改Feedback', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Feedback', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Feedback', 'url'=>array('admin')),
);
?>

<h1>查看 Feedback #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'session_id',
		'score',
		'category',
		'description',
		'email',
		'ip',
		'dateline',
	),
)); ?>
