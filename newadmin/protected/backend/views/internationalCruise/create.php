<?php
/* @var $this InternationalCruiseController */
/* @var $model InternationalCruise */

$this->breadcrumbs=array(
	'International Cruises'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表InternationalCruise', 'url'=>array('index')),
  array('label'=>'管理InternationalCruise', 'url'=>array('admin')),
);
?>

<h1>新建 InternationalCruise</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>