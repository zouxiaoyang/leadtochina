<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */

$this->breadcrumbs=array(
	'Adoption Orphanage Addresses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表AdoptionOrphanageAddress', 'url'=>array('index')),
	array('label'=>'新建AdoptionOrphanageAddress', 'url'=>array('create')),
	array('label'=>'修改AdoptionOrphanageAddress', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除AdoptionOrphanageAddress', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理AdoptionOrphanageAddress', 'url'=>array('admin')),
);
?>

<h1>查看 AdoptionOrphanageAddress #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'provinceid',
		'province_name',
		'orphanage_name',
		'address',
		'population',
		'features',
		'area_code',
		'postal_code',
		'tel',
		'description',
		'seo_title_adoption',
		'seo_keyword_adoption',
		'seo_description_adoption'
	),
)); ?>
