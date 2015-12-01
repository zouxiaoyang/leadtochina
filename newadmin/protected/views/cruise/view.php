<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/myfocus-2.0.1.min.js');?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze2.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.zxxbox.3.0-min.js ');?>

<script type="text/javascript">
//设置
myFocus.set({
    id:'myFocus',//ID
    pattern:'mF_fscreen_tb'//风格
});
</script>
<style>
#wrapBar{display:none !important;}
#wrapOut{top:150px !important;}
.clendar1 .selected{cursor: pointer;}

.black_overlay{
display: none;
position: absolute;
top: 0%;
left: 0%;
width: 100%;
height: 100%;
z-index:1001;
background-color: black;
-moz-opacity: 0.8;
opacity:.80;
filter: alpha(opacity=80);
}
.white_content {
display: none;
position: absolute;
background-color: white;
top: 80%;
left: 30%;
z-index:1002;
overflow: hidden;
}
.white_content_small {
display: none;
position: absolute;
background-color: white;
top: 80%;
left: 30%;
z-index:1002;
overflow: hidden;
}
</style>

</style>
<!--  Ships start -->
<div id="content">
   <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise</a>
    <a href="<?php echo Yii::app()->createUrl('cruise/ships');?>" class="last">Yangtze Cruise Ships</a>
  </div>
   <!--  main start -->
   <div id="main">
         <!--  left-desc start -->
            <div class="left-desc">
                <div class="title-ship"><span style="float:left; padding-right:6px;"><?php echo $model->cruise_name;?></span><span style="float:left; margin:7px 0px" class="star<?php echo $model->cruise_grade;?>"></span></div>
                <ul>
                    <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$model->ufile,"268x70");?>" alt="<?php echo $model->cruise_name;?>" /></li>
                    <li><strong>Route:</strong> 
                      <b>
                      <?php echo Cruise::$weekDays[$model->up_week];?></b>
                      <?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?><br />
                      
                      <b><?php echo Cruise::$weekDays[$model->down_week];?></b>
                      <?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?>
                    </li>
                    <li><strong>Highlights:</strong> <?php echo $model->highlights;?></li>
                    <li class="tesu">Full Price From: <strong><?php echo SiteUtils::getCurrencyPrice($model->getPrice());?></strong><br />
                                     Call Us for Booking: (+86)-551-65355416
                    </li>
                    <li class="last"><a href="#orderForm"><img src="/images/yangtze/enquiry3.png " alt="" /></a><a target="_blank" href="http://messenger.providesupport.com/messenger/travelthing.html"><img src="/images/yangtze/live.png" alt="" /></a></li>
                </ul>
            </div>
            <!--  left-desc end -->
            
            <!--  right-photo start -->
            <div class="right-photo">
                 <!--  schedule start -->
                 <div class="schedule">
                    <ul>
                       <li style="display:none" <?php if($year == 2013):?> class="dq" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('cruise/view',array('year'=>2013,'id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">2013 Cruise Schedule</a></li>
                       <li <?php if($year == 2014):?> class="dq" <?php endif;?>><a href="<?php echo Yii::app()->createUrl('cruise/view',array('year'=>2014,'month'=>1,'id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>">2014 Cruise Schedule</a></li>
                    </ul>
                 </div>
                 <!--  schedule end -->
                 
                 <!--  c2013 start -->
                 <div id="c2013">
                    <div class="clendar1">
                   <table cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                           <tr class="top">
                              <td colspan="7">
                              <?php foreach(Cruiseact::getEveryMonth() as $date):?>
		                             <?php $m = date('m',strtotime($date));?>
		                            <a <?php if($m==$month):?>class="dq"<?php endif;?> href="<?php echo Yii::app()->createUrl('cruise/view',array('year'=>$year,'month'=>$m,'id'=>$model->id,'name'=>SiteUtils::stringURLSafe($model->cruise_name)));?>"><?php echo date('M',strtotime($date));?>.</a>
		                          <?php endforeach;?>
                              </td>
                      </tr>
                      <tr class="top1">
                         <td>Mon</td>
                         <td>Tue</td>
                         <td>Wed</td>
                         <td>Thu</td>
                         <td>Fri</td>
                         <td>Sat</td>
                         <td>Sun</td>
                      </tr>
                      <?php
                        $first_weekday = date("N", strtotime($year.'-'.$month.'-1'));
                        $diff_num = 7-$first_weekday;
                        $lines = ceil($numOfDaysInGiveMonth/8);
                        $end_day=1;
                      ?> 
                      <tr>
                         <?php for($i=1;$i<$first_weekday;$i++):?>
                           <td>&nbsp;</td>
                         <?php endfor;?>
                         <td <?php if($cruises[1]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');" <?php endif;?>><span>1</span>
                            <strong><?php $this->outputSailing(1, $cruises, $model);?></strong>
                         </td>
                         <?php for($i=1;$i<=$diff_num;$i++):?>
                           <td  <?php $end_day=$i+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');" <?php endif;?>>
                              <span><?php echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                           </td>
                         <?php endfor;?>
                      </tr>

                     <?php for($i=1;$i<=$lines;$i++):?>
                        <tr>
                          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');" <?php endif;?>>
                              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                          </td>
                          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
                              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                          </td>
                          <td <?php $end_day=$end_day+1;  if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
                              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                          </td>
                          <td <?php $end_day=$end_day+1;  if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
                              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                          </td>
                          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
                              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                          </td>
                          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
                              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                          </td>
                          <td <?php $end_day=$end_day+1; if($cruises[$end_day]):?>class="selected" onclick="pop_cruise(this, '<?php echo date("M.d.y",strtotime($year.'-'.$month.'-'.$end_day));?>');"<?php endif;?>>
                              <span><?php if($end_day <= $numOfDaysInGiveMonth) echo $end_day;?></span>
                              <strong><?php $this->outputSailing($end_day, $cruises, $model);?></strong>
                          </td>
                        </tr>
                     <?php endfor;?>      

                    </tbody>
                 </table>
           </div>
                 </div>
                 <!--  c2013 end -->
                 
                 
            </div>
            <!--  right-photo end -->
          <div class="clear"></div>
          <!--  ships-content start -->
          <div class="ships-content">
              <!--  menu-ships start -->
              <div class="menu-ships">
                <ul>
                   <li><span class="smalldq" id="overviewid">Overview</span></li>
                   <li><span id="itineraryid">Cruise Itinerary</span></li>
                   <li><span class="small" id="cabins">Cabins</span></li>
                   <li><span id="life">Life onboard</span></li>
                   <li><span class="small" id="tips_nav">Tips</span></li>
                   <li><span id="warm_note">Warm Note</span></li>
                </ul>
              </div>
              <!--  menu-ships end -->
              
              <!--  overview start -->
              <div class="overview">
                 <!-- overviewcontent start -->
                 <div id="overviewcontent">
                    <div class="over-text">
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tbody>
                             <tr>
                                <td>Star Rating:</td>
                                <td class="no"><?php echo $model->cruise_grade;?></td>
                             </tr>
                             <tr>
                                <td>Maiden Voyage:</td>
                                <td class="no"><?php echo $model->year_built;?></td>
                             </tr>
                             <tr>
                                <td>Ship Length:</td>
                                <td class="no"><?php echo $model->length;?></td>
                             </tr>
                             <tr>
                                <td>Crew:</td>
                                <td class="no"><?php echo $model->crew;?></td>
                             </tr>
                          </tbody>
                        </table>
                       <?php echo $model->introduction;?>
                    </div>
                    <div class="exterior">
                       <ul>
                      <?php if($cruise_pic):?>
                       		<?php foreach ($cruise_pic as $k=>$v):?>
                          <li <?php if($k%3==0&&$k!=0):?>style="margin-right:0px;"<?php endif;?>>
                            <img src="<?php echo ImageUtils::getThumbnail(Cruisepic::UPLOAD_PATH.$v->pic_path, '200x146')?>" alt="<?php echo $v->pic_alt;?>" /> <span><?php echo $v->pic_alt;?></span>
                          </li>
                          <?php endforeach;?>
                      <?php endif;?>
                       </ul>
                    </div>
                    
                 </div> 
                 <!--  overviewcontent end --> 
                 
                  <!--  left-table start -->
                 <div id="itinerarycontent" style="display:none;">
                     <div class="itinerary">
                       <div class="left-table1">
                         <h2><strong>DOWNSTREAM:</strong> <?php echo Cruise::$downCityArr[$model->downcity];?> (<?php echo count($cruise_cycle[1]);?> days)</h2>
                        <table border="0" cellspacing="0" cellpadding="0">
                           <?php foreach ((array)$cruise_cycle[1] as $k=>$v):?>
                           <tr>
                               <td width="77">Day <?php echo $k+1;?></td>
                               <td width="977" class="number"><?php echo $v['activition'];?></td>
                               <td valign="top" style="padding:10px 8px; background:#fff;">
	                           		<div class="right-pic">
                                <ul>
                                    <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruisecycle::UPLOAD_PATH.$v->cruisecycle_pic, '171x119')?>"  style="width:171px;height:69px;" alt="" /></li>
	                           		    <li><?php echo $v['pic_alt'];?></li>
                                </ul>
                                </div>
                           		</td>
                           </tr>                          
                           <?php endforeach;?>
                    </table>                   
                 </div>               
                     </div>
                     <div class="itinerary">
                       <div class="left-table1">
                         <h2><strong>UPSTREAM:</strong> <?php echo Cruise::$upCityArr[$model->upcity];?> (<?php echo count($cruise_cycle[0]);?> days)</h2>
                        <table border="0" cellspacing="0" cellpadding="0">
                           <?php foreach ((array)$cruise_cycle[0] as $k=>$v):?>
                           <tr>
                               <td width="77">Day <?php echo $k+1;?></td>
                               <td width="977" class="number"><?php echo $v['activition'];?></td>
                               <td  style="padding:10px 8px; background:#fff;" valign="top">
                                <div class="right-pic">
                                <ul>
	                           		<li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruisecycle::UPLOAD_PATH.$v->cruisecycle_pic, '171x119')?>" style="width:171px;height:69px;"  alt="" /></li>
	                           		<li><?php echo $v['pic_alt'];?></li>
                                </ul>
                               </div>
                           		</td>
                           </tr>                          
                           <?php endforeach;?>
                    </table>                   
                 </div>
                     </div>
                 </div>
                 <!--  left-table end --> 
                 
                 <!--  cabinscontent start -->
                 <div id="cabinscontent" style="display:none;">
                    <div class="cabinlist">
                    <?php foreach ((array)$cruise_rooms as $k=>$v):?>
                      <ul>
                         <li>
                            <ol>
                               <li class="cabintitle"><?php echo $v->name;?></li>
                               <li><?php echo $v->description;?></li>
                            </ol>
                         </li>
                         <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruiseroom::UPLOAD_PATH.$v->room_pic1, '206x139')?>" alt="" /></li>
                         <li class="transform"><img src="/images/yangtze/transform.jpg" alt="" /></li>
                         <li class="pic1"><img src="<?php echo ImageUtils::getThumbnail(Cruiseroom::UPLOAD_PATH.$v->room_pic2, '285x164')?>" alt="" /></li>
                      </ul>                      
                      <?php endforeach;?>
                    </div>
                 </div>   
                 <!--  cabinscontent end -->  
                                 
                 <!--  lifecontent start -->    
                 <div id="lifecontent" style="display:none;">
                 		<?php foreach ((array)$onboard as $k=>$v):?>
                     <h2><?php echo $v->name;?></h2>
                     <div class="lifelist">
                        <div class="ulleft">
                          <?php echo $v->description;?>
                        </div>
                        <div class="pic2"><img src="<?php echo ImageUtils::getThumbnail(CruiseOnboard::UPLOAD_PATH.$v->onboard_pic, '218x161')?>" alt="" /></div>
                     </div>
                     <?php endforeach;?>                 
                 </div>
                 <!--  lifecontent end -->   
                 
                 <!-- tips start -->
                 <div id="c08" style="display:none;">
						  <p><strong>Check Emails before Cruise</strong>
