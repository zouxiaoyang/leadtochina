<?php
if($_GET["tmpl"] != 'index_new'&&$_SERVER['REQUEST_URI']!='/citytour/'&&$_SERVER['REQUEST_URI']!='/chinatour/'):?>
<!--<script type="text/javascript" src="/about/js/webwidget_slideshow_dot.js"></script>-->
<div class="logo"><a href="/"><img src="/new/images/logo.png" alt="Tours of China" /></a></div>
<div class="logorightindex">
<!--<a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newindex/chat.jpg" alt="" /></a>
-->
<a href="#" onclick="window.open('http://messenger.providesupport.com/messenger/travelthing.html', 
'_blank','menubar=0,location=0,scrollbars=auto,resizable=1,status=0,width=650,height=680')"> 
<img src="/images/newindex/chat.jpg" style="border:0px" alt=""/></a>
</div>
<?php endif;?>
<?php
$ip = SiteUtils::getClientIp();
if(0)://if(strpos($ip,'19.16.2')!==false || strpos($ip,'218.22.27.102') !== false):?>
<div class="menu">
         <ul>
             <li><a class="hide" href="<?php echo Yii::app()->createUrl('index');?>">Home</a>
                <ul>
                      <li><a href="/about-us/">About Us</a></li>
                      <li><a href="/contact-us/">Contact Us</a></li>
                      <li><a href="/travel/online-payments.html">Payment Guide</a></li>
                      <li><a href="/travel/faq">FAQ</a></li>
                      <li><a href="/newsletter">Newsletter</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>">Customers' Reviews</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('promotion');?>">Promotion</a></li>
                </ul>
             </li>
             <li><a class="hide" href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a>
                 <ul class="special-menu" id="special-menu">
                      <li class="listnew-01">
                         <ul>
                             <li class="titleul">Classic China</li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze Cruise Tour</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">China Tibet Tours</a></li>
                             <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai Tours</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">All China Theme Tours</a></li>
                         </ul>
                      </li>
                      <li class="list-0">
                                <ul>
                                  <li class="titleul">Short Stay Tours</li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>                
                                  <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/index');?>">Shanghai Xian Tours</a></li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiHuangshanTours/index');?>">Shanghai Huangshan Tours</a></li>
                                  <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port to Beijing</a></li>
                               </ul>
                      </li>
                      <li class="listnew-0">
                                <ul>
                                    <li class="titleul">China Tours from</li>
                                    <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Beijing</a></li>
                                   <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>">Shanghai</a></li>
                                  <li><a href="/travel/china-search?starting_city=hongkong">Hong Kong</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/australiaTours');?>">Australia</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/southAfrica');?>">South Africa</a></li>
                               </ul>
                      </li>
                      <li class="list-2">
                                <ul>
                                    <li class="titleul">Hot Deals</li>
                                    <li><a href="/travel/china-8-day-beijing-xian-shanghai-17.html">8-day Beijing Xian Shanghai</a></li>                
                                    <li><a href="/travel/china-11-day-tour-with-yangtze-cruise-54.html">11-day Tour with Yangtze Cruise</a></li>
                                    <li><a href="/travel/china-10-day-beijing-xi'an-guilin-shanghai-22.html">10-day Beijing, Xi'an, Guilin, Shanghai</a></li>
                                    <li class="picmenu"><a href="/index.php?option=com_diy&template=customize_index"><img src="/images/newhomepage/tailor01.png" alt="" /></a></li>
                               </ul>
                      </li>
                    </ul>
            </li>
            <li><a class="hide" href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a>
                    <ul>
                      <li><a href="/beijing/tours/">Beijing Tours</a></li>
                      <li><a href="/xian/tours/">Xian Tours</a></li>
                      <li><a href="/shanghai/tours/">Shanghai Tours</a></li>
                      <li><a href="/huangshan/tours/">Huangshan Tours</a></li>
                      <li><a href="/travel/city-chengdu-tours">Chengdu Tours</a></li>
                      <li><a href="/guilin/tours/">Guilin Tours</a></li>
                    </ul>
               </li>
              <li class="hot"><a href="/index.php?option=com_diy&template=customize_index"><span>DIY Tours</span><b style="position:absolute; width:35px; text-align:right; z-index:2; float:right; top:0px;"><img src="/images/newindex/01_03.png"  border="0"/></b></a></li>
              <li style="z-index:1"><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Beijing Tours</a>
                    <ul>
                      <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">Beijing Private Tours</a></li>
         <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">Beijing Coach Tours</a></li>
         <li><a href="/beijing/tours?v=list&id=1">Great Wall Tours</a></li>
         <li><a href="/travel/beijing-side-trips">Beijing Side Trips</a></li>
         <li><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">72 Hours Visa Free Tour</a></li>
         <li><a href="/travel/search-beijing-tours?theme=110_Beijing+Musilm+Tour">Beijing Muslim Tours</a></li>
         <li><a href="/travel/search-beijing-tours?theme=114_Airport+Stop+Tour">Airport Stop Tour</a></li>
         <li><a href="/travel/air">Great Wall Helicopter Tour</a></li>
                    </ul>
              </li>            
              <li><a class="hide" href="<?php echo Yii::app()->createUrl('cruise/index');?>">Yangtze Cruise</a>
                 <ul class="special-menu1">
                      <li class="list-0">
                         <ul>
                             <li class="titleul"><a href="/travel/yangtzecruise/ships/">Yangtze Cruise Ships</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=3">Victoria Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=1">President Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=2">New Century</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=4">Gold Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=5">Overseas Cruise</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=6">Yangtze Explorer</a></li>
                         </ul>
                      </li>
                      <li class="list-3">
                                <ul>
                                  <li class="titleul"><a href="/travel/yangtze-river-tours">Yangtze Cruise Tours</a></li>
                                  <li><a href="/travel/yangtzecruise/yangtzetour-from-chongqing.html">Cruise from Chongqing</a></li>                
                                  <li><a href="/travel/yangtzecruise/yangtzetour-from-shanghai.html">Cruise from Shanghai</a></li>      
                                  <li><a href="<?php echo Yii::app()->createUrl('cruise/calendar');?>">Yangtze Cruise Calendar 2015</a></li>      
                                  <li class="calendarmenu"><table cellspacing="0" cellpadding="0" border="0">
                     <tbody>
                      <?php 
                        $month_arr = array_chunk(range(1,12),4);
                      ?>
                      <?php foreach($month_arr as $arr):?>
                        <tr>
                            <?php foreach($arr as $v):?>
                            <td <?php if($v%4 == 0):?> style=" margin-right:0px;" <?php endif;?>>
                              <?php if(date("Y")==2015 && date("m") == $v):?>
                              <a style=" background:#8c4600; color:#fff; height:20px;" href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php elseif(date("m")<$v):?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php else:?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php endif;?>
                              </td>
                            <?php endforeach;?>
                        </tr>
                      <?php endforeach;?>

                     </tbody>
                   </table></li>      
                               </ul>
                      </li>
                      <li class="list-2">
                                <ul>
                                    <li class="titleul"><a href="/travel/yangtzecruise/china-river-cruises.html">China Cruise Tours</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name1">Yangtze River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name2">Guilin Li River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name3">Shanghai Huangpu River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name4">Southeast Water Town Cruise</a></li>
                                    <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port Excursions</a></li>
                                    <li><a href="/travel/cruise-port/shanghai-port-port-excursion-6">Shanghai Port Excursions</a></li>
                               </ul>
                      </li>
                    </ul>
                </li>
                <li><a class="hide" href="<?php echo Yii::app()->createUrl('adoption');?>">Heritage Tours</a>
                    <ul>
                      <li><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1">2015 GROUP TOUR I</a></li>
                      <li><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2">2015 GROUP TOUR II</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageVisit');?>">Orphanage Visits</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>">Customize Your Own Tour</a></li>
                      <li><a href="/travel/adoption/privateTours">Private Tours by Province</a></li>
                      <li><a href="/travel/adoption/storyIndex">Travel Stories</a></li>
                    </ul>
                </li>
                <!--<li><a href="/china-flight/">Flights</a></li>-->
                <li class="lastmenu"><a class="hide" href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a>
                    <ul>
                      <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>">China City Guide</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/attractions');?>">China Attraction Guide</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/CultureIndex');?>">Chinese Culture</a></li>
                      <li><a href="/china-guide/travel-tools/">China Travel Tools</a></li>
                      <li><a href="/china-guide/travel-tips/">China Travel Tips</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/things');?>">Things to Do in China</a></li>
                      <li style="display:none"><a href="<?php echo Yii::app()->createUrl('hotel');?>">China Hotels</a></li>
                    </ul>
                </li>
           </ul>    
  </div>

