<?php
/* @var $this TourItineraryController */
/* @var $model TourItinerary */

$this->breadcrumbs=array(
	'Tour Itineraries'=>array('index'),
	'每天具体行程',
);

$this->menu=array(
	//array('label'=>'List TourItinerary', 'url'=>array('index')),
	array('label'=>'新建', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tour-itinerary-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo $tourInfo->title .' for ' . $tourInfo->username;?> 每天具体行程</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<?php if(Yii::app()->user->hasFlash('TourItinerarySubmitted')):?>
	<div class="flash-success"><?php echo Yii::app()->user->getFlash('TourItinerarySubmitted');?></div>
	<?php endif;?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tour-itinerary-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'days','value'=>'TourItinerary::getDays($data->days)'),
		'today_date',
		'place_transport',
		'accommodation',
		'today_activities',
		'scenery_ids',
		/*
		'uid',
		'create_time',
		*/
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
			'template' => '{update} {delete}',
		),
	),
)); ?>
