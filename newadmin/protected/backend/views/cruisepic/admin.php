<?php
/* @var $this CruisepicController */
/* @var $model Cruisepic */

$this->breadcrumbs=array(
	'Cruisepics'=>array('index'),
	'Manage',
);

$this->menu=array(
 // array('label'=>'列表Cruisepic', 'url'=>array('index')),
  array('label'=>'新建Cruisepic', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cruisepic-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Cruisepics</h1>

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
	'id'=>'cruisepic-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cruiseid',
		'pic_alt',
		'pic_path',
		//'state',
		array('name'=>'state','value'=>'Cruisepic::$picCategory[$data->state]'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
