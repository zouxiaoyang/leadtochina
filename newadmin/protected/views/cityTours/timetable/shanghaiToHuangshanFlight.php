<?php
   Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css'); 
   $this->setPageTitle($cityIntro->seo_title);
   Yii::app()->clientScript->registerMetaTag('keywords', $cityIntro->seo_key);
   Yii::app()->clientScript->registerMetaTag('description', $cityIntro->seo_description);
 ?>
<style type="text/css">
 .errorMessage{display:none}
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 18px; width:920px;}
.more-indexcont{ top:1540px;}
</style>
<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>">Huangshan</a> How to Get to Huangshan From Shanghai</div>
  <div id="banner"><img src="/images/citytours/banner_huangshan.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
           <div class="titlename">How to Get to Huangshan From Shanghai</div>
      <div class="righttable">
         <div class="seat">
         <p>Travel to Huangshan from Shanghai? Now there are three ways for you. You may take train, flight or bus from Shanghai to Huangshan. Here we listed you the tranport details as below. <br /> 
         <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>#2">Check Shanghai Huangshan Tours Here</a></p>
         <h2>By Flight</h2>
         <p>Huangshan Airport is situated in the west suburb of Tunxi of Huangshan city, 71 km from Mt. Huangshan scenic area. We offer you airport pick-up service with English guide and private car. It is about $100USD for round trip.</p>
          <div class="clear"></div>
          <div class="seatul">
            <table cellspacing="0" cellpadding="0">
             <tbody>
               <tr class="toptr">
                  <td>Flight</td>
                  <td>Departure--Terminal</td>
                  <td>Time</td>
                  <td>Price</td>
               </tr>
               <tr>
                  <td>FM9267</td>
                  <td>Shanghai Hongqiao T2--Huangshan Tunxi</td>
                  <td>14:20-15:25</td>
                  <td>RMB 580</td>
               </tr>
               <tr>
                  <td>FM9266</td>
                  <td>Huangshan Tunxi-- Shanghai Hongqiao T2</td>
                  <td>22:40-23:35</td>
                  <td>RMB 580</td>
               </tr>
           </tbody>
        </table>
         </div>
         <h2>By Train</h2>
         <p>It takes about 13 hours to get to Huangshan City by train. One of the advantages of overnight train (Train K8418 deaprting Shanghai at 21:24 and arriving at Tunxi at 09:00) is that it saves you the cost of one night accommodation and allows you a full day exploration of the fantastic scenery up Yellow Mountains after your arrival. The price of soft sleeper is RMB264 (lower deck). You can ask the hotel you stay in Shanghai to book the ticket for you.</p>
         <div class="clear"></div>
         <div class="seatul">
            <table cellspacing="0" cellpadding="0">
             <tbody>
               <tr class="toptr">
                  <td>Train number</td>
                  <td>Train type</td>
                  <td>Departure station</td>
                  <td>Terminal station</td>
                  <td>Departure time</td>
                  <td>Arrival time</td>
                  <td>Used time</td>
                  <td>Normal seat</td>	
                  <td>VIP seat</td>
                  <td>Normal bed</td>
                  <td>VIP bed</td>
               </tr>
               <tr>
                  <td>K782/K783</td>
                  <td>Air-con Express</td>
                  <td>Shanghai Railway Station</td>
                  <td>Huangshan Railway Station</td>
                  <td>12:22</td>
                  <td>00:27</td>
                  <td>12h 5m</td>
                  <td>RMB 94</td>
                  <td>RMB 147</td>
                  <td>RMB 175</td>
                  <td>RMB 264</td>
               </tr>
               <tr>
                  <td>K8418/K8419</td>
                  <td>Air-con Express</td>
                  <td>Shanghai Railway Station</td>
                  <td>Huangshan Railway Station</td>
                  <td>17:49</td>
                  <td>09:05</td>
                  <td>15h 16m</td>
                  <td>RMB 94</td>
                  <td>RMB 147</td>
                  <td>RMB 175</td>
                  <td>RMB 264</td>
               </tr>
           </tbody>
        </table>
         </div>
         <div class="clear"></div>
         <h2>By Bus</h2>
         <p>If you don't want to spend night on the train, public bus would be your good choice. It's faster (about 5 hours to get to Tunxi) and cheaper than train (bus fare is about RMB150). The Shanghai South Bus Station is located on No. 666 Shilong Road. While Tangkou is a small village near Huangshan scenic area, Tunxi is the downtown of Huangshan City. If you can speak Chinese, you may call the bus stations to get latest bus info :<br />
