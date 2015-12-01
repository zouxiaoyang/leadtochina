<?php
/* @var $this CruiseController */
/* @var $model Cruise */
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
		<?php echo $form->label($model,'cruise_name'); ?>
		<?php echo $form->textField($model,'cruise_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year_built'); ?>
		<?php echo $form->textField($model,'year_built',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_passengers'); ?>
		<?php echo $form->textField($model,'total_passengers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'crew'); ?>
		<?php echo $form->textField($model,'crew'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'length'); ?>
		<?php echo $form->textField($model,'length',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width'); ?>
		<?php echo $form->textField($model,'width',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uphighprice'); ?>
		<?php echo $form->textField($model,'uphighprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'passenger_decks'); ?>
		<?php echo $form->textField($model,'passenger_decks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cruise_grade'); ?>
		<?php echo $form->textField($model,'cruise_grade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uplink'); ?>
		<?php echo $form->textArea($model,'uplink',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'down'); ?>
		<?php echo $form->textArea($model,'down',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'equipment'); ?>
		<?php echo $form->textArea($model,'equipment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'introduction'); ?>
		<?php echo $form->textArea($model,'introduction',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filedir'); ?>
		<?php echo $form->textField($model,'filedir',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ufile'); ?>
		<?php echo $form->textField($model,'ufile',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_key'); ?>
		<?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_description'); ?>
		<?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'published'); ?>
		<?php echo $form->textField($model,'published'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uplowprice'); ?>
		<?php echo $form->textField($model,'uplowprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'downlowprice'); ?>
		<?php echo $form->textField($model,'downlowprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'downhighprice'); ?>
		<?php echo $form->textField($model,'downhighprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upcity'); ?>
		<?php echo $form->textField($model,'upcity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'downcity'); ?>
		<?php echo $form->textField($model,'downcity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->