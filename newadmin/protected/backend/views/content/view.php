<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表Content', 'url'=>array('index')),
	array('label'=>'新建Content', 'url'=>array('create')),
	array('label'=>'修改Content', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Content', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Content', 'url'=>array('admin')),
);
?>

<h1>查看 Content #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'alias',
		'title_alias',
		'introtext',
		'fulltext',
		'state',
		'sectionid',
		'mask',
		'catid',
		'created',
		'created_by',
		'created_by_alias',
		'modified',
		'modified_by',
		'checked_out',
		'checked_out_time',
		'publish_up',
		'publish_down',
		'images',
		'urls',
		'attribs',
		'version',
		'parentid',
		'ordering',
		'metakey',
		'metadesc',
		'provinceid',
		'cityid',
		'province_name',
		'city_name',
		'seo_title',
		'seo_url',
		'access',
		'hits',
		'metadata',
	),
)); ?>
