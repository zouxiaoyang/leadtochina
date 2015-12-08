<?php
/* @var $this JosCosHotelpicController */
/* @var $model JosCosHotelpic */

$this->breadcrumbs=array(
	'Jos Cos Hotelpics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表JosCosHotelpic', 'url'=>array('index')),
	array('label'=>'新建JosCosHotelpic', 'url'=>array('create')),
	array('label'=>'修改JosCosHotelpic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除JosCosHotelpic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理JosCosHotelpic', 'url'=>array('admin')),
);
?>

<h1>查看 JosCosHotelpic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hotelid',
		'pic_alt',
		'pic_dir',
		'recommend',
		'pic_path',
	),
)); ?>
