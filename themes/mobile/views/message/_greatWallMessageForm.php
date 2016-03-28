<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'action'=>'#messageForm',
	'enableAjaxValidation'=>false,
)); ?>
<div class="left-list" id="messageForm">
          <div class="city-guide">Quick Contact</div>
          <div class="quick">
               <table border="0" cellspacing="0" cellpadding="0">
                     <tr>
                         <td>Your Questions:</td>
                     </tr>
                     <tr>
                         <td>
                         <?php echo $form->textArea($model,'message');?>
                         <?php echo $form->error($model,'message');?>
                         </td>
                     </tr>
                     <tr>
                         <td>Your Name:</td>
                     </tr>
                     <tr>
                         <td>
                         <?php echo $form->textField($model,'username'); ?>
                         <?php echo $form->error($model,'username'); ?>
                         </td>
                     </tr>
                     <tr>
                         <td>Your E-mail:</td>
                     </tr>
                     <tr>
                         <td>
                         <?php echo $form->textField($model,'email');?>
                         <?php echo $form->error($model,'email');?>
                         </td>
                     </tr>
                     <tr>
                          <td height="30">
                          <?php echo $form->textField($model,'verifyCode',array('style'=>'border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px;margin-right:15px; float:left; width:65px; line-height:22px;')); ?>
	            						<?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
													<?php echo $form->error($model,'verifyCode');?>
                          </td>
                        </tr>
                     <tr>
                         <td align="right"><h4 style="width:165px; float:left;">We will reply you within<br /> 1 working day.</h4><input type="image" style="width:82px;height:28px;" src="/images/newhomepage/submit1.jpg"/></td>
                     </tr>
               </table>
          </div>
      </div>
 <?php $this->endWidget();?>