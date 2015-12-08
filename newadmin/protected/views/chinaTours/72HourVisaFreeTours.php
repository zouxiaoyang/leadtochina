<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/top10.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.lazyload.js');

$this->setPageTitle("Best China Tours, China Best Tours, Top China Tours");
Yii::app()->clientScript->registerMetaTag('keywords','best china tour, china best tours, tours to china, china trip, tours china, china travel agent');
Yii::app()->clientScript->registerMetaTag('description','China Travel Company offering China best tours to Beijing, Xian, Guilin, Yangtze Cruise, Tibet and other hot destinations with great value.');
?>
<style type="text/css">
<!--
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 8px; width:932px;}
.topmiddele{ background:none;}
#left{ float:right; padding-right:14px;}
.trust{ margin-top:3px;}
.lefttitle a{ font-size:14px;}
#right{ margin-top:35px;}
#banner{background:url(/images/visa/banner.jpg) no-repeat;}
-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> 72-Hour Visa-free Tours</div>
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
    <div onclick="_top10Tour.changeHideTop(this);" class="topbutton1"><img alt="" src="/images/top10/bottom.jpg"></div>
    <!--  topmleft start  -->
    <div class="topmleft">
        <!--  mlist1 start  -->
        <div class="mlist1new">
             <ul>
                <li class="dq"><a href="###" onclick="_top10Tour.tab(this,1);">Tour Overview</a><span></span></li>
                <li class="handle"><a href="###" onclick="_top10Tour.tab(this,2);">Handle Procedures</a><span></span></li>
                <li class="restrictions"><a href="###" onclick="_top10Tour.tab(this,3);">Restrictions</a><span></span></li>
                <li class="visa"><a href="###" onclick="_top10Tour.tab(this,4);">Visa Free Tips</a><span></span></li>
                <li id="why" class="why"><a href="###" onclick="_top10Tour.tab(this,5);">Why Choose Us</a><span></span></li>
                <li id="how" class="how"><a href="###" onclick="_top10Tour.tab(this,6);">How To Book</a><span></span></li>
             </ul>
       </div>
       <!--  mlist1 end  -->
       
       <!--  mlist2 start  -->
        <div class="mlist2" style="background:url(/images/visa/list2bg.png) no-repeat;">
             <ul style="background:url(/images/top10/mbg.jpg) left top repeat-y;">
                <li><a href="###" onclick="_top10Tour.tab(this,7);">Beijing VF Tour</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,8);">Shanghai VF Tour</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,9);">Guangzhou VF Tour</a><span></span></li>
             </ul>
       </div>
       <!--  mlist2 end  -->   
       
       <!--  left start  -->
       <div id="left">
        <div class="who"><a href="/travel/china-diy-tours" target="_blank"><img src="/images/top10/who.jpg" /></a></div>
        <div class="trust">
            <ul>
                <li><a href="/member-pata"><img src="/images/top10/PATA.jpg" alt="" /></a> <span>We are the member of PATA</span></li>
                <li><a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html" target="_blank"><img src="/images/top10/TRIP.jpg" /></a> <span>96% people want to travel with us again</span></li>
            </ul>
        </div>
   </div>
       <!--  left end  -->
           
    </div>
    <!--  topmleft end  -->
        
    <!--  topmright start  -->
    <div id="tab1" class="topmright">
       <div class="rightpic"><img src="/images/visa/rpic1.jpg" alt="" /></div>
       <h2>72 Hours Visa Free China Tour</h2>
       <p>For facilitating the international visitors' short stay in China, China introduced a visa-free transit policy from January 1, 2013, which allows transit passengers with passport of the following 45 countreies to stay for up to 72 hours without visa on dierct transit via Beijing Capital, Shanghai Pudong Airport, Hongqiao Airport and Guangzhou Baiyun Airport(from 1st August 2013).</p>
       <p>The 45 countries are: <br />
