<?php
/* @var $this ChinaTravelPhotosController */
/* @var $model ChinaTravelPhotos */

$this->breadcrumbs=array(
	'China Travel Photoses'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表ChinaTravelPhotos', 'url'=>array('index')),
  array('label'=>'管理ChinaTravelPhotos', 'url'=>array('admin')),
);
?>

<h1>新建 ChinaTravelPhotos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>