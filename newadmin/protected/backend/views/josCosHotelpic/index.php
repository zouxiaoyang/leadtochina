<?php
/* @var $this JosCosHotelpicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jos Cos Hotelpics',
);

$this->menu=array(
	array('label'=>'新建JosCosHotelpic', 'url'=>array('create')),
	array('label'=>'管理JosCosHotelpic', 'url'=>array('admin')),
);
?>

<h1>Jos Cos Hotelpics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
