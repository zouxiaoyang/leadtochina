<?php
/* @var $this PackageController */
/* @var $model Package */

$this->breadcrumbs=array(
	'Packages'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Package', 'url'=>array('index')),
  array('label'=>'管理Package', 'url'=>array('admin')),
);
?>

<h1>新建 Package</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>