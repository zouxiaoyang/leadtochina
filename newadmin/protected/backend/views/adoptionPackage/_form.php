<?php
/* @var $this PackageController */
/* @var $model Package */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'package-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'package_id'); ?>
		<?php echo $form->textField($model,'package_id'); ?>
		<?php echo $form->error($model,'package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model, 'cat_id', AdoptionPackage::$theme_category['title']); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province_id'); ?>
		<?php echo $form->dropDownList($model, 'province_id', Province::getAllProvince())?>
		<?php echo $form->error($model,'province_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'seo_title_adoption'); ?>
		<?php echo $form->textArea($model,'seo_title_adoption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_title_adoption'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'seo_keyword_adoption'); ?>
		<?php echo $form->textArea($model,'seo_keyword_adoption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_keyword_adoption'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'seo_description_adoption'); ?>
		<?php echo $form->textArea($model,'seo_description_adoption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_description_adoption'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->