<?php
/* @var $this EnglishController */
/* @var $model English */

$this->breadcrumbs=array(
	'Englishes'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表English', 'url'=>array('index')),
  array('label'=>'新建English', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('english-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Englishes</h1>

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
	'id'=>'english-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'title',
		'play_url',
		'download_url',
		'english_text',
		/*
		'chinese_content',
		'jifen',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
