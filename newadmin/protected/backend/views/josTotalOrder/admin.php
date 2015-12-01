<?php
/* @var $this JosTotalOrderController */
/* @var $model JosTotalOrder */

$this->breadcrumbs=array(
	'Jos Total Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'列表JosTotalOrder', 'url'=>array('index')),
  array('label'=>'新建JosTotalOrder', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jos-total-order-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理 Jos Total Orders</h1>

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
	'id'=>'jos-total-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'orderNO',
		'executor',
		'full_name',
		'gender',
		'nationality',
		/*
		'packagecode',
		'email',
		'other_email',
		'phone',
		'addr',
		'adults',
		'children',
		'infant',
		'entry_city',
		'entry_date',
		'duration',
		'exit_city',
		'other_travelinfo',
		'url_referer',
		'submit_source',
		'user_ip',
		'country_id',
		'dateline',
		'order_state',
		'state_description',
		'ordertype',
		'end_date',
		'payment_method',
		'passenger_info',
		'discount_type',
		'order_purpose',
		'total_price',
		'final_price',
		'checked_out',
		'state',
		'is_activity',
		'is_read',
		'destination',
		'other_message',
		'send_email_flag',
		'send_email_count',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
