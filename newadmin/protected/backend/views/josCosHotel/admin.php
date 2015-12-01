<?php
/* @var $this JosCosHotelController */
/* @var $model JosCosHotel */

$this->breadcrumbs=array(
	'Jos Cos Hotels'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表JosCosHotel', 'url'=>array('index')),
  array('label'=>'新建JosCosHotel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jos-cos-hotel-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Jos Cos Hotels</h1>

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
	'id'=>'jos-cos-hotel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'hotel_addr',
		//'provinceid',
		//'cityid',
		'province_name',
		'city_name',
		/*
		'districtid',
		'hotel_grade',
		'classica',
		'standard',
		'double',
		'description',
		'service',
		'food',
		'brandid',
		'surrounding',
		'features',
		'ufile',
		'filedir',
		'lon',
		'lat',
		'seo_title',
		'seo_key',
		'seo_description',
		'hot',
		*/
		array(
        'class'=>'CButtonColumn',
        'template'=>'{addPost}',
        'buttons'=>array(
                'addPost'=>array(
                       'label'    => '批量上传图片',
                        'url'    => 'Yii::app()->createUrl("josCosHotelpic/upload", array("hotelid" => $data->id))' // 可以传参
                    )
            )
    ),
		array(
			'class'=>'CButtonColumn',
		),

	),
)); ?>
