<?php
/* @var $this SceneryController */
/* @var $model Scenery */

$this->breadcrumbs=array(
	'Sceneries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scenery', 'url'=>array('index')),
	array('label'=>'Create Scenery', 'url'=>array('create')),
	array('label'=>'View Scenery', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Scenery', 'url'=>array('admin')),
);
?>

<h1>Update Scenery <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>