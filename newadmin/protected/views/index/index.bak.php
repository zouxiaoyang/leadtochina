<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/indexnew.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/myfocus-2.0.1.min.js');?>
<script type="text/javascript">
//设置
myFocus.set({
  id:'myFocus',
  pattern:'mF_classicHC'
});
</script>
<style type="text/css">
<!--
#myFocus{ position:relative; width:563px; height:304px; overflow:hidden;}
#CDSWIDSSP .widSSPData .widSSPInformation{padding: 8px 0 10px;}
#CDSWIDSSP .widSSPData .widSSPReviews .widSSPH11{ padding-top:6px;}
#CDSWIDSSP .widSSPData .widSSPAll{ margin-bottom:0px;}
#CDSWIDSSP .widSSPData .widSSPH11{ padding: 5px 0 3px;}
#CDSWIDSSP .widSSPData .widSSPBranding{ margin-bottom:3px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {display:none;}
#CDSWIDSSP .widSSPData .widSSPH18{display:none;}
-->
</style>
<div id="index">
   <!-- quick start -->
   <div class="quick">
      <div class="customize" style="width:128px; height:115px; position:absolute; right:2px; top:10px; left:auto;"><img src="/images/index/celebrating.png" alt="" /></div>
      <h2><img src="/images/index/quick.png" alt="" /></h2>
      <!-- search start -->
      <div class="search">
         <strong>Your Duration:</strong>
         <select name="days" id="choose_days" style="width:170px;">
                           <option value="Choose Duration">Choose Duration</option>
                           <option value="Half Day">Half Day</option>
                           <option value="1 Day">1 Day</option>
                           <option value="2 Days">2 Days</option>
                           <option value="3 Days">3 Days</option>
                           <option value="4 Days">4 Days</option>
                           <option value="5 Days">5 Days</option>
                           <option value="6-7 Days">6-7 Days</option>
                           <option value="8-10 Days">8-10 Days</option>
                           <option value="11-15 Days">11-15 Days</option>
                           <option value="Over 15 Days">Over 15 Days</option>
                      </select><br />
              <strong>Your Budget:</strong>
             <select name="price" id="choose_price">
                               <option value="">Choose Price</option>
                               <option value="$1-$899">$1-$899</option>
                               <option value="$900-$1299">$900-$1299</option>
                               <option value="$1300-$1699">$1300-$1699</option>
                               <option value="$1700-$1999">$1700-$1999</option>
                               <option value="Over $2000">Over $2000</option>
              </select>  
              <div class="clear"></div>
           <!--  box start  -->     
           <div class="box">
               <ul>
                  <li><input type="checkbox" value="Beijing" class="checkbox" name="city2[]"> Beijing</li>
                  <li><input type="checkbox" class="checkbox" value="Shanghai" name="city2[]"> Shanghai</li>
                  <li><input type="checkbox" class="checkbox" value="Xian" name="city2[]"> Xian</li>
                  <li><input type="checkbox" class="checkbox" value="Guilin" name="city2[]"> Guilin</li>
                  <li><input type="checkbox" class="checkbox" value="Tibet(Lhasa)" name="city2[]"> Tibet(Lhasa)</li>
                  <li><input type="checkbox" class="checkbox" value="Huangshan" name="city2[]"> Huangshan</li>
                  <li><input type="checkbox" class="checkbox" value="Chengdu" name="city2[]"> Chengdu</li>
                  <li><input type="checkbox" class="checkbox" value="Hangzhou" name="city2[]"> Hangzhou</li>
                  <li><input type="checkbox" class="checkbox" value="Hong Kong" name="city2[]"> Hong Kong</li>
                  <li><input type="checkbox" value="Yangtze River" class="checkbox" name="city2[]"> Yangtze River</li>
                  <li><input type="checkbox" class="checkbox" value="Silk Road" name="city2[]"> Silk Road</li>
                  <li><input type="checkbox" class="checkbox" value="Suzhou" name="city2[]"> Suzhou</li>
                  <li style="width:100%;"><span id="more_index">Select more cities</span></li>
                 </ul>
              </div>      
              <!--  box end  -->                        
      </div>
      <!-- search end -->

      <form name="toursearchpanelform" method="get" action="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>">
          <input type="hidden" name="city" id="menu_city" value="" />
          <input type="hidden" name="days" id="menu_days" value="" />
          <input type="hidden" name="price" id="menu_price" value="" />
      </form>
      
      <!-- chat start -->
      <div class="chat">
                 <a href="javascript:;" onclick="submit_form();"><img src="/images/index/button.png" /></a>
                 <a href="/travel/advance-search" style=" color:#9b080a; padding-top:5px; padding-left:10px; text-decoration:underline;">Advanced Search</a>
                 <div class="clear"></div>
                 <p>Need China tour assistance?<br />
                 <span><strong>Tel : +86-551-65355416</strong><br />
                 (Work Time:Am9:00--Pm18:00)</span></p>
      </div>
      <!-- chat end -->
   </div>
   <!-- quick end -->
   
   <!--  banner start  -->
   <div class="banner">
     <!--  myFocus start  -->
     <div id="myFocus">
         <div class="pic">
             <ul>
                  <li><a href="/travel/adoption"><img src="/images/index/banner9.jpg" thumb="" alt="" text="" /></a></li>
                  <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5"><img src="/images/index/banner10.jpg" thumb="" alt="" text="" /></a></li>
                  <li><a href="/travel/promotion"><img src="/images/index/banner8.jpg" thumb="" alt="" text="" /></a></li>
                  <li><a href="/index.php?option=com_diy&template=customize_index" target="_blank"><img src="/images/index/banner4.jpg" thumb="" alt="" text="" /></a></li>  
                  <li><a href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html" target="_blank"><img src="/images/index/banner1.jpg" thumb="" alt="" text="" /></a></li>
                  <li><a href="/Chinese-New-Year.html" target="_blank"><img src="/images/index/banner13.jpg" thumb="" alt="" text="" /></a></li>
             </ul>
         </div>
      </div>
      <!--  myFocus end  -->
      <div class="text">
         <h2>China Travel Expert - Make Trip Better & Easier</h2>
         <p>LeadtoChina is one of the largest China travel agency which provides over 500 China tour itineraries with premium quality  and competitive price. All the packages here can be tailored to your interests and budget. Whatever you want for the trip, we can plan the ideal itinerary with detailed knowledge. Meanwhile, we have detailed China travel guide information for your reference.</p>
      </div>
   </div>
   <!--  banner end  -->
   <div class="clear"></div>
   <!-- <div class="notice"><a href="/travel/early-bird-discounts"><strong>Notice:</strong> Book China Tours Three Months in Advance, save <span>5%</span> discount !</a></div> -->
   <div class="menu-index" id="index_tab">
      <span class="dq">FEATURED</span>
      <span>HERITAGE TOURS</span>           
      <span>BEIJING TOURS</span>            
      <span>YANGTZE CRUISE</span>
   </div>
   <div id="c01">
      <ul>
         <li><a href="<?php echo Yii::app()->createUrl('adoption');?>"><img src="/images/index/fpic1.jpg" alt="" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('adoption');?>">China Homeland Tours</a></li>
      </ul>
      <ul>
         <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>"><img src="/images/index/fpic2.jpg" alt="" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tour</a></li>
      </ul>
      <ul>
         <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>"><img src="/images/index/fpic3.jpg" alt="" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xi'an Tour</a></li>
      </ul>
