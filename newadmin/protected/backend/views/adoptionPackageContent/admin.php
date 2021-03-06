<?php
/* @var $this AdoptionOrphanageAddressArticleController */
/* @var $model AdoptionOrphanageAddressArticle */

$this->breadcrumbs=array(
	'Adoption Orphanage Address Articles'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'管理列表', 'url'=>array('adoptionOrphanageAddress/admin')),
  array('label'=>'添加行程', 'url'=>array('create&aid='.$_GET['aid'])),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('adoption-orphanage-address-article-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Adoption Orphanage Address Articles</h1>

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
	'id'=>'adoption-orphanage-address-article-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'columns'=>array(
		'id',
		//'aid',
		//'pacakage_id',
		'name',
		'description',
		//'pic',
		// 'date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
