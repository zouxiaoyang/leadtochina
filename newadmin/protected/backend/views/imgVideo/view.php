<?php
/* @var $this ImgVideoController */
/* @var $model ImgVideo */

$this->breadcrumbs=array(
	'Img Videos'=>array('index'),
	$model->file_name,
);

$this->menu=array(
	array('label'=>'列表ImgVideo', 'url'=>array('index')),
	array('label'=>'新建ImgVideo', 'url'=>array('create')),
	array('label'=>'修改ImgVideo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除ImgVideo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理ImgVideo', 'url'=>array('admin')),
);
?>

<h1>查看 ImgVideo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'file_name',
		'http_url',
		'type',
		'img_video',
		'status',
		'creattime',
	),
)); ?>
