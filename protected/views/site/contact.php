<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>
<div class="container">
<div class="crumbs">
<h4><div class="breadcrumbs02">
<a href="/">Home</a> » <a href="/site/contact">contact</a></div></h4>
	</div>
<h1 class="page-title15">Contact Us</h1>
<p>Looking for help to plan your next trip? Please click this button to get started!</p><br />
<a href="/travel/order" class="large-button">Let's Start Planning My Trip</a>
<br /><br /><br />
<p>Or do you have other questions or comments? Please feel free to contact us using the form below.</p>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
	'validateOnSubmit'=>true,
	),
)); ?>

	<div >
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'message_type'); ?>
		<?php echo $form->dropDownList($model,'message_type',array('Travel Enquiries'=>'Travel Enquiries','Website Feedbacks'=>'Website Feedbacks','Partnerships'=>'Partnerships','Other'=>'Other')); ?>
		<?php echo $form->error($model,'message_type'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div>
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
        <?php echo $form->textField($model,'verifyCode'); ?>
		<?php $this->widget('CCaptcha'); ?>
		
		</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>

</div>