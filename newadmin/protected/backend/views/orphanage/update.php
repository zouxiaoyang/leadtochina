<?php
/* @var $this OrphanageController */
/* @var $model Orphanage */

$this->breadcrumbs=array(
	'Orphanages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Orphanage', 'url'=>array('index')),
	array('label'=>'Create Orphanage', 'url'=>array('create')),
	array('label'=>'View Orphanage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Orphanage', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Orphanage', 'url'=>array('index')),
array('label'=>'新建Orphanage', 'url'=>array('create')),
array('label'=>'管理Orphanage', 'url'=>array('admin')),
);
?>

<h1>修改 Orphanage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>