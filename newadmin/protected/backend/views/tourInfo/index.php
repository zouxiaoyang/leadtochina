<?php
/* @var $this TourInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tour Infos',
);

$this->menu=array(
	array('label'=>'Create TourInfo', 'url'=>array('create')),
	array('label'=>'Manage TourInfo', 'url'=>array('admin')),
);
?>

<h1>Tour Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
