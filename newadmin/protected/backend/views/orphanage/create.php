<?php
/* @var $this OrphanageController */
/* @var $model Orphanage */

$this->breadcrumbs=array(
	'Orphanages'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表Orphanage', 'url'=>array('index')),
  array('label'=>'管理Orphanage', 'url'=>array('admin')),
);
?>

<h1>新建 Orphanage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>