<?php
/* @var $this TourInfoFinalController */
/* @var $model TourInfoFinal */

$this->breadcrumbs=array(
	'Tour Info Finals'=>array('index'),
	'Manage',
);

$this->menu=array(
  //array('label'=>'列表TourInfoFinal', 'url'=>array('index')),
  array('label'=>'返回TourInfo列表', 'url'=>array('tourInfo/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tour-info-final-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Final Confirmation Link</h1>

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
	'id'=>'tour-info-final-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(  
            'name'=>'create_time',
            'value'=>'date("Y-m-d", $data->create_time)',
            
        ),
		'travel_advisor',
		'username',
		array('name'=>'tour_days','value'=>'TourHotel::getDuration($data->tour_days)'),
		'tracking_code',
    	array(
    		'header'=>'Guests',
            'class'=>'CButtonColumn',
            'template'=>'{addPost}',
            'buttons'=>array(
                    'addPost'=>array(
                           'label'    => '游客信息',
                            'url'    => 'Yii::app()->createUrl("guests/admin", array("tid" => $data->id))' // 可以传参
                        )
                )
        ),
        array(
         	'header'=>'Guides',
            'class'=>'CButtonColumn',
            'template'=>'{addPost}',
            'buttons'=>array(
                    'addPost'=>array(
                           'label'    => '导游信息',
                            'url'    => 'Yii::app()->createUrl("guides/admin", array("tid" => $data->id))' // 可以传参
                        )
                )
        ),
        array(
        	'header'=>'Traffic',
            'class'=>'CButtonColumn',
            'template'=>'{addPost}',
            'buttons'=>array(
                    'addPost'=>array(
                           'label'    => '交通信息',
                            'url'    => 'Yii::app()->createUrl("traffic/admin", array("tid" => $data->id))' // 可以传参
                        )
                )
        ),
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
			'template' => '{generate_page} {update} {delete}',
                'buttons'=>array(
                        'generate_page' => array(
                                'label'=>'生成确认Link页面',
                                //'url'=>"CHtml::normalizeUrl(array('generatePage', 'tid'=>\$data->id,'create'=>1))",
                                'url'=>"CHtml::normalizeUrl(array('page', 'tid'=>\$data->id,'create'=>1))",
                                'imageUrl'=>'images/a1.jpg',
                                'options' => array('class'=>'copy','target'=>'_blank','onclick'=>'return confirm("确定生成确认Link静态页面？")'), // HTML options for the button
                        ),                      
                       
                ),
		),
	),
)); ?>
