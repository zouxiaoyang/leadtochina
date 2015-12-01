<?php
/* @var $this ChinacultureController */
/* @var $model Chinaculture */
/* @var $form CActiveForm */
$sec_cat_path_arr = explode(',', $model->cat_path);

$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Chinaculture_content',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'chinaculture-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
	<div class="row">
		一级分类：
		<select name="category1" id="category1">
			<option value="0">请选择</option>
			<?php 
			$oneCategories = Categories::model()->getCultureParentCategories(0,'com_chinaculture');
			foreach($oneCategories as $k=>$v):?>
			<option value="<?php echo $k;?>" <?php if($k == $sec_cat_path_arr[0]):?>selected<?php endif;?>><?php echo $v;?></option>
			<?php endforeach;?>
		</select>
		
		<span id="twoCategory"></span>
		<span id="threeCategory"></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
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
      <img src="<?php echo ImageUtils::getThumbnail(Chinaculture::UPLOAD_PATH . $model->attributes['ufile'], '220x235');?>"  />
  </div>
  <?php endif;?>

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
		<?php echo $form->labelEx($model,'enable'); ?>
		<?php echo $form->textField($model,'enable'); ?>
		<?php echo $form->error($model,'enable'); ?>
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
		    		threeCategoryId: <?php if($sec_cat_path_arr[2]) echo $sec_cat_path_arr[2]; else echo 0;?>,
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
											if(i == _category.threeCategoryId) {select = 'selected="selected"';}
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
		if(_category.twoCategoryId){
			_category.getThreeCategories(_category.twoCategoryId);
		}
	}(jQuery))

</script>