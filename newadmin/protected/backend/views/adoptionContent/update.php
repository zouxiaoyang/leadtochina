<?php
/* @var $this AdoptionContentController */
/* @var $model AdoptionContent */

$this->breadcrumbs=array(
	'AdoptionContents'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List AdoptionContent', 'url'=>array('index')),
	array('label'=>'Create AdoptionContent', 'url'=>array('create')),
	array('label'=>'View AdoptionContent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdoptionContent', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表AdoptionContent', 'url'=>array('index')),
array('label'=>'新建AdoptionContent', 'url'=>array('create')),
array('label'=>'管理AdoptionContent', 'url'=>array('admin')),
);
?>

<h1>修改 AdoptionContent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>