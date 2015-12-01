<?php
/* @var $this ChinaTravelPhotosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'China Travel Photoses',
);

$this->menu=array(
	array('label'=>'新建ChinaTravelPhotos', 'url'=>array('create')),
	array('label'=>'管理ChinaTravelPhotos', 'url'=>array('admin')),
);
?>

<h1>China Travel Photoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
