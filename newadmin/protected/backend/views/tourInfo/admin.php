<style>

.grid-view .button-column {
    text-align: center;
    width: auto !important;
}
</style>
<?php
/* @var $this TourInfoController */
/* @var $model TourInfo */

$this->breadcrumbs=array(
	'Tour Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'客户行程列表', 'url'=>array('index')),
	array('label'=>'新建', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tour-info-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>客户行程列表</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tour-info-grid',
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
            'class'=>'CButtonColumn',
            'template'=>'{addPost}',
            'buttons'=>array(
                    'addPost'=>array(
                           'label'    => '行程',
                            'url'    => 'Yii::app()->createUrl("tourItinerary/admin", array("tid" => $data->id))' // 可以传参
                        )
                )
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{addPost}',
            'buttons'=>array(
                    'addPost'=>array(
                           'label'    => '酒店',
                            'url'    => 'Yii::app()->createUrl("tourHotel/admin", array("tid" => $data->id))' // 可以传参
                        )
                )
        ),
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
			'template' => '{generate_page} {generate_final_page} {update} {delete} {copy}',
                'buttons'=>array(
                        'generate_page' => array(
                                'label'=>'生成页面',
                                'url'=>"CHtml::normalizeUrl(array('preview', 'tid'=>\$data->id,'create'=>1))",
                                'imageUrl'=>'images/a1.jpg',
                                'options' => array('class'=>'copy','target'=>'_blank','onclick'=>'return confirm("确定生成客户行程静态页面？")'), // HTML options for the button
                        ),
                        
                        'generate_final_page' => array(
                                'label'=>'生成确认Link',
                                'url'=>"CHtml::normalizeUrl(array('copyTourInfo', 'id'=>\$data->id))",
                                'imageUrl'=>'images/right_button.png',
                                'options' => array('class'=>'copy'), // HTML options for the button
                        ),

                        'copy' => array(
                                'label'=>'复制此行程',
                                'url'=>"CHtml::normalizeUrl(array('copy', 'id'=>\$data->id,'isCopy'=>1))",
                                'imageUrl'=>'images/copy.jpg',
                                'options' => array('class'=>'copy','onclick'=>'return confirm("确定复制此行程吗？")'),
                        ),

                ),
		),
	),
)); ?>
