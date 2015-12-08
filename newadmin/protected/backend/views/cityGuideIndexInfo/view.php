<?php
/* @var $this CityGuideIndexInfoController */
/* @var $model CityGuideIndexInfo */

$this->breadcrumbs=array(
	'City Guide Index Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表CityGuideIndexInfo', 'url'=>array('index')),
	array('label'=>'新建CityGuideIndexInfo', 'url'=>array('create')),
	array('label'=>'修改CityGuideIndexInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除CityGuideIndexInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理CityGuideIndexInfo', 'url'=>array('admin')),
);
?>

<h1>查看 CityGuideIndexInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'provinceid',
		'cityid',
		'figure_img',
		'figure_desc',
		'transportation_img',
		'transportation_desc',
		'attractions_info',
	),
)); ?>
