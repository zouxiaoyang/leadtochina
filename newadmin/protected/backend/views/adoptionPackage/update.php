<?php
/* @var $this PackageController */
/* @var $model Package */

$this->breadcrumbs=array(
	'Packages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Package', 'url'=>array('index')),
	array('label'=>'Create Package', 'url'=>array('create')),
	array('label'=>'View Package', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Package', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Package', 'url'=>array('index')),
array('label'=>'新建Package', 'url'=>array('create')),
array('label'=>'管理Package', 'url'=>array('admin')),
);
?>

<h1>修改 Package <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>