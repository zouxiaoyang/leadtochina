<?php
/* @var $this GuestsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Guests',
);

$this->menu=array(
	array('label'=>'新建Guests', 'url'=>array('create')),
	array('label'=>'管理Guests', 'url'=>array('admin')),
);
?>

<h1>Guests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
