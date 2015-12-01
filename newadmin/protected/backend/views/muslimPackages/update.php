<?php
/* @var $this MuslimPackagesController */
/* @var $model AllPackages */

$this->breadcrumbs=array(
	'All Packages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List AllPackages', 'url'=>array('index')),
	array('label'=>'Create AllPackages', 'url'=>array('create')),
	array('label'=>'View AllPackages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AllPackages', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Muslim Tour', 'url'=>array('index')),
array('label'=>'新建Muslim Tour', 'url'=>array('create')),
array('label'=>'管理Muslim Tour', 'url'=>array('admin')),
);
?>

<h1>修改 AllPackages <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>