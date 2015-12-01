<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List Newsletter', 'url'=>array('index')),
	array('label'=>'Create Newsletter', 'url'=>array('create')),
	array('label'=>'View Newsletter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Newsletter', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表Newsletter', 'url'=>array('index')),
array('label'=>'新建Newsletter', 'url'=>array('create')),
array('label'=>'管理Newsletter', 'url'=>array('admin')),
);
?>

<h1>修改 Newsletter <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>