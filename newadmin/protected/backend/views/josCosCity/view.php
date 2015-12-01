<?php
/* @var $this JosCosCityController */
/* @var $model JosCosCity */

$this->breadcrumbs=array(
	'城市'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'城市列表', 'url'=>array('index')),
	array('label'=>'新建城市', 'url'=>array('create')),
	array('label'=>'修改城市', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除城市', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理城市', 'url'=>array('admin')),
);
?>

<h1>查看 JosCosCity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'provinceid',
		'name',
		'shortname',
		'description',
		'traffic',
		'weather',
		'shopping',
		'tips',
		'hot',
		'ufile',
		'filedir',
		'showroder',
		'seo_title',
		'seo_key',
		'seo_description',
		'isupdate',
	),
)); ?>
