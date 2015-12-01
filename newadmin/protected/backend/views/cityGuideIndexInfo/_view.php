<?php
/* @var $this CityGuideIndexInfoController */
/* @var $data CityGuideIndexInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provinceid')); ?>:</b>
	<?php echo CHtml::encode($data->provinceid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cityid')); ?>:</b>
	<?php echo CHtml::encode($data->cityid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('figure_img')); ?>:</b>
	<?php echo CHtml::encode($data->figure_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('figure_desc')); ?>:</b>
	<?php echo CHtml::encode($data->figure_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transportation_img')); ?>:</b>
	<?php echo CHtml::encode($data->transportation_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transportation_desc')); ?>:</b>
	<?php echo CHtml::encode($data->transportation_desc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('attractions_info')); ?>:</b>
	<?php echo CHtml::encode($data->attractions_info); ?>
	<br />

	*/ ?>

</div>