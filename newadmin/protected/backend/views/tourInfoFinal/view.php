<?php
/* @var $this TourInfoFinalController */
/* @var $model TourInfoFinal */

$this->breadcrumbs=array(
	'Tour Info Finals'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表TourInfoFinal', 'url'=>array('index')),
	array('label'=>'新建TourInfoFinal', 'url'=>array('create')),
	array('label'=>'修改TourInfoFinal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除TourInfoFinal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理TourInfoFinal', 'url'=>array('admin')),
);
?>

<h1>查看 Final Confirmation Link #<?php echo $model->id; ?></h1>

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
		'price_include',
		'price_exclude',
	),
)); ?>
