<?php
/* @var $this PromotionMonthToursController */
/* @var $data PromotionMonthTours */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month')); ?>:</b>
	<?php echo CHtml::encode($data->month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_ids')); ?>:</b>
	<?php echo CHtml::encode($data->tour_ids); ?>
	<br />


</div>