<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/top10.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.zxxbox.3.0-min.js');

$this->setPageTitle("Yangtze River Tour, Yangtze River Tours, China Cruise Tours");
Yii::app()->clientScript->registerMetaTag('keywords','yangtze river tour, yangtze river tours, china travel tours, china tour packages');
Yii::app()->clientScript->registerMetaTag('description','China Tour Agent specialized in 2011 China Yangtze River Tours with honest price and best service. Book earlier, save more.');
?>
<style type="text/css">
<!--
#wrapBar{display:none !important;}
.wrap_title{ display:none;}
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 8px; width:932px;}
#banner{background:url(/images/top10/banner3.jpg) no-repeat;}
.mlist2{background:url(/images/top10/list22bg.png) no-repeat; padding:57px 0px 0px 12px;}
.topmiddele{ background:none;}
.mlist1{background:url(/images/top10/mbg.jpg) left top repeat-y;}
.mlist2 ul{ background:url(/images/top10/mbg.jpg) left top repeat-y;}
-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> Yangtzer River Tours</div>
   <!--  banner start  -->
   <div id="banner">
       <div class="topselect">
        <?php echo $this->renderPartial("//common/otherHolidayTypes");?>
       </div>
   </div>
   <!--  banner end  -->
</div>
<!--  index end  -->

