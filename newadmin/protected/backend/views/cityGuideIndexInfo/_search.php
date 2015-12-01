<?php
/* @var $this CityGuideIndexInfoController */
/* @var $model CityGuideIndexInfo */
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
		<?php echo $form->label($model,'provinceid'); ?>
		<?php echo $form->textField($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityid'); ?>
		<?php echo $form->textField($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'figure_img'); ?>
		<?php echo $form->textField($model,'figure_img',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'figure_desc'); ?>
		<?php echo $form->textField($model,'figure_desc',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transportation_img'); ?>
		<?php echo $form->textField($model,'transportation_img',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transportation_desc'); ?>
		<?php echo $form->textField($model,'transportation_desc',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attractions_info'); ?>
		<?php echo $form->textArea($model,'attractions_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->