<?php /*?> <ul>
         <li><a href="<?php echo Yii::app()->createUrl('cruise/index');?>"><img src="/images/index/fpic4.jpg" alt="" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise Tour</a></li>
      </ul>
<?php */?>      <ul>
         <li><a href="<?php echo Yii::app()->createUrl('chinaTours/JewishTours');?>"><img src="/images/index/fpic6.jpg" alt="" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('chinaTours/JewishTours');?>">Jewish Tour of China</a></li>
      </ul>
      <ul style="margin-right:0px;">
         <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5"><img src="/images/index/fpic5.jpg" alt="" /></a></li>
         <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port Excursions</a></li>
      </ul>
   </div>
   
   
   <div id="c02"  style="display:none;">
      <ul>
         <li><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1"><img src="/images/index/hpic1.jpg" alt="" /></a></li>
         <li><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1">2015 GROUP TOUR I</a></li>
      </ul>
      <ul>
         <li><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2"><img src="/images/index/hpic2.jpg" alt="" /></a></li>
         <li><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2">2015 GROUP TOUR II</a></li>
      </ul>
      <ul>
         <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageVisit');?>"><img src="/images/index/hpic3.jpg" alt="" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageVisit');?>">Orphanage Visits</a></li>
      </ul>
      <ul>
         <li><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>"><img src="/images/index/hpic4.jpg" alt="" /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>">Customize Your Own Tour</a></li>
      </ul>
      <ul style="margin-right:0px;">
         <li><a href="/travel/adoption/privateTours"><img src="/images/index/hpic5.jpg" alt="" /></a></li>
         <li><a href="/travel/adoption/privateTours">Private Tours by Province</a></li>
      </ul>
      <div class="clear"></div>
      <div class="morenew"><a href="<?php echo Yii::app()->createUrl('adoption');?>">More &raquo;</a></div>
   </div>
   
   
   <div id="c03"  style="display:none;">
      <ul>
         <li><a href="/travel/china-4-days-best-beijing-private-tours-103.html"><img src="/images/index/bpic1.jpg" alt="" /></a></li>
         <li><a href="/travel/china-4-days-best-beijing-private-tours-103.html">4 Days Best Beijing Private Tours</a></li>
      </ul>
      <ul>
         <li><a href="/travel/china-visa-free-3-days-beijing-classical-private-tour-683.html"><img src="/images/index/bpic2.jpg" alt="" /></a></li>
         <li><a href="/travel/china-visa-free-3-days-beijing-classical-private-tour-683.html">3 Days Visa-Free Beijing Private Tour</a></li>
      </ul>
      <ul>
         <li><a href="/travel/china-1-day-private-mutianyu-great-wall-tours-312.html"><img src="/images/index/bpic3.jpg" alt="" /></a></li>
         <li><a href="/travel/china-1-day-private-mutianyu-great-wall-tours-312.html">1 Day Private Mutianyu Great Wall Tours</a></li>
      </ul>
      <ul>
         <li><a href="/travel/china-2-days-explore-the-world-heritage-in-beijing-333.html"><img src="/images/index/bpic4.jpg" alt="" /></a></li>
         <li><a href="/travel/china-2-days-explore-the-world-heritage-in-beijing-333.html">2 Days Explore the World Heritage in Beijing</a></li>
      </ul>
      <ul style="margin-right:0px;">
         <li><a href="/travel/china-4-days-classic-beijing-group-tours-90.html"><img src="/images/index/bpic5.jpg" alt="" /></a></li>
         <li><a href="/travel/china-4-days-classic-beijing-group-tours-90.html">4 Days Classic Beijing Coach Tours</a></li>
      </ul>
      <div class="clear"></div>
      <div class="morenew"><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">More &raquo;</a></div>
   </div>
   
   <div id="c04" style="display:none;">
      <div class="c04left">
        <ul>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=3"><img src="/images/index/ypic1.jpg" alt="" /></a></li>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=3">Victoria Cruises</a></li>
         <li>
           <ol>
              <li><a href="/travel/yangtzecruise/13/victoria-lianna">Victoria Lianna</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/15/victoria-grace">Victoria Grace</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/16/victoria-selina">Victoria Selina</a><img src="/images/index/star.jpg" alt="" /></li>
           </ol>
         </li>
        </ul>
        <ul>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=1"><img src="/images/index/ypic2.jpg" alt="" /></a></li>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=1">President Cruises</a></li>
         <li>
           <ol>
              <li><a href="/travel/yangtzecruise/29/president-no1">President NO.1</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/44/president-no8">President No.8</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/46/president-no7">President No.7</a><img src="/images/index/star.jpg" alt="" /></li>
           </ol>
         </li>
        </ul>
        <ul>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=2"><img src="/images/index/ypic3.jpg" alt="" /></a></li>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=2">New Century</a></li>
         <li>
           <ol>
              <li><a href="/travel/yangtzecruise/19/century-sky">Century Sky</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/48/century-legend">Century Legend</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/49/century-sun">Century Sun</a><img src="/images/index/star.jpg" alt="" /></li>
           </ol>
         </li>
        </ul>
        <ul>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=4"><img src="/images/index/ypic4.jpg" alt="" /></a></li>
         <li><a href="/travel/yangtzecruise/ships/category-list?category=4">Gold Cruises</a></li>
         <li>
           <ol>
              <li><a href="/travel/yangtzecruise/45/yangtze-gold-1">Yangtze Gold 1</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/51/yangtze-gold-2">Yangtze Gold 2</a><img src="/images/index/star.jpg" alt="" /></li>
              <li><a href="/travel/yangtzecruise/55/yangtze-gold-3">Yangtze Gold 3</a><img src="/images/index/star.jpg" alt="" /></li>
           </ol>
         </li>
        </ul>
      </div>
      <div class="calnew">
               <div class="callist">
                   <table cellspacing="0" cellpadding="0" border="0">
                     <tbody>
                         <?php 
                        $month_arr = array_chunk(range(1,12),4);
                      ?>
                      <?php foreach($month_arr as $arr):?>
                        <tr>
                            <?php foreach($arr as $v):?>
                            <td <?php if($v%4 == 0):?> style="border-right:none;" <?php endif;?>>
                              <?php if(date("m") == $v):?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?>.<span>2015</span></a>
                              <?php elseif(date("m")<$v):?>
                              <a style="color:#000000" href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?>.<span>2015</span></a>
                              <?php else:?>
                              <?php echo date('M',strtotime(date("Y-".$v."-d")));?>.<span>2015</span>
                              <?php endif;?>
                              </td>
                            <?php endforeach;?>
                        </tr>
                      <?php endforeach;?>

                      
                     </tbody>
                   </table>
               </div>
            </div>
      <div class="clear"></div>
      <div class="morenew"><a href="<?php echo Yii::app()->createUrl('cruise/index');?>">More &raquo;</a></div>
   </div>
   
   <div class="clear"></div>
   <!-- recommend start -->
   <!-- 
   <div class="recommend">
      <ul>
         <li><img src="/images/index/recommend1.jpg" alt="" /><span><a href="/travel/city-beijing-tours">1-8 days<br /><strong>Private/Group Beijing Tours</strong><br />Beijing Side Trips<br />On Sale</a></span></li>
         <li><img src="/images/index/recommend2.jpg" alt="" /><span><a href="/travel/beijing-xian-tours">1-6 days Xian<br />Terra Cotta Warriors<br />Tours from Beijing<br />By Flight/ Train</a></span></li>
         <li><img src="/images/index/recommend3.jpg" alt="" /><span><a style="padding-top:20px; height:180px;" href="/travel/beijing-shanghai-tours">1-8 days<br />Beijing Shanghai Tours<br />Shanghai Beijing Tours<br />Shanghai Tours<br />Beijing Tours<br />By Flight/ Train</a></span></li>
         <li><img src="/images/index/recommend6.jpg" alt="" /> <span><a href="/travel/adoption">China Homeland Tours<br />Root-seeking<br />Orphanage Visiting<br />China Heritage Tour</a></span></li>
         <li style="margin-right:0px;"><img src="/images/index/recommend4.jpg" alt="" /><span><a href="/travel/yangtzecruise/">Luxury Cruise Ships<br />China Cruise Tours<br />2015 Cruise Calendar</a></span></li>
      </ul>
   </div> -->
   <!-- recommend end -->
   <div class="clear"></div>
   <!--  left start  -->
   <div class="left">
      <!--  why start  -->
      <div class="why">
          <h2></h2>
          <ul>
             <li><strong>Reliable China Travel Agency</strong>
                 Licensed by China National Tourism Administration.</li>
             <li><strong>Professional China Tour Consultants</strong>
                 24/7 One-for-one service, you may get quote timely.</li>
             <li><strong>Flexible DIY and Tailor make Tours</strong>
                 We can design the China tour itinerary to meet your demand.</li>
             <li><strong>No Forced Shopping and Hidden Charges</strong>
                 We keep our promises to be a trustworthy China travel service.</li>
             <li><strong>Flexible Last Minute Changes</strong>
                 We will coordinate all things to make your trip better.</li>
          </ul>
      </div>
      <!-- tours start -->
      <div class="toursindex">
         <!-- types start -->
         <div class="types">
           <ul>
              <li class="pic"><a href="/chinatour/"><img src="/images/index/types.jpg" alt="" /></a></li>
              <li><a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('chinaTours/classicTours');?>">Classic China tour</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze River Tours</a></li>
