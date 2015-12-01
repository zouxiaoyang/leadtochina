<?php
/* @var $this CruiseOnboardController */
/* @var $model CruiseOnboard */

$this->breadcrumbs=array(
	'Cruise Onboards'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CruiseOnboard', 'url'=>array('index')),
  array('label'=>'管理CruiseOnboard', 'url'=>array('admin')),
);
?>

<h1>新建 CruiseOnboard</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>