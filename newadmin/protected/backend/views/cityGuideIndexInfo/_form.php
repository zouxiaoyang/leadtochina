<?php
/* @var $this CityGuideIndexInfoController */
/* @var $model CityGuideIndexInfo */
/* @var $form CActiveForm */
?>
<style>
td { 
font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
color: #4f6b72; 
border-right: 1px solid #C1DAD7; 
border-bottom: 1px solid #C1DAD7; 
border-top: 1px solid #C1DAD7; 
letter-spacing: 2px; 
text-align: left; 
padding: 6px 6px 6px 12px; 
background: #CAE8EA  no-repeat; 
}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'city-guide-index-info-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		 <?php echo $form->dropDownList($model,'provinceid',Scenery::getProvinceList()); ?>
		<?php echo $form->error($model,'provinceid'); ?>
		市：
		<select id="CityGuideIndexInfo_cityid" name="CityGuideIndexInfo[cityid]">
			
		</select>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'figure_img'); ?>
		<?php echo $form->fileField($model,'figure_file',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'figure_img'); ?>
		<img src="<?php echo CityGuideIndexInfo::UPLOAD_PATH.$model->figure_img;?>" style="width:50px;height:50px;" />
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'figure_desc'); ?>
		<?php echo $form->textArea($model,'figure_desc',array('rows'=>5,'cols'=>60)); ?>
		<?php echo $form->error($model,'figure_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transportation_img'); ?>
		<?php echo $form->fileField($model,'transportation_file',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'transportation_img'); ?>
		<img src="<?php echo CityGuideIndexInfo::UPLOAD_PATH.$model->transportation_img;?>" style="width:50px;height:50px;" />
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transportation_desc'); ?>
		<?php echo $form->textArea($model,'transportation_desc',array('rows'=>5,'cols'=>60)); ?>
		<?php echo $form->error($model,'transportation_desc'); ?>
	</div>

	<div class="row">
		<?php
		$attractions_info = unserialize($model->attractions_info);
		?>
		<p id="attractions_info">
		
			<label for="CityGuideIndexInfo_attractions_info">Attractions</label>
		<?php for($i=0;$i<=7;$i++):?>
		<div>
			标题:<input type="text" name="title[]" value="<?php echo $attractions_info['title'][$i];?>" />
			URL:<input type="text" name="url[]" value="<?php echo $attractions_info['url'][$i];?>" />
			图片：<input type="file" name="files[]" maxlength="20" size="20">
			<?php if($attractions_info['file'][$i]):?>
				<img src="<?php echo CityGuideIndexInfo::UPLOAD_PATH.$attractions_info['file'][$i];?>" style="width:50px;height:50px;" />
			<?php endif;?>
		</div>
		<?php endfor;?>
		</p>

	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'attractions_info'); ?>
		<?php //echo $form->textArea($model,'attractions_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'attractions_info'); ?>
	</div>
	<div id="sceneryPics">
	
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
	(function($){
		$("#CityGuideIndexInfo_provinceid").change(function(){
			scenery.getCity($(this).val());
		})

		$('#CityGuideIndexInfo_cityid').change(function(){
			scenery.getAttractions($(this).val());
			});
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
					$("#CityGuideIndexInfo_cityid").html(options);
				})
	        },

	        getAttractions:function(cityid){
						$.post('<?php echo Yii::app()->createUrl('scenery/sceneryPic')?>',{cityid:cityid},function(data){
							$('#sceneryPics').html(data);
							});
		      },
	    }   
	}());

	<?php if($model->provinceid):?>
		scenery.getCity(<?php echo $model->provinceid;?>);
	<?php endif;?>
	<?php if($model->cityid):?>
		scenery.getAttractions(<?php echo $model->cityid;?>);
	<?php endif;?>

	$("input[name='scenery[]']").live('click',function(){
			var sceneryid=$(this).val();
			if($(this).attr('checked')=="checked"){
					var scenery_val='1';
				}else{
					var scenery_val='0';
					}
				$.post('<?php echo Yii::app()->createUrl('scenery/sceneryRecommand');?>',{sceneryid:sceneryid,scenery_val:scenery_val},function(ret){
						if(ret=="1"){
							alert("推荐景点成功！");
							}else{
								alert("取消推荐景点成功！");
							}
					});
			
		});

	$("input[name='scenery_pic[]']").live('click',function(){
		var scenerypicid=$(this).val();
		if($(this).attr('checked')=="checked"){
				var scenerypic_val='1';
			}else{
				var scenerypic_val='0';
				}
			$.post('<?php echo Yii::app()->createUrl('scenery/sceneryPicRecommand');?>',{scenerypicid:scenerypicid,scenerypic_val:scenerypic_val},function(ret){
					if(ret=="1"){
						alert("推荐景点图片成功！");
						}else{
							alert("取消推荐景点图片成功！");
						}
				});
		});
</script>