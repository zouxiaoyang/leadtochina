<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtze.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<?php Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/jquery.zxxbox.3.0-min.js');?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/mf-pattern/mF_taobao2010.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/myfocus-2.0.1.min.js');?>


<script type="text/javascript">
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_taobao2010'//style
});
</script>
<style type="text/css">
#wrapBar{display:none !important;}
.wrap_title{ display:none;}
.trip_advisor img, .customize_tour img{width:252px;margin-top:10px;}
<!--
#myFocus{ position:relative; width:940px; height:245px; overflow:hidden;}
.mF_taobao2010 .pic ul{ margin:0px; padding:0px; width:940px; height:245px; position:absolute; border:none;}
.mF_taobao2010 .pic ul li{position:relative;overflow:hidden; width:940px; height:245px;}
.mF_taobao2010 .txt li b{ width:100%; bottom:0px; left:0px;}
.mF_taobao2010 .txt li{ line-height:18px; height:18px;}
.mF_taobao2010 .num{position:absolute; right:3px;}
.mF_taobao2010 .num li{ float:left; margin-right:6px; width:10px;height:10px;overflow:hidden;border:1px solid #000; background:#ccc; cursor:pointer;}
.mF_taobao2010 .num li a{ display:none;}
.mF_taobao2010 .num li.current,.mF_taobao2010 .num li.hover{background:#E92B00;-webkit-transition:all 0.4s;-moz-transition:all 0.4s;-o-transition:all 0.4s;}
-->
</style>

<div class="clear"></div>
<!--  Yangtze Cruise start -->
<div id="content">
<div id="menu-home"><strong>You are here: </strong> <a href="/">Home</a> Yangtze Cruise</div>
<div id="banner">
    <div id="myFocus">
         <div class="pic">
  	         <ul style="width:940px;">
                 <li><a href="#1"><img src="/images/yangtze/banner01.jpg" thumb="" alt="" text="" /></a></li>
                 <li><a href="#2"><img src="/images/yangtze/banner02.jpg" thumb="" alt="" text="" /></a></li>
                 <li><a href="#3"><img src="/images/yangtze/banner03.jpg" thumb="" alt="" text="" /></a></li>
  	         </ul>
        </div>
   </div>
</div>
<!--  main start -->
<div id="main">
<!--  left start -->
<div id="left">
  <!--  text start -->
  <div class="text">
    <h2>Yangtze River Cruise</h2>
    <p>Yangtze River Cruise is the best way to appreciate the panaroma of the grand Yangtze River. Luxury <a href="/travel/yangtzecruise/ships">Cruise Ships</a> sail on the longest river in China everyday. For your convenience, LeadtoChina collect Yangtze River Tours, 2013 <a href="/travel/yangtzecruise/calendar">Yangtze River Calendar</a>, 4 and 5 star cruise ships with great discount and all China river cruise information. You may aslo consult our tour advisor on line for a wiser Yangtze cruises choice.</p>
  </div>
  <!--  text end -->

  <!--  menu-list start -->
  <div class="menu-list">
    <h2>Cruise Ships</h2>
    <ul id="cruise_change_tab">
      <?php foreach(Cruise::$category as $k=>$v):?>
        <?php if($k!=0&&$k!=5):?><li onclick="_cruise.recommendTab(<?php echo $k;?>);"><span class="small"><?php echo $v;?></span></li><?php endif;?>
      <?php endforeach;?>

    </ul>
  </div>
  <!--  menu-list end -->

  <!--  menu-content start -->
  <div class="menu-content">
    <?php foreach(Cruise::$category as $k=>$v):?>
      <div id="cruise_recommend_<?php echo $k;?>" class="content1" <?php if($k!=1) echo 'style="display:none"';?>>
        <?php foreach((array)$data[$k] as $cruise):?>
        <ul>
          <li class="pic"><a href="<?php echo $cruise->getUrl();?>"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$cruise->ufile,'147x96');?>" alt="<?php echo $cruise->cruise_name;?>" width="147" height="70" /></a></li>
          <li><a href="<?php echo $cruise->getUrl();?>"><?php echo $cruise->cruise_name;?></a></li>
          <li class="starnew"><span class="star<?php echo $cruise->cruise_grade;?>"></span></li>
          <li class="feature"><?php echo $cruise->feature;?></li>
          <li>From:<span><?php echo SiteUtils::getCurrencyPrice($cruise->uplowprice);?></span> p/p</li>
          <li><a href="<?php echo $cruise->getUrl();?>#orderForm"><img src="/images/yangtze/enquiry.jpg" /></a></li>
        </ul>
        <?php endforeach;?>
        <div class="clear"></div>
        <h2><a style="height:21px; line-height:21px;" href="<?php echo Yii::app()->createUrl('cruise/ships');?>" target="_blank"> <span>Find out more Ships &raquo;</span> <img style="width:27px; height:21px; float:right;" src="/images/yangtze/ship.png" alt="" /></a></h2>
      </div>
    <?php endforeach;?>


    <!--  recommend start -->
    <div class="recommend">
      <div class="title"><strong>China Tours including Yangtze River Cruise</strong></div>
      <!--  recomm-list start -->
      <div class="recomm-list">
        <ul>
          <li class="pic"><img src="/images/yangtze/ship2.jpg" alt="" />
             <span class="view"><a href="javascript:showTreasures('1');"><img src="/images/yangtze/view.png" alt="" /></a></span>
          </li>
          <li>
            <ol>
              <li><h2>Fantastic Yangtze River Cruise</h2></li>
              <li class="destin">
                 <table border="0" cellspacing="0" cellpadding="0">
                   <tr>
                      <td colspan="2"><strong>Destination:</strong> Beijing, Chongqing, Yangtze River, Yichang, Shanghai</td>
                   </tr>
                   <tr> 
                     <td width="234"><span><a href="/tour/yct-10.html">Budget: 8 days</a> <?php echo SiteUtils::getCurrencyPrice(1998);?></span></td>
                     <td width="178" rowspan="3"><img src="/images/yangtze/save.jpg" alt="" style=" width:178px; height:56px; float:right; display:block;" /></td>
                   </tr>
                   <tr>
                     <td><span><a href="/tour/yct-11.html">Standard: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2275);?></span></td>
                   </tr>
                   <tr>
                     <td><span><a href="/tour/yct-12.html">Luxury: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2432);?></span></td> 
                   </tr>
                </table>
              </li>
              <li>A better and comfort way to enjoy China's stunning landscapes, dynamic culture and exceptional architecture? It must be the Yangtze River Cruise, which is often part of China Tour with Great Wall and Frobidden City in Beijing, Yuyuan Garden and Bund in Shanghai.</li>
            </ol>
          </li>
        </ul>
        <ul>
          <li class="pic"><img src="/images/yangtze/ship5.jpg" alt="" />
             <span class="view"><a href="javascript:showTreasures('2');"><img src="/images/yangtze/view.png" alt="" /></a></span>
          </li>
          <li>
            <ol>
              <li><h2>Memorable Yangtze River Experience</h2></li>
              <li class="destin">
                 <table border="0" cellspacing="0" cellpadding="0">
                   <tr>
                      <td colspan="2"><strong>Destination:</strong> Beijing, Xian, Chongqing, Yangtze River, Yichang and Shanghai</td>
                   </tr>
                   <tr> 
                     <td width="292"><span><a href="/tour/bct-10.html">Budget: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2018);?></span></td>
                     <td width="178" rowspan="3"><img src="/images/yangtze/save.jpg" alt="" style=" width:178px; height:56px; float:right; display:block;" /></td>
                   </tr>
                   <tr>
                     <td><span><a href="/tour/bct-11.html">Standard: 11 days</a> <?php echo SiteUtils::getCurrencyPrice(2661);?></span></td>
                   </tr>
                   <tr>
                     <td><span><a href="/tour/yct-09.html">Luxury: 11 days</a> <?php echo SiteUtils::getCurrencyPrice(2707);?></span></td> 
                   </tr>
                </table>
              </li>
              <li>Xian, equivalent to ancient Roman Empire's capital-Rome, is one of eight ancient capitals in China's history. It is the ancient capitals of 13 dynasties with 3100 years history, which means Xian has numerous cultural relics, such as Terracotta Warriors, City Wall, Big Wild Goose Pagoda Etc,.</li>
            </ol>
          </li>
        </ul>
        <ul>
          <li class="pic"><img src="/images/yangtze/ship71.jpg" alt="" />
             <span class="view"><a href="javascript:showTreasures('3');"><img src="/images/yangtze/view.png" alt="" /></a></span>
          </li>
          <li>
            <ol>
              <li><h2>Memorable Yangtze Tour from Shanghai</h2></li>
              <li class="destin">
                 <table border="0" cellspacing="0" cellpadding="0">
                   <tr>
                      <td colspan="2"><strong>Destination:</strong> Shanghai,Yangtze River, Guilin, Yangshuo, Xian, Beijing</td>
                   </tr>
                   <tr> 
                     <td width="292"><span><a href="/index.php?option=com_showpc&view=default&pcid=701">Budget: 7 days</a> <?php echo SiteUtils::getCurrencyPrice(1025);?></span></td>
                     <td width="178" rowspan="3"><img src="/images/yangtze/save.jpg" alt="" style=" width:178px; height:56px; float:right; display:block;" /></td>
                   </tr>
                   <tr> 
                     <td><span><a href="/index.php?option=com_showpc&view=default&pcid=702">Standard: 12 days</a> <?php echo SiteUtils::getCurrencyPrice(1520);?></span></td>
                   </tr>
                   <tr>
                     <td><span><a href="/index.php?option=com_showpc&view=default&pcid=703">Luxury: 14 days</a> <?php echo SiteUtils::getCurrencyPrice(2290);?></span></td> 
                   </tr>
                </table>
              </li>
              <li>Owing to its gifted geographic location, Shanghai has become a well--known sea and river port, boasting easy accesses to a vast hinterland. With a population reaching to 200million, Shanghai is the largest city of China, and also an international metropolis serving as the most influential economic, financial, international trade, cultural, science and technology center in East China.</li>
            </ol>
          </li>
        </ul>
        <ul style="border-bottom:none;">
          <li class="pic"><img src="/images/yangtze/ship8.jpg" alt="" />
             <span class="view"><a href="javascript:showTreasures('4');"><img src="/images/yangtze/view.png" alt="" /></a></span>
          </li>
          <li>
            <ol>
              <li><h2>Yangtze Cruise from Hong Kong</h2></li>
              <li class="destin">
                 <table border="0" cellspacing="0" cellpadding="0">
                   <tr>
                      <td colspan="2"><strong>Destination:</strong> Hong Kong, Chongqing, Yangtze River, Yichang, Shanghai, Xian, Beijing</td>
                   </tr>
                   <tr> 
                     <td width="287"><span><a href="/tour/yct-01.html">Budget: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2540);?></span></td>
                     <td width="178" rowspan="3"><img src="/images/yangtze/save.jpg" alt="" style=" width:178px; height:56px; float:right; display:block;" /></td>
                   </tr>
                   <tr>
                     <td><span><a href="/tour/yct-02.html">Standard: 11 days</a> <?php echo SiteUtils::getCurrencyPrice(2759);?></span></td> 
                   </tr>
                   <tr>
                     <td><span><a href="/tour/yct-03.html">Luxury: 12 days</a> <?php echo SiteUtils::getCurrencyPrice(2880);?></span></td> 
                   </tr>
                </table>
              </li>
              <li>Hong Kong has been always one of the world's most popular tours for its incredible landscape, shopping and food paradise, and multiple cultures. It has so many wonderful places to visit that one can hardly take all of them at one time or even through a lifetime, a little small in size though.</li>
            </ol>
          </li>
        </ul> 
        <div class="clear"></div>
        <div class="more"><a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?city=Yangtze+River" target="_blank"> <span>Find out more Yangtze Tours &raquo;</span> <img style="width:32px; height:17px; float:right;" src="/images/yangtze/car.png" alt="" /></a></div>
      </div>
      <!--  recomm-list end -->
    </div>
    <!--  recommend end -->

    <!--  wonderful start -->
    <div class="clear"></div>
    <div class="title" style="margin-top:20px;"><strong>Wonderful Yangtze Cruise with</strong></div>
    <div class="wonderful">
      <!--  wonder-left start -->
      <div class="wonder-left">
        <img src="/images/yangtze/1.jpg" alt="" />
        <span>Comfort and Safety Guest Room</span>
        Standard room with twin beds is well equipped with Picture Window or Private Balcony, Central Air-conditioning, 24 hours hot water, satellite TV, Phone, Small Refrigerator, bar etc.
      </div>
      <!--  wonder-left end -->

      <!--  wonder-right start -->
      <div class="wonder-right">
        <img src="/images/yangtze/2.jpg" alt="" />
        <span>Thoughtful Star Level Services</span>
        All the crew on the cruise is professional service staff trained by Hotel Management Training Center, ready to help you in 24 hours with smile.      </div>
      <!--  wonder-right end -->
      <div class="clear"></div>
      <!--  wonder-left start -->
      <div class="wonder-left">
        <img src="/images/yangtze/3.jpg" alt="" />
        <span>Relaxed Ways to Enjoy Scenery</span>
        Yangtze Cruise has Indoor Viewing Hall and the whole floor Viewing Deck for tourists to use. The Observation deck, front and rear leisure deck on the top are equipped with beach chairs or café bar, give you 360 degrees to enjoy the beautiful Three Gorges.
      </div>
      <!--  wonder-left end -->

      <!--  wonder-right start -->
      <div class="wonder-right">
        <img src="/images/yangtze/4.jpg" alt="" />
        <span>Strong Local Characteristic Onshore Sightseeing</span>
        All the attractions included in the package have strong local characteristics. Three Gorges Dam, Fengdu Ghost Town, Shibao Town, Shennong Strem or Lesser Three Gorges are the must see attractions.
      </div>
      <!--  wonder-right end -->
      <div class="clear"></div>
      <!--  wonder-left start -->
      <div class="wonder-left">
        <img src="/images/yangtze/5.jpg" alt="" />
        <span>Cate Tour</span>
        The rich Chinese&Western breakfast buffet and marvelous Sichuan cuisines, as well as the unique Yangtze aquatic products, will please your appetite. Personal appetite is respected here too!
      </div>
      <!--  wonder-left end -->

      <!--  wonder-right start -->
      <div class="wonder-right">
        <img src="/images/yangtze/6.jpg" alt="" />
        <span>Rich and Colorful Recreational activities</span>
        The cultural and recreational activities on the cruise, the Cultural Lecture, Dancing &Sing Performance, Taiji Exercise, Mahjong Competition etc., will highlight your stay on Yangtze cruise.
      </div>
      <!--  wonder-right end -->
    </div>
    <!--  wonderful end -->
  </div>
  <!--  menu-content end -->
