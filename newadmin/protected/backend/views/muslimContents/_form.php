<?php
/* @var $this MuslimContentsController */
/* @var $model AllContents */
/* @var $form CActiveForm */
?>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'MuslimContents_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));
  ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'all-contents-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

  <div class="row">
    <?php echo $form->labelEx($model,'muslim_cat_id'); ?>
    <?php echo $form->dropDownList($model, 'muslim_cat_id', MuslimContents::$muslimGuide)?>
    <?php echo $form->error($model,'muslim_cat_id'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'province_id'); ?>
    <?php echo $form->dropDownList($model, 'province_id', Province::getAllProvince()); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'city_id'); ?>
    <?php echo $form->dropDownList($model, 'city_id', JosCosCity::getAllcities()); ?>
  </div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('style'=>"width:600px;")); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	
	<?php if($model->image):?>
	  <div class="row">
	    <?php echo $form->labelEx($model,'图片预览'); ?>
	    <p>
	      <img src="<?php echo ImageUtils::getThumbnail(MuslimContents::UPLOAD_PATH . $model->image, '140x140');?>"  />
	  </div>
	  <?php endif;?>
	
	<div class="row">
	<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->dropDownList($model, 'hot', AdoptionContent::$recommend); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
(function($){
	$("#MuslimContents_province_id").change(function(){
		scenery.getCity($(this).val());
	})
})(jQuery);

var scenery = (function(){
    return {
    	provinceid: <?php if($model->province_id) echo $model->province_id; else echo 0;?>,
    	cityid: <?php if($model->city_id) echo $model->city_id; else echo 0;?>,
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
				$("#MuslimContents_city_id").html(options);
			})
        },
    }   
}());

<?php if($model->province_id):?>
	scenery.getCity(<?php echo $model->province_id;?>);
<?php endif;?>
</script>