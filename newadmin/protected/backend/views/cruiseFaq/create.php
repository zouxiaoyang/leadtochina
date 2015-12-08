<?php
/* @var $this CruiseFaqController */
/* @var $model CruiseFaq */

$this->breadcrumbs=array(
	'Cruise Faqs'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CruiseFaq', 'url'=>array('index')),
  array('label'=>'管理CruiseFaq', 'url'=>array('admin')),
);
?>

<h1>新建 CruiseFaq</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>