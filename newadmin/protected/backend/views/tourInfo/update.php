<?php
/* @var $this TourInfoController */
/* @var $model TourInfo */

$this->breadcrumbs=array(
	'Tour Infos'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'客户行程列表', 'url'=>array('index')),
	array('label'=>'新建', 'url'=>array('create')),
	//array('label'=>'查看客户行程', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'列表', 'url'=>array('admin')),
);
?>

<h1>修改客户行程 #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>