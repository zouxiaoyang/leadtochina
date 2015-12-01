<?php
/* @var $this ReviewsCommentController */
/* @var $model ReviewsComment */

$this->breadcrumbs=array(
	'Reviews Comments'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List ReviewsComment', 'url'=>array('index')),
	array('label'=>'Create ReviewsComment', 'url'=>array('create')),
	array('label'=>'View ReviewsComment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ReviewsComment', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表ReviewsComment', 'url'=>array('index')),
array('label'=>'新建ReviewsComment', 'url'=>array('create')),
array('label'=>'管理ReviewsComment', 'url'=>array('admin')),
);
?>

<h1>修改 ReviewsComment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>