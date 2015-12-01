<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); 
$this->setPageTitle("Tours from Shanghai to Beijing Great Wall, Travel Beijing to Shanghai by Train/ Flight");
Yii::app()->clientScript->registerMetaTag('keywords','tours shanghai to beijing, tours from shanghai to beijing, beijing shanghai package, travel beijing to shanghai, tours beijing shanghai');
Yii::app()->clientScript->registerMetaTag('description','Leadtochina offers you 1-9 days Beijing tours from shanghai, Shanghai tours from Beijing, Beijing & Shanghai tours, and more China tours with/ from Shang Beijing. ');
?>
<style type="text/css">
<!--
 .errorMessage{display:none}
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
#left{ width:170px; height:auto; float:left; margin-top:15px; padding:0px 3px 15px 0px;}
#right{ width:737px; height:auto; float:right; margin-top:15px;}
.rightlist h2{ width:163px; height:25px; background:#999999; border-left:4px solid #8c4600; color:#fff; font-size:14px; font-weight:normal; padding-left:3px; line-height:25px; display:block; white-space:nowrap; text-shadow:1px 0px 0px #666;}
.rightlist ul{width:150px;}
.rightlist ul.tesu{ width:160px;}
#CDSWIDSSP .widSSPData{ width:160px; padding:7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:153px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px; margin-top:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Beijing Shanghai Tours</div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/banner.jpg" alt="" /></div> 
    <!--  right start  -->
    <div id="right">
         <!--  text start  -->
         <div class="textnew">
           <div class="textleftnew">
              <h2>Beijing Shanghai Tours</h2>
              <p>Beijing and Shanghai are the top tourist cities. Beijing, China's capital city, is a vibrant mix of history and modernity. Much of China's most impressive historical heritage like the Great Wall and Forbidden City is highly recommended. Shanghai is the largest center of commerce and finance in mainland China. Top attractions are the Oriental Pearl TV Tower, Jinmao Tower, the Bund, Yuyuan Garden. We are offering you various Beijing tours from Shanghai, Shanghai tours from Beijing, Shanghai tours, Beijing tours, China tours with best price and reputed services.</p>
            </div>
            <div class="callbutton"><a href="/travel/china-diy-tours"><img src="/images/beijing_shanghai/call.png"></a></div>
        </div>
        <!--  text end  -->
        <div class="tab-menu">
           <ul>
             <li onclick="_cityTours.changeTab(this,1);" class="dq"><strong>Best Selling Beijing Shanghai Tours</strong><span></span></li>
           </ul>
        </div>
        
        <!--  toplist start  -->
        <div id="c01">
        <div class="toplist">
              <div class="listtwo">
               <ul>
                  <li><a href="/travel/china-2-days-beijing-private-tours-fly-from-shanghai-351.html"><img alt="" src="/images/beijing_shanghai/top1.png"></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-2-days-beijing-private-tours-fly-from-shanghai-351.html">2-days Beijing Tours from Shanghai by Flight</a></li>
                          <li>· Mutianyu Great Wall</li>
                          <li>· The Forbidden City</li>
                          <li>· Shanghai Hotel &amp; Airport Transfer </li>
                          <li>· Private English Guide &amp; Driver</li>
                          <li class="price">From <strong>$595</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div class="listtwo">
               <ul>
                  <li><a href="/travel/china-3-days-beijing-tours-from-shanghai-by-flight-352.html"><img alt="" src="/images/beijing_shanghai/top2.png"></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-3-days-beijing-tours-from-shanghai-by-flight-352.html">3 Days Beijing Tours from Shanghai by Flight + G Train</a></li>
                          <li>· Great Wall &amp; Forbidden City</li>
                          <li>· Temple of Heaven &amp; Summer Palace</li>
                          <li>· Shanghai Hotel &amp; Airport Transfer</li>
                          <li>· Private English Guide &amp; Driver</li>
                          <li class="price">From <strong>$720</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div style="margin-right:0px;" class="listtwo">
               <ul>
                  <li><a href="/travel/china-3-days-beijing-to-shanghai-round-trip-by-high-speed-train-411.html"><img alt="" src="/images/beijing_shanghai/top3.png"></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-3-days-beijing-to-shanghai-round-trip-by-high-speed-train-411.html">3-days Beijing to Shanghai Tour by G Trains</a></li>
                          <li>· Yuyuan Garden</li>
                          <li>· Jade Buddha Temple</li>
                          <li>· Oriental Pearl Tower</li>
                          <li>· Round Train Trip</li>
                          <li class="price">From <strong>$770</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
        </div>
        </div>
        <!--  toplist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>Shanghai to Beijing Tour Packages</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic1.jpg" alt="" ></div>
           <div class="listcontent1"><p>Having served as the capital of the country for  more than 800 years, Beijing is home to some of the finest remnants of  China's imperial past. You may take bullet train or flight from Shanghai to  Beijing and enjoy Beijing's most popular attractions including the Forbidden  City, the Great Wall, and the hutongs etc.</p></div>
           <div class="listul">
             <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(738,351,352,321,573,511,737)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
             ?>
              <ul>
                     <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
                      
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>Beijing to Shanghai Tour Packages</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic2.jpg" alt="" ></div>
           <div class="listcontent1"><p>Shanghai has a rich collection of buildings and structures of various architectural styles. The Bund, combines various style architecture, is the best prove. Yuyuan Garden, a traditional garden in the Jiangnan style. And Jade Buddha Temple and Oriental Pearl TV tower also attrcats many local and overseas tourists annually for sightseeing. You may take flight or bullet trains from Beijing to Shanghai daily.</p></div>
           <div class="listul">
              <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(832,411,830,831)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
              ?>
              <ul>
                       <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>Beijing &amp; Shanghai Tour Packages</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic3.jpg" alt="" ></div>
           <div class="listcontent1"><p>Beijing &amp; Shanghai tours is an amazing tour package to visit china. The tours we offered are covering all top highlights in the two cities like Great Wall, Forbidden City, the Bund, Yuyuan Garden etc. Take train and flight are both fine. You may also customize a private tour from our help.</p></div>
           <div class="listul">
              <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(322,323,412)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
              ?>
              <ul>
                     <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2><strong>Tours in/from Beijing</strong> <a href="/travel/city-beijing-tours"><img src="/images/beijing_shanghai/more.png" alt="" ></a></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic4.jpg" alt="" ></div>
           <div class="listcontent1"><p>Beijing, the capital city of China, is known for its amazing cultural and historical remains throughout the world, such as the significant Great Wall, mysterious Forbidden City, elegant Summer Palace, sacring Temple of Heaven. Here we are offering the city tours in Beijing and side trips from Beijing with best price.</p></div>
           <div class="listul">
              <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(312,575,333,683,103,90,152,17,22)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
              ?>
              <ul>
                     <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2><strong>Tours in/from Shanghai</strong> <a href="/travel/city-shanghai-tours"><img src="/images/beijing_shanghai/more.png" alt="" ></a></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic5.jpg" alt="" ></div>
           <div class="listcontent1"><p>As one of the top tourist cities and most dynamic metropolis in China, Shanghai city tour and tours from Shanghai are very popular. It is convenient to travel from Shanghai to Beijing, Xian, Yangtze River, Guilin, Hangzhou, Suzhou...If you can not find one you like, you can also tailor-made Shanghai travel freely.</p></div>
           <div class="listul">
              <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(148,156,124,583,155,734,701)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
              ?>
              <ul>
                     <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
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
    <!--  right end  -->
    
    <!--  left start  -->
    <div id="left">
        <!--  rightlist start  -->
        <div class="rightlist">
            <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title01.jpg" alt="" /></h2>  -->
            <h2>Beijing Shanghai Tours</h2>
            <ul>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/search', array('title'=>'shanghai-to-beijing-tours'));?>">Shanghai to Beijing Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/search', array('title'=>'beijing-to-shanghai-tours'));?>">Beijing to Shanghai Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/search', array('title'=>'beijing-and-shanghai-tours'));?>">Beijing &amp; Shanghai Tours</a></li>
             </ul>
             <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title02.jpg" alt="" /></h2> -->
             <h2>Beijing Tours</h2>
             <ul>
               <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">Beijing Private Tour</a></li>
               <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">Beijing Group Tour</a></li>
               <li><a href="/beijing/tours?v=list&id=1">Great Wall Tour</a></li>
               <li><a href="/travel/beijing-xian-tours">Beijing Xian Tour</a></li>
             </ul>
             <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title03.jpg" alt="" /></h2> -->
             <h2>Shanghai Tours</h2>
             <ul>
               <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>#shanghai-private-tour">Shanghai Private Tour</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>#shanghai-bus-tour">Shanghai Group Tour</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>#shanghai-side-trips">Shanghai Suzhou <br />Hangzhou</a></li>
               <li><a href="/travel/shanghai-xian-tours">Shanghai Xi'an Tour</a></li>
             </ul>
             <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title04.jpg" alt="" /></h2>  -->
             <h2>China Tours</h2>
             <ul>
               <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>#from-beijing">China Tours from Beijing</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>#shanghai-china-tours">China Tours from <br />Shanghai</a></li>
             </ul>
             <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title05.jpg" alt="" /></h2>  -->
             <h2 style=" font-size:13px; letter-spacing:-1px;">Beijing Shanghai Transport</h2>
             <ul class="tesu">
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/flightSchedule');?>"><img src="/images/beijing_shanghai/flight-time1.jpg" alt="" /></a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/trainSchedule');?>"><img src="/images/beijing_shanghai/train-time1.jpg" alt="" /></a></li>
            </ul>
        </div>
        <!--  rightlist end  -->
        
        <div class="tripcontent">
        <div id="TA_selfserveprop799" class="TA_selfserveprop">
