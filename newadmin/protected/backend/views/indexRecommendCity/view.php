<?php
/* @var $this IndexRecommendCityController */
/* @var $model IndexRecommendCity */

$this->breadcrumbs=array(
	'Index Recommend Cities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表IndexRecommendCity', 'url'=>array('index')),
	array('label'=>'新建IndexRecommendCity', 'url'=>array('create')),
	array('label'=>'修改IndexRecommendCity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除IndexRecommendCity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理IndexRecommendCity', 'url'=>array('admin')),
);
?>

<h1>查看 IndexRecommendCity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
    'month',
		'city_name',
		'url',
		'description',
		'pic',
	),
)); ?>
