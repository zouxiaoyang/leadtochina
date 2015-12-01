<?php
/* @var $this GuidesController */
/* @var $model Guides */

$this->breadcrumbs=array(
	'Guides'=>array('index'),
	'Manage',
);

$this->menu=array(
 // array('label'=>'列表Guides', 'url'=>array('index')),
  array('label'=>'新建导游信息', 'url'=>array('create')),
  array('label'=>'返回TourInfoFinal', 'url'=>array('tourInfoFinal/admin','id'=>$tid)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('guides-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理导游信息</h1>

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
	'id'=>'guides-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tid',
		'name',
		'city',
		'mobie',
		array(
			'header'=>'操作',
			'template'=>'{update}{delete}',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
