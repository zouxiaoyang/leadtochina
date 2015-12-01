<?php
/* @var $this GuidesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Guides',
);

$this->menu=array(
	array('label'=>'新建Guides', 'url'=>array('create')),
	array('label'=>'管理Guides', 'url'=>array('admin')),
);
?>

<h1>Guides</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
