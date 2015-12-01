<?php
/* @var $this ServicesController */
/* @var $model Services */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'services_name'); ?>
		<?php echo $form->textField($model,'services_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_bus'); ?>
		<?php echo $form->textField($model,'price_bus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_1'); ?>
		<?php echo $form->textField($model,'price_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_2_5'); ?>
		<?php echo $form->textField($model,'price_2_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_6_9'); ?>
		<?php echo $form->textField($model,'price_6_9'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->