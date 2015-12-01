<?php
/* @var $this InternationalCruiseController */
/* @var $model InternationalCruise */

$this->breadcrumbs=array(
	'International Cruises'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List InternationalCruise', 'url'=>array('index')),
	array('label'=>'Create InternationalCruise', 'url'=>array('create')),
	array('label'=>'View InternationalCruise', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InternationalCruise', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表InternationalCruise', 'url'=>array('index')),
array('label'=>'新建InternationalCruise', 'url'=>array('create')),
array('label'=>'管理InternationalCruise', 'url'=>array('admin')),
);
?>

<h1>修改 InternationalCruise <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>