<?php
    Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); 
    $this->setPageTitle($content->title);
?>

<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
.question{ width:245px; height:auto; float:left; background:#fff; font-size:11px; color:#2f3744; overflow:hidden; margin-bottom:15px;}
.title{ width:100%; height:76px; float:left;}
.submit{ width:238px; height:auto; float:left; padding:4px 0px 10px 5px; border:1px solid #ccc; border-top:none;}
.submit table{ width:100%; height:auto; float:left; display:block;}
.submit table tr td{ padding:5px 3px;} 
.submit table tr td input{ border:1px solid #ccc; width:140px; line-height:18px; height:20px;}
.submit table tr td textarea{ border:1px solid #ccc; width:219px; height:98px; padding:2px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:18px;}

-->
</style>
<div id="menu-guide"><strong>You are here:</strong> <a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('chinaGuide/things');?>">Things To Do</a><?php echo $content->title;?></div>
<div class="clear"></div>
<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">   
      <div class="text">
        <h1><?php echo $content->title;?></h1>
        <?php echo $content->introtext;?>
      </div>    
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
            <!--  question start   -->
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
                  <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'µã»÷»»Í¼','title'=>'µã»÷»»Í¼','style'=>'cursor:pointer;float:left;'))); ?>
                  <?php //echo $form->error($model,'verifyCode');?>
                </td>
              </tr>
              <tr>
                <td colspan="2"> <input type="checkbox" checked style="width:5px;height:5px;" /> I agree with <a href="/privacy-policy.html" target="_blank" style="color: #352E2C;text-decoration: underline;">Privacy Policy</a></td>
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
        <!--  question end   -->
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

        <!--  right4 start  -->
        <div class="right4" style="margin-top:0px;"><?php echo $this->renderPartial('/common/customizeTour');?></div>
        <!--  right4 end  -->
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->