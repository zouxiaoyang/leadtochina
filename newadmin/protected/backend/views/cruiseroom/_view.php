<?php
/* @var $this CruiseroomController */
/* @var $data Cruiseroom */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('breakfast')); ?>:</b>
	<?php echo CHtml::encode($data->breakfast); ?>
	<br />


</div>