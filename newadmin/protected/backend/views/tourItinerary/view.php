<?php
/* @var $this TourItineraryController */
/* @var $model TourItinerary */

$this->breadcrumbs=array(
	'Tour Itineraries'=>array('index'),
	'查看第'.$model->days.'天行程',
);

$this->menu=array(
	array('label'=>'List TourItinerary', 'url'=>array('index')),
	//array('label'=>'Create TourItinerary', 'url'=>array('create')),
	array('label'=>'Update TourItinerary', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete TourItinerary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TourItinerary', 'url'=>array('admin')),
);
?>

<h1>查看第<?php echo $model->days;?>天行程</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tid',
		'days',
		'today_date',
		'place_transport',
		'accommodation',
		'today_activities',
		'meals',
		//'scenery_ids',
		array('name'=>'scenery_ids','value'=>Scenery::getSceneryName(explode(',',$model->attributes['scenery_ids']))),
		'uid',
		'create_time',
	),
)); ?>
