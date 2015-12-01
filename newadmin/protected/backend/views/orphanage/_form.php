<?php
/* @var $this OrphanageController */
/* @var $model Orphanage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orphanage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php 
		$provinceList=Province::getAllSortProvince();
		$provinceArr = CHtml::listData($provinceList, 'id', 'name');
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		<?php echo $form->dropDownList($model,'provinceid', $provinceArr); ?>
		<?php echo $form->error($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arranged_info'); ?>
		<?php echo $form->textarea($model,'arranged_info',array('rows'=>10,'cols'=>60)); ?>
		<?php echo $form->error($model,'arranged_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approval_info'); ?>
		<?php echo $form->textarea($model,'approval_info',array('rows'=>10,'cols'=>60)); ?>
		<?php echo $form->error($model,'approval_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fee_info'); ?>
		<?php echo $form->textarea($model,'fee_info',array('rows'=>10,'cols'=>60)); ?>
		<?php echo $form->error($model,'fee_info'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->