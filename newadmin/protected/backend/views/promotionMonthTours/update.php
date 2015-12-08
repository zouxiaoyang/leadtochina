<?php
/* @var $this PromotionMonthToursController */
/* @var $model PromotionMonthTours */

$this->breadcrumbs=array(
	'Promotion Month Tours'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List PromotionMonthTours', 'url'=>array('index')),
	array('label'=>'Create PromotionMonthTours', 'url'=>array('create')),
	array('label'=>'View PromotionMonthTours', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PromotionMonthTours', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表PromotionMonthTours', 'url'=>array('index')),
array('label'=>'新建PromotionMonthTours', 'url'=>array('create')),
array('label'=>'管理PromotionMonthTours', 'url'=>array('admin')),
);
?>

<h1>修改 PromotionMonthTours <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>