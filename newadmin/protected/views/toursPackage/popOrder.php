<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php echo $tour->name;?></title>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl.'/css/view.css';?>" />
<script src="<?php echo Yii::app()->request->baseUrl.'/js/jquery-1.4.3.min.js';?>"></script>
<script src="<?php echo Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js';?>"></script>

<style type="text/css">
<!--
body{ text-align:center; background:url(/images/newindex/mainbj0.jpg) repeat;}
.errorMessage {
    clear: both;
    color: red;
    font-size: 0.9em;
}
-->
</style>
</head>

<body>
<div id="order">
  <div id="logo"><a href="#"><img src="/images/view/logo.png" alt="" /></a></div>
  <div class="live"><a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newindex/chat.jpg" width="135" height="37" /></a></div>
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tours-package-form',
        'enableClientValidation'=>true,
    )); ?>
  <div class="ordercontent">
     <div class="order-title"><img src="/images/view/submit1.png" alt="" /></div>
     <div class="thoughtsnew">
        <h2>My thoughts on the tour</h2>
        <div class="thouleft">
           <span><?php echo $tour->package_code;?>:<?php echo $catgegory->title;?><br />
           Duration:<?php echo $tour->days;?> Days<br />
           Destinations:<?php echo $tour->route;?></span>
            <?php $model->other_message = 'leave your request here'; echo $form->textArea($model,'other_message', array('class'=>'simpleinfoBox'));?>
        </div>
        <div class="thouright">
          <div class="rul">
           <ul>
              <li><strong>The following information will help us give you a quote:</strong></li>
              <li>1. Number of people in your group including yourself (Adults &amp; Children)</li>
              <li>2. Start date of tour</li>
              <li>3. Length of stay in China</li>
              <li>4. City or cities of entry/exit</li>
              <li>5. Places or attractions that you want to visit</li>
              <li>6. Class of hotel: 3 star/4 star/5 star</li>
            </ul>
           </div>
           <div class="trbottom"></div>
        </div>
        <div class="clear"></div>
     </div>
     
     <div class="information">
        <h2><strong>My contact information</strong> Your privacy is protected!</h2>
        <div class="inforleft">
            <table border="0" cellspacing="0" cellpadding="0">
               <tbody>
                   <tr>
                      <td>Full Name: <span>*</span><br />
                          <select name="Order[gender]" id="Gender_1" style="width:70px;">
                              <option value="Mr."> Mr.</option>
                              <option value="Ms."> Ms.</option>
                          </select>
                          <?php echo $form->textField($model,'full_name',array('style'=>"width:197px;")); ?>
                          <?php echo $form->error($model,'full_name'); ?>
                      </td>
                   </tr>
                   <tr>
                       <td>Nationality:<br />
                           <?php echo $form->textField($model,'nationality'); ?>
                       </td>
                   </tr>
                   <tr>
                      <td>Phone No: <br />
                          <?php echo $form->textField($model,'phone', array('class'=>'telephone')); ?>
                          <?php echo $form->error($model,'telephone');?>
                      </td>
                   </tr>
               </tbody>
            </table>
<br />
<input type="checkbox" checked style="height:5px;margin-right:5px;border: 1px solid #CCCCCC;" /><span>I agree with <a href="/privacy-policy.html" target="_blank" style="color: #352E2C;text-decoration: underline;">Privacy Policy</a></span>


        </div>
        <div class="inforleft">
            <table border="0" cellspacing="0" cellpadding="0">
               <tbody>
               <tr>
                   <td>Email Address:<span>*</span><br />
                       <?php echo $form->textField($model,'email', array('class'=>'email')); ?>
                       <?php echo $form->error($model,'email'); ?>
                   </td>
               </tr>

                   <tr>
                      <td>Tour Starting Date:<br />
                          <?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
                          <?php echo $form->error($model,'entry_date');?>
                      </td>
                   </tr>
               </tbody>
            </table>
        </div>
        <div class="clear"></div>
        <div class="send">
 
          <div class="sendButton">
            <input type="submit" value="" name="yt0" style="background:url(/images/view/send.jpg) left center no-repeat; width:179px; height:32px; border:none;" class="form_button" id="submit_button_2">            
            <span>Reply within 12  Hours</span>
          </div>
        </div>
     </div>
  </div>
    <?php $this->endWidget(); ?>
</div>

<script>
    $(function(){
        $("#Order_other_message").click(function(){
            if($(this).val() == 'leave your request here'){
                $(this).val('');
            }
        })
    })

</script>

</body>
</html>
