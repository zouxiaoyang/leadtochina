<?php
/* @var $this CarRentalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rentals',
);

$this->menu=array(
	array('label'=>'新建Car Rental', 'url'=>array('create')),
	array('label'=>'管理Car Rental', 'url'=>array('admin')),
);
?>

<h1>Car Rentals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
