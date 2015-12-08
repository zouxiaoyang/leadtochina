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
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>">Huangshan</a> How to Get to Huangshan From Hangzhou</div>
  <div id="banner"><img src="/images/citytours/banner_huangshan.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
           <div class="titlename">How to Get to Huangshan From Hangzhou</div>
      <div class="righttable">
         <div class="seat">
         <p>Travel to Huangshan from Hangzhou? There are hourly buses from Hangzhou to Huangshan every day. You can book the bus ticket via the Hangzhou hotel you'll stay, or just purchase at Hangzhou West Bus Station located on No. 355 Tianmu Shan Road. One issue you should keep in your mind when purchasing your ticket is that Huangshan City and Huangshan Scenic Area are two different locations an hour apart, and there are buses headed to both places. The buses that go three and a half hours directly to the Huangshan scenic area will drop you off in a village at the foot of the mountain called Tangkou.</p>
         <p>It is 250 km between Hangzhou and Tunxi (downtown of Huangshan City), a 2-hour-forty-minute drive on the way, and the bus fare is RMB85. Apart from the buses listed on the timetable below, another 5 buses departing Hangzhou at 08:00, 09:50, 10:50, 14:10 and 15:10 terminate at Tangkou, without passing or stopping at Tunxi since the buses drive a different way. Those who will stay in Tunxi for the night should avoid taking those buses in general unless it is ok for you to take another bus from Yansi Bus Stop (those buses make a stop here before heading for Tangkou) to Tunxi (about 17 km in distance). Enquiry of Hangzhou West Bus Station: +86 571-85222237.<br /> 
         <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>#4">See: Hangzhou &amp; Huangshan Tour and Shanghai, Hangzhou and Huangshan Tour</a></p>
         <h2>Huangzhou West Bus Station to Huangshan Bus Timetable</h2>
          <div class="clear"></div>
          <div class="seatul">
             <table cellspacing="0" cellpadding="0">
             <tbody>
               <tr class="toptr">
                <td>Bus No. </td>
                <td>From </td>
                <td>To </td>
                <td>Departure </td>
                <td>Distance (km) </td>
                <td>Full Price <br />(RMB) </td>
                <td>Half Price<br />(For children) </td>
                <td>Major Stops </td>
              </tr>
              <tr >
                <td>4000 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>06:50 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4001 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>07:50 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4003 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>08:40 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4004 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>09:40 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4016 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>10:20 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4005 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>11:20 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4019 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>11:50 </td>
                <td>230 </td>
                <td>76 </td>
                <td>38 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4006 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>12:20 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4007 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>13:30 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4008 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>14:30 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4009 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>15:40 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4018 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>17:00 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
              <tr >
                <td>4010 </td>
                <td>Hangzhou </td>
                <td>Tunxi </td>
                <td>18:20 </td>
                <td>230 </td>
                <td>85 </td>
                <td>42.5 </td>
                <td>Dafu, Shexian, Yansi </td>
              </tr>
             </tbody>
            </table>
         </div>        
         <div class="clear"></div>
         <p>LeadtoChina provides pick-up service with English guide and private guide. If you want to book the transfer service from us, please email to <a href="mailto:service@onlinechinatours">service@leadtochina.com</a><br />
         1. Your name and contact information<br />
         2. Your pick-up place and destination<br />
         3. Your flight number and arrival time<br />
         4. The type of vehicle you need<br />
         Our tour advisor will book the service and reply your email within 1 working day. <br />
         <a href="#">See: Hangzhou &amp; Huangshan Tour and Shanghai, Hangzhou and Huangshan Tour</a></p>
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