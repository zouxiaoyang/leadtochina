<?php
/* @var $this ReviewsController */
/* @var $model Reviews */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表Reviews', 'url'=>array('index')),
	array('label'=>'新建Reviews', 'url'=>array('create')),
	array('label'=>'修改Reviews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Reviews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Reviews', 'url'=>array('admin')),
);
?>

<h1>查看 Reviews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'telephone',
		'description',
		'review_type',
		'year',
		'dateline',
	),
)); ?>
