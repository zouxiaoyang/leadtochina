<?php
/* @var $this CruisePorstTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruise Porst Types',
);

$this->menu=array(
	array('label'=>'新建CruisePortType', 'url'=>array('create')),
	array('label'=>'管理CruisePortType', 'url'=>array('admin')),
);
?>

<h1>Cruise Port Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>