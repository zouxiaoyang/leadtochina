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
#CDSWIDSSP {width: 186px !important;}
-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> Top 10 China Tours</div>
   <!--  banner start  -->
   <div id="banner">
       <div class="topselect">
        <?php echo $this->renderPartial("//common/otherHolidayTypes");?>
       </div>
       <div class="clear"></div>
       <div class="topbutton" onclick="_top10Tour.changeHideTop(this);"><img src="/images/top10/bottom.jpg" alt="" /></div>
   </div>
   <!--  banner end  -->
</div>
<!--  index end  -->

<!--  topmiddele start  -->
<div id="top1" class="topmiddele">
    <!--  topmleft start  -->
    <div class="topmleft">
        <!--  mlist1 start  -->
        <div class="mlist1">
             <ul>
                <li class="dq"><a href="###" onclick="_top10Tour.tab(this,1);">Tour Overview</a><span></span></li>
                <li id="why" class="why"><a href="###" onclick="_top10Tour.tab(this,2);">Why Choose Us</a><span></span></li>
                <li id="how" class="how"><a href="###" onclick="_top10Tour.tab(this,3);">How To Book</a><span></span></li>
             </ul>
       </div>
       <!--  mlist1 end  -->
       
       <!--  mlist2 start  -->
        <div class="mlist2">
             <ul>
                <li><a href="###" onclick="_top10Tour.tab(this,4);">Beijing Guide</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,5);">Xian Guide</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,6);">Shanghai Guide</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,7);">Yangtze Guide</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,8);">Guilin Guide</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,9);">Yunnan Guide</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,10);">Silk Road Guide</a><span></span></li>
             </ul>
       </div>
       <!--  mlist2 end  -->       
    </div>
    <!--  topmleft end  -->
        
    <!--  topmright start  -->
    <div id="tab1" class="topmright">
       <div class="rightpic"><img src="/images/top10/rpic1.jpg" alt="" /></div>
       <h2>Top 10 China Tours Overview</h2>
       <p>With mysterious, epic history, abundant natural wonders and ultra-modern cities, China lures travelers from all around the world every year. For saving your time picking up best China tours with different highlights, we are pround to present our most popular and best China tours to you as selected by our customers. Those tour packages have the most famous and beautiful attractions in China, first-class hotel, authentic Chinese local cuisine, well-arranged tourist routes, knowledgeable tour guides and professional experienced drivers. Meanwhile, you will have your private trip advisor who will monitor your tour from the start to finish.</p>
       <p>According to the popularity, our travel experts experience and feedback from our customers, we well design top 10 China tours that showcase the most famous and captivating attractions in China such as Forbidden City, Terracotta Army, Great Wall and so on. Click the following itineraries of top China tour packages and check out your China best tour!</p>
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
    
    <!--  beijing guide start -->
    <div  id="tab4" class="topmright" style=" display:none;">
       <div class="rightpic"><img src="/images/top10/rpic4.jpg" alt="" /></div>
       <h2>Beijing Guide</h2>
       <p>Beijing, capital of China, is definitely the No.1 Choice of travelers who want to know ancient China's proufound culture, feel local residents'tranquil life and taste numerous local specialities with best tour, guide and accommodation experiences. It has been the political, economic and cultural center of China for over 800 years from the Yuan Dynasty. The numerous royal buildings with long history endow it with incomparable charm, not only the 'Nation's Best' but also the 'World's Best'. </p>
       <p>Forbidden City: the largest and the best-preserved imperial palace complex in the world, it is the living place of royal families of Ming (1638A.D-1644 A.D)and Qin Dynasties (1644A.D-1912A.D); Great Wall, it is one of the 'Eight Wonders of the World' enlisted in the Wold Heritage Directory. The solemn and respectful Tiananmen Square is the largest central city square in the world, which serves not only the city's symbol but also the whole of China. Summer Palace, the biggest royal garden in China with elegant lake, mountain, ancient shopping street and palace scenery.</p>
       <p>Meanwhile, the traditional lifestyle has been well-preserved in the old neighhorhoods of the city-the Hutongs, which are mazes of narrow alleyways and old single-story traditional courtyard houses. A Hutong tour with rickshaw will give you a glimpse of old Beijing looks.</p>
       <p>On the other hand, as the political, cultural, and educational heart of China, Beijing has the most developed intercity and intracity transportations. Using the most comfortable ways to tour old Beijing, that would be real fantastic.</p>
    </div>
    <!--  beijing guide end -->
    
    <!--  xian guide start -->
    <div id="tab5" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic5.jpg" alt="" /></div>
       <h2>Xian Guide</h2>
       <p>Personally speaking, I do think Xian is better than Beijing in tourist resources, ancient architectural complex
