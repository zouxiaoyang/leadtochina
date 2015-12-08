<?php
/* @var $this TourInfoController */
/* @var $model TourInfo */

$this->breadcrumbs=array(
	'Tour Infos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TourInfo', 'url'=>array('index')),
	array('label'=>'Create TourInfo', 'url'=>array('create')),
	array('label'=>'Update TourInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TourInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TourInfo', 'url'=>array('admin')),
);
?>

<h1>View TourInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'title',
		'pic',
		'tracking_code',
		'travel_advisor',
		'tel',
		'email',
		'tour_days',
		'simple_itinerary',
		'quotation',
		'uid',
		'create_time',
	),
)); ?>
