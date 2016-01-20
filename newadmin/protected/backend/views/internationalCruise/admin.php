<?php
/* @var $this InternationalCruiseController */
/* @var $model InternationalCruise */

$this->breadcrumbs=array(
	'International Cruises'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表InternationalCruise', 'url'=>array('index')),
  array('label'=>'新建InternationalCruise', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('international-cruise-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
// $pager->pageSize=3;
?>

<h1>管理 International Cruises</h1>

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
	'id'=>'international-cruise-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'sort',
		//'intro',
		//'schedule',
        array('name'=>'status','value'=>'InternationalCruise::$status_list[$data->status]'),
        array(
			'header'=>'暂停/启用',
			'class'=>'CButtonColumn',
			'template'=>'{addPost}',
			'buttons'=>array(
				'addPost'=>array(
					'label'    => '暂停/启用',
					'url'    => 'Yii::app()->createUrl("internationalCruise/editStatus", array("id" =>$data->id,"status"=>$data->status))' // 可以传参
				)
			)
		),
		array(
        	'header'=>'Excursions',
          'class'=>'CButtonColumn',
          'template'=>'{addPost}',
          'buttons'=>array(
              'addPost'=>array(
                     'label'    => 'Cruise Excursions',
                      'url'    => 'Yii::app()->createUrl("internationalCruiseChinaExcursions/admin", array("cid" => $data->id))' // 可以传参
                  )
          )
    ),array(
        	'header'=>'CruisePortType',
          'class'=>'CButtonColumn',
          'template'=>'{addPost}',
          'buttons'=>array(
              'addPost'=>array(
                     'label'    => 'Cruise Port Type',
                      'url'    => 'Yii::app()->createUrl("CruisePorstType/admin", array("cid" => $data->id))' // 可以传参
                  )
          )
    ),
    array(
			'class'=>'CButtonColumn',
		),
	),
));?>
