<?php
/* @var $this ToursPackageController */
/* @var $model ToursPackage */

$this->breadcrumbs=array(
	'Tours Packages'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List ToursPackage', 'url'=>array('index')),
	array('label'=>'Create ToursPackage', 'url'=>array('create')),
	array('label'=>'View ToursPackage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ToursPackage', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表ToursPackage', 'url'=>array('index')),
array('label'=>'新建ToursPackage', 'url'=>array('create')),
array('label'=>'管理ToursPackage', 'url'=>array('admin')),
);
?>

<h1>修改 ToursPackage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>