<?php
/* @var $this CruisePortsController */
/* @var $model CruisePorts */
/* @var $form CActiveForm */
?>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'CruisePorts_portIntro',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'CruisePorts_tourIntro',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    ',
  ));
  ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cruise-ports-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cityName'); ?>
		<?php echo $form->textField($model,'cityName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'cityName'); ?>
	</div>
	
	<div class="row">
	<label>港口城市类别 （<a href="javascript:addcatNameUrlLine();"> 增加一行</a>）</label>
		<ul id="catNameUrl">
		<?php $catNameUrl=unserialize($model->catNameUrl);?>
		<?php foreach ((array)$catNameUrl['name'] as $k=>$v):?>
		<li>类型别名：<input type="text" name="CruisePorts[catNameUrl][name][]" value="<?php echo $v;?>"> 链接地址：<input type="text" name="CruisePorts[catNameUrl][url][]" size="43" value="<?php echo $catNameUrl['url'][$k];?>"> <a href="javascript:;" class="deleteCatNameUrl"> 删除本行</a></li>
		<?php endforeach;?>
		</ul>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portIntro'); ?>
		<?php echo $form->textArea($model,'portIntro',array('rows'=>6, 'cols'=>50, 'style'=>"width:700px;")); ?>
		<?php echo $form->error($model,'portIntro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'行程ID，用(,)隔开'); ?>
		<?php echo $form->textField($model,'tourIds',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tourIds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'景点ID，用(,)隔开'); ?>
		<?php echo $form->textField($model,'sceneryIds',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sceneryIds'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tourIntro'); ?>
		<?php echo $form->textArea($model,'tourIntro',array('rows'=>6, 'cols'=>50, 'style'=>"width:600px;")); ?>
		<?php echo $form->error($model,'tourIntro'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->fileField($model,'pic'); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>
	
	<?php if($model->pic):?>
	  <div class="row">
	    <?php echo $form->labelEx($model,'图片预览'); ?>
	    <p>
	      <img src="<?php echo ImageUtils::getThumbnail(CruisePorts::UPLOAD_PATH . $model->pic, '140x140');?>"  />
	  </div>
	  <?php endif;?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
	function addcatNameUrlLine(){
		$('#catNameUrl').append('<li>类型别名：<input type="text" name="CruisePorts[catNameUrl][name][]"> 链接地址：<input type="text" name="CruisePorts[catNameUrl][url][]" size="43"> <a href="javascript:;" class="deleteCatNameUrl"> 删除本行</a></li>');
	}
	$(".deleteCatNameUrl").live('click',function(){
		$(this).parent('li').remove();
		});
</script>