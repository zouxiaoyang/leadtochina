<?php
/* @var $this TourItineraryController */
/* @var $model TourItinerary */

$this->breadcrumbs=array(
	'Tour Itineraries'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List TourItinerary', 'url'=>array('index')),
	array('label'=>'每天行程列表', 'url'=>array('admin')),
);
?>

<h1>Create TourItinerary</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>