<?php
/* @var $this GuestsController */
/* @var $model Guests */

$this->breadcrumbs=array(
	'Guests'=>array('index'),
	'Create',
);

$this->menu=array(
  //array('label'=>'列表Guests', 'url'=>array('index')),
  array('label'=>'管理游客信息', 'url'=>array('admin')),
);
?>

<h1>新建游客信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'TourInfoFinal'=>$TourInfoFinal)); ?>