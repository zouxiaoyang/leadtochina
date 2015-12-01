<?php
/* @var $this AdoptionOrphanageAddressPicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Pics',
);

$this->menu=array(
	array('label'=>'新建AdoptionOrphanageAddressPic', 'url'=>array('create')),
	array('label'=>'管理AdoptionOrphanageAddressPic', 'url'=>array('admin')),
);
?>

<h1>Adoption Orphanage Address Pics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
