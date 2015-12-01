<?php
/* @var $this TrafficController */
/* @var $model Traffic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'traffic-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php 
$this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'Traffic_e_tickets',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],
                    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"/attachment/ueditor/",
                    ',
            ));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tid'); ?>
		<?php echo $form->textField($model,'tid',array('value'=>$tid,'readonly'=>true)); ?>
		<?php echo $form->error($model,'tid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depart_time'); ?>
		<?php echo $form->textField($model,'depart_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'depart_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depart_city'); ?>
		<?php echo $form->textField($model,'depart_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'depart_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrive_time'); ?>
		<?php echo $form->textField($model,'arrive_time',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'arrive_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrive_city'); ?>
		<?php echo $form->textField($model,'arrive_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'arrive_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flight_train_info'); ?>
		<?php echo $form->textField($model,'flight_train_info',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'flight_train_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_tickets'); ?>
		<?php echo $form->textArea($model,'e_tickets',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'e_tickets'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->