<?php
/* @var $this ProvinceController */
/* @var $model Province */

$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Province', 'url'=>array('index')),
  array('label'=>'管理Province', 'url'=>array('admin')),
);
?>

<h1>新建 Province</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>