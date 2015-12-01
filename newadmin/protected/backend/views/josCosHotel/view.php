<?php
/* @var $this JosCosHotelController */
/* @var $model JosCosHotel */

$this->breadcrumbs=array(
	'Jos Cos Hotels'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表JosCosHotel', 'url'=>array('index')),
	array('label'=>'新建JosCosHotel', 'url'=>array('create')),
	array('label'=>'修改JosCosHotel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除JosCosHotel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理JosCosHotel', 'url'=>array('admin')),
);
?>

<h1>查看 JosCosHotel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'hotel_addr',
		'provinceid',
		'cityid',
		'province_name',
		'city_name',
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
	),
)); ?>
