<?php
/* @var $this ImgVideoController */
/* @var $model ImgVideo */

$this->breadcrumbs=array(
	'Img Videos'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表ImgVideo', 'url'=>array('index')),
  array('label'=>'新建ImgVideo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('img-video-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Img Videos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'img-video-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'file_name',
		'http_url',
		'type',
		'img_video',
		'status',
		/*
		'creattime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
