<?php
/* @var $this GuideRentalController */
/* @var $model Rental */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rental-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Guide Name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Quotation based on USD and per Group'); ?>
		<?php $rentalPrice=unserialize($model->price_serialize);?>	
		<?php foreach (Rental::$guideRentalList as $k=>$v):?>
		 <input type="text" name="Rental[rentalRates][<?php echo $k;?>]" value="<?php echo $rentalPrice[$k];?>"/> <?php echo $v;?><br/>
		<?php endforeach;?>
	</div>

	<input id="Rental_rental_type" type="hidden" name="Rental[rental_type]" value="2">

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->