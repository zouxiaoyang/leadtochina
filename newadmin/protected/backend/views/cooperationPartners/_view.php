<?php
/* @var $this CooperationPartnersController */
/* @var $data CooperationPartners */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_type')); ?>:</b>
	<?php echo CHtml::encode($data->company_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compnay_name')); ?>:</b>
	<?php echo CHtml::encode($data->compnay_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax_num')); ?>:</b>
	<?php echo CHtml::encode($data->fax_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('other_request')); ?>:</b>
	<?php echo CHtml::encode($data->other_request); ?>
	<br />

	*/ ?>

</div>