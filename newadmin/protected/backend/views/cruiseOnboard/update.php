<?php
/* @var $this CruiseOnboardController */
/* @var $model CruiseOnboard */

$this->breadcrumbs=array(
	'Cruise Onboards'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CruiseOnboard', 'url'=>array('index')),
	array('label'=>'Create CruiseOnboard', 'url'=>array('create')),
	array('label'=>'View CruiseOnboard', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CruiseOnboard', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CruiseOnboard', 'url'=>array('index')),
array('label'=>'新建CruiseOnboard', 'url'=>array('create')),
array('label'=>'管理CruiseOnboard', 'url'=>array('admin')),
);
?>

<h1>修改 CruiseOnboard <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>