<?php
/* @var $this CruiseroomController */
/* @var $model Cruiseroom */

$this->breadcrumbs=array(
	'Cruiserooms'=>array('index'),
	'Manage',
);

$this->menu=array(
  //array('label'=>'列表Cruiseroom', 'url'=>array('index')),
  array('label'=>'新建Cruiseroom', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cruiseroom-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理<?php echo $cruise->cruise_name;?>游轮房间</h1>

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
	'id'=>'cruiseroom-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cruiseid',
		//'cruise_name',
		'name',
		'price',
		array('name'=>'breakfast','value'=>'Cruiseroom::$breakfast[$data->breakfast]'),
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
