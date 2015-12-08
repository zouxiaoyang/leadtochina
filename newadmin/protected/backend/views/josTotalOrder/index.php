<?php
/* @var $this JosTotalOrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jos Total Orders',
);

$this->menu=array(
	array('label'=>'新建JosTotalOrder', 'url'=>array('create')),
	array('label'=>'管理JosTotalOrder', 'url'=>array('admin')),
);
?>

<h1>Jos Total Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
