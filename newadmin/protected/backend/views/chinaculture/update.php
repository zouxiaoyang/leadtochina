<?php
/* @var $this ChinacultureController */
/* @var $model Chinaculture */

$this->breadcrumbs=array(
	'Chinacultures'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Chinaculture', 'url'=>array('index')),
	array('label'=>'Create Chinaculture', 'url'=>array('create')),
	array('label'=>'View Chinaculture', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Chinaculture', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Chinaculture', 'url'=>array('index')),
array('label'=>'新建Chinaculture', 'url'=>array('create')),
array('label'=>'管理Chinaculture', 'url'=>array('admin')),
);
?>

<h1>修改 Chinaculture <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>