<?php
/* @var $this JosCosHotelpicController */
/* @var $model JosCosHotelpic */

$this->breadcrumbs=array(
	'Jos Cos Hotelpics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List JosCosHotelpic', 'url'=>array('index')),
	array('label'=>'Create JosCosHotelpic', 'url'=>array('create')),
	array('label'=>'View JosCosHotelpic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JosCosHotelpic', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表JosCosHotelpic', 'url'=>array('index')),
array('label'=>'新建JosCosHotelpic', 'url'=>array('create')),
array('label'=>'管理JosCosHotelpic', 'url'=>array('admin')),
);
?>

<h1>修改 JosCosHotelpic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>