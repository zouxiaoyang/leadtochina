<?php
/* @var $this CruisecycleController */
/* @var $model Cruisecycle */

$this->breadcrumbs=array(
	'Cruisecycles'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Cruisecycle', 'url'=>array('index')),
  array('label'=>'管理Cruisecycle', 'url'=>array('admin')),
);
?>

<h1>新建 Cruisecycle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'cruiseInfo'=>$cruiseInfo)); ?>