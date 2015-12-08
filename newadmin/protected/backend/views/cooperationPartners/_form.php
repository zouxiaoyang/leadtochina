<?php
/* @var $this CooperationPartnersController */
/* @var $model CooperationPartners */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cooperation-partners-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_type'); ?>
		<?php echo $form->textField($model,'company_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'company_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compnay_name'); ?>
		<?php echo $form->textField($model,'compnay_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'compnay_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax_num'); ?>
		<?php echo $form->textField($model,'fax_num',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fax_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_request'); ?>
		<?php echo $form->textField($model,'other_request',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'other_request'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->