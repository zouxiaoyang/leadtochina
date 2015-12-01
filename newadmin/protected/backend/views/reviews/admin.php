<?php
/* @var $this ReviewsController */
/* @var $model Reviews */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表Reviews', 'url'=>array('index')),
  array('label'=>'新建Reviews', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reviews-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Reviews</h1>

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
	'id'=>'reviews-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'email',
    'dateline',
		'telephone',
		array('name'=>'description', 'value'=>'substr(strip_tags($data->description),0,100)."..."'),
		'review_type',
		array('name'=>'published','value'=>'Reviews::$published_arr[$data->published]'),
		/*
		'year',
		'dateline',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