<?php else:?>
  
  <div class="menu">
         <ul>
             <li><a class="hide" href="/">Home</a>
                <ul>
                      <li><a href="/about-us/">About Us</a></li>
                      <li><a href="/contact-us/">Contact Us</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl("payment/payment");?>">Payment Guide</a></li>
                      <li><a href="/travel/faq">FAQ</a></li>
                      <li><a href="/newsletter">Newsletter</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('reviews/guestReviews');?>">Customers' Reviews</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('promotion');?>">Promotion</a></li>
                </ul>
             </li>
             <li><a class="hide" href="/chinatour/">China Tours</a>
                 <ul class="special-menu" id="special-menu" style="width:810px;">
                      <li class="list-0">
                         <ul>
                             <li class="titleul">Classic China</li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">China Tibet Tours</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze Cruise Tour</a></li>
                             <li><a href="/China-Train-Types.html">China Train Travel</a></li>
                             <li><a href="/travel/china-search?theme=7#result">Silk Road Adeventure</a></li>
                         </ul>
                      </li>
                      <li class="listnew-01">
                                <ul>
                                  <li class="titleul">Short Stay in China</li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>                
                                  <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/index');?>">Shanghai Xian Tours</a></li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiHuangshanTours/index');?>">Shanghai Huangshan Tours</a></li>
                                  <li><a href="/travel/city-zhangjiajie-tours">Zhangjiajie Fenghuang Tours</a></li>
                               </ul>
                      </li>
                      <li class="list-0">
                                <ul>
                                    <li class="titleul">Our Featured</li>
                             <li><a href="<?php echo Yii::app()->createUrl('china-student-tours');?>">China Student Tours</a></li>
                             <li><a href="/travel/china-senior-tours">China Senior Tours</a></li>
                             <li><a href="/travel/china-jewish-tours">China Jewish Tours</a></li>
                             <li><a href="/travel/adoption">China Heritage Tours</a></li>
                             <li><a href="/travel/china-diy-tours">Custom Designed Tours</a></li>
                               </ul>
                      </li>
                      <li class="list-2n">
                                <ul>
                                    <li class="titleul">China Tours from</li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/southAfrica');?>">Tours from South Africa</a></li>
