<?php
/* @var $this PromotionMonthToursController */
/* @var $model PromotionMonthTours */

$this->breadcrumbs=array(
	'Promotion Month Tours'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表PromotionMonthTours', 'url'=>array('index')),
  array('label'=>'管理PromotionMonthTours', 'url'=>array('admin')),
);
?>

<h1>新建 PromotionMonthTours</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>