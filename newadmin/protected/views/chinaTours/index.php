<?php 
    $this->setPageTitle("China Tour, China Tour Packages, China Travel Tours");
    Yii::app()->clientScript->registerMetaTag('keywords',"china travel, china tours, travel china, china travel agent");
    Yii::app()->clientScript->registerMetaTag('description',"China Travel Agent offering China Tours, Yangtze Cruise Travel, China Flights, China Hotels Booking and huge China Travel Guide Info.");
    Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinanew.css'); 
?>
<!--  index start  -->
<div id="index">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> China Tours</div>
   <!--  banner start  -->
   <div id="banner">
      <div class="search">
         <table border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td colspan="2">
                      <select id="choose_days" name="days">
                        <?php foreach(Yii::app()->params['days_list'] as $v):?>
                          <option value="<?php echo $v;?>"><?php echo $v;?></option>
                        <?php endforeach;?>
                      </select></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding:3px 0px;"><strong>Select Cities:</strong></td>
                </tr>
                <tr>
                    <td><input type="checkbox" value="Beijing" name="city2[]"> Beijing</td>
                    <td><input type="checkbox" value="Shanghai" name="city2[]"> Shanghai</td>
                </tr>
                <tr>
                    <td><input type="checkbox" value="Guilin" name="city2[]"> Guilin</td>
                    <td><input type="checkbox" value="Hong Kong" name="city2[]"> Hong Kong</td>
                </tr>
                <tr>
                    <td><input type="checkbox" value="Xian" name="city2[]"> Xian</td>
                    <td><input type="checkbox" value="Kunming" name="city2[]"> Kunming</td>
                </tr>
                <tr>
                    <td><input type="checkbox" value="Lhasa" name="city2[]"> Lhasa</td>
                    <td><input type="checkbox" value="Yangtze" name="city2[]"> Yangtze</td>
                </tr>
                <tr>
                   <td colspan="2"><span id="more_index">Select more cities</span></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding:6px 0px;"><textarea class="choose_city" cols="" name="city"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                      <form method="get" name="toursearchpanelform" action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>">
                          <input type="hidden" name="city" id="menu_city" value="" />
                          <input type="hidden" name="days" id="menu_days" value="" />
                          <input type="hidden" name="price" id="menu_price" value="" />
                          <input type="image" src="/images/chinatours/search.jpg" style="width:78px; height:27px; float:left;" />
                          <a href="/travel/advance-search" style=" color:#9b080a; float:right; padding-top:6px; font-size:9px; white-space:nowrap; text-decoration:underline;">Advanced Search</a>
                      </form>
                    </td>
                </tr>
            </tbody>
         </table>
      </div>
   </div>
   <!--  banner end  -->
   
   <!--  chinacontent start  -->
   <div class="chinacontent">
      <div class="chinamenu">
         <ul>
            <li onclick="best_tour(this,1);" class="dq"><strong>Best Seller</strong><span></span></li>
            <li onclick="best_tour(this,2);"><strong>Classic China Tours</strong><span></span></li>
         </ul>
      </div>
      <!--  c01 start  -->
      <div id="best_seller" class="c01">
           <div class="chinalist">
               <ul>
                    <li class="pic"><a href="/travel/china-8-days-china-golden-standard-tour-17.html"><img src="/images/chinatours/beijing.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-8-days-china-golden-standard-tour-17.html">8 Days Classic China Tour</a> Beijing, Xi'an, Shanghai</li>
                    <li class="price"><span>From <strong>$1319</strong> P/P</span> <a href="/travel/china-8-days-china-golden-standard-tour-17.html"><img src="/images/chinatours/inquiry.png" alt="" /></a></li>
               </ul>
           </div> 
           
           <div class="chinalist">
               <ul>
                    <li class="pic"><a href="/travel/china-11-days-standard-china-tour-with-yangtze-river-54.html"><img src="/images/chinatours/changjiang.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-11-days-standard-china-tour-with-yangtze-river-54.html">11 Days Yangtze Cruise</a> Beijing, Xian, Yangtze River, Shanghai</li>
                    <li class="price"><span>From <strong>$1995</strong> P/P</span> <a href="/travel/china-11-days-standard-china-tour-with-yangtze-river-54.html"><img src="/images/chinatours/inquiry.png" alt="" /></a></li>
               </ul>
           </div>
           
           <div class="chinalist" style="margin-right:0px;">
               <ul>
                    <li class="pic"><a href="/travel/china-10-days-standard-china-essence-tour-22.html"><img src="/images/chinatours/guilin.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-10-days-standard-china-essence-tour-22.html">10 Days Essence of China Tour</a> Beijing, Xian, Guilin, Yangshuo, Shanghai</li>
                    <li class="price"><span>From <strong>$1572</strong> P/P</span> <a href="/travel/china-10-days-standard-china-essence-tour-22.html"><img src="/images/chinatours/inquiry.png" alt="" /></a></li>
               </ul>
           </div> 
      </div>
      <!--  c01 end  -->
      
      <!--  c02 start  -->
      <div id="classic_china_tours" class="c02" style="display:none;">
           <div class="chinalist">
               <ul>
                    <li class="pic"><a href="/travel/china-12-days-standard-beijing-xianshanghaiguilin-and-hong-kong-tour-714.html"><img src="/images/chinatours/hongkong.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-12-days-standard-beijing-xianshanghaiguilin-and-hong-kong-tour-714.html">12 Days China Must-see Cities</a> Beijing, Xian, Shanghai, Guilin, Hong Kong</li>
                    <li class="price"><span>From <strong>$2079</strong> P/P</span> <a href="/travel/china-12-days-standard-beijing-xianshanghaiguilin-and-hong-kong-tour-714.html"><img src="/images/chinatours/inquiry.png" alt="" /></a></li>
               </ul>
           </div> 
           
           <div class="chinalist">
               <ul>
                    <li class="pic"><a href="/travel/china-11-days-standard-beijing-xian-lhasa-shanghai-tour-93.html"><img src="/images/chinatours/lasa.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-11-days-standard-beijing-xian-lhasa-shanghai-tour-93.html">11 Days Holy Tibet Discovery</a> Beijing, Xian, Lhasa, Shanghai</li>
                    <li class="price"><span>From <strong>$1829</strong> P/P</span> <a href="/travel/china-11-days-standard-beijing-xian-lhasa-shanghai-tour-93.html"><img src="/images/chinatours/inquiry.png" alt="" /></a></li>
               </ul>
           </div>
           
           <div class="chinalist" style="margin-right:0px;">
               <ul>
                    <li class="pic"><a href="/travel/china-13-days-chinese-essence-minority-standard-tour--58.html"><img src="/images/chinatours/guilin.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-13-days-chinese-essence-minority-standard-tour--58.html">13 days Essence Minority Tour</a> Beijing, Xian, Kunming, Dali, Lijiang, Shanghai</li>
                    <li class="price"><span>From <strong>$2720</strong> P/P</span> <a href="/travel/china-13-days-chinese-essence-minority-standard-tour--58.html"><img src="/images/chinatours/inquiry.png" alt="" /></a></li>
               </ul>
           </div> 
      </div>
      <!--  c02 end  -->
      
      <!--  tourlist start  -->
      <div class="tourlist">
            <div class="title"><img src="/images/chinatours/tours.jpg" alt="" /></div>
            <!--  listcontent start  -->
            <div class="listcontent">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                         <tr>
                             <td class="titleh2"><h2>Our Specials</h2></td>
                             <td>
                                 <ul>
                                      <li><span>1</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
                                      <li><span>2</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/classicTours');?>">Classic China Tours</a></li>
                                      <li><span>3</span> <a href="<?php echo Yii::app()->createUrl('adoption');?>">China Adoption Travel</a></li>
                                      <li><span>4</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze River Tours</a></li>
