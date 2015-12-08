<?php
/* @var $this CruiseController */
/* @var $data Cruise */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruise_name')); ?>:</b>
	<?php echo CHtml::encode($data->cruise_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_built')); ?>:</b>
	<?php echo CHtml::encode($data->year_built); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_passengers')); ?>:</b>
	<?php echo CHtml::encode($data->total_passengers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('crew')); ?>:</b>
	<?php echo CHtml::encode($data->crew); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('width')); ?>:</b>
	<?php echo CHtml::encode($data->width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uphighprice')); ?>:</b>
	<?php echo CHtml::encode($data->uphighprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passenger_decks')); ?>:</b>
	<?php echo CHtml::encode($data->passenger_decks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cruise_grade')); ?>:</b>
	<?php echo CHtml::encode($data->cruise_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uplink')); ?>:</b>
	<?php echo CHtml::encode($data->uplink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('down')); ?>:</b>
	<?php echo CHtml::encode($data->down); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment')); ?>:</b>
	<?php echo CHtml::encode($data->equipment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('introduction')); ?>:</b>
	<?php echo CHtml::encode($data->introduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filedir')); ?>:</b>
	<?php echo CHtml::encode($data->filedir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufile')); ?>:</b>
	<?php echo CHtml::encode($data->ufile); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
	<?php echo CHtml::encode($data->published); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uplowprice')); ?>:</b>
	<?php echo CHtml::encode($data->uplowprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('downlowprice')); ?>:</b>
	<?php echo CHtml::encode($data->downlowprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('downhighprice')); ?>:</b>
	<?php echo CHtml::encode($data->downhighprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upcity')); ?>:</b>
	<?php echo CHtml::encode($data->upcity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('downcity')); ?>:</b>
	<?php echo CHtml::encode($data->downcity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	*/ ?>

</div>