<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
)); ?>
 <div class="quick1">
            <div class="feedback1">
         <table cellspacing="0" cellpadding="0" border="0">
           <tbody><tr>
             <td colspan="2">Tour Enquiry:</td>
           </tr>
           <tr>
             <td colspan="2">
              <?php echo $form->textArea($model,'message',array('rows'=>4, 'cols'=>28, 'style'=>"width:96%; border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px; height:130px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; line-height:18px;","default"=>"abc")); ?>
                                    <?php echo $form->error($model,'message'); ?>
             </td>
           </tr>
           <tr>
             <td colspan="2">Your Name:</td>
           </tr>
           <tr>
             <td colspan="2">
             <?php echo $form->textField($model,'username',array('size'=>26,'maxlength'=>20,'style'=>"width:96%; height:22px; border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px; line-height:22px;")); ?>
             <?php echo $form->error($model,'username'); ?>
             </td>
           </tr>
           <tr>
             <td colspan="2">Your E-mail:</td>
           </tr>
           <tr>
             <td colspan="2">
              <?php echo $form->textField($model,'email',array('size'=>26,'maxlength'=>50, 'style'=>"width:96%; height:22px; border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px; line-height:22px;")); ?>
              <?php echo $form->error($model,'email'); ?>
              </td>
           </tr>
           <tr>
             <td colspan="2">
              <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>'border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px;margin-right:8px; float:left; width:130px; height:22px; line-height:22px;')); ?>
              <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;float:left;'))); ?>
              <?php echo $form->error($model,'verifyCode');?>
              <input type="image" style="width:81px; border:none; padding-left:10px" id="Message_submit" alt="Submit" src="/images/adoptionNew/submit1.png" name="">
              </td>
           </tr>
           <tr>
             <td colspan="2" style="font-size:11px; padding-right:5px;">We will reply you within 1 working day.</td>
           </tr>
         </tbody></table>
     </div>
  </div>
  
<?php $this->endWidget(); ?>

<script>
  $(function(){
    var Message_message_default_value = "Pls leave your tour needs here.For example, group size, destinations, tour date, hotel class and so on.";
    $("#Message_message").val(Message_message_default_value);
    $("#Message_message").css("color","#999");
    $("#Message_message").click(function(){
      if($(this).val() == Message_message_default_value){
        $("#Message_message").val("");
      }
    })
  })
  $("form").submit(function(e){
      if($("#Message_message").val() == "Pls leave your tour needs here.For example, group size, destinations, tour date, hotel class and so on."){
        $("#Message_message").val("");
      }
});
</script>