<?php
/* @var $this ChinaTravelPhotosController */
/* @var $model ChinaTravelPhotos */

$this->breadcrumbs=array(
	'China Travel Photoses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表ChinaTravelPhotos', 'url'=>array('index')),
	array('label'=>'新建ChinaTravelPhotos', 'url'=>array('create')),
	array('label'=>'修改ChinaTravelPhotos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除ChinaTravelPhotos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理ChinaTravelPhotos', 'url'=>array('admin')),
);
?>

<h1>查看 ChinaTravelPhotos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'pic',
	),
)); ?>
