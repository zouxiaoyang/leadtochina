<?php
/* @var $this JosCosHotelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jos Cos Hotels',
);

$this->menu=array(
	array('label'=>'新建JosCosHotel', 'url'=>array('create')),
	array('label'=>'管理JosCosHotel', 'url'=>array('admin')),
);
?>

<h1>Jos Cos Hotels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