<?php /*?>                   <li><a href="<?php echo Yii::app()->createUrl('chinaTours/saudiArabia');?>">Tours from Saudi Arabia</a></li>
<?php */?>                    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/australiaTours');?>">Tours from Australia</a></li>
                              <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Tours from Beijing</a></li>
                              <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>">Tours from Shanghai</a></li>
                               </ul>
                      </li>
                    </ul>
            </li>
            <li><a class="hide" href="/citytour/">City Tours</a>
                    <ul>
                      <li><a href="/beijing/tours/">Beijing Tours</a></li>
                      <li><a href="/xian/tours/">Xian Tours</a></li>
                      <li><a href="/shanghai/tours/">Shanghai Tours</a></li>
                      <li><a href="/huangshan/tours/">Huangshan Tours</a></li>
                      <li><a href="/travel/city-chengdu-tours">Chengdu Tours</a></li>
                      <li><a href="/guilin/tours/">Guilin Tours</a></li>
                    </ul>
               </li>
              <li class="hot"><a href="/index.php?option=com_diy&template=customize_index"><span>DIY Tours</span><b style="position:absolute; width:35px; text-align:right; z-index:2; float:right; top:0px;"><img src="/images/newindex/01_03.png"  border="0"/></b></a></li>
              <li style="z-index:1"><a class="hide" href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Beijing Tours</a>
