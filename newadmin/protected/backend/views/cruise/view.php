<?php
/* @var $this CruiseController */
/* @var $model Cruise */

$this->breadcrumbs=array(
	'Cruises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表Cruise', 'url'=>array('index')),
	array('label'=>'新建Cruise', 'url'=>array('create')),
	array('label'=>'修改Cruise', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Cruise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理Cruise', 'url'=>array('admin')),
);
?>

<h1>查看 Cruise #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
  'attributes'=>array(
		'id',
		'cruise_name',
    array('name'=>'category','value'=>Cruise::$category[$model->category]),
		'year_built',
		'total_passengers',
		'crew',
		'length',
		'width',
		
		'passenger_decks',
		array('name'=>'cruise_grade','value'=>Cruise::$grade[$model->cruise_grade]),
		//'uplink',
		//'down',
		array('name'=>'equipment','type'=>'raw'),
    array('name'=>'introduction','type'=>'raw'),
		'seo_title',
		'seo_key',
		'seo_description',
		//'published',
		'uphighprice',
		'uplowprice',
		'downlowprice',
		'downhighprice',
		array('name'=>'upcity','value'=>Cruise::$upCityArr[$model->upcity]),
		array('name'=>'up_week','value'=>Cruise::$weekDays[$model->up_week]),
    
    array('name'=>'downcity','value'=>Cruise::$downCityArr[$model->downcity]),
    array('name'=>'down_week','value'=>Cruise::$weekDays[$model->down_week]),
    array('name'=>'ufile','type'=>'raw','value'=>CHtml::image(ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$model->ufile, '220x235'),'')),
		'index_recommend',
    ),
)); ?>
