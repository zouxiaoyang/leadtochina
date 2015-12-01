<?php
/* @var $this CruisePorstTypeController */
/* @var $model CruisePorstType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cruise-porst-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    	<?php $model->cid =  Yii::app()->user->getState('CruisePorstTypeCid');
		echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid', array('readonly'=>true)); ?>
		<?php echo $form->error($model,'cid'); ?>
        
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pid'); ?>
		<?php echo $form->dropDownList($model, 'pid',CruisePorts::Getportslist()); ?>
		<?php echo $form->error($model,'pid'); ?>
	</div>
<!--
	<div class="row">
		<label for="CruisePorstType_schedule">Schedule （<a href="javascript:addSchedule('schedule_table');"> 增加一行</a>）</label>
		<div>
			<?php $arr = unserialize($model->schedule);?>
			<table style="width:70%" id="schedule_table">
				<tr><th>Arrive</th> <th>Depart</th> <th>Port</th></tr>
				<?php if(count($arr['arrive'])>0):?>
				<?php foreach($arr['arrive'] as $k=>$v):?>
					<tr>
							<td><input type="text" name="CruisePorstType[schedule][arrive][]" value="<?php echo $arr['arrive'][$k];?>" /></td>
							<td><input type="text" name="CruisePorstType[schedule][depart][]" value="<?php echo $arr['depart'][$k];?>" /></td>
							<td><input type="text" name="CruisePorstType[schedule][port][]" value="<?php echo $arr['port'][$k];?>" /> 
								<a href="javascript:;" class="deleteScheduleLine"> 删除</a>
								<a href="javascript:;" class="insertScheduleLine"> 插入行</a>
							</td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
					<tr>
							<td><input type="text" name="CruisePorstType[schedule][arrive][]" value="" /></td>
							<td><input type="text" name="CruisePorstType[schedule][depart][]" value="" /></td>
							<td><input type="text" name="CruisePorstType[schedule][port][]" value="" /> 
								<a href="javascript:;" class="deleteScheduleLine"> 删除</a>
								<a href="javascript:;" class="insertScheduleLine"> 插入行</a>
							</td>
					</tr>
			<?php endif;?>
			</table>
		</div>
	</div>-->

	<div class="row">
		<?php $arr2 = unserialize($model->tour_type_ids);?>
		<label for="CruisePorstType_tour_type_ids">Tour （<a href="javascript:addSchedule('tour_table');"> 增加一行</a>）</label>
		<div>
        <table style="width:70%" id="tour_table">
				<tr><th>Tour　Type</th> <th>Tour Ids</th></tr>
				<?php if(count($arr2['tour_type'])>0):?>
				<?php foreach($arr2['tour_type'] as $k=>$v):?>
					<tr>
                        <td><input type="text" name="CruisePorstType[tour_type_ids][tour_type][]" value="<?php echo $arr2['tour_type'][$k];?>" /></td>
                        <td><input type="text" name="CruisePorstType[tour_type_ids][tour_ids][]" value="<?php echo $arr2['tour_ids'][$k];?>" />
                            <a href="javascript:;" class="deleteTourLine"> 删除</a>
                            <a href="javascript:;" class="insertTourLine"> 插入行</a>
                        </td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
					<tr>
						<td><input type="text" name="CruisePorstType[tour_type_ids][tour_type][]" value="" /></td>
						<td><input type="text" name="CruisePorstType[tour_type_ids][tour_ids][]" value="" />
							<a href="javascript:;" class="deleteTourLine"> 删除</a>
							<a href="javascript:;" class="insertTourLine"> 插入行</a>
						</td>
					</tr>
			<?php endif;?>
			</table>
        </div>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

<script>
	function addSchedule(id){
		var tr = $("#"+id).find("tr").eq(1).clone();
		$(tr).find("input").val("");
		$("#"+id).append(tr);
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

	
	$(".deleteTourLine").live("click",function(){
		if($("#tour_table").find("tr").length <= 2){
			return;
		}
		$(this).parents("tr").remove();
	})

	$(".insertTourLine").live("click", function(){
		var tr = $("#tour_table").find("tr").eq(1).clone();
		$(tr).find("input").val("");
		$(this).parents("tr").after(tr);
	})

</script>
<!-- form -->