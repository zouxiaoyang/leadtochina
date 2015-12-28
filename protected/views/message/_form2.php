
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
)); ?>
 <div class="quick">
            <h2 class="title01">Planning a trip?Ask us here</h2>
            <div class="feedback">
         <table cellspacing="0" cellpadding="0" border="0">
           <tbody>
           
           <tr>
             <td colspan="2">Your Name:</td>
           </tr>
           <tr>
             <td colspan="2">
             <?php echo $form->textField($model,'username',array('size'=>26,'maxlength'=>20)); ?>
             <?php echo $form->error($model,'username'); ?>
             </td>
           </tr>
           <tr>
             <td colspan="2">Your E-mail:</td>
           </tr>
           <tr>
             <td colspan="2">
              <?php echo $form->textField($model,'email',array('size'=>26,'maxlength'=>50)); ?>
              <?php echo $form->error($model,'email'); ?>
              </td>
           </tr>
           <tr>
             <td colspan="2">
              <?php echo $form->textArea($model,'message',array('rows'=>4, 'cols'=>28, 'style'=>"width:96%; border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px;","default"=>"abc")); ?>
                                    <?php echo $form->error($model,'message'); ?>
             </td>
           </tr>
           <tr>
             <td colspan="2">
              <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>'border:1px solid #b8b8b8; background:#fff; padding-left:5px; margin-top:3px;margin-right:8px; float:left; width:120px;')); ?>
              <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;float:left;'))); ?>
              <?php echo $form->error($model,'verifyCode');?>
              </td>
           </tr>
           <tr>             
             <td  colspan="2">
             <button type="submit" class="large-button" id="Message_submit">submit</button>
             
             </td>             
             <tr>
             	<td  colspan="2" style="font-size:11px; padding-right:5px;">We will reply you within 1 working day.</td>
             </tr>
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