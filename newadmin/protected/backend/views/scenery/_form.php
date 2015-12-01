<?php
/* @var $this SceneryController */
/* @var $model Scenery */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scenery-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php
    $this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'Scenery_description',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'wordCount:true,
                    		elementPathEnabled:false,
		                    imagePath:"",
		                    ',
            ));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		 <?php echo $form->dropDownList($model,'provinceid',Scenery::getProvinceList()); ?>
		<?php echo $form->error($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityid'); ?>
		<select id="Scenery_cityid" name="Scenery[cityid]">
			
		</select>
		<?php echo $form->error($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'districtid'); ?>
		<select id="Scenery_districtid" name="Scenery[districtid]">
		</select>
		<?php echo $form->error($model,'districtid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'browse_time'); ?>
		<?php echo $form->textField($model,'browse_time',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'browse_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'上传文件'); ?>
		<?php echo $form->fileField($model,'image',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	<?php if($model->attributes['ufile']):?>
	<div class="row">
		<?php echo $form->labelEx($model,'图片预览'); ?>
		<p>
		<img src="<?php echo ImageUtils::getThumbnail(Scenery::UPLOAD_PATH . $model->attributes['ufile'], '200x100');?>"  />
	</div>
	<?php endif;?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
  
<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
	(function($){
		$("#Scenery_provinceid").change(function(){
			scenery.getCity($(this).val());
		})

		$("#Scenery_cityid").change(function(){
			scenery.getDistrict($(this).val());
		})

	})(jQuery);

	var scenery = (function(){
	    return {
	    	provinceid: <?php if($model->provinceid) echo $model->provinceid; else echo 0;?>,
	    	cityid: <?php if($model->cityid) echo $model->cityid; else echo 0;?>,
	    	districtid:<?php if($model->districtid) echo $model->districtid; else echo 0;?>,
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
					$("#Scenery_cityid").html(options);
				})
	        },
	        getDistrict:function(cityid){
	        	$.post('<?php echo Yii::app()->createUrl('scenery/district');?>',{cityid:cityid},function(data){
					var data = eval(data);
					var options =  '<option value="0">选择区域</option>';
					var select = '';
					for (i in data){
						if(data[i].id == scenery.districtid) {select = 'selected="selected"';}
						else select = '';
						options += '<option value="'+data[i].id+'" '+select+'>'+data[i].name+'</option>';
					}
					$("#Scenery_districtid").html(options);
				})
	        }
	    }   
	}());

	<?php if($model->provinceid):?>
		scenery.getCity(<?php echo $model->provinceid;?>);
		scenery.getDistrict(<?php echo $model->cityid;?>);
	<?php endif;?>
</script>
