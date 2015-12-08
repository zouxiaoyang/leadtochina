<?php
/* @var $this OrphanageController */
/* @var $data Orphanage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provinceid')); ?>:</b>
	<?php echo CHtml::encode($data->provinceid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arranged_info')); ?>:</b>
	<?php echo CHtml::encode($data->arranged_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approval_info')); ?>:</b>
	<?php echo CHtml::encode($data->approval_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fee_info')); ?>:</b>
	<?php echo CHtml::encode($data->fee_info); ?>
	<br />


</div>