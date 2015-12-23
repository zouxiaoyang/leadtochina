<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $data AdoptionOrphanageAddress */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provinceid')); ?>:</b>
	<?php echo CHtml::encode($data->provinceid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province_name')); ?>:</b>
	<?php echo CHtml::encode($data->province_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orphanage_name')); ?>:</b>
	<?php echo CHtml::encode($data->orphanage_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->postal_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_title_adoption')); ?>:</b>
	<?php echo CHtml::encode($data->seo_title_adoption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_keyword_adoption')); ?>:</b>
	<?php echo CHtml::encode($data->seo_keyword_adoption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seo_description_adoption')); ?>:</b>
	<?php echo CHtml::encode($data->seo_description_adoption); ?>
	<br />

</div>