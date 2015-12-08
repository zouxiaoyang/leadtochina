<?php
/* @var $this JosCosHotelController */
/* @var $data JosCosHotel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hotel_addr')); ?>:</b>
	<?php echo CHtml::encode($data->hotel_addr); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_name')); ?>:</b>
	<?php echo CHtml::encode($data->city_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('districtid')); ?>:</b>
	<?php echo CHtml::encode($data->districtid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hotel_grade')); ?>:</b>
	<?php echo CHtml::encode($data->hotel_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classica')); ?>:</b>
	<?php echo CHtml::encode($data->classica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('standard')); ?>:</b>
	<?php echo CHtml::encode($data->standard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('double')); ?>:</b>
	<?php echo CHtml::encode($data->double); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service')); ?>:</b>
	<?php echo CHtml::encode($data->service); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('food')); ?>:</b>
	<?php echo CHtml::encode($data->food); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brandid')); ?>:</b>
	<?php echo CHtml::encode($data->brandid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surrounding')); ?>:</b>
	<?php echo CHtml::encode($data->surrounding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('features')); ?>:</b>
	<?php echo CHtml::encode($data->features); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufile')); ?>:</b>
	<?php echo CHtml::encode($data->ufile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filedir')); ?>:</b>
	<?php echo CHtml::encode($data->filedir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lon')); ?>:</b>
	<?php echo CHtml::encode($data->lon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('hot')); ?>:</b>
	<?php echo CHtml::encode($data->hot); ?>
	<br />

	*/ ?>

</div>