<?php
/* @var $this JosTotalOrderController */
/* @var $model JosTotalOrder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jos-total-order-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'orderNO'); ?>
		<?php echo $form->textField($model,'orderNO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'orderNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'executor'); ?>
		<?php echo $form->textField($model,'executor',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'executor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'full_name'); ?>
		<?php echo $form->textField($model,'full_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'packagecode'); ?>
		<?php echo $form->textField($model,'packagecode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'packagecode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_email'); ?>
		<?php echo $form->textField($model,'other_email',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'other_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr'); ?>
		<?php echo $form->textField($model,'addr',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adults'); ?>
		<?php echo $form->textField($model,'adults'); ?>
		<?php echo $form->error($model,'adults'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'children'); ?>
		<?php echo $form->textField($model,'children'); ?>
		<?php echo $form->error($model,'children'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'infant'); ?>
		<?php echo $form->textField($model,'infant'); ?>
		<?php echo $form->error($model,'infant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entry_city'); ?>
		<?php echo $form->textField($model,'entry_city',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'entry_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entry_date'); ?>
		<?php echo $form->textField($model,'entry_date',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'entry_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exit_city'); ?>
		<?php echo $form->textField($model,'exit_city',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'exit_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_travelinfo'); ?>
		<?php echo $form->textArea($model,'other_travelinfo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other_travelinfo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_referer'); ?>
		<?php echo $form->textField($model,'url_referer',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'url_referer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'submit_source'); ?>
		<?php echo $form->textField($model,'submit_source',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'submit_source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_ip'); ?>
		<?php echo $form->textField($model,'user_ip',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'user_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		<?php echo $form->textField($model,'country_id',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'dateline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_state'); ?>
		<?php echo $form->textField($model,'order_state'); ?>
		<?php echo $form->error($model,'order_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_description'); ?>
		<?php echo $form->textArea($model,'state_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'state_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordertype'); ?>
		<?php echo $form->textField($model,'ordertype'); ?>
		<?php echo $form->error($model,'ordertype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method'); ?>
		<?php echo $form->error($model,'payment_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passenger_info'); ?>
		<?php echo $form->textArea($model,'passenger_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'passenger_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount_type'); ?>
		<?php echo $form->textField($model,'discount_type'); ?>
		<?php echo $form->error($model,'discount_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_purpose'); ?>
		<?php echo $form->textField($model,'order_purpose'); ?>
		<?php echo $form->error($model,'order_purpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_price'); ?>
		<?php echo $form->textField($model,'total_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'total_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'final_price'); ?>
		<?php echo $form->textField($model,'final_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'final_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'checked_out'); ?>
		<?php echo $form->textField($model,'checked_out'); ?>
		<?php echo $form->error($model,'checked_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_activity'); ?>
		<?php echo $form->textField($model,'is_activity'); ?>
		<?php echo $form->error($model,'is_activity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_read'); ?>
		<?php echo $form->textField($model,'is_read'); ?>
		<?php echo $form->error($model,'is_read'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destination'); ?>
		<?php echo $form->textField($model,'destination',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'destination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_message'); ?>
		<?php echo $form->textArea($model,'other_message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other_message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_email_flag'); ?>
		<?php echo $form->textField($model,'send_email_flag'); ?>
		<?php echo $form->error($model,'send_email_flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_email_count'); ?>
		<?php echo $form->textField($model,'send_email_count'); ?>
		<?php echo $form->error($model,'send_email_count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->