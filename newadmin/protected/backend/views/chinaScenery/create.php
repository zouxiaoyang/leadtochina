<?php
/* @var $this SceneryController */
/* @var $model Scenery */

$this->breadcrumbs=array(
	'Sceneries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ChinaScenery', 'url'=>array('index')),
	array('label'=>'Manage ChinaScenery', 'url'=>array('admin')),
);
?>

<h1>Create ChinaScenery</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>