<?php /*?>    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">Tibet Impression</a></li>
<?php */?>    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/JewishTours');?>">China Jewish Heritage Tour</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('adoption');?>">China Adoption Travel</a></li>
<?php /*?>    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/trainTravel');?>">China Train Travel</a></li>
<?php */?>    <li><a href="<?php echo Yii::app()->createUrl('china-student-tours');?>">Student Trips to China</a></li>
           </ul>
         </div>
         <!-- types end -->
         
         <!-- destinations start -->
         <div class="destinations">
           <ul>
              <li class="pic"><a href="/citytour/"><img src="/images/index/destinations.jpg" alt="" /></a></li>
              <li><a href="/travel/city-beijing-tours">Beijing Tours</a></li>
              <li><a href="/shanghai/tours/">Shanghai Tours</a></li>
              <li><a href="/xian/tours/">Xian Tours</a></li>
              <li><a href="/guilin/tours/">Guilin Tours</a></li>
              <li><a href="/chengdu/tours/">Chengdu Tours</a></li>
              <li><a href="/lhasa/tours/">Lhasa Tours</a></li>
           </ul>
         </div>
         <!-- destinations end -->
      </div>
      <!-- tours end -->
      <div class="clear"></div>
      <!-- month start  -->
      <div class="month">
            <h2></h2>
            <div class="clear"></div>
            <table border="0" cellspacing="0" cellpadding="0">
                <tbody>
                   <tr>
                      <td rowspan="2"><img src="/images/index/2013.jpg" alt="" /></td>
                      <td <?php if(date('m') == 1):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,1)">Jan.</span></td>
                      <td <?php if(date('m') == 2):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,2)">Feb.</span></td>
                      <td <?php if(date('m') == 3):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,3)">Mar.</span></td>
                      <td <?php if(date('m') == 4):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,4)">Apr.</span></td>
                      <td <?php if(date('m') == 5):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,5)">May.</span></td>
                      <td <?php if(date('m') == 6):?>class="dq"<?php endif;?> style="border-right:none;"><span onclick="changeMonthCity(this,6)">Jun.</span></td>
                   </tr>
                   <tr>
                      <td <?php if(date('m') == 7):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,7)">Jul.</span></td>
                      <td <?php if(date('m') == 8):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,8)">Aug.</span></td>
                      <td <?php if(date('m') == 9):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,9)">Sep.</span></td>
                      <td <?php if(date('m') == 10):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,10)">Oct.</span></td>
                      <td <?php if(date('m') == 11):?>class="dq"<?php endif;?>><span onclick="changeMonthCity(this,11)">Nov.</span></td>
                      <td <?php if(date('m') == 12):?>class="dq"<?php endif;?> style="border-right:none;"><span onclick="changeMonthCity(this,12)">Dec.</span></td>
                   </tr>
                </tbody>
             </table>

            <?php for($i=1; $i<=12; $i++):?>
            <div class="recommend_city_list city" id="city<?php echo $i?>" <?php if((int)date('m') != $i):?>style="display:none"<?php endif;?>>
              <?php foreach($index_recommend_cities[$i] as $v): ?>
                <ul>
                <li class="pic"><a href="<?php echo $v['url'];?>"><img src="/travel/images/uploads/index_recommend/<?php echo $v['pic'];?>" /></a></li>
                <li><a href="<?php echo $v['url'];?>"><?php echo $v['city_name'];?></a>
                    <?php echo $v['description'];?>
                   </li>
                </ul>
            <?php endforeach;?>
             </div>
          <?php endfor;?>

         </div>
      <!-- month end  --> 
      <!-- ideas start  -->
      <div class="ideas">
           <h2></h2>
           <ul>
              <li class="pic"><img src="/images/index/ideas.jpg" alt="" /></li>
              <li>
                  <a href="/travel/things/20-beautiful-places-to-visit-in-china-1636.html">· 20 Beautiful Places to Visit in China</a>
                  <a href="/travel/things/beautiful-spring-tour-in-huangshan-mountain-area-1634.html">· Beautiful Spring Tour in Huangshan</a>
                  <a href="/travel/things/cycling-in-yangshuo-countryside-1633.html">· Cycling in Yangshuo Countryside</a>
                  <a href="/travel/things/mystery-of-the-design-and-figures-of-beijing-forbidden-city-1632.html">· Mystery of the Beijing Forbidden City</a>
                  <a href="/travel/things/2015-china-top-10-summer-resorts-tour-1640.html" title="2015 China Top 10 Summer Resorts Tour">· 2015 China Top 10 Summer Resorts...</a>
                  <a href="/travel/things" style="font-size:12px; color:#8C4600; font-weight:bold;"> READ MORE &raquo;</a>
              </li>
           </ul>
      </div>
      <!-- ideas end  -->
      
   </div>
   <!--  left end  -->
   <!--  right start  -->
   <div class="right">
      <div class="titleindex"></div>
      <!-- top start -->
      <div class="top">
         <ul>
            <li class="pic"><a href="/travel/china-8-days-china-golden-standard-tour-17.html"><img src="/images/index/top1.jpg" alt="" /></a></li>
            <li><a href="/travel/china-8-days-china-golden-standard-tour-17.html">8 Days Classic China Tour</a> <h2>From <b>$1319p/p</b></h2></li>
            <li><span>Destinations: Beijing, Xi’an, Shanghai</span>
                A varied experience covering historic wonders like Great Wall of China, Terra Cotta Warriors, and modern marvels like The Bund of Shanghai.
            </li>
         </ul>
      </div>
      <!-- top end -->
      
      <!-- top start -->
      <div class="top">
         <ul>
            <li class="pic"><a href="/travel/china-11-days-standard-china-tour-with-yangtze-river-54.html"><img src="/images/index/top2.jpg" alt="" /></a></li>
            <li><a href="/travel/china-11-days-standard-china-tour-with-yangtze-river-54.html">11 Days China Golden Cities with Yangtze River</a> <h2>From <b>$1995p/p</b></h2></li>
            <li><span>Destinations: Beijing, Xian, Chongqing, Yangtze River, Yichang, Shanghai</span>
                The Great Wall, Forbidden City, Entombed Warriors, dreamful Yangtze River and modern Shanghai will be covered in this package. 
            </li>
         </ul>
      </div>
      <!-- top end -->
      
      <!-- top start -->
      <div class="top">
         <ul>
            <li class="pic"><a href="/travel/china-10-days-standard-china-essence-tour-22.html"><img src="/images/index/top3.jpg" alt="" /></a></li>
            <li><a href="/travel/china-10-days-standard-china-essence-tour-22.html">10 Days Essence of China Tour</a> <h2>From <b>$1572p/p</b></h2></li>
            <li><span>Destinations: Beijing, Xian, Guilin, Yangshuo, Shanghai</span>
                China's ancient capitals, beautiful Li River in Guilin, modern Shanghai are included here. See the "most beautiful scenery under heaven".
            </li>
         </ul>
      </div>
      <!-- top end -->
      
      <!-- top start -->
      <div class="top">
         <ul>
            <li class="pic"><a href="/travel/china-11-days-standard-beijing-xian-lhasa-shanghai-tour-93.html"><img src="/images/index/top4.jpg" alt="" /></a></li>
            <li><a href="/travel/china-11-days-standard-beijing-xian-lhasa-shanghai-tour-93.html">11 Days China Must-see Cities with Holy Tibet</a> <h2>From <b>$1829p/p</b></h2></li>
            <li><span>Destinations: Beijing, Xian, Lhasa, Shanghai</span>
                Experience of the China highlights cities and sacred land of Tibet. Visit the magnificent Potala Palace and meet local Tibetans in their family.
            </li>
         </ul>
      </div>
      <!-- top end -->
      
      <!-- top start -->
      <div class="top">
         <ul>
            <li class="pic"><a href="/travel/china-9-days-shanghai-xian-beijing-private-tour-578.html"><img src="/images/index/top5.jpg" alt="" /></a></li>
            <li><a href="/travel/china-9-days-shanghai-xian-beijing-private-tour-578.html">China Golden Triangle Tour</a> <h2>From <b>$1162p/p</b></h2></li>
            <li><span>Destinations: Shanghai, Xian, Beijing</span>
                The golden triangle cities tour perfectly blends the best of dynastic history and colonial culture, as well as the best lessons from East and West.
            </li>
         </ul>
      </div>
      <!-- top end -->
   </div>
   <!--  right end  -->
