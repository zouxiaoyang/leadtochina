<?php
/* @var $this PromotionMonthToursController */
/* @var $model PromotionMonthTours */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promotion-month-tours-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'month'); ?>
		<?php echo $form->dropDownList($model,'month',PromotionMonthTours::$monthArr); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_ids'); ?>
		<?php echo $form->textField($model,'tour_ids',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tour_ids'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->