<?php
/* @var $this FeedbackQuestionController */
/* @var $model FeedbackQuestion */

$this->breadcrumbs=array(
	'Feedback Questions'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表FeedbackQuestion', 'url'=>array('index')),
  array('label'=>'管理FeedbackQuestion', 'url'=>array('admin')),
);
?>

<h1>新建 FeedbackQuestion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>