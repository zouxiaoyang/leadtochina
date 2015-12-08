<?php
/* @var $this TourInfoController */
/* @var $data TourInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tracking_code')); ?>:</b>
	<?php echo CHtml::encode($data->tracking_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('travel_advisor')); ?>:</b>
	<?php echo CHtml::encode($data->travel_advisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_days')); ?>:</b>
	<?php echo CHtml::encode($data->tour_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('simple_itinerary')); ?>:</b>
	<?php echo CHtml::encode($data->simple_itinerary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quotation')); ?>:</b>
	<?php echo CHtml::encode($data->quotation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>