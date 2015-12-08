<?php
/* @var $this MuslimContentsController */
/* @var $model AllContents */

$this->breadcrumbs=array(
	'All Contents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表Muslim文章', 'url'=>array('index')),
	array('label'=>'新建Muslim文章', 'url'=>array('create')),
	array('label'=>'修改Muslim文章', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Muslim文章', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Muslim文章', 'url'=>array('admin')),
);
?>

<h1>查看 AllContents #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'image',
		'muslim_cat_id',
		'province_id',
		'city_id',
		'rate_time',
		'rate_value',
		'content_type',
	),
)); ?>
