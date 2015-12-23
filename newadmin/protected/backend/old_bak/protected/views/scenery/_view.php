<?php
/* @var $this SceneryController */
/* @var $data Scenery */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('province_name')); ?>:</b>
	<?php echo CHtml::encode($data->province_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('browse_time')); ?>:</b>
	<?php echo CHtml::encode($data->browse_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_name')); ?>:</b>
	<?php echo CHtml::encode($data->city_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('districtid')); ?>:</b>
	<?php echo CHtml::encode($data->districtid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufile')); ?>:</b>
	<?php echo CHtml::encode($data->ufile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filedir')); ?>:</b>
	<?php echo CHtml::encode($data->filedir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
	<?php echo CHtml::encode($data->published); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hot')); ?>:</b>
	<?php echo CHtml::encode($data->hot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_route')); ?>:</b>
	<?php echo CHtml::encode($data->update_route); ?>
	<br />

	*/ ?>

</div>