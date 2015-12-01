<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Cities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List City', 'url'=>array('index')),
	array('label'=>'Create City', 'url'=>array('create')),
	array('label'=>'View City', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage City', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Adoption City', 'url'=>array('index')),
array('label'=>'新建Adoption City', 'url'=>array('create')),
array('label'=>'管理Adoption City', 'url'=>array('admin')),
);
?>

<h1>修改 City <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>