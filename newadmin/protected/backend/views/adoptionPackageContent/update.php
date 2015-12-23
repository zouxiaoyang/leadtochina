<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */

$this->breadcrumbs=array(
	'Adoption Orphanage Addresses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List AdoptionOrphanageAddress', 'url'=>array('index')),
	array('label'=>'Create AdoptionOrphanageAddress', 'url'=>array('create')),
	array('label'=>'View AdoptionOrphanageAddress', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdoptionOrphanageAddress', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'新建AdoptionOrphanageAddress', 'url'=>array('create&aid='.$model->pacakage_id)),
array('label'=>'管理AdoptionOrphanageAddress', 'url'=>array('adoptionOrphanageAddress/admin')),
);
?>

<h1>修改 AdoptionOrphanageAddress <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>