<!--  topmiddele start  -->
<div id="top1" class="topmiddele">
    <div onclick="_familyTour.changeHideTop(this);" class="topbutton1" style="display:none;"><img alt="" src="/images/top10/top.jpg"></div>
    <!--  topmleft start  -->
    <div class="topmleft">
        <!--  mlist1 start  -->
        <div class="mlist1">
             <ul>
                <li class="dq"><a href="###" onclick="_top10Tour.tab(this,1);">Overview</a><span></span></li>
                <li id="why" class="why"><a href="###" onclick="_top10Tour.tab(this,2);">Why Choose Us</a><span></span></li>
                <li id="how" class="how"><a href="###" onclick="_top10Tour.tab(this,3);">How To Book</a><span></span></li>
                <li id="attract" class="attract"><a href="###" onclick="_top10Tour.tab(this,4);">Attractions</a><span></span></li>
                <li id="upstream" class="upstream"><a href="###" onclick="_top10Tour.tab(this,5);">Upstream</a><span></span></li>
                <li id="downstream" class="downstream"><a href="###" onclick="_top10Tour.tab(this,6);">Downstream</a><span></span></li>
             </ul>
       </div>
       <!--  mlist1 end  -->
       
       <!--  mlist2 start  -->
        <div class="mlist2">
             <ul>
                <li class="cabins"><a href="###" onclick="_top10Tour.tab(this,5);">Cabins  &amp; Facilities </a><span></span></li>
                <li class="meals"><a href="###" onclick="_top10Tour.tab(this,6);">Meals &amp; Activities</a><span></span></li>
                <li class="companies"><a href="###" onclick="_top10Tour.tab(this,7);">Cruise Ship Companies</a><span></span></li>
                <li class="boarding"><a href="###" onclick="_top10Tour.tab(this,8);">Boarding and Luggage</a><span></span></li>
             </ul>
       </div>
       <!--  mlist2 end  --> 
       
       <!--  mlist3 start  -->  
       <div class="mlist3">
         <div class="mlist3content">
             <h2><img src="/images/top10/2013.png" alt="" /></h2>
             <?php 
              $month_arr = range(1,12);
             ?>
             <ul>
                <?php foreach($month_arr as $v):?>
                    <?php if($v<date("m")):?>
                      <li style="border-left:none; color:#848485;"><?php echo date('M',strtotime(date("Y-".$v."-d")));?>.</li>
                    <?php elseif(date("m") == $v):?>
                      <li style=" background:#cfcdcd"><a href="<?php echo Yii::app()->createUrl('cruise/calendar',array('month'=>$v));?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?>.</a></li>
                    <?php else:?>
                      <li <?php if(in_array($v, array(5,9))):?> style="border-left:none;"<?php endif;?>><a href="<?php echo Yii::app()->createUrl('cruise/calendar',array('month'=>$v));?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?>.</a></li>
                    <?php endif;?>
                <?php endforeach;?>
             </ul>
         </div>
       </div>    
       <!--  mlist3 end  -->
       
       <!--  mlist4 start  -->  
       <div class="mlist4">
           <?php echo $this->renderPartial("//cruise/_rightSearch");?>
       </div>
       <!--  mlist4 end  -->
       
       <!--  mlist5 start  -->
       <div class="mlist5">
          <div class="mlist5content">
             <ul>
                 <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=2" target="_blank">What is the on board smoking policy?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=3" target="_blank">Do the cabins have safes?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=10" target="_blank">Are there laundry services aboard?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=12" target="_blank">Are special diets catered for?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=14" target="_blank">Do the staffs onboard speak English?</a></li>
              </ul>
          </div> 
       </div>  
       <!--  mlist5 end  -->
    </div>
    <!--  topmleft end  -->
    
    <!--  why choose us start -->
    <div id="tab2" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic2.jpg" alt="" /></div>
       <h2>What Makes Us Different</h2>
       <p>1. About the Website:<br />
          In order to give better online experience to our guests and present the wonderful China tour packages and firsthand China tour information to you, we have    done a lot of work including updating websites, online consultation, online payment and online communication.</p>
          <p>2. About the Services: <br />
          To improve efficiency, standardize the operation process, monitor the systems work and guarantee our clients with the best service experience, we have    developed new monitoring system, which works well.</p>
          <p>3. Leadtochina:<br /> 
          Leadtochina.com is property of Hefei Full View Travel.co.,Ltd established in 2008. In China, Hefei Full View has established stable and long-time    cooperation with over 30+ local travel agencies in good reputation. Effective cooperative channel, real-time quotation, seamless care, taillor-made tour,    all of these form the guarantee of your amazing China tour.</p>
          <p>4. True Reviews from our clients:<br />
          Within 5 years, we have accumulated many feedbacks from our dear clients, and the number seems increasing every day. we do think those are the most precious wealth we had in 5 years, and it will continue to be the motivation of our work in the future. </p>
    </div>
    <!--  why choose us end -->
    
    <!--  how to book start -->
    <div id="tab3" class="topmright" style="display:none;">
       <div class="rightpic" style="width:140px; padding-top:60px;"><img src="/images/top10/rpic3.jpg" alt="" /></div>
       <h2>How to Book Tour</h2>
       <p>Step.1 Find a tour<br />
       Start procedure by using the <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>">China tour Search</a> or browsing <a href="/chinatour/">China Tour</a> or <a href="/citytour/">City tour</a> on  your interests. When you find a right or similar tour, you can click the "Inquiry Now" or  "submit" buttom to tell Leadtochina your interests. If there is no tour interests you,  you can use <a href="/travel/china-diy-tours">DIY</a> theme tour to tailor make a unique tour for yourself. </p>
          <p>Step.2 Adjust your tour plan<br />
          When we got your Enquiry, we would reply to you with practical, detailed tour itinerary,  real-time quotation and other adjustments on your needs.</p>
          <p>Step.3 Free change to suit<br /> 
          If you still have any problems with the tour, you are suggested to communicate with  leadtoChina trip advisor via Email, for making sure both of the two sides have no  misunderstandings until you got the last confirmation letter with settled down quotation  and itinerary.</p>
          <p>Step.4 Confirm with payment<br />
          Pay a deposit(30 percent of the total price) to us. The balance is to be paid in full no  later than 20 days prior to your arrival date. As we received your deposit, we'll start  the process to secure the booking. After the securing the booking, we'll invoice your  account. You'll receive our final confirmation and tour voucher.</p>
          <p>Payment Methods: we accept Wire transfer(bank transfer), credit card(Visa Card,  MasterCard, and American Express) and Paypal. Real our <a href="/payment-guide/">Payment Guide</a> for details.</p>
    </div>
    <!--  how to book end -->
        
    <!--  topmright start  -->
    <div id="tab1" class="topmright">
       <div class="rightpic"><img src="/images/top10/cruise1.jpg" alt="" /></div>
       <p>Yangtze River is the largest in China and the third longest in the world. It originates in the Tunggula Mountain on the Qinghai-Tibet plateau, and flows into the east China sea from west to east. Its overall length is 6397 km, and the basin area is about 1808500 square kilometers which accounts for 1/5 of Chinese land area. The Yangtze River and the Yellow River are named as the Mother Rivers of the Chinese nation.</p> 
       <p>Major Cities along the River: Panzhihua, Yibin, Luzhou, Chongqing, Yichang, Jingzhou, Yueyang, Wuhan, Huanggang, Jiujiang, Anqing, Wuhu, Hefei, Maanshan, Yangzhou, Zhenjiang, Nanjing, Nantong, Shanghai, Fengdu.</p>
       <p>The Three Gorges on the The Yangtze river is a magnificent landscapes which is one of the top ten scenic spots in China. It west of Fengjie in chongqing, and ends at Nanjin Pass of Yichang. One of the dams on the river, the Three Gorges Dam is the world's largest water conservancy hub project.</p>
    </div>
    <!--  topmright end  -->
    
    <!--  Attractions start -->
    <div id="tab4" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/cruise2.jpg" alt="" /></div>
       <p>Yangtze River, the longest river in China and the third longest river in the world. There are many well-known scenic sights along both sides of the river, such as Qutang Gorge, Xiling Gorge, Wu Gorge, Gezhou Dam, Three Gorges Dam, Baidi City, Fengdu, Quyuan Temple, Zhangfei Temple, Shibaozhai, Shennong Stream and Lesser Three Gorges. Among the above attractions, Three Gorges is the most wonderful one. It is one of the top ten scenic sights in China. We called it "Three Gorges" as it is composed of Qutang, Wu and Xiling Gorges from west to east. Qutang Gorge is the first of the three gorges of the Yangtze River. Wu Gorge is the most beautiful section of the Yangtze River. Xiling Gorge is the longest part of the Three Gorges system with dangerous rapids like Xietan, Qintan and Kongling. The Three Gorges Dam which is the largest water conservancy project is now being built at Sandouping in the middle of Xiling Gorge. In addition, the Little Three Gorges which is a famous scenic spot in the Wuxia Gorge is the combined name of Changtan Gorge, Qinwang Gorge and Sancheng Gorge. You also can not miss them.</p>
    </div>
    <!--  Attractions end -->
    
    <!--  Upstream start -->
    <div id="tab5" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/cruise3.jpg" alt="" /></div>
       <p>There are upstream and downstream cruises on the Yangtze River. Just as its name implies, upstream means sailing from lower part of the river up to the higher part of the river. The upstream route that is from Yichang to Chongqing is very popular as this route hits all of the highlights. It will take 5 days &amp; 4 nights which is longer than the downstream route, so passengers will have more time to enjoy the charming scenery to explore the China culture. Here we will introduce this route for you: For the first day, The Cruise ship will depart from Yichang. During the second day, have a morning ecursion to the enormous Three Gorges Dam. In the afternoon, you will have a visit to the beautiful Xiling Gorge. And for the third day, we will disembark the ship and board small vessels to navigate either Daning River or Shennong Stream. In the afternoon, re-board and pass through the soaring peaks of Qutang Gorge. The forth day, visit the "City of Ghosts"-Fengdu, or Wanxian, or "the Pearl of Yangtze" Shibaozhai which depending on the river condition. Last day, we will disembark the ship in Chongqing. </p>
    </div>
    <!--  Upstream end -->
    
    <!--  Downstream start -->
    <div  id="tab6" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/cruise4.jpg" alt="" /></div>
       <p>Cruising downstream is faster than travelling upstream. therefore downstream cruises are shorter. If your traveling time is limited, you can choose the downstream route. Cruising from Chongqing to Yichang (downstream) only take 4 days &amp; 3 nights. And there is no rocking motion during nights for the downstream route, so for the light sleepers, they can have a good night's sleep. Furthermore, passengers will not miss any beautiful scenery as all the scenery is passed during the day. Here we will introduce this route for you. We will departs from Chongqing and disembark the ship at Yichang at first day. During the the second day, you can enjoy the attractions such as Fengdu which is known as the "Ghost City," or Wanxian, or Shibaozhai. Afterwards, the cruise ship will sail towards the Three Gorges. For the third day, the cruise ship will enter Qutang Gorge which is the first of the three gorges. When we arrived at Wushan, we will disembark the ship to explore the Daning River or Shennong Stream. Then reboard the ship and sail through the Wu Gorge. You can visit Xiling Gorge at the last day on the ship. Finally, Arrive Yichang �C Disembarkation.</p>
    </div>
    <!--  Downstream end -->
    
    <!--  Cabins & Facilities start -->
    <div id="tab7" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/cruise5.jpg" alt="" /></div>
       <p>Cabins on the cruise ships are usually divided into standard cabins and deluxe suites. The average area is 10 to 12 square meters for the standard cabins. Deluxe suites are much larger with more cost than that of the standard cabins. Usually the basic furnishings include an individual washing room, sofas, chairs, table,a radio,  beds, telephone, luggage racks and so on. In addition to the above, deluxe suites are also equipped with a massage bathtub and other luxury accessories. In addition, there are some facilities such as Power supply, Commutation facility, Business center and Water-purifying System for your use. Internet services are available on Yangtze cruise ships, it will help you to connect to your family during your Yangtze cruise vacation. Nowdays, only the cabins of President Prime has internet access and the cost is RMB80/hour. Other ships have internet cafes for a fee which is different on different ships.The entire Yangtze Cruise ship have all the base facility that you can imagine, it is just like a mini-size resort.</p>
    </div>
    <!--  Cabins & Facilities end -->
    
    <!--  Meals & Activities start -->
    <div id="tab8" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/cruise6.jpg" alt="" /></div>
       <p>Generally, the cruise ship fee has included all the table money on the ship. Usually there are Chinese style and western style breakfast service with the free morning coffee; Lunch is the mixed meal of western-style and Chinese style. And dinner will be the most abundant. The delicacies all have the flavor and characteristic of three gorges region. Moreover, they are all carefully prepared by head chef. Tourist can enjoy the combination of high-quality goods of Sichuan cuisine, Hubei Cuisine and Hunan cuisine.</p>   
       <p>In addition to sightseeing, the cruise ship will arrange a variety of colorful activities for tourist. Usually, Yangtze river cruise ships will arrange the singing and dancing party with the oriental charm; Sometimes, they will invite the famous star and Chinese martial arts and folk performer to perform for tourist. Many cruise ship company has its own performance organization. Oriental Royal Cruise Ships Co., LTD has a band from the Philippines; the overseas tourist corporation of Yangtze river cruise ship has their own professional art troupe, President No.1 and Ciena has its own orchestra. Besides, acrobatics, conjuring and some skits are also available.</p>
    </div>
    <!--  Meals & Activities end -->
    
    <!--  Cruise Ship Companies start -->
    <div id="tab9" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/cruise7.jpg" alt="" /></div>
       <p>Wuhan Yangtze Cruise Co., Ltd. (WHYCC)is the 1st professional cruise company specialized in the Yangtze River package tours. It owns the famous brand fleet of 6 luxurious Presidential Cruises. It includes the M/V President 1, M/V President 2, M/V President 3, M/V President 4, M/V President 5, and M/V President 6. Chongqing New Century Cruise Co., Ltd. is built in 2002, it owns new century series super five-star luxury cruise such as Century Star, Century Sun, Century Paragon, Century Legend and so on. Now it is the unique cruise company whose cruise ships are all five-star luxury standard. Chongqing Yangtze Gold Cruise Co., Ltd built Gold series luxury cruise ship which is the milestone in the history of Chonqing tourism. It opened up the new era and set up the new sightcing of the global inland river cruise ship.</p>
    </div>
    <!--  Cruise Ship Companies end -->
    
    <!--  Boarding and Luggage start -->
    <div id="tab10" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/cruise8.jpg" alt="" /></div>
       <p>Generally speaking, tourist do not need a ticket to board ship. The guide will help you get through the check-in procedure. And you needs to board the ship after 5:00pm as there is no service before that time. Your guide will help you get through the check-in procedure. For luggage, please kindly note that there is no quantity limit. The storage places are provided in your cabin for you to store them. And When you have reached the wharf and you can not carry the luggage to cabin by yourself, you can ask a porter for carrying your luggage to your cabin. The fee is $1.50 USD per piece. Also, someone on the cruise ship can help you to take your luggage to your room, and carry it off ship at the end of the cruise. And you also need to pay the fee of $1.50 USD per piece.</p>
    </div>
    <!--  Boarding and Luggage end -->
    
    <!--  rightnew start  -->
      <div id="rightnew">
         <div class="menutitle">
           <span class="dq" onclick="_top10Tour.center_tab(this, 1);">China Tours with Yangtze Cruise</span>
           <span onclick="_top10Tour.center_tab(this, 2);">Yangtze Cruise Ships</span>
         </div>
         <!--  rightlist start  -->
         <div class="rightlist" id="rightlist1">
             <!--  tourslist1 start  -->
             <div class="tourslist1">
                 <ul>
                    <li class="pic"><img alt="" src="/images/top10/ship01.jpg"><span><a href="javascript:showTreasures('1');"><img alt="" src="/images/yangtze/viewnew.png"></a></span></li>
                    <li class="dest"><h2>Fantastic Yangtze River Cruise</h2>
                        <strong>Destination:</strong> Beijing, Chongqing, Yangtze River, Yichang, Shanghai
                    </li>
                    <li class="days"><span><a href="/tour/yct-10.html">Budget: 8 days</a> $1998</span>
                        <span><a href="/tour/yct-11.html">Standard: 10 days</a> $2275</span>
                        <span><a href="/tour/yct-12.html">Luxury: 10 days</a> $2432</span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img alt="" src="/images/yangtze/spring.jpg">
                                        <img alt="" src="/images/yangtze/summer.jpg"> 
                                        <img alt="" src="/images/yangtze/autumn.jpg">           
                    </li>
                 </ul> 
              </div>
              <!--  tourslist1 end  -->
              
              <!--  tourslist1 start  -->
              <div style=" margin-right:0px;" class="tourslist1">
                 <ul>
                    <li class="pic"><img alt="" src="/images/top10/ship02.jpg"><span><a href="javascript:showTreasures('2');"><img alt="" src="/images/yangtze/viewnew.png"></a></span></li>
                    <li class="dest"><h2>Memorable Yangtze River Experience</h2>
                        <strong>Destination:</strong> Beijing, Xian, Chongqing, Yangtze River, Yichang and Shanghai
                    </li>
                    <li class="days"><span><a href="/tour/bct-10.html">Budget: 10 days</a> $2018</span>
                        <span><a href="/tour/bct-11.html">Standard: 11 days</a> $2661</span>
                        <span><a href="/tour/yct-09.html">Luxury: 11 days</a> $2707</span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img alt="" src="/images/yangtze/spring.jpg">
                                        <img alt="" src="/images/yangtze/summer.jpg"> 
                                        <img alt="" src="/images/yangtze/autumn.jpg">          
                    </li>
                 </ul>  
              </div>
              <!--  tourslist1 end  -->
              <div class="clear"></div>
              
              <!--  tourslist1 start  -->
              <div class="tourslist1">
                 <ul>
                    <li class="pic"><img alt="" src="/images/top10/ship03.jpg"><span><a href="javascript:showTreasures('3');"><img alt="" src="/images/yangtze/viewnew.png"></a></span></li>
                    <li class="dest"><h2>Memorable Yangtze Tour from Shanghai</h2>
                        <strong>Destination:</strong> Shanghai,Yangtze River, Guilin, Yangshuo, Xian, Beijing
                    </li>
                    <li class="days"><span><a href="/index.php?option=com_showpc&amp;view=default&amp;pcid=701">Budget: 7 days</a> $1025</span>
                        <span><a href="/index.php?option=com_showpc&amp;view=default&amp;pcid=702">Standard: 12 days</a> $1520</span>
                        <span><a href="/index.php?option=com_showpc&amp;view=default&amp;pcid=703">Luxury: 14 days</a> $2290</span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img alt="" src="/images/yangtze/spring.jpg">
                                        <img alt="" src="/images/yangtze/summer.jpg"> 
                                        <img alt="" src="/images/yangtze/autumn.jpg">       
                    </li>
                 </ul> 
              </div>
              <!--  tourslist1 end  -->
              
              <!--  tourslist1 start  -->
              <div style=" margin-right:0px;" class="tourslist1">
                 <ul>
                    <li class="pic"><img alt="" src="/images/top10/ship04.jpg"><span><a href="javascript:showTreasures('4');"><img alt="" src="/images/yangtze/viewnew.png"></a></span></li>
                    <li class="dest"><h2>Yangtze Cruise from Hong Kong</h2>
                        <strong>Destination:</strong> Hong Kong, Chongqing, Yangtze River, Yichang, Shanghai, Xian, Beijing
                    </li>
                    <li class="days"><span><a href="/tour/yct-01.html">Budget: 10 days</a> $2540</span>
                        <span><a href="/tour/yct-02.html">Standard: 11 days</a> $2759</span>
                        <span><a href="/tour/yct-03.html">Luxury: 12 days</a> $2880</span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img alt="" src="/images/yangtze/spring.jpg">
                                        <img alt="" src="/images/yangtze/summer.jpg"> 
                                        <img alt="" src="/images/yangtze/autumn.jpg">          
                    </li>
                 </ul>  
              </div>
              <!--  tourslist1 end  -->
              <div class="clear"></div>
              
              <!--  tourslist1 start  -->
              <div class="tourslist1">
                 <ul>
                    <li class="pic"><img alt="" src="/images/top10/ship05.jpg"></li>
                    <li class="dest"><h2>Yangtze Cruise &amp; Panda Tour</h2>
                        <strong>Destination:</strong> Beijing, Chengdu, Chongqing, Yangtze River, Yichang, Shanghai
                    </li>
                    <li class="days"><span><a href="/travel/china-12-days-standard-yangtze-river-cruise--panda-tours-32.html">Standard: 12 days</a> $2602</span>
                        <span><a href="/travel/china-12-days-luxury-yangtze-river-cruise-panda-tour-38.html">Luxury: 12 days</a> $3086</span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img alt="" src="/images/yangtze/spring.jpg">
                                        <img alt="" src="/images/yangtze/summer.jpg"> 
                                        <img alt="" src="/images/yangtze/autumn.jpg">       
                    </li>
                 </ul> 
              </div>
              <!--  tourslist1 end  -->
              
              <!--  tourslist1 start  -->
              <div style=" margin-right:0px;" class="tourslist1">
                 <ul>
                    <li class="pic"><img alt="" src="/images/top10/ship06.jpg"></li>
                    <li class="dest"><h2>China Cruises &amp; Tibet Discovery</h2>
                        <strong>Destination:</strong> Beijing, Xian, Yangtze River,Chongqing, Lhasa, Shanghai 
                    </li>
                    <li class="days"><span><a href="/travel/china-18-days-mysterious-tibet-yangtze-rivergolden-cities-79.html">Standard: 18 days</a> $4235</span>
                        <span><a href="/travel/china-17-days-historical-modern-natural-cultural-cities-budget-tour-78.html">Budget: 17 days</a> $4114</span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img alt="" src="/images/yangtze/summer.jpg"> 
                                        <img alt="" src="/images/yangtze/autumn.jpg">          
                    </li>
                 </ul>  
              </div>
              <!--  tourslist1 end  -->
              <div class="clear"></div>
              
              <!--  tourslist1 start  -->
              <div class="tourslist1">
                 <ul>
                    <li class="pic"><img alt="" src="/images/top10/ship07.jpg"></li>
                    <li class="dest"><h2>Tour of Picturesque Yangtze Rive</h2>
                        <strong>Destination:</strong> Hong Kong, Guilin, Yangshuo, Guilin, Chongqing, Yangtze River, Yichang, Shanghai, Beijing
                    </li>
                    <li class="days"><span><a href="/travel/china-12-days-budget-tour-of-picturesque-yangtze-river-62.html">Budget: 12 days</a> $3606</span>
                        <span><a href="/travel/china-13-days-standard-tour-of-picturesque-yangtze-river-66.html">Standard: 13 days</a> $3150</span>
                        <span><a href="/travel/china-15-days-luxury-tour-of-picturesque-yangtze-river-69.html">Luxury: 15 days</a> $4417</span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img alt="" src="/images/yangtze/spring.jpg">
                                        <img alt="" src="/images/yangtze/summer.jpg"> 
                                        <img alt="" src="/images/yangtze/autumn.jpg">
                                        <img alt="" src="/images/yangtze/winter.jpg">       
                    </li>
                 </ul> 
              </div>
              <!--  tourslist1 end  -->
         </div>
         <!--  rightlist end  -->
         
         <!--  rightlist1 start  -->
         <div class="rightlist1" id="rightlist2" style="display:none;">
             <!--  hotdeals start  -->
             <div class="hotdeals">
                 <h2><img alt="" src="/images/top10/deals.png"></h2>
                 <?php foreach($recommend_cruise as $k=>$v):?>
                 <ul>
                    <li><a href="<?php echo $v->getUrl();?>"><img src="/images/top10/ships<?php echo $k+1;?>.png"></a></li>
                    <li class="number<?php echo $k+1;?>"><strong><a href="<?php echo $v->getUrl();?>"><?php echo $v->cruise_name;?></a></strong> <span><?php echo SiteUtils::getCurrencyPrice($v->uplowprice);?></span>p/p<br />
                                      <a href="javascript:;" style="display:block;"><?php echo Cruise::$upCityDays[$v->upcity].Cruise::$upCityArr[$v->upcity];?></a>
                                      <a href="javascript:;"style="display:block;"><?php echo Cruise::$downCityDays[$v->downcity].Cruise::$downCityArr[$v->downcity];?></a>
                    </li>
                    <li><a href="<?php echo $v->getUrl();?>"><img src="/images/top10/inquiry.jpg"></a></li>
                 </ul>
                 <?php endforeach;?>
             </div>
             <!--  hotdeals end  -->
             
             <!--  shipslist start  -->
             <?php foreach (Cruise::$category as $k=>$v):?>
            <div class="ships1list">
                <table border="0" cellspacing="0" cellpadding="0" style="width:694px;">
                  <tbody>
                       <tr>
                         <td width="84" rowspan="<?php echo count($cruises[$k])+1;?>" valign="middle" style="background:none;">
                        <a href="<?php echo Yii::app()->createUrl('cruise/categoryList', array('category'=>$k));?>"><img src="/images/yangtze/logo<?php echo $k;?>.jpg" alt="" /></a></td>
                         <td width="137" class="toptd">Cruise Ships</td>
                         <td width="328" class="toptd">Departure &amp; Itinerary</td>
                         <td width="76" class="toptd">Price</td>
                         <td width="69" class="toptd">Enquiry</td>
                    </tr>
                        <?php foreach ((array)$cruises[$k] as $i=>$cruise):?>
                        <tr <?php if($i%2 == 0):?>class="backgno"<?php endif;?>>
                         <td><a href="<?php echo $cruise->getUrl();?>" class="name" style="white-space:nowrap;"><?php echo $cruise['cruise_name'];?></a>
                             <span class="star5"></span>
                         </td>
                         <td><strong><?php echo Cruise::$weekDays[$cruise['up_week']];?>:</strong> <?php echo Cruise::$upCityDays[$cruise['upcity']].Cruise::$upCityArr[$cruise['upcity']];?><br />
                             <strong><?php echo Cruise::$weekDays[$cruise['down_week']];?>:</strong> <?php echo Cruise::$downCityDays[$cruise['downcity']].Cruise::$downCityArr[$cruise['downcity']];?></td>
                         <td><h2><?php echo SiteUtils::getCurrencyPrice($cruise['uphighprice']);?></h2></td>
                         <td><a href="<?php echo $cruise->getUrl();?>"><img src="/images/yangtze/inquiry1.png" alt="" /></a></td>
                        </tr>
                        <?php endforeach;?>
                   </tbody>
                </table>
            </div>
            <?php endforeach;?>
             <!--  shipslist end  -->
         </div>
         <!--  rightlist1 end  -->
        
      </div>
   <!--  rightnew end  -->
