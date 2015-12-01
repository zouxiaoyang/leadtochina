<?php
/* @var $this CruiseactController */
/* @var $model Cruiseact */

$this->breadcrumbs=array(
	'Cruiseacts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Cruiseact', 'url'=>array('index')),
	array('label'=>'Create Cruiseact', 'url'=>array('create')),
	array('label'=>'View Cruiseact', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cruiseact', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
//array('label'=>'列表Cruiseact', 'url'=>array('index')),
array('label'=>'新建Cruiseact', 'url'=>array('create')),
array('label'=>'管理Cruiseact', 'url'=>array('admin')),
);
?>

<h1>修改 Cruiseact <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>