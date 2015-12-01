<?php
/* @var $this CruisePortsExcursionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruise Ports Excursions',
);

$this->menu=array(
	array('label'=>'新建CruisePortsExcursions', 'url'=>array('create')),
	array('label'=>'管理CruisePortsExcursions', 'url'=>array('admin')),
);
?>

<h1>Cruise Ports Excursions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
