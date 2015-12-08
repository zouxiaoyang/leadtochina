<?php
/* @var $this ChinacultureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Chinacultures',
);

$this->menu=array(
	array('label'=>'新建Chinaculture', 'url'=>array('create')),
	array('label'=>'管理Chinaculture', 'url'=>array('admin')),
);
?>

<h1>Chinacultures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
