<?php
/* @var $this GuidesController */
/* @var $model Guides */

$this->breadcrumbs=array(
	'Guides'=>array('index'),
	'Create',
);

$this->menu=array(
  //array('label'=>'列表Guides', 'url'=>array('index')),
  array('label'=>'管理导游信息', 'url'=>array('admin')),
);
?>

<h1>新建导游信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tid'=>$tid)); ?>