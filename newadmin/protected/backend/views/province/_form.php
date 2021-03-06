<?php
/* @var $this ProvinceController */
/* @var $model Province */
/* @var $form CActiveForm */
?>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Province_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
               ',
  ));
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'province-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->