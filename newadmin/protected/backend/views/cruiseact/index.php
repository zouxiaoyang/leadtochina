<?php
/* @var $this CruiseactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruiseacts',
);

$this->menu=array(
	array('label'=>'新建Cruiseact', 'url'=>array('create')),
	array('label'=>'管理Cruiseact', 'url'=>array('admin')),
);
?>

<h1>Cruiseacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
