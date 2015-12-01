<?php
/* @var $this OrphanageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orphanages',
);

$this->menu=array(
	array('label'=>'新建Orphanage', 'url'=>array('create')),
	array('label'=>'管理Orphanage', 'url'=>array('admin')),
);
?>

<h1>Orphanages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
