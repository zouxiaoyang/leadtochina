<?php
/* @var $this CruisePorstTypeController */
/* @var $model CruisePorstType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cid'); ?>
		<?php echo $form->textField($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pid'); ?>
		<?php echo $form->textField($model,'pid'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->label($model,'schedule'); ?>
		<?php echo $form->textArea($model,'schedule',array('rows'=>6, 'cols'=>50)); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->label($model,'tour_type_ids'); ?>
		<?php echo $form->textField($model,'tour_type_ids',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->