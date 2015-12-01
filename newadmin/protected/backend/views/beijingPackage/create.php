<?php
/* @var $this BeijingPackageController */
/* @var $model BeijingPackage */

$this->breadcrumbs=array(
	'Beijing Packages'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表BeijingPackage', 'url'=>array('index')),
  array('label'=>'管理BeijingPackage', 'url'=>array('admin')),
);
?>

<h1>新建 BeijingPackage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>