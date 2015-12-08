<?php
/* @var $this CruisePortsController */
/* @var $model CruisePorts */

$this->breadcrumbs=array(
	'Cruise Ports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CruisePorts', 'url'=>array('index')),
	array('label'=>'Create CruisePorts', 'url'=>array('create')),
	array('label'=>'View CruisePorts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CruisePorts', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CruisePorts', 'url'=>array('index')),
array('label'=>'新建CruisePorts', 'url'=>array('create')),
array('label'=>'管理CruisePorts', 'url'=>array('admin')),
);
?>

<h1>修改 CruisePorts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>