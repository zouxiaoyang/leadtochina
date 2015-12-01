<?php
/* @var $this CruisepicController */
/* @var $model Cruisepic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cruisepic-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_alt'); ?>
		<?php echo $form->textField($model,'pic_alt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pic_alt'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'pic_path'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'pic_path'); ?>
	</div>

	 <?php if($model->pic_path):?>
	  <div class="row">
	    <?php echo $form->labelEx($model,'图片预览'); ?>
	    <p>
	      <img src="<?php echo ImageUtils::getThumbnail(Cruisepic::UPLOAD_PATH . $model->pic_path, '140x140');?>"  />
	  </div>
	  <?php endif;?>	  

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->dropDownList($model, 'state', array('0'=>'游轮图片','1'=>'甲板图片','2'=>'房间图片', '3'=>'Deck Plan', '4'=>'港口图片')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->