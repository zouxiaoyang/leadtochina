<?php
/* @var $this GuestsController */
/* @var $model Guests */

$this->breadcrumbs=array(
	'Guests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Guests', 'url'=>array('index')),
	array('label'=>'Create Guests', 'url'=>array('create')),
	array('label'=>'View Guests', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Guests', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Guests', 'url'=>array('index')),
array('label'=>'新建Guests', 'url'=>array('create')),
array('label'=>'管理Guests', 'url'=>array('admin')),
);
?>

<h1>修改 Guests <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>