</div>
<!-- last start -->
<div class="last">
    <div class="last1">
    <?php if($recommend_review):?>
    <!-- reviews start -->
    <div class="reviews">
       <!-- releft start -->
       <div class="releft">
          <h2><a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>">LeadtoChina Tours Reviews</a></h2>
          <ul>
             <li><?php echo substr($recommend_review['description'],0, 450);?>...
                <?php echo $recommend_review['dateline'];?> <a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>" style="color:#000000; text-decoration:none;">Read More Reviews >></a>             
             </li>
          </ul>
       </div>
       <!-- releft end -->
      <!-- <div class="reright"></div>  -->
       <!-- guest start -->
       <div class="guest" style="display:none;">
          <ul>
              <li class="pic"><img src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH . $recommend_review['index_pic'], '191x83');?>" /></li>
              <li>Clinets: <?php echo $recommend_review['name'];?><br />
              Country: <?php echo $recommend_review['nationality'];?></li>
              <li><a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>"><img src="/images/index/share.jpg" /></a></li>
          </ul>
       </div>
       <!-- guest end -->
    </div>
    <!-- reviews end -->
    <?php else:?>
    <!-- reviews start -->
    <div class="reviews">
       <!-- releft start -->
       <div class="releft">
          <h2>LeadtoChina Tours Reviews</h2>
          <ul>
             <li>Hi James, <br />
             We have returned home from our trip and I just wanted to thank you for arranging our trip. We really enjoyed our time in China and we very impressed with the guides we had. Both Bob and Bruce (as well as their drivers) were very informative ...<br />
