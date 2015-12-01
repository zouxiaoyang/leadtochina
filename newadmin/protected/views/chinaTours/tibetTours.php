<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/top10.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.lazyload.js');

$this->setPageTitle("2015 Latest Tibet Travel Packages, 2015 Tibet Latest Visa Information");
Yii::app()->clientScript->registerMetaTag('keywords','2015 Tibet Travel Packages, 2015 Tibet Travel Permit, 2015 Tibet Travel Permit Updates
');
Yii::app()->clientScript->registerMetaTag('description','Lead to China offers 2015 latest China & Tibet Tour packages, Latest Tibet Visa Information, free Tibet travel consultancy service.');
?>
<style type="text/css">
<!--
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 8px; width:932px;}
.rtoptitle{ margin-top:10px;}
.topmiddele{ background:none;}
.mlist1{background:url(/images/top10/mbg.jpg) left top repeat-y;}
#left{ float:right; padding-right:14px;}
.trust{ margin-top:3px;}
#banner{background:url(/images/top10/banner6.jpg) no-repeat;}
#CDSWIDSSP {width: 186px !important;}
-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> China Tibet Tours</div>
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
                <li class="permitdq" id="permit"><a href="###" onclick="_top10Tour.tab(this,3);">Tibet Permit</a><span></span></li>
                <li id="attraction" class="attraction"><a href="###" onclick="_top10Tour.tab(this,4);">Top Attractions</a><span></span></li>
                <li id="culture" class="culture"><a href="###" onclick="_top10Tour.tab(this,5);">Tibet Culture</a><span></span></li>
                <li id="festivals" class="festivals"><a href="###" onclick="_top10Tour.tab(this,6);">Tibet Festivals</a><span></span></li>
                <li id="map" class="map"><a href="###" onclick="_top10Tour.tab(this,7);">Map of Tibet</a><span></span></li>
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
        
    <!--  What is Tibet Entry Permit start  -->
    <div id="tab3" class="topmright">
       <div class="rightpic"><img src="/images/top10/Tibet1.jpg" alt="" /></div>
       <h2>What is Tibet Entry Permit</h2>
       <p>All foreign tourists and Taiwan tourists need to apply a Tibet Tourism Bureau (TTB) permit to get into Tibet. 
