<?php
/* @var $this ImgVideoController */
/* @var $model ImgVideo */

$this->breadcrumbs=array(
	'Img Videos'=>array('index'),
	$model->file_name=>array('view','id'=>$model->id),
	'Update',
);

/*
$this->menu=array(
	array('label'=>'List ImgVideo', 'url'=>array('index')),
	array('label'=>'Create ImgVideo', 'url'=>array('create')),
	array('label'=>'View ImgVideo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ImgVideo', 'url'=>array('admin')),
);
?>
*/
$this->menu=array(
array('label'=>'列表ImgVideo', 'url'=>array('index')),
array('label'=>'新建ImgVideo', 'url'=>array('create')),
array('label'=>'管理ImgVideo', 'url'=>array('admin')),
);
?>

<h1>修改 ImgVideo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>