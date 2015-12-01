<?php
/* @var $this GuidesController */
/* @var $model Guides */

$this->breadcrumbs=array(
	'Guides'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Guides', 'url'=>array('index')),
	array('label'=>'Create Guides', 'url'=>array('create')),
	array('label'=>'View Guides', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Guides', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Guides', 'url'=>array('index')),
array('label'=>'新建Guides', 'url'=>array('create')),
array('label'=>'管理Guides', 'url'=>array('admin')),
);
?>

<h1>修改 Guides <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>