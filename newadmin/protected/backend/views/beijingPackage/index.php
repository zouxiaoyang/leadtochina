<?php
/* @var $this BeijingPackageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Beijing Packages',
);

$this->menu=array(
	array('label'=>'新建BeijingPackage', 'url'=>array('create')),
	array('label'=>'管理BeijingPackage', 'url'=>array('admin')),
);
?>

<h1>Beijing Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
