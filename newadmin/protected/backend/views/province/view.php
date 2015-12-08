<?php
/* @var $this ProvinceController */
/* @var $model Province */

$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表Province', 'url'=>array('index')),
	array('label'=>'新建Province', 'url'=>array('create')),
	array('label'=>'修改Province', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Province', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Province', 'url'=>array('admin')),
);
?>

<h1>查看 Province #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
