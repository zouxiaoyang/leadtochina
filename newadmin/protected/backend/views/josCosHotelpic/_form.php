<?php
/* @var $this JosCosHotelpicController */
/* @var $model JosCosHotelpic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jos-cos-hotelpic-form',
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
		<?php echo $form->fileField($model,'picFile'); ?>
		<?php echo $form->error($model,'pic_path'); ?>
	</div>
	
	<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'hotelid'); ?>
		<?php echo $form->textField($model,'hotelid'); ?>
		<?php echo $form->error($model,'hotelid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_dir'); ?>
		<?php echo $form->textField($model,'pic_dir',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic_dir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommend'); ?>
		<?php echo $form->textField($model,'recommend'); ?>
		<?php echo $form->error($model,'recommend'); ?>
	</div>
 -->
	
	
	<?php if($model->pic_path):?>
	  <div class="row">
	    <?php echo $form->labelEx($model,'图片预览'); ?>
	    <p>
	      <img src="<?php echo ImageUtils::getThumbnail(JosCosHotelpic::UPLOAD_PATH . $model->pic_path, '140x140');?>"  />
	  </div>
	  <?php endif;?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->