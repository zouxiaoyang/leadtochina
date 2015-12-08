<?php
/* @var $this NewsletterController */
/* @var $data Newsletter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('top_tour_cities')); ?>:</b>
	<?php echo CHtml::encode($data->top_tour_cities); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner')); ?>:</b>
	<?php echo CHtml::encode($data->banner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('more_china_tours')); ?>:</b>
	<?php echo CHtml::encode($data->more_china_tours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('more_banner')); ?>:</b>
	<?php echo CHtml::encode($data->more_banner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme_tours')); ?>:</b>
	<?php echo CHtml::encode($data->theme_tours); ?>
	<br />


</div>