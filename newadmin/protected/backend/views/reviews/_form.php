<style>
#ui-datepicker-div{z-index:999 !important;}
.clear{ clear:both;}
</style>
<script src="http://cdn.bootcss.com/jquery-browser/0.0.8/jquery.browser.min.js"></script>
<script src="/newadmin/js/ajaxFileUpload.js" type="text/javascript"></script>
<?php
/* @var $this ReviewsController */
/* @var $model Reviews */
/* @var $form CActiveForm */

    $this->widget('ext.ueditor.Ueditor',
            array(
                'getId'=>'Reviews_description',
                'UEDITOR_HOME_URL'=>"/",
                'options'=>'wordCount:false,
                    elementPathEnabled:false,
                    ',
            ));
    /*$this->widget('ext.ueditor.Ueditor',
        array(
            'getId'=>'Reviews_description',
            'UEDITOR_HOME_URL'=>"/",
            'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],wordCount:false,
                elementPathEnabled:false,
                imagePath:"/attachment/ueditor/",
                ',
        ));*/
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reviews-form',
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

    <div class="row">
    <?php echo $form->labelEx($model,'dateline'); ?>
    <?php  
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(  
        'model'=>$model,  
        'attribute'=>'dateline',  
        'options' => array(  
            'dateFormat'=>'yy-mm-dd', //database save format  
            'altFormat'=>'yy-mm-dd' //display format  
            //'showAnim'=>'fold',  
            //'yearRange'=>'-3:+3'   
        ),  
        'htmlOptions'=>array(  
            'readonly'=>'readonly',  
            'style'=>'width:90px;',  
        )  
    ));?>  
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'cityid'); ?>
    <?php echo $form->dropDownList($model, 'cityid', Yii::app()->params['theme_list']); ?>
    <?php echo $form->error($model,'cityid'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'nationality'); ?>
    <?php echo $form->textField($model,'nationality',array('size'=>20,'maxlength'=>20)); ?>
    <?php echo $form->error($model,'nationality'); ?>
  </div>

 <div class="row">
    <?php echo $form->labelEx($model,'recommend'); ?>
    <?php echo $form->radioButtonList($model,'recommend',array('否','是'),array('separator'=>'','labelOptions'=>array('style'=>'display:inline;margin-right:5px;'))); ?>
    <?php echo $form->error($model,'published'); ?>
  </div>

 <div class="row">
    <?php echo $form->labelEx($model,'is_student'); ?>
    <?php echo $form->radioButtonList($model,'is_student',array('否','是'),array('separator'=>'','labelOptions'=>array('style'=>'display:inline;margin-right:5px;'))); ?>
    <?php echo $form->error($model,'published'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'tour_id'); ?>
    <?php echo $form->textField($model,'tour_id',array('size'=>20,'maxlength'=>20)); ?>
    <?php echo $form->error($model,'tour_id'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'上传首页review图片(大小:191x119)'); ?>
    <?php echo $form->fileField($model,'image',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'image'); ?>
	<br />
	<?php if($model->attributes['index_pic']):?>
	      <img src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH . $model->attributes['index_pic'], '191x119');?>"  />
	<?php endif;?>
  </div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
 
	<div class="row">
		<?php echo $form->labelEx($model,'review_type'); ?>
		<?php echo $form->radioButtonList($model,'review_type',Reviews::$reviews_type_arr,array('separator'=>'','labelOptions'=>array('style'=>'display:inline;margin-right:5px;'))); ?>
		<?php echo $form->error($model,'review_type'); ?>
	</div>

<?php /* ?>

	<div class="row">
		<?php echo $form->labelEx($model,'published'); ?>
		<?php echo $form->radioButtonList($model,'published',Reviews::$published_arr,array('separator'=>'','labelOptions'=>array('style'=>'display:inline;margin-right:5px;'))); ?>
		<?php echo $form->error($model,'published'); ?>
	</div>
<?php */ ?>
	<input id="Reviews_published_1" type="hidden" name="Reviews[published]" value="1">

	<input id="hide_pic_list_id" type="hidden" value="" name="hide_pic_id"/>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php if(!$model->id) {?>
		<input type="file" id="imgfile" name="imgfile" cols="50" rows="6">
		<a href="javascript:;" onclick="uploadImage('',-1,'imgfile',1);">&nbsp;&nbsp;(106x106)&nbsp;&nbsp;上传评论列表页面图片</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<p></p>
	<div id="add_img_list"></div>
	<p class="clear"></p>
		<input type="file" id="imgfile_1" name="imgfile" cols="50" rows="6">
		<a href="javascript:;" onclick="uploadImage('',-1,'imgfile_1',2);">&nbsp;&nbsp;(350x230)&nbsp;&nbsp;上传评论具体页面页图片</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<p></p>
	<div id="add_img_detail"></div>
<?php } ?>


