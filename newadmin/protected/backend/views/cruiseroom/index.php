<?php
/* @var $this CruiseroomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruiserooms',
);

$this->menu=array(
	array('label'=>'新建Cruiseroom', 'url'=>array('create')),
	array('label'=>'管理Cruiseroom', 'url'=>array('admin')),
);
?>

<h1>Cruiserooms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
