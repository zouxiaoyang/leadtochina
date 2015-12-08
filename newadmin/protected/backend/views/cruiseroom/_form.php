<?php
/* @var $this CruiseroomController */
/* @var $model Cruiseroom */
/* @var $form CActiveForm */

    $this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'Cruiseroom_description',
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
	'id'=>'cruiseroom-form',
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
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'breakfast'); ?>
		<?php echo $form->dropDownList($model,'breakfast',Cruiseroom::$breakfast); ?>
		<?php echo $form->error($model,'breakfast'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	
	<div class="row">
    <?php echo $form->labelEx($model,'room_pic1'); ?>
    <?php echo $form->fileField($model,'room_pic1'); ?>
    <?php echo $form->error($model,'room_pic1'); ?>
  </div>

  <?php if($model->attributes['room_pic1']):?>
  <div class="row">
    <?php echo $form->labelEx($model,'图片预览'); ?>
    <p>
      <img src="<?php echo ImageUtils::getThumbnail(Cruiseroom::UPLOAD_PATH . $model->attributes['room_pic1'], '220x235');?>"  />
  </div>
  <?php endif;?>
	
	<div class="row">
    <?php echo $form->labelEx($model,'room_pic2'); ?>
    <?php echo $form->fileField($model,'room_pic2'); ?>
    <?php echo $form->error($model,'room_pic2'); ?>
  </div>

  <?php if($model->attributes['room_pic2']):?>
  <div class="row">
    <?php echo $form->labelEx($model,'图片预览'); ?>
    <p>
      <img src="<?php echo ImageUtils::getThumbnail(Cruiseroom::UPLOAD_PATH . $model->attributes['room_pic2'], '220x235');?>"  />
  </div>
  <?php endif;?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