<ul id="vdOR3kv" class="TA_links nxpFftqNU">
<li id="rObcNYyLZ2c" class="ecPLYkyiUu">25 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=799&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>  
    </div>
        
        <!--  search start  -->
      <!--  <div id="search">
             <h2><img src="/images/beijing_shanghai/searchh2.jpg" alt="" /></h2>
             <div class="search-cont">
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
                     <li><input type="checkbox" name="city2[]" value="Beijing"> Beijing</li>
                     <li><input type="checkbox" name="city2[]" value="Xian"> Xian</li>
                     <li><input type="checkbox" name="city2[]" value="Shanghai"> Shanghai</li>
                     <li><input type="checkbox" name="city2[]" value="Guilin"> Guilin</li>
                     <li><input type="checkbox" name="city2[]" value="Yangtze"> Yangtze</li>
                     <li><input type="checkbox" name="city2[]" value="Tibet"> Tibet</li>
                  </ol>
               </td>
            </tr>
            <tr>
               <td><span id="more_index">Select more cities</span></td>
            </tr>
            <tr>
               <td style="padding:5px 0px 2px 8px;">
                  <form name="toursearchpanelform" method="get" action="<?php echo Yii::app()->createUrl("chinaTours/searchList");?>">
                      <input type="hidden" name="city" id="menu_city" value="" />
                      <input type="hidden" name="days" id="menu_days" value="" />
                      <input type="hidden" name="price" id="menu_price" value="" />
                      <input type="image" src="/images/beijing_shanghai/search.jpg" />
                      <a style="text-decoration:underline; color:#333; font-style:italic; float:right; padding-right:10px; line-height:24px;" href="/travel/advance-search">Advanced Search &raquo;</a>
                  </form> 
                  </td>
            </tr>
          </tbody>
        </table>
         </div>
        </div>  -->
        <!--  search end  -->
        <!--
        <div class="sbottom"></div>  -->
        
        <!--  trust start  -->
        <!-- <div class="trust">
            <ul>
                <li><a href="/member-pata"><img src="/images/beijing_shanghai/PATA.jpg" alt="" /></a></li>
                <li>We are the member of PATA</li>
            </ul>
            <div class="trip-cont">
                <div id="TA_selfserveprop169" class="TA_selfserveprop">
                   <ul id="xpmCaCVwY" class="TA_links igNYd08qa">
                      <li id="UJrtaqi" class="9LkKK4I1">21 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
                   </ul>
                 </div>
                 <script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=169&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>
            </div>
        </div>-->
        <!--  trust end  -->
        
        <!--  quick start  -->
        <!--  <?php $this->renderPartial('/message/_form2',array(
            'model'=>$message,
          )); ?>   -->
        <!--  quick end  -->
        
    </div>
    <!--  left end  -->
</div>
<!--  index end  -->
<?php echo $this->renderPartial("//common/pop_more_cities");?>


<script>
var _cityTours = {
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

<!-- Google Code for Beijing Shanghai -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "U8pRCNLqggcQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=U8pRCNLqggcQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
