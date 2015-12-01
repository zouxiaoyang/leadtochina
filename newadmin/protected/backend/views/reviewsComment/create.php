<?php
/* @var $this ReviewsCommentController */
/* @var $model ReviewsComment */

$this->breadcrumbs=array(
	'Reviews Comments'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表ReviewsComment', 'url'=>array('index')),
  array('label'=>'管理ReviewsComment', 'url'=>array('admin')),
);
?>

<h1>新建 ReviewsComment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>