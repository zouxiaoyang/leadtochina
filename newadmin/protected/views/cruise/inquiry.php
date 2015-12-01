<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtze.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile('/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js');?>
<div id="content">
   <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="/yangtzecruise/">Yangtze Cruise</a> Inquiry Form </div>
   <!--  main start -->
   <div id="main">
           <!--  order start -->
           <div class="order">
               <h2>Yangtze River Cruise Inquiry</h2>
               <h3>NOTE: <span>** Indicates the field is required.</span></h3>
<?php
//$model->attributes['budget']=$_POST['Order']['budget'];
//var_dump($model->attributes);?>
               <!--  inquiry1 start -->
                <?php $form=$this->beginWidget('CActiveForm', array(
                  'id'=>'costomizeOrderForm',
                  'enableAjaxValidation'=>false,
                )); ?>
                <?php echo $form->errorSummary($model); ?>
               <div class="inquiry1">
                   <table border="0" cellspacing="0" cellpadding="0" class="">
                       <tr>
                           <td width="302" class="top1">Which cruises Route your prefer:</td>
                          <td width="752">
                          <?php echo $form->dropDownList($model,'entry_city', Cruise::getRoutes(), array('style'=>"width:230px"));?> 
                          </td>
                     </tr>
                       <tr>
                           <td class="top1">The Cities maybe you want to tour with Yangtze River:</td>
                           <td>
                           		<ul>                                  
                              <?php echo $form->checkBoxList($model,'city',array(
                              	'Shanghai'=>'Shanghai(the biggest city of China)',
                              	'Beijing'=>'Beijing(the capotal city)',
                              	'Xian'=>'Xian(the ancient heart od China)',
                              	'Guilin'=>'Guilin(Li River cruise,Yangshuo)',
                              	'Chengdu'=>'Chengdu(the hometown of Panda)',                              	
                              	'Tibet'=>'Tibet(the World’s dream)',
                              	'Hong Kong'=>'Hong Kong(the shopping paradise)'
                              ),
                              array('template'=>'<li>{input}{label}</li>','separator'=>''));?> 
                               </ul>
                               <div class="other">
                               <?php echo $form->textField($model,'other_city',array('class'=>'otherinput'));?> Other Cities input here
                               </div>                               
                           </td>
                       </tr>
                       <tr>
                           <td class="top1">Tour Budget:</td>
                           <td>   
                           <?php echo $form->textField($model,'total_price',array('class'=>'otherinput'));?>
                           </td>
                       </tr>
                       <tr>
                           <td class="top1">Number of Adults:</td>
                           <td>
                                <table border="0" cellspacing="0" cellpadding="0" class="table01">
                                          <tr>
                                              <td>Adults(&gt;12):</td>
                                              <td>Children(0-12):</td>
                                              <td>Babies(1-2):</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                <?php
                                                  for($i=1;$i<31;$i++) $arr[$i]=$i;
                                                  echo $form->dropDownList($model,'adults', $arr); 
                                                ?>
                                                  <span>**</span>
                                             </td>
                                              <td>
                                                <?php
                                                  for($i=0;$i<31;$i++) $arr2[$i]=$i;
                                                  echo $form->dropDownList($model,'children', $arr2); 
                                                ?>
                                              </td>
                                              <td>
                                                 <?php
                                                  for($i=0;$i<10;$i++) $arr3[$i]=$i;
                                                  echo $form->dropDownList($model,'infant', $arr3); 
                                                ?>
                                               </td>
                                          </tr>
                                </table>
                           </td>
                       </tr>
                       <tr>
                           <td class="top1">Date:</td>
                           <td>
                           <?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
                           <?php echo $form->error($model,'entry_date');?>
                           </td>
                       </tr>
                       <tr>
                           <td class="top1">Other Requirements:</td>
                           <td>
                           <?php echo $form->textArea($model,'other_message',array('style'=>'width:90%; border:1px solid #5e5e5e; background:#fff; height:70px;'));?>
                           <?php echo $form->error($model,'other_message');?>
                           </td>
                       </tr>
                   </table>
               </div>
               <!--  inquiry1 end -->
               
               <!--  inquiry2 start -->
               <div class="inquiry2">
                  <table border="0" cellspacing="0" cellpadding="0">
                       <tr>
                           <td colspan="4" class="top">Contact Information</td>
                       </tr>
                       <tr>
                           <td width="86">Full Name:<span>**</span> </td>
                           <td width="216">
                               <select style="width: 46px; height: 22px; border: 1px solid #5e5e5e; color:#817f7f; font-size:11px; float:left; margin-right:5px;" name="Order[gender]">
                                     <option value="Mr." selected="selected">Mr.</option>
                                     <option value="Mrs.">Mrs.</option>
                                     <option value="Miss.">Miss.</option>
                               </select>
                               <?php echo $form->textField($model,'full_name',array('style'=>"width:150px; float:left;")); ?>
                               <?php echo $form->error($model,'full_name'); ?>
                         </td>
                           <td width="75">Email:<span>**</span></td>
                           <td width="168">
                             <?php echo $form->textField($model,'email'); ?>
                             <?php echo $form->error($model,'email'); ?>
                           </td>
                       </tr>
                       <tr>
                           <td>Nationality:</td>
                           <td>
	                           <?php echo $form->textField($model,'nationality');?>
	                           <?php echo $form->error($model,'nationality');?>
                           </td>
                           <td>Phone No.: </td>
                           <td>
                           	<?php echo $form->textField($model,'phone');?>
                           	<?php echo $form->error($model,'phone');?>
                           	</td>
                       </tr>
                  </table>
               </div>
               <!--  inquiry2 end -->
               
               <!--  inquiry3 start -->
               <div class="inquiry3">
                   <table border="0" cellspacing="0" cellpadding="0">
                       <tr>
                          <td valign="top"><input name="Order[receive_offers]" type="checkbox" value="1" checked="checked" /></td>
                          <td>I want to receive special offers, deals, new brochures, the latest travel information and interesting 
travel stories on Chinatours . </td>
                       </tr>
                       <tr>
                          <td valign="top"><input name="Order[policy]" type="checkbox" value="1" checked="checked" /></td>
                          <td>I agree with<a href="/privacy-policy.html"> Privacy Policy</a>.</td>
                       </tr>
                       <tr>
                          <td></td>
                          <td>
                            <?php echo CHtml::imageButton("/images/newhomepage/confirm-submit-button.jpg"); ?>
                          </td>
                       </tr>
                       <tr>
                          <td></td>
                          <td>Reply within 12 Hours.</td>
                       </tr>
                   </table>
               </div>
               <?php $this->endWidget(); ?>
               <!--  inquiry3 end -->
           </div>
           <!--  order end -->
   </div>
   <!--  main end -->
</div>
