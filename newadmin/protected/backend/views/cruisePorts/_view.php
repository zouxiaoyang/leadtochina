<?php
/* @var $this CruisePortsController */
/* @var $data CruisePorts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cityName')); ?>:</b>
	<?php echo CHtml::encode($data->cityName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portIntro')); ?>:</b>
	<?php echo CHtml::encode($data->portIntro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tourIds')); ?>:</b>
	<?php echo CHtml::encode($data->tourIds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sceneryIds')); ?>:</b>
	<?php echo CHtml::encode($data->sceneryIds); ?>
	<br />


</div>