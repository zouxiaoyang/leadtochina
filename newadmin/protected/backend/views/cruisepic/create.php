<?php
/* @var $this CruisepicController */
/* @var $model Cruisepic */

$this->breadcrumbs=array(
	'Cruisepics'=>array('index'),
	'Create',
);

$this->menu=array(
//  array('label'=>'列表Cruisepic', 'url'=>array('index')),
  array('label'=>'管理Cruisepic', 'url'=>array('admin')),
);
?>

<h1>新建 Cruisepic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>