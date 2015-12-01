<?php
/* @var $this ReviewsController */
/* @var $model Reviews */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Reviews', 'url'=>array('index')),
  array('label'=>'管理Reviews', 'url'=>array('admin')),
);
?>

<h1>新建 Reviews</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>