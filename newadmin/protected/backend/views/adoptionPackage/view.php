<?php
/* @var $this PackageController */
/* @var $model Package */

$this->breadcrumbs=array(
	'Packages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Package', 'url'=>array('index')),
	array('label'=>'新建Package', 'url'=>array('create')),
	array('label'=>'修改Package', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Package', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Package', 'url'=>array('admin')),
);
?>

<h1>查看 Package #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'package_id',
		'cat_id',
		'province_id',
		'seo_title_adoption',
		'seo_keyword_adoption',
		'seo_description_adoption',
	),
)); ?>
