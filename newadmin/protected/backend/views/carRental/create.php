<?php
/* @var $this CarRentalController */
/* @var $model Rental */

$this->breadcrumbs=array(
	'Rentals'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Car Rental', 'url'=>array('index')),
  array('label'=>'管理Car Rental', 'url'=>array('admin')),
);
?>

<h1>新建Car Rental</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>