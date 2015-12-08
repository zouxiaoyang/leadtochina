<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adoption Orphanage Addresses',
);

$this->menu=array(
	array('label'=>'新建AdoptionOrphanageAddress', 'url'=>array('create')),
	array('label'=>'管理AdoptionOrphanageAddress', 'url'=>array('admin')),
);
?>

<h1>Adoption Orphanage Addresses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
