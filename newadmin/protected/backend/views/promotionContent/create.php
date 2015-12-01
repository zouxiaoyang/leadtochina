<?php
/* @var $this PromotionContentController */
/* @var $model PromotionContent */

$this->breadcrumbs=array(
	'Promotion Contents'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表PromotionContent', 'url'=>array('index')),
  array('label'=>'管理PromotionContent', 'url'=>array('admin')),
);
?>

<h1>新建 PromotionContent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>