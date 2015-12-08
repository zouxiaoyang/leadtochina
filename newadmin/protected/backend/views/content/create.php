<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
	'Contents'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Content', 'url'=>array('index')),
  array('label'=>'管理Content', 'url'=>array('admin')),
);
?>

<h1>新建 Content</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>