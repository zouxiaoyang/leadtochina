<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Cities'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Adoption City', 'url'=>array('index')),
  array('label'=>'管理Adoption City', 'url'=>array('admin')),
);
?>

<h1>新建 City</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>