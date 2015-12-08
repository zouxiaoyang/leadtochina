<?php
/* @var $this CruisecycleController */
/* @var $model Cruisecycle */

$this->breadcrumbs=array(
	'Cruisecycles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Cruisecycle', 'url'=>array('index')),
	array('label'=>'Create Cruisecycle', 'url'=>array('create')),
	array('label'=>'View Cruisecycle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cruisecycle', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
//array('label'=>'列表Cruisecycle', 'url'=>array('index')),
array('label'=>'新建Cruisecycle', 'url'=>array('create')),
//array('label'=>'管理Cruisecycle', 'url'=>array('admin')),
);
?>

<h1>修改 Cruisecycle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>