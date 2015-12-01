<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/newbeijing.css'); 
Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/jquery.soChange.js');
$request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>$title)).'?';
?>
<style type="text/css">
 .errorMessage{display:none}
  #CDSWIDSSP{width:198px !important;}
  #CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd {
    width: auto !important;
}
</style>
<div class="content-beijing">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="/travel/city-tours">City Tours</a> Beijing Tours</div>
    <div id="banner"><img alt="" src="/images/citytours/banner_beijing.jpg"></div>
    <div class="text">
          <!-- <a href="#"><img alt="" src="/images/citytours/button.jpg"></a>  -->
          <div class="txt"><h2>Beijing Tour</h2>
          <p>Beijing, the capital city of China, is known for its amazing cultural and historical remains throughout the world, such as the significant Great Wall, mysterious Forbidden City, elegant Summer Palace, sacring Temple of Heaven. Whether you are looking for a Beijing tour information, or a real Beijing lifelong tour experiences, here is the right place. Leadtochina with Beijing branch offices show you the great value Beijing tour with competitive quotation.</p></div>
       </div>
    <div class="clear"></div> 
    <!--  left start  -->
    <div class="left">
       <!--  list start  -->
       <div class="list">
          <ul>
             <li class="big">Beijing Tour Services</li>
             <li>
                <ol>
                   <li><a href="<?php echo $request_uri.'tour_type=1_Private+Tours';?>">Beijing Private Tour</a></li>
                   <li><a href="<?php echo $request_uri.'tour_type=2_Join+Groups';?>">Beijing Group Tour</a></li>
                   <li><a href="<?php echo $request_uri.'des=1_Great+Wall+Tours';?>">Great Wall Tours</a></li>
                   <li><a href="<?php echo $request_uri.'theme=113_72+Hours+Visa+Free+Tour';?>">72 Hours Visa Free Tour</a></li>
                 </ol>
             </li>
             <li class="big">Beijing Side Tours</li>
             <li>
                 <ol>
                   <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>
                   <li><a href="/travel/cruise-port/tianjin-cruise-port-to-beijing">Tianjin Port Beijing Excursion</a></li>
                   <li><a href="<?php echo $request_uri.'des=9_Beijing+Tianjin+Tours';?>">Beijing Tianjin Tours</a></li>
                   <li><a href="<?php echo $request_uri.'des=8_Beijing+Chengde+Tours';?>">Beijng Chengde Tours</a></li>
                   <li><a href="<?php echo $request_uri.'des=12_Beijing+Xian+Shanghai+Tours';?>">Beijing Xian Shanghai Tours</a></li>
                 </ol>
              </li>
              <li class="big">Beijing Day Tours</li>
              <li>
                 <ol>
                   <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch')."?days=1+Day";?>">1-Day Beijing Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch')."?days=2+Days";?>">2-Days Beijing Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch')."?days=3+Days";?>">3-Days Beijing Tour</a></li>
                   <li><a href="<?php echo Yii::app()->createUrl('cityTours/beijingTourSearch')."?days=4+Days";?>">4-Days Beijing Tour</a></li>
                 </ol>
              </li>
          </ul>
       </div>
       <!--  list end  -->
       
       <!--  list1 start  -->
       <div class="list1"><a href="/index.php?option=com_diytour"><img alt="" src="/images/citytours/diy.jpg"></a></div>
       <!--  list1 end  -->
       
       <!--  searchlist start  -->
       <div class="searchlist">
          <?php $this->renderPartial('_bjSearch', array('subtagid_arr'=>(array)$subtagid_arr,'city'=>$city,'days'=>$days));?>
      </div>
       <!--  searchlist end  -->
       <div class="list1"><a href="/travel/cruise-port/tianjin-port-port-excursion-5"><img alt="" src="/images/citytours/tianjin.jpg"></a></div>
    </div>
    <!--  left end  -->
    
    <!--  middle start  -->
    <div class="middle">
       <!--  middlelist start  -->
       <div class="middlelist">
           <h2 style="margin-top:0px;"><a name="beijing-private-tour"></a><a href="<?php echo $request_uri.'tour_type=1_Private+Tours';?>">Beijing Private Tour</a> <span>(Private Car &amp; Guide, Flexible Time)</span></h2>
           <div class="listcontent">
               <ul>
                   <li class="pic"><img alt="" src="/images/citytours/beijingpic1.jpg"></li>
                   <li class="desc">
