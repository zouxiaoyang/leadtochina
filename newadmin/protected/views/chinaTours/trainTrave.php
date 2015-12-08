<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/top10.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.lazyload.js');

$this->setPageTitle("Best China Tours, China Best Tours, China Train Travel");
Yii::app()->clientScript->registerMetaTag('keywords','best china tour, china best tours, tours to china, china trip, tours china, china travel agent');
Yii::app()->clientScript->registerMetaTag('description','China Travel Company offering China best tours to Beijing, Xian, Guilin, Yangtze Cruise, Tibet and other hot destinations with great value.');
?>
<style type="text/css">
<!--
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 8px; width:932px;}
.rtoptitle{ margin-top:10px;}
.topmiddele{ background:none;}
.mlist1{background:url(/images/top10/mbg.jpg) left top repeat-y;}
#left{ float:right; padding-right:14px;}
.trust{ margin-top:3px;}
#banner{background:url(/images/top10/banner4.jpg) no-repeat;}
#CDSWIDSSP {width: 186px !important;}
-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> China Train Travel</div>
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
                <li class="typesdq"><a href="###" onclick="_top10Tour.tab(this,3);">Types of Train</a><span></span></li>
                <li id="route" class="route"><a href="###" onclick="_top10Tour.tab(this,4);">Hot Train Route</a><span></span></li>
                <li id="ticket" class="ticket"><a href="###" onclick="_top10Tour.tab(this,5);">Buy Train Ticket</a><span></span></li>
                <li id="policies" class="policies"><a href="###" onclick="_top10Tour.tab(this,6);">Baggage Policies</a><span></span></li>
                <li id="rush" class="rush"><a href="###" onclick="_top10Tour.tab(this,7);">Spring Rush</a><span></span></li>
                <li id="taketrain" class="taketrain"><a href="###" onclick="_top10Tour.tab(this,8);">Tips to Take Train</a><span></span></li>
                <li id="why" class="why"><a href="###" onclick="_top10Tour.tab(this,1);">Why Choose Us</a><span></span></li>
                <li id="how" class="how"><a href="###" onclick="_top10Tour.tab(this,2);">How To Book</a><span></span></li>
             </ul>
       </div>
       <!--  mlist1 end  -->   
       <!--  left start  -->
       <div id="left">
        <div class="who"><a href="/index.php?option=com_diy&template=customize_index" target="_blank"><img src="/images/top10/who.jpg" /></a></div>
        <div style="margin-top:10px; float:right">
        <script src="/travel/js/tripadvisor.js"></script>
        </div>
   </div>
       <!--  left end  -->
    </div>
    <!--  topmleft end  -->
    
    <!--  why choose us start -->
    <div id="tab1" class="topmright" style="display:none">
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
       Start procedure by using the <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>">China tour Search</a> or browsing <a href="/chinatour/">China Tour</a> or <a href="/citytour/">City tour</a> on  your interests. When you find a right or similar tour, you can click the "Inquiry Now" or  "submit" buttom to tell Leadtochina your interests. If there is no tour interests you,  you can use <a href="/index.php?option=com_diy&template=customize_index">DIY</a> theme tour to tailor make a unique tour for yourself. </p>
          <p>Step.2 Adjust your tour plan<br />
          When we got your Enquiry, we would reply to you with practical, detailed tour itinerary,  real-time quotation and other adjustments on your needs.</p>
          <p>Step.3 Free change to suit<br /> 
          If you still have any problems with the tour, you are suggested to communicate with  leadtoChina trip advisor via Email, for making sure both of the two sides have no  misunderstandings until you got the last confirmation letter with settled down quotation  and itinerary.</p>
          <p>Step.4 Confirm with payment<br />
          Pay a deposit(30 percent of the total price) to us. The balance is to be paid in full no  later than 20 days prior to your arrival date. As we received your deposit, we'll start  the process to secure the booking. After the securing the booking, we'll invoice your  account. You'll receive our final confirmation and tour voucher.</p>
          <p>Payment Methods: we accept Wire transfer(bank transfer), credit card(Visa Card,  MasterCard, and American Express) and Paypal. Real our <a href="/payment-guide/">Payment Guide</a> for details.</p>
    </div>
    <!--  how to book end -->
        
    <!--  Types of Train start  -->
    <div id="tab3" class="topmright">
       <div class="rightpic"><img src="/images/top10/train1.jpg" alt="" /></div>
       <h2>Classes of Chinese Train</h2>
       <p>In China, the passenger trains are always designated into different classes according to the speed, and these different classes of trains have varied train numbers. The train number is always prefixed with a Chinese Pinyin (Chinese phonetic alphabet) written in upper case to show different classes. There are four different types of trains in China: multiple unit (MU), express, fast and slow trains. MU train numbers always begin with D or G, such as D306,G105; express train numbers with T, such as T190; fast trains with K, such as K888; slow train without letter preceding them, such as, 1044 or 1088. MU trains are the best ones, which are characterized by high speed and excellent condition. Both express and fast trains have air conditioning and service is generally good. Though slow trains are much cheaper and most do not have air conditioning.</p>
    </div>
    <!--  Types of Train end  -->
    
    <!--  Hot Train Route start -->
    <div id="tab4" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/train2.jpg" alt="" /></div>
       <h2>Hot Train Trip Route</h2>
       <p><strong>Beijing--Shanghai</strong>
       A brand-new Beijing-Shanghai high-speed line opened in July 2011, and CRH380 G-category trains with a distinctive pointed nose-cone now link Beijing South and Shanghai Hongqiao at up to 300km/h (186 mph) in as little as 4 hours 48 minutes. The new G-category high-speed trains have business class, 1st class  &amp; 2nd class seats.</p>
       <p><strong>Beijing--Xi'an</strong>
       A new high-speed line is opened on 26 December 2012 allowing 300km/h (186mph) trains to link Beijing West to Xian North in 5.5 hours.</p>
       <p><strong>Beijing, Shanghai, Xi'an, Guangzhou--Lhasa &amp; Tibet</strong> 
       There are direct air-conditioned trains from Beijing, Shanghai, Xi'an and Guangzhou to Lhasa. These are modern air-conditioned Chinese Railways trains, with soft &amp; hard class sleepers, soft &amp; hard class seats &amp; a restaurant car.</p>
       <p><strong>Beijing--Guangzhou</strong>
       Several comfortable air-conditioned sleeper trains link Beijing with Guangzhou (Canton) every day. In addition, a new high-speed line opened on 26 December 2012, and 300km/h (186mph) trains now link Beijing West and Guangzhou South in as little as 7 hours 59 minutes, on the world's longest high-speed line.</p>
       <p><strong>Shanghai--Xi'an</strong>
       Recommended high-quality Z-category train.  Air-conditioned 2-berth deluxe soft sleepers, 4-berth soft sleepers, hard sleepers &amp; restaurant car.  Arrives/departs Xian main station in the city centre.</p>
    </div>
    <!--  Hot Train Route end -->
    
    <!--  Buy Train Ticket start -->
    <div id="tab5" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/train3.jpg" alt="" /></div>
       <h2>How to buy a Chinese Train Ticket</h2>
       <p>The train tickets can be booked 10 days in advance while some are available 20 days in advance. There are 6 types of tickets: hard-seat, soft-seat, hard-sleeper, soft-sleeper, first-class, and second class tickets. You can buy tickets through 5 ways: Online, Telephone, Railway Station, Booking Office of Train Ticket and Travel Agency. However it is difficult to buy tickets for foreigners who want rail travels during their visit in China, especially on Chinese public holidays. It is often more convenient to obtain your tickets through a reliable travel agency online like <a href="/">Leadtochina.com</a>.</p>
    </div>
    <!--  Buy Train Ticket end -->
    
    <!--  Baggage Policies start -->
    <div  id="tab6" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/train4.jpg" alt="" /></div>
       <h2>Baggage Policies</h2>
       <p>In theory at least, the luggage limit on Chinese trains is 20 Kg for adults, 10 Kg for children, and the maximum dimension of any item should not exceed 160 cm (this is reduced to 130cm on all C, D &amp; G category high-speed trains). The above limitation is not applicable to wheelchair, which can be brought onto the train for free. In reality no-one will weigh or measure your bags, as long as they will fit through the security X-ray machines, and as long as you can carry them all onto the train. If you really want to transport vast quantities of luggage, please use the baggage consignation service. (Baggage space is limited and must be stored in your car so it is advised to travel lightly.)</p>
    </div>
    <!--  Baggage Policies end -->
    
    <!--  Spring Rush start -->
    <div id="tab7" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/train5.jpg" alt="" /></div>
       <h2>Chunyun (Transportation during the Spring Festival)</h2>
       <p>The Spring Festival, also known as the Chinese Lunar New Year, which falls in late January or early February according to Gregorian calendar, is the most important festival for the Chinese. Transportation during Spring Festival in China is quite a spectacular phenomenon, which is considered by the government of China as one of the most important events every year. It embodies the great transportation pressure caused by billions of people all over China, bringing New Year gifts and wishes back home. This phenomenon often lasts for about 40 days around the Spring Festival. The travel peak usually begins 15 days ahead of the Chinese Lunar New Year and 25 days after that. The demand for tickets far exceeds the supply. It is not recommended taking a train travel during Chinese Spring Festival. You can choose other transportation means.</p> 
       <p>If you really have a China tour by train during the Spring Festival, you'd better make early plan and contact a travel agency or ticket agency to book ticket. On your travel day, please go to the station early at least 1 hour, because most stations are crowded with people. Remember to wear warm clothes as most cities in China are cold during Spring Festival. Take good care of your young children and luggage when you are in the crowd. More attention should be paid after get on the train.</p>
    </div>
    <!--  Spring Rush end -->
    
    <!--  Tips to Take Train start -->
    <div id="tab8" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/train6.jpg" alt="" /></div>
       <h2>Tips to Take China Train</h2>
       <p>1.Find the Right Station. There are 2 or more than 2 railway station in some big cities, like Beijing, Shanghai etc. Please kindly find out in which train station you are supposed to board your train in advance. <br />
       2.At the train waiting area, please pay attention to the electronic message board, it will remind passengers which is the right one for each train. The tickets will be checked when entering the lounges. Please take care of your tickets.<br />
       3.Keep the important things with you all the time, such as, passport, visa, wallet like that.Especially at night, in some parts, there are pickpockets. <br />
       4. At each end of carriages, there is one toilet (one is western style in soft sleeper carriages). Please bring your own toilet paper before you use it since it is not available inside. When the train is approaching one stop the bathroom is always locked. When it runs again it will be unlocked.<br />
       5.Please don't accept the beverage or food easily from any strangers because someone may have bad intentions.</p>
    </div>
    <!--  Tips to Take Train end -->
    
    <!--  right start  -->
   <div id="right">
       <div class="rtoptitle"><img src="/images/top10/traintitle.jpg" /></div>
      <?php foreach($top10Tours as $k=>$v):?>
      <?php
        switch($v['id']){
          case 72:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Xian</span>
	<img src="/images/top10/train.png">
<span>Shanghai</span>';
          break;
          case 410:
             $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Xian</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>';
          break;
          case 375:
             $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Tianjin</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>';
          break;
          case 392:
             $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Qinhuangdao</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>';
          break;
          case 400:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Chengde</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>
';

         
          break;
          case 711:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Xian</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>';
          break;

          case 511:
           $destination = '<span>Destination: Shanghai</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>
	<img src="/images/top10/train.png">
<span>Shanghai</span>';
          break;
          case 382:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Luoyang</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>';
          break;
          
          case 372:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Datong</span>
	<img src="/images/top10/train.png">
<span>Pingyao</span>
        <img src="/images/top10/train.png">
<span>Xian</span>';
          break;
          
          case 411:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Shanghai</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>';
          break;
					
					case 412:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Shanghai</span>';
          break;
					
					case 388:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Datong</span>
	<img src="/images/top10/car.png">
<span>Wutaishan</span>
        <img src="/images/top10/car.png">
<span>Datong</span>
	<img src="/images/top10/train.png">
<span>Beijing</span>';
          break;
					
					case 151:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Chengde</span>
	<img src="/images/top10/train.png">
<span>Tianjin</span>';
          break;
					
					case 42:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Xian</span>
	<img src="/images/top10/flight.png">
<span>Chongqing</span>
        <img src="/images/top10/ship.png">
<span>Yangtze</span>
	<img src="/images/top10/ship.png">
<span>Yichang</span>
        <img src="/images/top10/flight.png">
<span>Shanghai</span>';
          break;
					
					case 31:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/train.png">
<span>Xian</span>
	<img src="/images/top10/flight.png">
<span>Lhasa</span>
        <img src="/images/top10/flight.png">
<span>Shanghai</span>';
          break;
          default:
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
                     <p><span><img class="lazy" src="/images/grey.gif" data-original="/images/top10/train-<?php echo $v['id'];?>.jpg"  /></span>
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

      var class_dic = {"types":"typesdq","route":"routedq","ticket":"ticketdq","policies":"policiesdq","rush":"rushdq","taketrain":"taketraindq","why":"whydq","how":"howdq"};
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
