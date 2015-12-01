<?php
/* @var $this FeedbackQuestionController */
/* @var $model FeedbackQuestion */

$this->breadcrumbs=array(
	'Feedback Questions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表FeedbackQuestion', 'url'=>array('index')),
	array('label'=>'新建FeedbackQuestion', 'url'=>array('create')),
	array('label'=>'修改FeedbackQuestion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除FeedbackQuestion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理FeedbackQuestion', 'url'=>array('admin')),
);
?>

<h1>查看 FeedbackQuestion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'answer_list',
	),
)); ?>