Please read the Yangtze cruise confirmation we sent to you carefully and please note your mailbox 3 Days before your tour, for it occurs any slight change caused by uncontrollable reasons. It will be much more convenient if you can leave your cell phone number to us for emergent calls.</p>
<p><strong>Boarding Documents &amp; Boarding Time &amp; Boarding Pier</strong>
Boarding Documents: <br />
The booking system of the Yangtze cruise is just like the electronic flight tickets, you just need to show your valid passport to the receptionist in the ship.</p>  
<p><strong>Boarding Time and Boarding Pier:</strong></p>
<p>4-day Chongqing to Yichang downstream cruise <br />
Boarding time is 17:00—20:30, the ship sails around 21:00—22:00 from Chongqing</p>
<p>5-day Yichang to Chongqing upstream cruise<br />
Boarding time is 17:00—00:00, the ship does not sail until next day morning from Yichang </p>
<p>7-day Chongqing to Shanghai downstream cruise<br />
Boarding time is 08:00—09:30AM, the ship sails around 10:00 AM</p>
<p>9-day Shanghai to Chongqing upstream cruise<br />
Boarding time is 15:00—16:30, the ship sails around 17:00 from Wusongkou Port of Shanghai.</p>
<p><strong>Transfer between Airport and Pier</strong>
Note: The quotation we offered above doesn'tinclude any transfer between airport or railway station to pier in any city.</p>
<p>Private Transfer: Lead to china can offer private transfer with tour guide or without tour guide in Chongqing (Airport/Railway Station to Pier), Yichang (Airport/Railway Station to Pier), and Shanghai (Airport/Railway Station/Downtown to Wusongkou Port). Besides, the type of the vehicles will depend on the scale of your group. As the specific costs, you can contact with our trip advisor.</p>
<p><strong>The Advantage of our Private Transfer:</strong>
1. Waiting aside all the time, do not need to worry about the time schedule and the bad transfer experience<br />
2. Quality control and effective response from Lead to China.  </p>
<p><strong>Note:</strong>
If you want to hire local porters to carry your luggage in either Chongqing or Yichang, the price should be RMB10 per person. Please do confirm the price with the porters before using their service.</p>
<p><strong>Cabin Arrangement</strong>
Guests cannot designate cabins beforehand, for allthe cabins are arranged by the ship company. However, you can upgrade yourcabins to higher floor when doing the check in procedure. The fees of upgrading cabins would be different according to different ship companies. Moreover, if you have any problem with your cabin afer check in the ship, please let the ship receptionist know as soon as possible.</p>
<p>Extra Bed: Not all ships can hold an extra bed, soif you need, please inquire your travel advisor before you taking tour fromLead to China.</p>
<p><strong>Service Onboard</strong>
Drinks: Wines are not a part of the free drinks, only beer and some soft drinks are provided for free on ship. Drinks on the ship can be expensive; if necessary you can prepare some drinks or snacks before boarding the ship. </p>
<p>Foods: Some ships provide mostly buffet meals but some provide mostly table meals, it depends on which ship you are taking. Ifyou have any diet habit, please kindly let us know or let the ship receptionist know, so that the according arrangement can be made.</p>
<p>Elevator: Not every ship has elevator, if you needto know this, please kindly inquire your travel consultant or check the shipcompany official website. </p>
<p>Medical Service: There will be a clinic on the ship, but their service can be very expensive, please kindly note it. </p>
<p>Internet Service: The ship does not have wifi, butthe business center has internet service available and it is pay-for, the price will be different according to different ships.</p>
<p>Hair-dryer: The ships do not have hair dryer ineach room, only some hairdryers available at the front desk which you canborrow for free.</p>
<p>Adaptor: If you want to charge some electronic products and without bringing the adaptor, you may check with the ship front desk to see they have the right adaptor on ship, but bring the right adaptor from home is convenient for your China or Yangtze tour.</p>
<p><strong>Ship Tips</strong>
Almost all the 4 to 5-star ships require acompulsory ship tip which is required to be paid when checking in at the reception counter; it is the regulation of the ship companies which passengers are supposed to follow. The tip amount differs from different cruise lines and will be specified in our confirmation letter, please kindly note this so that inconvenience can be avoided.</p>

            </div>
            <!-- tips end -->
            
            <!-- warm note start -->
            <div style="display:none;" id="c09"><p><strong>Optional Excursions</strong>
