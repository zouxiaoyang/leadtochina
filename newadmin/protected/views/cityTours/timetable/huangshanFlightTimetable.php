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
  <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>">Huangshan</a> Huangshan flight timetable</div>
  <div id="banner"><img src="/images/citytours/banner_huangshan.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
<div class="righttable">
        <table cellspacing="0" cellpadding="0">
           <tbody>
             <tr class="desc">
                  <td colspan="8"><span><img src="/images/beijing_shanghai/sym3.jpg" alt="" /> Lead to China provides you cheap China flight ticket-booking service. Please email us at service@onlinechinatours and leave your full names and passport numbers when booing or purchasing flight tickets. The below airfare does not include the airport tax of RMB50, and gasoline surcharge of RMB70 (less than 800 km) or RMB140 (more than 800 km). For urgent enquiry, you may call (86)5515355443, (86)5515355416.</span></td>
             </tr>
          <tr class="h2">
                  <td colspan="8">Arrival Flight Timetable</td>
               </tr>
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
                <td rowspan="2">Beijing-Huangshan</td>
                <td rowspan="2">1090 RMB</td>
                <td>MU5170</td>
                <td>A320</td>
                <td>10:30</td>
                <td>14:10</td>
                <td>1234567</td>
                <td>From T2 of Beijing<br>Airport via Hefei</td>
             </tr>
             <tr>
                <td>CA1551</td>
                <td>B733</td>
                <td>18:35</td>
                <td>20:30</td>
                <td>1234567</td>
                <td>From T3 of Beijing Airport</td></tr>
                <tr>
                 <td rowspan="2">Shanghai-Huangshan</td>
<td rowspan="2">580 RMB</td>
<td>FM9265</td>
<td>73E</td>
<td>14:20</td>
<td>15:25</td>
<td>135</td>
<td rowspan="2">From T2 of Hongqiao Airport</td>
</tr><tr>
<td>FM9267</td>
<td>73E</td>
<td>14:20</td>
<td>15:25</td>
<td>2467</td>
</tr><tr>
<td>Guangzhou-Huangshan</td>
<td>960 RMB</td>
<td>CZ3627</td>
<td>A320</td>
<td>20:05</td>
<td>21:45</td>
<td>1234567</td>
<td>&nbsp; </td>
</tr><tr>
<td>Shenzhen-Huangshan</td>
<td>930 RMB</td>
<td>CZ6847</td>
<td>A320</td>
<td>20:55</td>
<td>22:40</td>
<td>15</td>
<td>&nbsp; </td></tr>
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
<td>Xi'an-Huangshan</td>
<td>1260 RMB</td>
<td>JD5105</td>
<td>A319</td>
<td>08:25</td>
<td>10:10</td>
<td>1234567</td>
<td>&nbsp; </td></tr>
<tr>
<td>Hohhot-Huangshan</td>
<td>1510 RMB</td>
<td>GS7467</td>
<td>E190</td>
<td>16:00</td>
<td>19:10</td>
<td>1357</td>
<td>Via Zhengzhou</td></tr>
<tr>
<td>Xiamen-Huangshan</td>
<td>710 RMB</td>
<td>JD5106</td>
<td>A319</td>
<td>13:30</td>
<td>14:40</td>
<td>1234567</td>
<td>&nbsp;</td></tr>
<tr>
<td>Chengdu-Huangshan</td>
<td>1350 RMB</td>
<td>FM9266</td>
<td>B73E</td>
<td>19:50</td>
<td>22:00</td>
<td>135</td>
<td>&nbsp;</td></tr>
<tr>
<td>Chongqing-Huangshan</td>
<td>1210 RMB</td>
<td>FM9268</td>
<td>JET</td>
<td>19:35</td>
<td>21:40</td>
<td>2467</td>
<td>&nbsp;</td></tr>
<tr>
<td>Qingdao-Huangshan</td>
<td>960 RMB</td>
<td>CZ3910</td>
<td>190</td>
<td>09:10</td>
<td>10:30</td>
<td>1234567</td>
<td>From April 16</td></tr>
<tr>
<td>Changsha-Huangshan</td>
<td>710 RMB</td>
<td>CZ3909</td>
<td>A320</td>
<td>17:35</td>
<td>18:45</td>
<td>1234567</td>
<td>From April 17</td></tr>
<tr>
<td>Zhengzhou-Huangshan</td>
<td>830 RMB</td>
<td>GS7467</td>
<td>E190</td>
<td>17:55</td>
<td>19:10</td>
<td>1357</td>
<td>&nbsp;</td></tr>
<tr>
<td>Taipei-Huangshan</td>
<td>1900 RMB</td>
<td>BR770</td>
<td>M9W</td>
<td>18:20</td>
<td>20:10</td>
<td>367</td>
<td>&nbsp; </td></tr>
<tr>
<td rowspan="2">Pusan-Huangshan</td>
<td rowspan="2">/</td>
<td>OZ3756</td>
<td>A320</td>
<td>09:00</td>
<td>10:10</td>
<td>1</td>
<td>&nbsp; </td></tr>
<tr>
<td>OZ3756</td>
<td>A320</td>
<td>15:20</td>
<td>16:30</td>
<td>4</td>
<td>&nbsp; </td></tr>
<tr>
<td rowspan="2">Seoul-Huangshan</td>
<td rowspan="2">3050 RMB</td>
<td>KE817</td>
<td>73H</td>
<td>13:15</td>
<td>14:50</td>
<td>3467</td>
<td>&nbsp; </td></tr>
<tr>
<td>OZ375</td>
<td>320</td>
<td>12:20</td>
<td>13:40</td>
<td>236</td>
<td>&nbsp; </td></tr>
<tr class="h2">
                  <td colspan="8">Departure Flight Timetable</td>
               </tr>
