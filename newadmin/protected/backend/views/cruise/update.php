<?php
/* @var $this CruiseController */
/* @var $model Cruise */

$this->breadcrumbs=array(
	'Cruises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Cruise', 'url'=>array('index')),
	array('label'=>'Create Cruise', 'url'=>array('create')),
	array('label'=>'View Cruise', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cruise', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Cruise', 'url'=>array('index')),
array('label'=>'新建Cruise', 'url'=>array('create')),
array('label'=>'管理Cruise', 'url'=>array('admin')),
);
?>

<h1>修改 Cruise <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>