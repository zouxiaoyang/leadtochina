<?php
/* @var $this InternationalCruiseChinaExcursionsController */
/* @var $model InternationalCruiseChinaExcursions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'international-cruise-china-excursions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php 
		$model->cid = Yii::app()->user->getState('InternationalCruiseChinaExcursionsCid');
		echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid', array('readonly'=>true)); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_ids'); ?>
		<?php echo $form->textField($model,'tour_ids',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'tour_ids'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->