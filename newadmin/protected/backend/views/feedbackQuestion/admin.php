<?php
/* @var $this FeedbackQuestionController */
/* @var $model FeedbackQuestion */

$this->breadcrumbs=array(
	'Feedback Questions'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表FeedbackQuestion', 'url'=>array('index')),
  array('label'=>'新建FeedbackQuestion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('feedback-question-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Feedback Questions</h1>

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
	'id'=>'feedback-question-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array( 'name'=>'answer_list', 'type'=>'raw' ),
	    'created',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
