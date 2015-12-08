<?php
/* @var $this BeijingPackageController */
/* @var $model BeijingPackage */

$this->breadcrumbs=array(
	'Beijing Packages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List BeijingPackage', 'url'=>array('index')),
	array('label'=>'Create BeijingPackage', 'url'=>array('create')),
	array('label'=>'View BeijingPackage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BeijingPackage', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表BeijingPackage', 'url'=>array('index')),
array('label'=>'新建BeijingPackage', 'url'=>array('create')),
array('label'=>'管理BeijingPackage', 'url'=>array('admin')),
);
?>

<h1>修改 BeijingPackage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>