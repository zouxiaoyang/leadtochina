<?php
/* @var $this TourInfoFinalController */
/* @var $model TourInfoFinal */

$this->breadcrumbs=array(
	'Tour Info Finals'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List TourInfoFinal', 'url'=>array('index')),
	array('label'=>'Create TourInfoFinal', 'url'=>array('create')),
	array('label'=>'View TourInfoFinal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TourInfoFinal', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
//array('label'=>'列表TourInfoFinal', 'url'=>array('index')),
//array('label'=>'新建TourInfoFinal', 'url'=>array('create')),
//array('label'=>'管理TourInfoFinal', 'url'=>array('admin')),
);
?>

<h1>修改 Final Confirmation Link <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>