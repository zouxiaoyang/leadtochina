<?php
/* @var $this CruiseroomController */
/* @var $model Cruiseroom */

$this->breadcrumbs=array(
	'Cruiserooms'=>array('index'),
	'Create',
);

$this->menu=array(
 // array('label'=>'列表Cruiseroom', 'url'=>array('index')),
  array('label'=>'管理Cruiseroom', 'url'=>array('admin')),
);
?>

<h1>新建 Cruiseroom</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>