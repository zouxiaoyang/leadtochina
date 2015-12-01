<?php
/* @var $this TourItineraryController */
/* @var $model TourItinerary */

$this->breadcrumbs=array(
	'Tour Itineraries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'编辑第'.$model->days.'天行程',
);

$this->menu=array(
	//array('label'=>'List TourItinerary', 'url'=>array('index')),
	//array('label'=>'Create TourItinerary', 'url'=>array('create')),
	//array('label'=>'View TourItinerary', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'每天行程列表', 'url'=>array('admin')),
);
?>

<h1>编辑第<?php echo $model->days;?>天行程</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'scenery_arr'=>$sceneries)); ?>