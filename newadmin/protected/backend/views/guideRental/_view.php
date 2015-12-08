<?php
/* @var $this GuideRentalController */
/* @var $data Rental */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alt')); ?>:</b>
	<?php echo CHtml::encode($data->alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_serialize')); ?>:</b>
	<?php echo CHtml::encode($data->price_serialize); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rental_type')); ?>:</b>
	<?php echo CHtml::encode($data->rental_type); ?>
	<br />


</div>