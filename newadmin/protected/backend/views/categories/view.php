<?php
/* @var $this CategoriesController */
/* @var $model Categories */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表Categories', 'url'=>array('index')),
	array('label'=>'新建Categories', 'url'=>array('create')),
	array('label'=>'修改Categories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Categories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Categories', 'url'=>array('admin')),
);
?>

<h1>查看 Categories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'sce_cat_path',
		'title',
		'name',
		'alias',
		'provinceid',
		'cityid',
		'hot',
		'city',
		'image',
		'section',
		'image_position',
		'description',
		'published',
		'checked_out',
		'checked_out_time',
		'routes',
		'seo_title',
		'seo_key',
		'seo_description',
		'ufile',
		'filedir',
		'jianjie',
		'editor',
		'ordering',
		'access',
		'count',
		'params',
		'title_slug',
	),
)); ?>
