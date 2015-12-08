<?php
/* @var $this JosTotalOrderController */
/* @var $data JosTotalOrder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderNO')); ?>:</b>
	<?php echo CHtml::encode($data->orderNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('executor')); ?>:</b>
	<?php echo CHtml::encode($data->executor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality')); ?>:</b>
	<?php echo CHtml::encode($data->nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('packagecode')); ?>:</b>
	<?php echo CHtml::encode($data->packagecode); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_email')); ?>:</b>
	<?php echo CHtml::encode($data->other_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addr')); ?>:</b>
	<?php echo CHtml::encode($data->addr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adults')); ?>:</b>
	<?php echo CHtml::encode($data->adults); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('children')); ?>:</b>
	<?php echo CHtml::encode($data->children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('infant')); ?>:</b>
	<?php echo CHtml::encode($data->infant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entry_city')); ?>:</b>
	<?php echo CHtml::encode($data->entry_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entry_date')); ?>:</b>
	<?php echo CHtml::encode($data->entry_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exit_city')); ?>:</b>
	<?php echo CHtml::encode($data->exit_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_travelinfo')); ?>:</b>
	<?php echo CHtml::encode($data->other_travelinfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_referer')); ?>:</b>
	<?php echo CHtml::encode($data->url_referer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submit_source')); ?>:</b>
	<?php echo CHtml::encode($data->submit_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_ip')); ?>:</b>
	<?php echo CHtml::encode($data->user_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
	<?php echo CHtml::encode($data->country_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateline')); ?>:</b>
	<?php echo CHtml::encode($data->dateline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_state')); ?>:</b>
	<?php echo CHtml::encode($data->order_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_description')); ?>:</b>
	<?php echo CHtml::encode($data->state_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordertype')); ?>:</b>
	<?php echo CHtml::encode($data->ordertype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_method')); ?>:</b>
	<?php echo CHtml::encode($data->payment_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passenger_info')); ?>:</b>
	<?php echo CHtml::encode($data->passenger_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_type')); ?>:</b>
	<?php echo CHtml::encode($data->discount_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_purpose')); ?>:</b>
	<?php echo CHtml::encode($data->order_purpose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_price')); ?>:</b>
	<?php echo CHtml::encode($data->total_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('final_price')); ?>:</b>
	<?php echo CHtml::encode($data->final_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checked_out')); ?>:</b>
	<?php echo CHtml::encode($data->checked_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_activity')); ?>:</b>
	<?php echo CHtml::encode($data->is_activity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_read')); ?>:</b>
	<?php echo CHtml::encode($data->is_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destination')); ?>:</b>
	<?php echo CHtml::encode($data->destination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_message')); ?>:</b>
	<?php echo CHtml::encode($data->other_message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_email_flag')); ?>:</b>
	<?php echo CHtml::encode($data->send_email_flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_email_count')); ?>:</b>
	<?php echo CHtml::encode($data->send_email_count); ?>
	<br />

	*/ ?>

</div>