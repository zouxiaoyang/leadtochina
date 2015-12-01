<?php
/* @var $this CruisepicController */
/* @var $model Cruisepic */

$this->breadcrumbs=array(
	'Cruisepics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Cruisepic', 'url'=>array('index')),
	array('label'=>'Create Cruisepic', 'url'=>array('create')),
	array('label'=>'View Cruisepic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cruisepic', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
//array('label'=>'列表Cruisepic', 'url'=>array('index')),
array('label'=>'新建Cruisepic', 'url'=>array('create')),
array('label'=>'管理Cruisepic', 'url'=>array('admin')),
);
?>

<h1>修改 Cruisepic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>