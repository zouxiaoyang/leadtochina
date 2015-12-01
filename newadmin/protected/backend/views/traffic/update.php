<?php
/* @var $this TrafficController */
/* @var $model Traffic */

$this->breadcrumbs=array(
	'Traffics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Traffic', 'url'=>array('index')),
	array('label'=>'Create Traffic', 'url'=>array('create')),
	array('label'=>'View Traffic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Traffic', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Traffic', 'url'=>array('index')),
array('label'=>'新建Traffic', 'url'=>array('create')),
array('label'=>'管理Traffic', 'url'=>array('admin')),
);
?>

<h1>修改 Traffic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>