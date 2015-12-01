<?php
/* @var $this ToursPackageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tours Packages',
);

$this->menu=array(
	array('label'=>'新建ToursPackage', 'url'=>array('create')),
	array('label'=>'管理ToursPackage', 'url'=>array('admin')),
);
?>

<h1>Tours Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
