<?php
/* @var $this PackageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Packages',
);

$this->menu=array(
	array('label'=>'新建Package', 'url'=>array('create')),
	array('label'=>'管理Package', 'url'=>array('admin')),
);
?>

<h1>Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
