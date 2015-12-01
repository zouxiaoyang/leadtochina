<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/top10.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.lazyload.js');

$this->setPageTitle("China Family Tours, China Best Family Tours, Top China Family Tours");
Yii::app()->clientScript->registerMetaTag('keywords','China Family Tours, china best Family tours');
Yii::app()->clientScript->registerMetaTag('description','China Travel Company offering China Family tours');
?>
<style type="text/css">
<!--
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 8px; width:932px;}
.topmiddele{ background:none;}
#left{ float:right; padding-right:14px;}
.trust{ margin-top:3px;}
#banner{background:url(/images/top10/banner2.jpg) no-repeat;}

-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> China Family Tours</div>
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
    <div onclick="_familyTour.changeHideTop(this);" class="topbutton1"><img alt="" src="/images/top10/bottom.jpg"></div>
    <!--  topmleft start  -->
    <div class="topmleft">
        <!--  mlist1 start  -->
        <div class="mlist1new">
             <ul>
                <li class="dq"><a href="###" onclick="_familyTour.tab(this,1);">Tour Overview</a><span></span></li>
                <li id="why" class="why"><a href="###" onclick="_familyTour.tab(this,2);">Why Choose Us</a><span></span></li>
                <li id="how" class="how"><a href="###" onclick="_familyTour.tab(this,3);">How To Book</a><span></span></li>
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
        
    <!--  topmright start  -->
    <div id="tab1" class="topmright">
       <div class="rightpic"><img src="/images/top10/familypic1.jpg" alt="" /></div>
       <h2>Children Activities</h2>
       <p>China is an perfect destination for a family vacation with children. Visiting China is like experiencing a whole new world. There are many fun and educational activities that are suitable for children. Besides visiting historic sites and natural scenery, cultural interactions such as:</p>
       <p>Fiying Kite - is an ideal recreation for the kids and parents enjoy together. It is a rorty and amused scene when the sky is dotted with various-shaped and varicolored kites, it's also carry children's dream of flying to the sky.</p>
       <p>Chinese Cooking Class - Chinese cooking enjoys huge popularity all over the world. No doubt, most kids love to eat out. Let the children experience the fun of cooking by themselves!</p>
       <p>Chinese Painting class - Have you heard the "scholar's four jewels"(writing brush, ink stick, ink slab and paper) of China? Can you imagine your kids grab a Chinese writing brush, write on a delicate rice paper? Take this chance to encourage children's creativity under the instruction of professional teachers.</p>
       <p>Besides, watching the Kungfu show, visiting local schools, visiting the panda museums and science museum also can be selectable, you are certain to get Life long a unforgettable Memory with your family!</p>
    </div>
    <!--  topmright end  -->
    
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
    
   <!--  right start  -->
   <div id="right" class="topmright">
       <div class="rtoptitle"><img alt="" src="/images/top10/familytitle.jpg"></div>
       <!--  rlist start  -->
       <?php foreach($toursList as $k=>$v):?>
      <?php
        switch($v['id']){
          case 720:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
          case 716:
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
          case 726:
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
                                  <span>Hong Kong</span>';
          break;
          case 718:
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
          case 722:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Chengdu</span>
                              	<img src="/images/top10/train.png">
                              <span>Chongqing</span>
                              	<img src="/images/top10/ship.png">
                              <span>Yangtze</span>
                              	<img src="/images/top10/ship.png">
                              <span>Yichang</span>
							  <div class="clear"></div>
                              	<img src="/images/top10/flight.png">
                              <span>Shanghai</span>';

         
          break;
          case 723:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Zhengzhou</span>
                              	<img src="/images/top10/car.png">
                              <span>Dengfeng</span>
                              	<img src="/images/top10/car.png">
                              <span>Luoyang</span>
                              	<img src="/images/top10/train.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Guilin</span>
							  <div class="clear"></div>
                              	<img src="/images/top10/ship.png">
                              <span>Yangshuo</span>
                                      <img src="/images/top10/car.png">
                              <span>Guilin</span>
                              	<img src="/images/top10/flight.png">
                              <span>Hong Kong</span>';
          break;

          case 728:
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
          case 544:
          $destination = '<span>Destination: Beijing</span>';
          break;
          
          case 340:
          $destination = '<span>Destination:  Beijing</span>';
          break;
          
          case 193:
          $destination = '<span>Destination:  Hong Kong</span>';
          break;
          default:
          break;
        }
      ?>
        <div class="rlist">
          <div class="onecontent">
             <div class="number"><?php echo $k+1;?></div>
             <!--  oneleft start  -->
             <div class="oneleft">
                 <div class="lefttitle"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['name']),'id'=>$v['id']));?>" target="_blank"><?php echo $v['name'];?></a> 
                  <?php echo $destination;?>
                  </div>
                 <!--  tabmenu start  -->
                 
                 <!--  tabmenu end  -->
                 
                 <!--  overview start  -->
                 <div class="overview">
                     <p><span><img class="lazy"  src="/images/grey.gif" data-original="/images/top10/family<?php echo $v['id'];?>.jpg"  /></span>
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
       <!--  rlist end  -->           
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
  
  var _familyTour = {
	click_tab_inx: 1,
    tab:function(obj,num){
    	  $("#tab1,#tab2,#tab3").hide();
    	  $("#tab"+num).show();
    	  _familyTour.click_tab_inx = num;
    	  var  left_menu_obj=  $(obj).parents(".mlist1new").find("ul li");
    	  if(num == 1) {
    		  left_menu_obj.eq(0).addClass("dq");
    		  left_menu_obj.eq(1).removeClass("whydq").addClass("why");
    		  left_menu_obj.eq(2).removeClass("howdq").addClass("how");
    	  }else if(num == 2){
    		  left_menu_obj.eq(0).removeClass("dq");
    		  left_menu_obj.eq(1).removeClass("why").addClass("whydq");
    		  left_menu_obj.eq(2).removeClass("howdq").addClass("how");
         }else if(num == 3){
        	 left_menu_obj.eq(0).removeClass("dq");
        	 left_menu_obj.eq(1).removeClass("whydq").addClass("why");
        	 left_menu_obj.eq(2).removeClass("how").addClass("howdq");
         }
    },
    changeHideTop:function(obj){
    	  var tabid = "#tab"+_familyTour.click_tab_inx;
    	  if($(tabid).css("display") != 'none'){
            $(tabid).hide();
            $(obj).find("img").attr("src","/images/top10/top.jpg");
          }else{
            $(tabid).show();
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
