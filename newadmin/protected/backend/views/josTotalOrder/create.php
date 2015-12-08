<?php
/* @var $this JosTotalOrderController */
/* @var $model JosTotalOrder */

$this->breadcrumbs=array(
	'Jos Total Orders'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表JosTotalOrder', 'url'=>array('index')),
  array('label'=>'管理JosTotalOrder', 'url'=>array('admin')),
);
?>

<h1>新建 JosTotalOrder</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>