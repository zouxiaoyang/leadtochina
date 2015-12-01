<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/top10.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.lazyload.js');

$this->setPageTitle("Best China Tours, China Best Tours, China Student Tours");
Yii::app()->clientScript->registerMetaTag('keywords','best china tour, china best tours, tours to china, china trip, tours china, china travel agent');
?>
<style type="text/css">
<!--
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 8px; width:932px;}
.rtoptitle{ margin-top:10px;}
.topmiddele{ background:none;}
.mlist1{background:url(/images/top10/mbg.jpg) left top repeat-y;}
#left{ float:right; padding-right:14px;}
.trust{ margin-top:3px;}
#banner{background:url(/images/top10/banner5.jpg) no-repeat;}
-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> China Student Tours</div>
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
    <div onclick="_familyTour.changeHideTop(this);" class="topbutton1" style="display:none;"><img alt="" src="/images/top10/bottom.jpg"></div>
    <!--  topmleft start  -->
    <div class="topmleft">
        <!--  mlist1 start  -->
        <div class="mlist1">
             <ul>
                <li id="rush" class="rushdq"><a href="###" onclick="_top10Tour.tab(this,3);">Special Acitivites</a><span></span></li>
                <li id="know" class="know"><a href="###" onclick="_top10Tour.tab(this,4);">Good to Know</a><span></span></li>
                <li id="agency" class="agency"><a href="###" onclick="_top10Tour.tab(this,5);">Choose Travel Agency</a><span></span></li>
                <li id="why" class="why"><a href="###" onclick="_top10Tour.tab(this,1);">Why Choose Us</a><span></span></li>
                <li id="how" class="how"><a href="###" onclick="_top10Tour.tab(this,2);">How To Book</a><span></span></li>
             </ul>
       </div>
       <!--  mlist1 end  -->   
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
    
    <!--  why choose us start -->
    <div id="tab1" class="topmright" style="display:none;">
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
    <div id="tab2" class="topmright" style="display:none;">
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
        
    <!--  Special Acitivites start  -->
    <div id="tab3" class="topmright">
       <div class="rightpic"><img src="/images/top10/student1.jpg" alt="" /></div>
       <h2>Special Acitivites</h2>
       <p>We all know that outbound student tour has much more activities to do than just sightseeing. It should be educational, learn some Chinese, know more about the local life, make frineds and enjoy some hand-moving activities. China, with long and profound history, culture and various student related activities, makes it one of the most popular destinations for world student tour. Activities have Kung Fu Learing, Basic Chinese Learning, Local Family Visiting, History and culture exploration etc.</p>
       <p>Here, we carefully picked plenty of popular China student tours for who want to know better about China's culture, history and its people. No matter which one you take, it should have cultural activities and sightseeing and other interative activities. Certainly, first class service quality with comfort and safe transfer experience is guaranteed. Enjoy it! </p>
    </div>
    <!--  Special Acitivites end  -->
    
    <!--  Good to Know start -->
    <div id="tab4" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/student2.jpg" alt="" /></div>
       <h2>Good to Know</h2>
       <p>1. About the Luggage<br />
       Learn the climate of China and prepare appropriate clothes. China with vast land has different climate even at the same season. Besides, mountains area, plain area and forest area have different weather, prepare some rain gear and sun block if necessary.</p>
       <p>2. About Before Departure<br />
       Take some common drugs, it will work in first time if you got cold or other common disease. Leave the hotels, tour guide and travel company's contact number to your parents, and keep your family members contact number and your ID in your carry-on bag.</p> 
       <p>3. About Arriving in China<br />
       When you arrive in China, you must know the emergency numbers which will help you when you are in any emergency situation. Learing some simple phrases of Chinese, such as "send me to hotel, send me to public security bureau" and so on. Keep the address and contact number of you hotel in pocket.</p>
       <p>4. About Eating in China<br />
       The cuisine in China is various and different from places to places. Besides, the western meals are easy to find. No matter what you want to have, you have to tell us before your tour, so we can settle down with our partners to give you free-worry services.</p>
       <p>5. About Accommodation in China<br />
       The hotel classes in China ranging from Top 6-star hotels to motel and inn. You can pick up most suitable one on your budget. Generally speaking, we recommend the popular 3-star hotels to our guests. However, if you want to take most distinguishing hotels, such as Beijing quadrangle dwellings, family hotels, that's possible.</p>
       <p>6. About Activities in Tours<br />
       Activites of China student tours have Chinese Painting, Learning Basic Chinese, Chinese Kung Fu, Learning Chinese Cooking, Watching Chinese Opera, Watching Chinese Acrobatics, Flying Kite, kayaking and so on.</p>
    </div>
    <!--  Good to Know end -->
    
    <!--  Choose Travel Agency start -->
    <div id="tab5" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/student3.jpg" alt="" /></div>
       <h2>Choose Travel Agency</h2>
       <p>A travel company with good reputaion means that you will have a memorable China tour with first class service guaranteed. It is definitely necessary to pick up a reliable travel company and buy travel insurance in case of any danger. As the ways of how to pick up a good china tour company, a nice grade from a authoritative third-party media is must, such as Trip Advisor. Or you can take China tour company from your friends who had it before. They will give you impartial judgements.</p>
       <p>A good travel company not only can design a perfect tour on your request with a good quotation, but also can settle down any emergency during your travel to ensure that you are absolutely safe while enjoying China student tour. After settle down the enquiry with the travel company, they would mail you a confirmation and a agreement with clearly rules, rights and obligations of both sides. Check the content of the tour route, the transportation tools, the hotels name, dinner standard, attractions, activities and other terms. </p>
    </div>
    <!--  Choose Travel Agency end -->
    
    <!--  right start  -->
   <div id="right">
       <div class="rtoptitle"><img src="/images/top10/studtitle.jpg" /></div>
      <?php foreach($top10Tours as $k=>$v):?>
      <?php
        switch($v['id']){
          case 715:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/train.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Guilin</span>
                                      <img src="/images/top10/ship.png">
                              <span>Yangshuo</span>
                              	<img src="/images/top10/car.png">
                              <span>Guilin</span>
                                      <img src="/images/top10/flight.png">
                              <span>shanghai</span>';
          break;
          case 449:
             $destination = '<span>Destination: Beijing</span>
                                  	<img src="/images/top10/flight.png">
                                  <span>Xian</span>
                                  	<img src="/images/top10/flight.png">
                                  <span>Guilin</span>
                                          <img src="/images/top10/ship.png">
                                  <span>Yangshuo</span>
                                  	<img src="/images/top10/car.png">
                                  <span>Guilin</span>
                                          <img src="/images/top10/flight.png">
                                  <span>Shanghai</span>';
          break;
          
          case 721:
             $destination = '<span>Destination: Hong Kong</span>
                                	<img src="/images/top10/flight.png">
                                <span>Xiamen</span>
                                	<img src="/images/top10/flight.png">
                                <span>Guilin</span>
                                        <img src="/images/top10/car.png">
                                <span>Longsheng</span>
                                	<img src="/images/top10/car.png">
                                <span>Guilin</span>
                                        <img src="/images/top10/ship.png">
                                <span>Yangshuo</span>
								<div class="clear"></div>
                                        <img src="/images/top10/car.png">
                                <span>Guilin</span>
                                	<img src="/images/top10/flight.png">
                                <span>Shanghai</span>';
          break;
          
          case 717:
             $destination = '<span>Destination: Shanghai</span>
                                	<img src="/images/top10/flight.png">
                                <span>Chengdu</span>
                                	<img src="/images/top10/car.png">
                                <span>Leshan</span>
                                        <img src="/images/top10/car.png">
                                <span>Chengdu</span>
                                	<img src="/images/top10/flight.png">
                                <span>Xian</span>
                                        <img src="/images/top10/flight.png">
                                <span>Beijing</span>';
          break;
          
          case 295:
          $destination = '<span>Destination: Shanghai</span>
                              	<img src="/images/top10/car.png">
                              <span>Suzhou</span>
                              	<img src="/images/top10/car.png">
                              <span>Hangzhou</span>
                              ';

          break;
          case 293:
          $destination = '<span>Destination: Zhengzhou</span>
                              	<img src="/images/top10/car.png">
                              <span>Dengfeng</span>
                              	<img src="/images/top10/car.png">
                              <span>Luoyang</span>
                                      <img src="/images/top10/train.png">
                              <span>Xian</span>';
          break;

          case 719:
           $destination = '<span>Destination: Guiyang</span>
                              	<img src="/images/top10/car.png">
                              <span>Anshun</span>
                              	<img src="/images/top10/car.png">
                              <span>Kaili</span>
                                      <img src="/images/top10/car.png">
                              <span>Xijiang</span>
                              	<img src="/images/top10/car.png">
                              <span>Guiyang</span>';
          break;
          
          case 59:
          $destination = '<span>Destination: Kunming</span>
                            	<img src="/images/top10/train.png">
                            <span>Dali</span>
                            	<img src="/images/top10/train.png">
                            <span>Lijiang</span>
                                    <img src="/images/top10/car.png">
                            <span>Shangri-la</span>
                            	<img src="/images/top10/flight.png">
                            <span>Kunming</span>';
          break;
          
          case 727:
          $destination = '<span>Destination: Kunming</span>
                            	<img src="/images/top10/flight.png">
                            <span>Lijiang</span>
                            	<img src="/images/top10/car.png">
                            <span>Shangri-la</span>
                                    <img src="/images/top10/flight.png">
                            <span>Kunming</span>';
          break;
          
          case 294:
          $destination = '<span>Destination: Guilin</span>
                              	<img src="/images/top10/car.png">
                              <span>Longsheng</span>
                              	<img src="/images/top10/car.png">
                              <span>Yangshuo</span>';
          break;
					
		  case 725:
          $destination = '<span>Destination: Guilin</span>
                              	<img src="/images/top10/car.png">
                              <span>Longsheng</span>
                              	<img src="/images/top10/car.png">
                              <span>Guilin</span>
                                      <img src="/images/top10/ship.png">
                              <span>Yangshuo</span>
                              	<img src="/images/top10/car.png">
                              <span>Guilin</span>';
          break;
					
          case 456:
          $destination = '<span>Destination: Guilin</span>
                              	<img src="/images/top10/car.png">
                              <span>Longsheng</span>
                              	<img src="/images/top10/car.png">
                              <span>Guilin</span>
                                      <img src="/images/top10/ship.png">
                              <span>Yangshuo</span>
                              	<img src="/images/top10/car.png">
                              <span>Guilin</span>';
          break;
					
          case 323:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
					
          case 724:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/train.png">
                              <span>Shanghai</span>';
          break;
					
          break;
          default:
            $destination = '<span>Destination: Beijing</span>';
          break;
        }
      ?>
       <!--  rlist start  -->
       <div class="rlist">
          <div class="onecontent">
             <div class="number"><?php echo $k+1;?></div>
             <!--  oneleft start  -->
             <div class="oneleft">
                 <div class="lefttitle"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['name']),'id'=>$v['id']));?>" target="_blank"><?php echo $v['name'];?></a> 
                  <?php echo $destination;?>
                  </div>
                 <!--  overview start  -->
                 <div class="overview">
                     <p><span><img class="lazy" src="/images/grey.gif" data-original="/images/top10/student-<?php echo $v['id'];?>.jpg"  /></span>
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

      var class_dic = {"rush":"rushdq","know":"knowdq","agency":"agencydq","why":"whydq","how":"howdq"};
      $.each(class_dic, function(k, v){
    	  $(obj).parents("div.topmleft").find("li."+v).removeClass(v).addClass(k);
      })

      $(obj).parents("div.topmleft").find("li.dq").removeClass("dq");
      var curr_class = $(obj).parent("li").attr("class");
      $(obj).parent("li").removeClass(curr_class).addClass(curr_class+"dq");

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
    tourtab:function(obj,divclass){
      $(obj).parents(".tabmenu").find("li").removeClass("dq");
      $(obj).addClass("dq");
      $(obj).parents(".oneleft").find(".overview,.attractions,.price,.hotel").hide();
      $(obj).parents(".oneleft").find("."+divclass).show();
    }
  }
</script>
