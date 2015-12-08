<?php
/* @var $this FeedbackController */
/* @var $model Feedback */

$this->breadcrumbs=array(
	'Feedbacks'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Feedback', 'url'=>array('index')),
  array('label'=>'管理Feedback', 'url'=>array('admin')),
);
?>

<h1>新建 Feedback</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>