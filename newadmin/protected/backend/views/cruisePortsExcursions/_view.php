<?php
/* @var $this CruisePortsExcursionsController */
/* @var $data CruisePortsExcursions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('schedule')); ?>:</b>
	<?php echo CHtml::encode($data->schedule); ?>
	<br />
-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_ids')); ?>:</b>
	<?php echo CHtml::encode($data->tour_ids); ?>
	<br />


</div>