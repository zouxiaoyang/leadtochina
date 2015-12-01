<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/save.css'); ?>
<?php $this->setPageTitle("Tianjin Cruise Port And Beijing Coach Transfer"); ?>
<style type="text/css">
<!--
.errorMessage{display:none}
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
#CDSWIDSSP .widSSPData{ width:172px; padding: 7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:172px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
#CDSWIDSSP .widSSPData .widSSPInformation{ padding:10px 0px 8px 0px;}
.tourlist2{ margin-top:0px;}
.listul1 ul li{ padding:3px 0px 3px 10px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruisePorts/tianjinCruisePort');?>">Tianjin Port Excursions</a> Tianjin Cruise Port ⇔ Beijing Coach Transfer</div>
   <!--  menu-tours end  -->
    <!--  left start  -->
    <div id="left">
       <div class="tuan_gou">
           <h2>Tianjin Cruise Port &hArr; Beijing Coach Transfer</h2>
           <div class="clear"></div>
           <div class="tuan_gou_left">	
           	 <form method="post" action="/index.php?option=com_order">
                <input type="hidden" name="pcid" value="" />
                <input type="hidden" name="unit_price" value="85" />
                <input type="hidden" name="pagetitle1" value="Tianjin Cruise Port ⇔ Beijing Coach Transfer"/>
                <input type="hidden" name="is_tuan_order" value="1" />
                <div class="tuan_gou_button"><input type="image" src="/images/save/button.png" /></div>
            </form>
              
               <div class="tuan_gou_info">
                   <div class="info_contain">
                       <table border="0" cellspacing="0" cellpadding="0">
                         <tbody>
                          <tr>
                             <td>Value</td>
                             <td>Discount</td>
                             <td>You Save</td>
                          </tr>
                          <tr>
                             <td>$160</td>
                             <td>53%</td>
                             <td>$75</td>
                          </tr>
                         </tbody>
                       </table>
                       <div class="clear"></div>
                       <ul>
                          <li class="info_title">Only <strong>18</strong> Left</li>
                          <li class="bought"><span><strong><?php echo $tuan_order_num;?> bought</strong>
                          The deal is on.</span></li>
                          <li class="time"><span>Time Left Before Close
                          <strong>
                            <em id="year" style="display:none">00</em>
                            <em id="month" style="display:none">00</em>
                            <em id="day">00</em> days
                            <em id="hour">00</em>:<em id="mini">00</em>:<em id="sec">00</em>
                            </strong></span></li> 
                          <li style="background:none;"><img src="/images/save/guarantee.png" alt="" /></li>
                       </ul>
                   </div>
               </div>
           </div>
           
           <div class="tuan_gou_right">
               <div class="right_contain">
                   <img src="/images/save/rightpic.jpg" alt="" />
                   <div class="clear"></div>
                   <ul>
                     <li><img src="/images/save/li3.jpg" alt="" /> <strong>Cruise Ship and Port:</strong> Celebrity Millennium Cruise Ship at Tianjin Cruise Home Port (Xingang)</li>
                     <li><img src="/images/save/li3.jpg" alt="" /> <strong>Transfer Dates:</strong> October 07 and October 15, 2014</li>
                     <li><img src="/images/save/li3.jpg" alt="" /> <strong>Transfer Details:</strong> Tianjin Cruise Port → Your Beijing Hotel:<br /> At 7:30am, boarding on the bus and leaving the port around 9:30am<br />
                     - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - <br />
                     Sunworld Dynasty Hotel Beijing → Tianjin Cruise Port:<br />
                     At 10:00am, our bus leaves from the parking lot ahead of the Sunworld Dynasty Hotel Beijing for Tianjin  Cruise Port.</li>
                     <li><img src="/images/save/li3.jpg" alt="" /> <strong>Guide Service:</strong> English speaking tour guide on board.</li>
                   </ul>
               </div>
               <div class="clear"></div>
              <!--  <div class="favorite"><img style="cursor: pointer;" src="/images/save/favorites.jpg" onclick="_cityTours.addFavorite('aaa','bb')" /></a></div>
               <div class="share"><strong>Share:</strong> <a style="width:30px;" href="http://www.tripadvisor.com/Widgets-g297403-d3824010-c6-a_widgetKey.selfserveprop-Lead_to_China_tours-Hefei_Anhui.html"><img src="/images/save/tripbutton.png" alt="" /></a><a href="mailto:service@leadtochina.com"><img src="/images/save/email.png" alt="" /></a><a href="http://twitter.com/leadtochina"><img src="/images/save/twitter.png" alt="" /></a><a href="http://facebook.com/lead2china"><img src="/images/save/facebook.png" alt="" /></a></div> -->
           </div>
           <div class="clear"></div>
           <div class="add_on">
              <h2>Add-on Extras</h2>
               <form method="post" action="/index.php?option=com_order">
                <input type="hidden" name="pcid" value="" />
                <input type="hidden" name="unit_price" value="85" />
                <input type="hidden" name="is_tuan_order" value="1" />
                <input type="hidden" name="pagetitle1" value="Tianjin Cruise Port ⇔ Beijing Coach Transfer"/>
              <div class="add_on_list">
                 <ul class="add_one">
                    <li><a href="<?php echo Yii::app()->createUrl('promotion/saveTianCruisePort');?>"><img src="/images/save/add_pic1.jpg" alt="" /></a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('promotion/saveTianCruisePort');?>">Tianjin Cruise Port &hArr; Beijing Coach Transfer</a></li>
                 </ul>
                 <ul>
                    <li><a href="/travel/china-3-days-tianjin-port-beijing-tianjin-port-round-trip-938.html"><img src="/images/save/add_pic2.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-3-days-tianjin-port-beijing-tianjin-port-round-trip-938.html">3-day Tianjin Port to Beijing Group Tour (No Shopping)</a></li>
                    <li><input type="checkbox" name="other_mes[]" value="3-day Tianjin Port to Beijing Group Tour (No Shopping)"> <strong>From $425</strong></li>
                 </ul>
                 <ul>
                    <li><a href="/travel/china-3-days-tianjin-port-beijing-tianjin-port-round-trip-940.html"><img src="/images/save/add_pic3.jpg" alt="" /></a></li>
                    <li><a href="/travel/china-3-days-tianjin-port-beijing-tianjin-port-round-trip-940.html">3-days Tianjin Port to Beijing Group Tour (Shopping Tour)</a></li>
                    <li><input type="checkbox" name="other_mes[]" value="3-days Tianjin Port to Beijing Group Tour (Shopping Tour)"> <strong>From $355</strong></li>
                 </ul>
                 <ul>
                    <li><a href="/travel/sunworld-hotel-beijing-1"><img src="/images/save/add_pic4.jpg" alt="" /></a></li>
                    <li><a href="/travel/sunworld-hotel-beijing-1">Sunworld Hotel Beijing</a></li>
                    <li><input type="checkbox" name="other_mes[]" value="Sunworld Hotel Beijing"> <strong>From $108</strong></li>
                 </ul>
                 <div class="save_button"><input type="image" src="/images/save/save_button.png" /></div>
              </div>
               </form>
           </div>
       </div>
       
       <div class="clear"></div>
       <div class="text_contain">
          <h2 style="margin-right:1px;">Service Description</h2>
          <div class="text_content">
             <div class="text_desc">
             <p><strong>Tianjin Port - Beijing City Transfer</strong>
             Our English-speaking guide will meet and greet you at the exit of Xingang Port with the signboard “LeadtoChina.com". With help of our representative or driver, you will be escorted to your waiting coach, outside the terminal. You are kindly advised to wait on the bus for others to come aboard the coach since it is a shared coach transfer.</p>
             <p>Arriving in Beijing, you will be transferred to your hotels respectively from South Beijing to North Beijing. So be patient if your hotel is located in the north city of Beijing. We keep approx. maximum 10 hotel stops, starting from the hotels in southern Beijing, then Beijing downtown and finally northern Beijing. All hotels are designated by our clients, not pre-arranged by us.</p> 
             <p>If no traffic congestion and no heavy fog, the coach drive from Xingang Port to Beijing takes about 2 hours along the Jingjintang Highway. The total hotel stops take aprrox.4 hours. Our coach stops from the hotels in southern Beijing, then Beijing downtown and finally northen Beijing.</p>
             <p><strong>Beijing City - Tianjin Port Transfer</strong>
             Beijing Sunworld Dynasty Hotel is our designated place for our passengers to get together for the coach shuttle transfer. So for Beijing - Tianjin Cruise Port coach transfer, you are kindly requested to be on our bus before 10:00am since our coach is scheduled to leave the parking lot of Beijing Sunworld Dynasty Hotel at 10:00am. Hotel Address: 50 Wangfujing Avenue, Beijing.</p>
             <p>We don't offer free transfer from your hotel to the meeting place. You may take a taxi or subway, or use our paid transfer service. You may take a taxi; or take the subway line 1 and line 5 to get there.</p>
             </div>
             <div class="text_pic">
                <img src="/images/save/text_pic1.jpg" alt="" />
                <img src="/images/save/text_pic2.jpg" alt="" />
                <a href="/images/save/text_pic3_big.jpg" target="_blank"><img src="/images/save/text_pic3.jpg" alt="" /></a>
             </div>
             <div class="clear"></div>
             <h2>NOTE</h2>
             <div class="text_desc1">
             <p>1. Tianjin Port is about 200 km from Beijing. The normal Tianjin Port Xingang Beijing one way drive takes about 2-3 hours. But along the Jinjingtang Highway linking Beijing and Tianjin Port, heavy fog happens occasionally for the whole year, nobody can predict the coming fog day for an exact date though the historical fog record shows that the most possibility of fog days fall on October and early November. So the drive will take much longer time in a foggy day and affect your Beijing excursion or your transfer consequently.</p> 
             <p>2. Each passenger is allowed to carry maximum two large suitcases on the bus. If you have more luggage, please contact our trip advisor in advance to avoid any trouble.</p>
             <p>3. On the way from Xingang Port to Beijing, our coach will stop at a service area on the highway, where you can use toilet, buying water and snacks.</p> 
             <p>4. If your hotel in Beijing is located not within the third ring road in Beijing, or far from Beijing city center, you will be arranged to drop off at the final stops as well as extra cost will be charged.</p></div>
             <div class="clear"></div>
             <h2>Tours You May Like</h2>
             <div class="text_desc1">
             <p>You are welcome to take our prearranged Beijing day tours. We have two kinds of Beijing day tours - Beijing seat-in bus tours and Beijing private day tours.</p>
             <div class="clear"></div>
             <ul>
                <li class="pic"><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups"><img src="/images/save/text_pic4.jpg" alt="" /></a></li>
                <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">Beijing Coach Tours</a>
                    For Beijing seat-in coach tours, you will be arranged in a small group (around 10 persons) with other tourists from different countries on the same tour bus. You will be escorted by our professional English speaking tour guide to fulfill your exciting Beijing sightseeing. Join-in Group Tour advantage: money saving make new friends by mixing with the other travelers.
                </li>
             </ul>
             <ul>
                <li class="pic"><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours"><img src="/images/save/text_pic5.jpg" alt="" /></a></li>
                <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">Beijing Private Day Tours</a>
                    For private tours, you will enjoy the exclusive use of a vehicle and a tour guide for you or your family. No other tourists will join you. You have much to say in deciding your daily travel schedule. Private Beijing Tours advantage: flexible, more privacy, though a little more expensive than a bus tour.
                </li>
             </ul>
             </div>
          </div>
       </div>
       
       <div class="question">
           <h2>Write Your Questions</h2>
           <div class="ques_contain">
              <table border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                      <tr>
                         <td colspan="2">You can post as a member!</td>
                      </tr>
                      <tr>
                         <td colspan="2">
													<textarea name="message" cols="" rows="">&nbsp;</textarea><br />
                    			<span class="qmessage_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td>Your Name <input name="username" type="text" /><br />
                    		<span class="qusername_error errorMessage">It can't be blank.</span></td>
                         <td style="text-align:right;">E-mail <input name="email" type="text" /><br />
                    		<span class="qemail_error errorMessage">Please enter correct email.</span></td>
                      </tr>
                      <tr>
                         <td colspan="2"><a style="width:220px; height:30px; margin-top:5px;" href="###"  onclick="_cityTours.submitMessage(this);"><img src="/images/save/submit.png" alt="" /></a></td>
                      </tr>
                  </tbody>
             </table>
           </div>
       </div>
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right"> 
         <!--  rightlist start  -->
        <div class="rightlist1">
           <h2 style="height:23px;"><img src="/images/cruise/title1.jpg" alt="" /></h2>
           <ul>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>1));?>">Celebrity Millennium</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>2));?>">Sapphire Princess</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>3));?>">Voyager of the Seas</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>4));?>">Holland America Volendam</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>5));?>">Oceania Nautical</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>6));?>">Crystal Symphony</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/ServicePassengersFrom', array('id'=>7));?>">Regent Seven Seas Voyager</a></li>               
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
         
         <div class="online-step">
            <h2><img src="/images/cruise/title5.jpg" alt="" /></h2>
            <ul>
                <li><img src="/images/cruise/step1.jpg" alt="" /></li>
                <li><img src="/images/cruise/step2.jpg" alt="" /></li>
                <li><img src="/images/cruise/step3.jpg" alt="" /></li>
                <li><img src="/images/cruise/step4.jpg" alt="" /></li>
                <li><img src="/images/cruise/step5.jpg" alt="" /></li>
            </ul>
         </div>
    </div>
    <!--  right end  -->
