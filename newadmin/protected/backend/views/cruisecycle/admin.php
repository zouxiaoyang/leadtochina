<?php
/* @var $this CruisecycleController */
/* @var $model Cruisecycle */

$this->breadcrumbs=array(
	'Cruisecycles'=>array('index'),
	'Manage',
);

$this->menu=array(
  //array('label'=>'列表Cruisecycle', 'url'=>array('index')),
  array('label'=>'新建Cruisecycle', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cruisecycle-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Cruisecycles</h1>

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
	'id'=>'cruisecycle-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'cruiseid',
		'cruise_name',
		'activition',
		//'upOrdown',
		array('name'=>'upOrdown','value'=>'Cruiseact::$upOrdownArr[$data->upOrdown]'),
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
