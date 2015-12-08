<?php
/* @var $this MuslimPackagesController */
/* @var $model AllPackages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'all-packages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'package_id'); ?>
		<?php echo $form->textField($model,'package_id'); ?>
		<?php echo $form->error($model,'package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'muslim_cat_id'); ?>
		<?php echo $form->dropDownList($model, 'muslim_cat_id', MuslimPackages::$chinaMuslimTourCategory);?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
(function($){
	$("#MuslimPackages_province_id").change(function(){
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
				$("#MuslimPackages_city_id").html(options);
			})
        },
    }   
}());

<?php if($model->province_id):?>
	scenery.getCity(<?php echo $model->province_id;?>);
<?php endif;?>
</script>