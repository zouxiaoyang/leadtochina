<?php
/* @var $this ReviewsCommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reviews Comments',
);

$this->menu=array(
	array('label'=>'新建ReviewsComment', 'url'=>array('create')),
	array('label'=>'管理ReviewsComment', 'url'=>array('admin')),
);
?>

<h1>Reviews Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
