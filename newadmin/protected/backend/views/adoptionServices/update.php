<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Create Services', 'url'=>array('create')),
	array('label'=>'View Services', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Services', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Adoption Services', 'url'=>array('index')),
array('label'=>'新建Adoption Services', 'url'=>array('create')),
array('label'=>'管理Adoption Services', 'url'=>array('admin')),
);
?>

<h1>修改 Services <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>