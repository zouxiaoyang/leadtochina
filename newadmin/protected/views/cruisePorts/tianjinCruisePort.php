<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jqueryUi/jquery.ui.core.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');

$this->setPageTitle(" Tianjin Port to Beijing Tours & Transfer, Tianjin Beijing Port to Great Wall Tour");
Yii::app()->clientScript->registerMetaTag('keywords','tianjin port, beijing port, tianjin to great wall, xingang port');
Yii::app()->clientScript->registerMetaTag('description','Private transfer & excurison tours from Tianjin Xingang cruise port to Beijing, Tianjin to Great Wall tours are offered with best price.');
?>
<style type="text/css">
<!--
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
.trust{ margin-top:0px;}
.errorMessage{display:none}
#left{ width:182px; margin-top:20px;}
#right{ width:723px;}
#CDSWIDSSP .widSSPData{ width:172px; padding: 7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:172px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
#CDSWIDSSP .widSSPData .widSSPInformation{ padding:10px 0px 8px 0px;}
.tourlist2{ margin-top:0px;}
.listul1 ul li{ padding:3px 0px 3px 10px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {display:none;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Tianjin Cruise Port to Beijing Transfer & Excursions</div>
   <!--  menu-tours end  -->
   <div id="banner" style=" background:url(/images/cruise/banner1.jpg) left center no-repeat; width:175px; height:129px; padding:49px 79px 147px 666px;"><a href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_Tours_Beijing_Private_One_day_Tour-Hefei_Anhui.html"><img src="/images/cruise/trip.jpg" alt="" /></a></div>   
    <!--  left start  -->
    <div id="left">
        <!--  rightlist start  -->
        <div class="rightlist1">
           <h2 style="height:23px;"><img src="/images/cruise/title1.jpg" alt="" /></h2>
           <ul>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>1));?>">Celebrity Millennium</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>2));?>">Sapphire Princess</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>3));?>">Voyager of the Seas</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>4));?>">Holland America Volendam</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>5));?>">Oceania Nautical</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>6));?>">Crystal Symphony</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>7));?>">Regent Seven Seas Voyager</a></li>               
           </ul>
           <h2 style="height:23px;"><img src="/images/cruise/title2.jpg" alt="" /></h2>
           <ul>
              <li style="display:none"><a href="#cal-price">Tianjin Cruise Calendar</a></li>
              <li><a href="#info">Tianjin Cruise Port Intro</a></li>
              <li><a href="#map">Tianjin Cruise Port Map</a></li>
              <li><a href="#transport">Tianjin Port Transportation</a></li>
              <li><a href="#xingang">Xingang Port Intro</a></li>
              <li><a href="#fun">Fun Things To Do</a></li>
              <li><a href="#local">Local Currency</a></li>               
           </ul>
           <h2 style="height:23px;"><img src="/images/cruise/title3.jpg" alt="" /></h2>
           <ul>
              <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'tianjin-tours'));?>">Tianjin Tours</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Beijing Tours</a></li>
              <li><a href="/beijing/tours?v=list&id=1">Great Wall Tours</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'xian-tours'));?>">Xian Tours</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('CruisePorts/shanghaiCruisePort');?>">Shanghai Tours</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'xiamen-tours'));?>">Xiamen Tours</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'dalian-tours'));?>">Dalian Tours</a></li>         
           </ul>
           <h2 style="height:23px;"><img src="/images/cruise/title4.jpg" alt="" /></h2>
           <ul>
              <li><a href="/travel/china-tianjin-facts-guide-42">Tianjin Facts</a></li>
              <li><a href="/travel/china-tianjin-attractions">Tianjin Attractions</a></li>
              <li><a href="/travel/city-tianjin-tours">Tianjin Tours</a></li>
              <li><a href="/travel/tianjin-hotels-16">Tianjin Hotel</a></li>
              <li><a href="/tianjin/map.html">Tianjin Maps</a></li>
              <li><a href="/travel/china-tianjin-climate-guide-266">Tianjin Climate</a></li>
              <li><a href="/travel/china-tianjin-transportations-guide-264">Transportations</a></li>
              <li><a href="/travel/china-tianjin-travel-tips-guide-265">Tianjin Travel Tips</a></li>
              <li><a href="/travel/china-tianjin-food-restaurants-guide-41">Food &amp; Restaurants</a></li>
              <li><a href="/travel/china-tianjin-nightlife-guide-43">Tianjin Nightlife</a></li>               
           </ul>
        </div>
        <!--  rightlist end  -->
               
    <div class="tripcontent">
        <script src="/travel/js/tripadvisor.js"></script>
    </div>
         
         <div class="online-step">
            <h2><img src="/images/cruise/title5.jpg" alt="" /></h2>
            <ul>
                <li><img src="/images/cruise/step1.jpg" alt="" /></li>
                <li><img src="/images/cruise/step2.jpg" alt="" /></li>
                <li><img src="/images/cruise/step3.jpg" alt="" /></li>
                <li><img src="/images/cruise/step4.jpg" alt="" /></li>
                <li><img src="/images/cruise/step5.jpg" alt="" /></li>
            </ul>
         </div>
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right">        
        <!--  tourlist2 start  -->
        <div class="tourlist2" id="ship1" style="margin-top:20px;">
           <h2>Service for Passengers from Celebrity Millennium</h2>
           <div class="listpic1"><img src="/images/cruise/pic01.jpg" alt="" ></div>
           <div class="listcontent2"><p>Here we offer you private transfer service between Tianjin port and Beijing hotel. You also may take 3 days Beijing excursion tours to Beijing city and side which includes Great Wall, Forbidden City, and Xian Terracotta Warriors etc.</p>
             <div class="clear"></div>
             <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="5" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td>6:00AM Apr 21</td>
                          <td style="border-right:none;">6:00PM Apr 23</td>
                     </tr>
                     <tr>
                          <td>6:00AM Apr 27</td>
                          <td style="border-right:none;">6:00PM Apr 29</td>
                     </tr>
                     <tr>
                          <td>6:00AM Oct 07</td>
                          <td style="border-right:none;">6:00PM Oct 09</td>
                     </tr>
                     <tr>
                          <td style="border-bottom:none;">6:00AM Oct 15</td>
                          <td style="border-right:none; border-bottom:none;">6:00PM Oct 17</td>
                      </tr>
                   </tbody>
                 </table>
          </div>
           <div class="listul1">
             <ul>
                    
                     <li>
                      <a href="/travel/china-3-days-tianjin-port-beijing-tianjin-port-round-trip-938.html">3 Days Beijing Group Tour & Tianjin Port Round Transfer (No Shopping)<span>  from US$425</span> <img alt="" src="/images/citytours/hot.gif"></a></li>
                      
                     <li>
                      <a href="/travel/china-3-days-tianjin-port-to-beijing-private-tour-no-shopping-907.html">3 Days Beijing Private Tour & Tianjin Port Round Transfer (No Shopping)<span>  from US$630</span></a></li>
                       <li><a href="/travel/china-3-days-tianjin-port-to-beijing-private-tour-shopping-tour-960.html">3 Days Beijing Private Tour & Tianjin Port Round Transfer (Shopping Tour)<span> from US$480</span></a></li>
                       <li>
                      <a href="/travel/china-2-days-tianjin-port-beijing-round-trip-overnight-in-beijing-923.html">2 Days Beijing Tour & Tianjin Port Round Transfer (Overnight in Beijing) <span>  from US$367</span></a></li> 
                  </ul>

                <ul>
                     <li>
                      <a href="/travel/china-tianjin-port-to-beijing-private-transfer--one-way--908.html">Tianjin Port to Beijing Private Transfer ( One Way ) </a> 
                      </li>

                      <li>
                      <a href="/travel/china-beijing-to-tianjin-port-private-transfer--one-way--909.html">Beijing to Tianjin Port Private Transfer ( One Way ) </a> 
                     </li> 
                     <li>
                      <a href="/travel/china-3-days-tianjin-beijing-chengde-round-and-highlight-tour-970.html">3 Days Tianjin Beijing Chengde Tour & Tianjin Port Round Transfer<span>  from US$964</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-3-days-tianjin-beijing-chengde-round-and-easy-tour-971.html">3 Days Tianjin Beijing Chengde Easy Tour & Tianjin Port Round Transfer<span> from US$879</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-3-days-tianjin-beijing-and-xian-china-highlights-round-tour-972.html">3 Days Beijing, Xian Tour & Tianjin Port Round Transfer<span> from US$998</span></a> 
                     </li> 
                    
                     
              </ul>
           </div>
        </div>
        <!--  tourlist2 end  -->

        <!--  tourlist2 start  -->
        <div class="tourlist2" id="ship2">
           <h2>Service for Passengers from Sapphire Princess</h2>
           <div class="listpic1"><img src="/images/cruise/pic2.jpg" alt="" ></div>
           <div class="listcontent2"><p>Here we offer private & coach transfer service between Tianjin port and Beijing hotel for the passengers from Sapphire Princess in Tianjin. You may choose the half day excursion tours to Beijing.</p>
           <div class="clear"></div>
             <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="3" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td>4:00AM Oct 07</td>
                          <td style="border-right:none;">6:00PM Oct 07</td>
                     </tr>
                     <tr>
                          <td style="border-bottom:none;">4:00AM Nov 10</td>
                          <td style="border-right:none; border-bottom:none;">6:00PM Nov 10</td>
                      </tr>
                   </tbody>
                 </table>
           </div>
           <div class="listul1">
              <ul>
                    <li>
                      <a href="/travel/china-tianjin-port-to-beijing-private-transfer-one-way-908.html">Tianjin Port to Beijing Private Transfer ( One Way )</a> 
                     </li>
                     <li>
                      <a href="/travel/china-beijing-to-tianjin-port-private-transfer--one-way--909.html">Beijing to Tianjin Port Private Transfer ( One Way )</a> 
                     </li> 
                     <li>
                      <a href="/travel/china-3-days-tianjin-cruise-port-to-beijing-tours-665.html">3 Days Beijing Tour & After Tianjin Port Singleway Transfer<span>  from US$252</span></a> 
                     </li>
                      <li>
                      <a href="/travel/china-4-days-tianjin-cruise-port-to-beijing-tours-651.html">4 Days Beijing Tour & After Tianjin Port Singleway Transfer<span>  from US$325</span></a> 
                     </li> 
                      <li>
                      <a href="/travel/china-5-days-tianjin-cruise-port-to-beijing-tours-666.html">5 Days Beijing Tour & After Tianjin Port Singleway Transferv <span>  from US$362</span></a> 
                     </li> 
                      <li>
                      <a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-flight-562.html">1 Day Terracotta Warriors Tours from Beijing by Flight<span>  from US$493</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-3-days-beijing-private-tour--tianjin-port-transfer-919.html">3 Days Beijing Private Tour & Singleway Transfer to Tianjin Port  <span>  from US$346</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-4-days-beijing-private-tour--tianjin-port-transfer-920.html">4 Days Beijing Private Tour & Singleway Transfer to Tianjin Port   <span>  from US$400</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-5-days-beijing-private-tour--tianjin-port-transfer-921.html">5 Days Beijing Private Tour & Singleway Transfer to Tianjin Port   <span>  from US$435</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-6-days-tianjin-beijing-xian-and-shanghai-china-memory-tours-973.html">6 Days Tianjin Beijing Xian and Shanghai China Memory Tours <span>  from US$1190</span></a> 
                     </li>
                       <li>
                      <a href="/travel/china-tianjin-port-to-beijing-transfer--mutianyu-great-wall-afternoon-tour-669.html">Mutianyu Great Wall Afternoon Tour & After Tianjin Port Singleway Transfer <span>  from US$199</span></a> 
                     </li> 
                    <li>
                      <a href="/travel/china-tianjin-port-to-beijing-transfer--tiananmen-square-and-forbidden-city-afternoon-tour-670.html">Tiananmen Square and Forbidden City Afternoon Tour & After Tianjin Port Singleway Transfer <span>  from US$189</span></a> 
                     </li> 
                      <li>
                      <a href="/travel/china-tianjin-port-to-beijing-transfer--old-hutong-and-olympic-sites-afternoon-tour-671.html">Beijing Hutong and Olympic Sites Afternoon Tour & After Tianjin Port Singleway Transfer <span>  from US$189</span></a> 
                     </li>
                    <li>
                      <a href="/travel/china-mutianyu-great-wall-morning-excursion--beijing-tianjin-port-private-transfer-924.html">Morning Mutianyu Great Wall Excursion & Singleway Transfer to Tianjin Port <span>  from US$225</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-tiananmen-square-and-forbidden-city-morning-tour--beijing-tianjin-port-private-transfer-926.html">Morning Tiananmen Square and Forbidden City Private Tour & Singleway Transfer to Tianjin Port <span>  from US$231</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-morning-old-hutong-and-olympic-sites-tour--beijing-tianjin-port-private-transfer-927.html">Morning Beijing Hutong and Olympic Sites Private Tour & Singleway Transfer to Tianjin Port <span>  from US$225</span></a> 
                     </li> 
                     
                     </ul>
           </div>
        </div>
        <!--  tourlist2 end  -->
        
        <!--  tourlist2 start  -->
        <div class="tourlist2" id="ship4">
           <h2>Service for Passengers from Holland America Volemdam</h2>
           <div class="listpic1"><img src="/images/cruise/pic3.jpg" alt="" ></div>
           <div class="listcontent2"><p>Here we offer private transfer service between Tianjin port and Beijing hotel for the passengers from Holland America Volemdam in Tianjin. You may choose 2 day excursion tours to Beijing.</p>
           <div class="clear"></div>
             <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="4" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td>7:00AM Mar 24</td>
                          <td style="border-right:none;">7:00PM Mar 25</td>
                     </tr>
                     <tr>
                          <td>8:00AM Apr 06</td>
                          <td style="border-right:none;">7:00PM Apr 07</td>
                     </tr>
                     <tr>
                          <td style="border-bottom:none;">7:00AM Apr 20</td>
                          <td style="border-right:none; border-bottom:none;">7:00PM Apr 21</td>
                      </tr>
                   </tbody>
                 </table>
           </div>
           <div class="listul1">
              
              <ul>
                     <p>&nbsp;</p>
                     <li>
                      <a href="/travel/china-2-days-tianjin-port--beijing-round-trip--overnight-in-beijing--923.html">2 Days Beijing Tour & Tianjin Port Round Transfer (Overnight in Beijing)  <span>  from US$367</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-2-days-tianjin-port--beijing-round-trip--overnight-on-ship--912.html">2 Days Beijing Tour & Tianjin Port Round Transfer (Overnight on ship) <span>  from US$441</span></a> 
                     </li> 
                      <p>&nbsp;</p>
                     <li>
                      <a href="/travel/china-beijing-to-tianjin-port-private-transfer--one-way--909.html">Beijing to Tianjin Port Private Transfer ( One Way ) </a> 
                     </li> 
                     <li>
                      <a href="/travel/china-tianjin-port-to-beijing-private-transfer--one-way--908.html">Tianjin Port to Beijing Private Transfer ( One Way ) </a> 
                     </li> 
                  
              </ul>
           </div>
        </div>
        <!--  tourlist2 end  -->
        
        <!--  tourlist2 start  -->
        <div class="tourlist2" id="ship5">
           <h2>Service for Passengers from Oceania Nautica</h2>
           <div class="listpic1"><img src="/images/cruise/pic4.jpg" alt="" ></div>
           <div class="listcontent2"><p>Here we offer private transfer service between Tianjin port and Beijing hotel for the passengers from Oceania Nautica in Tianjin. You may choose 2 -5 days excursion tours to Beijing and her side.</p>
           <div class="clear"></div>
             <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="2" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td style="border-bottom:none;">8:00AM Mar 09</td>
                          <td style="border-right:none; border-bottom:none;">6:00PM Mar 10</td>
                      </tr>
                   </tbody>
                 </table>
           </div>
           <div class="listul1">
             <ul>
                     <li>
                      <a href="/travel/china-tianjin-port-to-beijing-private-transfer--one-way--908.html">Tianjin Port to Beijing Private Transfer ( One Way ) </a> 
                     </li> 
                     <li>
                      <a href="/travel/china-beijing-to-tianjin-port-private-transfer--one-way--909.html">Beijing to Tianjin Port Private Transfer ( One Way ) </a> 
                     </li> 
                     <p>&nbsp;</p>
                     <li>
                      <a href="/travel/china-2-days-tianjin-port--beijing-round-trip--overnight-in-beijing--923.html">2 Days Beijing Tour & Tianjin Port Round Transfer (Overnight in Beijing)  <span>  from US$240</span></a> 
                     </li> 
                     <p>&nbsp;</p>

                     <li>
                      <a href="/travel/china-3-days-tianjin-cruise-port-to-beijing-tours-665.html">3 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$165</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-4-days-tianjin-cruise-port-to-beijing-tours-651.html">4 Days Beijing Tour & After Tianjin Port Singleway Transfer  <span>  from US$200</span></a> 
                     </li> 
                      <li>
                      <a href="/travel/china-5-days-tianjin-cruise-port-to-beijing-tours-666.html">5 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$255</span></a> 
                     </li> 
                     <p>&nbsp;</p>

                     <li>
                      <a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-flight-562.html">1 Day Terracotta Warriors Tours from Beijing by Flight <span>  from US$493</span></a> 
                     </li> 
                      <p>&nbsp;</p>
                                     
                     <li>
                      <a href="/travel/china-3-days-beijing-private-tour--tianjin-port-transfer-919.html">3 Days Beijing Private Tour & Singleway Transfer to Tianjin Port  <span>  from US$346</span></a> 
                     </li> 
                                      
                     <li>
                      <a href="/travel/china-4-days-beijing-private-tour--tianjin-port-transfer-920.html">4 Days Beijing Private Tour & Singleway Transfer to Tianjin Port   <span>  from US$404</span></a> 
                     </li> 
                                       
                     <li>
                      <a href="/travel/china-5-days-beijing-private-tour--tianjin-port-transfer-921.html">5 Days Beijing Private Tour & Singleway Transfer to Tianjin Port   <span>  from US$435</span></a> 
                     </li> 
                                      
                 </ul>
           </div>
        </div>
        <!--  tourlist2 end  -->
        
        <!--  tourlist2 start  -->
        <div class="tourlist2" id="ship6">
           <h2>Service for Passengers from Crystal Symphony</h2>
           <div class="listpic1"><img src="/images/cruise/pic5.jpg" alt="" ></div>
           <div class="listcontent2"><p>Here we offer private transfer service between Tianjin port and Beijing hotel for the passengers from Crystal Symphony in Tianjin. You also may take 1-5 days Beijing excursion tours to Beijing city and side which includes Great Wall, Forbidden City, and Xian Terracotta Warriors etc.</p>
           <div class="clear"></div>
             <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="2" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td style="border-bottom:none;">8:00AM Apr 19</td>
                          <td style="border-right:none; border-bottom:none;">6:00PM Apr 19</td>
                      </tr>
                   </tbody>
                 </table>
           </div>
           <div class="listul1">
              <ul>
                                 <li>
                      <a href="/travel/china-tianjin-port-to-beijing-private-transfer--one-way--908.html">Tianjin Port to Beijing Private Transfer ( One Way ) </a> 
                     </li> 

                                       <li>
                      <a href="/travel/china-beijing-to-tianjin-port-private-transfer--one-way--909.html">Beijing to Tianjin Port Private Transfer ( One Way ) </a> 
                     </li> 
                     <p>&nbsp;</p>
                         <li>
                      <a href="/travel/china-3-days-tianjin-cruise-port-to-beijing-tours-665.html">3 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$252</span></a> 
                     </li> 
                          <li>
                      <a href="/travel/china-4-days-tianjin-cruise-port-to-beijing-tours-651.html">4 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$325</span></a> 
                     </li> 
                       <li>
                      <a href="/travel/china-5-days-tianjin-cruise-port-to-beijing-tours-666.html">5 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$362</span></a> 
                     </li> 
                     <p>&nbsp;</p>
                     <li>
                      <a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-flight-562.html">1 Day Terracotta Warriors Tours from Beijing by Flight<span>  from US$493</span></a> 
                     </li> 
                     <p>&nbsp;</p>
                                       <li>
                      <a href="/travel/china-3-days-beijing-private-tour--tianjin-port-transfer-919.html">3 Days Beijing Private Tour & Singleway Transfer to Tianjin Port  <span>  from US$346</span></a> 
                     </li> 
                                   
                                       <li>
                      <a href="/travel/china-4-days-beijing-private-tour--tianjin-port-transfer-920.html">4 Days Beijing Private Tour & Singleway Transfer to Tianjin Port  <span>  from US$404</span></a> 
                     </li> 
                                       <li>
                      <a href="/travel/china-4-days-beijing-xian-tianjin-port-private-tour-910.html">4 Days Beijing Xian PrivateTour & Singleway Transfer to Tianjin Port  <span>  from US$1029</span></a> 
                     </li> 
                                   
                                       <li>
                      <a href="/travel/china-5-days-beijing-private-tour--tianjin-port-transfer-921.html">5 Days Beijing Private Tour & Singleway Transfer to Tianjin Port  <span>  from US$435</span></a> 
                     </li> 
                                     
                                </ul>
           </div>
        </div>
        <!--  tourlist2 end  -->
        
        <!--  tourlist2 start  -->
        <div class="tourlist2" id="ship7">
           <h2>Service for Passengers from Regent Seven Seas Voyager </h2>
           <div class="listpic1"><img src="/images/cruise/pic6.jpg" alt="" ></div>
           <div class="listcontent2"><p>Here we offer private transfer service between Tianjin port and Beijing hotel for the passengers from Regent Seven Seas Voyager in Tianjin. Transfer rates are charged per the type and size of the vehicle you are going to reserve.You may choose the 2 day excursion tours to Beijing.</p>
           <div class="clear"></div>
             <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="2" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td style="border-bottom:none;">10:00AM Mar 20</td>
                          <td style="border-right:none; border-bottom:none;">5:00PM Mar 21</td>
                      </tr>
                   </tbody>
                 </table>
           </div>
           <div class="listul1">
             <ul>
                     <li>
                      <a href="/travel/china-2-days-tianjin-port--beijing-round-trip--overnight-in-beijing--923.html">2 Days Beijing Tour & Tianjin Port Round Transfer (Overnight in Beijing)  <span>  from US$367</span></a> 
                     </li> 
                                     <li>
                      <a href="/travel/china-tianjin-port-to-beijing-private-transfer--one-way--908.html">Tianjin Port to Beijing Private Transfer ( One Way ) </a> 
                     </li> 

                                       <li>
                      <a href="/travel/china-beijing-to-tianjin-port-private-transfer--one-way--909.html">Beijing to Tianjin Port Private Transfer ( One Way ) </a> 
                     </li> 
                       
            </ul>
           </div>
        </div>
        <!--  tourlist2 end  -->
        
        <!--  tourlist2 start  -->
        <div class="tourlist2" id="ship3">
           <h2>Service for Passengers from Voyager of the Seas</h2>
           <div class="listpic1"><img src="/images/cruise/pic7.jpg" alt="" ></div>
           <div class="listcontent2"><p>Here we offer private transfer service between Tianjin port and Beijing hotel for the passengers from Voyager of the Seas in Tianjin. Transfer rates are charged per the type and size of the vehicle you are going to reserve. You may choose the 3-5 days excursion tours to Beijing city and side which includes Great Wall, Forbidden City, and Xian Terracotta Warriors etc.</p>
           <div class="clear"></div>
             <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="3" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td>7:00AM Jun 26</td>
                          <td style="border-right:none;">6:00PM June 26</td>
                     </tr>
                     <tr>
                          <td colspan="2" style="border-bottom:none; border-right:none;" id="show_more"><span onclick="_cityTours.show_more(this)">Show More</span></td>
                          <td colspan="2" style="display:none;border-bottom:none; border-right:none;" id="hide_more"><span style="background:url(/images/cruise/hide.jpg) left center no-repeat;" onclick="_cityTours.hide_more(this)">Hide</span></td>
                      </tr>
                   </tbody>
                 </table>
                 
                 <div id="more_date" style="display:none;">
                    <table cellspacing="0" cellpadding="0" border="0">
                 <tbody>
                      <tr class="toptitle">
                          <td rowspan="18" style="font-size:12px; border-bottom:none; text-align:center;">2014 Tianjin Cruise Calendar</td>
                          <td>Arrive Date</td>
                          <td style="border-right:none;" >Depart Date</td>
                     </tr>
                     <tr>
                          <td>7:00AM Jun 26</td>
                          <td style="border-right:none;">6:00PM June 26</td>
                     </tr>
                     <tr>
                          <td>7:00AM June 30</td>
                          <td style="border-right:none;">6:00PM June 30</td>
                     </tr>
                     <tr>
                          <td>7:00AM Jul 05</td>
                          <td style="border-right:none;">6:00PM Jul 05</td>
                     </tr>
                     <tr>
                          <td>7:00AM Jul 11</td>
                          <td style="border-right:none;">6:00PM Jul 11</td>
                     </tr>
                     <tr>
                          <td>7:00AM Jul 17</td>
                          <td style="border-right:none;">6:00PM Jul 17</td>
                     </tr>
                     <tr>
                          <td>7:00AM Jul 21</td>
                          <td style="border-right:none;">6:00PM Jul 21</td>
                     </tr>
                     <tr>
                          <td>7:00AM Jul 26</td>
                          <td style="border-right:none;">6:00PM Jul 26</td>
                     </tr>
                     <tr>
                          <td>7:00AM Aug 01</td>
                          <td style="border-right:none;">6:00PM Aug 01</td>
                     </tr>
                     <tr>
                          <td>7:00AM Aug 07</td>
                          <td style="border-right:none;">6:00PM Aug 07</td>
                     </tr>
                     <tr>
                          <td>7:00AM Aug 11</td>
                          <td style="border-right:none;">6:00PM Aug 11</td>
                     </tr>
                     <tr>
                          <td>7:00AM Aug 16</td>
                          <td style="border-right:none;">6:00PM Aug 16</td>
                     </tr>
                     <tr>
                          <td>7:00AM Aug 22</td>
                          <td style="border-right:none;">6:00PM Aug 22</td>
                     </tr>
                     <tr>
                          <td>7:00AM Aug 28</td>
                          <td style="border-right:none;">6:00PM Aug 28</td>
                     </tr>
                     <tr>
                          <td>7:00AM Sept 01</td>
                          <td style="border-right:none;">6:00PM Sept 01</td>
                     </tr>
                     <tr>
                          <td>7:00AM Sept 06</td>
                          <td style="border-right:none;">6:00PM Sept 06</td>
                     </tr>
                     <tr>
                          <td>7:00AM Sept 10</td>
                          <td style="border-right:none;">6:00PM Sept 10</td>
                     </tr>
                     
                   </tbody>
                 </table>
                 </div>
           </div>
           <div class="listul1">
              <ul>
                                       <li>
                      <a href="/travel/china-beijing-to-tianjin-port-private-transfer--one-way--909.html">Beijing to Tianjin Port Private Transfer ( One Way ) </a> 
                     </li> 
                                       <li>
                      <a href="/travel/china-tianjin-port-to-beijing-private-transfer--one-way--908.html">Tianjin Port to Beijing Private Transfer ( One Way ) </a> 
                     </li> 
                     <p>&nbsp;</p>
                      <li>
                      <a href="/travel/china-3-days-tianjin-cruise-port-to-beijing-tours-665.html">3 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$252</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-4-days-tianjin-cruise-port-to-beijing-tours-651.html">4 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$325</span></a> 
                     </li> 
                     <li>
                      <a href="/travel/china-5-days-tianjin-cruise-port-to-beijing-tours-666.html">5 Days Beijing Tour & After Tianjin Port Singleway Transfer <span>  from US$362</span></a> 
                     </li> 
                     <p>&nbsp;</p>


                                       <li>
                      <a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-flight-562.html">1 Day Terracotta Warriors Tours from Beijing by Flight <span>  from US$493</span></a> 
                     </li> 
                     <p>&nbsp;</p>
                                       <li>
                      <a href="/travel/china-3-days-beijing-private-tour--tianjin-port-transfer-919.html">3 Days Beijing Private Tour & Singleway Transfer to Tianjin Port <span>  from US$346</span></a> 
                     </li> 
                                      
                                       <li>
                      <a href="/travel/china-4-days-beijing-private-tour--tianjin-port-transfer-920.html">4 Days Beijing Private Tour & Singleway Transfer to Tianjin Port  <span>  from US$404</span></a> 
                     </li> 
                                       
                                       <li>
                      <a href="/travel/china-5-days-beijing-private-tour--tianjin-port-transfer-921.html">5 Days Beijing Private Tour & Singleway Transfer to Tianjin Port  <span>  from US$435</span></a> 
                     </li> 
                                       
                                </ul>
           </div>
        </div>
        <!--  tourlist2 end  -->
        
        <!--  Cal-price start  -->
      
        <!--  Cal-price end  -->
        
        <!--  portguide start  -->
        <div id="portguide">
          <h2>Tianjin Cruise Port Guide</h2>
          <div class="portguidecont">
             <h2 id="fun">Fun Things to Do</h2>
             <ul>
                <li>Beijing: Great Wall of China, Forbidden City, Temple of Heaven, Summer Palace, Hutong Tours, and Tian'anmen Square</li>
                <li>Tianjin: Huangyaguan Great Wall, North Jiefang Road Financial Street, Five-Avenue Area, Jing Garden, Mansion of Family Shi, Cultural Street and Tianjin TV Tower</li> 
                <li>Xian: Terracotta Warriors, City Wall, Big Wild Goose Pagoda</li>
             </ul>
             <h2 id="local">Local Currency</h2>
             <p>Chinese currency is called Renminbi, often abbreviated as RMB. Major credit cards are accepted at most hotels, tourist shops and some department stores. Most hotels offer foreign exchange services. The Bank of China exchanges money and traveler's checks.</p>
             <h2 id="info">Tianjin Cruise Port Intro</h2>
             <p>Tianjin Cruise Home Port was completed and put into operation on June 26, 2010. Tianjin Cruise (Home) Port replaces the former Xingang Port (Passenger Terminal) to accommodate international cruise ships like Sapphire Princess, Ocean Princess, Sapphire Princess, Oceania Nautica, Costa Classica, Celebrity Millennium, Crystal Symphony, Volendam and Azamara Quest and Arcadia. Now it is the home port of both for "Costa Cruises" and "Caribbeans".</p>
             <p>Tianjin Cruise Port is located at the south part of Dongjiang Port (East Port), Port of Tianjin. The Cruise Home Port covers 761 thousands square meters for the first phase. The overall port is 800 meters in length to offer 3 berths. The new Tianjin cruise home port is composed of a passenger hall, a port distribution center, office buildings, hotels, duty free shops, restaurants, entertainment facilities, etc. The Tianjin home port can dock the world's largest cruise liners and has a designed passenger handling capacity of 500,000 persons per year.</p>
             <h2 style="font-size:12px; color:#333;">Very Important Notice:</h2>
             <p>Mainly used for domestic cruise ships, but during high season for cruises, the old Xingang Port also receive international cruise ships. For port transfer, if you are going to dock at Xingang Port (Passenger Terminal) , please kindly advise us. Thanks!</p>
             <p>The Tianjin Cruise Home Port is about 24km away from the old Xingang Port Passenger Terminal, 30km from Tanggu Railway Station, 70km from the city center of Tianjin and 180km from Beijing.</p>
             <h2 id="xingang">Xingang Port Location</h2>
             <p>Tianjin Port is located to the west of Bohai Bay and in the estuary of the Haihe River in Binhai New Disrict, Tianjin. Binhai New District was newly established on Jan 11, 2010. Binhai New District is divided into three big districts - Tanggu District, Hangu District and Dagang District with 9 special districts - Adanced Manufacture Industry Zone, Linkong Industry Zone, Binhai Hi-tech Industry Zone, Lingang Industry Zone, Nangang Industry Zone, Haigang Logistics Zone, Binhai Tourism Zoen, Zongxin Tianjin Eco City and Center Business District.</p>
             <h2>Xingang Port Size and Scope</h2>
             <p>Tianjin Port has a total area of 100 Square kilometers. Tianjin Port is mainly composed of 4 big port areas - Tianjin East Port, Tianjin North Port, Tianjin South Port and Haihe River Port. Tianjin North Port is mainly used for shipping container services; Tianjin South Port for bulk cargo and liguid cargo; Haihe River Port for cargo vessels below 5000 tons and Tianjin Port is a new port. The new international cruise terminal will be built at Tianjin East Port.</p>
             <p>Tianjin Port has 140 berths of various kinds. 85 berths are owned and managed by Tianjin Port Holdings Company Limited. 78 berths are production berths. The port coast line is 18162 meters. Tianjin Port has the capability of handling 213.99 million tons of cargo and 5.25 million cargo containers.</p>
             <h2>[Tianjin Port] Xingang Port History and Present</h2>
             <p>The long history of Tianjin Port could be traced back to the Han Dynasty (206 BC-220 AD). It further developed a port during the Tang Dynasty (618-907AD). It was open to the world officially in 1860. It was one of the earliest foreign trading ports of China. The present Tianjin Port was rebuilt in 1939.</p>
             <p>The port has busines connections with over 300 ports in 160 countries and regions around the world. It has over 10 regular shipping lines. The port enjoys friendly cooperation with the ports of Japan, South Korea, America and the Netherlands.</p>
             <p>Home Port of Tianjin Port International Cruise<br />
             With the long expected Home Port of Tianjin Port International Cruise put into operation on June 26, 2010, Xingang Port Passenger Terminal is no longer used for international cruise ships.</p>
             <p>Xingang Port Passenger Terminal now serves as a domestic cruise terminal. So, don't get to a wrong terminal if you embark or disembark for international cruies since "Xingang" or "Xingang Port" will long be in use in the cruising industry due to its popularity and marketability.</p>
             <h2>Xingang Port (or Tianjin Port Passenger Terminal)</h2>
             <p>The main terminal is a two-storey building with modern facilities. It has 9 waiting halls and rooms. To the west of the main building there is a booking hall to purchase tickets, especially for domestic cruise and off shore cruising for domestic tourists. Cruise ships dock just by the main building. Passengers go through the customs and go out of the buidling. Two big parking lots are in front of the main buidling. On your right side, you will find your luggage lying on the parking lot. So first look for your escort outside the main buidling, then try to find your luggage lying on the parking lot on your right side. </p>
             <h2 id="transport">Tianjin Port Transportation</h2>
             <p><strong>1.Xingang Port to Tanggu Railway Station</strong><br />
             If you want to travel independently to Beijing from Tianjin Port, you may take the bullet or fast train from Tanggu Railway Station. Tanggu Railway Station is about 12km away from Tianjin Port. Taxi drive from Tianjin Port to Tanggu railway Station costs you about 25 yuan. Many local taxis are available out the parking lots. If you want to take a public bus to Tanggu Railway Station, you just walk out of the parking lot and turn left, walking about 200 meters, you will get to the Bus No.102 Terminal, where you can take the bus to Tanggu Railway Station.</p>
             <p><strong>2.Tanggu to Beijing by Train</strong><br />
             Once you are in Tanggu Railway Station, you can easily buy the train tickets to Beijing. There are quite a few bullet or fast trains from Tanggu to Beijing. If you miss the train from Tanggu to Tianjin. You may first go to Tianjin, then go from Tianjin to Beijing since in Tianjin more trains are available from Tianjin to Beijing.</p>
             <p>A.There are 5 daily high speed trains running from Tanggu to Beijing. The trains arrive at Beijing Southern Train Station.<br />
             Tanggu - Beijing C2272 ( 08:29/09:25 )<br />
             Tanggu - Beijing C2274 ( 12:14/13:10 )<br />
             Tanggu - Beijing C2276 ( 13:44/14:40 )<br />
             Tanggu - Beijing C2278 ( 18:14/19:10 )<br />
             Tanggu - Beijing C2280 ( 19:59/20:55 )</p>
             <p>B.There are 4 daily high speed trains running from Beijing to Tang Gu. The trains start from Beijing Southern Train Station.<br />
             Beijng - Tang Gu C2273 ( 10:45/11:39 )<br />
             Beijng - Tang Gu C2275 ( 12:35/13:29 )<br />
             Beijng - Tang Gu C2277 ( 15:55/14:49 )<br />
             Beijng - Tang Gu C2279 ( 18:50/19:44 )</p>
             <p><strong>3.Tanggu to Tianjin by train, bus or metro</strong><br />
             The transportation between Tanggu and Tianjin is quite plentiful. You may go by train, by bus or by metro.</p>
             <p><strong>4.Tianjin to Beijing by train or bus</strong><br />
             A.There over 50 daily bullet trains running between Beijing and Tianjin ( 60km away from Xingang Port ). The trains start from Beijing Southern Train Station. Please visit Beijing - Tianjin Train Timetable for more information.<br />
             Remark:<br />
             If you have large pieces of luggage, we don't suggest you use the trains. Train ride is for people who travel light. People agree that cruise luggage would be pretty difficult on the train. If you decide to take the train, you need to book the train tickets in advance; you need to have a private transfer from your hotel to Beijing Southern Train Station; you again need to have a private transfer from Tangg Gu Train Station to Xingang Port. Pay more to have a direct transfer from Beijing to Xingang Port both to avoid the frustration and enjoy an eye-opening ride and a totally enriching experience.</p>
             <p>B. You can take the long-distance bus between Tianjin and Beijing at the follwing bus stations both in Tianjin and Beijing:<br />
             Lizeqiao Long-Distance Bus Station in Beijing (丽泽桥长途汽车站)<br />
             Beijing Nanzhan Long-Distance Bus Station in Beijing (北京南站长途汽车站)<br />
             Zhaogongkou Long-Distance Bus Station in Beijing (赵公口长途汽车站)<br />
             Sihui Long-Distance Bus Station in Beijing (四惠长途汽车站)</p>
             <p>If you go from Tianjin to Beijing, please notice the following bus stations in Tianjin:<br />
             Long-Distance Bus Station in (天环客运站)<br />
             Tongsha Central Bus Station 通莎公司客运中心站)<br />
             Tanggu Long-Distance Bus Station in Tanggu Tianjin (塘沽客运站)</p>
             <p><strong>5.Tanggu to Tianjin Binhai International Airport</strong><br />
             There are daily special buses running between Tanggu and Tianjin Binhai International Airport</p>
             <h2 id="map">Tianjin Cruise Port Map</h2>
             <img alt="" src="/images/cruise/map.jpg">
          </div>
        </div>
        <!--  portguide end  -->        
        <div class="clear"></div>
        <!--  quick start  -->
        <div id="quick">
            <h2><img alt="" src="/images/cruise/title7.jpg"></h2>           
            <div class="booking">
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
                 <span> *</span>
                 <span style="display:block;float:left;"><?php echo $form->error($model,'full_name');?></span>
                 </td>
                <td class="align">E-mail</td>
                <td>
                  <?php echo $form->textField($model,'email');?>
                  <span>*</span><br/>
                  <span style="display:block;float:left;"><?php echo $form->error($model,'email');?></span>
                </td>
             </tr>
             <tr>
                <td class="align">Nationality</td>
                <td><?php echo $form->textField($model,'nationality');?></td>
                <td class="align">Adults</td>
                <td>
                 <?php
                  for($i=1;$i<31;$i++) $arr[$i]=$i;
                  echo $form->dropDownList($model,'adults', $arr); 
                 ?>    
                </td>
             </tr>
             <tr>
                <td class="align">Children(0-12)</td>
                <td>
                 <?php
                  for($i=0;$i<12;$i++) $arr2[$i]=$i;
                     echo $form->dropDownList($model,'children', $arr2); 
                 ?>                </td>
                 <td class="align">Babies(1-2)</td>
                 <td>
                <?php
                   for($i=0;$i<10;$i++) $arr3[$i]=$i;
                      echo $form->dropDownList($model,'infant', $arr3); 
                ?>           
                 </td>
            </tr>
         <tr>
              <td class="align">Hotel Class</td>
              <td>
                <?php echo $form->dropDownList($model,'final_price',array( //final_price=>Hotel Class
                    '4 star'=>'4 star',
                    '3 star'=>'3 star',
                   
                    '5 star'=>'5 star',
                    'No Need'=>'No Need',
                    )); ?>
              </td>
              <td class="align">Num of Rooms</td>
              <td>
              <?php echo $form->textField($model,'total_price'); //total_price=>Num of Rooms?>
              </td>
         </tr>
         <tr>
              <td class="align">Arrival Date</td>
              <td>
               <?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
              <?php echo $form->error($model,'entry_date');?></td>
              <td class="align">Departure Date</td>
              <td>
                <?php echo $form->textField($model,'end_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'Wdate'));?>
                <?php echo $form->error($model,'end_date');?>
              </td>
         </tr>
         <tr>
              <td class="align">Special Requests <br />Type in the box</td>
              <td colspan="3">
                 <?php echo $form->textArea($model,'other_message');?></td>
         </tr>
         <tr>
              <td>&nbsp;</td>
              <td colspan="3">
                  
                  <input type="submit" id="order_button" class="form_button" style="background:url(/images/cruise/submit.jpg) left center no-repeat; width:78px;height:27px; border:none; margin-right:12px; float:left; margin-top:3px; cursor:pointer;)" name="yt0" value="">                
                  <input type="reset" value="" name="yt1" style="width:77px;height:27px; border:none; background:url(/images/cruise/reset.jpg) left center no-repeat; float:left; margin-top:3px; cursor:pointer;">
              </td>
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
        <!--  quick end  -->
    </div>
    <!--  right end  -->
</div>
<!--  index end  -->
<script>
var _cityTours = {
    submitMessage:function(obj){
       var message = $(obj).parents("table").find("textarea[name='message']").val();
        var username = $(obj).parents("table").find("input[name='username']").val();
        var email = $(obj).parents("table").find("input[name='email']").val();
        if($.trim(message) == ''){ 
          $(obj).parents("table").find(".qmessage_error").show();
          return false;
        }else{
          $(obj).parents("table").find(".qmessage_error").hide();
        }
        if($.trim(username) == ''){
          $(obj).parents("table").find(".qusername_error").show();
          return false;
        }else{
          $(obj).parents("table").find(".qusername_error").hide();
        }

        if(!/(\S)+[@]{1}(\S)+[.]{1}(\w)+/.test(email)) {
          $(obj).parents("table").find(".qemail_error").show();return false;
        }else{
          $(obj).parents("table").find(".qemail_error").hide();
        }
        var YII_CSRF_TOKEN = "<?php echo Yii::app()->request->csrfToken;?>";
        $.post("<?php echo Yii::app()->createUrl("toursPackage/ajaxAddMessage");?>", {message:message, username:username, email:email,  YII_CSRF_TOKEN:YII_CSRF_TOKEN}, function(ret){
          if(ret == 0){
          alert("Submit Successful.");
          $(obj).parents("table").find("textarea[name='message']").val("");
          $(obj).parents("table").find("input").val("");
          }
        })
      },
      show_more:function(obj){
        $("#show_more").hide();
        $("#hide_more").show();
        $("#more_date").show();
      },
      hide_more:function(obj){
        $("#show_more").show();
        $("#hide_more").hide();
        $("#more_date").hide();
      }
}

    $("#Order_entry_date,#Order_end_date").datepicker({
         changeMonth: true,
         numberOfMonths: 2,
    });
 </script>
 
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 991800201;
var google_conversion_label = "CRD5COeS0gcQidf22AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/991800201/?value=0&amp;label=CRD5COeS0gcQidf22AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