<tr>
<td rowspan="2">Huangshan-Beijing</td>
<td rowspan="2">1090 RMB</td>
<td>MU5171</td>
<td>320</td>
<td>15:20</td>
<td>19:00</td>
<td>1234567</td>
<td>To T2 of Beijing<br>Airport via Hefei</td></tr>
<tr>
<td>CA1552</td>
<td>738</td>
<td>21:30</td>
<td>23:45</td>
<td>1234567</td>
<td>To T3 of Beijing Airport</td></tr>
<tr>
<td rowspan="2">Huangshan-Shanghai</td>
<td rowspan="2">580 RMB</td>
<td>FM9266</td>
<td>73E</td>
<td>22:40</td>
<td>23:35</td>
<td>135</td>
<td rowspan="2">To T2 of Hongqiao Airport</td>
</tr><tr>
<td>FM9268</td>
<td>73E</td>
<td>22:30</td>
<td>23:30</td>
<td>2467</td>
</tr><tr>
<td>Huangshan-Guangzhou</td>
<td>960 RMB</td>
<td>CZ3628</td>
<td>320</td>
<td>22:45</td>
<td>00:30+1</td>
<td>1234567</td>
<td>&nbsp; </td>
</tr><tr>
<td>Huangshan-Shenzhen</td>
<td>930 RMB</td>
<td>CZ6848</td>
<td>320</td>
<td>23:25</td>
<td>01:15+1</td>
<td>15</td>
<td>&nbsp; </td></tr>
<tr>
<td>Huangshan-Hefei</td>
<td>640 RMB</td>
<td>MU5171</td>
<td>320</td>
<td>15:00</td>
<td>15:40</td>
<td>1234567</td>
<td>From May 1st</td></tr>
<tr>
<td>Huangshan-Xi'an</td>
<td>1260 RMB</td>
<td>JD5106</td>
<td>319</td>
<td>16:40</td>
<td>18:30</td>
<td>1234567</td>
<td>&nbsp; </td></tr>
<tr>
<td>Huangshan-Hohhot</td>
<td>1510 RMB</td>
<td>GS7468</td>
<td>E190</td>
<td>19:50</td>
<td>23:05</td>
<td>1357</td>
<td>Via Zhengzhou</td></tr>
<tr>
<td>Huangshan-Xiamen</td>
<td>710 RMB</td>
<td>JD5105</td>
<td>319</td>
<td>11:10</td>
<td>12:25</td>
<td>1234567</td>
<td>&nbsp; </td></tr>
<tr>
<td>Huangshan-Chengdu</td>
<td>1350 RMB</td>
<td>FM9265</td>
<td>73E</td>
<td>16:15</td>
<td>18:50</td>
<td>135</td>
<td>&nbsp;</td></tr>
<tr>
<td>Huangshan-Chongqing</td>
<td>1210 RMB</td>
<td>FM9267</td>
<td>JET</td>
<td>16:25</td>
<td>18:35</td>
<td>2467</td>
<td>&nbsp;</td></tr>
<tr>
<td>Huangshan-Qingdao</td>
<td>960 RMB</td>
<td>CZ3909</td>
<td>320</td>
<td>19:25</td>
<td>20:40</td>
<td>1234567</td>
<td>From April 16</td></tr>
<tr>
<td>Huangshan-Changsha</td>
<td>710 RMB</td>
<td>CZ3910</td>
<td>320</td>
<td>11:25</td>
<td>12:30</td>
<td>1234567</td>
<td>From April 17</td></tr>
<tr>
<td>Huangshan-Zhengzhou</td>
<td>1510 RMB</td>
<td>GS7468</td>
<td>E190</td>
<td>19:50</td>
<td>21:10</td>
<td>1357</td>
<td>&nbsp; </td></tr>
<tr>
<td>Huangshan-Taipei</td>
<td>1900 RMB</td>
<td>BR769</td>
<td>M9W</td>
<td>21:15</td>
<td>23:00</td>
<td>367</td>
<td>&nbsp;</td></tr>
<tr>
<td rowspan="2">Huangshan-Pusan</td>
<td rowspan="2">/</td>
<td>OZ3766</td>
<td>A320</td>
<td>11:40</td>
<td>14:40</td>
<td>1</td>
<td>&nbsp;</td></tr>
<tr>
<td>OZ3766</td>
<td>A320</td>
<td>17:30</td>
<td>20:35</td>
<td>4</td>
<td>&nbsp;</td></tr>
<tr>
<td rowspan="2">Huangshan-Seoul</td>
<td rowspan="2">3050 RMB</td>
<td>KE818</td>
<td>73H</td>
<td>15:50</td>
<td>19:10</td>
<td>3467</td>
<td>&nbsp;</td></tr>
<tr>
<td>OZ376</td>
<td>320</td>
<td>14:40</td>
<td>18:00</td>
<td>236</td>
<td>&nbsp; </td></tr>
</tbody>
        </table>
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