<!--                                      <li><span>5</span> <a href="/tour/2014-china-tours/">2014/2015 China Tours</a></li>
-->                                      <li><span>5</span> <a href="/index.php?option=com_diy&template=customize_index">Customize China Tours</a></li>
                                      <li><span>6</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/JewishTours');?>">China Jewish Tours</a></li>
                                 </ul>
                             </td>
                         </tr>
                         <tr>
                             <td class="titleh2"><h2>China Tours from</h2></td>
                             <td>
                                 <ul>
                                      <li><span>1</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?starting_city=beijing">Tours from Beijing</a></li>
                                      <li><span>2</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?starting_city=shanghai">Tours from Shanghai</a></li>
                                      <li><span>3</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?starting_city=hongkong">Tours from Hong Kong</a></li>
                                 </ul>
                             </td>
                         </tr>
                         <tr>
                             <td class="titleh2"><h2>China Tours by Clients Type</h2></td>
                             <td>
                                 <ul>
                                      <li><span>1</span><a href="<?php echo Yii::app()->createUrl('chinaTours/familyTours');?>">China Family Tours</a></li>
                                      <li><span>2</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=16">China Honey Moon Tours</a></li>
                                      <li><span>3</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/studentTours');?>">Student Tours</a></li>
                                      <li><span>4</span> <a href="<?php echo Yii::app()->createUrl('muslimTour/index');?>">China Muslim Tour</a></li>
                                      <li><span>5</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=18">Luxury China Tours</a></li>
                                      <li><span>6</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/ChinaSeniorTours');?>">China Senior Tours</a></li>
                                 </ul>
                             </td>
                         </tr>
                         <tr>
                             <td class="titleh2"><h2>China Tours by Interest</h2></td>
                             <td>
                                 <ul>
                                      <li><span>1</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?highlight=1">Great Wall Tours</a></li>
                                      <li><span>2</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?highlight=3">Panda Tours</a></li>
                                      <li><span>3</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?highlight=5">Kung fu</a></li>
                                      <li><span>4</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?highlight=4">Yellow Mountain</a></li>
                                      <li><span>5</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?highlight=12">Li River</a></li>
                                      <li><span>6</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?highlight=14">Potala Palace</a></li>
                                      <li><span>7</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?highlight=2">Terra-cotta Warriors</a></li>
                                      <li><span>8</span> <a href="/travel/fujian-tulou-tours">Fujian Tulou Tours</a></li>
                                 </ul>
                             </td>
                         </tr>
                         <tr>
                             <td class="titleh2"><h2>China Tours by Themes</h2></td>
                             <td>
                                 <ul>
                                      <li><span>1</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">China Tibet Tours</a></li>
                                      <li><span>2</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/trainTravel');?>">China Train Travel</a></li>
                                      <li><span>3</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=7">Silk Road Adventure</a></li>
                                      <li><span>4</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=8">Minority Discovery</a></li>
                                      <li><span>5</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=10">China Architecture Tours</a></li>
                                      <li><span>6</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=12">China Food Tours</a></li>
                                      <li><span>7</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=13">China Religion Tours</a></li>
                                      <li><span>8</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=14">China World Heritage Tour</a></li>
                                      <li><span>9</span> <a href="/travel/china-winter-tours">China Winter Holidays</a></li>
                                      <li><span>10</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/searchList');?>?theme=17">China Golf Tour</a></li>
                                      <li><span>11</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/72HourVisaFreeTours');?>">72-hour Visa-free Tours</a></li>
                                      <li><span>12</span> <a href="<?php echo Yii::app()->createUrl('cruisePorts/index2');?>">China Cruise Ports Service</a></li>
                                 </ul>
                             </td>
                         </tr>
                         <tr>
                             <td class="titleh2" style="border-bottom:none;"><h2>China City Tours</h2></td>
                             <td style="border-bottom:none;">
                                 <ul>
                                      <li><span>1</span> <a href="/travel/city-beijing-tours">Beijing Tours</a></li>
                                      <li><span>2</span> <a href="/shanghai/tours/">Shanghai Tours</a></li>
                                      <li><span>3</span> <a href="/xian/tours/">Xi'an Tours</a></li>
                                      <li><span>4</span> <a href="/lhasa/tours/">Lhasa Tours</a></li>
                                      <li><span>5</span> <a href="/guilin/tours/">Guilin Tours</a></li>
                                      <li><span>6</span> <a href="/chengdu/tours/">Chengdu Tours</a></li>
                                 </ul>
                             </td>
                         </tr>
                    </tbody>
                 </table>
 
            </div>
            <!--  listcontent end  -->
      </div>
      <!--  tourlist end  -->
      <div class="chinadiy"><a href="/index.php?option=com_diy&template=customize0"><img src="/images/chinatours/customized.jpg" alt="" /></a></div>
      <div class="last">
           <ul>
                <li class="title1">100% Tailor-made</li>
                <li style="padding:6px 0px 6px 30px;">Dig China at your own speed</li>
                <li style="padding:6px 0px 6px 30px;">Nothing is impossible</li>
                <li>Create really unique china tour package</li>
           </ul>
           <ul>
                <li class="title1">Expert Knowledge</li>
                <li>Knowledgeable China Travel Expert</li>
                <li>Monitor your tour from the start to finish</li>
                <li>Highlight your China tour with real fun</li>
           </ul>
           <ul>
                <li class="title1">The Best Guides</li>
                <li>Well-arranged China tour packages with great online experience</li>
                <li>We cooperate with local partners who have good reputation</li>
           </ul>
           <ul style="margin-right:0px; border:none;">
                <li class="title1">Fully Protected</li>
                <li>Legitimate Company with attentive care</li>
                <li style="padding:6px 0px 6px 30px;">24/7 emergency guide call</li>
                <li style="padding:6px 0px 6px 30px;">Established for over 5 years</li>
           </ul>
      </div>
   </div>
   <!--  chinacontent end  -->
</div>

<?php $this->renderPartial('//common/pop_more_cities');?>


<script>
  function best_tour(obj, index){
    $(obj).parents("ul").find("li").removeClass("dq");
    $(obj).addClass("dq");
    if(index == 1){
      $("#classic_china_tours").hide();
      $("#best_seller").show();
    }else{
      $("#classic_china_tours").show();
      $("#best_seller").hide();
    }
  }
</script>
