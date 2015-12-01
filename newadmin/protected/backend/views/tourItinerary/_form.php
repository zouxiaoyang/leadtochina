<?php
/* @var $this TourItineraryController */
/* @var $model TourItinerary */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScriptFile('/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js');?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tour-itinerary-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php if(Yii::app()->user->hasFlash('TourItinerarySubmitted')):?>
	<div class="flash-success"><?php echo Yii::app()->user->getFlash('TourItinerarySubmitted');?></div>
	<?php endif;?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'tid'); ?>
		<?php 
			$model->tid = Yii::app()->user->getState('tourinfo_id');
			echo $form->hiddenField($model,'tid'); 
		?>
		<?php echo $form->error($model,'tid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'days'); ?>
		<?php echo $form->textField($model,'days'); ?>
		<?php echo $form->error($model,'days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'today_date'); ?>
		<?php echo $form->textField($model,'today_date',array('size'=>20,'maxlength'=>20,'onclick'=>"WdatePicker({dateFmt:'yyyy-M-d',minDate:'%y-%M-%d'})",'class'=>'Wdate')); ?>
		<?php echo $form->error($model,'today_date'); ?>		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_transport'); ?>
		<?php echo $form->textField($model,'place_transport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place_transport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accommodation'); ?>
		<?php echo $form->textField($model,'accommodation',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'accommodation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meals'); ?>
		<?php
			$model->meals = $model->meals ? $model->meals : 'B,L';
			echo $form->textArea($model,'meals',array('rows'=>3, 'cols'=>50)); 
		?>
		<?php echo $form->error($model,'meals'); ?>
	</div>

	<div class="row" id="tourItineraryScenery">
		<?php echo $form->labelEx($model,'scenery_ids'); ?>	
		<input type="text" value="" id="TourItinerary_scenery_ids" name="scenery_ids" maxlength="100" size="60" >
		<input type="button" id="add_scenery" value="Add" />
		<?php foreach ((array)$scenery_arr as $v):?>
		<span id="scenery_<?php echo $v->id;?>"><br/><input type="text" name="TourItinerary[scenery_ids][]" value="<?php echo $v->id."--".$v->name;?>" size="40"/> <a onClick="scenery_delete('scenery_<?php echo $v->id;?>')" style="cursor:pointer;">Delete</a></span>
		<?php endforeach;?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'today_activities'); ?>
		<?php echo $form->textArea($model,'today_activities',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'today_activities'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php 
		/*
		echo CHtml::linkButton('预览',array(
            'submit'=>$this->createUrl('tourInfo/preview',array('tid'=>$model->tid)),
			'target'=>"_blank",
			'style'=>'margin-left:30px')
		); 
		*/
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->



<script>
(function($){
	$("#TourItinerary_scenery_ids").autocomplete('<?php echo Yii::app()->createUrl('scenery/search');?>', {
		minChars: 1,
		width: 310,
		matchContains: "word",
		autoFill: false,
		formatItem: function(row, i, max) {return row[0] + '--' + row[1];},
		formatMatch: function(row, i, max) {},
		formatResult: function(row) {return row[0] + '--' + row[1];}
	});
	
	$("#add_scenery").click(function(){
		
		var create_id=$('#TourItinerary_scenery_ids').val().split('--',1);
		if(create_id == '') return;
		$('#TourItinerary_today_activities').parents("div.row").before('<span id="scenery_'+create_id+'"><br /><input type="text" name="TourItinerary[scenery_ids][]" value="'+$('#TourItinerary_scenery_ids').val()+'" size="40"/> <a onClick="scenery_delete(\'scenery_'+create_id+'\')" style="cursor:pointer;">Delete</a></span>');
		
		var today_activities_arr = [];
		$("input[name='TourItinerary[scenery_ids][]']").each(function(){
			var temp_arr = $(this).val().split('--');
			today_activities_arr.push(temp_arr[1]);
		})
		$("#TourItinerary_today_activities").val(today_activities_arr.join(','));

		$('#TourItinerary_scenery_ids').val('');
	})	
}(jQuery));
function scenery_delete(scenery_id){
	$("#"+scenery_id).remove();

	var today_activities_arr = [];
	$("input[name='TourItinerary[scenery_ids][]']").each(function(){
			var temp_arr = $(this).val().split('--');
			today_activities_arr.push(temp_arr[1]);
	})
	$("#TourItinerary_today_activities").val(today_activities_arr.join(','));
}

	

</script>