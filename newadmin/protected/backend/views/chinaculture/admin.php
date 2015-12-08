<?php
/* @var $this ChinacultureController */
/* @var $model Chinaculture */

$this->breadcrumbs=array(
	'Chinacultures'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表Chinaculture', 'url'=>array('index')),
  array('label'=>'新建Chinaculture', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('chinaculture-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Chinacultures</h1>

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
	'id'=>'chinaculture-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		array('name'=>'catid','value'=>'Categories::model()->findByPk($data->catid)->title'),
		//'cat_path',
		//'content',
		//'ufile',
		/*
		'filedir',
		'url',
		'seo_title',
		'seo_key',
		'seo_description',
		'enable',
		'update_route',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
