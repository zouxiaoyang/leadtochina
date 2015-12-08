<?php
/* @var $this FeedbackController */
/* @var $model Feedback */

$this->breadcrumbs=array(
	'Feedbacks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Feedback', 'url'=>array('index')),
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'View Feedback', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Feedback', 'url'=>array('index')),
array('label'=>'新建Feedback', 'url'=>array('create')),
array('label'=>'管理Feedback', 'url'=>array('admin')),
);
?>

<h1>修改 Feedback <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>