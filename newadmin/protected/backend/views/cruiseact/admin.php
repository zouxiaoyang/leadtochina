<?php
/* @var $this CruiseactController */
/* @var $model Cruiseact */

$this->breadcrumbs=array(
	'Cruiseacts'=>array('index'),
	'Manage',
);

$this->menu=array(
  //array('label'=>'列表Cruiseact', 'url'=>array('index')),
  array('label'=>'新建Cruiseact', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cruiseact-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>游轮航期管理</h1>

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
	'id'=>'cruiseact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'cruiseid',
		'cruise_name',
		'cruise_date',
		'year',
		'month',	
		'days',
		//'upOrdown',
		array('name'=>'upOrdown','value'=>'Cruiseact::$upOrdownArr[$data->upOrdown]'),
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
