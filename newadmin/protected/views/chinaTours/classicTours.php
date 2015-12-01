<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/top10.css'); 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.lazyload.js');

$this->setPageTitle("Classic China Tours, China Best Tours, Top China Tours");
Yii::app()->clientScript->registerMetaTag('keywords','Classic china tour, china best tours, tours to china, china trip, tours china, china travel agent');
Yii::app()->clientScript->registerMetaTag('description','China Travel Company offering China best tours to Beijing, Xian, Guilin, Yangtze Cruise, Tibet and other hot destinations with great value.');
?>
<style type="text/css">
<!--
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 8px; width:932px;}
-->
</style>
<!--  index start  -->
<div class="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a>
    <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> Classic China Tours</div>
   <!--  banner start  -->
   <div id="banner" style="background:url(/images/top10/banner1.jpg) no-repeat;">
       <div class="topselect">
           <select onchange="_top10Tour.changeUrl(this);">
                <option value="">other holiday types </option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/classicTours');?>">Classic China Tours</option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=5">Yangtze River Tours</option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/familyTours');?>">China Family Tours</option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=9">China Tibet Tours</option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/trainTravel');?>">China Train Travel </option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/studentTours');?>">China Student Tours</option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/JewishTours');?>">China Jewish Tours</option>
                <option value="<?php echo Yii::app()->createUrl('chinaTours/72HourVisaFreeTours');?>">72-hour Visa-free Tours</option>
                <option value="<?php echo Yii::app()->createUrl('adoption');?>">China Adoption Travel</option>
           </select>
           <span><a href="/custom-china-tour/" target="_blank"><img src="/images/top10/make.png" /></a></span>
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
        <div class="mlist2" style="background:url(/images/top10/list21bg.png) no-repeat;">
             <ul>
                <li><a href="###" onclick="_top10Tour.tab(this,4);">Historic Cities</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,5);">Landscape Gallery</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,6);">Ethnic Minorities</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,7);">Charming Jiangnan</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,8);">Special Activities</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,9);">Authentic Cuisine</a><span></span></li>
                <li><a href="###" onclick="_top10Tour.tab(this,10);">Local Specialities</a><span></span></li>
             </ul>
       </div>
       <!--  mlist2 end  -->       
    </div>
    <!--  topmleft end  -->
        
    <!--  topmright start  -->
    <div id="tab1" class="topmright">
       <div class="rightpic"><img src="/images/top10/crpic1.jpg" alt="" /></div>
       <h2>Classic China Tour</h2>
       <p>China is a popular travel destinations in the world for its great misterious culture, marvelous landscape and most colorful life. Here you can climbling the Great Wall of China with more than 5,000 years of history, feel the power of the first emperor of China, Qin Sihuang's incredible Terracotta Warriors, you can touch the unique lovely, fluffy Giant Panda, enjoy the splendid Sunrise on the top of China's No.1 Mountain-Huangshan, witness the fast development of China by visiting Hong Kong, a world-class monetary, trading and business city. BTW, Chinese Kung Fu show in Beijing Red Theater is also nice for kids to watch.</p>
       <p>Here, with the help of our dear clients, Leadtochina picked up 10 Classic China Tours covering the must-go classic attractions with distinguishing characters and in well arranged tourist routes.</p>
    </div>
    <!--  topmright end  -->
    
    <!--  why choose us start -->
    <div id="tab2" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/rpic1.jpg" alt="" /></div>
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
    
    <!--  beijing guide start -->
    <div  id="tab4" class="topmright" style=" display:none;">
       <div class="rightpic"><img src="/images/top10/crpic4.jpg" alt="" /></div>
       <p>With thousands of years of continuous history, China is one of the world's oldest civilizations. The written history of China can be found as early as the Shang Dynasty (c.1700 - 1046 BC).</p>
       <p><strong>Beijing City</strong>
       As the capital of China, Beijing is definitely the No.1 historic city. As one of the Four Great Ancient Capitals of China, it has the most wonderful attractions in China. No other city in China can compare with Beijing. Among the numerous attractions, the Forbidden City, Summer Palace, Temple of Heaven, Great Wall, Ming Tombs and Peking Man Site at Zhoukoudian are World Cultural Heritages. Beijing is the only one city on earth has the most World Cultural Heritages.</p>
       <p><strong>Xian City</strong>
       As the Second Most famous of China's ancient national capitals (after Beijing), Xian was the first capital of the China's first empire, Qin Dynasty (221B.C-207B.C). Meanwhile, Xian was also the starting point of the Silk Road. So, Xian has great number of precious relics and historical sites. Such as the Terracotta Warriors and Horses, the First Emperor's Tomb, Big Wild Goose Pagoda, Small Wild Goose Pagoda, the Great Mosque, the Ancient City Wall, The Banpo Site, the Mount Hua.</p>
        <p><strong>Shanxi Province</strong>
        Located to the west of Taihang Mountain, Shanxi Province is one birthplace of China's civilization. Legend says the Emperor Yao, Shun and Yu, legendary Chinese rulers, three of the Five Emperors, have settled down the capital in Shanxi Province, so you can figure out why Shanxi porvince is called "the province who has the most Cultural Relics on Ground" and 'Chinese Ancient Architecture Museum'. Highlights include Yungang Grotteos in Datong City, the Ancient City of Pingyao, the oldest and tallest Wooden Pagoda of Yingxian County etc.</p>
        <p><strong>Chengdu City</strong>
        The history of Chengdu can be traced back 2,400 when the first emperor built his capital here and named the city. Chengdu was the starting point of the Southern Silk Road. So, chengdu has really profound historical and cultural background, such as bronze culture, the earliest paper currency-Jiaozi, the Thatched Cottage of Du Fu, Wuhou Memorial Temple and Wenshu Monastery.</p>
    </div>
    <!--  beijing guide end -->
    
    <!--  xian guide start -->
    <div id="tab5" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/crpic5.jpg" alt="" /></div>
       <p>From the charming Yangtze River to the elegant Yulong River, from the No.1 mountain Huang to the most precipitous mountain Hua, China does have numerous natural beauties awaiting for your exploration.</p>
       <p><strong>Yangtze River Guide</strong>
       With plenty of rainfall all year round, the Yangtze River is named the golden watercourse. From Qinghai-Tibetan Plateau, the source of Yangtze River, where you can see the most beautiful night sky and also smell the purest air in the world. The great natural scenery will purify your soul. From Sichuan Province, where you can go into the kingdom of Animals and Plants. From Hubei, where you can see Shennongjia virgin forest and Three Gorges Project. From Anhui province, where you can enjoy the Mount Huang known as No.1 Mountain in China.</p>
       <p>Route from the Chongqing to Yichang is the real highlight of Yangtze Scenery including the Yangtze Three Gorges-one of the 10 most famous tour sites of China. After the amazing trip, you will realize the greatness of the Yangtze River and the diverse of our country.</p>
       <p><strong>Guilin Guide</strong>
       Located in the northeast of Guangxi Zhuang Autonomous Region, Guilin is considered to be the most beautiful city in China. The strangely shaped hills, or karsts, with the verdant vegetation ranging from bamboo to conifers together with wonderful caves make Guilin such an attraction for tourists.</p>
       <p><strong>Huangshan Guide</strong>
       Known as "No.1 Beautiful Mountain", Mountain Huang is surely the most famous and most photographede and painted mountains region in China, which was listed as a World Herige Site by UNESCO in 1990. The classic four attractions of Yellow Mountain are the curiously-shaped pines, oddly-shaped rocks, the seas of clouds, and hot springs. The nearby Anhui ancient structures are also worthy visiting. Such as Xidi Village and Hongcun Village.</p>
       <p><strong>Yangshuo Guide</strong>
