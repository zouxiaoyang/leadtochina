<?php
/* @var $this CruiseController */
/* @var $model Cruise */

$this->breadcrumbs=array(
	'Cruises'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Cruise', 'url'=>array('index')),
  array('label'=>'管理Cruise', 'url'=>array('admin')),
);
?>

<h1>新建 Cruise</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>