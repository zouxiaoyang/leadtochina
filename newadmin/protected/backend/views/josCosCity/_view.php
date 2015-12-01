<?php
/* @var $this JosCosCityController */
/* @var $data JosCosCity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provinceid')); ?>:</b>
	<?php echo CHtml::encode($data->provinceid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shortname')); ?>:</b>
	<?php echo CHtml::encode($data->shortname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traffic')); ?>:</b>
	<?php echo CHtml::encode($data->traffic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weather')); ?>:</b>
	<?php echo CHtml::encode($data->weather); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shopping')); ?>:</b>
	<?php echo CHtml::encode($data->shopping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tips')); ?>:</b>
	<?php echo CHtml::encode($data->tips); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hot')); ?>:</b>
	<?php echo CHtml::encode($data->hot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufile')); ?>:</b>
	<?php echo CHtml::encode($data->ufile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filedir')); ?>:</b>
	<?php echo CHtml::encode($data->filedir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('showroder')); ?>:</b>
	<?php echo CHtml::encode($data->showroder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_title')); ?>:</b>
	<?php echo CHtml::encode($data->seo_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_key')); ?>:</b>
	<?php echo CHtml::encode($data->seo_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_description')); ?>:</b>
	<?php echo CHtml::encode($data->seo_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isupdate')); ?>:</b>
	<?php echo CHtml::encode($data->isupdate); ?>
	<br />

	*/ ?>

</div>