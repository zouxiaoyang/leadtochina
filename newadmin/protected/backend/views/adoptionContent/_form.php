<?php
/* @var $this AdoptionContentController */
/* @var $model AdoptionContent */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScriptFile('/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js');?>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionContent_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
    <input type="file" id="AdoptionContent_image" name="AdoptionContent[image]">
		<?php echo $form->error($model,'image'); ?>
	</div>
	
	<?php if($model->image):?>
	  <div class="row">
	    <?php echo $form->labelEx($model,'图片预览'); ?>
	    <p>
	      <img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH . $model->image, '240x140');?>"  />
	  </div>
	  <?php endif;?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model, 'cat_id', AdoptionContent::$content_category) ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province_id'); ?>
		<?php echo $form->dropDownList($model, 'province_id', Province::getAllProvince()); ?>
		<?php echo $form->error($model,'province_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homeland_cat'); ?>
		<?php echo $form->dropDownList($model, 'homeland_cat', AdoptionContent::$homeland_category) ?>
		<?php echo $form->error($model,'homeland_cat'); ?>
	</div>

	<div class="row">
	    <?php echo $form->labelEx($model,'dateline'); ?>
	    <?php echo $form->textField($model,'dateline',array('size'=>20,'maxlength'=>20,'onclick'=>"WdatePicker({dateFmt:'yyyy-M-d'})",'class'=>'Wdate')); ?>
	    <?php echo $form->error($model,'dateline'); ?>    
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