, historical background and air quality. Xian was the capital of the Qin Dynasty (221 B.C-207 B.C), which united the whole China for the first time. Besides, Xian also served as the capital during the golden eras of the Han Dynasty (206 BC-220AD) and the Tang Dynasty (618-907). </p>
       <p>Long and glorious hisotry give Xian a great number of precious relics and historical sites, such as Terracotta Warriors and Horses-one of the Eight Wonder of the World, the majestic Big Wild Goose Pagoda, Site of Tang Daminggong Palace, Forest of Stone Steles Museum, Drum Tower &amp; Bell Tower, City Wall(the best preserved city wall in China) and so on. </p>
       <p>On the other hand, Xian was also the starting point of the Silk Road, an ancient trade route that between China and Mediterranean, which played an important role in economic and cultural exchange. For certain, Xian has its own distinguishing characters to explore in days. With leadtochina, and carefully selected Xian tour, you will have a nice China vacation including Xian.</p>
    </div>
    <!--  xian guide end -->
    
    <!--  shanghai guide start -->
    <div id="tab6" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic6.jpg" alt="" /></div>
       <h2>Shanghai</h2>
       <p>China's biggest and most prosperous city, Shanghai is the second largest "city proper" in the world after Mumbai. As China's leading economic and busniess city, Shanghai's modernity is evidenced by the ambitious skyline in the Pudong Economic Zone and the gorgeous night scenes of the Huangpu River. Meanwhile, the colonial legacy has created a unique culture, a fusion of the East and the West. From the Bund, waterfront of the city, you can find a large collection of colonial architecture. Check it with your own eyes.</p>
       <p>However, Shanghai is the biggest and most prosperous city, it doesn't mean Shanghai have no past and evidence left. Beneath Shanghai's impressive modern buildings and in the back alleys, you can find Shanghai in 1920s. On the other hand, Shanghai doesn't born with great sights. What she has are the elegant Yuyuan Garden, Jade Buddha Temple, charming Huangpu River Cruise etc. So, Shanghai is not a city to tour with natural scenery but the amazing city's modern atmosphere.</p>
    </div>
    <!--  shanghai guide end -->
    
    <!--  yangtze guide start -->
    <div id="tab7" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic7.jpg" alt="" /></div>
       <h2>Yangtze River</h2>
       <p>Beginning from the west of Geladandong Mountain, the principal peak of the Tanggula Mountain chain in the Qinghai-Tibetan Plateau, southwest of China, Yangtze River winds its way from Tibet to the East China Sea in the length of over 6,300 kilometers through 8 Provicnes(Qinghai, Sichuan, Yunnan, Hubei, Hunan, Jiangxi, Anhui and Zhejiang), 2 Municipalities (Chongqing and Shanghai). It is the largest and longest river in China, and the third-longest in the world, next only to the Nile in northeast Africa and the Amazon in South America.</p>
       <p>With plenty of rainfall all year round, the Yangtze River is named the golden watercourse. From Qinghai-Tibetan Plateau, the source of Yangtze River, where you can see the most beautiful night sky and also smell the purest air in the world. The great natural scenery will purify your soul. From Sichuan Province, where you can go into the kingdom of Animals and Plants. From Hubei, where you can see Shennongjia virgin forest and Three Gorges Project. From Anhui province, where you can enjoy the Mount Huang known as No.1 Mountain in China. Needless to say the Shanghai and Zhejiang Province, the economic center of China.</p>
       <p>Yangtze Three Gorges, one of the 10 most famous tour sites of China, top of the best 40 hottest scenic spots in China, is also one of the best 35 China's king scenic spots and 16 special touring routes. Route from the Chongqing to Yichang is the real highlight of Yangtze Scenery. After the amazing trip, you will realize the greatness of the Yangtze River and the diverse of our country. </p>
    </div>
    <!--  yangtze guide end -->
    
    <!--  guilin guide start -->
    <div id="tab8" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic8.jpg" alt="" /></div>
       <h2>Guilin Guide</h2>
       <p>Located in the northeast of Guangxi Zhuang Autonomous Region, Guilin is considered to be the most beautiful city in China. Within an area of about 27,8000 square kilometers (10,734 square miles), Guilin is nested among green mountains, crystal clear waters, unique caves and beautiful stones. Those strangely shaped hills, or karsts, with the verdant vegetation ranging from bamboo to conifers together with wonderful caves make Guilin such an attraction for tourists.</p>
       <p>Guilin is also an important cultural city with a history more than 2000 years. The city has been the political, economic and cultural center of Guangxi since the Northern Song Dynasty (960-1127). On the other hand, there are many ethnic minorities in Guangxi Zhuang Autonomous Region, including Zhuang, Yao, Hui, Miao, Mulao, Maonan and Dong people. The splendid and amazing unique customs, festivals and culture will highlight your stay, and that cannot be seen in many other places elsewhere in China.</p>
       <p>Transportations in and out Guilin are real convenient, it has airport, train station, coach station and many other intracity means.</p>
    </div>
    <!--  guilin guide end -->
    
    <!--  yunnan guide start -->
    <div id="tab9" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic9.jpg" alt="" /></div>
       <h2>Yunnan Guide</h2>
       <p>Located in the real southwest of China, Yunnan Province refers to "the place south of the colorful clouds " or "the place south of Yunling(cloudy ridge) Mountain". It borders Vietam, Laos and Burma; internally, it is neighbor to Guizhou, Guangxi, Chongqing, Sichuan and Tibet.</p>
       <p>Yunnan province is a land of various ethnic groups, landscapes, natural scenery, creatures, etc. Ethnic minorities in Yunnan province make up about 1/3 of the province's population. China has 56 ethnic minorities, and 51 of them reside in Yunnan province. These ethnic minorities live together over vast areas in the region while some live in individual concentrated communities in small areas.</p>
       <p>Due to the large variations in temperature between day and night, visitors are advised to carry changes of clothing. Besides, the climate is relatively dry, so drink more water and protect yourself from strong UV radiation at high altitude. Moreover, avoid strenuous exercise and have plenty of rest in case of altitude sickness.</p>
    </div>
    <!--  yunnan guide end -->
    
    <!--  silk road guide start -->
    <div id="tab10" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic10.jpg" alt="" /></div>
       <h2>Silk Road Guide</h2>
       <p>Silk Road is a historically important international trade route between China and Mediterranean. Actually, the goods exchanged among the cities on the road have silk, ironware, tea, china, jade articles, and many local specialities, which contributed a lot to those countries civilization and life. Because silk comprised a large proportion of trade along this road, in 1877, it was named "Silk Road" by Ferdinand von Richthofen, an eminent geographer.</p>
       <p>From Han Dynasty, the dynasty it opened, to the collapse of the Yuan Dynasty, it enjoyed a history of about 1,600 years. So, on the road, there are numerous cultural relics, ruins of ancient cities, such as Bingling Temple in Gansu province, well-known Mogao Caves in Dunhuang, Maijishan Grottoes, Yumenguan Pass, ancient city ruins of Loulan etc.</p>
       <p>There are many ways to explore world-famous Silk Road, trekking, hiking, with private vehicle, coach, train or even flight. Leadtochina carefully picked up several Silk Road tour packages for you.</p>
    </div>
    <!--  silk road guide end -->
