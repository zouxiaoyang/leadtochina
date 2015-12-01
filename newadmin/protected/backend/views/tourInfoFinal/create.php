<?php
/* @var $this TourInfoFinalController */
/* @var $model TourInfoFinal */

$this->breadcrumbs=array(
	'Tour Info Finals'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表TourInfoFinal', 'url'=>array('index')),
  array('label'=>'管理TourInfoFinal', 'url'=>array('admin')),
);
?>

<h1>新建 TourInfoFinal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>