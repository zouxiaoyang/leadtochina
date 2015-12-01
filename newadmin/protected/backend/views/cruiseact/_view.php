<?php
/* @var $this CruiseactController */
/* @var $data Cruiseact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruiseid')); ?>:</b>
	<?php echo CHtml::encode($data->cruiseid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruise_name')); ?>:</b>
	<?php echo CHtml::encode($data->cruise_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruise_date')); ?>:</b>
	<?php echo CHtml::encode($data->cruise_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month')); ?>:</b>
	<?php echo CHtml::encode($data->month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('days')); ?>:</b>
	<?php echo CHtml::encode($data->days); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('upOrdown')); ?>:</b>
	<?php echo CHtml::encode($data->upOrdown); ?>
	<br />

	*/ ?>

</div>