Besides the breath-taking beautiful environment, the famous Li River definitely is the highlight of the Yangshuo's highlights. Along the extremely pure river, thousands of hills stand in different poses and with different expressions, such as Moon Hill, Mural Hill and Schoolboy Hill which is the natural stage of the Show "Impression Sanjie Liu ". The Yulong River, paradise for bamboo rafting; the Big Banyan, a 1,400 years old mysterious tree; Moon Hill, the most romantic place in Yangshuo. </p>
    </div>
    <!--  xian guide end -->
    
    <!--  shanghai guide start -->
    <div id="tab6" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/crpic6.jpg" alt="" /></div>
       <p>As of 2010, the combined population of officially recognised 55 ethnic minority groups comprises 8.49% of the population of mainland China.</p>
       <p><strong>Guizhou Province</strong>
       Located in southwest China, Guizhou Province is home of 48 China's ethnic groups, second only to Yunnan Province. While visiting here, you cannot miss their simple and original living habits, appreciate the unique architectural styles and try their exotic and colorful costumes, etc. Basha Miao Village, to experience their unique life styles; to Buyi Stone Village to explore how this stone village was made without any other construction materials; to Dong villages to see Dong-style drum towers and wind-rain bridges, etc. Every year, there are about 1000+ festivals celebrated by these ethnic groups in Guizhou province.The most famous festivals include Sanyuesan Festival and Sister's Meal Festival in the spring, Liuyueliu Festival in summer, and the Shui New Year Festival in autumn.</p>
       <p><strong>Ethnic Minorites along the Silk Road</strong>
       Silk Road is a historically important international trade route between China and Mediterranean, which was opened about 1,600 years ago by Han Dynasty. The majority of the population is of mixed Turkish descent. Uigurs are the largest ethnic group along the Silk Road. Kyrgyz, Kazaks, Uzbeks, and Tartars are other strongly represented ethnic groups along the Silk Road. 50% of the population is Muslim. Sophisticated irrigation systems allowed the Uigur to live on the edges of the desert.</p>
       <p><strong>Tibet Guide</strong>
       Tibetan people is an ethnic group with bold and unihibited characteristics. They take beef, mutton and dairy products as staple food, which protect them from severe cold. People usually present Hada (a ceremonial scarf) as a mark of esteem when holding celebration parties, welcoming visitors, visiting the elders or seeing someone off. Tibet is also known the world for its devout religious practices, especially in Tibetan Buddhism and Bon.</p>
       <p><strong>Yunnan Guide</strong>
       Yunnan province is a land of various ethnic groups, landscapes, natural scenery, creatures, etc. Ethnic minorities in Yunnan province make up about 1/3 of the province's population. China has 56 ethnic minorities, and 51 of them reside in Yunnan province. These ethnic minorities live together over vast areas in the region while some live in individual concentrated communities in small areas.</p>
    </div>
    <!--  shanghai guide end -->
    
    <!--  yangtze guide start -->
    <div id="tab7" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/crpic7.jpg" alt="" /></div>
       <p>Jiangnan or Jiang Nan is a geographic area in China referring to lands immediately to the south of the lower reaches of the Yangtze River, including Shanghai.</p>
       <p><strong>Hangzhou Guide</strong>
       There is a popular saying"Above there is heaven, belwo there are Hangzhou and Suzhou". Beautiful Hangzhou attracts hundreds of thousands of tourists from all over the world with its exquisite West Lake, and surrounding beautiful gardens, lavish temples and lakeside teahouses. Meanwhile, the nearby elegant water towns like Xitang and Wuzhen are also nice places to go.</p>
       <p><strong>Shanghai Guide</strong>
       As one of the world's leading economic and business cities, Shanghai is China's biggest and most prosperous city, oozes an atmosphere of vitality which can rival New York and Paris in terms of modernity. Standing in the center of downtown Shanghai, what you can see are ambitious skyscrapers. Unlike Beijing, Shanghai doesn't have many great sights. Besides, Shanghai's colonial legacy combined with things Chinese has created a unique culture, which is a fusion of the East and the West. The Bund, the waterfront of the city gives a vivid illustration of the combination of east and west cultures through its large collection of colonial architecture.</p>
       <p><strong>Suzhou</strong>
       Located in the center of the Yangtze Delta, Suzhou is an ancient city with a 2,500 years' history. The streets and rivers go side by side while the water and land routes run in parallel. While strolling the streets, you can feel the unique lingering charm of this landscape left by its long history. Meanwhile, as one of the famous tourist cities in China, Suzhou did a lot work in enhancing its basic facilities, such as convenient in and out transportations, star related hotels, authentic Suzhou cuisines.</p>
       <p><strong>Wuzhen</strong>
       Located in Tongxiang City of Zhejiang Province, Wuzhen Town is a 1000 years' old water town with ancient residential houses, workshops and stores standing on the banks of the rivers. Rivers and creeks spanned with stone bridges in various designs flow through the town, and the Beijing-Hangzhou Grand Canal passes by. While wandering on the waterside streets, the waterside pavilions and corridors and the arched bridges make up a charming scene.</p>
    </div>
    <!--  yangtze guide end -->
    
    <!--  guilin guide start -->
    <div id="tab8" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/crpic8.jpg" alt="" /></div>
       <p>LeadtoChina does have something special to surprise your expectations. from the nightlife and evening entertainment to the latest special tour deals, you'll find something worthying to do.</p>
       <p><strong>Peking Opera</strong>
       As the largest Chinese opera form, Peking Opera is the quintessence of China, extolled as "Oriental Opera". Its unique charm inspires ethos of Chinese people and regarded as the soul of Chinese national culture. There is no doubt that it is realy the treasure of Chinese culture. The Liyuan Theater in Beijing will be a good choice for you to enjoy it.</p>
       <p><strong>Shanghai Acrobatic Shows</strong>
       Chinese Acrobatics is one of the oldest performing arts. The history could be traced back to Neolithic time, when the primitive people learned how to protect themselves by using their body just like Kung Fu. gradually, together with the developing economy and history, arcobatics is also evolving into a kind of performing art and likes by more and more people.</p>
       <p><strong>Tang Dynasty Music and Dance Show</strong>
       As a wonderful performance of the ancient music and dance, the Tang Dynasty Music and Dance Show is a must when you visit Xian. It is an outstanding exponent of the prosperous and glorious Tang Dynasty (618A.D-907A.D), keeping alive its splendid culture and providing an insight into the peaceful life style of the period.</p>
       <p><strong>Kung Fu</strong>
       Kungfu, martial arts, is a traditional Chinese sport which has developed over a long historical period. The primitive Chinese ancestors have learned some primary means of attck and defence when facing the hostile environment, such as leaping, tumbling and kicking. Those are considered as the origin of the China's Wushu. The Kungfu Legend in Beijing Red Theater is very popular.</p>
       <p><strong>Impression Sanjie Liu</strong>
       Impression Sanjie Liu is a large-scaled, Real-scene Peroformance. With 600+ actors andactress involved, it is literally performed in the largest natural theater in the world. Boundless sky and 12 peaks abot 2km along Li River compose the stage of mountain and river backdrops. The 70 minutes show combines the classical Sanjie Liu's folk songs and exotic fishing culture together, reflecting the harmony between human beings and the nature.</p>
    </div>
    <!--  guilin guide end -->
    
    <!--  yunnan guide start -->
    <div id="tab9" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/crpic9.jpg" alt="" /></div>
       <p>Styles and tastes varied by class, region, and ethnic background. This led to an unparallelled range of ingredients, techniques, dishes and eating styles in what could be called Chinese food.</p>
       <p><strong>Peking Roast Duck</strong>
       If there is a dish could help you to understand Chinese cuisine quickly, that must be the Peking Roast Duck. Peking Roast Duck is shining date-red in color and unique in flavor, featuring by its crispy skin and tender texture. The best seasons for eating it are spring, autumn and winter. The hot roast duck will be brought to the dining table by the chef where he will slice it into more than 100 thin flakes, each having its piece of crispy skin. The way to enjoy it as follows: take and spread one of the small, thin pancake; roll up it with plum sauce, small slices of spring onions and then add some pieces of duck; finally take a bite. Enjoy it.</p>
       <p><strong>Chuan Cuisine</strong>
       Chuan cuisine combines the cuisines from Chengdu and Chongqing. It is recorded that 38 cooking methods involved like scald, wrap, bake, mix, stew, and adhere, etc. It features pungent seasonings which were famed as 'Three Peppers' (Chinese prickly ash, pepper and hot pepper), 'three aroma' (shallot, ginger, and garlic), 'Seven Tastes' (sweet, sour, tingling, spicy, bitter, piquant, and salty), and 'eight flavors' (fish-flavored, sour with spice, pepper-tingling, odd flavor, tingling with spice, red spicy oily, ginger sauce, and home cooking).</p>
       <p><strong>Dumplings Feast</strong>
       Dumplings, a universal favourite in China, has a long history and is an essential part of festival's food such as Chinese lunar Spring Festival. The dumpling can be anything from a quick snack to a delicacy with which to entertain family and friends or the basis of a veritable feast. Xian, home of the great dumpling tradition. It is said that to visit Xian without seeing the fantastic Terracotta Army as well as having a Dumplings Dinner means that you have not really been here at all.</p>
    </div>
    <!--  yunnan guide end -->
    
    <!--  silk road guide start -->
    <div id="tab10" class="topmright" style="display:none;">
       <div class="rightpic"><img src="/images/top10/crpic10.jpg" alt="" /></div>
       <p>China is a large country. There are many exotic and unusual things to buy in China which make wonderful souvenirs and gifts for relatives and friends back home.</p>
       <p><strong>China Silk</strong>
       Silk and silk articles contributed a lot for Chinese history and its ancient civilization. A silkworm can only produce a certain amount of silk-1000 meters (3280feet) in its lifespan of 28 days. The rarity of the raw material is the deciding factor of both the value and the mystery of silk.</p>
       <p><strong>Chinese Tea</strong>
       The history of Chinese tea is more than 4,000 years. Legend says the tea was founded by the Yan Di, one of three rulers in ancient times, who tasted all kinds of herbs to find medical cures. Tea as a drink prospered during the Tang Dynasty. Known as Tea Sage of China, Lu Yu wrote the Tea Classics, which was regarded as the cornerstone of Chinese tea culture.</p> 
       <p><strong>Jade Article</strong>
       Jade has a history in China of about 400 years. It always connects with the development of religion and civilization, such as the rites of worship and burial. The jade is associated with merit, morality, grace and dignity all the time in China.</p>
       <p><strong>Traditional Chinese Medicine</strong>
       Comparing with Western medicine, the Chinese method takes a totally different way to cure disease. With a history of over 5,000 years, it has formed a deep and immense knowledge of medical science, theory, diagnostic methods, prescriptions and cures.</p>
       <p><strong>Hongqiao Pearl Market</strong>
       Located at Tiantan Road east, Chongwen District in Beijing, Hongqiao Market is a well known market dealing with pearls around the world. It is the largest pearl distribution center in China. There are many varieties of pearls, such as colors, sizes or smoothness. They are just absolutely fascinating. </p>
       <p><strong>Ceramic Art</strong>
       In art history, ceramics and ceramic art mean art objects such as figures, tiles, and tableware made from clay and other raw materials by the process of pottery. The most famous ceramic art in China should be the Terra Cotta Warriors, discovered in Xian, are the finest representatives of artworks of Tang Dynasty (618-907), the tricolor glazed pottery of the Tang Dynasty (618 - 907), the purple clay pottery used for making teapots widely.</p>
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
       <p>Here, with the help of our dear clients, Leadtochina picked up 12 Classic China Tours covering the must-go attractions in well arranged tourist routes.</p>
    </div>
    <!--  topmright end  -->
