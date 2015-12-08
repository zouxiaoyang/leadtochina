<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); ?>
<style type="text/css">
<!--
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/index');?>">Shanghai Xian Tours</a> Beijing Transfer Service</div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/flight.jpg" alt="" /></div> 
   <div class="clear"></div>
    <!--  left start  -->
    <div id="left1">
        <!--  list start  -->
        <div id="list1">
            <?php echo $this->renderPartial("_left");?>
        </div>
        <!--  list end  -->    
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right1">
      <div class="righttable">
        <table cellspacing="0" cellpadding="0">
           <tbody>
               <tr class="h2">
                  <td colspan="4">Beijing Transfer Service</td>
               </tr>
               <tr class="toptr">
                  <td>Service</td>
                  <td>Vehicle Style</td>
                  <td>One Way</td>
                  <td>Round Way</td>
               </tr>
               <tr>
                  <td rowspan="3" class="bigname">Beijing Airport to Downtown<br />(1 hour)</td>
                  <td>Red Flag(for 1-3 person)</td>
                  <td>$52USD</td>
                  <td>$96USD</td>
               </tr>
               <tr>
                  <td>Mercedes MB100 Van(for 2-4 person )</td>
                  <td>$68USD</td>
                  <td>$140USD</td>
               </tr>
               <tr>
                  <td>Toyota Coaster(for 10-20 person)</td>
                  <td>$90USD</td>
                  <td>$170USD</td>
               </tr>
               <tr>
                  <td rowspan="3" class="bigname">Beijing Train Station to Downtown <br />(0.5-1 hour)</td>
                  <td>Red Flag(for 1-3 person)</td>
                  <td>$40USD</td>
                  <td>$70USD</td>
               </tr>
               <tr>
                  <td>Mercedes MB100 Van(for 2-4 person )</td>
                  <td>$65USD</td>
                  <td>$125USD</td>
               </tr>
               <tr>
                  <td>Toyota Coaster(for 10-20 person)</td>
                  <td>$130USD</td>
                  <td>$160USD</td>
               </tr>
               <tr>
                  <td colspan="4" class="notice" style="padding-bottom:107px;"><p><img src="/images/beijing_shanghai/notice.png" alt="" /> <b>Note:</b> <br /> 
Above Rates include English-speaking guide, driver, fuel, and insurance.<br />
How to Make a Booking?<br />
Please send a e-mail (<b><a href="mailto:support@onlinechinatours.com">support@onlinechinatours.com</a></b>)?to us with following details:<br />
1. Passenger name:<br />
2. Tour Code:<br />
3. Party Size:<br />
4. One way/Round Way:<br />
5. Arrival Date and time:<br />
6. Flight/Cruise/Train number:<br />
7. Hotel/Apartment name:<br />
8: Contact phone number:<br />
<strong>We will reply to you within 12 hours.</strong></p></td>
               </tr>
           </tbody>
        </table>
      </div>
    </div>
    <!--  right end  -->
</div>
<!--  index1 end  -->