Besides the listed shore excursions listedin your itinerary, there usually will be 2 optional shore excursions in eachcruise term and it is not part of the cruise itinerary, the cost is aroundRMB260=USD42/per person per optional shore excursion, and the optional shoreexcursions differ from different cruise lines, and it is not compulsory.</p>
<p>Physical-Challenge: Some shore excursionslike “Fengdu Ghost City”needs some steps climbing; it might a bit challenging to same visitors who haveproblems with steps, in this case visitors can stay on the ship without join inthe shore excursion (no refund). And booking a ship with elevator will be moreconvenient actually. Please kindly note it.</p>
<p><strong>Weather</strong>
Yangtze River will be a kind of foggy from the latter half of October to nextMarch or so, and sometimes it might be foggy in summer time. And the rainyseason of Yangtze will be July to August or so.</p>

<p>Note: if you book flights by yourselves,please kindly consider these weather factors and book the suitable timingfight, or we can assist you to book the flights, more details please inquireyour travel consultant.</p>

<p><strong>Payment Guide</strong>
Generally the deposit of your packageaccounts for 30% of the total quotation. Take your tour package and group sizeinto consideration, your travel consultant can adjust it accordingly. Thebalance needs to be paid 20 days before your tour date. In addition, differentpayment methods demand different transfer fees.</p>

<p>Payment methods include Bank Transfer andPaypal, Visa, and Money Bookers. Details please see the <a href="http://www.leadtochina.com/payment-guide/">Payment Guide Terms and Conditions</a>.</p>
</div> 
            <!-- warm note end -->
              </div>
              <!--  overview end -->
          </div>
          <!--  ships-content end -->
          
          <div class="order-view">
          <div id="pricenew">
             <!--  price-left start  -->
           <div class="price-left">
           <!--  price-title start  -->
           <div class="price-title"><h2><span class="dq" onclick="_price.tab(1, this);" style="display:none">2013 Price</span><span class="dq" onclick="_price.tab(2, this);">2014 Price</span></h2> 
 <!--  currency start  -->
 <div class="currency">
   <span><img alt="" src="/images/country/US.jpg"><b>USD-United States Dollar</b></span>
   <ul style="display:none;height:110px;overflow-x:hidden;overflow-y:auto;">
     <li val="1"><img alt="" src="/images/country/US.jpg"><b>USD-United States Dollar</b></li>
     <li val="2"><img alt="" src="/images/country/china.jpg"><b>CNY - Chinese Yuan</b></li>
     <li val="3"><img alt="" src="/images/country/Eur.jpg"><b>EUR - Euro</b></li>
     <li val="4"><img alt="" src="/images/country/Japan.jpg"><b>JPY-Japanese Yen</b></li>
     <li val="5"><img alt="" src="/images/country/India.jpg"><b>INR-Indian Rupee</b></li>
     <li val="6"><img alt="" src="/images/country/Russia.jpg"><b>SUR-Russian Ruble</b></li>
     <li val="8"><img alt="" src="/images/country/Britain.jpg"><b>GBP-Pound Sterling</b></li>
     <li val="9"><img alt="" src="/images/country/Canada.jpg"><b>CAD-Canadian Dollar</b></li>
     <li val="10"><img alt="" src="/images/country/Australia.jpg"><b>AUD-Australian Dollar</b></li>
  </ul>