Argentina, Austria, Australia, Belgium, Brazil, Brunei, Bulgaria, Canada, Chile, Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary, Iceland, Ireland, Italy, Japan, Latvia, Lithuania, Luxembourg, Malta, Mexico, Netherlands, New Zealand, Poland, Portugal, Qatar, Romania, Russia, Singapore, Slovakia, Slovenia, South Korea, Spain, Sweden, Switzerland, United Arab Emirates, Ukraine, United Kingdom, United States.
</p>
    </div>
    <!--  topmright end  -->
    
    <!--  Handle Procedures start -->
    <div id="tab2" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/visa/rpic2.jpg" alt="" /></div>
       <h2>Documents to Prepare</h2>
       <p>1. Confirmed interline ticket and valid visa to he thrid country or region (if required) are needed for entry. According to presentations by the Exit and Entry Administration of Beijing Municipal Public Security Bureau (PSB), the 72 hours will be counted from the moment visitors get their transit permits, but not the time when they land at the airport. However, different airlines may have different policies regarding this free transit. For example, passengers may be denied boarding their flights if they do not have confirmed tickets for leaving within 72 hours (here the 72 hour can be simply calculated based on scheduled landing and scheduled departure of the flights). So to avoid hassles, transit passengers from said countries are suggested to book a flight ticket for leaving within 72 hours to a third country or region.</p>
       <p>2. Visitors are required to register at a police station with their transit permits within 24 hours after entry. The registration will be done when you check in to a hotel. So, personal registration is required only for those who stay at their friends' or family's place.</p>
    </div>
    <!--  Handle Procedures end -->
    
    <!--  Restrictions start -->
    <div id="tab3" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/visa/rpic3.jpg" alt="" /></div>
       <h2>Restrictions of the 72-hour Visa-free Transit:</h2>
       <p>1. This regulation does not apply to passengers who travel on round trip flights (e.g., Hong Kong - Beijing - Hong Kong), which means the destination and place of departure can not be the same. That is to say, only those who make transit through Beijing or Shanghai International Airport to the third country are eligible for this policy.</p>
       <p>2. The 72-hour free stay only applies to transit via Airports. Passengers by train or any other vehicles should still apply for a transit G visa in advance.</p>
       <p>3. For air passengers who are interested to visit Beijing/Shanghai during stopover, they should make sure put forward transit permit requests to the airlines taken in advance, so that the airlines can declare it to the airport customs before landing.</p> 
       <p>4. Visitors are not allowed to leave Beijing/Shanghai to other cities during the 72 hours. They can only depart from the Beijing/Shanghai Airport.</p>
       <p>5. If visitors are unable to depart on time due to unavoidable reasons, such as flight cancellation or treatment of sudden disease, they need to apply for a visa from Municipal Public Security Bureau (PSB). Otherwise, tourists cannot apply for an extension of stay.</p>
    </div>
    <!--  Restrictions end -->
    
    <!--  Visa Free Tips start -->
    <div id="tab4" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/visa/rpic4.jpg" alt="" /></div>
       <h2>Visa Free Tips</h2>
       <p>Punishment on Violators:<br />
       Visitors from said countries should strictly follow the restrictions above. Violators of Chinese law, shall be warned, fined or detained for a few days depending on the circumstances. Cases of gross violation shall be expelled from China and prohibited re-entry.</p> 
       <p>Service Facilities:<br />
       Currently, the airports have already optimized the transit formalities with the Customs, the Entry-Exit Inspection &amp; Quarantine Bureau and Frontier Inspection Station. There are service centers for transit passengers in the terminals, offering rest places with drinking water and reading materials if they do not want to leave the airport. For visa-free transit passengers, the airports also provide services for currency exchange, mobile phone rental, car rental, left luggage, as well as local souvenir shops. Tour buses are available from the terminals for the convenience of tourists. </p>
       <p>Tips: Some goods are prohibited entry, like fresh fruits and vegetables, which shall be destroyed under the surveillance of Entry-Exit Inspection and Quarantine Bureau. But if passengers travel with companion animal or carry storable food, they can apply to Entry-Exit Inspection and Quarantine Bureau for temporary custody within the stopover period and re-export. </p>
    </div>
    <!--  Visa Free Tips end -->
    
    <!--  why choose us start -->
    <div id="tab5" class="topmright" style="display:none;">
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
    <div id="tab6" class="topmright" style="display:none;">
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
    
    <!--  right start  -->
    <div id="right" class="topmright">
       <div class="rtoptitle"><img src="/images/visa/rtoptitle.jpg" /></div>
      <?php foreach($vf_tours as $tours):?>
        <?php foreach($tours as $k=>$v):?>
       <!--  rlist start  -->
       <div class="category<?php echo $v['category_parentid'];?> rlist" <?php if($v['category_parentid'] != 77):?> style="display:none" <?php endif;?>>
          <div class="onecontent">
             <div class="number"><?php echo $k+1;?></div>
             <!--  oneleft start  -->
             <div class="oneleft">
                 <div class="lefttitle"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['name']),'id'=>$v['id']));?>" target="_blank"><?php echo $v['name'];?></a> 
                  <?php echo $destination;?>
                  </div>                 
                 <!--  overview start  -->
                 <div class="overview">
                     <p><span><img class="lazy" src="/images/grey.gif" data-original="/images/72HourVisaTours/ID-<?php echo $v['id'];?>.jpg"  /></span>
                      <strong>Overview:</strong> <?php echo $v['note'];?>
                      <a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['name']),'id'=>$v['id']));?>" target="_blank"><img src="/images/top10/more.jpg" /></a>
                    </p>
                 </div>
                 <!--  overview end  -->
             </div>
             <!--  oneleft end  -->
          </div>
          <div class="onebottom"></div>
       </div>
       <!--  rlist end  -->
        <?php endforeach;?>
      <?php endforeach;?>
       
     
   </div>
   <!--  right end  -->