</div>
<!--  topmiddele end  -->

<!--  index start  -->
<div class="index1">
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
   
   <!--  right start  -->
   <div id="right">
       <div class="rtoptitle"><img src="/images/top10/classictit.jpg" alt="" /></div>
      <?php foreach($toursList as $k=>$v):?>
      <?php
        switch($v['id']){
          case 17:
          $destination = '<span>Destination: Beijing</span>
<img src="/images/top10/flight.png" alt="">
<span>Xian</span>
<img src="/images/top10/flight.png" alt="">
<span>Shanghai</span>';
          break;
          case 702:
             $destination = '<span>Destination: Shanghai</span>
<img src="/images/top10/flight.png" alt="">
<span>Yichang</span>
<img src="/images/top10/ship.png" alt="">
<span>Yangtze Cruise</span>
<img src="/images/top10/ship.png" alt="">
<span>Chongqing</span>
<img src="/images/top10/flight.png" alt="">
<span>Xian</span>
<div class="clear"></div>
<img src="/images/top10/flight.png" alt="">
<span>Beijing</span>';
          break;
          case 465:
             $destination = '<span>Destination: Beijing</span>
<img src="/images/top10/car.png" alt="">
<span>Chengde</span>
<img src="/images/top10/car.png" alt="">
<span>Beijing</span>
<img src="/images/top10/flight.png" alt="">
<span>Datong</span>
<img src="/images/top10/car.png" alt="">
<span>Wutaishan</span>
<img src="/images/top10/car.png" alt="">
<span>Taiyuan</span>
<div class="clear"></div>
<img src="/images/top10/car.png" alt="">
<span>Pingyao</span>
<img src="/images/top10/train.png" alt="">
<span>Xian</span>';
          break;
          case 321:
             $destination = '<span>Destination: Shanghai</span>
<img src="/images/top10/flight.png" alt="">
<span>Beijing</span>';
          break;
          case 47:
          $destination = '<span>Destination: Guiyang</span>
<img src="/images/top10/car.png" alt="">
<span>Anshun</span>
<img src="/images/top10/car.png" alt="">
<span>Kaili</span>
<img src="/images/top10/car.png" alt="">
<span>Rongjiang</span>
<img src="/images/top10/car.png" alt="">
<span>Sanjiang</span>
<img src="/images/top10/car.png" alt="">
<span>Longsheng</span>
<img src="/images/top10/car.png" alt="">
<span>Guilin</span>';

         
          break;
          case 152:
          $destination = '<span>Destination: Beijing</span>
<img src="/images/top10/flight.png" alt="">
<span>Xian</span>';
          break;

          case 72:
           $destination = '<span>Destination: Beijing</span>
<img src="/images/top10/train.png" alt="">
<span>Xian</span>
<img src="/images/top10/train.png" alt="">
<span>Shanghai</span>';
          break;
          case 458:
          $destination = '<span>Destination: Beijing</span>
<img src="/images/top10/flight.png" alt="">
<span>Huangshan</span>
<img src="/images/top10/bus.png" alt="">
<span>Hangzhou</span>
<img src="/images/top10/car.png" alt="">
<span>Wuzhen</span>
<img src="/images/top10/car.png" alt="">
<span>Hangzhou</span>
<div class="clear"></div>
<img src="/images/top10/train.png" alt="">
<span>Shanghai</span>
<img src="/images/top10/train.png" alt="">
<span>Suzhou</span>
<img src="/images/top10/train.png" alt="">
<span>Shanghai</span>';
          break;
          case 714:
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
          case 26:
          $destination = '<span>Destination: Hong Kong</span>
	<img src="/images/top10/flight.png">
<span>Chongqing</span>
	<img src="/images/top10/ship.png">
<span>Yangtze River</span>
        <img src="/images/top10/ship.png">
<span>Yichang</span>
	<img src="/images/top10/flight.png">
<span>Shanghai</span>
<div class="clear"></div>
        <img src="/images/top10/flight.png">
<span>Xian</span>
        <img src="/images/top10/flight.png">
<span>Beijing</span>';
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
		  case 82:
          $destination = '<span>Destination: Beijing</span>
	<img src="/images/top10/flight.png">
<span>Lhasa</span>
	<img src="/images/top10/flight.png">
<span>Chengdu</span>
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
                     <p><span><img class="lazy" src="/images/grey.gif" data-original="/images/top10/classic-tour-<?php echo $v['id'];?>.jpg"  /></span>
                      <strong>Overview:</strong> <?php echo $v['note'];?>
                      <a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($v['name']),'id'=>$v['id']));?>" target="_blank"><img src="/images/top10/more.jpg" /></a>
                    </p>
                 </div>
                 <!--  overview end  -->
             </div>
             <!--  oneleft end  -->
          </div>
   