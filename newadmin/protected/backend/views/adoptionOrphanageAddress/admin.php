<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */

$this->breadcrumbs=array(
	'Adoption Orphanage Addresses'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表AdoptionOrphanageAddress', 'url'=>array('index')),
  array('label'=>'新建AdoptionOrphanageAddress', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('adoption-orphanage-address-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Adoption Orphanage Addresses</h1>

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
	'id'=>'adoption-orphanage-address-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'provinceid',
		
		'province_name',
		'orphanage_name',
		'address',
		'postal_code',
		/*
		'tel',
		*/
		array(
        'class'=>'CButtonColumn',
        'template'=>'{addPost}',
        'buttons'=>array(
                'addPost'=>array(
                       'label'    => '批量上传图片',
                        'url'    => 'Yii::app()->createUrl("adoptionOrphanageAddressPic/upload", array("oid" => $data->id))' // 可以传参
                    )
            )
    ),
    array(
        'class'=>'CButtonColumn',
        'template'=>'{addPost}',
        'buttons'=>array(
                'addPost'=>array(
                       'label'    => '游记管理',
                        'url'    => 'Yii::app()->createUrl("adoptionOrphanageAddressArticle/admin", array("aid" => $data->id))' // 可以传参
                    )
            )
    ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
