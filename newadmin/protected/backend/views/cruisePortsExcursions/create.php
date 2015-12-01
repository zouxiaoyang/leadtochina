<?php
/* @var $this CruisePortsExcursionsController */
/* @var $model CruisePortsExcursions */

$this->breadcrumbs=array(
	'Cruise Ports Excursions'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CruisePortsExcursions', 'url'=>array('index')),
  array('label'=>'管理CruisePortsExcursions', 'url'=>array('admin')),
);
?>

<h1>新建 CruisePortsExcursions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>