<?php
/* @var $this CooperationPartnersController */
/* @var $model CooperationPartners */

$this->breadcrumbs=array(
	'Cooperation Partners'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表CooperationPartners', 'url'=>array('index')),
  array('label'=>'管理CooperationPartners', 'url'=>array('admin')),
);
?>

<h1>新建 CooperationPartners</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>