</div>
<!--  topmiddele end  -->


<div class="treasures1" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2>Fantastic Yangtze River Cruise</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;">Beijing, Chongqing, Yangtze River, Yichang, Shanghai</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>A better and comfort way to enjoy China's stunning landscapes, dynamic culture and exceptional architecture? It must be the Yangtze River Cruise, which is often part of China Tour with Great Wall and Frobidden City in Beijing, Yuyuan Garden and Bund in Shanghai.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/tour/yct-10.html">Budget: 8 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(1998);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/tour/yct-11.html">Standard:10 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2275);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/tour/yct-12.html">Luxury: 10 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2432);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free1.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map1.jpg" alt="" /></div>
      </div>
<div class="treasures2" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2>Memorable Yangtze River Experience</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;">Beijing, Xian, Chongqing, Yangtze River, Yichang and Shanghai</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>Xian, equivalent to ancient Roman Empire's capital-Rome, is one of eight ancient capitals in China's history. It is the ancient capitals of 13 dynasties with 3100 years history, which means Xian has numerous cultural relics, such as Terracotta Warriors, City Wall, Big Wild Goose Pagoda Etc,.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/tour/bct-10.html">Budget: 10 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2018);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/tour/bct-11.html">Standard:11 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2661);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/tour/yct-09.html">Luxury: 11 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2707);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map2.jpg" alt="" /></div>
      </div>
