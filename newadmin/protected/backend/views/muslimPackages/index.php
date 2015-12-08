<?php
/* @var $this MuslimPackagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'All Packages',
);

$this->menu=array(
	array('label'=>'新建Muslim Tour', 'url'=>array('create')),
	array('label'=>'管理Muslim Tour', 'url'=>array('admin')),
);
?>

<h1>All Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
