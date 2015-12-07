<?php
/* @var $this AdoptionOrphanageAddressArticleController */
/* @var $model AdoptionOrphanageAddressArticle */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScriptFile('/newadmin/js/My97DatePicker/WdatePicker.js');?>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionOrphanageAddressArticle_content',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adoption-orphanage-address-article-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aid'); ?>
		<?php
		 $model->aid = Yii::app()->user->getState('adoption_orphanage_address_id');
		 echo $form->textField($model,'aid', array("readonly"=>"readonly")); ?>
		<?php echo $form->error($model,'aid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>


	<?php if($model->attributes['pic']):?>
	<div class="row">
		<?php echo $form->labelEx($model,'图片预览'); ?>
		<p>
		<img src="<?php echo ImageUtils::getThumbnail(AdoptionOrphanageAddressArticle::UPLOAD_PATH . $model->attributes['pic'], '200x100');?>"  />
	</div>
	<?php endif;?>

	<div class="row">
	    <?php echo $form->labelEx($model,'date'); ?>
	    <?php echo $form->textField($model,'date',array('size'=>20,'maxlength'=>20,'onclick'=>"WdatePicker({dateFmt:'yyyy-M-d'})",'class'=>'Wdate')); ?>
	    <?php echo $form->error($model,'date'); ?>    
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommend'); ?>
		<?php echo $form->dropDownList($model, 'recommend', array('0'=>'否','1'=>'是')); ?>
		<?php echo $form->error($model,'recommend'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->