</div>
<!--  currency end  -->
</div>
           <div id="c15" style="">

 <?php $price_arr2=unserialize($model->price_serialize_2);?>
<table cellspacing="0" cellpadding="0" border="0">
	<tbody>
	  <tr class="top">
	     <td style="color:#272727; font-size:14px; background:#FBEBB5;">Ship</td>
       <td style="background:#FBEBB5;">Days</td>
       <td style="background:#FBEBB5;">Season</td>
       <td style="background:#FBEBB5;">High Season</td>
       <td style="background:#FBEBB5;">Low Season</td>
	  </tr>
	  <tr>
         <?php $price_arr2=unserialize($model->price_serialize_2);?>
         <td><span><?php echo $price_arr2[0];?></span></td>
         <td><span><?php echo $price_arr2[1];?></span></td>
         <td><span><?php echo $price_arr2[2];?></span></td>
         <td><a href="#quick-book"><?php echo SiteUtils::getCurrencyPrice($price_arr2[3]);?></a></td>
         <td><a href="#quick-book"><?php echo SiteUtils::getCurrencyPrice($price_arr2[4]);?></a></td>
      </tr>
      <tr>
         <td><span><?php echo $price_arr2[5];?></span></td>
         <td><span><?php echo $price_arr2[6];?></span></td>
         <td><span><?php echo $price_arr2[7];?></span></td>
         <td><a href="#quick-book"><?php echo SiteUtils::getCurrencyPrice($price_arr2[8]);?></a></td>
         <td><a href="#quick-book"><?php echo SiteUtils::getCurrencyPrice($price_arr2[9]);?></a></td>
      </tr>
	</tbody>
