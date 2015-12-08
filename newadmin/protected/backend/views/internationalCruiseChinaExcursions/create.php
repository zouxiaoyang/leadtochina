<?php
/* @var $this InternationalCruiseChinaExcursionsController */
/* @var $model InternationalCruiseChinaExcursions */

$this->breadcrumbs=array(
	'International Cruise China Excursions'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表InternationalCruiseChinaExcursions', 'url'=>array('index')),
  array('label'=>'管理InternationalCruiseChinaExcursions', 'url'=>array('admin')),
);
?>

<h1>新建 InternationalCruiseChinaExcursions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>