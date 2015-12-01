<?php
/* @var $this PackageController */
/* @var $model Package */

$this->breadcrumbs=array(
	'Packages'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表Package', 'url'=>array('index')),
  array('label'=>'新建Package', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('package-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Packages</h1>

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
	'id'=>'package-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'package_id',
		//'cat_id',
		array('name'=>'cat_id','value'=>'$data->cat_id==0?\'/\':AdoptionPackage::$theme_category["title"][$data->cat_id]'),
		//'province_id',
		array(
		'name'=>'province_id',		
		'value'=>'$data->province_id==0?\'/\':Province::model()->findByPk($data->province_id)->name'
		),
		array(
			'header'=>'操作',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
