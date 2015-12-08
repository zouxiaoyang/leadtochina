<?php
/* @var $this SceneryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sceneries',
);

$this->menu=array(
	array('label'=>'Create Scenery', 'url'=>array('create')),
	array('label'=>'Manage Scenery', 'url'=>array('admin')),
);
?>

<h1>ChinaSceneries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
