<?php
/* @var $this CruiseOnboardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruise Onboards',
);

$this->menu=array(
	array('label'=>'新建CruiseOnboard', 'url'=>array('create')),
	array('label'=>'管理CruiseOnboard', 'url'=>array('admin')),
);
?>

<h1>Cruise Onboards</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
