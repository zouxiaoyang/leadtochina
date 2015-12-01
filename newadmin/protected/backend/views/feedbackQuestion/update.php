<?php
/* @var $this FeedbackQuestionController */
/* @var $model FeedbackQuestion */

$this->breadcrumbs=array(
	'Feedback Questions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List FeedbackQuestion', 'url'=>array('index')),
	array('label'=>'Create FeedbackQuestion', 'url'=>array('create')),
	array('label'=>'View FeedbackQuestion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FeedbackQuestion', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表FeedbackQuestion', 'url'=>array('index')),
array('label'=>'新建FeedbackQuestion', 'url'=>array('create')),
array('label'=>'管理FeedbackQuestion', 'url'=>array('admin')),
);
?>

<h1>修改 FeedbackQuestion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>