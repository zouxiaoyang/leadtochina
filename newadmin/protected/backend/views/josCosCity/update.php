<?php
/* @var $this JosCosCityController */
/* @var $model JosCosCity */

$this->breadcrumbs=array(
	'城市'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List JosCosCity', 'url'=>array('index')),
	array('label'=>'Create JosCosCity', 'url'=>array('create')),
	array('label'=>'View JosCosCity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JosCosCity', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表JosCosCity', 'url'=>array('index')),
array('label'=>'新建JosCosCity', 'url'=>array('create')),
array('label'=>'管理JosCosCity', 'url'=>array('admin')),
);
?>

<h1>修改 JosCosCity <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>