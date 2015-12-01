<?php
/* @var $this ReviewsCommentController */
/* @var $model ReviewsComment */

$this->breadcrumbs=array(
	'Reviews Comments'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表ReviewsComment', 'url'=>array('index')),
  array('label'=>'新建ReviewsComment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('reviews-comment-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Reviews Comments</h1>

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
	'id'=>'reviews-comment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'email',
		'comment',
		array('name'=>'dateline','value'=>'date("Y-m-d H:i",$data->dateline)'),
		array('name'=>'published', 'value'=>'ReviewsComment::$published_arr["$data->published"]'),
		array(
            'class'=>'CButtonColumn',
            'template'=>'{addPost}',
            'buttons'=>array(
                    'addPost'=>array(
                           'label'    => 'review',
                            'url'    => 'Yii::app()->createUrl("reviews/update", array("id" => $data->tid))' // 可以传参
                        )
                )
    ),
		/*
		'userip',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{update} {delete}',
		),
	),
)); ?>
