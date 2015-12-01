<?php
/* @var $this PackageController */
/* @var $data Package */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_id')); ?>:</b>
	<?php echo CHtml::encode($data->package_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province_id')); ?>:</b>
	<?php echo CHtml::encode($data->province_id); ?>
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