<?php
/* @var $this PromotionContentController */
/* @var $model PromotionContent */

$this->breadcrumbs=array(
	'Promotion Contents'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List PromotionContent', 'url'=>array('index')),
	array('label'=>'Create PromotionContent', 'url'=>array('create')),
	array('label'=>'View PromotionContent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PromotionContent', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表PromotionContent', 'url'=>array('index')),
array('label'=>'新建PromotionContent', 'url'=>array('create')),
array('label'=>'管理PromotionContent', 'url'=>array('admin')),
);
?>

<h1>修改 PromotionContent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>