<?php
/* @var $this CruisePorstTypeController */
/* @var $model CruisePorstType */

$this->breadcrumbs=array(
	'Cruise Porst Types'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CruisePortType', 'url'=>array('index')),
  array('label'=>'管理CruisePortType', 'url'=>array('admin')),
);
?>

<h1>新建 CruisePortType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>