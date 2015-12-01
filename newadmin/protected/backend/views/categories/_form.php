<?php
/* @var $this CategoriesController */
/* @var $model Categories */
/* @var $form CActiveForm */

$sec_cat_path_arr = explode(',', $model->sce_cat_path);
array_pop($sec_cat_path_arr);

$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Categories_description',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],
                    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"/attachment/ueditor/",
                    ',
));


$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Categories_jianjie',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'toolbars:[["fontfamily","fontsize","forecolor","bold","italic","strikethrough","|","insertunorderedlist","insertorderedlist","blockquote","|","link","unlink","highlightcode","|","undo","redo","source"]],
                    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"/attachment/ueditor/",
                    ',
));

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categories-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		一级分类：
		<select name="category1" id="category1">
			<option value="0">请选择</option>
			<?php 
			$oneCategories = Categories::model()->getCultureParentCategories(0);
			foreach($oneCategories as $k=>$v):?>
			<option value="<?php echo $k;?>" <?php if($k == $sec_cat_path_arr[0]):?>selected<?php endif;?>><?php echo $v;?></option>
			<?php endforeach;?>
		</select>
		
		<span id="twoCategory"></span>
		<span id="threeCategory"></span>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		<?php echo $form->textField($model,'provinceid'); ?>
		<?php echo $form->error($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityid'); ?>
		<?php echo $form->textField($model,'cityid'); ?>
		<?php echo $form->error($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
		<?php echo $form->error($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'routes'); ?>
		<?php echo $form->textField($model,'routes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'routes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_key'); ?>
		<?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seo_description'); ?>
		<?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seo_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jianjie'); ?>
		<?php echo $form->textArea($model,'jianjie',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'jianjie'); ?>
	</div>

	<div class="row">
    <?php echo $form->labelEx($model,'ufile'); ?>
    <?php echo $form->fileField($model,'image'); ?>
    <?php echo $form->error($model,'ufile'); ?>
  </div>

  <?php if($model->attributes['ufile']):?>
  <div class="row">
    <?php echo $form->labelEx($model,'图片预览'); ?>
    <p>
      <img src="<?php echo ImageUtils::getThumbnail(Categories::UPLOAD_PATH . $model->attributes['ufile'], '220x235');?>"  />
  </div>
  <?php endif;?>

  <div class="row">
		<?php echo $form->labelEx($model,'newpublished'); ?>
		<?php echo $form->dropDownList($model,'newpublished', Categories::$published); ?>
		<?php echo $form->error($model,'newpublished'); ?>
	</div>
	
  <div class="row">
		<?php echo $form->labelEx($model,'ordering'); ?>
		<?php echo $form->TextField($model,'ordering'); ?>
		<?php echo $form->error($model,'ordering'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
		var _category = (function(){
	    return {
		    		oneCategoryId: <?php if($sec_cat_path_arr[0]) echo $sec_cat_path_arr[0]; else echo 0;?>,
		    		twoCategoryId: <?php if($sec_cat_path_arr[1]) echo $sec_cat_path_arr[1]; else echo 0;?>,
				    //threeCategoryId: <?php if($sec_cat_path_arr[2]) echo $sec_cat_path_arr[2]; else echo 0;?>,
		    		getCategories: function(id){
		    			$.getJSON("<?php echo Yii::app()->createUrl('categories/getCategories');?>", {id:id}, function(data){
		    					  var options = '';
										for (i in data){
											if(i == _category.twoCategoryId) {select = 'selected="selected"';}
											else select = '';
											options += '<option value="'+i+'" '+select+'>'+data[i]+'</option>';
										}
										$("#twoCategory").html('二级分类：<select name="category2" id="category2">'+options+'</select>');
							})
		    		},
		    		getThreeCategories:function(id){
		    			$.getJSON("<?php echo Yii::app()->createUrl('categories/getCategories');?>", {id:id}, function(data){
		    					  var options = '';
										for (i in data){
											if(i == _category.twoCategoryId) {select = 'selected="selected"';}
											else select = '';
											options += '<option value="'+i+'" '+select+'>'+data[i]+'</option>';
										}
										$("#threeCategory").html('三级分类：<select name="category3">'+options+'</select>');
							})
		    		}
	        }
		}());

	(function($){
		$("#category1").live('change',function(){
			_category.getCategories($(this).val());
			$("#threeCategory").find("select").remove();
		})
		$("#category2").live('change',function(){
			_category.getThreeCategories($(this).val());
		})
		if(_category.oneCategoryId){
			_category.getCategories(_category.oneCategoryId);
		}
		/*
		if(_category.twoCategoryId){
			_category.getThreeCategories(_category.twoCategoryId);
		}*/
	}(jQuery))

</script>