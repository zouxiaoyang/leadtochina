<?php
/* @var $this ToursPackageController */
/* @var $model ToursPackage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tours-package-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'package_type'); ?>
		<?php echo $form->textField($model,'package_type'); ?>
		<?php echo $form->error($model,'package_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_parentid'); ?>
		<?php echo $form->textField($model,'category_parentid'); ?>
		<?php echo $form->error($model,'category_parentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categorieid_str'); ?>
		<?php echo $form->textField($model,'categorieid_str'); ?>
		<?php echo $form->error($model,'categorieid_str'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chinatours_cat_id'); ?>
		<?php echo $form->textField($model,'chinatours_cat_id'); ?>
		<?php echo $form->error($model,'chinatours_cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_code'); ?>
		<?php echo $form->textField($model,'package_code',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'package_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categorie_name_str'); ?>
		<?php echo $form->textField($model,'categorie_name_str',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'categorie_name_str'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_grade'); ?>
		<?php echo $form->textField($model,'package_grade',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'package_grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route'); ?>
		<?php echo $form->textField($model,'route',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'route'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_tour_type'); ?>
		<?php echo $form->textField($model,'package_tour_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'package_tour_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_intro'); ?>
		<?php echo $form->textField($model,'tour_intro',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tour_intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'targets'); ?>
		<?php echo $form->textField($model,'targets',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'targets'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_Intro'); ?>
		<?php echo $form->textArea($model,'route_Intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'route_Intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departs'); ?>
		<?php echo $form->textField($model,'departs',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'departs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price1'); ?>
		<?php echo $form->textField($model,'price1'); ?>
		<?php echo $form->error($model,'price1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_low'); ?>
		<?php echo $form->textField($model,'price_low'); ?>
		<?php echo $form->error($model,'price_low'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_num'); ?>
		<?php echo $form->textField($model,'price_num'); ?>
		<?php echo $form->error($model,'price_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_serialize'); ?>
		<?php echo $form->textArea($model,'price_serialize',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'price_serialize'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_serialize_1'); ?>
		<?php echo $form->textArea($model,'price_serialize_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'price_serialize_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_yuan'); ?>
		<?php echo $form->textField($model,'price_yuan'); ?>
		<?php echo $form->error($model,'price_yuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'days'); ?>
		<?php echo $form->textField($model,'days'); ?>
		<?php echo $form->error($model,'days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ufile'); ?>
		<?php echo $form->textField($model,'ufile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ufile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_beijing_top'); ?>
		<?php echo $form->textField($model,'pic_beijing_top',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pic_beijing_top'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_big'); ?>
		<?php echo $form->textField($model,'pic_big',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pic_big'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_big_alt'); ?>
		<?php echo $form->textField($model,'pic_big_alt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pic_big_alt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filedir'); ?>
		<?php echo $form->textField($model,'filedir',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'filedir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_include'); ?>
		<?php echo $form->textArea($model,'price_include',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'price_include'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_exclude'); ?>
		<?php echo $form->textArea($model,'price_exclude',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'price_exclude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tips'); ?>
		<?php echo $form->textArea($model,'tips',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tips'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_key'); ?>
		<?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_description'); ?>
		<?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attractions'); ?>
		<?php echo $form->textField($model,'attractions',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attractions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promotion'); ?>
		<?php echo $form->textField($model,'promotion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'promotion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommand_reason'); ?>
		<?php echo $form->textArea($model,'recommand_reason',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'recommand_reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'published'); ?>
		<?php echo $form->textField($model,'published'); ?>
		<?php echo $form->error($model,'published'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_route'); ?>
		<?php echo $form->textField($model,'update_route'); ?>
		<?php echo $form->error($model,'update_route'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
		<?php echo $form->error($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot_tour'); ?>
		<?php echo $form->textField($model,'hot_tour'); ?>
		<?php echo $form->error($model,'hot_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reviews'); ?>
		<?php echo $form->textField($model,'reviews'); ?>
		<?php echo $form->error($model,'reviews'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_half_day'); ?>
		<?php echo $form->textField($model,'is_half_day'); ?>
		<?php echo $form->error($model,'is_half_day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_type'); ?>
		<?php echo $form->textField($model,'tour_type'); ?>
		<?php echo $form->error($model,'tour_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beijing_tour_type'); ?>
		<?php echo $form->textField($model,'beijing_tour_type'); ?>
		<?php echo $form->error($model,'beijing_tour_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vehicle_type'); ?>
		<?php echo $form->textField($model,'vehicle_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'vehicle_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destination_addr'); ?>
		<?php echo $form->textField($model,'destination_addr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'destination_addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_category'); ?>
		<?php echo $form->textField($model,'one_category',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'one_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'two_category'); ?>
		<?php echo $form->textField($model,'two_category',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'two_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'by_group'); ?>
		<?php echo $form->textField($model,'by_group',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'by_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_tagids'); ?>
		<?php echo $form->textField($model,'tour_tagids',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tour_tagids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_subtag_ids'); ?>
		<?php echo $form->textField($model,'tour_subtag_ids',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tour_subtag_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theme'); ?>
		<?php echo $form->textField($model,'theme',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'highlight'); ?>
		<?php echo $form->textField($model,'highlight',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'highlight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'season'); ?>
		<?php echo $form->textField($model,'season'); ?>
		<?php echo $form->error($model,'season'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fnum'); ?>
		<?php echo $form->textField($model,'fnum'); ?>
		<?php echo $form->error($model,'fnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
		<?php echo $form->error($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'top'); ?>
		<?php echo $form->textField($model,'top'); ?>
		<?php echo $form->error($model,'top'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommend'); ?>
		<?php echo $form->textField($model,'recommend'); ?>
		<?php echo $form->error($model,'recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_recommend'); ?>
		<?php echo $form->textField($model,'city_recommend'); ?>
		<?php echo $form->error($model,'city_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'index_recommend'); ?>
		<?php echo $form->textField($model,'index_recommend'); ?>
		<?php echo $form->error($model,'index_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'index_recommend_order'); ?>
		<?php echo $form->textField($model,'index_recommend_order'); ?>
		<?php echo $form->error($model,'index_recommend_order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->