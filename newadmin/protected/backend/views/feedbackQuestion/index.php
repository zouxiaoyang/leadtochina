<?php
/* @var $this FeedbackQuestionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feedback Questions',
);

$this->menu=array(
	array('label'=>'新建FeedbackQuestion', 'url'=>array('create')),
	array('label'=>'管理FeedbackQuestion', 'url'=>array('admin')),
);
?>

<h1>Feedback Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
