<?php
/* @var $this CategoriesController */
/* @var $model Categories */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Categories', 'url'=>array('index')),
  array('label'=>'管理Categories', 'url'=>array('admin')),
);
?>

<h1>新建 Categories</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>