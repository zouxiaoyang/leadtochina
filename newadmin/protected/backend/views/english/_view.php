<?php
/* @var $this EnglishController */
/* @var $data English */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('play_url')); ?>:</b>
	<?php echo CHtml::encode($data->play_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('download_url')); ?>:</b>
	<?php echo CHtml::encode($data->download_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('english_text')); ?>:</b>
	<?php echo CHtml::encode($data->english_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chinese_content')); ?>:</b>
	<?php echo CHtml::encode($data->chinese_content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jifen')); ?>:</b>
	<?php echo CHtml::encode($data->jifen); ?>
	<br />

	*/ ?>

</div>