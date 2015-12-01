<?php
/* @var $this TrafficController */
/* @var $model Traffic */

$this->breadcrumbs=array(
	'Traffics'=>array('index'),
	'Create',
);

$this->menu=array(
  //array('label'=>'列表Traffic', 'url'=>array('index')),
  array('label'=>'管理Flight&Train信息', 'url'=>array('admin')),
);
?>

<h1>新建 Flight&Train信息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tid'=>$tid)); ?>