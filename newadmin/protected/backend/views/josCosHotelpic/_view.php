<?php
/* @var $this JosCosHotelpicController */
/* @var $data JosCosHotelpic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hotelid')); ?>:</b>
	<?php echo CHtml::encode($data->hotelid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_alt')); ?>:</b>
	<?php echo CHtml::encode($data->pic_alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_dir')); ?>:</b>
	<?php echo CHtml::encode($data->pic_dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recommend')); ?>:</b>
	<?php echo CHtml::encode($data->recommend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_path')); ?>:</b>
	<?php echo CHtml::encode($data->pic_path); ?>
	<br />


</div>