<?php if($model->id):?>
<p style="font-weight:bold;">以下审核评论部分:</p>
<?php foreach($model->reviewsComment as $v):?>
	<p>
		<div><?php echo $v->comment;?>
			<a href="javascript:;" onclick="delComment(<?php echo $v->id;?>, this);">删除</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="javascript:;" onclick="checkComment(<?php echo $v->id;?>, this);"><?php if($v->published!=1){?>未审核<?php }else{?> 已审核<?php }?></a>
		</div>
	</p>
<?php endforeach;?>

<p style="font-weight:bold;">以下审核图片部分:</p>
	<input type="file" id="imgfile" name="imgfile" cols="50" rows="6">
	<a href="javascript:;" onclick="uploadImage('',<?=$model->id?>,'imgfile',1);">&nbsp;&nbsp;(106x106)&nbsp;&nbsp;上传评论列表页图片</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<p></p>
	<div id="add_img_list"></div>
<?php foreach($model->reviewsPic as $v):?>
	<?php if($v->type==1){ ?>
		<p style="float:left; margin-right:8px;">
		<a href="<?php echo Yii::app()->request->baseUrl.'/'.Reviews::UPLOAD_PATH.$v->pic;?>" target="_blank">
			<img id="pic_<?=$v->id?>" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$v->pic, '106x106');?>" />
		</a>
		<br />
		<a href="javascript:;" onclick="delPic(<?php echo $v->id;?>, this);">删除</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="javascript:;" onclick="uploadImage(<?php echo $v->id;?>,<?=$model->id?>,'pic_<?=$v->id?>',0);">修改</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<!-- 
		<a href="javascript:;" onclick="changePublished(<?php echo $v->id;?>, this);"><?php if($v->published!=1){?>未审核<?php }else{?> 已审核<?php }?></a> -->
        
       
	</p>
	<?php } ?>
<?php endforeach;?> 

<p class="clear"></p>

<input type="file" id="imgfile_1" name="imgfile" cols="50" rows="6">
	<a href="javascript:;" onclick="uploadImage('',<?=$model->id?>,'imgfile_1',2);">&nbsp;&nbsp;(350x230)&nbsp;&nbsp;上传评论具体页面图片</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<p></p>

<div id="add_img_detail"></div>

<?php foreach($model->reviewsPic as $v):?>
	<?php if($v->type==2){ ?>
		<p style="float:left; margin-right:8px;">
		<a href="<?php echo Yii::app()->request->baseUrl.'/'.Reviews::UPLOAD_PATH.$v->pic;?>" target="_blank">
			<img id="pic_<?=$v->id?>" src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$v->pic, '350x230');?>" />
		</a>
		<br />
		<a href="javascript:;" onclick="delPic(<?php echo $v->id;?>, this);">删除</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="javascript:;" onclick="uploadImage(<?php echo $v->id;?>,<?=$model->id?>,'pic_<?=$v->id?>',0);">修改</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<!-- <a href="javascript:;" onclick="changePublished(<?php echo $v->id;?>, this);"><?php if($v->published!=1){?>未审核<?php }else{?> 已审核<?php }?></a> -->
	</p>
	<?php } ?>
<?php endforeach;?>
<p class="clear"></p>
<?php endif;?>
<?php $this->endWidget(); ?>
</div><!-- form -->


<script>
function uploadImage(id,f_id,img_id,type) {
	
	if(type){
		var img_id_para = img_id;
	}else{
		var img_id_para = 'imgfile';
	}
	if(!$("#"+img_id_para).val()){
		alert('请选择图片');
		return false;
	}
    $.ajaxFileUpload({
    fileElementId:img_id_para,
	secureuri: false,
    url: '/newadmin/admin.php?r=reviews/Upload',  
    dataType: 'json',
    data: { id: id, f_id:f_id,type:type },
    beforeSend: function (XMLHttpRequest) {
    },
    success: function (data, textStatus){
		if(img_id=="imgfile" || img_id=="imgfile_1"){
			var new_id = data.id;
			$('#hide_pic_list_id').val($('#hide_pic_list_id').val()+'--'+data.id);// 设置隐藏域的值;
			var img = '<p style="float:left;"><a href="'+data.imgsrc+'" target="_blank"><img id="'+data.id+'" src="'+data.imgsrc+'" /></a><br/><a href="javascript:;" onclick="delPic('+data.id+', this);">删除</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="uploadImage('+data.id+','+f_id+','+new_id+',0);">修改</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- <a href="javascript:;" onclick="changePublished('+data.id+', this)">未审核</a>--></p>';
		if(type==1){ //LIST
			$("#add_img_list").append(img);
		}else if(type==2){ //DETAIL
			$("#add_img_detail").append(img);
		}
	      alert(data.file_infor);
	    }else{
	      $("#"+img_id).attr("src", data.imgsrc);
	      $("#"+img_id).parent('a').attr("href",data.imgsrc);
	    }
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {  
      console.log('error');
    },
    complete: function (XMLHttpRequest, textStatus) {  
		console.log('complete');
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
