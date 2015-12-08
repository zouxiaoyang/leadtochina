<?php
/* @var $this TourHotelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tour Hotels',
);

$this->menu=array(
	array('label'=>'Create TourHotel', 'url'=>array('create')),
	array('label'=>'Manage TourHotel', 'url'=>array('admin')),
);
?>

<h1>Tour Hotels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
