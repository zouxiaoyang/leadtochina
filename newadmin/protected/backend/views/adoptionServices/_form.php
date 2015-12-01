<?php
/* @var $this ServicesController */
/* @var $model Services */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'services-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id',array('value'=>$cityInfo->city_name,'disabled'=>true)); ?>
		<?php echo $form->error($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'services_name'); ?>
		<?php echo $form->textField($model,'services_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'services_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_bus'); ?>
		<?php echo $form->textField($model,'price_bus'); ?>
		<?php echo $form->error($model,'price_bus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_1'); ?>
		<?php echo $form->textField($model,'price_1'); ?>
		<?php echo $form->error($model,'price_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_2_5'); ?>
		<?php echo $form->textField($model,'price_2_5'); ?>
		<?php echo $form->error($model,'price_2_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_6_9'); ?>
		<?php echo $form->textField($model,'price_6_9'); ?>
		<?php echo $form->error($model,'price_6_9'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->