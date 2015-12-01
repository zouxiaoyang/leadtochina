<?php
/* @var $this ToursPackageController */
/* @var $model ToursPackage */

$this->breadcrumbs=array(
	'Tours Packages'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表ToursPackage', 'url'=>array('index')),
  array('label'=>'新建ToursPackage', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tours-package-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Tours Packages</h1>

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
	'id'=>'tours-package-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'package_type',
		'category_parentid',
		'categorieid_str',
		'chinatours_cat_id',
		'package_code',
		/*
		'categorie_name_str',
		'name',
		'package_grade',
		'route',
		'package_tour_type',
		'tour_intro',
		'targets',
		'route_Intro',
		'departs',
		'price',
		'price1',
		'price_low',
		'price_num',
		'price_serialize',
		'price_serialize_1',
		'price_yuan',
		'days',
		'note',
		'ufile',
		'pic',
		'pic_beijing_top',
		'pic_big',
		'pic_big_alt',
		'filedir',
		'price_include',
		'price_exclude',
		'tips',
		'seo_title',
		'seo_key',
		'seo_description',
		'attractions',
		'promotion',
		'recommand_reason',
		'published',
		'update_route',
		'hot',
		'hot_tour',
		'reviews',
		'is_half_day',
		'tour_type',
		'beijing_tour_type',
		'vehicle_type',
		'destination_addr',
		'one_category',
		'two_category',
		'by_group',
		'tour_tagids',
		'tour_subtag_ids',
		'sort',
		'theme',
		'highlight',
		'season',
		'fnum',
		'views',
		'top',
		'recommend',
		'city_recommend',
		'index_recommend',
		'index_recommend_order',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
