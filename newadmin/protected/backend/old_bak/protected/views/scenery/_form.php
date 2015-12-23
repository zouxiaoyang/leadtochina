<?php
/* @var $this SceneryController */
/* @var $model Scenery */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scenery-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		<?php echo $form->textField($model,'provinceid'); ?>
		<?php echo $form->error($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityid'); ?>
		<?php echo $form->textField($model,'cityid'); ?>
		<?php echo $form->error($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province_name'); ?>
		<?php echo $form->textField($model,'province_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'province_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'browse_time'); ?>
		<?php echo $form->textField($model,'browse_time',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'browse_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_name'); ?>
		<?php echo $form->textField($model,'city_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'districtid'); ?>
		<?php echo $form->textField($model,'districtid'); ?>
		<?php echo $form->error($model,'districtid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'published'); ?>
		<?php echo $form->textField($model,'published'); ?>
		<?php echo $form->error($model,'published'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
		<?php echo $form->error($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_route'); ?>
		<?php echo $form->textField($model,'update_route'); ?>
		<?php echo $form->error($model,'update_route'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->