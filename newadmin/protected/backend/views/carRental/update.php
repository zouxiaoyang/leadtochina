<?php
/* @var $this CarRentalController */
/* @var $model Rental */

$this->breadcrumbs=array(
	'Rentals'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Rental', 'url'=>array('index')),
	array('label'=>'Create Rental', 'url'=>array('create')),
	array('label'=>'View Rental', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rental', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Car Rental', 'url'=>array('index')),
array('label'=>'新建Car Rental', 'url'=>array('create')),
array('label'=>'管理Car Rental', 'url'=>array('admin')),
);
?>

<h1>修改 Car Rental <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>