<?php
   Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css'); 

   $this->setPageTitle("Warm Destinations");
   Yii::app()->clientScript->registerMetaTag('keywords','China ski tour, China winter travel, Harbin ice festival, harbin tours');
   Yii::app()->clientScript->registerMetaTag('description','2014 China Harbin Ice Festival Tour and China winter tour packages are offered with best price. Customize your Harbin snow festival and Yabuli Skiing tour now.');
 ?>
<style type="text/css">
 .errorMessage{display:none}
#content{ background:#EEEEEE; font-family:Verdana,Arial,Helvetica,sans-serif; font-size:12px; height:auto; margin:0 auto 15px; overflow:hidden; padding:9px 21px 12px 18px; width:920px;}
.more-indexcont{ top:540px;}
.listcontent ul li p{ padding-bottom:8px;}
#right{ background:none; padding-top:0px; margin-top:0px;}
#left{ margin-top:0px;}
.right_div{ background:url(/images/citytours/rbg.jpg) #d2d3d5 left bottom repeat-x; width:100%; height:auto; float:left;}
#right h2{ margin-top:0px;}
#CDSWIDSSP .widSSPData{ width:147px; padding: 7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:153px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px; margin-top:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPH11{ padding-top:3px; font-size:10px;}
</style>

<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/winterTours'); ?>">China Winter Tours</a> Warm Destinations</div>
    <div id="banner"><img src="/images/citytours/banner_warm.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">        
        <?php 
        	$australia_tours_array = array(
        		array(
        			'category1' => 'Sanya',
        			'image' => '/images/citytours/a18.jpg',
                    'description' => '<p>Sanya is a prime coastal winter getaway. Sanya is the second largest city in Hainan province and is in the middle of the south part of Hainan Island. It\'s a transport and communication center, and one of the most important foreign trade ports in the extreme south of the golden coastline, which opens up to the outside world in the southeast of China. In addition, it is often considered China\'s "southern gate". </p>
					<a href="/travel/city-sanya-tours">Read more Sanya Tours</a>',
        		),	
        		array(
        			'category1' => 'Macau-Guangzhou-Hong Kong',
        			'image' => '/images/citytours/a19.jpg',
        			'description' => '<p>Located on the southeast coastline of China, Macau-Guangzhou-Hong Kong area is warm in winter. It is the best way to explore historical sites and discovering the culture of southern China. Visit many of Guangzhou’s historically important sites by day, and enjoy a dinner cruise along the Pearl River by night. Then sightsee in Macau, where you’ll see the remainders of European colonialism in its structures, cuisine, practices and culture. Experience the high-speed ferry across the Pearl River from Macau to Hong Kong. Hong Kong is a shopping paradise and also to be the most popular travel destination in Asia. Here we provide many HK city tours, Hong Kong tours to her side like Macau, Guilin, Guangzhou, Shenzhen and Hong Kong airport transfers. You may also customize a Hong Kong Travel to suit your needs.</p>
					<a href="/travel/city-hong-kong-tours">Recommended Tours</a>',
        		),
				array(
        			'category1' => 'Yunnan',
        			'image' => '/images/citytours/a20.jpg',
                   'description' => '<p>Farther afield is Yunnan Province, whose subtropical climate is warm year-round, yet whose northwest corner offers Jade Dragon Snow Mountain – with China\'s highest-altitude ski resort – and Haba Snow Mountain, between which lies one of the earth\'s deepest gorges, Tiger Leaping Gorge. To the south is Xishuangbanna Nature Reserve teeming with monkeys, leopards, tigers, Asian elephants, wild oxen, giant lizards and boa constrictors, while the northeast is characterized by old, eroded mountains leaving so-called stone forests.
Kunming, the provincial capital of Yunnan Province is widely known as the "Spring City" because of comfortable weather. Yunnan Province in southwestern China is a great place to escape from chilly winter and hot summer. It has various landscapes such as tropic rain forests and snow-capped peaks. Kunming, Dali, Lijiang, Shangri-la and Xishuangbanna are popular destinations in Yunnan Province. It is a popular warm destination to enjoy a comfortable journey in winter.</p>
                                   <a href="/travel/china-search?theme=8#result">Recommended Tours</a> ',
        		)		
        	);
        ?>
        <?php foreach($australia_tours_array as $v):?>
        <!--  tourlist start  -->
        <div class="tourlist">
           <h2><?php echo $v['category1'];?></h2>
           <div class="listpic"><img style="width:220px;height:150px" src="<?php echo $v['image'];?>"></div>
           <div class="listcontent">
              <ul>
                 <li><?php echo $v['description'];?></li>
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
    <?php $this->renderPartial('_chinaWinterTourRight');?>

    <div class="tripcontent">
        <div id="TA_selfserveprop340" class="TA_selfserveprop">
<ul id="0YfXnVKJ" class="TA_links 8VqxWww7e">
<li id="rjMUfAEP" class="LX0laD38W">25 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=340&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=0&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=false&amp;border=true"></script>
    </div>
    <div class="cooperation"><a href="/travel/china-diy-tours" target="_blank"><img alt="" src="/images/citytours/winter.jpg"></a></div>
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