TTB Permit is also called Tibet Entry Permit and it is issued by Tibet Tourism Bureau. It is necessary for entry to Lhasa or any other parts of the Tibetan Autonomous Region. When you fly from any city to Lhasa you will need to show this permit when you check in at the airport. Moreover, whenever you buy a flight to Lhasa you need to show this permit. TTB permits are also needed by groups traveling by Land Cruiser but this will be arranged by the travel agency organizing the trip. Your travel agency will assist you in applying for it and it normally takes 2 week days and the cost is 50 yuan/person.</p> 
       <p>Please Note: According to the latest source, Tibet Travel Permit was closed from Feb 10th to the end of March, which was about half month earlier than last year. Then the permit may recover back to normal from beginning of April if nothing changes happen. According to some news, this year the Tibet travel permit application would start from mid of March. If you have any questions please feel free to write to Lead To China.</p>
       <p>Tibet travel permits (Or Tibet visa) is only can be obtained through a tour operator, no group size restriction, no national restriction (except Norwagians), so even a singel traveler can get the Tibet travel permit. However, since the regulation on Tibet is capricious, you have to inform your travel company at least 30 days advance to make sure that they can get it.</p>
    </div>
    <!--  What is Tibet Entry Permit end  -->
    
    <!--  Top Attractions in Tibet start -->
    <div id="tab4" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/Tibet2.jpg" alt="" /></div>
       <h2>Top Attractions in Tibet</h2>
       <p>Tibet is the highest region on earth, known as the home of Tibetan people and the roof of the world. Moreover, there are many must-see attractions in Tibet. Here we will list some famous attractions in Lhasa. 1. Potala Palace: the symbol of Tibet, which is a must in your Tibet tour. 2. Jokhang Temple: the fist Buddhist temple in Tibet. For most Tibetans, it is the most sacred temple in Tibet. 3. Norbulingka: Norbulingka is also named Summer Palace of Tibet. Norbulinka was originally built as the traditional summer place for the Dalai Lamas. 4. Barkhor Street: the oldest street gathering religious, sightseeing, folk-custom and commerce. 5. Nam Co Lake: In Tibetan "Nam Co" means "heavenly lake". It has been reviewed as the holy land by Buddhism.</p>
    </div>
    <!--  Top Attractions in Tibet end -->
    
    <!--  Tibet Culture start -->
    <div id="tab5" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/Tibet3.jpg" alt="" /></div>
       <h2>Tibet Culture</h2>
       <p>Tibet experienced a rich and long history since 7th century, with a unified empire, a region of separate self-governing territories, vassal states, and Chinese provinces and ruled by foreign rulers, various regents and viceroys etc. Tibet has a unique culture of all there own. It is mainly inhabited by Tibetans, a minority nationality of old and mysterious people. The simplicity of life, the spirituality of minds and the rich customs and traditions give a strong hold to this alpine region. The most stunning part of Tibetan culture is performing arts. People of Tibet take their religion, beliefs and values very seriously. Art is probably the most visible form of religion in Tibet. In addition, Buddhism is a particular part in Tibet culture.</p>
       <p>Come and experience this magical world of culture.</p>
    </div>
    <!--  Tibet Culture end -->
    
    <!--  Tibet Festivals start -->
    <div  id="tab6" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/Tibet4.jpg" alt="" /></div>
       <h2>Tibet Festivals</h2>
       <p>Below we have listed the major traditional Tibetan festivals, so that you may better plan your tour, as well as learn more about the Tibetan people. <br />
       Tibetan New Year<br />
       Date: December 28-29 (Tibetan Calendar)<br />
       The Tibetan New Year is the most important festival in the Tibetan calendar. Different regions of Tibet celebrate the New Year differently, with Lhasa's festivities being the most representative. </p>
       <p>Butter Lantern Festival<br />
       Date: January 15 (Tibetan Calendar)<br />
       January 15th of the Tibetan calendar marks the close of the Tibetan New Year festivities. On this day, people migrate to the temples to burn incense to worship the Buddhas. </p>
       <p>Sagar Dawa Festival<br />
       Date: In April, around 15th (Tibetan Calendar)<br />
       Sagar Dawa represents April in the Tibetan calendar. In Buddhism it is believed that Sakyamuni was born, became Buddha and died in April. In and around Lhasa, this festival is held to worship the Buddha. </p>
       <p>Shoton Festival of Lhasa<br />
       "Shoton" in Tibetan means "sour milk banquet". As Tibetan operas are performed and Buddha paintings are exhibited at this time, it is also called the "Tibetan Opera Festival" or "Buddha Exhibition Festival." </p>
       <p>Bathing Festival<br />
       Date: the first ten days of July (Tibetan Calendar)<br />
       In Tibetan, this festival is called "Gamariji��, the Tibetan name for the planet Venus. It is so called because the rising of Venus in the sky signals the beginning of this festival where Tibetans bathe in rivers and lakes believed, at this special time, to possess beneficial properties.</p>
       <p>Ongkor Festival (Bumper Harvest Festival)<br />
       Date: in August (Tibetan Calendar)<br />
       The Ongkor Festival is a traditional Tibetan harvest festival held in the farming areas of Tibet each August, according to Tibetan calendar.</p>
       <p>Horse Racing Fair and Archery Festival<br />
       Date: between June and July (Tibetan Calendar)<br />
       While horse racing occurs each year, large events occur only once every three years. Events last several days, with the longest ones lasting ten days or more. The most well known events are the Kyagqen Horse Racing Art Festival of Nagqu and the Darma Festival of Gyangze. </p>
    </div>
    <!--  Tibet Festivals end -->
    
    <!--  Map of Tibet start -->
    <div id="tab7" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/Tibet5.jpg" alt="" /></div>
       <h2>Map of Tibet</h2>
       <p>Tibet is one of the five autonomous regions in the China; it was admitted on September 1, 1965. Tibet Autonomous Region is located in the southwest of China, with a land area of 1.22 million square kilometers (the second largest region of China), bordering Xinjiang Region and Qinghai Province to the north, Sichuan and Yunnan to the east, India, Nepal, Sikkim, and Burma to the south. Bounded by the Himalayan mountains to the south, the region sits on a high plateau at 4,000-5,000 meters, resulting in its nickname "the roof of the world." </p>
    </div>
    <!--  Map of Tibet end -->
   
    <!--  right start  -->
   <div id="right">
       <div class="rtoptitle"><img src="/images/top10/tibettitle.jpg" /></div>
      <?php foreach($top10Tours as $k=>$v):?>
      <?php
        switch($v['id']){
          case 93:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Lhasa</span>
                                      <img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
          case 82:
             $destination = '<span>Destination: Beijing</span>
                                	<img src="/images/top10/flight.png">
                                <span>Lhasa</span>
                                	<img src="/images/top10/flight.png">
                                <span>Chengdu</span>
                                        <img src="/images/top10/flight.png">
                                <span>Shanghai</span>';
          break;
          case 83:
             $destination = '<span>Destination: Beijing</span>
                                	<img src="/images/top10/flight.png">
                                <span>Lhasa</span>
                                	<img src="/images/top10/flight.png">
                                <span>Chengdu</span>
                                	<img src="/images/top10/flight.png">
                                <span>Shanghai</span>';
          break;
          case 84:
             $destination = '<span>Destination: Beijing</span>
                                  	<img src="/images/top10/flight.png">
                                  <span>Lhasa</span>
                                  	<img src="/images/top10/flight.png">
                                  <span>Chengdu</span>
                                  	<img src="/images/top10/flight.png">
                                  <span>Shanghai</span>';
          break;
          case 31:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/train.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Lhasa</span>
                                      <img src="/images/top10/car.png">
                              <span>Shigatse</span>
                                      <img src="/images/top10/car.png">
                              <span>Lhasa</span>
                              	<img src="/images/top10/flight.png">
                              <span>Shanghai</span>';

         
          break;
          case 34:
          $destination = '<span>Destination: Beijing</span>
                            	<img src="/images/top10/flight.png">
                            <span>Xian</span>
                            	<img src="/images/top10/flight.png">
                            <span>Lhasa</span>
                            	<img src="/images/top10/car.png">
                            <span>Shigatse</span>
                                    <img src="/images/top10/car.png">
                            <span>Lhasa</span>
                            	<img src="/images/top10/flight.png">
                            <span>Shanghai</span>';
          break;
          case 36:
           $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Lhasa</span>
                              	<img src="/images/top10/car.png">
                              <span>Shigatse</span>
                                      <img src="/images/top10/car.png">
                              <span>Lhasa</span>
                              	<img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
          case 79:
          $destination = '<span>Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Yichang</span>
                              	<img src="/images/top10/ship.png">
                              <span>Yangtze</span>
                                      <img src="/images/top10/ship.png">
                              <span>Chongqing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Lhasa</span>
                                      <img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
          
          case 78:
          $destination = '<span>Beijing</span>
                              	<img src="/images/top10/train.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Yichang</span>
                              	<img src="/images/top10/ship.png">
                              <span>Yangtze</span>
                                      <img src="/images/top10/ship.png">
                              <span>Chongqing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Lhasa</span>
                                      <img src="/images/top10/flight.png">
                              <span>Chengdu</span>
                              	<img src="/images/top10/flight.png">
                              <span>Guilin</span>
                                      <img src="/images/top10/flight.png">
                              <span style="font-size:11px;">Hong Kong</span>';
          break;
          
          case 41:
          $destination = '<span>Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Urumqi</span>
                              	<img src="/images/top10/car.png">
                              <span>Turpan</span>
                              	<img src="/images/top10/train.png">
                              <span>Dunhuang</span>
                                  <img src="/images/top10/flight.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Lhasa</span>
                                      <img src="/images/top10/car.png">
                              <span>Gyangtse</span>
							  <div class="clear"></div>
                                      <img src="/images/top10/car.png">
                              <span>Shigatse</span>
                              	<img src="/images/top10/car.png">
                              <span>Lhasa</span>
                              <img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
					
          case 46:
          $destination = '<span>Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Urumqi</span>
                              	<img src="/images/top10/car.png">
                              <span>Turpan</span>
                              	<img src="/images/top10/train.png">
                              <span>Dunhuang</span>
                                      <img src="/images/top10/flight.png">
                              <span>Xian</span>
                              	<img src="/images/top10/flight.png">
                              <span>Lhasa</span>
                                      <img src="/images/top10/car.png">
                              <span>Gyangtse</span>
							  <div class="clear"></div>
                                      <img src="/images/top10/car.png">
                              <span>Shigatse</span>
                              	<img src="/images/top10/car.png">
                              <span>Lhasa</span>
                                      <img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
					
          case 204:
          $destination = '<span>Destination: Lhasa</span>
                              	<img src="/images/top10/car.png">
                              <span>Gyantse</span>
                              	<img src="/images/top10/car.png">
                              <span>Dingri</span>
                                      <img src="/images/top10/car.png">
                              <span>Zhangmu</span>';
          break;
					
		  case 85:
          $destination = '<span>Destination: Lhasa</span>
                              	<img src="/images/top10/car.png">
                              <span>Gyantse</span>
                              	<img src="/images/top10/car.png">
                              <span>Shigatse</span>
                                      <img src="/images/top10/car.png">
                              <span>Dingri</span>
                                      <img src="/images/top10/car.png">
                              <span>Shigatse</span>
                              	<img src="/images/top10/car.png">
                              <span>Lhasa</span>';
          break;
					
		 case 87:
          $destination = '<span>Destination: Lhasa</span>
                              	<img src="/images/top10/car.png">
                              <span>Gyantse</span>
                              	<img src="/images/top10/car.png">
                              <span>Shigatse</span>
                                      <img src="/images/top10/car.png">
                              <span>Dingri</span>
                                      <img src="/images/top10/car.png">
                              <span>Shigatse</span>
                              	<img src="/images/top10/car.png">
                              <span>Lhasa</span>';
          break;
					
          case 88:
          $destination = '<span>Destination: Lhasa</span>
                              	<img src="/images/top10/car.png">
                              <span>Gyantse</span>
                              	<img src="/images/top10/car.png">
                              <span>Shigatse</span>
                                      <img src="/images/top10/car.png">
                              <span>Dingri</span>
                                      <img src="/images/top10/car.png">
                              <span>Shigatse</span>
                              	<img src="/images/top10/car.png">
                              <span>Lhasa</span>';
          break;
          case 231:
            $destination = '<span>Destination: Chengdu</span>
                                	<img src="/images/top10/flight.png">
                                <span>Lhasa</span>';
           break;
          case 178:
            $destination = '<span>Destination: Lhasa</span>
                                	<img src="/images/top10/car.png">
                                <span>Shigatse</span>
                                	<img src="/images/top10/car.png">
                                <span>Lhasa</span>';
            break;
          case 177:
            $destination = '<span>Destination: Lhasa</span>
                              	<img src="/images/top10/car.png">
                              <span>Nyingchi</span>
                              	<img src="/images/top10/car.png">
                              <span>Lhasa</span>';
            break;
          case 445:
            $destination = '<span>Destination: Beijing</span>
                              <img src="/images/top10/flight.png">
                            <span>Xian</span>
                              <img src="/images/top10/flight.png">
                            <span>Lhasa</span>
                                    <img src="/images/top10/flight.png">
                            <span>Chengdu</span>
                                    <img src="/images/top10/flight.png">
                            <span>Shanghai</span>';
            break;
          default:
            $destination = '<span>Destination: Lhasa</span>';
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
                     <p><span><img class="lazy" src="/images/grey.gif" data-original="/images/top10/tibet-<?php echo $v['id'];?>.jpg"  /></span>
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

      var class_dic = {"permit":"permitdq","attraction":"attractiondq","culture":"culturedq","festivals":"festivalsdq","map":"mapdq","why":"whydq","how":"howdq"};
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
