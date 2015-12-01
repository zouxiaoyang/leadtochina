<?php
/* @var $this TrafficController */
/* @var $data Traffic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($data->tid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depart_time')); ?>:</b>
	<?php echo CHtml::encode($data->depart_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depart_city')); ?>:</b>
	<?php echo CHtml::encode($data->depart_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrive_time')); ?>:</b>
	<?php echo CHtml::encode($data->arrive_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrive_city')); ?>:</b>
	<?php echo CHtml::encode($data->arrive_city); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('flight_train_info')); ?>:</b>
	<?php echo CHtml::encode($data->flight_train_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_tickets')); ?>:</b>
	<?php echo CHtml::encode($data->e_tickets); ?>
	<br />

	*/ ?>

</div>