<?php
/* @var $this CruisecycleController */
/* @var $data Cruisecycle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruiseid')); ?>:</b>
	<?php echo CHtml::encode($data->cruiseid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activition')); ?>:</b>
	<?php echo CHtml::encode($data->activition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upOrdown')); ?>:</b>
	<?php echo CHtml::encode($data->upOrdown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruise_name')); ?>:</b>
	<?php echo CHtml::encode($data->cruise_name); ?>
	<br />


</div>