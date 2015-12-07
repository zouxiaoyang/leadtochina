<?php
/* @var $this AdoptionOrphanageAddressController */
/* @var $model AdoptionOrphanageAddress */
/* @var $form CActiveForm */
?>

<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'AdoptionOrphanageAddress_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                ',
  ));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adoption-orphanage-address-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		 <?php echo $form->dropDownList($model,'provinceid',Scenery::getProvinceList()); ?>
		<?php echo $form->error($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityid'); ?>
		<select id="AdoptionOrphanageAddress_cityid" name="AdoptionOrphanageAddress[cityid]">
		</select>
		<?php echo $form->error($model,'cityid'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'orphanage_name'); ?>
		<?php echo $form->textField($model,'orphanage_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'orphanage_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'population'); ?>
		<?php echo $form->textField($model,'population',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'population'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'features'); ?>
		<?php echo $form->textField($model,'features',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'features'); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'area_code'); ?>
		<?php echo $form->textField($model,'area_code',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'area_code'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public_content'); ?>
		<?php echo $form->textArea($model,'public_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'public_content'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'seo_title_adoption'); ?>
		<?php echo $form->textArea($model,'seo_title_adoption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_title_adoption'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'seo_keyword_adoption'); ?>
		<?php echo $form->textArea($model,'seo_keyword_adoption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_keyword_adoption'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'seo_description_adoption'); ?>
		<?php echo $form->textArea($model,'seo_description_adoption',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seo_description_adoption'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>

	(function($){
		$("#AdoptionOrphanageAddress_provinceid").change(function(){
			scenery.getCity($(this).val());
		})
	})(jQuery);

	var scenery = (function(){
	    return {
	    	provinceid: <?php if($model->provinceid) echo $model->provinceid; else echo 0;?>,
	    	cityid: <?php if($model->cityid) echo $model->cityid; else echo 0;?>,
	        getCity:function(provinceid){
	        	$.post('<?php echo Yii::app()->createUrl('scenery/city');?>',{provinceid:provinceid},function(data){
					var data = eval(data);
					var options = '<option value="0">选择城市</option>';
					var select = '';
					for (i in data){
						if(data[i].id == scenery.cityid) {select = 'selected="selected"';}
						else select = '';
						options += '<option value="'+data[i].id+'" '+select+'>'+data[i].name+'</option>';
					}
					$("#AdoptionOrphanageAddress_cityid").html(options);
				})
	        }
	    }   
	}());

	<?php if($model->provinceid):?>
		scenery.getCity(<?php echo $model->provinceid;?>);
	<?php endif;?>
</script>