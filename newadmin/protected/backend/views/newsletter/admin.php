<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */

$this->breadcrumbs=array(
	'Newsletters'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表Newsletter', 'url'=>array('index')),
  array('label'=>'新建Newsletter', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('newsletter-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Newsletters</h1>

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
	'id'=>'newsletter-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('name'=>'top_tour_cities','value'=>'Newsletter::getTopTourCities($data->top_tour_cities)', 'type'=>'raw'),
		'banner',
		//'more_china_tours',
		'more_banner',
		//'theme_tours',
		array(
			'class'=>'CButtonColumn',
		),
	
),
)); ?>
