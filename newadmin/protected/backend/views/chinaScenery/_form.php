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
                'getId'=>'JosCosScenery_description',
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
		<select id="JosCosScenery_cityid" name="JosCosScenery[cityid]">
			
		</select>
		<?php echo $form->error($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'districtid'); ?>
		<select id="JosCosScenery_districtid" name="JosCosScenery[districtid]">
		</select>
		<?php echo $form->error($model,'districtid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_path'); ?>
		 <?php echo $form->dropDownList($model,'cat_path',JosCosScenery::getOneCategoryList()); ?>
		 
		<?php echo $form->error($model,'cat_path'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'categoreid'); ?>
		 <select id="JosCosScenery_categoreid" name="JosCosScenery[categoreid]">
			
		</select>
		<?php echo $form->error($model,'categoreid'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
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
	
	<div class="row">
		<?php echo $form->labelEx($model,'index_recommend'); ?>
		<?php echo $form->dropDownList($model,'index_recommend',array('0'=>'非推荐', '1'=>'推荐')); ?>
		<?php echo $form->error($model,'index_recommend'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
  
<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
	(function($){
		$("#JosCosScenery_provinceid").change(function(){
			scenery.getCity($(this).val());
		})

		$("#JosCosScenery_cityid").change(function(){
			scenery.getDistrict($(this).val());
		})

		$("#JosCosScenery_cat_path").change(function(){
			scenery.getCatTwo($(this).val());
		})
	})(jQuery);

	var scenery = (function(){
	    return {
	    	provinceid: <?php if($model->provinceid) echo $model->provinceid; else echo 0;?>,
	    	cityid: <?php if($model->cityid) echo $model->cityid; else echo 0;?>,
	    	districtid:<?php if($model->districtid) echo $model->districtid; else echo 0;?>,
	    	cat_path:<?php if($model->cat_path) echo $model->cat_path; else echo 0;?>,
	    	categoreid:<?php if($model->categoreid)echo $model->categoreid; else echo 0;?>,
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
					$("#JosCosScenery_cityid").html(options);
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
					$("#JosCosScenery_districtid").html(options);
				})
	        },
	        getCatTwo:function(cat_path){
		        $.post('<?php echo Yii::app()->createUrl('ChinaScenery/getCatTwo');?>',{catOneid:cat_path},function(data){
					var data = eval(data);
					var options = '<option value="0">选择二级分类</option>';
					var select = '';
					for (i in data){
						if(data[i].id == scenery.categoreid) {select = 'selected="selected"'}
						else select = '';
						options += '<option value="'+data[i].id+'" '+select+'>'+data[i].title+'</option>';
						}
						$('#JosCosScenery_categoreid').html(options);
			        });
	        }
	    }   
	}());

	<?php if($model->provinceid):?>
		scenery.getCity(<?php echo $model->provinceid;?>);
		scenery.getDistrict(<?php echo $model->cityid;?>);
	<?php endif;?>
	<?php if($model->cat_path):?>
		scenery.getCatTwo(<?php echo $model->cat_path;?>);
	<?php endif;?>
</script>
