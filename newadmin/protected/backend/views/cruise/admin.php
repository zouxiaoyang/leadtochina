<?php
/* @var $this CruiseController */
/* @var $model Cruise */

$this->breadcrumbs=array(
	'Cruises'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表Cruise', 'url'=>array('index')),
  array('label'=>'新建Cruise', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cruise-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Cruises</h1>

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

<?php 
 Cruise::$category[0] = "All";
 ksort(Cruise::$category);
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cruise-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cruise_name',
        //array('name'=>'category','value'=>'Cruise::$category[$data->category]'),
         array(
            'name'=>'category',
            'filter'=>CHtml::dropDownList('Cruise[category]', 'category',  
               Cruise::$category
            ),
            'value'=>'Cruise::$category[$data->category]',

        ),

        'cruise_grade',
		'year_built',
		'total_passengers',
        array('name'=>'upcity','value'=>'Cruise::$upCityArr[$data->upcity]'),
        array('name'=>'downcity','value'=>'Cruise::$downCityArr[$data->downcity]'),
        array('name'=>'is_hide', 'value'=>'Cruise::$isHideArr[$data->is_hide]'),

		/*
		'length',
		'width',
		'uphighprice',
		'passenger_decks',
		'uplink',
		'down',
		'equipment',
		'introduction',
		'filedir',
		'ufile',
		'seo_title',
		'seo_key',
		'seo_description',
		'published',
		'uplowprice',
		'downlowprice',
		'downhighprice',
		'upcity',
		'downcity',
		*/
    	array(
    		'header'=>'编辑行程',
            'class'=>'CButtonColumn',
            'template'=>'{addPost}',
            'buttons'=>array(
                    'addPost'=>array(
                           'label'    => '编辑行程',
                            'url'    => 'Yii::app()->createUrl("cruisecycle/admin", array("cruiseid" => $data->id))' 
                        )
                )
        ),
        array(
        	'header'=>'编辑航期',
        	'class'=>'CButtonColumn',
        	'template'=>'{addPost}',
        	'buttons'=>array(
        			'addPost'=>array(
        					'label' => '编辑航期',
        					'url' => 'Yii::app()->createUrl("cruiseact/admin", array("cruiseid" => $data->id))'
        			)
        	)
        ),
       array(
        	'header'=>'游轮房间',
        	'class'=>'CButtonColumn',
        	'template'=>'{addPost}',
        	'buttons'=>array(
        			'addPost'=>array(
        					'label' => '游轮房间',
        					'url' => 'Yii::app()->createUrl("cruiseroom/admin", array("cruiseid" => $data->id))'
        			)
        	)
        ),
       array(
        	'header'=>'onBoard',
        	'class'=>'CButtonColumn',
        	'template'=>'{addPost}',
        	'buttons'=>array(
        			'addPost'=>array(
        					'label' => 'onBoard',
        					'url' => 'Yii::app()->createUrl("cruiseOnboard/admin", array("cruiseid" => $data->id))'
        			)
        	)
        ),
      array(
        	'header'=>'图片',
        	'class'=>'CButtonColumn',
        	'template'=>'{addPost}',
        	'buttons'=>array(
        			'addPost'=>array(
        					'label' => '图片',
        					'url' => 'Yii::app()->createUrl("cruisepic/admin", array("cruiseid" => $data->id))'
        			)
        	)
        ),

		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
