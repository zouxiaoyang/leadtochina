<?php
/* @var $this SceneryController */
/* @var $model Scenery */

$this->breadcrumbs=array(
	'Sceneries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Scenery', 'url'=>array('index')),
	array('label'=>'Create Scenery', 'url'=>array('create')),
	array('label'=>'Update Scenery', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scenery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scenery', 'url'=>array('admin')),
);
?>

<h1>View Scenery #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'provinceid',
		'cityid',
		'province_name',
		'browse_time',
		'city_name',
		'districtid',
		'name',
		'price',
		'description',
		'ufile',
		'filedir',
		'published',
		'hot',
		'update_route',
	),
)); ?>
