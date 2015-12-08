<style>
 #ui-datepicker-div{font-size:12px;}
</style>
<div class="cru_view_cont1_right1">
   <div class="cru_view_cont1_right1_tit">
      <span>Fast Enquiry on China Cruise Port Transfer & Tour</span>
   </div>
   <div class="cru_view_cont1_right1_cont">
   <div class="cru_booking">
                <p>Welcome to Leadtochina.com. If you are interested in booking a China port transfer and port side tours with us, please leave your information from below. The professional HFV trip consultant will reply you within 12 hours. For urgent booking, please call us at 0086-551-65355416.</p>
                <div class="clear"></div>
                <?php $form=$this->beginWidget('CActiveForm', array(
                  'id'=>'cruisePortsOrderForm',
                  'enableAjaxValidation'=>true,
                )); ?>
                
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                      <tr>
                        <td class="align">Your Full Name</td>
                        <td>
                          <?php echo $form->dropDownList($model,'gender',array('Mr.'=>'Mr.','Ms.'=>'Ms.'),array('style'=>'width:50px; float:left; margin-right:5px;'));?>
                          <?php echo $form->textField($model,'full_name',array('style'=>'width:130px; float:left; margin-right:5px;'));?>
                          <span> *</span> <br />
                          <span style="display:block;float:left;"><?php echo $form->error($model,'full_name');?></span>
                        </td>
                        <td valign="middle" class="align"> Nationality</td>
                        <td>
                          <?php echo $form->textField($model,'nationality');?>
                          </td>
                      </tr>
                      <tr>
                        <td class="align">Adults</td>
                        <td>
                         <?php
                          for($i=1;$i<31;$i++) $arr[$i]=$i;
                             echo $form->dropDownList($model,'adults', $arr); 
                         ?>
                          <span> *</span></td>
                        <td class="align">Children(0-10)</td>
                        <td>
                         <?php
                          for($i=0;$i<11;$i++) $arr2[$i]=$i;
                             echo $form->dropDownList($model,'children', $arr2); 
                         ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="align">E-mail</td>
                        <td>
                          <?php echo $form->textField($model,'email');?>
                          <span> *</span><br />
                          <span style="display:block;float:left;"><?php echo $form->error($model,'email');?></span>
                        </td>
                        <td class="align"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align">Cruise Ship</td>
                        <td>
                       	  <select name="Order[cruise_name]">
                              <option>Choose Your Cruise Ship</option>
                            <?php foreach($cruise_list as $v):?>
                              <option value="<?php echo $v->name;?>"><?php echo $v->name;?></option>
                            <?php endforeach;?>
                            <option value="Other Cruise Ships">Other Cruise Ships</option>
                          </select>
                        </td>
                        <td class="align"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align">Arrival Date</td>
                        <td>
                          <?php echo $form->textField($model,'entry_date',array('class'=>'Wdate'));?>
                          <?php echo $form->error($model,'entry_date');?>
                          <span> *</span>
                         </td>
                        <td class="align">Departure Date</td>
                        <td>
                          <?php echo $form->textField($model,'end_date',array('class'=>'Wdate'));?>
                          <?php echo $form->error($model,'end_date');?>
                          </td>
                      </tr>
                      <tr>
                        <td class="align">Hotel Class</td>
                        <td>
                          <?php echo $form->dropDownList($model,'final_price',array( //final_price=>Hotel Class
                            '4 Star'=>'4 Star',
                            '3 Star'=>'3 Star',
                            '5 Star'=>'5 Star',
                            'No Need'=>'No Need',
                            )); ?>
                        </td>
                        <td class="align">Num of Rooms</td>
                        <td>
                          <?php echo $form->textField($model,'total_price'); //total_price=>Num of Rooms
                          ?>
                        </td>
                      </tr>

                      <tr>
                        <td class="align">Special Requests <br />
                          Type in the box</td>
                        <td colspan="3">
                            <?php echo $form->textArea($model,'other_message');?>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="3"><input type="submit" class="form_button" style="background:url(/images/cruisePorts/submit.jpg) left center no-repeat; width:78px;height:27px; border:none; margin-right:12px; float:left; margin-top:3px; cursor:pointer;)" name="yt0" value="">
                          <input type="reset" value="" name="yt1" style="width:77px;height:27px; border:none; background:url(/images/cruisePorts/reset.jpg) left center no-repeat; float:left; margin-top:3px; cursor:pointer;"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="3">Required filelds are marked with(<span>*</span>)</td>
                      </tr>
                    </tbody>
                  </table>
                <?php $this->endWidget();?>
              </div>
   </div>
   </div>
<script>
   $(function(){
    $("#Order_entry_date").datepicker({
      changeMonth: true,
      numberOfMonths: 2
    });

    $("#Order_end_date").datepicker({
      changeMonth: true,
      numberOfMonths: 2
    });
   })
  </script>
