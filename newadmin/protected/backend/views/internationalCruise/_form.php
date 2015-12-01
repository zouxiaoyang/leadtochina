<?php
/* @var $this InternationalCruiseController */
/* @var $model InternationalCruise */
/* @var $form CActiveForm */
?>

<?php 
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'InternationalCruise_intro',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'    wordCount:false,
                    elementPathEnabled:false,
                    imagePath:"",
                    initialContent:"",
                    ',
  ));
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'international-cruise-form',
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
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6, 'cols'=>50, 'style'=>'width:600px')); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort',array('size'=>60,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>

	<div class="row">
		<label for="InternationalCruise_schedule">Schedule （<a href="javascript:addSchedule();"> 增加一行</a>）</label>
		<div>
			<?php $arr = unserialize($model->schedule);?>
			<table style="width:70%" id="schedule_table">
				<tr><th>Arrive</th> <th>Depart</th> <th>Port</th><th>Status</th><th>Url</th></tr>
				<?php if($arr):?>
				<?php foreach($arr['arrive'] as $k=>$v):?>
					<tr>
							<td><input type="text" name="InternationalCruise[schedule][arrive][]" value="<?php echo $arr['arrive'][$k];?>" /></td>
							<td><input type="text" name="InternationalCruise[schedule][depart][]" value="<?php echo $arr['depart'][$k];?>" /></td>
							<td><input type="text" name="InternationalCruise[schedule][port][]" value="<?php echo $arr['port'][$k];?>" /> </td>
							<td><select  name="InternationalCruise[schedule][status][]">
								<option <?php if($arr['status'][$k]==1):?> selected="selected"<?php endif;?>value="1">Start</option>
								<option<?php if($arr['status'][$k]==2):?> selected="selected"<?php endif;?> value="2">Passby</option>
								<option<?php if($arr['status'][$k]==3):?> selected="selected"<?php endif;?> value="3">Terminal</option>
							</select></td>
							<td><input type="text" name="InternationalCruise[schedule][url][]" value="<?php echo $arr['url'][$k];?>" /> 
									<a href="javascript:;" class="deleteScheduleLine"> 删除</a>
									<a href="javascript:;" class="insertScheduleLine"> 插入行</a>
							</td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
					<tr>
							<td><input type="text" name="InternationalCruise[schedule][arrive][]" value="" /></td>
							<td><input type="text" name="InternationalCruise[schedule][depart][]" value="" /></td>
							<td><input type="text" name="InternationalCruise[schedule][port][]" value="" /> </td>
							<td><input type="text" name="InternationalCruise[schedule][url][]" value="" /> <a href="javascript:;" class="deleteScheduleLine"> 删除</a>
								<a href="javascript:;" class="insertScheduleLine"> 插入行</a>
							</td>
					</tr>
			<?php endif;?>
			</table>
		</div>

		
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'上传文件'); ?>
		<?php echo $form->fileField($model,'image',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	<?php if($model->attributes['pic']):?>
	<div class="row">
		<?php echo $form->labelEx($model,'图片预览'); ?>
		<p>
		<img src="<?php echo ImageUtils::getThumbnail(InternationalCruise::UPLOAD_PATH . $model->attributes['pic'], '920x250');?>"  />
	</div>
	<?php endif;?>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>
	function addSchedule(){
		var tr = $("#schedule_table").find("tr").eq(1).clone();
		$(tr).find("input").val("");
		$("#schedule_table").append(tr);
	}

	$(".deleteScheduleLine").live("click",function(){
		if($("#schedule_table").find("tr").length <= 2){
			return;
		}
		$(this).parents("tr").remove();
	})



	$(".insertScheduleLine").live("click", function(){
		var tr = $("#schedule_table").find("tr").eq(1).clone();
		$(tr).find("input").val("");
		$(this).parents("tr").after(tr);
	})

</script>