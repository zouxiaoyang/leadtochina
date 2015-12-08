<?php
/* @var $this TourItineraryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'行程列表',
);

$this->menu=array(
	//array('label'=>'Create TourItinerary', 'url'=>array('create')),
	array('label'=>'Manage TourItinerary', 'url'=>array('admin')),
);
?>

<h1>Tour Itineraries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
