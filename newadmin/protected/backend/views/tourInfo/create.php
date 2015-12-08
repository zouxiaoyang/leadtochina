<?php
/* @var $this TourInfoController */
/* @var $model TourInfo */

$this->breadcrumbs=array(
	'Tour Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'客户行程列表', 'url'=>array('index')),
	array('label'=>'列表', 'url'=>array('admin')),
);
?>

<h1>创建客户行程</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>