Beijing private tour is for people who want to travel with families, frineds or themselves. Accodring to your time and interests, you can tour them with private Beijing tour guide and car or van with driver. This is a much more comfortable way to appreciate Beijing compared with Beijing coach tour.</li>
               </ul>  
               <div class="clear"></div>
               <ol>
                  <li><a href="/travel/china-1-day-private-mutianyu-great-wall-tours-312.html">1 Day Private Mutianyu Great Wall Tours</a> 
                      <span><strong>FEATURES:</strong> Mutianyu Great Wall</span> 
                  </li>
                  <li><a href="/travel/china-2-days-explore-the-world-heritage-in-beijing-333.html">2 Days Explore the World Heritage in Beijing</a> 
                      <span><strong>FEATURES:</strong> Ming Tombs, Badaling Great Wall, Forbidden City, Temple of Heaven, Summer Palace</span> 
                  </li>
                  <li><a href="/travel/china-2-days-beijing-private-tours-fly-from-shanghai-351.html">2 Days Beijing Private Tours Fly from Shanghai</a> 
                      <span><strong>FEATURES:</strong> Forbidden City, Tiananmen Square, Great Wall, Bird Nest, National Aquatics Center</span> 
                  </li>
                  <li><a href="/travel/china-visa-free-3-days-beijing-classical-private-tour-683.html">Visa-Free 3 Days Beijing Classical Private Tour</a> 
                      <span><strong>FEATURES:</strong> Tiananmen Square,Forbidden City,Ding Tomb,Mutainyu Great Wall,Temple of Heaven,Hutong Rickshaw Tour</span> 
                  </li>
                  <li><a class="hot" href="/travel/china-4-days-best-beijing-private-tours-103.html">4 Days Best Beijing Private Tours</a> 
                      <span><strong>FEATURES:</strong> Temple of Heaven, Tiananmen Square, Forbidden City, Summer Palace, Mutianyu Great Wall, Ming Tombs, Longdi ...</span> 
                  </li>
                  <li><a href="/travel/china-5-days-beijing-tour-with-local-features-345.html">5 Days Beijing Tour with Local Features</a> 
                      <span><strong>FEATURES:</strong> Tiananmen Square, Forbidden City, Mutianyu Great Wall, Dashilan old street</span> 
                  </li>
                  <li><a href="/travel/china-5-days-beijing-private-tour-with-shopping-355.html">5 Days Beijing Private Tour with Shopping</a> 
                      <span><strong>FEATURES:</strong> Tiananmen Square, Forbidden City, Temple of Heaven, Badaling Great Wall, Ming Tombs, Summer Palace </span> 
                  </li>
               </ol>
           </div>
           <div class="listbottom"><img alt="" src="/images/citytours/bottom.jpg"></div>
           
           <h2><a name="beijing-coach-tour"></a><a href="<?php echo $request_uri.'tour_type=2_Join+Groups';?>">Beijing Coach Tour</a> <span>(Cheap, English Guide, Daily Departure)</span></h2>
           <div class="listcontent">
               <ul>
                   <li class="pic"><img alt="" src="/images/citytours/beijingpic2.jpg"></li>
                   <li class="desc">Beijing Coach Tour is an affordable way of discovering the amazing Beijing. These bus tours are available daily. With comfortable air conditioner, shared English speaking guide, it costs less compared with Beijing Private tour. Besides, the maximum size of the group is no more than 15 people.</li>
               </ul>  
               <div class="clear"></div>
               <ol>  
                  <li><a class="hot" style="background-position:340px 0px;" href="/travel/china-1-day-badaling-great-wall--forbidden-city-bus-tour-575.html">1 Day Badaling Great Wall &amp; Forbidden City Bus Tour</a> 
                      <span><strong>FEATURES:</strong> Tiananmen Square, Forbidden City, Badaling Great Wall</span> 
                  </li>
                  <li><a href="/travel/china-mutianyu-great-wall-and-ming-tombsunderground-palace-one-day-bus-tour-678.html">Mutianyu Great Wall and Ming Tombs (Underground Palace) One Day Bus Tour</a> 
                      <span><strong>FEATURES:</strong> Ding Tomb, Mutainyu Great Wall</span> 
                  </li>
                  <li><a href="/travel/china-visa-free-3-days-beijing-classical-group-tour-682.html">Visa-Free 3 Days Beijing Classical Group Tour</a> 
                      <span><strong>FEATURES:</strong> Ding Tomb,Mutainyu Great Wall,Tiananmen Square,Forbidden City,Temple of Heaven</span> 
                  </li>
                  <li><a href="/travel/china-4-days-classic-beijing-group-tours-90.html">4 Days Classic Beijing Group Tours</a> 
                      <span><strong>FEATURES:</strong> Temple of Heaven, Forbidden City, Summer Palace, Mutianyu Great Wall, Ming Tombs</span> 
                  </li>
               </ol>
           </div>
           <div class="listbottom"><img alt="" src="/images/citytours/bottom.jpg"></div>
           
           <h2><a name="from-beijing"></a><a href="<?php echo Yii::app()->createUrl("chinaTours/searchList", array("starting_city"=>"beijing"));?>#result">China Tours from Beijing</a> <span>(Beijing to Xian, Shanghai, Hong Kong etc.)</span></h2>
           <div class="listcontent">
               <ul>
                   <li class="pic"><img alt="" src="/images/citytours/beijingpic3.jpg"></li>
                   <li class="desc">As Beijing is one of the main entrance to start China tour, plenty of oversea's tourists choose to strat China tour from Beijing. LeadtoChina offer all full China tour services to you with: tours, domestic flights/trains, transfer, hotels, meals, personal guides &amp; drivers and everything you want.</li>
               </ul>  
               <div class="clear"></div>
               <ol>
                  <li><a href="/travel/china-2-days-beijing-to-xian-tours--fast-trainflight--409.html">2 Days Beijing to Xian Tours ( Fast Train+Flight )</a> 
                      <span><strong>DESTINATIONS:</strong> Beijing, Xian, Beijing</span> 
                  </li>
                  <li><a href="/travel/china-6-days-best-beijing-and-shanghai-tours-by-flight-323.html">6 Days Best Beijing and Shanghai Tours By Flight</a> 
                      <span><strong>DESTINATIONS:</strong> Beijing, Shanghai</span> 
                  </li>
                  <li><a href="/travel/china-6-days-beijing-datong-pingyao-xian-private-tour-372.html">6 Days Beijing, Datong, Pingyao, Xian Private Tour</a> 
                      <span><strong>DESTINATIONS:</strong> Beijing, Datong, Pingyao, Xian</span> 
                  </li>
                  <li><a href="/travel/china-8-days-china-golden-standard-tour-17.html">8 Days China Golden Standard Tour</a> 
                      <span><strong>DESTINATIONS:</strong> Beijing, Xian, Shanghai</span> 
                  </li>
                  <li><a href="/travel/china-11-days-standard-beijing-xian-lhasa-shanghai-tour-93.html">11 Days Standard Beijing, Xian, Lhasa, Shanghai Tour</a> 
                      <span><strong>DESTINATIONS:</strong> Beijing, Xian, Lhasa, Shanghai</span> 
                  </li>
                  <li><a href="/travel/china-11-days-standard-china-tour-with-yangtze-river-54.html">11 Days Standard China Tour with Yangtze River</a> 
                      <span><strong>DESTINATIONS:</strong> Beijing, Xian, Yangtze River, Shanghai</span> 
                  </li>
                  <li><a href="/travel/china-12-days-top-china-tourism-cities-tour-714.html">12 Days Top China Tourism Cities Tour</a> 
                      <span><strong>DESTINATIONS:</strong> Beijing, Xian, Shanghai, Guilin, Hong Kong</span> 
                  </li>
               </ol>
           </div>
           <div class="listbottom"><img alt="" src="/images/citytours/bottom.jpg"></div>
           
           <h2 class="one"><b>Tour Beijing By Type</b></h2>
           <div class="listcontent1">
               <ul>
                   <li class="pic"><img alt="" src="/images/citytours/beijingpic4.jpg"></li>
                   <li class="desc">Beijing, the cultural center of China, has endowed too many connotations for culture and culture related activities. Those tours in different types will show you the real Beijing.</li>
                   <li>
                      <ol>
                          <li><a href="/travel/search-beijing-tours?theme=63_Season+Tours">Season Tours</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">Free-Visa Tour</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=114_Airport+Stop+Tour">Airport Stop Tour</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=70_Budget+Tours">Budget Tours</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=74_Shopping+Tour">Shopping Tour</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=89_No-shopping+Tour">No Shopping Tour</a></li>
                       </ol>
                    </li>
                    <li>
                       <ol> 
                          <li><a href="/travel/search-beijing-tours?theme=37_Local+Feature">Local Feature</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=16_Night+Tours+">Night Tours</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=28_Local+Life+%26+Hutong">Local Life&amp;Hutong</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=87_TCM+Study+Tour">TCM Study Tour</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=85_Bike+Tours">Bike Tours</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=110_Beijing+Musilm+Tour">Beijing Muslim Tour</a></li>
                        </ol>
                      </li>
                      <li>
                        <ol> 
                          <li><a href="/travel/search-beijing-tours?theme=12_World+Heritage+">World Heritage</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=15_Historical+Site">Historical Site</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=29_Modern+Site">Modern Site</a></li>
                          <li><a href="/travel/search-beijing-tours?theme=57_Museum">Museum</a></li>
                          <li style="width:25%;"><a href="/travel/search-beijing-tours?theme=69_Temples">Temples</a></li>
                          <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Cruise&amp; Beijing</a></li>
                        </ol>
                   </li>
               </ul>  
           </div>
           <div class="listbottom"><img alt="" src="/images/citytours/bottom.jpg"></div>
       </div>
       <!--  middlelist end  -->
       <div class="question">
           <h2><img alt="" src="/images/citytours/plan.jpg"></h2>
           <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td colspan="2">
                    	<textarea rows="" cols="" name="message">&nbsp;</textarea>
                    	<span class="qmessage_error errorMessage">It can't be blank.</span>
                    </td> 
                  </tr>
                  <tr>
                    <td colspan="2">
                    <input type="checkbox" name="" value="" checked="checked" style="width:auto; height:auto;"> Do you want to book a tour / hotel / flights.etc</td>
                  </tr>
                  <tr>
                    <td>Your Name: <input type="text" name="username">
                    <br /><span class="qusername_error errorMessage">It can't be blank.</span>
                    </td>
                    <td>E-mail: <input type="text" name="email">
                    <br /><span class="qemail_error errorMessage">Please enter correct email.</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"> <input type="button" value="" name="yt0" style="height:40px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block; width:221px;" class="form_button" onclick="_cityTours.submitMessage(this);"> </td>
                  </tr> 
                </tbody>
              </table>
       </div>
    </div>
    <!--  middle end  -->
    
    <!--  right start  -->
    <div class="right">
       <div class="rightlist">
           <h2><span>Beijing City Guide</span><a href="/beijing/">More+</a></h2>
           <div class="rightul">
               <ul>
                 <li><a href="/beijing/facts.html">Beijing Facts</a></li>
                 <li class="attractions"><a href="/beijing/attractions.html">Beijing Attractions</a></li>
                 <li class="shopping"><a href="/beijing/shopping.html">Beijing Shopping</a></li>
                 <li class="tours1"><a href="<?php echo Yii::app()->createUrl("cityTours/list", array('title'=>'beijing-tours'));?>">Beijing Tours</a></li>
                 <li class="transport"><a href="/beijing/transportations.html">Beijing Transportations</a></li>
                 <li class="hotel"><a href="<?php echo Yii::app()->createUrl("hotel/list", array('cityname'=>'beijing','hotelid'=>11));?>">Beijing Hotel</a></li>
              </ul>
           </div>
       </div>
       
       <!--  list1 start  -->
       <div class="list1"><a href="#"><img alt="" src="/images/citytours/diy1.jpg"></a></div>
       <!--  list1 end  -->
       
       <!--  list1 start  -->
       <div class="list1">
            <div id="TA_selfserveprop867" class="TA_selfserveprop">
             <ul id="0LlHq2gdesyD" class="TA_links 5WqMEo8w">
               <li id="F4faRTBkF3u" class="BIuB13waI">11 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
             </ul>
            </div>
            <script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=867&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>
       </div>
       <!--  list1 end  -->
       
       <!--  list1 start  -->
       <div class="list1"><a href="/images/Beijing_Travel_Brochure.PDF" target="_blank"><img alt="" src="/images/citytours/brochure.jpg"></a></div>
       <!--  list1 end  -->
       
       <!--  list1 start  -->
       <div class="list1"><a href="/travel/rental/car-rental" target="_blank"><img alt="" src="/images/citytours/carRental.jpg"></a></div>
       <!--  list1 end  -->
       
       <!--  list1 start  -->
       <div class="list1"><a href="/travel/rental/guide-rental" target="_blank"><img alt="" src="/images/citytours/guideRental.jpg"></a></div>
       <!--  list1 end  -->
       
       <!--  list1 start  -->
       <div class="list1"><a href="#" target="_blank"><img alt="" src="/images/citytours/air.jpg"></a></div>
       <!--  list1 end  -->
    </div>
    <!--  right end  -->
</div>
<script type="text/javascript">
  var _bj = (function($){
    return {
      changetab:function(obj){
        var ul_obj = $(obj).parents(".tours").find(".title > ul");
        ul_obj.find("li").removeClass("dq");
        $(obj).addClass("dq");
        var inx = ul_obj.find("li").index(obj);
        var tours_div_obj = $(obj).parents(".tours").find(".tabstyle");
        tours_div_obj.hide();
        tours_div_obj.eq(inx).show();
      },
      searchtab:function(obj){
        var span_obj = $(obj).parents(".right1").find("h2 > span");
        span_obj.removeClass("dq");
        var inx = span_obj.index(obj);
        $(obj).addClass("dq");
        $(obj).parents(".right1").find("div.search").hide();
        $(obj).parents(".right1").find("div.search").eq(inx).show();
      },
    }
  }(jQuery));
</script>
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
				  alert("Submit Successful.");
				  $(obj).parents("table").find("textarea[name='message']").val("");
				  $(obj).parents("table").find("input").val("");
			  })
	    }
}
 </script>
