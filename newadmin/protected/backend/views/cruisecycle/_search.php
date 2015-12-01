<?php
/* @var $this CruisecycleController */
/* @var $model Cruisecycle */
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
		<?php echo $form->label($model,'cruiseid'); ?>
		<?php echo $form->textField($model,'cruiseid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activition'); ?>
		<?php echo $form->textArea($model,'activition',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upOrdown'); ?>
		<?php echo $form->textField($model,'upOrdown'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cruise_name'); ?>
		<?php echo $form->textField($model,'cruise_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->