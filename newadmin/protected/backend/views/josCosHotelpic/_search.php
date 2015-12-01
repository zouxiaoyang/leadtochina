<?php
/* @var $this JosCosHotelpicController */
/* @var $model JosCosHotelpic */
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
		<?php echo $form->label($model,'hotelid'); ?>
		<?php echo $form->textField($model,'hotelid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic_alt'); ?>
		<?php echo $form->textField($model,'pic_alt',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic_dir'); ?>
		<?php echo $form->textField($model,'pic_dir',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recommend'); ?>
		<?php echo $form->textField($model,'recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic_path'); ?>
		<?php echo $form->textField($model,'pic_path',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->