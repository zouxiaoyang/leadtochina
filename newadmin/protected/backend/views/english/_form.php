<?php
/* @var $this EnglishController */
/* @var $model English */
/* @var $form CActiveForm */
?>

<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'English_english_text',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
?>

<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'English_chinese_content',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
?>




<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'english-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>100,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'play_url'); ?>
		<?php echo $form->textField($model,'play_url',array('size'=>100,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'play_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'download_url'); ?>
		<?php echo $form->textField($model,'download_url',array('size'=>100,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'download_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english_text'); ?>
		<?php echo $form->textArea($model,'english_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'english_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chinese_content'); ?>
		<?php echo $form->textArea($model,'chinese_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'chinese_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jifen'); ?>
		<?php echo $form->textField($model,'jifen'); ?>
		<?php echo $form->error($model,'jifen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
