<?php
/* @var $this JosCosHotelController */
/* @var $model JosCosHotel */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hotel_addr'); ?>
		<?php echo $form->textField($model,'hotel_addr',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provinceid'); ?>
		<?php echo $form->textField($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityid'); ?>
		<?php echo $form->textField($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'province_name'); ?>
		<?php echo $form->textField($model,'province_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_name'); ?>
		<?php echo $form->textField($model,'city_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'districtid'); ?>
		<?php echo $form->textField($model,'districtid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hotel_grade'); ?>
		<?php echo $form->textField($model,'hotel_grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classica'); ?>
		<?php echo $form->textField($model,'classica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'standard'); ?>
		<?php echo $form->textField($model,'standard'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'double'); ?>
		<?php echo $form->textField($model,'double'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service'); ?>
		<?php echo $form->textArea($model,'service',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'food'); ?>
		<?php echo $form->textArea($model,'food',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brandid'); ?>
		<?php echo $form->textField($model,'brandid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surrounding'); ?>
		<?php echo $form->textArea($model,'surrounding',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'features'); ?>
		<?php echo $form->textArea($model,'features',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ufile'); ?>
		<?php echo $form->textField($model,'ufile',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filedir'); ?>
		<?php echo $form->textField($model,'filedir',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lon'); ?>
		<?php echo $form->textField($model,'lon',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_key'); ?>
		<?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_description'); ?>
		<?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->