</table>
<div class="table-bottom"><img src="/images/view/bg1.png"></div>
</div>
        </div>
           <!--  price-left end  -->
           <div class="clear"></div>
           <div id="price-right">
            <div id="a01-new">
                   <span class="sd01" id="c01">Price Inclusion</span>
                   <span class="sd02" id="c02">Price Exclusion</span>
            </div>
            <div id="c01-new">
              <?php echo $model->price_include;?> 
            </div>
            <div style="display:none" id="c02-new">
              <?php echo $model->price_exclude;?>           
            </div>
         </div>
      </div>
          <div class="note-value">
              <div class="note">
                 <p><strong>High Season:</strong> May, Spetember, October<br />
                 <strong>Shouler Season:</strong> March, April, June, July, August, November<br />
                 The above price range is based on a standard cabin for twin sharing. Please enquiry for the exact price according to your nationality, cruising time and cruising route. Service charge of CNY150.00 per person is recruited by the ship company.</p>
              </div>
              <div class="value">
                 <h2><img src="/images/view/valuenew.png" alt="" /></h2>
                 <div class="clear"></div>
                 <p>We believe that value for money is important; we hope you will travel with LeadtoChina again. When comparing prices, ensure you are comparing like for like often there may be a cheaper option, but there may be hidden extras or the quality may not be as good. You can get honest price &amp; service here.</p>
              </div>
          </div>
      
         <div id="quick-book">
          <div id="a3">
                  <ul>
	                    <li class="sd06" id="change_sd06"><a id="orderForm">&nbsp;</a>Quick Book Or Inquiry</li>
                    	<li class="sd07" id="change_sd07" style="display:none;">Customize This Trip</li>
						          <li style="display:none;color:#ba5e31; width:auto; font-size:12px; float:right; background:url(/images/deng_03.png) no-repeat left center; padding-left:20px; cursor:auto;">The Quotation without Hotel please contact with HFV Trip Advisor. </li>
                  </ul>
            </div>
            <?php $form=$this->beginWidget('CActiveForm', array(
						  'id'=>'cruise-form',
						  'enableClientValidation'=>true,
						)); ?>
            <div id="c06">
               <div id="thoughts">
                    <div class="thought-left">
                        <div class="personalInfo">
                            <label> Full Name: <b style="color:#c67141;">*</b></label>
                            <select style="width:70px;" id="Gender_1" name="Gender">
                              <option value="Mr."> Mr.</option>
                              <option value="Ms."> Ms.</option>
                            </select>
                            <?php echo $form->textField($orderModel,'full_name',array('style'=>"width:197px;")); ?>
                            <?php echo $form->error($orderModel,'full_name'); ?>                        </div>
                        <div class="personalInfo">
                            <label> Email Address: <b style="color:#c67141;">*</b></label>
                            <?php echo $form->textField($orderModel,'email', array('class'=>'email')); ?>
                            <?php echo $form->error($orderModel,'email'); ?>
                        </div>
                        <div class="personalInfo">
                            <label> Nationality: <b style="color:#c67141;">*</b></label>
                            <?php echo $form->textField($orderModel,'nationality', array('class'=>'telephone')); ?>
                            <?php echo $form->error($orderModel,'nationality');?>                        </div>
                  <div class="personalInfo">
                            <label>Cruise Date:</label>
                            <?php echo $form->textField($orderModel,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'
Wdate'));?>
                            <?php echo $form->error($orderModel,'entry_date');?>
                        </div>
                        <div class="personalInfo" style="display:none">
                            <label>Verify Code:</label>
                            <!--<input name="" type="text" style="width:76px;" /> 验证码 -->
                        </div>
                        <div class="personalInfo" style="display:none">
                            <label>Verify Code:</label>
                            <input type="text" style="width:78px; float:left; margin-right:5px;" name="validity" id="validity_02"> <img src="/index.php?option=com_verifycode" style="cursor: pointer; float:left;" onclick="">
                        </div>
                       </div>
                    <div class="thought-right">
                      <div class="bookingDetail">
                       <table width="50%" cellspacing="0" cellpadding="0" border="0" style=" float:left;">
                          <tbody>
                          <tr>
                            <td>Preferred Cabin:<br />
                               <select name="preferred_cabin">
                                  <?php foreach ((array)$cruise_rooms as $k=>$v):?>
                                  <option value="<?php echo $v->name;?>"><?php echo $v->name;?></option>
                                  <?php endforeach;?>
                                </select>
                            </td>
                            <td colspan="2">
                               Preferred Cruises Itinerary:<br />
                                <select name="cruise_itinerary" style="width:355px; color:#666666;">
                                   <option value="<?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?>"><?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?></option>
                                   <option value="<?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?>"><?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?></option>
                                </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Adults(&gt;12)<br>
                              <?php
                                for($i=1;$i<31;$i++) $arr[$i]=$i;
                                echo $form->dropDownList($orderModel,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                              ?>
                             </td> 
                             <td>Children(2-12)<br>
                                <?php
                                unset($arr);
                                for($i=0;$i<31;$i++) $arr[$i]=$i;
                                echo $form->dropDownList($orderModel,'children', $arr);
                                ?>
                             </td> 
                             <td>Babies(0-2)<br>
                               <?php
                                unset($arr);
                                for($i=0;$i<12;$i++) $arr[$i]=$i;
                                echo $form->dropDownList($orderModel,'infant', $arr);
                              ?>
                             </td>   
               </tr>
               <tr>
                  <td colspan="3">Additional Requirements:(Optional)</td>
               </tr>
               <tr>
                  <td colspan="3">
                    <?php echo $form->textArea($orderModel,'other_message', array('class'=>'simpleinfoBox'));?>
                    <div style="color:#666">Note:If you have our Promotion Code, please submit it in the Addtional Requirements to get further discount, thanks.</div>
                  </td>
               </tr>
               </tbody>
            </table>                       
                   </div>
                       <div style="margin:0px 0px 10px;" class="otherRequest01">
                            <div class="submitButton">
                              <input type="hidden" name="ajax" value="1" />
                                <?php echo CHtml::ajaxSubmitButton('',CHtml::normalizeUrl(array('','render'=>true)),
                                array(
                                  'dataType'=>'json',
                                  'type'=>'post',
                                  'success'=>'function(data) {
                                                           $("#AjaxLoader").hide();
                                                          if(data.status=="success"){
                                                           location.href="/succeed.html";
                                                          }else{
                                                            $.each(data, function(key, val) {
                                                              $("#"+key+"_em_").text(val);
                                                              $("#"+key+"_em_").show();
                                                            });
                                                          }
                                                      }',
                                                      'beforeSend'=>'function(){
                                                        $("#AjaxLoader").show();
                                                      }'
                                ),array('id'=>'submit_button_2','class'=>'form_button','style'=>'background:url(/images/newhomepage/confirm-submit-button1.jpg) left center no-repeat; width:189px; height:37px; border:none;')); ?>
                                <div id="AjaxLoader" style="display:none">submiting...</div>
                                <span>Reply within 12  Hours</span> 
                            </div>
                        </div>
                    </div>
                 </div>                 
            </div>
						<?php $this->endWidget(); ?>
						 
            <div style="display:none;" id="c07">
               <?php echo CHtml::beginForm();?>
               <div id="custom-city">
                   <h2><b>Hotel Choice</b></h2>
                    <ul>
								      <li><input type="radio" value="Luxury" name="hotel">Luxury</li>
								      <li><input type="radio" value="Standard" name="hotel">Standard</li>
								      <li><input type="radio" value="Super Deluxe" name="hotel">Super Deluxe</li>
								      <li><input type="radio" value="Budget" name="hotel">Budget</li>
								      <li><input type="radio" value="No Need" name="hotel">No Need</li>
								    </ul>
								    <h2>Dietetic Requirement</h2>
								    <ul>
								      <li><input type="radio" value="General" name="dietetic">General</li>
								      <li><input type="radio" value="Vegetarian Meals" name="dietetic">Vegetarian Meals</li>
								    </ul>
								    <h2>Guide Language</h2>
								     <ul>
								      <li><input type="radio" value="English" name="language">English</li>
								      <li><input type="radio" value="French" name="language">French</li>
								      <li><input type="radio" value="Chinese" name="language">Chinese</li>
								      <li><input type="radio" value="Italian" name="language">Italian</li>
								      <li><input type="radio" value="Korean" name="language">Korean</li>
								      <li><input type="radio" value="German" name="language">German</li>
								      <li><input type="radio" value="Spanish" name="language">Spanish</li>
								      <li class="last">Other<input type="text" name="language_other" style="width:80px;background-color: #FFFFFF; border-color: #5E5E5E #B7B7B7 #B7B7B7 #5E5E5E; border-style: solid; border-width: 1px; line-height: 1.2; padding: 3px;"></li>
								    </ul>
                   <h2>Other Requests</h2>
                     <div>
                      <?php echo $form->textArea($orderModel,'other_message', array('style'=>'width:99%; height:60px; color:#8b8a8a; padding:4px 3px; border:1px solid #dfdfdf; background:#fcfcfc; font-size:13px; margin-top:10px;'));?>
   								 </div>
                       <div class="again">
                       <div class="thought-left">
                        <div class="personalInfo">
                            <label> Full Name: <b style="color:#c67141;">*</b></label>
                            <select name="Order[gender]" id="gender_cus" style="width:70px;">
                                <option value="Mr."> Mr.</option>
                                <option value="Ms."> Ms.</option>
                            </select>
                            <input type="text" name="Order[full_name]" id="full_name_cus" style="width:197px;">
                            <div id="full_name_err" class="errorMessage" style="display:none">Please input your full name!</div>
                        </div>
                        <div class="personalInfo">
                            <label> Email Address: <b style="color:#c67141;">*</b></label>
                            <input id="email_cus" class="email" type="text" maxlength="150" name="Order[email]" />
                            <div id="email_err" class="errorMessage" style="display:none">Please input your email correctly!</div>
                        </div>
                       </div>
                       
                       <div class="thought-right">
                      <div class="bookingDetail">
                       <table width="50%" cellspacing="0" cellpadding="0" border="0" style=" float:left;">
                          <tbody>
                              <tr>
                              <td>Adults(&gt;12)<br>
                                <?php
                                unset($arr);
                                for($i=1;$i<31;$i++) $arr[$i]=$i;
                                echo $form->dropDownList($orderModel,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                                ?>
                              </td> 
                     <td>Children(2-12)<br>
                        <?php
                          unset($arr);
                          for($i=0;$i<31;$i++) $arr[$i]=$i;
                          echo $form->dropDownList($orderModel,'children', $arr);
                        ?>
                     </td> 
                     <td>Babies(0-2)<br>
                        <?php
                          unset($arr);
                          for($i=0;$i<12;$i++) $arr[$i]=$i;
                          echo $form->dropDownList($orderModel,'infant', $arr);
                        ?>
                     </td>   
               </tr>
               <tr><td colspan="3"><div class="personalInfo">
                            <label>Tour Starting Date:</label>
                            <input type="text" name="entry_date" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'});" class="Wdate" id="entry_date_cus">
                        </div>
                     </td></tr>
               </tbody>
            </table>                       
                   </div>
                       
                    </div>
                    <div class="clear"></div>                          
                          <div class="submitButton">
                                <?php echo CHtml::imageButton("/images/newhomepage/confirm-submit-button1.jpg",array('id'=>'submit-pop-order', 'style'=>"border:none; float:left; width:187px; height:37px;cursor:pointer;")); ?> <span>Reply within 12  Hours</span>
                            </div>
                        </div>   
 										 </div>	

              <?php echo CHtml::endForm();?>									 
            </div>
      </div>
      
        
        
        <div class="departs">
             <div class="departs-title">Cruise departs at the same day</div>
             <div class="departul">
                <?php foreach((array)$recentMonthCruise as $v):?>
                <ul>
                   <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$v->ufile,"147x96");?>"  alt="<?php echo $v->cruise_name;?>" /></li>
                   <li><a href="<?php echo $v->getUrl();?>"><?php echo $v->cruise_name;?></a></li>
                   <li class="starnew"><span class="star<?php echo $v->cruise_grade;?>"></span></li>
                   <li class="feature"><?php echo substr($v->highlights,0,35);?>...</li>
                   <li>From:<span><?php echo SiteUtils::getCurrencyPrice($v->uplowprice);?></span> p/p</li>
                   <!--  <li><a href="<?php echo $v->getUrl();?>"><img src="/images/yangtze/enquiry.jpg"></a></li>  -->
               </ul>
               <?php endforeach;?>
              
            </div>
        </div>
        </div>
        
