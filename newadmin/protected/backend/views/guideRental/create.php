<?php
/* @var $this GuideRentalController */
/* @var $model Rental */

$this->breadcrumbs=array(
	'Rentals'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Guide Rental', 'url'=>array('index')),
  array('label'=>'管理Guide Rental', 'url'=>array('admin')),
);
?>

<h1>新建 Guide Rental</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>