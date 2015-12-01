<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); 

?>
<style type="text/css">
<!--
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
.trust{ margin-top:0px;}
.errorMessage{display:none}
#left{ width:170px; height:auto; float:left; margin-top:15px; padding:0px 3px 15px 0px;}
#right{ width:737px; height:auto; float:right; margin-top:15px;}
.rightlist h2{ width:163px; height:25px; background:#999999; border-left:4px solid #8c4600; color:#fff; font-size:14px; font-weight:normal; padding-left:3px; line-height:25px; display:block; white-space:nowrap; text-shadow:1px 0px 0px #666;}
.rightlist ul{width:150px;}
#CDSWIDSSP .widSSPData{ width:160px; padding:7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:153px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px; margin-top:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
.listtwo{ height:255px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Beijing Xian Tours</div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/banner2.jpg" alt="" /></div> 
    <!--  right start  -->
    <div id="right">
         <!--  text start  -->
         <div class="textnew">
           <div class="textleftnew">
              <h2>Beijing Xian Tours</h2>
              <p>Are you thinking of making a side trip from Beijing to Xian? It is often said that no visit to China is complete without a journey to Xian. Going between Beijing and Xian, there are 10 daily high-speed trains and 10 overnight fast trains, plus over 20 daily flights operating between Beijing and Xian. The one and half hours’ flight makes it possible for you to take one day round trip from Beijing to Xian (Terra-cotta Army) and back to Beijing. Here we offer you Beijing to Xian tours by train/ flight, Xian day tours, Beijing tours, and other China Tours with unbeatable price.</p>
            </div>
            <div class="callbutton"><a href="/travel/china-diy-tours"><img src="/images/beijing_shanghai/call.png"></a></div>
        </div>
        <!--  text end  -->
        
        <div class="tab-menu">
           <ul>
             <li onclick="_cityTours.changeTab(this,1);" class="dq"><strong>Best Selling Beijing Xian Tours</strong><span></span></li>
           </ul>
        </div>        
        <!--  toplist start  -->
        <div class="toplist">
            <div class="listtwo">
               <ul>
                  <li><a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-air-562.html"><img src="/images/beijing_shanghai/top4.png" alt="" ></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-air-562.html">1-day Terracotta Warriors Tours from Beijing</a></li>
                          <li>· Terra-cotta Warriors</li>
                          <li>· Ancient City Wall</li>
                          <li>· Private Guide &amp; Vehicle</li>
                          <li class="price">From <strong>$420</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div class="listtwo">
               <ul>
                  <li><a href="/travel/china-2-days-standard-xian-tours-from-beijing-by-flight-152.html"><img src="/images/beijing_shanghai/top5.png" alt="" ></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-2-days-standard-xian-tours-from-beijing-by-flight-152.html">2-days Xian Tours from Beijing by Round-trip Flight</a></li>
                          <li>· Terra-cotta Warriors</li>
                          <li>· City Wall Cycling</li>
                          <li>· Big Wild Goose Pagoda</li>
                          <li class="price">From <strong>$569</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
           <div class="listtwo" style="margin-right:0px;">
               <ul>
                  <li><a href="/travel/china-1-day-xian-tours-by-overnight-fast-train-trip-410.html"><img src="/images/beijing_shanghai/top6.png" alt="" ></a></li>
                  <li>
                      <ol>
                          <li><a href="/travel/china-1-day-xian-tours-by-overnight-fast-train-trip-410.html">1-day Xi'an Tours from Beijing by Overnight Train Trip</a></li>
                          <li>· Great Mosque &amp; City Wall</li>
                          <li>· Bell &amp; Drum Tower Square</li>
                          <li>· Terra Cotta Warriors</li>
                          <li class="price">From <strong>$410</strong> P/P</li>
                      </ol>
                  </li>
               </ul>
           </div>
        </div>
        <!--  toplist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>XIAN TOURS FROM BEIJING</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic7.jpg" alt="" ></div>
           <div class="listcontent1"><p>Xian Tour Packages from Beijing by train or flight. Best way to enjoy Xian sightseeing including Shaanxi Provincial History Museum, Xian Ancient City Wall, The Bell Tower, Forest of Stone Steles Museum, the Terra-cotta Warriors and Banpo Museum and many more.</p></div>
           <div class="listul">
              <?php 
                $arr  = array('By Flight'=>'562,152,571,325,326', 'By Train'=>'410,710,555,711', 'By Flight &amp; Train'=>'409');
              ?>
              <ul>
                <?php foreach($arr as $k=>$v):?>
                  <li class="name"><?php echo $k;?></li>
                      <?php 
                          $criteria = new CDbCriteria;
                          $criteria -> select = 'id,name,city_num,attractions,route';
                          $criteria -> condition = "id in($v)";
                          $criteria -> order = "days asc";
                          $tours = ToursPackage::model() -> findAll($criteria); 
                     ?>
                      <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
                <?php endforeach;?>
                       
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2>BEIJING AND XIAN TOURS</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic08.jpg" alt="" ></div>
           <div class="listcontent1"><p>Beijing Xian tour packages to visit Tiananmen Square, Forbidden City, Temple of Heaven, Terracotta Warriors and Horses Museum, City Wall and Big Wild Goose Pagoda etc with a la cart meals and luxurious hotels.</p></div>
           <div class="listul">
            <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(324,327)";
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
           <h2>BEIJING XIAN EXTENDED TOUR</h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic09.jpg" alt="" ></div>
           <div class="listcontent1"><p>Between Beijing and Xian also lie some UNESCO World Cultural Heritage crowned destinations like Datong (Yungang Grottoes), Pingyao (Ancient City), and Luoyang (Longmen Grottoes and Shaolin Temple) and Yan'an (Hukou Waterfalls) which could be fit into your Beijing Xian tour package if you have extra time traveling time between Beijing and Xian.</p></div>
           <div class="listul">
            <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(833,835,372,836,837,17,22)";
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
           <h2><strong>Best Tours in Xi'an</strong> <a href="/travel/city-xian-tours"><img src="/images/beijing_shanghai/more.png" alt="" ></a></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic010.jpg" alt="" ></div>
           <div class="listcontent1"><p>Xian is the capital of Shaanxi Province and the biggest city in the northwest of China. It boasts a mild climate, fertile soil, beautiful scenery, abundant products, and numerous historical relics and sites. It was also the first stop on the Silk Road, linking up the oriental and western civilizations. We are offering you various Xian city and side tours with best service.</p></div>
           <div class="listul">
            <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(559,570,563,160,154,731)";
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
           <h2><strong>Best Tours in Beijing</strong> <a href="/travel/city-beijing-tours"><img src="/images/beijing_shanghai/more.png" alt="" ></a></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic4.jpg" alt="" ></div>
           <div class="listcontent1"><p>Beijing, the capital city of China, is known for its amazing cultural and historical remains throughout the world, such as the significant Great Wall, mysterious Forbidden City, elegant Summer Palace, sacring Temple of Heaven. Here we are offering the city tours in Beijing and side trips from Beijing with best price.</p></div>
           <div class="listul">
              <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(312,575,333,683,103,90,152)";
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
          <!--  <h2 style="height:23px;"><img src="/images/beijing_shanghai/title9.jpg" alt="" /></h2> -->
          <h2>Beijing Xian Tours</h2>
           <ul>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing to Xian Tour by Flight')));?>">Beijing to Xian by Air</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing to Xian Tour by Train')));?>" style="white-space: nowrap;">Beijing to Xian by Train</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing and Xian Tours')));?>">Beijing and Xian Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing Xian Extended Tour')));?>">Beijing Xian Extension</a></li>
             </ul>
             <!-- <h2><img src="/images/beijing_shanghai/title10.jpg" alt="" /></h2> -->
             <h2>Xian Tours</h2>
             <ul>
               <li><a href="/travel/city-xian-tours#xian-private-tour">Xian Private Tour</a></li>
               <li><a href="/travel/city-xian-tours#xian-group-tour">Xian Group Tour</a></li>
               <li><a href="/travel/city-xian-tours#xian-side-tours">Xian Side Tours</a></li>
               <li><a href="/travel/shanghai-xian-tours">Shanghai Xian Tour</a></li>
             </ul>
             <!-- <h2><img src="/images/beijing_shanghai/title11.jpg" alt="" /></h2> -->
             <h2>Beijing Tours</h2>
             <ul>
               <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">Beijing Private Tour</a></li>
               <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">Beijing Coach Tour</a></li>
               <li><a href="/beijing/tours?v=list&id=1">Great Wall Tours</a></li>
               <li><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">72 Hours Visa Free Tour</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tour</a></li>
               <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai</a></li>
               <li><a href="/travel/search-beijing-tours?des=19_beijing_pingyao_tours">Beijing Pingyao Tours</a></li>
               <li><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours">Beijing Datong Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>#from-beijing">China Tours from Beijing</a></li>
               
             </ul>
             <!-- <h2><img src="/images/beijing_shanghai/title12.jpg" alt="" /></h2> -->
             <h2>Beijing Xian Transport</h2>
             <ul>
               <li><a href="<?php echo Yii::app()->createUrl("beijingXianTours/flightSchedule");?>">Flight Timetable &amp; Ticket</a></li>
               <li><a href="<?php echo Yii::app()->createUrl("beijingXianTours/trainSchedule");?>">Train Timetable &amp; Ticket</a></li>
             </ul>
             <!-- <h2><img src="/images/beijing_shanghai/title13.jpg" alt="" /></h2> -->
             <h2>Xian Travel Guide</h2>
             <ul>
               <li><a href="/travel/china-xian-facts-guide-42">Xian Facts</a></li>
               <li><a href="/travel/china-xian-attractions">Xian Attractions</a></li>
               <li><a href="/travel/xian-hotels-180">Xian Hotel</a></li>
               <li><a href="/xian/map.html">Xian Maps</a></li>
               <li><a href="/travel/china-xian-climate-guide-266">Xian Climate</a></li>
               <li><a href="/travel/china-xian-transportations-guide-264">Transportations</a></li>
               <li><a href="/travel/china-xian-travel-tips-guide-265">Xian Travel Tips</a></li>
               <li><a href="/travel/china-xian-food-restaurants-guide-41">Food &amp; Restaurants</a></li>
               <li><a href="/travel/china-xian-nightlife-guide-43">Xian Nightlife</a></li>
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
 

<!-- Google Code for Beijing Xian -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "J5LECJrvhgcQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=J5LECJrvhgcQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
