<?php
/* @var $this CruisepicController */
/* @var $data Cruisepic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruiseid')); ?>:</b>
	<?php echo CHtml::encode($data->cruiseid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_alt')); ?>:</b>
	<?php echo CHtml::encode($data->pic_alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_dir')); ?>:</b>
	<?php echo CHtml::encode($data->pic_dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_path')); ?>:</b>
	<?php echo CHtml::encode($data->pic_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />


</div>