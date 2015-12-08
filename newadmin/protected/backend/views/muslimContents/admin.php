<?php
/* @var $this MuslimContentsController */
/* @var $model AllContents */

$this->breadcrumbs=array(
	'All Contents'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表Muslim文章', 'url'=>array('index')),
  array('label'=>'新建Muslim文章', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('all-contents-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 All Contents</h1>

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
	'id'=>'all-contents-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		//'description',
		//'muslim_cat_id',
		array('name'=>'muslim_cat_id','value'=>'$data->muslim_cat_id==0?"/":MuslimContents::$muslimGuide[$data->muslim_cat_id]'),
		//'province_id',
		array('name'=>'province_id','value'=>'Province::model()->findByPk($data->province_id)->name'),
		//'city_id',
		array('name'=>'city_id','value'=>'JosCosCity::model()->findByPk($data->city_id)->name'),
		//'image',
		/*
		'rate_time',
		'rate_value',
		'content_type',
		*/
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
