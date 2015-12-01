<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php
/* @var $this ContentController */
/* @var $model Content */
/* @var $form CActiveForm */
?>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Content_introtext',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_alias'); ?>
		<?php echo $form->textField($model,'title_alias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_alias'); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->labelEx($model,'introtext'); ?>
		<?php echo $form->textArea($model,'introtext',array('style'=>'width:600px;')); ?>
		<?php echo $form->error($model,'introtext'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sectionid'); ?>
		<?php echo $form->dropDownList($model, 'sectionid', array(Sections::getSectionList()));?>
		<?php echo $form->error($model,'sectionid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catid'); ?>
		<?php //echo $form->dropDownList($model,'catid',array()); ?>
		<select id="Content_catid" name="Content[catid]"></select>
		<?php echo $form->error($model,'catid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'上传文件'); ?>
		<?php echo $form->fileField($model,'images',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'images'); ?>
	</div>
	<?php if($model->attributes['images']):?>
	<div class="row">
		<?php echo $form->labelEx($model,'图片预览'); ?>
		<p>
		<img src="<?php echo ImageUtils::getThumbnail(Content::UPLOAD_PATH . $model->attributes['images'], '200x100');?>"  />
	</div>
	<?php endif;?>

	<div class="row">
		<?php echo $form->labelEx($model,'metakey'); ?>
		<?php echo $form->textArea($model,'metakey',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metakey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metadesc'); ?>
		<?php echo $form->textArea($model,'metadesc',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metadesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_url'); ?>
		<?php echo $form->textField($model,'seo_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_url'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		<?php echo $form->dropDownList($model,'provinceid',Scenery::getProvinceList()); ?>
		<?php echo $form->error($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityid'); ?>
		<?php echo $form->dropDownList($model, 'cityid', array()); ?>
		<?php echo $form->error($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province_name'); ?>
		<?php echo $form->textField($model,'province_name',array('size'=>50,'maxlength'=>50,'readonly'=>true)); ?>
		<?php echo $form->error($model,'province_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_name'); ?>
		<?php echo $form->textField($model,'city_name',array('size'=>50,'maxlength'=>50,'readonly'=>true)); ?>
		<?php echo $form->error($model,'city_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'index_recommend'); ?>
		<?php echo $form->dropDownList($model,'index_recommend',array('0'=>'非推荐', '1'=>'推荐')); ?>
		<?php echo $form->error($model,'index_recommend'); ?>
	</div>
	
	<hr>	
	
	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->dropDownList($model,'created_by',array('62'=>'Administrator','69'=>'Developer','63'=>'Editor')); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'created_by_alias'); ?>
		<?php echo $form->textField($model,'created_by_alias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'created_by_alias'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'access'); ?>
		<?php echo $form->dropDownList($model,'access',array('0'=>'公开','1'=>'注册会员','2'=>'管理人员')); ?>
		<?php echo $form->error($model,'access'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->dropDownList($model,'modified_by',array('62'=>'Administrator','69'=>'Developer','63'=>'Editor')); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'checked_out'); ?>
		<?php echo $form->dropDownList($model,'checked_out',array('62'=>'Administrator','69'=>'Developer','63'=>'Editor')); ?>
		<?php echo $form->error($model,'checked_out'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits'); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created',array('onclick'=>"WdatePicker({dateFmt:'yyyy-M-d H:i:s',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
		<?php echo $form->error($model,'created'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'checked_out_time'); ?>
		<?php echo $form->textField($model,'checked_out_time',array('onclick'=>"WdatePicker({dateFmt:'yyyy-M-d H:i:s',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
		<?php echo $form->error($model,'checked_out_time'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'modified'); ?>
		<?php echo $form->textField($model,'modified',array('onclick'=>"WdatePicker({dateFmt:'yyyy-M-d H:i:s',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
		<?php echo $form->error($model,'modified'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'publish_up'); ?>
		<?php echo $form->textField($model,'publish_up',array('onclick'=>"WdatePicker({dateFmt:'yyyy-M-d H:i:s',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
		<?php echo $form->error($model,'publish_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publish_down'); ?>
		<?php echo $form->textField($model,'publish_down',array('onclick'=>"WdatePicker({dateFmt:'yyyy-M-d H:i:s',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
		<?php echo $form->error($model,'publish_down'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->dropDownList($model, 'state',array('0'=>'未发布','1'=>'已发布','-1'=>'已存档','-2'=>'其他')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
$('#Content_sectionid').change(function(){
	Content.getCategory($(this).val());
});
$('#Content_provinceid').change(function(){
	Content.getCity($(this).val());
	$('#Content_province_name').val($(this).find('option:selected').html());
	$('#Content_city_name').val('');
});
$('#Content_cityid').change(function(){
	$('#Content_city_name').val($(this).find('option:selected').html());
});
var Content=(function(){
	return{
		sectionid:<?php if($model->sectionid) echo $model->sectionid;else echo '0';?>,
		getCategory:function(sectionid){
			$.post('<?php echo Yii::app()->createUrl('content/category');?>',{sectionId:sectionid},function(data){
				var data = eval(data);
				var options = "<option value=''>请选择分类</option>";
				var select='';
				for (i in data){
					if(data[i].id=='<?php echo $model->catid;?>'){
						select='selected="selected"';
					}else{
						select='';
						}
					options += '<option value="'+data[i].id+'"'+select+'>'+data[i].title+'</option>';
				}
				$('#Content_catid').html(options);
				});
		},
		provinceid: <?php if($model->provinceid) echo $model->provinceid; else echo 0;?>,
		cityid: <?php if($model->cityid) echo $model->cityid; else echo 0;?>,
		getCity:function(provinceid){
		    $.post('<?php echo Yii::app()->createUrl('scenery/city');?>',{provinceid:provinceid},function(data){
				var data = eval(data);
				var options = '<option value="0">选择城市</option>';
				var select = '';
				for (i in data){
					if(data[i].id == Content.cityid) {select = 'selected="selected"';}
						else select = '';
						options += '<option value="'+data[i].id+'" '+select+'>'+data[i].name+'</option>';
					}
					$("#Content_cityid").html(options);
				})
		},
	}
}());
<?php if($model->sectionid):?>
	Content.getCategory(<?php echo $model->sectionid;?>);
<?php endif;?>
<?php if($model->provinceid):?>
	Content.getCity(<?php echo $model->provinceid;?>);
<?php endif;?>
</script>