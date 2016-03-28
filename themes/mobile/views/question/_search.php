<?php
/* @var $this QuestionController */
/* @var $model Question */
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
		<?php echo $form->label($model,'postid'); ?>
		<?php echo $form->textField($model,'postid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shortcontent'); ?>
		<?php echo $form->textArea($model,'shortcontent',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'countreply'); ?>
		<?php echo $form->textField($model,'countreply'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_ip'); ?>
		<?php echo $form->textField($model,'user_ip',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auditing'); ?>
		<?php echo $form->textField($model,'auditing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question_type'); ?>
		<?php echo $form->textField($model,'question_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'question_type_id'); ?>
		<?php echo $form->textField($model,'question_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_read'); ?>
		<?php echo $form->textField($model,'is_read'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->