<?php
/* @var $this JosTotalOrderController */
/* @var $model JosTotalOrder */

$this->breadcrumbs=array(
	'Jos Total Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List JosTotalOrder', 'url'=>array('index')),
	array('label'=>'Create JosTotalOrder', 'url'=>array('create')),
	array('label'=>'View JosTotalOrder', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JosTotalOrder', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表JosTotalOrder', 'url'=>array('index')),
array('label'=>'新建JosTotalOrder', 'url'=>array('create')),
array('label'=>'管理JosTotalOrder', 'url'=>array('admin')),
);
?>

<h1>修改 JosTotalOrder <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>