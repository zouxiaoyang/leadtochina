<?php
/* @var $this CruisepicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruisepics',
);

$this->menu=array(
	array('label'=>'新建Cruisepic', 'url'=>array('create')),
	array('label'=>'管理Cruisepic', 'url'=>array('admin')),
);
?>

<h1>Cruisepics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
