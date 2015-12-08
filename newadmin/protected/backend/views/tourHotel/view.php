<?php
/* @var $this TourHotelController */
/* @var $model TourHotel */

$this->breadcrumbs=array(
	'Tour Hotels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TourHotel', 'url'=>array('index')),
	array('label'=>'Create TourHotel', 'url'=>array('create')),
	array('label'=>'Update TourHotel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TourHotel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TourHotel', 'url'=>array('admin')),
);
?>

<h1>View TourHotel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tid',
		'cityid',
		'hotelid',
		'url',
		'root_type',
		'uid',
		'create_time',
	),
)); ?>
