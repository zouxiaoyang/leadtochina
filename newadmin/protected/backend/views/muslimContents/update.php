<?php
/* @var $this MuslimContentsController */
/* @var $model AllContents */

$this->breadcrumbs=array(
	'All Contents'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List AllContents', 'url'=>array('index')),
	array('label'=>'Create AllContents', 'url'=>array('create')),
	array('label'=>'View AllContents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AllContents', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Muslim文章', 'url'=>array('index')),
array('label'=>'新建Muslim文章', 'url'=>array('create')),
array('label'=>'管理Muslim文章', 'url'=>array('admin')),
);
?>

<h1>修改 Muslim 文章 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>