<?php
/* @var $this OrphanageController */
/* @var $model Orphanage */

$this->breadcrumbs=array(
	'Orphanages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Orphanage', 'url'=>array('index')),
	array('label'=>'新建Orphanage', 'url'=>array('create')),
	array('label'=>'修改Orphanage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Orphanage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Orphanage', 'url'=>array('admin')),
);
?>

<h1>查看 Orphanage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'provinceid',
		'arranged_info',
		'approval_info',
		'fee_info',
	),
)); ?>
