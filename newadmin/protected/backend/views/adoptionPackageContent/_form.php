<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */
/* @var $form CActiveForm */
?>

<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionPackageContent_day1',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
  $this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionPackageContent_day2',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
  $this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionPackageContent_day3',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
  $this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionPackageContent_day4',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
  $this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionPackageContent_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adoption-orphanage-address-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		 <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day1'); ?>
		<?php echo $form->textArea($model,'day1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'day1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day2'); ?>
		<?php echo $form->textArea($model,'day2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'day2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day3'); ?>
		<?php echo $form->textArea($model,'day3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'day3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day4'); ?>
		<?php echo $form->textArea($model,'day4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'day4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pacakage_id'); ?>
		<?php if(isset($_GET['aid'])){ ?>
			<?php echo $form->hiddenField($model,'pacakage_id',array('value'=>$_GET['aid'])); ?>
	    <?php } else{ ?>
			 <?php echo $form->hiddenField($model,'id',array('value'=>$_GET['id'])); ?>
		<?php }?>
		<?php echo $form->error($model,'pacakage_id'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->