<ul class="special-menu2">
  <li class="listnew-01">
    <ul>
      <li class="titleul">Beijing City Tours</li>
      <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">Beijing Private Tours</a></li>
      <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">Beijing Coach Tours</a></li>
      <li><a href="/beijing/tours?v=list&id=1">Great Wall Tours</a></li>
      <li><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">72 Hours Visa Free Tour</a></li>
      <li><a href="/travel/search-beijing-tours?theme=110_Beijing+Musilm+Tour">Beijing Muslim Tours</a></li>
      <li><a href="/travel/search-beijing-tours?theme=114_Airport+Stop+Tour">Beijing Layover Tour</a></li>
      <li><a href="/travel/air">Beijing Helicopter Tour</a></li>
    </ul>
  </li>
  <li class="listnew-0">
    <ul>
      <li class="titleul">Beijing Side Trips</li>
      <li><a href="/travel/beijing-xian-tours">Beijing Xian Tours</a></li>
      <li><a href="/travel/beijing-shanghai-tours">Beijing Shanghai Tours</a></li>
      <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai</a></li>
      <li><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours">Beijing Datong Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=19_beijing_pingyao_tours">Beijing Pingyao Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=10_Beijing+Luoyang+Tours">Beijing Luoyang Tours</a></li>
      <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port Excursions</a></li>
    </ul>
  </li>
  <li class="list-2">
    <ul>
     <li class="titleul" style="height:25px;"></li>
      <li><a href="/travel/search-beijing-tours?des=8_Beijing+Chengde+Tours">Beijing Chengde Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=7_Beijing+Qinhuangdao+Tours">Beijing Qinhuangdao Tours</a></li>
      <li><a href="/travel/china-winter-tours">Beijing Harbin Tours</a></li>
      <li><a href="/travel/city-huangshan-tours#3">Beijing Huangshan Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=18_beijing_inner_mongolia_tours">Beijing Inner Mongollia</a></li>
      <li><a href="/travel/search-beijing-tours?des=11_Beijing+Guilin+Tours">Beijing Guilin Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=14_Hong+Kong+to+Beijing+Tour">Beijing Hong Kong Tours</a></li>
    </ul>
  </li>
</ul>
              </li>           
              <li><a class="hide" href="/travel/yangtzecruise/">Yangtze Cruise</a>
                    <ul class="special-menu1">
                      <li class="list-0">
                         <ul>
                             <li class="titleul"><a href="/travel/yangtzecruise/ships/">Yangtze Cruise Ships</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=3">Victoria Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=1">President Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=2">New Century</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=4">Gold Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=5">Overseas Cruise</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=6">Yangtze Explorer</a></li>
                         </ul>
                      </li>
                      <li class="list-3">
                                <ul>
                                  <li class="titleul"><a href="/travel/yangtze-river-tours">Yangtze Cruise Tours</a></li>
                                  <li><a href="/travel/yangtzecruise/yangtzetour-from-chongqing.html">Cruise from Chongqing</a></li>                
                                  <li><a href="/travel/yangtzecruise/yangtzetour-from-shanghai.html">Cruise from Shanghai</a></li>      
                                  <li><a href="<?php echo Yii::app()->createUrl('cruise/calendar');?>">Yangtze Cruise Calendar 2015</a></li>      
                                  <li class="calendarmenu"><table cellspacing="0" cellpadding="0" border="0">
                     <tbody>
                      <?php 
                        $month_arr = array_chunk(range(1,12),4);
                      ?>
                      <?php foreach($month_arr as $arr):?>
                        <tr>
                            <?php foreach($arr as $v):?>
                            <td <?php if($v%4 == 0):?> style=" margin-right:0px;" <?php endif;?>>
                              <?php if(date("Y")==2015 && date("m") == $v):?>
                              <a style=" background:#8c4600; color:#fff; height:20px;" href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php elseif(date("m")<$v):?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php else:?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php endif;?>
                              </td>
                            <?php endforeach;?>
                        </tr>
                      <?php endforeach;?>

                     </tbody>
                   </table></li>      
                               </ul>
                      </li>
                      <li class="list-2">
                                <ul>
                                    <li class="titleul"><a href="/travel/yangtzecruise/china-river-cruises.html">China Cruise Tours</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name1">Yangtze River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name2">Guilin Li River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name3">Shanghai Huangpu River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name4">Southeast Water Town Cruise</a></li>
                                    <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port Excursions</a></li>
                                    <li><a href="/travel/cruise-port/shanghai-port-port-excursion-6">Shanghai Port Excursions</a></li>
                               </ul>
                      </li>
                    </ul>
                </li>
                <li><a class="hide" href="<?php echo Yii::app()->createUrl('adoption');?>">Heritage Tours</a>
                    <ul>
                      <li><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1">2015 Winter Promotion</a></li>
                      <li><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2">2016 Summer Promotion</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('adoption/orphanageVisit');?>">Orphanage Visits</a></li>
                      <li><a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>">Customize Your Own Tour</a></li>
                      <li><a href="/travel/adoption/privateTours">Private Tours by Province</a></li>
                      <li><a href="/travel/adoption/storyIndex">Travel Stories</a></li>
                    </ul>
                </li>
                <!--<li><a href="/china-flight/">Flights</a></li>-->
                <?php if(strpos($ip,'19.16.2')!==false || strpos($ip,'218.22.27.102') !== false):?>
                  <li class="lastmenu"><a class="hide" href="<?php echo Yii::app()->createUrl('chinaGuide/index');?>">China Guide</a>
                      <ul>
                        <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/cityGuide');?>">China City Guide</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/attractions');?>">China Attraction Guide</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/CultureIndex');?>">Chinese Culture</a></li>
                        <li><a href="/china-guide/travel-tools/">China Travel Tools</a></li>
                        <li><a href="/china-guide/travel-tips/">China Travel Tips</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('chinaGuide/things');?>">Things to Do in China</a></li>
                        <li style="display:none"><a href="<?php echo Yii::app()->createUrl('hotel');?>">China Hotels</a></li>
                      </ul>
                  </li>
                <?php else:?>
                  <li class="lastmenu"><a class="hide" href="" style="cursor:default">Shore Excursions</a>
