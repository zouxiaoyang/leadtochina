<?php
/* @var $this AdoptionOrphanageAddressPicController */
/* @var $model AdoptionOrphanageAddressPic */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Pics'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表AdoptionOrphanageAddressPic', 'url'=>array('index')),
	array('label'=>'新建AdoptionOrphanageAddressPic', 'url'=>array('create')),
	array('label'=>'修改AdoptionOrphanageAddressPic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除AdoptionOrphanageAddressPic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理AdoptionOrphanageAddressPic', 'url'=>array('admin')),
);
?>

<h1>查看 AdoptionOrphanageAddressPic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'oid',
		'title',
		'pic',
	),
)); ?>
