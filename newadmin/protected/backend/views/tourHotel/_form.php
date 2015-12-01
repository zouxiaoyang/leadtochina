<?php
/* @var $this TourHotelController */
/* @var $model TourHotel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tour-hotel-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php if(Yii::app()->user->hasFlash('TourHotelSubmitted')):?>
	<div class="flash-success"><?php echo Yii::app()->user->getFlash('TourHotelSubmitted');?></div>
	<?php endif;?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinceid'); ?>
		 <?php
		 	$provinceList = Scenery::getProvinceList();
		 	$provinceList[0] = '选择省份';
		 	ksort($provinceList);
		 	echo $form->dropDownList($model,'provinceid',$provinceList); 
		 ?>
		<?php echo $form->error($model,'provinceid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityid'); ?>
		<select id="TourHotel_cityid" name="TourHotel[cityid]">
			
		</select>
		<?php echo $form->error($model,'cityid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hotelid'); ?>
		<?php echo $form->textField($model,'hotelid',array('size'=>60)); ?>
		<?php echo $form->error($model,'hotelid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'root_type'); ?>
		<?php echo $form->textArea($model,'root_type',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'root_type'); ?>
	</div>


 <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::linkButton('预览',array(
            'submit'=>$this->createUrl('tourInfo/preview',array('tid'=>$model->tid)),
			'target'=>"_blank",
			'style'=>'margin-left:30px')
		); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
(function($){
	$("#TourHotel_provinceid").change(function(){
		hotel.getCity($(this).val());
	})
	$("#TourHotel_hotelid").autocomplete('<?php echo Yii::app()->createUrl('tourHotel/search');?>', {
		minChars: 1,
		width: 310,
		matchContains: "word",
		autoFill: false,
		formatItem: function(row, i, max) {return row[0] + '--' + row[1];},
		formatMatch: function(row, i, max) {return obj[1];},
		formatResult: function(row) {return row[0] + '--' + row[1];}
	});
})(jQuery);

var hotel = (function(){
	    return {
	    	provinceid: <?php if($model->provinceid) echo $model->provinceid; else echo 0;?>,
	    	cityid: <?php if($model->cityid) echo $model->cityid; else echo 0;?>,
	        getCity:function(provinceid){
	        	$.post('<?php echo Yii::app()->createUrl('scenery/city');?>',{provinceid:provinceid},function(data){
					var data = eval(data);
					var options = '<option value="0">选择城市</option>';
					var select = '';
					for (i in data){
						if(data[i].id == hotel.cityid) {select = 'selected="selected"';}
						else select = '';
						options += '<option value="'+data[i].id+'" '+select+'>'+data[i].name+'</option>';
					}
					$("#TourHotel_cityid").html(options);
				})
	        }
	    }   
	}());

	<?php if($model->provinceid):?>
		hotel.getCity(<?php echo $model->provinceid;?>);
	<?php endif;?>
</script>