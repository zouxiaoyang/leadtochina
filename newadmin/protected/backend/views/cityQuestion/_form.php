<?php
/* @var $this CityQuestionController */
/* @var $model CityQuestion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'city-question-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type', CityQuestion::$type_arr); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'question'); ?>
		<?php echo $form->textArea($model,'question',array('cols'=>60,'rows'=>10)); ?>
		<?php echo $form->error($model,'question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reply'); ?>
		<?php echo $form->textArea($model,'reply',array('cols'=>60,'rows'=>10)); ?>
		<?php echo $form->error($model,'reply'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		    <?php  
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(  
                'model'=>$model,  
                'attribute'=>'time',  
                'options' => array(  
                    'dateFormat'=>'yy-mm-dd',
                ),  
                'htmlOptions'=>array(  
                    'readonly'=>'readonly',  
                    'style'=>'width:90px;',  
                )  
            ));?>  
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->