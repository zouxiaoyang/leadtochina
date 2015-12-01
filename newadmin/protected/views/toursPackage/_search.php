<?php
/* @var $this ToursPackageController */
/* @var $model ToursPackage */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_type'); ?>
		<?php echo $form->textField($model,'package_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_parentid'); ?>
		<?php echo $form->textField($model,'category_parentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categorieid_str'); ?>
		<?php echo $form->textField($model,'categorieid_str'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chinatours_cat_id'); ?>
		<?php echo $form->textField($model,'chinatours_cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_code'); ?>
		<?php echo $form->textField($model,'package_code',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categorie_name_str'); ?>
		<?php echo $form->textField($model,'categorie_name_str',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_grade'); ?>
		<?php echo $form->textField($model,'package_grade',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route'); ?>
		<?php echo $form->textField($model,'route',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'package_tour_type'); ?>
		<?php echo $form->textField($model,'package_tour_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tour_intro'); ?>
		<?php echo $form->textField($model,'tour_intro',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'targets'); ?>
		<?php echo $form->textField($model,'targets',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_Intro'); ?>
		<?php echo $form->textArea($model,'route_Intro',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departs'); ?>
		<?php echo $form->textField($model,'departs',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price1'); ?>
		<?php echo $form->textField($model,'price1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_low'); ?>
		<?php echo $form->textField($model,'price_low'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_num'); ?>
		<?php echo $form->textField($model,'price_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_serialize'); ?>
		<?php echo $form->textArea($model,'price_serialize',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_serialize_1'); ?>
		<?php echo $form->textArea($model,'price_serialize_1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_yuan'); ?>
		<?php echo $form->textField($model,'price_yuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'days'); ?>
		<?php echo $form->textField($model,'days'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ufile'); ?>
		<?php echo $form->textField($model,'ufile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic_beijing_top'); ?>
		<?php echo $form->textField($model,'pic_beijing_top',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic_big'); ?>
		<?php echo $form->textField($model,'pic_big',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic_big_alt'); ?>
		<?php echo $form->textField($model,'pic_big_alt',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filedir'); ?>
		<?php echo $form->textField($model,'filedir',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_include'); ?>
		<?php echo $form->textArea($model,'price_include',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_exclude'); ?>
		<?php echo $form->textArea($model,'price_exclude',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tips'); ?>
		<?php echo $form->textArea($model,'tips',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_key'); ?>
		<?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_description'); ?>
		<?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attractions'); ?>
		<?php echo $form->textField($model,'attractions',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promotion'); ?>
		<?php echo $form->textField($model,'promotion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recommand_reason'); ?>
		<?php echo $form->textArea($model,'recommand_reason',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'published'); ?>
		<?php echo $form->textField($model,'published'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_route'); ?>
		<?php echo $form->textField($model,'update_route'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hot_tour'); ?>
		<?php echo $form->textField($model,'hot_tour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reviews'); ?>
		<?php echo $form->textField($model,'reviews'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_half_day'); ?>
		<?php echo $form->textField($model,'is_half_day'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tour_type'); ?>
		<?php echo $form->textField($model,'tour_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beijing_tour_type'); ?>
		<?php echo $form->textField($model,'beijing_tour_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicle_type'); ?>
		<?php echo $form->textField($model,'vehicle_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destination_addr'); ?>
		<?php echo $form->textField($model,'destination_addr',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'one_category'); ?>
		<?php echo $form->textField($model,'one_category',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'two_category'); ?>
		<?php echo $form->textField($model,'two_category',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'by_group'); ?>
		<?php echo $form->textField($model,'by_group',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tour_tagids'); ?>
		<?php echo $form->textField($model,'tour_tagids',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tour_subtag_ids'); ?>
		<?php echo $form->textField($model,'tour_subtag_ids',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'theme'); ?>
		<?php echo $form->textField($model,'theme',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'highlight'); ?>
		<?php echo $form->textField($model,'highlight',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'season'); ?>
		<?php echo $form->textField($model,'season'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fnum'); ?>
		<?php echo $form->textField($model,'fnum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'top'); ?>
		<?php echo $form->textField($model,'top'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recommend'); ?>
		<?php echo $form->textField($model,'recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_recommend'); ?>
		<?php echo $form->textField($model,'city_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'index_recommend'); ?>
		<?php echo $form->textField($model,'index_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'index_recommend_order'); ?>
		<?php echo $form->textField($model,'index_recommend_order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->