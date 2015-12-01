<?php
   Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css'); 
  //  $this->setPageTitle($cityIntro->seo_title);
  //Yii::app()->clientScript->registerMetaTag('keywords', $cityIntro->seo_key);
   // Yii::app()->clientScript->registerMetaTag('description', $cityIntro->seo_description);
 ?>
<style type="text/css">
 .errorMessage{display:none}
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 18px; width:920px;}
.more-indexcont{ top:1540px;}
</style>
<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>">Huangshan</a> How to Get to Huangshan From Beijing</div>
  <div id="banner"><img src="/images/citytours/banner_huangshan.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
           <div class="titlename">How to Get to Huangshan From Beijing</div>
      <div class="righttable">
         <div class="seat">
         <p>Travel to Huangshan from Beijing? Now you can get to Huangshan City from Beijing by train, flight and bus. It takes you only about 2 hours by flight while it takes you about 6 hours by G-train. 
			Meanwhile, there is a long distance bus departing Huangshan Bus Station at 12:00 every even day for Beijing, and it takes about 17 hours on the way. 
		</p>
         <p>Lead to China offers the flight and train booking service for Beijing and Huangshan. Click <a style="color:blue;" href="http://messenger.providesupport.com/messenger/travelthing.html">Live Chat</a> and get the best price now. <br /> 
         Get to know more <a style="color:blue;" href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>#3">Beijing Huangshan Tours </a>here.</p>
         <h2>By Flight</h2>
          <div class="clear"></div>
          <div class="seatul">
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
           </tbody>
        </table>
         </div>
		<?php
			$bejijngtohuangshan = array(
				array(
					'train_number'=>'G265',
					'departure_time'=>'7:48',
					'arrival_time'=>'14:16',
					'travel_time'=>'6h:28m'
				),
				array(
					'train_number'=>'G321',
					'departure_time'=>'8:40',
					'arrival_time'=>'15:33',
					'travel_time'=>'6h:53m'
				),
				array(
					'train_number'=>'G27',
					'departure_time'=>'9:48',
					'arrival_time'=>'15:14',
					'travel_time'=>'5h:26m'
				),
				array(
					'train_number'=>'G323',
					'departure_time'=>'10:10',
					'arrival_time'=>'16:54',
					'travel_time'=>'6h:44m'
				),
				array(
					'train_number'=>'G301',
					'departure_time'=>'10:40',
					'arrival_time'=>'17:12',
					'travel_time'=>'6h:32m'
				),
				array(
					'train_number'=>'G325',
					'departure_time'=>'12:05',
					'arrival_time'=>'18:18',
					'travel_time'=>'6h:13m'
				),
				array(
					'train_number'=>'G303',
					'departure_time'=>'12:30',
					'arrival_time'=>'19:01',
					'travel_time'=>'6h:31m'
				),
				array(
					'train_number'=>'G351',
					'departure_time'=>'15:25',
					'arrival_time'=>'21:55',
					'travel_time'=>'6h:30m'
				)
			);
		$huangshantobeijing = array(
				array(
					'train_number'=>'G352',
					'departure_time'=>'8:08',
					'arrival_time'=>'14:29',
					'travel_time'=>'6h:21m'
				),
				array(
					'train_number'=>'G302',
					'departure_time'=>'9:39',
					'arrival_time'=>'16:18',
					'travel_time'=>'6h:39m'
				),
				array(
					'train_number'=>'G322',
					'departure_time'=>'11:50',
					'arrival_time'=>'18:23',
					'travel_time'=>'6h:33m'
				),
				array(
					'train_number'=>'G28',
					'departure_time'=>'12:11',
					'arrival_time'=>'17:36',
					'travel_time'=>'5h:25m'
				),
				array(
					'train_number'=>'G324',
					'departure_time'=>'13:28',
					'arrival_time'=>'20:13',
					'travel_time'=>'6h:45m'
				),
				array(
					'train_number'=>'G270',
					'departure_time'=>'14:39',
					'arrival_time'=>'21:06',
					'travel_time'=>'6h:27m'
				),
				array(
					'train_number'=>'G304',
					'departure_time'=>'15:06',
					'arrival_time'=>'21:41',
					'travel_time'=>'6h:35m'
				),
				array(
					'train_number'=>'G326',
					'departure_time'=>'15:24',
					'arrival_time'=>'22:19',
					'travel_time'=>'6h:55m'
				)
			);


		?>
         <h2>Beijing to Huangshan G-Trains Timetable</h2>
         <div class="seatul">
            <h2>Beijing--Huangshan Train Timetable</h2>
            <table cellspacing="0" cellpadding="0">
			<thead>
				<tr class="toptr">
                  <td>Train Number</td>
                  <td>From</td>
                  <td style="padding-left:10px;">To</td>
				  <td>Departure Time</td>
				  <td>Arrival Time</td>
				  <td>Travel Time</td>
				  <td>First Class Seat</td>
				  <td>Second Class Seat</td>
               </tr>
			</thead>
             <tbody>
			 <?php foreach($bejijngtohuangshan as $v){ ?>
               <tr>
						  <td><?php echo $v['train_number'];?></td>
						  <td>Beijing</td>
						  <td style="padding-left:10px;">Huangshan</td>
						  <td><?php echo $v['departure_time'];?></td>
						  <td><?php echo $v['arrival_time']; ?></td>
						  <td><?php echo $v['travel_time']; ?></td>
						  <td>924 Yuan</td>
						  <td>548.5 Yuan</td>
				</tr>
			  <?php } ?>
           </tbody>
        </table>
        <div class="clear"></div>
        <h2>Huangshan--Beijing Train Timetable</h2>
            <table cellspacing="0" cellpadding="0">
			<thead>
				<tr class="toptr">
                  <td>Train Number</td>
                  <td>From</td>
                  <td style="padding-left:10px;">To</td>
				  <td>Departure Time</td>
				  <td>Arrival Time</td>
				  <td>Travel Time</td>
				  <td>First Class Seat</td>
				  <td>Second Class Seat</td>
               </tr>
			</thead>
             <tbody>
			 <?php foreach($huangshantobeijing as $v){ ?>
               <tr>
						  <td><?php echo $v['train_number'];?></td>
						  <td>Huangshan</td>
						  <td style="padding-left:10px;">Beijing</td>
						  <td><?php echo $v['departure_time'];?></td>
						  <td><?php echo $v['arrival_time']; ?></td>
						  <td><?php echo $v['travel_time']; ?></td>
						  <td>924 Yuan</td>
						  <td>548.5 Yuan</td>
				</tr>
			  <?php } ?>
			  </tbody>
        </table>
         </div>
         <div class="clear"></div>
         <p>If you would like book tickets from us, please click <a style="color:blue;" href="http://messenger.providesupport.com/messenger/travelthing.html">Live Chat</a> to get accurate price.<br/>
        Check <a style="color:blue;" href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'huangshan-tours'));?>#3">Huangshan Tours from Beijing</a> Here</p>
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