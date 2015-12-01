<?php
/* @var $this CruiseroomController */
/* @var $model Cruiseroom */

$this->breadcrumbs=array(
	'Cruiserooms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Cruiseroom', 'url'=>array('index')),
	array('label'=>'Create Cruiseroom', 'url'=>array('create')),
	array('label'=>'View Cruiseroom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cruiseroom', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Cruiseroom', 'url'=>array('index')),
array('label'=>'新建Cruiseroom', 'url'=>array('create')),
array('label'=>'管理Cruiseroom', 'url'=>array('admin')),
);
?>

<h1>修改 Cruiseroom <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>