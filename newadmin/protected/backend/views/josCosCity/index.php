<?php
/* @var $this JosCosCityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'城市',
);

$this->menu=array(
	array('label'=>'新建城市', 'url'=>array('create')),
	array('label'=>'管理城市', 'url'=>array('admin')),
);
?>

<h1>Jos Cos Cities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
