<?php
/* @var $this CruiseactController */
/* @var $model Cruiseact */

$this->breadcrumbs=array(
	'Cruiseacts'=>array('index'),
	'Create',
);

$this->menu=array(
  //array('label'=>'列表Cruiseact', 'url'=>array('index')),
  array('label'=>'管理Cruiseact', 'url'=>array('admin')),
);
?>

<h1>新建 Cruiseact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'cruiseInfo'=>$cruiseInfo)); ?>