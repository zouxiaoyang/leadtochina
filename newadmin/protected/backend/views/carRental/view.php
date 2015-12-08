<?php
/* @var $this CarRentalController */
/* @var $model Rental */

$this->breadcrumbs=array(
	'Rentals'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表Car Rental', 'url'=>array('index')),
	array('label'=>'新建Car Rental', 'url'=>array('create')),
	array('label'=>'修改Car Rental', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Car Rental', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Car Rental', 'url'=>array('admin')),
);
?>

<h1>查看 Car Rental #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'pic',
		'alt',
		'price_serialize',
		'rental_type',
	),
)); ?>
