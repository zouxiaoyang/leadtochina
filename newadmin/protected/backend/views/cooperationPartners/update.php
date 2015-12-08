<?php
/* @var $this CooperationPartnersController */
/* @var $model CooperationPartners */

$this->breadcrumbs=array(
	'Cooperation Partners'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List CooperationPartners', 'url'=>array('index')),
	array('label'=>'Create CooperationPartners', 'url'=>array('create')),
	array('label'=>'View CooperationPartners', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CooperationPartners', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表CooperationPartners', 'url'=>array('index')),
array('label'=>'新建CooperationPartners', 'url'=>array('create')),
array('label'=>'管理CooperationPartners', 'url'=>array('admin')),
);
?>

<h1>修改 CooperationPartners <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>