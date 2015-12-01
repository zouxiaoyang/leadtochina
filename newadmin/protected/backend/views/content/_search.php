<?php
/* @var $this ContentController */
/* @var $model Content */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'sectionid'); ?>
		<?php echo $form->dropDownList($model, 'sectionid', array(Sections::getSectionList()));?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'catid'); ?>
		<?php echo $form->dropDownList($model, 'catid',array());?>
	</div>
<!-- 
	<div class="row">
		<?php echo $form->label($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title_alias'); ?>
		<?php echo $form->textField($model,'title_alias',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'introtext'); ?>
		<?php echo $form->textArea($model,'introtext',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fulltext'); ?>
		<?php echo $form->textArea($model,'fulltext',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mask'); ?>
		<?php echo $form->textField($model,'mask',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by_alias'); ?>
		<?php echo $form->textField($model,'created_by_alias',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'checked_out'); ?>
		<?php echo $form->textField($model,'checked_out',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'checked_out_time'); ?>
		<?php echo $form->textField($model,'checked_out_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publish_up'); ?>
		<?php echo $form->textField($model,'publish_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publish_down'); ?>
		<?php echo $form->textField($model,'publish_down'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'images'); ?>
		<?php echo $form->textArea($model,'images',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'urls'); ?>
		<?php echo $form->textArea($model,'urls',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attribs'); ?>
		<?php echo $form->textArea($model,'attribs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentid'); ?>
		<?php echo $form->textField($model,'parentid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordering'); ?>
		<?php echo $form->textField($model,'ordering'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metakey'); ?>
		<?php echo $form->textArea($model,'metakey',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metadesc'); ?>
		<?php echo $form->textArea($model,'metadesc',array('rows'=>6, 'cols'=>50)); ?>
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
		<?php echo $form->label($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seo_url'); ?>
		<?php echo $form->textField($model,'seo_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'access'); ?>
		<?php echo $form->textField($model,'access',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metadata'); ?>
		<?php echo $form->textArea($model,'metadata',array('rows'=>6, 'cols'=>50)); ?>
	</div>
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<script>
$('#Content_sectionid').change(function(){
	//alert($(this).val());
	$.post('<?php echo Yii::app()->createUrl('content/category');?>',{sectionId:$(this).val()},function(data){
		var data = eval(data);
		var options = "<option value=''>请选择分类</option>";
		for (i in data){
			options += '<option value="'+data[i].id+'">'+data[i].title+'</option>';
		}
		$('#Content_catid').html(options);
		});
});
</script>