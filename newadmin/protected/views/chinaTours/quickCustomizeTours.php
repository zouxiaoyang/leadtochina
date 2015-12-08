<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css'); ?>
<style type="text/css">
<!--
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:15px 21px 12px 18px; width:920px;}
-->
</style>
<!--  index start  -->
<div class="index">
<div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>strtolower($cityInfo->name).'-tours'));?>"><?php echo $cityInfo->name;?> Tours</a> Customize Tour</div>
    <div id="banner"><img src="/images/citytours/cus_banner_<?php echo strtolower($cityInfo->name);?>.jpg" alt="" ></div>
    <!--  left1 start  -->
    <div id="left1">
       <div id="a2"><span>Quick Customize</span></div>
       <div id="c05"> 
           <?php 
           $form=$this->beginWidget('CActiveForm', array(
                'id'=>'tours-package-form',
                'enableClientValidation'=>true,
            )); ?>
          <div class="list05">
            <h2>Travel Information</h2>
            <div class="clear"></div>
            <div class="thoughts-cont01">
               <div class="bookingDetail01">
               <?php echo $form->textArea($model,'other_message', array('class'=>'simpleinfoBox01'));?>
                  <div class="tipsBox01 roundCorner">
                     <div class="arrowLeft01"></div>
                        <ol>
                           <li>&gt; Your arrival and departure date</li>
                           <li>&gt; Numbers of adult and child</li>
                           <li>&gt; Meals:(Chinese or Westem food)</li>
                           <li>&gt; What's your travel interest</li>
                           <li>&gt; Tour type:private tour/group tour</li>
                           <li>&gt; Your estimated budget</li>
                         </ol>
                  </div>
               </div>
            </div>
          </div>
          <div class="list05">
             <h2>Personal Information</h2>
             <div class="clear"></div>
                
              <table cellspacing="0" cellpadding="0" border="0" style="border-bottom: 1px dashed #b2b2b2; padding-bottom: 15px; display: block;" class="table-diy">
                 <tbody>
                    <tr>
                       <td width="131" class="align"><strong style="color:#ff0000;">*</strong> Name 
                        <select name="Order[gender]" id="Gender_1" style="width: 46px; height: 20px; border: 1px solid #aaa;">
                              <option value="Mr."> Mr.</option>
                              <option value="Ms."> Ms.</option>
                          </select>
                        </td>
                       <td width="176">
                       <?php echo $form->textField($model,'full_name',array('style'=>"width:175px;")); ?>
                       <?php echo $form->error($model,'full_name'); ?>
                       <td width="158" class="align">Nationality</td>
                       <td width="168">
                         <?php echo $form->textField($model,'nationality'); ?>
                       </td>
                    </tr>
                    <tr>
                       <td class="align"><strong style="color:#ff0000;">*</strong> E-mail Address</td>
                       <td>
                       <?php echo $form->textField($model,'email', array('class'=>'email')); ?>
                       <?php echo $form->error($model,'email'); ?>
                       </td>
                       <td class="align">Confirm E-mail Address</td>
                       <td><input type="text" id="email2" name="email2"></td>
                    </tr>
                    <tr>
                       <td class="align">Phone Number</td>
                       <td>
                        <?php echo $form->textField($model,'phone', array('class'=>'telephone')); ?>
                        <?php echo $form->error($model,'telephone');?>
                       </td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="align">Number of Adult</td>
                      <td> 
                      <?php
                      for($i=1;$i<31;$i++) $arr[$i]=$i;
                      echo $form->dropDownList($model,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                      ?>
                     </td>
                      <td class="align">Number of Child<br><span>(under 12 years old)</span></td>
                      <td>
                      <?php
                      unset($arr);
                      for($i=0;$i<31;$i++) $arr[$i]=$i;
                      echo $form->dropDownList($model,'children', $arr);
                      ?>
                       </td>
                    </tr>
                  </tbody>
                </table>
               
                  <div id="submit">
                    <input type="submit" value="" style="background:url(/images/citytours/submit.jpg) left center no-repeat; margin-right:20px;">
                    <input type="reset" value="" style="background:url(/images/citytours/reset.jpg) left center no-repeat;"> 
                  </div>
                  <?php $this->endWidget(); ?>
                    </div>
</div>
    </div>
    <!--  left1 end  -->
    
    <!--  right1 start  -->
    <div id="right1">
       <div class="right-cont">
          <?php echo $this->renderPartial('/common/cityGuide', array('cityName'=>$cityInfo->name,'cityId'=>$cityInfo->id));?>          
       </div>
       <div class="right-cont">
           <div class="right-tit">Contact Us</div>
           <div class="right-list">
              <div class="chat"><a target="_blank" href="http://messenger.providesupport.com/messenger/travelthing.html"><img alt="" src="/images/online.jpg"></a></div>
              <div class="contact">
                 <ul>
                    <li>E-MAIL: <a href="mailto:support@onlinechinatours.com">support@onlinechinatours.com</a>
                                <a href="mailto:support@onlinechinatours.com">service@leadtochina.com</a></li>
                    <li class="msn">MSN: <span>Topchinatrip@hotmail.com</span></li>
                    <li class="tel">TEL: <span>+86-551-65355416(China)</span></li>
                 </ul>
              </div>
            </div>
       </div>
    </div>
    <!--  right1 end  -->
</div>
<!--  index end  -->
<script>
$(function(){
	var default_other_message = "Tell us about your requests,we will plan a pleasant beijing tour for you!";
	$("#Order_other_message").val(default_other_message);
	$("#Order_other_message").focus(function(){
		  if($(this).val() == default_other_message) $("#Order_other_message").val("");
	})
	$("#Order_other_message").blur(function(){
		  if($(this).val() == '') $("#Order_other_message").val(default_other_message);
	})
	
})
</script>
