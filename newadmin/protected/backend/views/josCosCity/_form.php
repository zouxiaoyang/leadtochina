<?php
/* @var $this JosCosCityController */
/* @var $model JosCosCity */
/* @var $form CActiveForm */
?>
<?php
/*
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosCity_muslim_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));

$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosCity_muslim_mos_des',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));

$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosCity_muslim_halal_des',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));

$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosCity_muslim_prayer_des',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));

$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosCity_muslim_shop_des',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
  */
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jos-cos-city-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		<?php echo $form->dropDownList($model, 'provinceid', Province::getAllProvince()); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'muslim_description'); ?>
		<?php echo $form->textArea($model,'muslim_description',array('style'=>'width:600px;')); ?>
		<?php echo $form->error($model,'muslim_description'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'muslim_mos_des'); ?>
		<?php echo $form->textArea($model,'muslim_mos_des',array('style'=>'width:600px;')); ?>
		<?php echo $form->error($model,'muslim_mos_des'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'muslim_halal_des'); ?>
		<?php echo $form->textArea($model,'muslim_halal_des',array('style'=>'width:600px;')); ?>
		<?php echo $form->error($model,'muslim_halal_des'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'muslim_prayer_des'); ?>
		<?php echo $form->textArea($model,'muslim_prayer_des',array('style'=>'width:600px;')); ?>
		<?php echo $form->error($model,'muslim_prayer_des'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'muslim_shop_des'); ?>
		<?php echo $form->textArea($model,'muslim_shop_des',array('style'=>'width:600px;')); ?>
		<?php echo $form->error($model,'muslim_shop_des'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'shortname'); ?>
		<?php echo $form->textField($model,'shortname',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'shortname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'traffic'); ?>
		<?php echo $form->textArea($model,'traffic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'traffic'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'shopping'); ?>
		<?php echo $form->textArea($model,'shopping',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shopping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tips'); ?>
		<?php echo $form->textArea($model,'tips',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tips'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
		<?php echo $form->error($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ufile'); ?>
		<?php echo $form->textField($model,'ufile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ufile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filedir'); ?>
		<?php echo $form->textField($model,'filedir',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'filedir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'showroder'); ?>
		<?php echo $form->textField($model,'showroder'); ?>
		<?php echo $form->error($model,'showroder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_key'); ?>
		<?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_description'); ?>
		<?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isupdate'); ?>
		<?php echo $form->textField($model,'isupdate'); ?>
		<?php echo $form->error($model,'isupdate'); ?>
	</div>
-->

  <div class="row">
		<?php echo $form->labelEx($model,'weather'); ?>
		<?php echo $form->textField($model,'weather',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'weather'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
