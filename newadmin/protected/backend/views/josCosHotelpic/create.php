<?php
/* @var $this JosCosHotelpicController */
/* @var $model JosCosHotelpic */

$this->breadcrumbs=array(
	'Jos Cos Hotelpics'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表JosCosHotelpic', 'url'=>array('index')),
  array('label'=>'管理JosCosHotelpic', 'url'=>array('admin')),
);
?>

<h1>新建 JosCosHotelpic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>