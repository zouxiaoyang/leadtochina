<?php
/* @var $this EnglishController */
/* @var $model English */

$this->breadcrumbs=array(
	'Englishes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List English', 'url'=>array('index')),
	array('label'=>'Create English', 'url'=>array('create')),
	array('label'=>'View English', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage English', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表English', 'url'=>array('index')),
array('label'=>'新建English', 'url'=>array('create')),
array('label'=>'管理English', 'url'=>array('admin')),
);
?>

<h1>修改 English <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>