<?php
/* @var $this CruiseFaqController */
/* @var $model CruiseFaq */

$this->breadcrumbs=array(
	'Cruise Faqs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表CruiseFaq', 'url'=>array('index')),
	array('label'=>'新建CruiseFaq', 'url'=>array('create')),
	array('label'=>'修改CruiseFaq', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CruiseFaq', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CruiseFaq', 'url'=>array('admin')),
);
?>

<h1>查看 CruiseFaq #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cid',
		'title',
		'content',
	),
)); ?>
