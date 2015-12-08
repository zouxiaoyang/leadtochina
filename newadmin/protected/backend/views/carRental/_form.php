<?php
/* @var $this CarRentalController */
/* @var $model Rental */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rental-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Car Name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rental Rates in USD'); ?>
		<?php $rentalPrice=unserialize($model->price_serialize);?>	
		<?php foreach (Rental::$carRentalList as $k=>$v):?>
		 <input type="text" name="Rental[rentalRates][<?php echo $k;?>]" value="<?php echo $rentalPrice[$k];?>"/> <?php echo $v;?><br/>
		<?php endforeach;?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Car 缩略图'); ?>
		<?php //echo $form->fileField($model,'pic'); ?>
		<input id="Rental_pic" type="file" name="Rental[picFile]">
	</div>
	
	<?php if($model->attributes['pic']):?>
  <div class="row">
    <?php echo $form->labelEx($model,'图片预览'); ?>
    <p>
      <img src="<?php echo ImageUtils::getThumbnail(Rental::UPLOAD_PATH . $model->attributes['pic'], '220x235');?>"  />
  </div>
  <?php endif;?>

	<div class="row">
		<?php echo $form->labelEx($model,'alt'); ?>
		<?php echo $form->textField($model,'alt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alt'); ?>
	</div>
	
	<input id="Rental_rental_type" type="hidden" name="Rental[rental_type]" value="1">

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->