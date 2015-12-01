<?php
/* @var $this CruiseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruises',
);

$this->menu=array(
	array('label'=>'新建Cruise', 'url'=>array('create')),
	array('label'=>'管理Cruise', 'url'=>array('admin')),
);
?>

<h1>Cruises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
