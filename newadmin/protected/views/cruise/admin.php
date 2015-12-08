<?php
/* @var $this CruiseController */
/* @var $model Cruise */

$this->breadcrumbs=array(
	'Cruises'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表Cruise', 'url'=>array('index')),
  array('label'=>'新建Cruise', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cruise-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Cruises</h1>

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
	'id'=>'cruise-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cruise_name',
		'url',
		'year_built',
		'total_passengers',
		'crew',
		/*
		'length',
		'width',
		'uphighprice',
		'passenger_decks',
		'cruise_grade',
		'uplink',
		'down',
		'equipment',
		'introduction',
		'filedir',
		'ufile',
		'seo_title',
		'seo_key',
		'seo_description',
		'published',
		'uplowprice',
		'downlowprice',
		'downhighprice',
		'upcity',
		'downcity',
		'category',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
