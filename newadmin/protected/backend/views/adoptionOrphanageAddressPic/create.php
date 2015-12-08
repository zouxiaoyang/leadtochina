<?php
/* @var $this AdoptionOrphanageAddressPicController */
/* @var $model AdoptionOrphanageAddressPic */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Pics'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表AdoptionOrphanageAddressPic', 'url'=>array('index')),
  array('label'=>'管理AdoptionOrphanageAddressPic', 'url'=>array('admin')),
);
?>

<h1>新建 AdoptionOrphanageAddressPic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>