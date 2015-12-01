<?php
/* @var $this ProvinceController */
/* @var $model Province */

$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Province', 'url'=>array('index')),
	array('label'=>'Create Province', 'url'=>array('create')),
	array('label'=>'View Province', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Province', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Province', 'url'=>array('index')),
array('label'=>'新建Province', 'url'=>array('create')),
array('label'=>'管理Province', 'url'=>array('admin')),
);
?>

<h1>修改 Province <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>