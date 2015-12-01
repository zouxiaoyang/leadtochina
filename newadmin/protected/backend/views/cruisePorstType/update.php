<?php
/* @var $this CruisePorstTypeController */
/* @var $model CruisePorstType */

$this->breadcrumbs=array(
	'Cruise Porst Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CruisePorstType', 'url'=>array('index')),
	array('label'=>'Create CruisePorstType', 'url'=>array('create')),
	array('label'=>'View CruisePorstType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CruisePorstType', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CruisePortType', 'url'=>array('index')),
array('label'=>'新建CruisePortType', 'url'=>array('create')),
array('label'=>'管理CruisePortType', 'url'=>array('admin')),
);
?>

<h1>修改 CruisePortType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>