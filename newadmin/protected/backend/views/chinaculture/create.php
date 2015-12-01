<?php
/* @var $this ChinacultureController */
/* @var $model Chinaculture */

$this->breadcrumbs=array(
	'Chinacultures'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Chinaculture', 'url'=>array('index')),
  array('label'=>'管理Chinaculture', 'url'=>array('admin')),
);
?>

<h1>新建 Chinaculture</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>