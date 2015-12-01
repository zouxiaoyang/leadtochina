<?php
/* @var $this TourItineraryController */
/* @var $data TourItinerary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($data->tid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('days')); ?>:</b>
	<?php echo CHtml::encode($data->days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('today_date')); ?>:</b>
	<?php echo CHtml::encode($data->today_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_transport')); ?>:</b>
	<?php echo CHtml::encode($data->place_transport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accommodation')); ?>:</b>
	<?php echo CHtml::encode($data->accommodation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('today_activities')); ?>:</b>
	<?php echo CHtml::encode($data->today_activities); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('meals')); ?>:</b>
	<?php echo CHtml::encode($data->meals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scenery_ids')); ?>:</b>
	<?php echo CHtml::encode($data->scenery_ids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>