<?php
/* @var $this CruisePortsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruise Ports',
);

$this->menu=array(
	array('label'=>'新建CruisePorts', 'url'=>array('create')),
	array('label'=>'管理CruisePorts', 'url'=>array('admin')),
);
?>

<h1>Cruise Ports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
