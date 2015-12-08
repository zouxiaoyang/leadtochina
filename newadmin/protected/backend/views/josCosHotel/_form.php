<?php
/* @var $this JosCosHotelController */
/* @var $model JosCosHotel */
/* @var $form CActiveForm */
?>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosHotel_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosHotel_service',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'JosCosHotel_food',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jos-cos-hotel-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hotel_addr'); ?>
		<?php echo $form->textField($model,'hotel_addr',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hotel_addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		<?php echo $form->dropDownList($model, 'provinceid', Province::getAllProvince()); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'cityid'); ?>
		<?php echo $form->dropDownList($model, 'cityid', JosCosCity::getAllcities()); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'districtid'); ?>
		<select id="JosCosHotel_districtid" name="JosCosHotel[districtid]">
		</select>
		<?php echo $form->error($model,'districtid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province_name'); ?>
		<?php echo $form->textField($model,'province_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'province_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_name'); ?>
		<?php echo $form->textField($model,'city_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hotel_grade'); ?>
		<?php echo $form->dropDownList($model, 'hotel_grade', array(
			'136'=>'3 star',
			'137'=>'4 star',
			'138'=>'5 star',
		));?>
		<?php echo $form->error($model,'hotel_grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->dropDownList($model, 'hot', array('1'=>'推荐','0'=>'非推荐'));?>
		<?php echo $form->error($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('style'=>"width:600px;")); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service'); ?>
		<?php echo $form->textArea($model,'service',array('style'=>"width:600px")); ?>
		<?php echo $form->error($model,'service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'food'); ?>
		<?php echo $form->textArea($model,'food',array('style'=>"width:600px")); ?>
		<?php echo $form->error($model,'food'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ufile'); ?>
		<?php echo $form->fileField($model,'picFile'); ?>
		<?php echo $form->error($model,'picFile'); ?>
	</div>

	 <?php if($model->ufile):?>
	  <div class="row">
	    <?php echo $form->labelEx($model,'图片预览'); ?>
	    <p>
	      <img src="<?php echo ImageUtils::getThumbnail(JosCosHotel::UPLOAD_PATH . $model->ufile, '140x140');?>"  />
	  </div>
	  <?php endif;?>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'seo_title'); ?>
	</div>

	 <?php if($model->seo_title):?>
	  <div class="row">
	    <?php echo $form->labelEx($model,'图片预览'); ?>
	    <p>
	      <img src="<?php echo ImageUtils::getThumbnail(JosCosHotel::UPLOAD_PATH . $model->seo_title, '140x140');?>"  />
	  </div>
	  <?php endif;?>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_key'); ?>
		<?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_key'); ?>
	</div>
<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'brandid'); ?>
		<?php echo $form->textField($model,'brandid'); ?>
		<?php echo $form->error($model,'brandid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surrounding'); ?>
		<?php echo $form->textArea($model,'surrounding',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'surrounding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'features'); ?>
		<?php echo $form->textArea($model,'features',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'features'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filedir'); ?>
		<?php echo $form->textField($model,'filedir',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'filedir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lon'); ?>
		<?php echo $form->textField($model,'lon',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_description'); ?>
		<?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classica'); ?>
		<?php echo $form->textField($model,'classica'); ?>
		<?php echo $form->error($model,'classica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'standard'); ?>
		<?php echo $form->textField($model,'standard'); ?>
		<?php echo $form->error($model,'standard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'double'); ?>
		<?php echo $form->textField($model,'double'); ?>
		<?php echo $form->error($model,'double'); ?>
	</div>
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
	(function($){
		$("#JosCosHotel_provinceid").change(function(){
			scenery.getCity($(this).val());
		})

		$("#JosCosHotel_cityid").change(function(){
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
					$("#JosCosHotel_cityid").html(options);
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
					$("#JosCosHotel_districtid").html(options);
				})
	        }
	    }   
	}());

	<?php if($model->provinceid):?>
		scenery.getCity(<?php echo $model->provinceid;?>);
		scenery.getDistrict(<?php echo $model->cityid;?>);
	<?php endif;?>
</script>