2013-04-25<a href="<?php echo Yii::app()->createUrl('reviews/index');?>" style="display:block; text-align:right; color:#000000; text-decoration:none; line-height:24px;">All reviews >></a>             
             </li>
          </ul>
       </div>
       <!-- releft end -->
       <div class="reright"></div>
       <!-- guest start -->
       <div class="guest">
          <ul>
              <li class="pic"><img src="/images/index/guest1.jpg" alt="" /></li>
              <li>Clinets: Susan and Gordon<br />
              Country: Canada</li>
              <li><a href="<?php echo Yii::app()->createUrl('reviews/share');?>"><img src="/images/index/share.jpg" alt="" /></a></li>
          </ul>
       </div>
       <!-- guest end -->
       <div class="clear"></div>
    </div>
    <!-- reviews end -->
    <?php endif;?>
    
    <div class="add-new">
        <!-- free start -->
        <div class="free">
          <img src="/images/index/brochure1.jpg" alt="" usemap="#Map" />
          <map name="Map" id="Map"><area shape="rect" coords="85,39,197,67" href="/images/Beijing_Travel_Brochure.PDF" /><area shape="rect" coords="85,80,197,105" href="/images/China_Tour_Brochure.PDF" /></map>
        </div>
        <!-- free end -->
        <div class="gifts"><img src="/images/index/gifts1.jpg" alt="" /></div>
        <div class="clear"></div>
        <!-- guide start -->
      <div class="guide">
       <h2></h2>
       <ul>
          <li style="display:none"><a href="/travel/hotel"><img src="/images/index/hotel1.png" alt="" /> <span>Hotel</span></a></li>
          <li><a href="/china-guide/travel-tools/"><img src="/images/index/tools1.png" alt="" /> <span>Travel Tools</span></a></li>
          <li><a href="/travel/china-guide/culture"><img src="/images/index/culture1.png" alt="" /> <span>Culture</span></a></li>
          <li><a href="/travel/china-guide/attractions"><img src="/images/index/attraction1.png" alt="" /> <span>Attraction</span></a></li>
          <li><a href="/china-maps/"><img src="/images/index/map1.png" alt="" /> <span>Map</span></a></li>
          <li><a href="/climate/"><img src="/images/index/weather1.png" alt="" /> <span>Weather</span></a></li>
          <li><a href="/travel-tools/china-visa.html"><img src="/images/index/visa1.png" alt="" /> <span>Visa</span></a></li>
          <li><a href="/china-guide/travel-tips/"><img src="/images/index/tips1.png" alt="" /> <span>Travel Tips</span></a></li>
       </ul>
    </div>
    <!-- guide end -->
      </div>
    </div>
   <!-- code start -->
  <div class="code">
      <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
     
  </div>
    <!-- code end -->
</div>
<!-- last end -->

 <!-- banner1 start -->
<!--  <div class="banner1">  
</div>-->
<!-- banner1 end -->





<?php $this->renderPartial('//common/pop_more_cities');?> 
<script>
function changeMonthCity(obj,month){
  jQuery(obj).parents("table").find("tr td").removeClass("dq");  
  jQuery(obj).parent("td").addClass("dq");
  jQuery(".recommend_city_list").hide();
  jQuery("#city"+month).show();
}

$(function(){
  $("#index_tab span").bind("click", function(){
    var inx = parseInt($(this).index())+1;
    $("#c01,#c02,#c03,#c04").hide();
    $("#c0"+inx).show();
    $("#index_tab span").removeClass("dq");
    $(this).addClass("dq");
  })
})
</script>


