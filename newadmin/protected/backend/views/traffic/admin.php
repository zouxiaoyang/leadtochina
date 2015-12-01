<?php
/* @var $this TrafficController */
/* @var $model Traffic */

$this->breadcrumbs=array(
	'Traffics'=>array('index'),
	'Manage',
);

$this->menu=array(
 // array('label'=>'列表Traffic', 'url'=>array('index')),
  array('label'=>'新建Flight&Train信息', 'url'=>array('create')),
  array('label'=>'返回TourInfoFinal', 'url'=>array('tourInfoFinal/admin','id'=>$tid)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('traffic-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Flight&Train信息</h1>

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
	'id'=>'traffic-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tid',
		'date',
		'depart_time',
		'depart_city',
		'arrive_time',
		'arrive_city',
		/*
		'flight_train_info',
		'e_tickets',
		*/
		array(
			'header'=>'操作',
			'template'=>'{update}{delete}',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
