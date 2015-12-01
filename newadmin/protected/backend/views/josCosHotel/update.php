<?php
/* @var $this JosCosHotelController */
/* @var $model JosCosHotel */

$this->breadcrumbs=array(
	'Jos Cos Hotels'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List JosCosHotel', 'url'=>array('index')),
	array('label'=>'Create JosCosHotel', 'url'=>array('create')),
	array('label'=>'View JosCosHotel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JosCosHotel', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表JosCosHotel', 'url'=>array('index')),
array('label'=>'新建JosCosHotel', 'url'=>array('create')),
array('label'=>'管理JosCosHotel', 'url'=>array('admin')),
);
?>

<h1>修改 JosCosHotel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>