<?php
/* @var $this ServicesController */
/* @var $data Services */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php echo CHtml::encode($data->city_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('services_name')); ?>:</b>
	<?php echo CHtml::encode($data->services_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_bus')); ?>:</b>
	<?php echo CHtml::encode($data->price_bus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_1')); ?>:</b>
	<?php echo CHtml::encode($data->price_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_2_5')); ?>:</b>
	<?php echo CHtml::encode($data->price_2_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_6_9')); ?>:</b>
	<?php echo CHtml::encode($data->price_6_9); ?>
	<br />


</div>