<?php
/* @var $this CruiseOnboardController */
/* @var $model CruiseOnboard */
/* @var $form CActiveForm */
$this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'CruiseOnboard_description',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source","|","InsertImage","ImageNone","ImageLeft","ImageRight","ImageCenter"]],
                    wordCount:true,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
            ));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cruise-onboard-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cruiseid'); ?>
		<?php echo $form->hiddenField($model,'cruiseid'); ?>
		<?php echo $form->error($model,'cruiseid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cruise_name'); ?>
		<?php echo $form->textField($model,'cruise_name',array('size'=>60,'maxlength'=>100,'disabled'=>true)); ?>
		<?php echo $form->error($model,'cruise_name'); ?>
	</div>

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
	
	<div class="row">
    <?php echo $form->labelEx($model,'onboard_pic'); ?>
    <?php echo $form->fileField($model,'image'); ?>
    <?php echo $form->error($model,'onboard_pic'); ?>
  </div>

  <?php if($model->attributes['onboard_pic']):?>
  <div class="row">
    <?php echo $form->labelEx($model,'图片预览'); ?>
    <p>
      <img src="<?php echo ImageUtils::getThumbnail(CruiseOnboard::UPLOAD_PATH . $model->attributes['onboard_pic'], '220x235');?>"  />
  </div>
  <?php endif;?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->