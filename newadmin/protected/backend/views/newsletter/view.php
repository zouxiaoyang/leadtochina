<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Newsletter', 'url'=>array('index')),
	array('label'=>'新建Newsletter', 'url'=>array('create')),
	array('label'=>'修改Newsletter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Newsletter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Newsletter', 'url'=>array('admin')),
);
?>

<h1>查看 Newsletter #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'top_tour_cities',
		'banner',
		'more_china_tours',
		'more_banner',
		'theme_tours',
	),
)); ?>
