<?php
/* @var $this SceneryController */
/* @var $model Scenery */

$this->breadcrumbs=array(
	'Sceneries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scenery', 'url'=>array('index')),
	array('label'=>'Manage Scenery', 'url'=>array('admin')),
);
?>

<h1>Create Scenery</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>