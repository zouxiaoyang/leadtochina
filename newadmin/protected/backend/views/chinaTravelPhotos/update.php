<?php
/* @var $this ChinaTravelPhotosController */
/* @var $model ChinaTravelPhotos */

$this->breadcrumbs=array(
	'China Travel Photoses'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List ChinaTravelPhotos', 'url'=>array('index')),
	array('label'=>'Create ChinaTravelPhotos', 'url'=>array('create')),
	array('label'=>'View ChinaTravelPhotos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ChinaTravelPhotos', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表ChinaTravelPhotos', 'url'=>array('index')),
array('label'=>'新建ChinaTravelPhotos', 'url'=>array('create')),
array('label'=>'管理ChinaTravelPhotos', 'url'=>array('admin')),
);
?>

<h1>修改 ChinaTravelPhotos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>