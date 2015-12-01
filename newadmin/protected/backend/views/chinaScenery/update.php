<?php
/* @var $this SceneryController */
/* @var $model Scenery */

$this->breadcrumbs=array(
	'Sceneries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ChinaScenery', 'url'=>array('index')),
	array('label'=>'Create ChinaScenery', 'url'=>array('create')),
	array('label'=>'View ChinaScenery', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ChinaScenery', 'url'=>array('admin')),
);
?>

<h1>Update ChinaScenery <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>