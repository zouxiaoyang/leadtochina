<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'action'=>'#hotelMessageForm',
	'enableAjaxValidation'=>false,
)); ?>
<div class="list2">
<h2>Contact Us</h2>
       <div class="contact" id="hotelMessageForm">
       <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                 <td colspan="2"><a href="http://messenger.providesupport.com/messenger/travelthing.html"><img src="/images/hotel/live.jpg" alt="" /></a></td>
            </tr>
            <tr>
                 <td valign="top"><img src="/images/hotel/email.jpg" alt="" /></td>
                 <td><strong>e-mail:</strong>
                     <a href="mailto:support@onlinechinatours.com">support@onlinechinatours.com</a>
                     <a href="mailto:service@leadtochina.com">service@leadtochina.com</a>
                 </td>
            </tr>
            <tr>
                 <td><img src="/images/hotel/msn.jpg" alt="" /></td>
                 <td><strong>MSN:</strong>
                     <a href="mailto:Topchinatrip@hotmail.com ">Topchinatrip@hotmail.com </a>
                 </td>
            </tr>
            <tr>
                 <td><img src="/images/hotel/tel.jpg" alt="" /></td>
                 <td><strong>Tel:</strong>
                     <span>+86-551-65355416(China)</span>
                 </td>
            </tr>
       </table>
       </div>
       <div class="contact1">
         <h3>Send Your Enquiry</h3>
         <table border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td class="tdright">Name:</td>
             <td><?php echo $form->textField($model,'username'); ?>
				 <span style="color:red;"><?php echo $form->error($model,'username'); ?></span></td>
           </tr>
           <tr>
             <td class="tdright">E-mail:</td>
             <td><?php echo $form->textField($model,'email');?>
             	 <span style="color:red;"><?php echo $form->error($model,'email');?></span></td>
           </tr>
           <tr>
             <td class="tdright">Content:</td>
             <td><?php echo $form->textArea($model,'message');?>
             	 <span style="color:red;"><?php echo $form->error($model,'message');?></span></td>
           </tr>
           <tr>
             <td></td>
             <td>
             	<?php echo $form->textField($model,'verifyCode',array('style'=>'border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px;margin-right:15px; float:left; width:65px; line-height:22px;')); ?>
	            <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
				<?php echo $form->error($model,'verifyCode');?>
             </td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td style="font-size:10px;"><input name="" type="checkbox" value="" checked="checked" style="border:none; padding:0px; width:auto;" /> I agree with <a href="#">Privacy Policy</a></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td><input value="" type="submit" style="border:none;background:url(/images/hotel/bg.png) 0px -172px no-repeat; width:78px; height:25px; cursor:pointer;" />
             </td>
           </tr>
         </table>
       </div>
     </div>
 <?php $this->endWidget();?>