<div class="treasures3" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2 style="font-size:16px;">Memorable Yangtze Tour from Shanghai</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;"> Shanghai,Yangtze River, Guilin, Yangshuo, Xian, Beijing</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>Owing to its gifted geographic location, Shanghai has become a well--known sea and river port, boasting easy accesses to a vast hinterland. With a population reaching to 200million, Shanghai is the largest city of China, and also an international metropolis serving as the most influential economic, financial, international trade, cultural, science and technology center in East China.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/index.php?option=com_showpc&view=default&pcid=701">Budget: 7 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(1025);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/index.php?option=com_showpc&view=default&pcid=702">Standard:12 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(1520);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/index.php?option=com_showpc&view=default&pcid=703">Luxury: 14 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2290);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free1.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map31.jpg" alt="" /></div>
      </div>
<div class="treasures4" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2>Yangtze Cruise from Hong Kong</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;">Hong Kong, Chongqing, Yangtze River, Yichang, Shanghai, Xian, Beijing</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>Hong Kong has been always one of the world's most popular tours for its incredible landscape, shopping and food paradise, and multiple cultures. It has so many wonderful places to visit that one can hardly take all of them at one time or even through a lifetime, a little small in size though.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/tour/yct-01.html">Budget: 10 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2540);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/tour/yct-02.html">Standard:11 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2759);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/tour/yct-03.html">Luxury: 12 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2880);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map4.jpg" alt="" /></div>
      </div>
      
