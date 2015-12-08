<?php
/* @var $this GuideRentalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rentals',
);

$this->menu=array(
	array('label'=>'新建Guide Rental', 'url'=>array('create')),
	array('label'=>'管理Guide Rental', 'url'=>array('admin')),
);
?>

<h1>Guide Rentals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
