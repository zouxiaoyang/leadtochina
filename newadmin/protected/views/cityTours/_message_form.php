<div class="list3">
  <?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'message-form',
  'enableAjaxValidation'=>false,
  )); ?>
     <h2>Quick Contact</h2>
     <div class="feedback">
         <table border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td colspan="2">Your Questions:</td>
           </tr>
           <tr>
             <td colspan="2"><textarea name="" cols="" rows=""></textarea></td>
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
             <td colspan="2">
              <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>'border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px;margin-right:8px; float:left; width:70px; height:22px; line-height:22px;')); ?>
              <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;float:left;'))); ?>
              <?php echo $form->error($model,'verifyCode');?>
             </td>
           </tr>
           <tr>
             <td style="font-size:11px; padding-right:5px;">We will reply you within 1 working day.</td>
             <td><input name="" type="image" src="/images/beijingtour/submit.png" alt="Submit" style="width:59px; border:none;" /></td>
           </tr>
         </table>
     </div>
     <?php $this->endWidget(); ?>
   </div>