</div>
<!--  topmiddele end  -->
<script>
$(function(){
    $("img").lazyload({
        threshold:10,
        effect : "fadeIn" 
     })
})

  var _top10Tour = {
    tab:function(obj,num){
      $(obj).parents("#top1").find(".topmright").hide();
      $("#tab"+num).show();
      $("#right").show();

      var class_dic = {"handle":"handledq","restrictions":"restrictionsdq","visa":"visadq","why":"whydq","how":"howdq"};
      $.each(class_dic, function(k, v){
    	  $(obj).parents("div.topmleft").find("li."+v).removeClass(v).addClass(k);
      })

      var arr_nums = [1,7,8,9];
     if($.inArray(num, arr_nums) != -1){
    	$(obj).parents("div.topmleft").find("li").removeClass("dq");
    	$(obj).parent("li").addClass("dq");
      if(num == 7){
        $(".category77").show();
        $(".category109, .category85").hide();
      }else if(num == 8){
        $(".category109").show();
        $(".category77, .category85").hide();
      }else if(num == 9){
        $(".category85").show();
        $(".category77, .category109").hide();
      }
     }else{
    	 $(obj).parents("div.topmleft").find("li.dq").removeClass("dq");
       var curr_class = $(obj).parent("li").attr("class");
       $(obj).parent("li").removeClass(curr_class).addClass(curr_class+"dq");
     }

     return false;
    },
    changeHideTop:function(obj){
      if($("#tab1").css("display") != 'none'){
        $("#tab1").hide();
        //$("#tab1").show(300);
        $(obj).find("img").attr("src","/images/top10/top.jpg");
      }else{
        //$("#tab1").hide();
        $("#tab1").show();
        $(obj).find("img").attr("src","/images/top10/bottom.jpg");
      }
    },
    tourtab:function(obj,divclass){
      $(obj).parents(".tabmenu").find("li").removeClass("dq");
      $(obj).addClass("dq");
      $(obj).parents(".oneleft").find(".overview,.attractions,.price,.hotel").hide();
      $(obj).parents(".oneleft").find("."+divclass).show();
    }
  }
</script>
