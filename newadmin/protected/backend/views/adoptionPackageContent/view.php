<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */

$this->breadcrumbs=array(
	'Adoption Orphanage Addresses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'新建AdoptionOrphanageAddress', 'url'=>array('create&aid='.$model->pacakage_id)),
	array('label'=>'修改AdoptionOrphanageAddress', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除AdoptionOrphanageAddress', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理AdoptionOrphanageAddress', 'url'=>array('adoptionOrphanageAddress/admin')),
);
?>

<h1>查看 AdoptionOrphanageAddress #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pacakage_id',
		'name',
		'day1',
		'day2',
		'day3',
		'day4',
		'description',
	),
)); ?>
