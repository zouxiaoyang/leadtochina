<?php
/* @var $this MuslimPackagesController */
/* @var $model AllPackages */

$this->breadcrumbs=array(
	'All Packages'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Muslim Tour', 'url'=>array('index')),
  array('label'=>'管理Muslim Tour', 'url'=>array('admin')),
);
?>

<h1>新建 AllPackages</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>