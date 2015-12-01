<?php
   Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css'); 

   $this->setPageTitle("Great Value China Tour Packages from Australia Canberra, Sydney, Melbourne, Brisbane, Perth. Tour from Lead to China. ");
   Yii::app()->clientScript->registerMetaTag('keywords',' Australia to China tour, Australian to China tour packages, Australia travel to China, Australia Trip to China, Depart to China from Australia, China tour Packages from Australia, Beijing tour from Australia, Shanghai tour from Australia, HK tour from Australia');
   Yii::app()->clientScript->registerMetaTag('description','LeadtoChina offers plenty of great value China tours from Australia with competitive price and first China tour service.');
 ?>
<style type="text/css">
 .errorMessage{display:none}
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 18px; width:920px;}
.more-indexcont{ top:540px;}
#right{ background:none; padding-top:0px;}
.right_div{ background:url(/images/citytours/rbg.jpg) #d2d3d5 left bottom repeat-x; width:100%; height:auto; float:left;}
#right h2{ margin-top:0px;}
#banner{background:url(/images/citytours/banner_australia.jpg) left center no-repeat; height:270px; padding-left:670px; width:250px; padding-top:10px;}
#banner h2{ width:100%; height:auto; float:left; display:block;}
#banner ul{ width:100%; height:auto; float:left; padding-top:4px;}
#banner ul li{ width:223px; height:auto; float:left; display:block; padding:5px 0px 5px 27px; background:url(/images/yangtze/chooseli.png) no-repeat 0px 8px; color:#fff; line-height:18px; font-size:13px;}

</style>

<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> China Tours From Australia</div>
    <div id="banner">
       <h2><img alt="" src="/images/yangtze/choose.png"></h2>
       <ul>
              <li>Best price for China Tours in the market</li>
              <li>Money back service guarantee</li>
              <li>100% High Recommended from Trip Advisor</li>
              <li>Private guide, driver, vehicle</li>
              <li>Get quote and itinerary within 12hs</li>
              <li>Follow 20000+ former customers' choice</li>
        </ul>
    </div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
        <div class="tab-menu">
           <ul>
             <li onclick="_cityTours.changeTab(this,1);" class="dq"><strong>Top3 Tours</strong><span></span></li>
             <li onclick="_cityTours.changeTab(this,2);"><strong>Yangtze Cruise Ships</strong><span></span></li>
           </ul>
        </div>
        <!--  toplist start  -->
        <div id="c01">
        <div class="toplist">
              <div class="listone">
               <ul>
                  <li><a href="/travel/china-4-days-best-beijing-private-tours-103.html"><img alt="" src="/images/citytours/top34.png"></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-4-days-best-beijing-private-tours-103.html">4 Days Best Beijing Private Tours</a></li>
                          <li>· Temple of Heaven</li>
                          <li>· Tiananmen Square</li>
                          <li>· Forbidden City</li>
                          <li>· Summer Palace</li>
                          <li class="price">From <strong><?php echo SiteUtils::getCurrencyPrice(424, 10);?></strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div class="listone">
               <ul>
                  <li><a href="/travel/china-8-days-china-golden-standard-tour-17.html"><img alt="" src="/images/citytours/top35.png"></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-8-days-china-golden-standard-tour-17.html">8 Days China Golden Standard Tour</a></li>
                          <li>· Forbidden City</li>
                          <li>· Badaling Great Wall</li>
                          <li>· Terracotta Warriors</li>
                          <li>· the Bund</li>
                          <li class="price">From <strong><?php echo SiteUtils::getCurrencyPrice(1539, 10);?></strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div style="margin-right:0px;" class="listone">
               <ul>
                  <li><a href="/travel/china-11-days-standard-yangtze-river-cruise-from-hk-26.html"><img alt="" src="/images/citytours/top36.png"></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-11-days-standard-yangtze-river-cruise-from-hk-26.html">11 Days Standard Yangtze River Cruise from HK</a></li>
                          <li>· Yangtze Cruise</li>
                          <li>· the Bund</li>
                          <li>· Terracotta Warriors</li>
                          <li>· Forbidden City</li>
                          <li class="price">From <strong><?php echo SiteUtils::getCurrencyPrice(2759, 10);?></strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
        </div>
        </div>
        <!--  toplist end  -->
        
        <!--  toplist start  -->
        <div id="c02" style="display:none;">
          <div class="deals">
           <ul>
             <li style="width:192px;height:79px;" class="pic"><a href="/travel/yangtzecruise/11/blue-whale"><img src="http://www.leadtochina.com/travel/images/uploads/cruise/.ctours2012012921c0bt192x79.jpg"></a></li>
             <li class="name"><a href="/travel/yangtzecruise/11/blue-whale">Blue Whale</a><span class="star5"></span></li>
             <li class="route"><strong>ROUTE:</strong> <span>5 Days Yichang-Chongqing</span>
                                      <span>4 Days Chongqing-Yichang</span>
             </li>
             <li class="price">From:<strong><?php echo SiteUtils::getCurrencyPrice(389, 10);?></strong> p/p</li>
             <li><a href="/travel/yangtzecruise/11/blue-whale#orderForm"><img alt="" src="/images/yangtze/inquiry.png"></a></li>
          </ul>
          <ul>
             <li style="width:192px;height:79px;" class="pic"><a href="/travel/yangtzecruise/13/victoria-lianna"><img src="http://www.leadtochina.com/travel/images/uploads/cruise/201211/.50b300263255dt192x79.jpg"></a></li>
             <li class="name"><a href="/travel/yangtzecruise/13/victoria-lianna">Victoria Lianna</a><span class="star5"></span></li>
             <li class="route"><strong>ROUTE:</strong> <span>5 Days Yichang-Chongqing</span>
                                      <span>4 Days Chongqing-Yichang</span>
             </li>
             <li class="price">From:<strong><?php echo SiteUtils::getCurrencyPrice(449, 10);?></strong> p/p</li>
             <li><a href="/travel/yangtzecruise/13/victoria-lianna#orderForm"><img alt="" src="/images/yangtze/inquiry.png"></a></li>
          </ul>
          <ul style="margin-right:0px;">
             <li style="width:192px;height:79px;" class="pic"><a href="/travel/yangtzecruise/39/victoria-jenna"><img src="http://www.leadtochina.com/travel/images/uploads/cruise/.ctours20120129f633ct192x79.jpg"></a></li>
             <li class="name"><a href="/travel/yangtzecruise/39/victoria-jenna">Victoria Jenna</a><span class="star5"></span></li>
             <li class="route"><strong>ROUTE:</strong> <span>5 Days Yichang-Chongqing</span>
                                      <span>4 Days Chongqing-Yichang</span>
             </li>
             <li class="price">From:<strong><?php echo SiteUtils::getCurrencyPrice(449, 10);?>449</strong> p/p</li>
             <li><a href="/travel/yangtzecruise/39/victoria-jenna#orderForm"><img alt="" src="/images/yangtze/inquiry.png"></a></li>
          </ul>
                 </div>
        </div>
        <!--  toplist end  -->
        
        <?php 
        	$australia_tours_array = array(
        		array(
        			'category1' => 'China Tours from Beijing',
        			'category2' => 'Shanghai, Xian, Yangtze, Lhasa Tours from Beijing',
        			'image' => '/images/citytours/a2.jpg',
              'description' => 'As one of the six ancient cities in China, Beijing has been the heart and soul of politics and society throughout its long history, and thus
              there are unparalleled wealth, with which you can find the splendid past of this city. Besides, Beijing, the capital of the People\'s Republic of China, is the most important transportation hub and port of entry. Most inbound China tours start or end here.',
        			'tour_ids'  => array(412, 323, 327, 17, 22, 516, 54, 713, 58, 93),
        		),
        		array(
        			'category1' => 'China Tours from Shanghai',
        			'category2' => 'Beijing, Xian, Yangtze, Huangshan Tours from Shanghai',
        			'image' => '/images/citytours/a3.jpg',
        			'description' => 'As one of the top tourist cities and most dynamic metropolis in China, Shanghai is one of the top three China golden triangle cities with other two are Beijing and Xian. All these three cities are real elites of China\'s history, culture and modern achievements. Besides, China is a vast land with so many marvels in the name of natural scenery, ethnic minorities and exotic world.',
        			'tour_ids'  => array(511, 321, 578, 745, 149, 702, 745, 701, 733),
        		),
        		array(
        			'category1' => 'China Tours from HK',
        			'category2' => 'Beijing, Shanghai, Xian, Yangtze Tour from HK',
        			'image' => '/images/citytours/a4.jpg',
        			'description' => 'Hong Kong, an important hub in East Asia with global connections to many of the world\'s cities, is a unique destination that has absorbed people and cultural influences from places as diverse as Vietnam and Vancouver and proudly proclaims itself to be Asia\'s World City. Plenty of overseas\' tourists like to enter China via HK for it is convenient transportations and shopping paradise.',
        			'tour_ids'  => array(580, 26, 66),
        		),
        		array(
        			'category1' => 'Short Stay in China',
        			'category2' => 'Beijing, Shanghai & Side Tours',
        			'image' => '/images/citytours/a5.jpg',
        			'description' => 'A short-stay China tour is not long enough to see everything that you would like to, but it\'s definitely long enough to feel one or two cities\' highlights with great memory. For example, you can take train tours to explore China\'s economic center Shanghai with political center Beijing, or you can tour one city with longer time at a time.',
        			'tour_ids'  => array(103, 681, 338, 148, 686, 156),
        		)
        	);
        ?>
        <?php foreach($australia_tours_array as $v):?>
        <!--  tourlist start  -->
        <div class="tourlist">
           <h2><?php echo $v['category1'];?> <span>( <?php echo $v['category2'];?> )</span></h2>
           <div class="listpic"><img style="width:220px;height:150px" src="<?php echo $v['image'];?>"></div>
           <div class="listcontent">
              <ul>
                 <li><p><?php echo $v['description'];?></p></li>
                 <li>
                    <ol class="tesu">
                    	  <?php $tours = ToursPackage::model()->findAllByPk($v['tour_ids']); ?>
                    	   <?php foreach($tours as $tour):?>
                           <li><a title="<?php echo $tour->name;?>" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a> 
                               <?php if($tour->city_num == 1):?>
                               <span><strong>FEATURES:</strong> <?php echo $tour->attractions;?></span> 
                               <?php else:?>
                               <span><strong>DESTINATIONS:</strong> <?php echo $tour->route;?></span> 
                               <?php endif;?>
                           </li> 
                           <?php endforeach;?>
                    </ol>
                 </li>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        <?php endforeach;?>

        
        <!--  questions start  -->
        <div class="questionsnew">
           <h2><img src="/images/citytours/palnning.jpg" alt="" /></h2>
           <div class="questionscont">
              <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td colspan="2">
                    	<textarea name="message" cols="" rows="">&nbsp;</textarea>
                    	<span class="qmessage_error errorMessage">It can't be blank.</span>
                    </td> 
                  </tr>
                  <tr>
                    <td colspan="2">
                    <input style="width:auto; height:auto;" type="checkbox" checked="checked" value="" name=""> Do you want to book a tour / hotel / flights.etc</td>
                  </tr>
                  <tr>
                    <td>Your Name: <input name="username" type="text" />
                    <span class="qusername_error errorMessage">It can't be blank.</span></td>
                    <td>E-mail: <input name="email" type="text" />
                    <span class="qemail_error errorMessage">Please enter correct email.</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"> <input type="button" onclick="_cityTours.submitMessage(this);" class="form_button" style="height:40px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block; width:221px;" name="yt0" value=""> </td>
                  </tr> 
                </tbody>
              </table>

           </div>
        </div>
        <!--  questions end  -->
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right">
    <div id="right_div" class="right_div">
     <h2><img src="/images/chinatours/right.jpg" alt="" /></h2>
     <div class="rcontent">
        <ul>
           <li><strong>Your Budget</strong> 
            <select id="choose_price" name="choose_price">
              <option value="0">Choose Price</option>
            <?php foreach(Yii::app()->params['price_list'] as $v):?>
              <option value="<?php echo $v;?>"><?php echo $v;?></option>
            <?php endforeach;?>                                     
            </select>
           </li>
           
           <li><strong>Duration</strong>
            <select id="choose_days" name="choose_days">
            <?php foreach(Yii::app()->params['days_list'] as $v):?>
              <option value="<?php echo $v;?>"><?php echo $v;?></option>
            <?php endforeach;?>                                     
            </select>
           </li>
        </ul>
        <div class="clear"></div>
        <table border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
               <td><strong>Visiting</strong></td>
            </tr>
            <tr>
               <td>
                  <ol>
                     <li><input type="checkbox" name="city2[]" value="Beijing">Beijing</li>
                     <li><input type="checkbox" name="city2[]" value="Xian">Xian</li>
                     <li><input type="checkbox" name="city2[]" value="Shanghai">Shanghai</li>
                     <li><input type="checkbox" name="city2[]" value="Guilin">Guilin</li>
                     <li><input type="checkbox" name="city2[]" value="Yangtze">Yangtze</li>
                     <li><input type="checkbox" name="city2[]" value="Tibet">Tibet</li>
                  </ol>
               </td>
            </tr>
            <tr>
               <td><span id="more_index">Select more cities</span></td>
            </tr>
            <tr>
               <td style="padding:5px 0px 2px 0px;">
                  <form name="toursearchpanelform" method="get" action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>" target="_blank">
                      <input type="hidden" name="city" id="menu_city" value="" />
                      <input type="hidden" name="days" id="menu_days" value="" />
                      <input type="hidden" name="price" id="menu_price" value="" />
                      <input type="image" src="/images/chinatours/search1.jpg" />
                  </form>
                </td>
            </tr>
            <tr>
               <td><a style="text-decoration:underline; color:#333; font-style:italic;" href="/travel/advance-search">Advanced Search &raquo;</a></td>
            </tr>
          </tbody>
        </table>
     </div>
     <div class="advanced"><img src="/images/chinatours/advanced.jpg" alt="" /></div>
     <div class="recommend">
         <ul>
             <li><span>1</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
             <li><span>2</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/classicTours');?>">Classic China Tours</a></li>
             <li><span>3</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze River Tours</a></li>
             <li><span>4</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/familyTours');?>">China Family Tours</a></li>
             <li><span>5</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">China Tibet Tours</a></li>
             <li><span>6</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/trainTravel');?>">China Train Travel</a></li>
             <li><span>7</span> <a href="<?php echo Yii::app()->createUrl('chinaTours/72HourVisaFreeTours');?>">72-hour Visa-free Tours</a></li>
             <li><span>8</span> <a href="<?php echo Yii::app()->createUrl('adoption');?>">China Adoption Travel</a></li>
         </ul>
     </div>
    </div>
    <div class="rightlist">
       <h2 style="height:27px;"><img src="/images/citytours/citytours.jpg"></h2>
       <ul>
          <li><a href="/travel/search-beijing-tours?des=5_Beijing+Shanghai+Tours">Beijing+Shanghai</a></li>
          <li><a href="/travel/search-beijing-tours?des=2_Beijing+Xian+Tours">Beijing+Xian</a></li>
          <li><a href="/travel/beijing-xian-shanghai-tours">Beijing+Xian+Shanghai</a></li>
          <li><a href="/travel/search-beijing-tours?des=14_Hong+Kong+to+Beijing+Tour">Hong Kong+Beijing</a></li>
       </ul>
    </div>
    <div class="rightlist">
       <h2 style="height:27px;"><img src="/images/citytours/yangtze.jpg"></h2>
       <ul>
          <li><a href="/travel/yangtzecruise/ships/">Yangtze Ships &amp; Prices</a></li>
          <li><a href="/travel/yangtzecruise/calendar">2013 Cruise Calendar</a></li>
          <li><a href="/travel/yangtze-river-tours">Yangtze River Route</a></li>
          <li class="title2">Major cruise lines:</li>
          <li><a href="/travel/yangtzecruise/ships/category-list?category=1">President Cruises</a></li>
          <li><a href="/travel/yangtzecruise/ships/category-list?category=3">Victoria Cruises</a></li>
          <li><a href="/travel/yangtzecruise/ships/category-list?category=4">Gold Cruises</a></li>
       </ul>
    </div>
    <div class="citylist1">
        <h2 style="height:27px;"><img src="/images/citytours/citytitle1.jpg"></h2>
        <ul>
           <li><a href="/beijing/tours/"><img src="/images/citytours/city1.jpg"></a></li>
           <li><a href="/xian/tours/"><img src="/images/citytours/city2.jpg"></a></li>
           <li><a href="/shanghai/tours/"><img src="/images/citytours/city3.jpg"></a></li>
           <li><a href="/guilin/tours/"><img src="/images/citytours/city4.jpg"></a></li>
           <li><a href="/lhasa/tours/"><img src="/images/citytours/city5.jpg"></a></li>
           <li><a href="/chengdu/tours/"><img src="/images/citytours/city6.jpg"></a></li>
        </ul>
     </div>
    <div class="cooperation"><a href="/travel/cooperation-partner" target="_blank"><img alt="" src="/images/citytours/cooperation.jpg"></a></div>
   </div>
    <!--  right end  -->
    <div class="clear"></div>
    <div class="chinadiy"><a href="/index.php?option=com_diy&amp;template=customize0"><img alt="" src="/images/chinatours/customized.jpg"></a></div>
    <div class="lastnew">
           <div class="tripadvisor">
           <div id="TA_selfserveprop417" class="TA_selfserveprop">
              <ul id="CWTAhoa5p" class="TA_links SqHBwet">
                 <li id="xIWUUprNI" class="tqiJR40vTk">11 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
              </ul>
           </div>
           <script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=417&amp;locationId=3824010&amp;lang=en_US&amp;rating=false&amp;nreviews=1&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=false&amp;border=true"></script>
        </div>
        <div class="lastnew1">
           <ul>
                <li class="title1">100% Tailor-made</li>
                <li>Dig China at your own speed</li>
                <li style="padding:6px 0px 6px 30px;">Nothing is impossible</li>
                <li>Create really unique china tour package</li>
           </ul>
           <ul>
                <li class="title1">Expert Knowledge</li>
                <li>Knowledgeable China Travel Expert</li>
                <li>Monitor your tour from the start to finish</li>
                <li>Highlight your China tour with real fun</li>
           </ul>
           <ul style="margin-right:0px; border:none;">
                <li class="title1">Fully Protected</li>
                <li>Legitimate Company with attentive care</li>
                <li style="padding:6px 0px 6px 30px;">24/7 emergency guide call</li>
                <li style="padding:6px 0px 6px 30px;">Established for over 5 years</li>
                <li style="background:none; padding-left:13px; width:198px;"><img alt="" src="/images/chinatours/pata.jpg" style="width:55px; height:37px; float:left; margin-right:30px;"> <img alt="" src="/images/chinatours/what.jpg"></li>
           </ul>
          </div>
      </div>
</div>
<!--  index end  -->

<?php echo $this->renderPartial("//common/pop_more_cities");?>

<script>
var _cityTours = {
		questionTab:function(num, obj){
			  $(obj).parents("ul").find("li").removeClass("dq");
			  $(obj).addClass("dq");
			  if(num == 1){
				  $("#questionTab1").hide();
				  $("#questionTab2").show();
			  }else{
				  $("#questionTab1").show();
				  $("#questionTab2").hide();
			  }
		},
		changeTab:function(obj, num){
			$(obj).parent("ul").find("li").removeClass("dq");
			$(obj).addClass("dq");
			if(num == 1){
				$("#c01").show();
				$("#c02").hide();
			}else{
				$("#c01").hide();
				$("#c02").show();
			}
		},
		submitMessage:function(obj){
			 var message = $(obj).parents("table").find("textarea[name='message']").val();
			  var username = $(obj).parents("table").find("input[name='username']").val();
			  var email = $(obj).parents("table").find("input[name='email']").val();
			  if($.trim(message) == ''){ 
				  $(obj).parents("table").find(".qmessage_error").show();
				  return false;
			  }else{
				  $(obj).parents("table").find(".qmessage_error").hide();
			  }
			  if($.trim(username) == ''){
				  $(obj).parents("table").find(".qusername_error").show();
				  return false;
			  }else{
				  $(obj).parents("table").find(".qusername_error").hide();
			  }

			  if(!/(\S)+[@]{1}(\S)+[.]{1}(\w)+/.test(email)) {
				  $(obj).parents("table").find(".qemail_error").show();return false;
			  }else{
				  $(obj).parents("table").find(".qemail_error").hide();
			  }
			  var YII_CSRF_TOKEN = "<?php echo Yii::app()->request->csrfToken;?>";
			  $.post("<?php echo Yii::app()->createUrl("toursPackage/ajaxAddMessage");?>", {message:message, username:username, email:email,  YII_CSRF_TOKEN:YII_CSRF_TOKEN}, function(ret){
				  if(ret == 0){
					alert("Submit Successful.");
					$(obj).parents("table").find("textarea[name='message']").val("");
					$(obj).parents("table").find("input").val("");
				  }
			  })
	    }
}
 </script>
