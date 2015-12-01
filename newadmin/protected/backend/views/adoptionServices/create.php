<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Adoption Services', 'url'=>array('index')),
  array('label'=>'管理Adoption Services', 'url'=>array('admin')),
);
?>

<h1>新建 Services</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'cityInfo'=>$cityInfo)); ?>