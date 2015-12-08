<?php
/* @var $this JosCosCityController */
/* @var $model JosCosCity */

$this->breadcrumbs=array(
	'城市管理'=>array('index'),
	'Manage',
);

$this->menu=array(
  //array('label'=>'城市列表', 'url'=>array('index')),
  array('label'=>'新建城市', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jos-cos-city-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Jos Cos Cities</h1>

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
	'id'=>'jos-cos-city-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'provinceid',
		
		'name',
		'weather',
		array('name'=>'provinceid','value'=>'Province::model()->findByPk($data->provinceid)->name'),
		/*
		'shortname',
		'description',
		'traffic',
		'shopping',
		'tips',
		'hot',
		'ufile',
		'filedir',
		'showroder',
		'seo_title',
		'seo_key',
		'seo_description',
		'isupdate',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
