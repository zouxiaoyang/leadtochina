<?php
/* @var $this ToursPackageController */
/* @var $model ToursPackage */

$this->breadcrumbs=array(
	'Tours Packages'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表ToursPackage', 'url'=>array('index')),
  array('label'=>'管理ToursPackage', 'url'=>array('admin')),
);
?>

<h1>新建 ToursPackage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>