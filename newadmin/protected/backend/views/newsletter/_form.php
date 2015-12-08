<?php
/* @var $this NewsletterController */
/* @var $model Newsletter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'newsletter-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'top_tour_cities');
			$top_tour_cities_arr = unserialize($model->top_tour_cities);
		?>
		<?php for($i=0; $i<6; $i++):?>
		<div>
			标题:<input type="text" name="title[]" value="<?php echo $top_tour_cities_arr['title'][$i];?>" />
			URL:<input type="text" name="url[]" value="<?php echo $top_tour_cities_arr['url'][$i];?>" />
			描述:<input type="text" name="desc[]" size="40" value="<?php echo $top_tour_cities_arr['desc'][$i];?>" />
			图片：<input type="file" name="files[]" size="10"> <img src="<?php echo Newsletter::UPLOAD_PATH.$top_tour_cities_arr['file'][$i];?>" style="width:50px;height:50px;" />
		</div>
		<?php endfor;?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banner'); ?>
		<?php echo $form->fileField($model,'banner_img',array('size'=>20,'maxlength'=>20)); ?>
		<img src="<?php echo Newsletter::UPLOAD_PATH.$model->banner;?>" style="width:50px;height:50px;" />
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_link'); ?>
		<?php echo $form->textField($model,'banner_link', array('size'=>50)); ?>
	</div>

	<div class="row">
		<?php 
			echo $form->labelEx($model,'more_china_tours'); 
			$more_china_tours = unserialize($model->more_china_tours);
		?>
		<?php for($i=0; $i<5; $i++):?>
		<div>
			title:<input type="text" name="title2[]" value="<?php echo $more_china_tours['title2'][$i];?>" />
			route:<input type="text" name="route2[]" value="<?php echo $more_china_tours['route2'][$i];?>" />
			URL:<input type="text" name="url2[]" value="<?php echo $more_china_tours['url2'][$i];?>" />
			tags：<input type="text" name="tags[]" value="<?php echo $more_china_tours['tags'][$i];?>"  size="50">
		</div>
		<?php endfor;?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'more_banner'); ?>
		<?php echo $form->fileField($model,'more_banner_img'); ?>
		<img src="<?php echo Newsletter::UPLOAD_PATH.$model->more_banner;?>" style="width:50px;height:50px;" />
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'more_banner_link'); ?>
		<?php echo $form->textField($model,'more_banner_link', array('size'=>50)); ?>
	</div>

	<div class="row">
		<?php 
			echo $form->labelEx($model,'theme_tours'); 
			$theme_tours_arr = unserialize($model->theme_tours);
		?>
		<?php for($i=0; $i<6; $i++):?>
		<div>
			标题:<input type="text" name="title3[]" value="<?php echo $theme_tours_arr['title3'][$i];?>" />
			URL:<input type="text" name="url3[]" value="<?php echo $theme_tours_arr['url3'][$i];?>" />
		</div>
		<?php endfor;?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
