<style>
#ui-datepicker-div{z-index:999 !important;}
</style>
<script src="/tour/js/ajaxFileUpload.js" type="text/javascript"></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reviews-form',
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
	    <?php echo $form->dropDownList($model, 'type', ImgVideo::$imgvideo_type_arr); ?>
	    <?php echo $form->error($model,'type'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'img_video'); ?>
	    <?php echo $form->dropDownList($model, 'img_video',array('0'=>'图片','1'=>'视频')); ?>
	    <?php echo $form->error($model,'img_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'http_url'); ?>
		<?php echo $form->textField($model,'http_url',array('size'=>30,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'http_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>30,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>
  <div class="row">
    <?php echo $form->labelEx($model,'上传首页review图片(大小:191x119)'); ?>
    <?php echo $form->fileField($model,'image',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'image'); ?>
	<br />
	<?php if($model->attributes['file_name']):?>
	      <img src="<?php echo ImageUtils::getThumbnail(ImgVideo::UPLOAD_PATH . $model->attributes['file_name'], '191x119');?>"  />
	<?php endif;?>
  </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<div id="add_img"></div>
</div><!-- form -->


<script>
function uploadImage(id,f_id,img_id) {
	if(!$("#imgfile").val()){
		alert('请选择图片');
		return false;
	}
    $.ajaxFileUpload({
    fileElementId: "imgfile",  
    url: '/tour/admin.php?r=reviews/Upload',  
    dataType: 'json',
    data: { id: id, f_id:f_id },
    beforeSend: function (XMLHttpRequest) {
    },
    success: function (data, textStatus){
		if(img_id=="imgfile"){
			var new_id = data.id;
			var img = '<p><a href="'+data.imgsrc+'" target="_blank"><img id="'+data.id+'" src="'+data.imgsrc+'" /></a><br /><a href="javascript:;" onclick="delPic('+data.id+', this);">删除</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="uploadImage('+data.id+','+f_id+','+new_id+');">修改</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="changePublished('+data.id+', this)">未审核</a></p>';
	      $("#add_img").append(img);
	      alert(data.file_infor);
	    }else{
	      $("#"+img_id).attr("src", data.imgsrc);
	      $("#"+img_id).parent('a').attr("href",data.imgsrc);
	    }
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {  
      
    },
    complete: function (XMLHttpRequest, textStatus) {  
    }
  });  
}
function delPic(id, obj){
	if(confirm('确定删除？')){
		$.get('<?php echo Yii::app()->createUrl("reviews/delPic");?>', {id:id}, function(ret){
			if(ret == 0) $(obj).parent("p").remove();
		})
	}
}

function editPic(id, obj){
	if(confirm('确定更换？')){
		$.get('<?php echo Yii::app()->createUrl("reviews/delPic");?>', {id:id}, function(ret){
			if(ret == 0) $(obj).parent("p").remove();
		})
	}
}
function changePublished(id, obj){
	$.get('<?php echo Yii::app()->createUrl("reviews/checkPic");?>', {id:id}, function(ret){
			if(ret == 0) $(obj).html("未审核");
			if(ret == 1) $(obj).html("已审核");
	})
}

function delComment(id, obj){
	if(confirm('确定删除？')){
		$.get('<?php echo Yii::app()->createUrl("reviews/delComment");?>', {id:id}, function(ret){
			if(ret == 0) $(obj).parent("p").remove();
		})
	}
}

function checkComment(id, obj){
	$.get('<?php echo Yii::app()->createUrl("reviews/checkComment");?>', {id:id}, function(ret){
			if(ret == 0) $(obj).html("未审核");
			if(ret == 1) $(obj).html("已审核");
	})
}
</script>
