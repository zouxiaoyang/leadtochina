<?php
/* @var $this CityQuestionController */
/* @var $model CityQuestion */

$this->breadcrumbs=array(
	'City Questions'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CityQuestion', 'url'=>array('index')),
  array('label'=>'管理CityQuestion', 'url'=>array('admin')),
);
?>

<h1>新建 CityQuestion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>