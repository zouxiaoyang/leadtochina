<?php
/* @var $this CruisePortsExcursionsController */
/* @var $model CruisePortsExcursions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cruise-ports-excursions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php 
		$model->cid =  Yii::app()->user->getState('CruisePortsExcursionsCid');
		
		echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid', array('readonly'=>true)); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<label for="CruisePortsExcursions_schedule">Schedule （<a href="javascript:addSchedule();"> 增加一行</a>）</label>
		<div>
			<?php $arr = unserialize($model->schedule);?>
			<table style="width:70%" id="schedule_table">
				<tr><th>Arrive</th> <th>Depart</th> <th>Port</th></tr>
				<?php if($arr):?>
				<?php foreach($arr['arrive'] as $k=>$v):?>
					<tr>
							<td><input type="text" name="CruisePortsExcursions[schedule][arrive][]" value="<?php echo $arr['arrive'][$k];?>" /></td>
							<td><input type="text" name="CruisePortsExcursions[schedule][depart][]" value="<?php echo $arr['depart'][$k];?>" /></td>
							<td><input type="text" name="CruisePortsExcursions[schedule][port][]" value="<?php echo $arr['port'][$k];?>" /> 
								<a href="javascript:;" class="deleteScheduleLine"> 删除</a>
								<a href="javascript:;" class="insertScheduleLine"> 插入行</a>
							</td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
					<tr>
							<td><input type="text" name="CruisePortsExcursions[schedule][arrive][]" value="" /></td>
							<td><input type="text" name="CruisePortsExcursions[schedule][depart][]" value="" /></td>
							<td><input type="text" name="CruisePortsExcursions[schedule][port][]" value="" /> 
								<a href="javascript:;" class="deleteScheduleLine"> 删除</a>
								<a href="javascript:;" class="insertScheduleLine"> 插入行</a>
							</td>
					</tr>
			<?php endif;?>
			</table>
		</div>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'tour_ids'); ?>
		<?php echo $form->textField($model,'tour_ids',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'tour_ids'); ?>
	</div>

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