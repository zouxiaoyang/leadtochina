<?php
/* @var $this AdoptionContentController */
/* @var $model AdoptionContent */

$this->breadcrumbs=array(
	'AdoptionContents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表AdoptionContent', 'url'=>array('index')),
	array('label'=>'新建AdoptionContent', 'url'=>array('create')),
	array('label'=>'修改AdoptionContent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除AdoptionContent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理AdoptionContent', 'url'=>array('admin')),
);
?>

<h1>查看 AdoptionContent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'image',
		'cat_id',
		'province_id',
		'homeland_cat',
	),
)); ?>