</div>
<!--  left end -->

<!--  right start -->
<div id="right">
  <?php $this->renderPartial('_rightSearch');?>

 <?php if($index_recommend):?>
  <!--  right2 start -->
  <div class="right2">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="<?php echo $index_recommend->getUrl();?>"><img src="<?php echo ImageUtils::getThumbnail(Cruise::UPLOAD_PATH.$index_recommend->ufile,'232x180');?>" alt="<?php echo $index_recommend->cruise_name;?>" /></a></td>
      </tr>
      <tr>
        <td><a href="<?php echo $index_recommend->getUrl();?>"><?php echo $index_recommend->cruise_name;?></a></td>
      </tr>
      <tr>
        <td>
           <table border="0" cellspacing="0" cellpadding="0">
               <tr>
                   <td valign="top"><strong>Route:</strong> </td>
									 <td><?php echo Cruise::$upCityDays[$index_recommend->upcity].Cruise::$upCityArr[$index_recommend->upcity]." <br /> ".Cruise::$downCityDays[$index_recommend->downcity].Cruise::$downCityArr[$index_recommend->downcity]?></td>
              </tr>
           </table>
      </tr>
      <tr>
        <td>From:<span>$<?php echo $index_recommend->downlowprice;?></span> p/p</td>
      </tr>
      <tr>
        <td><strong>Feature:</strong><?php echo $index_recommend->feature;?></td>
      </tr>
      <tr>
        <td><strong>Recommend Reason: </strong><?php echo $index_recommend->recommend_by_editor;?></td>
      </tr>
    </table>
  </div>
  <!--  right2 end -->
   <?php endif;?>

  <!--  right3 start -->
  <div class="right3">
    <h2>Yangtze River Scenic Spots</h2>
    <div class="clear"></div>
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="padding-right:2px;"><a href="/yangtze-river/qutang-gorge.html"><img src="/images/yangtze/spots1.jpg" alt="" /></a></td>
        <td><a href="/yangtze-river/wuxia-gorge.html"><img src="/images/yangtze/spots2.jpg" alt="" /></a></td>
      </tr>
      <tr>
        <td style="padding-right:2px;"><a href="/yangtze-river/xiling-gorge.html"><img src="/images/yangtze/spots3.jpg" alt="" /></a></td>
        <td><a href="/yangtze-river/three-gorge-dam.html"><img src="/images/yangtze/spots4.jpg" alt="" /></a></td>
      </tr>
      <tr>
        <td colspan="2"><a href="/yangtze-river/shibaozhai.html"><img src="/images/yangtze/spots5.jpg" alt="" /></a></td>
      </tr>
    </table>
  </div>
  <!--  right3 end -->

  <!--  right4 start -->
  <div class="right4" style="margin-bottom:15px;">
    <h2><a href="<?php echo Yii::app()->createUrl("/faq/27/On+Board+Experience")?>">Yangtze River FAQS</a></h2>
    <a href="<?php echo Yii::app()->createUrl("/faq/27/On+Board+Experience")?>"><img src="/images/yangtze/faqs.jpg" alt="" style=" width:232px; height:71px; float:left; display:block;" /></a>
    <div class="clear"></div>
    <ul>
      <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=2">What is the on board smoking policy?</a></li>
      <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=3">Do the cabins have safes?</a></li>
      <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=10">Are there laundry services aboard?</a></li>
      <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=12">Are special diets catered for?</a></li>
      <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=14">Do the staffs onboard speak English?</a></li>
    </ul>
  </div>
  <div class="clear"></div>
  <?php $this->renderPartial('/common/customizeTour');?>
  <?php $this->renderPartial('/common/tripAdvisor');?>

  <!--  right4 end -->
</div>
<!--  right end -->
</div>
<!--  main end -->
</div>
<!--  Yangtze Cruise end -->





<!-- Recommended Yangtze River Tours pop div start-->
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
  <!-- Recommended Yangtze River Tours pop div end-->       
<script>
function showTreasures(num){
	//$('.treasures'+num).show();
	$('.treasures'+num).zxxbox(
			{ bar: true,
			  bgclose: true,
			  bg: true
		    }
	);
}
</script>
