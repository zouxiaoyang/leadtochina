<?php
/* @var $this JosTotalOrderController */
/* @var $model JosTotalOrder */

$this->breadcrumbs=array(
	'Jos Total Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'列表JosTotalOrder', 'url'=>array('index')),
	array('label'=>'新建JosTotalOrder', 'url'=>array('create')),
	array('label'=>'修改JosTotalOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除JosTotalOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理JosTotalOrder', 'url'=>array('admin')),
);
?>

<h1>查看 JosTotalOrder #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'orderNO',
		'executor',
		'full_name',
		'gender',
		'nationality',
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
	),
)); ?>
