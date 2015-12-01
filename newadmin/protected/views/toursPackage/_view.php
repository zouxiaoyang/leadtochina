<?php
/* @var $this ToursPackageController */
/* @var $data ToursPackage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_type')); ?>:</b>
	<?php echo CHtml::encode($data->package_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_parentid')); ?>:</b>
	<?php echo CHtml::encode($data->category_parentid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorieid_str')); ?>:</b>
	<?php echo CHtml::encode($data->categorieid_str); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chinatours_cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->chinatours_cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_code')); ?>:</b>
	<?php echo CHtml::encode($data->package_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorie_name_str')); ?>:</b>
	<?php echo CHtml::encode($data->categorie_name_str); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_grade')); ?>:</b>
	<?php echo CHtml::encode($data->package_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route')); ?>:</b>
	<?php echo CHtml::encode($data->route); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_tour_type')); ?>:</b>
	<?php echo CHtml::encode($data->package_tour_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_intro')); ?>:</b>
	<?php echo CHtml::encode($data->tour_intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('targets')); ?>:</b>
	<?php echo CHtml::encode($data->targets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_Intro')); ?>:</b>
	<?php echo CHtml::encode($data->route_Intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departs')); ?>:</b>
	<?php echo CHtml::encode($data->departs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price1')); ?>:</b>
	<?php echo CHtml::encode($data->price1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_low')); ?>:</b>
	<?php echo CHtml::encode($data->price_low); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_num')); ?>:</b>
	<?php echo CHtml::encode($data->price_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_serialize')); ?>:</b>
	<?php echo CHtml::encode($data->price_serialize); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_serialize_1')); ?>:</b>
	<?php echo CHtml::encode($data->price_serialize_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_yuan')); ?>:</b>
	<?php echo CHtml::encode($data->price_yuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('days')); ?>:</b>
	<?php echo CHtml::encode($data->days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufile')); ?>:</b>
	<?php echo CHtml::encode($data->ufile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_beijing_top')); ?>:</b>
	<?php echo CHtml::encode($data->pic_beijing_top); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_big')); ?>:</b>
	<?php echo CHtml::encode($data->pic_big); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_big_alt')); ?>:</b>
	<?php echo CHtml::encode($data->pic_big_alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filedir')); ?>:</b>
	<?php echo CHtml::encode($data->filedir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_include')); ?>:</b>
	<?php echo CHtml::encode($data->price_include); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_exclude')); ?>:</b>
	<?php echo CHtml::encode($data->price_exclude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tips')); ?>:</b>
	<?php echo CHtml::encode($data->tips); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('attractions')); ?>:</b>
	<?php echo CHtml::encode($data->attractions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promotion')); ?>:</b>
	<?php echo CHtml::encode($data->promotion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recommand_reason')); ?>:</b>
	<?php echo CHtml::encode($data->recommand_reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
	<?php echo CHtml::encode($data->published); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_route')); ?>:</b>
	<?php echo CHtml::encode($data->update_route); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hot')); ?>:</b>
	<?php echo CHtml::encode($data->hot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hot_tour')); ?>:</b>
	<?php echo CHtml::encode($data->hot_tour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reviews')); ?>:</b>
	<?php echo CHtml::encode($data->reviews); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_half_day')); ?>:</b>
	<?php echo CHtml::encode($data->is_half_day); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_type')); ?>:</b>
	<?php echo CHtml::encode($data->tour_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beijing_tour_type')); ?>:</b>
	<?php echo CHtml::encode($data->beijing_tour_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_type')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destination_addr')); ?>:</b>
	<?php echo CHtml::encode($data->destination_addr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_category')); ?>:</b>
	<?php echo CHtml::encode($data->one_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('two_category')); ?>:</b>
	<?php echo CHtml::encode($data->two_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('by_group')); ?>:</b>
	<?php echo CHtml::encode($data->by_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_tagids')); ?>:</b>
	<?php echo CHtml::encode($data->tour_tagids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_subtag_ids')); ?>:</b>
	<?php echo CHtml::encode($data->tour_subtag_ids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theme')); ?>:</b>
	<?php echo CHtml::encode($data->theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('highlight')); ?>:</b>
	<?php echo CHtml::encode($data->highlight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season')); ?>:</b>
	<?php echo CHtml::encode($data->season); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fnum')); ?>:</b>
	<?php echo CHtml::encode($data->fnum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('top')); ?>:</b>
	<?php echo CHtml::encode($data->top); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recommend')); ?>:</b>
	<?php echo CHtml::encode($data->recommend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_recommend')); ?>:</b>
	<?php echo CHtml::encode($data->city_recommend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('index_recommend')); ?>:</b>
	<?php echo CHtml::encode($data->index_recommend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('index_recommend_order')); ?>:</b>
	<?php echo CHtml::encode($data->index_recommend_order); ?>
	<br />

	*/ ?>

</div>