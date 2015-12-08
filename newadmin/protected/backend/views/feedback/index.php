<?php
/* @var $this FeedbackController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feedbacks',
);

$this->menu=array(
	array('label'=>'新建Feedback', 'url'=>array('create')),
	array('label'=>'管理Feedback', 'url'=>array('admin')),
);
?>

<h1>Feedbacks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
