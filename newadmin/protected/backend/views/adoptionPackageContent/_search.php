<?php
/* @var $this AdoptionOrphanageAddressArticleController */
/* @var $model AdoptionOrphanageAddressArticle */
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
		<?php echo $form->label($model,'pacakage_id'); ?>
		<?php echo $form->textField($model,'pacakage_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'day1'); ?>
		<?php echo $form->textField($model,'day1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'day2'); ?>
		<?php echo $form->textArea($model,'day2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'day3'); ?>
		<?php echo $form->textField($model,'day3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'day4'); ?>
		<?php echo $form->textField($model,'day4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->