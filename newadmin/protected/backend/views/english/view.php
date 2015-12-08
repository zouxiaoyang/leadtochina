<?php
/* @var $this EnglishController */
/* @var $model English */

$this->breadcrumbs=array(
	'Englishes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表English', 'url'=>array('index')),
	array('label'=>'新建English', 'url'=>array('create')),
	array('label'=>'修改English', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除English', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理English', 'url'=>array('admin')),
);
?>

<h1>查看 English #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'title',
		'play_url',
		'download_url',
		'english_text',
		'chinese_content',
		'jifen',
	),
)); ?>
