<?php
/* @var $this FaqContentController */
/* @var $model FaqContent */

$this->breadcrumbs=array(
	'Faq Contents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaqContent', 'url'=>array('index')),
	array('label'=>'Create FaqContent', 'url'=>array('create')),
	array('label'=>'View FaqContent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FaqContent', 'url'=>array('admin')),
);
?>

<h1>Update FaqContent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>