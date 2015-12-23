<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */

$this->breadcrumbs=array(
	'Adoption Orphanage Addresses'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'修改行程', 'url'=>array('update&id='.$_GET['aid'])),
  array('label'=>'管理列表', 'url'=>array('adoptionOrphanageAddress/admin')),
);
?>

<h1>新建 AdoptionOrphanageAddress</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>