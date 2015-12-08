<?php
/* @var $this ChinaTravelPhotosController */
/* @var $model ChinaTravelPhotos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'china-travel-photos-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'上传文件'); ?>
		<?php echo $form->fileField($model,'image',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

<?php if($model->attributes['pic']):?>
	<div class="row">
		<?php echo $form->labelEx($model,'图片预览'); ?>
		<p>
		<img src="<?php echo ImageUtils::getThumbnail(ChinaTravelPhotos::UPLOAD_PATH . $model->attributes['pic'], '200x100');?>"  />
	</div>
	<?php endif;?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->