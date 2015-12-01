<?php
/* @var $this ImgVideoController */
/* @var $model ImgVideo */

$this->breadcrumbs=array(
	'Img Videos'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'列表ImgVideo', 'url'=>array('index')),
  array('label'=>'管理ImgVideo', 'url'=>array('admin')),
);
?>

<h1>新建 ImgVideo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>