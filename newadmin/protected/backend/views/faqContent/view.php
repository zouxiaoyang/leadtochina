<?php
/* @var $this FaqContentController */
/* @var $model FaqContent */

$this->breadcrumbs=array(
	'Faq Contents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FaqContent', 'url'=>array('index')),
	array('label'=>'Create FaqContent', 'url'=>array('create')),
	array('label'=>'Update FaqContent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FaqContent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaqContent', 'url'=>array('admin')),
);
?>

<h1>View FaqContent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cat_id',
		'cat_title',
		'question',
		'answer',
		'create_time',
	),
)); ?>