</div>
</div>


<!-- ===================================pop============================================================  -->
     <!--  inquiring start  -->
     <div id="pop_cruise_order" class="inquiring" style="display:none;">
        <div class="close"><img src="/images/yangtze/closenew.png" onclick="$.zxxbox.hide();" /></div>
        <div class="titlenew">You’re inquiring about the "<?php echo $model->cruise_name;?>" Ship</div>
        <div class="inq-content">
           <div class="tell">Please tell us more about your travel plans witin just a few steps. We’ll get back to you with a quotation in 0.5-23.5 hours.</div>
           <div class="firstleft">
                <h2><img src="/images/yangtze/one.png"  alt="" /> <span>Personal Information</span></h2>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                     <tr>
                         <td>Full Name:</td>
                         <td>Adults(&gt;12)</td>
                     </tr>
                     <tr>
                         <td><select style="width:50px;" id="gender" name="gender" onchange="if(this.value=='');else style='color:#000;width:50px;'">
                              <option value="Mr."> Mr.</option>
                              <option value="Ms."> Ms.</option>
                             </select> 
                             <input type="text" id="full_name" name="full_name" value="" style="width:170px;">             
                         </td>
                         <td>
                          <select id="adults" name="adults" onchange="if(this.value=='');else style='color:#000;'">
                            <?php for($i=1; $i<=30; $i++):?>
                              <option value="<?php echo $i;?>" <?php if($i==2):?>selected<?php endif;?>><?php echo $i;?></option>
                            <?php endfor;?>
                            </select>
                          </td>
                      </tr>
                      <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr>
                         <td>Email Address:</td>
                         <td>Children(2-12)</td>
                      </tr>
                      <tr>
                         <td><input type="text" id="email" name="email" class="email"></td>
                         <td>
                          <select id="children" name="children" onchange="if(this.value=='');else style='color:#000;'">
                            <?php for($i=0; $i<=10; $i++):?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                          </select>
                         </td>
                     </tr>
                     <tr>
                         <td>Nationality:</td>
                         <td>Badies(0-2)</td>
                     </tr>
                     <tr>
                         <td><input type="text" maxlength="50" id="nationality" name="nationality" class="telephone"></td>
                         <td>
                            <select id="infant" name="infant" onchange="if(this.value=='');else style='color:#000;'">
                              <?php for($i=0; $i<=10; $i++):?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                              <?php endfor;?>
                            </select>
                          </td>
                     </tr>
                     <tr>
                         <td>Cruise Date:</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr>
                         <td><input type="text" maxlength="100" id="entry_date" name="entry_date" class="Wdate" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})"></td>
                         <td>&nbsp;</td>
                     </tr>
                  </tbody>
                </table>
           </div>
           <div class="firstright">
               <div class="booking">
                  <h2>Your Booking Summary</h2>
                  <p>Cruise ship: <?php echo $model->cruise_name;?><br />
                     Price:<span>from <?php echo SiteUtils::getCurrencyPrice($model->getPrice());?></span> person<br />
                     Cruise date:<span id="pop_cruise_date"></span><br />
                     Itinerary:<span id="pop_itinerary">Chongqing-Yichang</span>
                  </p>
               </div>
               <div class="book1">
                  <h2>Book with us</h2>
                  <ul>
                      <li>Absolutly no hidden fees;</li>
                      <li>Guarantee you the lowest cruise price;</li>
                      <li>One-on-one travel consultant service;</li>
                      <li>Ensure you a worry-free vacation.</li>
                  </ul>
               </div>
           </div>
           <div class="clear"></div>
           <div class="second">
              <h2><img src="/images/yangtze/second.png"  alt="" /> <span>About the Ship</span></h2>
              <p>The Price here is one cabin sharing by two people. If you want to have one room by yourself, or upgrade the level of the cabin, you have to pay more.</p>
              <table border="0" cellspacing="0" cellpadding="0">
                <tbody>
                   <tr>
                      <td>Preferred Cruises Itinerary:</td>
                      <td>Preferred Cabin:</td>
                      <td>No.of Cabins:</td>
                   </tr>
                   <tr>
                      <td><select style="width:285px;" id="cruise_itinerary_2" name="cruise_itinerary" onchange="if(this.value=='');else style='color:#000; width:285px;'">
                            <option value="<?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?>"><?php echo Cruise::$upCityDays[$model->upcity].Cruise::$upCityArr[$model->upcity];?></option>
                            <option value="<?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?>"><?php echo Cruise::$downCityDays[$model->downcity].Cruise::$downCityArr[$model->downcity];?></option>
                           </select>
                      </td>
                      <td><select id="preferred_cabin_2" name="preferred_cabin" onchange="if(this.value=='');else style='color:#000;'">
                            <?php foreach ((array)$cruise_rooms as $k=>$v):?>
                              <option value="<?php echo $v->name;?>"><?php echo $v->name;?></option>
                            <?php endforeach;?>
                          </select>
                      </td>
                      <td><select id="no_of_cabins" name="no_of_cabins:" onchange="if(this.value=='');else style='color:#000;'">
                            <option value="0.5 Cabin">0.5 Cabin</option>
                            <option value="1 Cabin">1 Cabin</option>
                            <option value="1.5 Cabins">1.5 Cabins</option>
                            <option value="2 Cabins">2 Cabins</option>
                            <option value="2.5 Cabins">2.5 Cabins</option>
                            <option value="3 Cabins">3 Cabins</option>
                            <option value="more than 3 Cabins">more than 3 Cabins</option>
                          </select>
                      </td>
                   </tr>
                 </tbody>
             </table>
           </div>
           <div class="three">
              
              <h2><img src="/images/yangtze/three.png"/><span>Maybe other cities you want to tour with Yangtze Cruise</span> <strong><img src="/images/yangtze/down1.gif"  onclick="$(this).parents('.three').find('table').toggle()" /></strong><!-- <strong><img src="/images/yangtze/up1.jpg"  alt="" /></strong> --></h2>

              <p>If the answer is no, please ignore this part and submit your inquiry directly.</p>
              <table border="0" cellspacing="0" cellpadding="0" style="display:none;">
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="other_city[]" value="Beijing (the capital city)"> Beijing (the capital city)</td>
                        <td><input type="checkbox" name="other_city[]" value="Shanghai (the biggest city of china)"> Shanghai (the biggest city of china)</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="other_city[]" value="Xian (the ancient heart of China)"> Xian (the ancient heart of China)</td>
                        <td><input type="checkbox" name="other_city[]" value="Guilin (Li River cruise,Yangshuo)"> Guilin (Li River cruise,Yangshuo)</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="other_city[]" value="Chengdu (the homotown of Panda)"> Chengdu (the homotown of Panda)</td>
                        <td><input type="checkbox" name="other_city[]" value="Tibet (the World's dream)"> Tibet (the World's dream)</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="other_city[]" value="Hong Kong (the shopping paradise)"> Hong Kong (the shopping paradise)</td>
                    </tr>
                </tbody>
              </table>
          </div>
          <div class="three">
              <h2><img src="/images/yangtze/four.png" /> <span>Additional Requirements(optional)</span></h2>
              <p>If you have any other informations want us to know, please write it down here. Our CSD will try their best to find best solutions for you!</p>
              <textarea name="other_message" id="other_message" cols="" rows="" style=" border:1px solid #c3c3c3; width:628px; height:70px; margin-top:10px;"></textarea>
          </div>
        </div>
        <div class="bott">
            <a href="javascript:;" onclick="submit_cruise_order()"><img src="/images/yangtze/button.png" /></a> <span>Reply within 12Hours! </span>
        </div>
     </div>
     <!--  inquiring end  -->
     

<!--弹出层时背景层DIV-->
<div id="fade" class="black_overlay"></div>

<div id="MyDiv" class="white_content">
  <div class="succed">
          <div class="close" onclick="CloseDiv('MyDiv','fade')"><img src="/images/yangtze/closenew.png" /></div>
          <div class="succ-content"><img src="/images/yangtze/succed.jpg"  alt="" /></div>
  </div>
</div>
     
<script>
  var _price = {
    tab:function(num, obj){
      if(num == 1){
        $("#c13").show();
        $("#c12").hide();
        $("#change_sd12").removeClass("sd12hover").addClass("sd12");
        $(obj).removeClass("sd13").addClass("sd13hover");
      }else{
        $("#c13").hide();
        $("#c12").show();
        $(obj).removeClass("sd12").addClass("sd12hover");
        $("#change_sd13").removeClass("sd13hover").addClass("sd13");
      }
    }
  }

//弹出隐藏层
function ShowDiv(show_div,bg_div){
  document.getElementById(show_div).style.display='block';
  document.getElementById(bg_div).style.display='block' ;
  var bgdiv = document.getElementById(bg_div);
  bgdiv.style.width = document.body.scrollWidth;
  $("#"+bg_div).height($(document).height());
}

//关闭弹出层
function CloseDiv(show_div,bg_div)
{
  document.getElementById(show_div).style.display='none';
  document.getElementById(bg_div).style.display='none';
}

function pop_cruise(obj,date){
   $("#pop_itinerary").html($(obj).find("em").html());
   $("#pop_cruise_date").html(date);
   $("#pop_cruise_order").zxxbox({
    bgclose: false,
    title:'',
  });
}

function submit_cruise_order(){
   var gender = $("#gender").val();
   var full_name = $("#full_name").val();
   
   if(full_name==""){
      alert("Pleaser enter your name.");
      return;
   }
   var adults = $("#adults").val();
   
  var email = $("#email").val();
  var reg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
  if(!reg.test(email)){
    alert('Please input your correct email.');
    $("#email").focus();
    return false;
  }

  var nationality = $("#nationality").val();
  if(nationality == ""){
    alert('Please input your nationality');
    return false;
  }
   var children = $("#children").val();
   var infant = $("#infant").val();
   var entry_date = $("#entry_date").val();
   var cruise_itinerary = $("#cruise_itinerary_2").val();
   var preferred_cabin = $("#preferred_cabin_2").val();
   var no_of_cabins = $("#no_of_cabins").val();

   var other_cities_arr = [];
   $("input[name='other_city[]']:checked").each(function(){
      other_cities_arr.push($(this).val());
   })
   var other_cities = other_cities_arr.join();
   var other_message = $("#other_message").val();

   $.get("<?php echo Yii::app()->createUrl('cruise/submitPopOrder');?>", {gender:gender, full_name:full_name,adults:adults, email:email,
    children:children, infant:infant, entry_date:entry_date, cruise_itinerary:cruise_itinerary,
    preferred_cabin:preferred_cabin,no_of_cabins:no_of_cabins, other_cities:other_cities, other_message:other_message}, function(ret){
      if(ret == 0){
        //alert("Submit Successful！ Thanks for inquiring, our CSD will contact with you within 12 hours.");
        ShowDiv('MyDiv','fade');
        $.zxxbox.hide();
        $("#pop_cruise_order").find("input").val('');
      }
   })
  
  /*
  $("#pop_success_tip").zxxbox({
    bgclose:true,
    title:'',
  });
  */
}

$("#submit-pop-order").click(function(){
    if($("input[name='hotel']:checked").length == 0){
      alert('Please choose hotel choice');
      return false;
    }
    if($("#full_name_cus").val() == ''){
      alert('Please enter your full name.');
      $("#full_name_cus").focus();
      return false;
    }
    var email = $("#email_cus").val();
    var reg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
    if(!reg.test(email)){
      alert('Please input your correct email.');
      $("#email_cus").focus();
      return false;
    }
  
    if($("#entry_date_cus").val()==""){
      alert('Please input tour starting date.');
      $("#entry_date_cus").focus();
      return false;
    }
    document.forms["adminForm"].submit();
  })

$('#overviewid').click(function(){
	$(this).attr('class','smalldq');
	$('#itineraryid').attr('class','');
	$('#cabins').attr('class','small');
	$('#life').attr('class','');
  $('#tips_nav').removeClass("smalldq").addClass("small");
  $('#warm_note').attr("class","");
	$('#overviewcontent').show();
	$('#itinerarycontent').hide();
	$('#cabinscontent').hide();
	$('#lifecontent').hide();
	$("#c08").hide();
	 $("#c09").hide();
});
$('#itineraryid').click(function(){
	$(this).attr('class','dq');
	$('#overviewid').attr('class','small');
	$('#cabins').attr('class','small');
	$('#life').attr('class','');
  $('#tips_nav').removeClass("smalldq").addClass("small");
  $('#warm_note').attr("class","");
	$('#overviewcontent').hide();
	$('#itinerarycontent').show();
	$('#cabinscontent').hide();
	$('#lifecontent').hide();
	$("#c08").hide();
	 $("#c09").hide();
});
$('#cabins').click(function(){
	$(this).attr('class','smalldq');
	$('#overviewid').attr('class','small');
	$('#itineraryid').attr('class','');
	$('#life').attr('class','');
  $('#tips_nav').removeClass("smalldq").addClass("small");
  $('#warm_note').attr("class","");
	$('#overviewcontent').hide();
	$('#itinerarycontent').hide();
	$('#cabinscontent').show();
	$('#lifecontent').hide();
	$("#c08").hide();
	 $("#c09").hide();
});
$('#life').click(function(){
	$(this).attr('class','dq');
	$('#overviewid').attr('class','small');
	$('#itineraryid').attr('class','');
	$('#cabins').attr('class','small');
  $('#tips_nav').removeClass("smalldq").addClass("small");
  $('#warm_note').attr("class","");
	$('#overviewcontent').hide();
	$('#itinerarycontent').hide();
	$('#cabinscontent').hide();
	$('#lifecontent').show();
	$("#c08").hide();
	 $("#c09").hide();
});

$("#tips_nav").click(function(){
  $(this).removeClass("small").addClass("smalldq");
  $('#overviewid').attr('class','small');
  $('#itineraryid').attr('class','');
  $('#cabins').attr('class','small');
  $('#life').attr('class','');
  $('#warm_note').attr("class","");
  $("#c08").show();
  $('#overviewcontent').hide();
  $('#itinerarycontent').hide();
  $('#cabinscontent').hide();
  $('#lifecontent').hide();
   $("#c09").hide();
});

$("#warm_note").click(function(){
   $(this).addClass("dq");
  $('#overviewid').attr('class','small');
  $('#itineraryid').attr('class','');
  $('#cabins').attr('class','small');
  $('#life').attr('class','');
  $('#tips_nav').removeClass("smalldq").addClass("small");
  
  $('#overviewcontent').hide();
  $('#itinerarycontent').hide();
  $('#cabinscontent').hide();
  $('#lifecontent').hide();
  $("#c08").hide();
  $("#c09").show();
});
$('#c01').click(function(){
	$(this).addClass('sd01');
	$('#c02').removeClass('sd01').addClass("sd02");
	$('#c01-new').show();
	$('#c02-new').hide();
});
$('#c02').click(function(){
  $(this).addClass('sd01');
  $('#c01').removeClass('sd01').addClass("sd02");
	//$(this).attr('class','sd02');
	//$('#c01').attr('class','sd01');
	$('#c01-new').hide();
	$('#c02-new').show();
});
$('#change_sd06').click(function(){
	$(this).attr('class','sd06');
	$('#change_sd07').attr('class','sd07');
	$('#c06').show();
	$('#c07').hide();
});
$('#change_sd07').click(function(){
	$(this).attr('class','sd07 sd07hover');
	$('#change_sd06').attr('class','sd06 sd06hover');
	$('#c06').hide();
	$('#c07').show();
});
$('#m08').click(function(){
	$(this).attr('class','sd08');
	$('#m09').attr('class','sd09');
	$('#c08').show();
	$('#c09').hide();
});
$('#m09').click(function(){
	$(this).attr('class','sd09 sd09hover');
	$('#m08').attr('class','sd08 sd08hover');
	$('#c08').hide();
	$('#c09').show();
});
$('#m10').click(function(){
	$(this).attr('class','sd10');
	$('#m11').attr('class','sd11');
	$('#c10').show();
	$('#c11').hide();
});
$('#m11').click(function(){
	$(this).attr('class','sd11 sd11hover');
	$('#m10').attr('class','sd10 sd10hover');
	$('#c10').hide();
	$('#c11').show();
});
$('#select_calendar').change(function(){
	window.location.href="<?php echo Yii::app()->createUrl('cruise/view',array('id'=>$model->id,'name'=>$model->cruise_name));?>?month="+$(this).val();
});



  (function($){
    $(".currency").click(function(){
      $(this).find("ul").toggle();
      $(this).find("ul>li").click(function(){
        var currency = $(this).attr('val');
        $.get('/travel/site/currency', {currency: currency}, function(ret){
          if(ret == 0) window.location.reload();
        })
      })
    })

    <?php if($_COOKIE['currency']):?>
      var currency = "<?php echo $_COOKIE['currency'];?>";
      $(".currency").find("ul>li").each(function(){
        if($(this).attr('val') == currency){
          $(".currency").find("span img").attr('src', $(this).find("img").attr('src'));
          $(".currency").find("span b").html($(this).find("b").html());
        }
      })
    <?php endif;?>


    

  })(jQuery);
</script>      
