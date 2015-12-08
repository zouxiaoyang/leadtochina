<?php
/* @var $this CruisePortsExcursionsController */
/* @var $model CruisePortsExcursions */

$this->breadcrumbs=array(
	'Cruise Ports Excursions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CruisePortsExcursions', 'url'=>array('index')),
	array('label'=>'Create CruisePortsExcursions', 'url'=>array('create')),
	array('label'=>'View CruisePortsExcursions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CruisePortsExcursions', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CruisePortsExcursions', 'url'=>array('index')),
array('label'=>'新建CruisePortsExcursions', 'url'=>array('create')),
array('label'=>'管理CruisePortsExcursions', 'url'=>array('admin')),
);
?>

<h1>修改 CruisePortsExcursions <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>