</div>
<!--  index end  -->

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
      },
    addFavorite:function(){
			var sURL = window.location;
    	var sTitle = document.title;
    	try{
        window.external.addFavorite(sURL, sTitle);
	    }catch (e){
	        try{
	            window.sidebar.addPanel(sTitle, sURL, "");
	        }catch (e){
	            alert("Add favorite failure, Please press Ctrl+D to bookmark this page.");
	        }
	    }
    } 
}
 </script>


<script type="text/javascript">
var fnTimeCountDown = function(d, o){
  var f = {
    zero: function(n){
      var n = parseInt(n, 10);
      if(n > 0){
        if(n <= 9){
          n = "0" + n;  
        }
        return String(n);
      }else{
        return "00";  
      }
    },
    dv: function(){
      d = d || Date.UTC(2050, 0, 1); //如果未定义时间，则我们设定倒计时日期是2050年1月1日
      var future = new Date(d), now = new Date();
      //现在将来秒差值
      var dur = Math.round((future.getTime() - now.getTime()) / 1000) + future.getTimezoneOffset() * 60, pms = {
        sec: "00",
        mini: "00",
        hour: "00",
        day: "00",
        month: "00",
        year: "0"
      };
      if(dur > 0){
        pms.sec = f.zero(dur % 60);
        pms.mini = Math.floor((dur / 60)) > 0? f.zero(Math.floor((dur / 60)) % 60) : "00";
        pms.hour = Math.floor((dur / 3600)) > 0? f.zero(Math.floor((dur / 3600)) % 24) : "00";
        pms.day = Math.floor((dur / 86400)) > 0? f.zero(Math.floor((dur / 86400)) % 30) : "00";
        //月份，以实际平均每月秒数计算
        pms.month = Math.floor((dur / 2629744)) > 0? f.zero(Math.floor((dur / 2629744)) % 12) : "00";
        //年份，按按回归年365天5时48分46秒算
        pms.year = Math.floor((dur / 31556926)) > 0? Math.floor((dur / 31556926)) : "0";
      }
      return pms;
    },
    ui: function(){
      if(o.sec){
        o.sec.innerHTML = f.dv().sec;
      }
      if(o.mini){
        o.mini.innerHTML = f.dv().mini;
      }
      if(o.hour){
        o.hour.innerHTML = f.dv().hour;
      }
      if(o.day){
        o.day.innerHTML = f.dv().day;
      }
      if(o.month){
        o.month.innerHTML = f.dv().month;
      }
      if(o.year){
        o.year.innerHTML = f.dv().year;
      }
      setTimeout(f.ui, 1000);
    }
  };  
  f.ui();
};

var zxx = {
    a$: function(id){
        return document.getElementById(id);  
    },
    futureDate: Date.UTC(2014, 4, 13, 23),
    obj: function(){
        return {
            sec: zxx.a$("sec"),
            mini: zxx.a$("mini"),
            hour: zxx.a$("hour"),
            day: zxx.a$("day"),
            month: zxx.a$("month"),
            year: zxx.a$("year")
        }
    }
};

fnTimeCountDown(zxx.futureDate, zxx.obj());

</script>
 



