<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'action'=>'#messageForm',
	'enableAjaxValidation'=>false,
)); ?>
<div class="list3" id="messageForm">
     <h2>Quick Contact</h2>
     <div class="feedback">
         <table border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td colspan="2">Your Questions:</td>
           </tr>
           <tr>
             <td colspan="2">           
             <?php echo $form->textArea($model,'message'); ?>
						 <?php echo $form->error($model,'message'); ?>
             </td>
           </tr>
           <tr>
             <td colspan="2">Your Name:</td>
           </tr>
           <tr>
             <td colspan="2">
             <?php echo $form->textField($model,'username'); ?>
						 <?php echo $form->error($model,'username'); ?>
             </td>
           </tr>
           <tr>
             <td colspan="2">Your E-mail:</td>
           </tr>
           <tr>
             <td colspan="2">
             <?php echo $form->textField($model,'email'); ?>
						 <?php echo $form->error($model,'email'); ?>	
             </td>
           </tr>
           <tr>
           	<td>
							<?php echo $form->textField($model,'verifyCode',array('style'=>'width:73px;')); ?>
             <?php 
		          $this->widget('CCaptcha',
		            array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))
		          ); ?>
						</td>
           </tr>
           <tr>
             <td style="font-size:11px; padding-right:5px;">We will reply you within 1 working day.</td>
             <td>
             <?php echo CHtml::imageButton("/images/beijingtour/submit.png",array('style'=>'width:59px;border:none;')); ?>
             </td>
           </tr>
         </table>
     </div>
   </div>
  <?php $this->endWidget(); ?>