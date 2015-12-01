<?php
/* @var $this CruisePortsController */
/* @var $model CruisePorts */

$this->breadcrumbs=array(
	'Cruise Ports'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CruisePorts', 'url'=>array('index')),
  array('label'=>'管理CruisePorts', 'url'=>array('admin')),
);
?>

<h1>新建 CruisePorts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>