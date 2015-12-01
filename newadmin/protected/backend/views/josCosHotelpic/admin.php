<?php
/* @var $this JosCosHotelpicController */
/* @var $model JosCosHotelpic */

$this->breadcrumbs=array(
	'Jos Cos Hotelpics'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表JosCosHotelpic', 'url'=>array('index')),
  array('label'=>'新建JosCosHotelpic', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jos-cos-hotelpic-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Jos Cos Hotelpics</h1>

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
	'id'=>'jos-cos-hotelpic-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'hotelid',
		array('name'=>'hotelid','value'=>'JosCosHotel::model()->findByPk($data->hotelid)->name'),
		'pic_alt',
		//'pic_dir',
		'pic_path',
		//'recommend',
		array('name'=>'recommend','value'=>'$data->recommend==0?"非推荐":"推荐"'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
