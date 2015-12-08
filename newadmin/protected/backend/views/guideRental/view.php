<?php
/* @var $this GuideRentalController */
/* @var $model Rental */

$this->breadcrumbs=array(
	'Rentals'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表Guide Rental', 'url'=>array('index')),
	array('label'=>'新建Guide Rental', 'url'=>array('create')),
	array('label'=>'修改Guide Rental', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Guide Rental', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Guide Rental', 'url'=>array('admin')),
);
?>

<h1>查看 Guide Rental #<?php echo $model->id; ?></h1>

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