<ul class="special-menu" style="left:-233px;width:385px;">
  <li class="listnew-01n">
    <ul>
      <li class="titleul">China Port Excursions</li>
      <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port Transfer & Tours</a></li>
      <li><a href="/travel/cruise-port/shanghai-port-port-excursion-6">Shanghai Port Transfer & Tours</a></li>
      <li><a href="/travel/cruise-port/dalian-port-port-excursion-7">Dalian Port Transfer & Tours</a></li>
      <li><a href="/travel/cruise-port/hong-kong-port-port-excursion-13">Hong Kong Port Transfer & Tours</a></li>
      <li><a href="/travel/cruise-port/xiamen-port-port-excursion-11">Xiamen Port Transfer & Tours</a></li>
    </ul>
  </li>
  <li class="listnew-0" style="margin:0; width:135px">
    <ul style="border:none">
      <li class="titleul">Tours by Ships</li>
      <li><a href="/travel/international-cruise/sapphire-princess-8">Sapphire Princess</a></li>
      <li><a href="/travel/international-cruise/ocean-insignia-16">Oceania Insignia</a></li>
      <li><a href="/travel/international-cruise/oceania-nautica-7">Oceania Nautica </a></li>
      <li><a href="/travel/international-cruise/seven-seas-voyage-5">Seven Seas Voyager</a></li>
      <li><a href="/travel/international-cruise/celebrity-millennium-9">Celebrity Millennium</a></li>
    </ul>
  </li>
<!--  <li class="list-2n">
    <ul>
     <li class="titleul" style="height:25px;"></li>
      <li><a href="/travel/international-cruise/regent-seven-seas-voyager-5">Regent Seven Seas Voyager</a></li>
      <li><a href="/travel/international-cruise/ocean-insignia-16">Ocean Insignia</a></li>
      <li><a href="/travel/international-cruise/ms-volendam-18">MS Volendam</a></li>
      <li><a href="/travel/international-cruise/quantum-of-the-seas-19">Quantum Of The Seas</a></li>
    </ul>
  </li>
--></ul>
                  </li>
                <?php endif;?>
           </ul>    
  </div>
<?php endif;?>
