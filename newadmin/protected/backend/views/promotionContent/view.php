<?php
/* @var $this PromotionContentController */
/* @var $model PromotionContent */

$this->breadcrumbs=array(
	'Promotion Contents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表PromotionContent', 'url'=>array('index')),
	array('label'=>'新建PromotionContent', 'url'=>array('create')),
	array('label'=>'修改PromotionContent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除PromotionContent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理PromotionContent', 'url'=>array('admin')),
);
?>

<h1>查看 PromotionContent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'tour_ids',
		'created',
		'status',
	),
)); ?>