Shanghai South Bus Station: 021-54353535<br />
Huangshan Tunxi Station: 0559-2353952</p>
         <div class="seatul">
         <h2>Shanghai South Bus Station-Huangshan Tangkou Bus Schedule and Ticket Price</h2>
            <table cellspacing="0" cellpadding="0">
             <tbody>
               <tr class="toptr">
                  <td>From</td>
                  <td>To</td>
                  <td>Price</td>
                  <td>Durtaion</td>
                  <td>Departure</td>
               </tr>
               <tr>
                  <td>Shanghai South Bus Station</td>
                  <td>Huangshan Tangkou</td>
                  <td rowspan="2">RMB137 Yuan</td>
                  <td>6-7 Hours</td>
                  <td>06:38  07:58  <br />
                  09:08  14:25</td>
               </tr>
               <tr>
                  <td>Huangshan Tunxi Bus Station</td>
                  <td>Shanghai South Bus Station</td>
                  <td>5-6 Hours</td>
                  <td>05:40  08:40  10:20  11:50<br />13:00  15:50  16:20  18:00</td>
               </tr>
           </tbody>
        </table> 
         </div>
         <div class="clear"></div>
         <h2>By Private Van</h2>
         <div class="clear"></div>
         <div class="seatul">
            <table cellspacing="0" cellpadding="0">
             <tbody>
               <tr class="toptr">
                  <td rowspan="2">Transfer Route</td>
                  <td colspan="4">Price</td>
               </tr>
               <tr class="toptr">
                  <td>Economic Business Car/Van <br />(5-11 Seats)</td>
                  <td>Luxury Business Car/Van <br />(5-12 Seats)</td>
                  <td>Economic Minibus<br />(15-18 Seats)</td>
                  <td>Luxury MInibus(19-20 Seats)</td>
               </tr>
               <tr>
                  <td>Hangzhou Airport <br />&uarr; &darr;<br />Huangshan Tunxi</td>
                  <td>205 USD/way</td>
                  <td>250 USD/way</td>
                  <td>220 USD/way</td>
                  <td>295 USD/way</td>
               </tr>
               <tr>
                  <td>Shanghai Airport <br />&uarr; &darr;<br />Huangshan Tunxi</td>
                  <td>410 USD/way</td>
                  <td>455 USD/way</td>
                  <td>425 USD/way</td>
                  <td>545 USD/way</td>
               </tr>
               <tr>
                  <td>Huanghan Airport <br />&uarr; &darr;<br />Huangshan Tunxi</td>
                  <td>30 USD/ <br />round trip /day</td>
                  <td>––</td>
                  <td>30 USD/ <br />round trip /day</td>
                  <td>––</td>
               </tr>
               <tr>
                  <td>Huangshan Tunxi <br />&uarr; &darr;<br />Mt. Huangshan</td>
                  <td>100 USD/ <br />round trip /day</td>
                  <td>––</td>
                  <td>120 USD/<br /> round trip /day</td>
                  <td>––</td>
               </tr>
               <tr>
                  <td>Huangshan Tunxi <br />&uarr; &darr;<br />Hongcun (xidi) Village</td>
                  <td>100 USD/ <br />round trip /day</td>
                  <td>––</td>
                  <td>120 USD/<br /> round trip /day</td>
                  <td>––</td>
               </tr>
               <tr>
                  <td>Huangshan Tunxi <br /> &uarr; &darr;<br />Huizhou Ancient City</td>
                  <td>100 USD/ <br />round trip /day</td>
                  <td>––</td>
                  <td>120 USD/ <br />round trip /day</td>
                  <td>––</td>
               </tr>
           </tbody>
        </table>
         </div>
         <div class="clear"></div>
         <p>If you want to book the transfer service from us, please email to <a href="mailto:service@onlinechinatours">service@leadtochina.com</a><br />
         1. Your name and contact information<br />
         2. Your pick-up place and destination<br />
         3. Your flight number and arrival time<br />
         4. The type of vehicle you need<br />
         Our tour advisor will book the service and reply your email within 1 working day. <br />
         <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>#2">Check Huangshan Tours from Shanghai Here</a></p>
         
    </div>
      </div>
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right">
     <?php echo $this->renderPartial('timetable/_huangshan_left', array('cityInfo'=>$cityInfo));?>
   </div>
    <!--  right end  -->
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
 <!-- Google Code for HOME -->
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 1001932638;
  var google_conversion_label = "m02eCNre_AIQ3o7h3QM";
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
  <div style="display:inline;">
  <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=m02eCNre_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
  </div>
  </noscript>