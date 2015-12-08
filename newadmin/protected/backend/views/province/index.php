<?php
/* @var $this ProvinceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provinces',
);

$this->menu=array(
	array('label'=>'新建Province', 'url'=>array('create')),
	array('label'=>'管理Province', 'url'=>array('admin')),
);
?>

<h1>Provinces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
