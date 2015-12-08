<?php
/* @var $this CruiseFaqController */
/* @var $model CruiseFaq */

$this->breadcrumbs=array(
	'Cruise Faqs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CruiseFaq', 'url'=>array('index')),
	array('label'=>'Create CruiseFaq', 'url'=>array('create')),
	array('label'=>'View CruiseFaq', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CruiseFaq', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CruiseFaq', 'url'=>array('index')),
array('label'=>'新建CruiseFaq', 'url'=>array('create')),
array('label'=>'管理CruiseFaq', 'url'=>array('admin')),
);
?>

<h1>修改 CruiseFaq <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>