<?php
/* @var $this AdoptionOrphanageAddressPicController */
/* @var $model AdoptionOrphanageAddressPic */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Pics'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List AdoptionOrphanageAddressPic', 'url'=>array('index')),
	array('label'=>'Create AdoptionOrphanageAddressPic', 'url'=>array('create')),
	array('label'=>'View AdoptionOrphanageAddressPic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdoptionOrphanageAddressPic', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表AdoptionOrphanageAddressPic', 'url'=>array('index')),
array('label'=>'新建AdoptionOrphanageAddressPic', 'url'=>array('create')),
array('label'=>'管理AdoptionOrphanageAddressPic', 'url'=>array('admin')),
);
?>

<h1>修改 AdoptionOrphanageAddressPic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>