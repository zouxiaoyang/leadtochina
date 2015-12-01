<?php
/* @var $this CruiseController */
/* @var $model Cruise */
/* @var $form CActiveForm */
?>
<style>
td { 
font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
color: #4f6b72; 
border-right: 1px solid #C1DAD7; 
border-bottom: 1px solid #C1DAD7; 
border-top: 1px solid #C1DAD7; 
letter-spacing: 2px; 
text-align: left; 
padding: 6px 6px 6px 12px; 
background: #CAE8EA  no-repeat; 
}
</style>
<?php
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Cruise_equipment',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                minFrameHeight:"30",
                ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Cruise_introduction',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                minFrameHeight:"30",
                ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Cruise_price_include',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                minFrameHeight:"20",
                ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Cruise_price_exclude',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                minFrameHeight:"20",
                ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Cruise_tips',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                minFrameHeight:"30",
                ',
  ));
$this->widget('ext.ueditor.Ueditor',
  array(
    'getId'=>'Cruise_warm_note',
    'UEDITOR_HOME_URL'=>"/",
    'options'=>'wordCount:false,
                elementPathEnabled:false,
                imagePath:"",
                minFrameHeight:"40",
                ',
  ));
?>

<div class="form">

  <?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'cruise-form',
  'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

  <p class="note">Fields with <span class="required">*</span> are required.</p>

  <?php echo $form->errorSummary($model); ?>

  <div class="row">
    <?php echo $form->labelEx($model,'cruise_name'); ?>
    <?php echo $form->textField($model,'cruise_name',array('size'=>60,'maxlength'=>100)); ?>
    <?php echo $form->error($model,'cruise_name'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'category'); ?>
    <?php echo $form->dropDownList($model,'category',Cruise::$category); ?>
    <?php echo $form->error($model,'category'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'year_built'); ?>
    <?php echo $form->textField($model,'year_built',array('size'=>4,'maxlength'=>4)); ?>
    <?php echo $form->error($model,'year_built'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'total_passengers'); ?>
    <?php echo $form->textField($model,'total_passengers'); ?>
    <?php echo $form->error($model,'total_passengers'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'crew'); ?>
    <?php echo $form->textField($model,'crew'); ?>
    <?php echo $form->error($model,'crew'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'length'); ?>
    <?php echo $form->textField($model,'length',array('size'=>6,'maxlength'=>6)); ?>
    <?php echo $form->error($model,'length'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'width'); ?>
    <?php echo $form->textField($model,'width',array('size'=>6,'maxlength'=>6)); ?>
    <?php echo $form->error($model,'width'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'passenger_decks'); ?>
    <?php echo $form->textField($model,'passenger_decks'); ?>
    <?php echo $form->error($model,'passenger_decks'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'cruise_grade'); ?>
    <?php echo $form->dropDownList($model,'cruise_grade',Cruise::$grade); ?>
    <?php echo $form->error($model,'cruise_grade'); ?>
  </div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'uphighprice'); ?>
    <?php echo $form->textField($model,'uphighprice'); ?>
    <?php echo $form->error($model,'uphighprice'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'uplowprice'); ?>
    <?php echo $form->textField($model,'uplowprice'); ?>
    <?php echo $form->error($model,'uplowprice'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'downlowprice'); ?>
    <?php echo $form->textField($model,'downlowprice'); ?>
    <?php echo $form->error($model,'downlowprice'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'downhighprice'); ?>
    <?php echo $form->textField($model,'downhighprice'); ?>
    <?php echo $form->error($model,'downhighprice'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'upcity'); ?>
    <?php echo $form->dropDownList($model,'upcity',Cruise::$upCityArr); ?>
    <?php echo $form->dropDownList($model,'up_week',Cruise::$weekDays); ?>
    <?php echo $form->error($model,'upcity'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'downcity'); ?>
    <?php echo $form->dropDownList($model,'downcity',Cruise::$downCityArr); ?>
    <?php echo $form->dropDownList($model,'down_week',Cruise::$weekDays); ?>
    <?php echo $form->error($model,'downcity'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'feature'); ?>
    <?php echo $form->textArea($model,'feature',array('rows'=>1, 'cols'=>50)); ?>
    <?php echo $form->error($model,'feature'); ?>
  </div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'highlights'); ?>
    <?php echo $form->textArea($model,'highlights',array('rows'=>2, 'cols'=>50)); ?>
    <?php echo $form->error($model,'highlights'); ?>
  </div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'recommend_by_editor'); ?>
    <?php echo $form->textArea($model,'recommend_by_editor',array('rows'=>1, 'cols'=>50)); ?>
    <?php echo $form->error($model,'recommend_by_editor'); ?>
  </div>
    
  <div class="row" style="display:none">
  <?php echo $form->labelEx($model,'price_serialize'); ?>
  <?php $price_arr=unserialize($model->price_serialize);?>
  	<table>
  		<tr>
  		<td>Ship name</td>
  		<td>Days</td>
  		<td>Route</td>
  		<td>High Season</td>
  		<td>Low Season</td>
  		</tr>
  		<tr>  		
	  	<?php for($i=0;$i<5;$i++):?>
	    <td><input type="text" name="Cruise[price_serialize][]" value="<?php echo $price_arr[$i];?>"/></td>
	    <?php endfor;?>
    </tr>
  		<tr> 
	  	<?php for($i=5;$i<10;$i++):?>
	    <td><input type="text" name="Cruise[price_serialize][]" value="<?php echo $price_arr[$i];?>"/></td>
	    <?php endfor;?>
    </tr>
    </table>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'price_serialize_2'); ?>
  <?php $price_arr2=unserialize($model->price_serialize_2);?>
  	<table>
  		<tr>
  		<td>Ship name</td>
  		<td>Days</td>
  		<td>Route</td>
  		<td>High Season</td>
  		<td>Low Season</td>
  		</tr>
  		<tr>  		
	  	<?php for($i=0;$i<5;$i++):?>
	    <td><input type="text" name="Cruise[price_serialize_2][]" value="<?php echo $price_arr2[$i];?>"/></td>
	    <?php endfor;?>
    </tr>
  		<tr> 
	  	<?php for($i=5;$i<10;$i++):?>
	    <td><input type="text" name="Cruise[price_serialize_2][]" value="<?php echo $price_arr2[$i];?>"/></td>
	    <?php endfor;?>
    </tr>
    </table>
  </div>

    
  <div class="row">
    <?php echo $form->labelEx($model,'price_include'); ?>
    <?php echo $form->textArea($model,'price_include',array('rows'=>1, 'cols'=>50)); ?>
    <?php echo $form->error($model,'price_include'); ?>
  </div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'price_exclude'); ?>
    <?php echo $form->textArea($model,'price_exclude',array('rows'=>1, 'cols'=>50)); ?>
    <?php echo $form->error($model,'price_exclude'); ?>
  </div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'tips'); ?>
    <?php echo $form->textArea($model,'tips',array('rows'=>1, 'cols'=>50)); ?>
    <?php echo $form->error($model,'tips'); ?>
  </div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'warm_note'); ?>
    <?php echo $form->textArea($model,'warm_note',array('rows'=>1, 'cols'=>50)); ?>
    <?php echo $form->error($model,'warm_note'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'equipment'); ?>
    <?php echo $form->textArea($model,'equipment',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'equipment'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'introduction'); ?>
    <?php echo $form->textArea($model,'introduction',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'introduction'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'seo_title'); ?>
    <?php echo $form->textField($model,'seo_title',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($model,'seo_title'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'seo_key'); ?>
    <?php echo $form->textField($model,'seo_key',array('size'=>60,'maxlength'=>100)); ?>
    <?php echo $form->error($model,'seo_key'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'seo_description'); ?>
    <?php echo $form->textField($model,'seo_description',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($model,'seo_description'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'recommend'); ?>
    <?php echo $form->dropDownList($model,'recommend', Cruise::$recommend); ?>
    <?php echo $form->error($model,'recommend'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'month_recommend'); ?>
    <?php echo $form->dropDownList($model,'month_recommend', Cruise::$recommend); ?>
    <?php echo $form->error($model,'month_recommend'); ?>
  </div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'index_recommend'); ?>
    <?php echo $form->dropDownList($model,'index_recommend', Cruise::$recommend); ?>
    <?php echo $form->error($model,'index_recommend'); ?>
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
      <img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH . $model->attributes['ufile'], '220x235');?>"  />
  </div>
  <?php endif;?>

  <div class="row">
    <?php echo $form->labelEx($model,'is_hide'); ?>
    <?php echo $form->dropDownList($model,'is_hide',Cruise::$isHideArr); ?>
    <?php echo $form->error($model,'is_hide'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- form -->
