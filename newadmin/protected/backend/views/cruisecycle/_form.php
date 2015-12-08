<?php
/* @var $this CruisecycleController */
/* @var $model Cruisecycle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cruisecycle-form',
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); 
//var_dump($cruiseInfo->cruise_name);
?>

<?php
    $this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'Cruisecycle_activition',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source","|","InsertImage","ImageNone","ImageLeft","ImageRight","ImageCenter"]],
                    wordCount:true,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
            ));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cruiseid'); ?>
		<?php echo $form->textField($model,'cruiseid',array('value'=>$cruiseInfo->id,'readonly'=>true)); ?>
		<?php echo $form->error($model,'cruiseid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cruise_name'); ?>
		<?php echo $form->textField($model,'cruise_name',array('size'=>60,'maxlength'=>100,'value'=>$cruiseInfo->cruise_name,'readonly'=>true)); ?>
		<?php echo $form->error($model,'cruise_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'activition'); ?>
		<?php echo $form->textArea($model,'activition',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'activition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upOrdown'); ?>
		<?php echo $form->dropDownList($model,'upOrdown', array('0'=>'上行','1'=>'下行')); ?>
		<?php echo $form->error($model,'upOrdown'); ?>
	</div>
	
	<div class="row">
    <?php echo $form->labelEx($model,'cruisecycle_pic'); ?>
    <?php echo $form->fileField($model,'image'); ?>
    <?php echo $form->error($model,'cruisecycle_pic'); ?>
  </div>

  <?php if($model->attributes['cruisecycle_pic']):?>
  <div class="row">
    <?php echo $form->labelEx($model,'图片预览'); ?>
    <p>
      <img src="<?php echo ImageUtils::getThumbnail(Cruisecycle::UPLOAD_PATH . $model->attributes['cruisecycle_pic'], '220x235');?>"  />
  </div>
  <?php endif;?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->