<script>
function showTreasures(num){
	$('.treasures'+num).zxxbox(
			{ bar: true,
			  bgclose: true,
			  bg: true
		    }
	);
}

  var _top10Tour = {
    tab:function(obj,num){
      $(obj).parents("#top1").find(".topmright").hide();
      $("#tab"+num).show();

      
      var class_dic = {"attract":"attractdq","upstream":"upstreamdq", "downstream":"downstreamdq","cabins":"cabinsdq","meals":"mealsdq","companies":"companiesdq","boarding":"boardingdq","why":"whydq","how":"howdq"};
      $.each(class_dic, function(k, v){
    	  $(obj).parents("div.topmleft").find("li."+v).removeClass(v).addClass(k);
      })
    
     if(num == 1){
    	$(obj).parent("li").addClass("dq");
     }else{
    	 $(obj).parents("div.topmleft").find("li.dq").removeClass("dq");
       var curr_class = $(obj).parent("li").attr("class");
       $(obj).parent("li").removeClass(curr_class).addClass(curr_class+"dq");
     }
      
      return false;
    },
    changeHideTop:function(obj){
      if($("#top1").css("display") != 'none'){
        $("#top1").hide();
        $("#top2").show(300);
        $(obj).find("img").attr("src","/images/top10/top.jpg");
      }else{
        $("#top2").hide();
        $("#top1").show(300);
        $(obj).find("img").attr("src","/images/top10/bottom.jpg");
      }
    },
    center_tab:function(obj, num){
        $("#rightlist1, #rightlist2").hide();
        $("#rightlist"+num).show();
        $(obj).parent(".menutitle").find("span").removeClass("dq");
        $(obj).addClass("dq");
    },
    tourtab:function(obj,divclass){
      $(obj).parents(".tabmenu").find("li").removeClass("dq");
      $(obj).addClass("dq");
      $(obj).parents(".oneleft").find(".overview,.attractions,.price,.hotel").hide();
      $(obj).parents(".oneleft").find("."+divclass).show();
    },

    search_tab:function(obj, num){
    	  if(num == 1){
    		  $("#toursSearch").hide();
    		  $("#cruiseSearch").show();
          }else{
        	  $("#toursSearch").show();
    		  $("#cruiseSearch").hide();
          }
    }
  }
</script>