</div>
<!--  topmiddele end  -->

<!--  topmiddele start  -->
<div id="top2" class="topmiddele" style="display:none">
    <!--  topmleft start  -->
    <div class="topmleft">
        <!--  mlist1 start  -->
        <div class="mlist1">
             <ul>
                <li class="dq"><a href="#">Tour Overview</a><span></span></li>
             </ul>
       </div>
       <!--  mlist1 end  -->
       
       
    </div>
    <!--  topmleft end  -->
        
    <!--  topmright start  -->
    <div class="topmright" style="padding-top:10px;">
       <p>Marvelous China tourist destinations,Well-selected tour packages,Competitive price and VIP quality guarantee, you are certain to have best China tour.</p>
    </div>
    <!--  topmright end  -->
</div>
<!--  topmiddele end  -->

<!--  index start  -->
<div class="index1">
   <!--  left start  -->
   <div id="left">
        <div class="who"><a href="/index.php?option=com_diy&template=customize_index" target="_blank"><img src="/images/top10/who.jpg" /></a></div>
        <div style="margin-top:10px; float:right">
        <script src="/travel/js/tripadvisor.js"></script>
        </div>
   </div>
   <!--  left end  -->
   
   <!--  right start  -->
   <div id="right">
       <div class="rtoptitle"><img src="/images/top10/rtoptitle.jpg" /></div>
      <?php foreach($top10Tours as $k=>$v):?>
      <?php
        switch($v['id']){
          case 54:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
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
          case 17:
             $destination = '<span>Destination: Beijing</span>
                                  	<img src="/images/top10/flight.png">
                                  <span>Xian</span>
                                  	<img src="/images/top10/flight.png">
                                  <span>Shanghai</span>';
          break;
          case 327:
             $destination = '<span>Destination: Beijing</span>
                                	<img src="/images/top10/flight.png">
                                <span>Xian</span>';
          break;
          case 578:
             $destination = '<span>Destination: Shanghai</span>
                                	<img src="/images/top10/flight.png">
                                <span>Xian</span>
                                	<img src="/images/top10/flight.png">
                                <span>Beijing</span>';
          break;
          case 58:
          $destination = '
          <span>Destination: Beijing</span>
          	<img src="/images/top10/flight.png">
          <span>Xian</span>
          	<img src="/images/top10/flight.png">
          <span>Kunming</span>
                  <img src="/images/top10/flight.png">
          <span>Dali</span>
          	<img src="/images/top10/car.png">
          <span>Lijiang</span>
                  <img src="/images/top10/flight.png">
          <span>Kunming</span>
                   <img src="/images/top10/flight.png">
          <span>Shanghai</span>
          ';

         
          break;
          case 60:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Urumqi</span>
                              	<img src="/images/top10/flight.png">
                              <span>Kashgar</span>
                                      <img src="/images/top10/flight.png">
                              <span>Urumqi</span>
                              	<img src="/images/top10/car.png">
                              <span>Turpan</span>
                                      <img src="/images/top10/train.png">
                              <span>Dunhuang</span>
							  <div class="clear"></div>
                                      <img src="/images/top10/flight.png">
                              <span>Xian</span>
                                      <img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;

          case 713:
           $destination = '<span>Destination: Beijing</span>
                            	<img src="/images/top10/train.png">
                            <span>Luoyang</span>
                            	<img src="/images/top10/train.png">
                            <span>Xian</span>
                                    <img src="/images/top10/flight.png">
                            <span>Chengdu</span>
                            	<img src="/images/top10/flight.png">
                            <span>Shanghai</span>';
          break;
          case 22:
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
          case 323:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
                              <span>Shanghai</span>';
          break;
          case 93:
          $destination = '<span>Destination: Beijing</span>
                              	<img src="/images/top10/flight.png">
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
                     <p><span><img class="lazy" src="/images/grey.gif" data-original="/images/top10/ID-<?php echo $v['id'];?>.jpg"  /></span>
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
<!--  index end  -->

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

      if(num ==2 || num == 3){
        $(obj).parents("div.topmleft").find("li").removeClass('dq');
        $(obj).parents("div.topmleft").find("li").removeClass('whydq');
        $(obj).parents("div.topmleft").find("li").removeClass('howdq');
        if(num == 2){
          $(obj).parent("li").removeClass("why").addClass('whydq');
          $(obj).parents("div.topmleft").find("#how").addClass("how");
        }
        if(num == 3){
          $(obj).parent("li").removeClass("how").addClass('howdq');
          $(obj).parents("div.topmleft").find("#why").addClass("why");
        }
      }else{
        $(obj).parents("div.topmleft").find("li").removeClass('dq');
        $(obj).parents("div.topmleft").find("#how").removeClass("howdq").addClass("how");
        $(obj).parents("div.topmleft").find("#why").removeClass("whydq").addClass("why");
        $(obj).parent("li").addClass('dq');
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
    tourtab:function(obj,divclass){
      $(obj).parents(".tabmenu").find("li").removeClass("dq");
      $(obj).addClass("dq");
      $(obj).parents(".oneleft").find(".overview,.attractions,.price,.hotel").hide();
      $(obj).parents(".oneleft").find("."+divclass).show();
    }
  }
</script>
