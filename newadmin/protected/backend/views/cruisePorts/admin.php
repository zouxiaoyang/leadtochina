<?php
/* @var $this CruisePortsController */
/* @var $model CruisePorts */

$this->breadcrumbs=array(
	'Cruise Ports'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表CruisePorts', 'url'=>array('index')),
  array('label'=>'新建CruisePorts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cruise-ports-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Cruise Ports</h1>

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
	'id'=>'cruise-ports-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cityName',
		//'portIntro',
		'tourIds',
		'sceneryIds',
		/*array(
        	'header'=>'Port Excursions',
			'class'=>'CButtonColumn',
			'template'=>'{addPost}',
			'buttons'=>array(
			'addPost'=>array(
			     'label'	=> 'Port Excursions',
			      'url'		=> 'Yii::app()->createUrl("cruisePortsExcursions/admin", array("cid" => $data->id))' // 可以传参
				)
			)
    	),*/
    	array(
        	'header'=>'图片',
        	'class'=>'CButtonColumn',
        	'template'=>'{addPost}',
        	'buttons'=>array(
        			'addPost'=>array(
        					'label' => '图片',
        					'url' => 'Yii::app()->createUrl("cruisepic/admin", array("cruiseid" => $data->id,"state" =>4))'
        			)
        	)
        ),
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
