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
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>">Huangshan</a> How to Get to Huangshan From Hefei</div>
  <div id="banner"><img src="/images/citytours/banner_huangshan.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
           <div class="titlename">How to Get to Huangshan From Hefei</div>
      <div class="righttable">
         <div class="seat">
         <p>You may travel to Huangshan from Hefei by flight, bus, train or private van from our service. Hefei is the capital of Anhui Province and the city where our office located. We offer you the Bus tickets, flight booking, train ticket purchase service with lowest price.</p>
         <p>As we mentioned, Hefei is the capital city of Anhui. The transport is more convenient with China major cities. You may take flight to Hefei Xinqiao airport or Hefei railway station firstly, and then take private van to get to Huangshan. We offer Chinese and English speaking guide for you. </p>
         <p>More details please call us at 0551-65355416, 0551-65355416 or send email to <a href="mailto:service@leadtochina.com">service@leadtochina.com</a><br /> 
         <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>#1">See Huangshan &amp; Yellow Mountain Tours Here</a></p>
         <h2>By Train</h2>
          <div class="clear"></div>
          <div class="seatul">
            <h2>Hefei--Huangshan Train Timetable</h2>
            <table cellspacing="0" cellpadding="0">
             <tbody>
               <tr class="toptr">
                <td>Train No.</td>
                <td>Destination</td>
                <td colspan="7">Name of Station and Arrival Time</td>
             </tr>
             <tr>
                <td rowspan="2">K70/K67</td>
                <td rowspan="2">Qingdao-Fuzhou</td>
                <td>Qingdao</td>
                <td>Jinan</td>
                <td>Xuzhou</td>
                <td>Hefei</td>
                <td>Huangshan</td>
                <td>Yingtan</td>
                <td>Fuzhou</td>
             </tr>
             <tr>
                <td>19:20</td>
                <td>00:01</td>
                <td>04:51</td>
                <td>12:03</td>
                <td>18:18</td>
                <td>23:35</td>
                <td>09:25</td></tr>
                <tr>
                <td rowspan="2">K8409</td>
                <td rowspan="2">Huaibei-Huangshan</td>
                <td>Huaibei</td>
                <td>Suzhou</td>
                <td>Bengbu</td>
                <td>Hefei</td>
                <td>Chaohu</td>
                <td>Ningguo</td>
                <td>Huangshan</td>
             </tr>
             <tr>
                <td>07:30</td>
                <td>08:30</td>
                <td>09:59</td>
                <td>12:19</td>
                <td>13:25</td>
                <td>16:21</td>
                <td>19:15</td></tr>
                <tr>
                <td rowspan="2">K177</td>
                <td rowspan="2">Xuzhou-Xiamen</td>
                <td>Xuzhou</td>
                <td>Hefei</td>
                <td>Ningguo</td>
                <td>Huangshan</td>
                <td>Yingtan</td>
                <td>Sanming</td>
                <td>Xiamen</td>
             </tr>
             <tr>
                <td>09:10</td>
                <td>13:16</td>
                <td>17:36</td>
                <td>20:29</td>
                <td>02:31</td>
                <td>10:17</td>
                <td>17:41</td></tr>
           </tbody>
        </table>
         </div>
         <h2>By Flight</h2>
         <div class="seatul">
            <h2>Flight schedule and timetable from Hefei to Huangshan.</h2>
            <table cellspacing="0" cellpadding="0">
             <tbody>
               <tr class="toptr">
                <td>Route</td>
                <td>Airfare</td>
                <td>Flight</td>
                <td>A/C</td>
                <td>Dep.</td>
                <td>Arr.</td>
                <td>Days</td>
                <td>R</td>
             </tr>
               <tr>
<td>Hefei-Huangshan</td>
<td>640 RMB</td>
<td>MU5170</td>
<td>A320</td>
<td>13:30</td>
<td>14:10</td>
<td>1234567</td>
<td>From May 1st</td></tr>
               <tr>
<td>Huangshan-Hefei</td>
<td>640 RMB</td>
<td>MU5171</td>
<td>320</td>
<td>15:00</td>
<td>15:40</td>
<td>1234567</td>
<td>From May 1st</td></tr>
           </tbody>
        </table>
         </div>
         <div class="clear"></div>
         <h2>By Bus</h2>
         <p>You can take bus to Huangshan at Hefei East Bus Station located at the intersection of East Changjiang Road and Dangtu Road. At this station, buses for Huangshan scenic area (Tangkou) depart at 07:40, 09:20, 10:40, 13:15, 13:40 and 14:40. The bus fare is RMB93. From the same station, there is a bus to Tunxi, downtown of Huangshan City, every 40 minutes from 07:20 am to 17:30 pm. The bus fare is RMB114. Please remember that the buses going to Huangshan City will not stop at Tangkou. Enquiry of Hefei East Bus Station: 0551-65355416<br />
         <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>#1">See Huangshan &amp; Yellow Mountain Tours Here</a></p>
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