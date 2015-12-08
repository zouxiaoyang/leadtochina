<?php
/* @var $this CruiseactController */
/* @var $model Cruiseact */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScriptFile('/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js');?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cruiseact-form',
	'enableAjaxValidation'=>false,
)); 

//var_dump($cruiseInfo->cruise_name);
//var_dump($cruiseInfo->id);
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
		<?php echo $form->labelEx($model,'cruise_date'); ?>
		<?php echo $form->textField($model,'cruise_date',array('size'=>20,'maxlength'=>20,'onclick'=>"WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d'})",'class'=>'Wdate')); ?>
		<?php echo $form->error($model,'cruise_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upOrdown'); ?>
		<?php echo $form->dropDownList($model, 'upOrdown', array('0'=>'上行','1'=>'下行')); ?>
		<?php echo $form->error($model,'upOrdown'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
