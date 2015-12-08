<div class="question">
           <div class="title"><img src="/images/yangtze/title_new.jpg" alt=""  height="76"/></div>
           <!--  submit start   -->
           <div class="submit">
            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'message-form',
              'enableAjaxValidation'=>false,
            )); ?>
           <table border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td colspan="2" style="font-size:10px; padding-bottom:0px;">We will reply you within one working day.</td>
              </tr>
              <tr>
                <td colspan="2">
                  <?php echo $form->textArea($model,'message'); ?>
                  <?php //echo $form->error($model,'message'); ?>
                </td>
              </tr>
              <tr>
                <td>Your Name:</td>
                <td>
                  <?php echo $form->textField($model,'username'); ?>
              <?php //echo $form->error($model,'username'); ?>             </tr>
              <tr>
                <td>Your Email:</td>
                <td>
                    <?php echo $form->textField($model,'email'); ?>
                    <?php //echo $form->error($model,'email'); ?>
                </td>
              </tr>
              <tr>
                <td>Verify Code:</td>
                <td>
                  <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>' width:70px;float:left;')); ?>
                  <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;float:left;'))); ?>
                  <?php //echo $form->error($model,'verifyCode');?>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <?php echo CHtml::imageButton("/images/yangtze/submit.png", array('style'=>'border:0; width:119px; height:33px')); ?>
                </td>
              </tr>
              </tbody>
           </table>
           <?php $this->endWidget(); ?>
           </div>
           <!--  submit end   -->
        </div>
        
        <script>
  $(function(){
    var Message_message_default_value = "Pls leave your travel date, group size, destinations, hotel and ship class here.";
    $("#Message_message").val(Message_message_default_value);
    $("#Message_message").css("color","#999");
    $("#Message_message").click(function(){
      if($(this).val() == Message_message_default_value){
        $("#Message_message").val("");
      }
    })
  })
</script>