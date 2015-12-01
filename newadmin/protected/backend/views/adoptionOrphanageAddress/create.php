<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */

$this->breadcrumbs=array(
	'Adoption Orphanage Addresses'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表AdoptionOrphanageAddress', 'url'=>array('index')),
  array('label'=>'管理AdoptionOrphanageAddress', 'url'=>array('admin')),
);
?>

<h1>新建 AdoptionOrphanageAddress</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>