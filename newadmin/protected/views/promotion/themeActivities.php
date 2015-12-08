<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/promotion.css'); 
  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');
?>
<style type="text/css">
<!--
#content{ padding:9px 0px 12px 0px; width:961px;}
-->
</style>
<!--  index start  -->
<div class="index">
    <!--  menu-home start  -->
    <div class="menu-home">
       <!--  menu-tours start  -->
       <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('promotion');?>">Promotion Area</a> Theme Activities</div>
       <!--  menu-tours end  -->
       
       <!--  menu-right start  -->
       <div id="menu-right">I am: <a href="<?php echo Yii::app()->createUrl('promotion/regularCustomers');?>">Regular Customer</a> | 
        <a href="<?php echo Yii::app()->createUrl('promotion/payViaPaypal');?>">PayPal Benefits</a> | 
        <a href="<?php echo Yii::app()->createUrl('promotion/earlyBirdDiscounts');?>">Early Bird Discounts</a>
      </div>
       <!--  menu-right end  -->
    </div>
    <!--  menu-home end  -->
</div>
<!--  index end  -->

<!--  index1 start  -->
<div class="index1">
   <!--  proleft start  -->
   <div id="proleft">
      <div class="leftlist">
          <?php $this->renderPartial('_leftMenu');?>
      </div>
      <div class="trust">
            <ul>
                <li><a href="/member-pata"><img src="/images/top10/PATA.jpg" alt="" /></a> <span>We are the member of PATA</span></li>
                <li><a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html" target="_blank"><img src="/images/top10/TRIP.jpg" /></a> <span>96% people want to travel with us again</span></li>
            </ul>
        </div>
   </div>
   <!--  proleft end  -->
   
   <!--  proright start  -->
   <div id="proright">
      <!--  rightcont start  -->
      <div class="rightcont">
         <!--  protext start  -->
         <div class="protext">
            <div class="propic">
               <img src="/images/promotion/theme1.jpg" alt="" />
            </div>
            <div class="clear"></div>
            <?php echo $current_content->content;?>
            <div class="clear"></div>
            <div class="submitspan" onclick="showInquiry();"><img src="/images/promotion/click.png" alt="" /></div>
            <!--  submit start  -->
             <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'tours-package-form',
                'enableClientValidation'=>true,
            )); ?>
            <div class="submit" id="inquiry_order" style="display:none;">
               <div class="ordercontent">
               <div class="order-title"><img alt="" src="/images/view/submit1.png"></div>
               <div class="thoughtsnew">
                  <h2>My thoughts on the tour</h2>
                  <div class="thouleft">
                     <span>SPT-02:<br>
                     Duration:3 Days<br>
                     Destinations:Shanghai</span>
                      <textarea id="Order_other_message" name="Order[other_message]" class="simpleinfoBox">leave your request here</textarea>        </div>
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
                      <table cellspacing="0" cellpadding="0" border="0">
                         <tbody>
                             <tr>
                                <td>Full Name: <span>*</span><br>
                                    <select style="width:70px;" id="Gender_1" name="Order[gender]">
                                        <option value="Mr."> Mr.</option>
                                        <option value="Ms."> Ms.</option>
                                    </select>
                                    <?php echo $form->textField($model,'full_name',array('style'=>"width:197px;")); ?>
                                    <?php echo $form->error($model,'full_name'); ?>
                                </td>
                             </tr>
                             <tr>
                                 <td>Nationality:<br>
                                     <?php echo $form->textField($model,'nationality'); ?>
                                 </td>
                             </tr>
                             <tr>
                                <td>Phone No: <br>
                                    <?php echo $form->textField($model,'phone', array('class'=>'telephone')); ?>
                                    <?php echo $form->error($model,'telephone');?> 
                                </td>
                             </tr>
                         </tbody>
                      </table>
                  </div>
                  <div class="inforleft">
                      <table cellspacing="0" cellpadding="0" border="0">
                         <tbody>
                         <tr>
                             <td>Email Address:<span>*</span><br>
                                <?php echo $form->textField($model,'email', array('class'=>'email')); ?>
                                <?php echo $form->error($model,'email'); ?>   
                             </td>
                         </tr>

                             <tr>
                                <td>Tour Starting Date:<br>
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
                      <input type="submit" id="submit_button_2" class="form_button" style="background:url(/images/view/send.jpg) left center no-repeat; width:179px; height:32px; border:none;" name="yt0" value="">            
                      <span>Reply within 12  Hours</span>
                    </div>
                  </div>
               </div>
            </div>
            </div>
            <!--  submit end  -->
            <?php $this->endWidget(); ?>
            
            <!--  tourslist start  -->
            <div class="tourslist">
               <ul>
                <?php if($tours):?>
                  <?php foreach($tours as $v):?>
                  <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a>
                      <span>Destinations:</span> <?php echo $v->route;?>
                  </li>
                  <?php endforeach;?>
                <?php endif;?>
               </ul>
            </div>
            <!--  tourslist end  -->
         </div>
         <!--  protext end  -->
         
         <!--  history start  -->
         <div class="history">
            <h2><img src="/images/promotion/history.jpg" alt="" /></h2>
            <ul>
              <?php if($promotion_contents):?>
               <?php foreach($promotion_contents as $v):?>
               <li><a href="<?php echo Yii::app()->createUrl('promotion/themeActivities', array('id'=>$v->id));?>"><?php echo $v->title;?></a>  <span class="dq">Status: <?php echo PromotionContent::$statusArr[$v->status];?></span> <span><?php echo date("Y-m-d", $v->created);?></span> </li>
               <?php endforeach;?>
             <?php endif;?>
            </ul>
         </div>
         <!--  history end  -->
      </div>
      <!--  rightcont end  -->
   </div>
   <!--  proright end  -->
</div>
<!--  index1 end  -->
<div class="clear"></div>
<div class="index">
   <div id="tab5">
      <div class="quest-title"><img alt="" src="/images/promotion/question.jpg"></div>
       <!--  question start  -->
          <?php echo $this->renderPartial("_question");?>
       <!--  question end  -->
</div>
</div>
<div class="clear"></div>
<?php echo $this->renderPartial("_bottomMenu");?>

<script type="text/javascript">

  function showInquiry(){
    $("#inquiry_order").toggle();
  }
</script>
