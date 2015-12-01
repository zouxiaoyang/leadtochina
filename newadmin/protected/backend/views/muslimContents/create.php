<?php
/* @var $this MuslimContentsController */
/* @var $model AllContents */

$this->breadcrumbs=array(
	'All Contents'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Muslim文章', 'url'=>array('index')),
  array('label'=>'管理Muslim文章', 'url'=>array('admin')),
);
?>

<h1>新建 AllContents</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>