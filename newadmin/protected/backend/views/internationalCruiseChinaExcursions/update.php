<?php
/* @var $this InternationalCruiseChinaExcursionsController */
/* @var $model InternationalCruiseChinaExcursions */

$this->breadcrumbs=array(
	'International Cruise China Excursions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List InternationalCruiseChinaExcursions', 'url'=>array('index')),
	array('label'=>'Create InternationalCruiseChinaExcursions', 'url'=>array('create')),
	array('label'=>'View InternationalCruiseChinaExcursions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InternationalCruiseChinaExcursions', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表InternationalCruiseChinaExcursions', 'url'=>array('index')),
array('label'=>'新建InternationalCruiseChinaExcursions', 'url'=>array('create')),
array('label'=>'管理InternationalCruiseChinaExcursions', 'url'=>array('admin')),
);
?>

<h1>修改 InternationalCruiseChinaExcursions <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>