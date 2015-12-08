<?php
/* @var $this PromotionContentController */
/* @var $model PromotionContent */
/* @var $form CActiveForm */

$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'PromotionContent_content',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promotion-content-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_ids'); ?>
		<?php echo $form->textField($model,'tour_ids',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tour_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textarea($model,'content',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status', PromotionContent::$statusArr); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->