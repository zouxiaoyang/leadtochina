<?php
   Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/citytours.css'); 

   $this->setPageTitle("China Ski Resort");
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
</style>

<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/winterTours'); ?>">China Winter Tours</a> China Ski Resort</div>
    <div id="banner"><img src="/images/citytours/banner_ski.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">        
        <?php 
        	$australia_tours_array = array(
        		array(
        			'category1' => 'Yabuli Ski Resort in Heilongjiang',
        			'image' => '/images/citytours/a8.jpg',
                    'description' => '<p>Located at 20 miles in the southern Yabuli Town in Shangzhi City, Yabuli Ski Resort is the largest and best ski resort in China. At present, it is also the biggest comprehensive training center for snow activities in China. The ski resort can meet all kinds of travelers’ needs including experienced skiers’ or beginners’ needs. It is about 190 miles far from Harbin City, the provincial capital of Heilongjiang Province. Besides, there are a lot of snow activities and events held in Yabuli Ski Resorts such as the 3rd Asian Winter Games.</p>
			  <p>Yabuli Ski Resort has modern facilities including 11 slopes to meet all people’s needs and its alpine ski slope is the longest in Asia. The snow days can last about 6 months from November to July of the next year and visitors can go skiing from Mid November to late March. Travelers can not only take part in activities on the snow, but also spend some time in bars and shopping malls. The restaurants, hotels, aid center are convenient in the area.</p>
			  <p>Name in Chinese: 黑龙江亚布力滑雪场<br />
			  Address: Yabuli County, Harbin City, Heilongjiang Province.</p>',
        		),	
        		array(
        			'category1' => 'Changbaishan Ski Resort in Jilin',
        			'image' => '/images/citytours/a9.jpg',
        			'description' => '<p>Among original forest of Changbaishan Mountains Nature Reserve, Changbaishan Ski Resort is located in Changbaishan Tourism and Economic Development District in Antu City, 270 miles away from Yanji City. The snow quality is close to that of France and North Italy, it is a great place to go skiing with beautiful natural scenery. The resort has been a popular skiing destination for hundreds of snow sportsman since 1959.</p>
					<p>Changbaishan Ski Resort is surrounded by 16 mountains and its elevation is from 1640 meters to 1820 meters. Travelers can take part in snow activities from November to April every year. It is also a popular destination for families. And there are convenient flights from Beijing to Yanji City. In addition, Changbaishan Mountains Tianchi Lake and Erdaobai River in the south are great attractions in Jilin. A lot of hot water springs scattered in the areas. It is a great pleasure to enjoy a hot water spring after the skiing.</p> 
					<p>Name in Chinese: 长白山滑雪场<br />
					Address: Erdao Baihe County, Antu City, Jilin Province.</p>',
        		),
				array(
        			'category1' => 'Beidahu Ski Resort in Jilin',
        			'image' => '/images/citytours/a10.jpg',
                   'description' => '<p>Within Songhua Lake Natural Scenic Spot, Beidahu Ski Resort is an important skiing center for both sportsman and ski lovers. It is located in Wulihe Town, Yongji County, 56 miles away from the downtown of Jilin City. The snow days can last about 160 days and the deepest snow can be 1.5 meters. The wind in Beidahu Ski Resort isn’t strong in winter as the resort is ringed on 3 sides by mountains. The snow programs of Changchun Asian Winter Games are held in the resort.</p>
				   <p>Jilin is also famous for its rime which is spectacular scenery in winter. The rime appears from November to March or April of the next year. If you are lucky, you will be touched by the beautiful natural scenery. Together with karst landscape in Guilin, the stone forests in Yunnan Province, and the Three Gorges, the rime in Jilin is one of Four Nature Wonders in China.</p>
				   <p>Name in Chinese: 吉林北大湖滑雪场<br />
				   Address: Beidahu Development District, 56 miles away from the downtown of Jilin City</p>',
        		),
				array(
        			'category1' => 'Alshan Alpine Skiing Resort',
        			'image' => '/images/citytours/a11.jpg',
                   'description' => '<p>Located in Alshan Town on the border of Inner Mongolia Autonomous Region of China and Mongolia, Alshan Alpine Skiing Resort is one of the best skiing resorts in China. The resort can be reached by coach from Ulanhot with a 3 to 4 hours journey. Occupying an area of 6,000 square meters, Alshan Alpine Skiing Resort has a capacity of 4000 ski lovers. Built with international competition standards, it is one of training bases for Chinese national skiing team.</p>
				   <p>The resort is suitable for all levels skiers. The best time to go skiing is from November to April. Alshan Alpine Skiing Resort is composed by the West Hill Ski Terrain for professional ski racing and trainings and the East Hill Ski Terrain for skiing lovers. Travelers can also take part in other entertainment activities including horse racing and wrestling within Alshan Alpine Skiing Resort.</p>
				   <p>Name in Chinese: 阿尔山滑雪场<br />
				   Address: Alshan City, Xing’an Meng, Inner Mongolia</p>',
        		),
				array(
        			'category1' => 'Wanlong Ski Resort in Heibei',
        			'image' => '/images/citytours/a12.jpg',
                   'description' => '<p>Wanlong Ski Resort in Heibei Province is 50 miles away from Zhangjiakou City, about a 4 hours coach journey from Beijing. It is one of the newest skiing resorts in China. There are 22 trails including 5 difficult, 10 medium, 7 easy, 5 chairlifts trails to meet needs of beginners, middle-level skiers and senior skiers from the world. Both adults and children can enjoy a lovely skiing journey in Wanlong Ski Resort.</p>
				   <p>Travelers can go skiing from November to March every year. The high elevation can last more than 5 months and the highest elevation is 2110.3 meters. Occupying an area of more than 20 million, Wanlong Ski Resort has advanced skiing equipments imported from Canada and Japan. It is one of the earliest ski resorts opening to the public in Asia. Besides, it is a training base for a lot professional ski teams from China, Japan and South Korea.</p>
				   <p>Name in Chinese: 河北崇礼万龙滑雪场<br />
				   Address: Honghualiang, Chongli County, Zhangjiakou City, Heibei Province.</p>',
        		),
				array(
        			'category1' => 'Erlongshan Ski Resort in Harbin',
        			'image' => '/images/citytours/a13.jpg',
                    'description' => '<p>Built in 1999, Erlongshan Ski Resort is located in Erlongshan Scenic Spot, about 50 kilometers away from the east of Harbin. Occupying an area of 780,000 meters, it is one of top-ranking ski resorts in China. But it is the only skiing resort honored as the skiing training base for free skiing team of the 19th Olympic Winter Games. With great equipments, it is also an ideal skiing destination for beginners and middle-level skiers.</p>
					<p>With a length of 1200 meters, the resort has 15 trails to meet visitors’ skiing needs. Travelers can go skiing from November to March and snow days can last about 170 days. The chilly temperature reach to－20℃ which make travelers experience a very cold skiing journey. With beautiful natural scenery including green pines and white snow, it’s a recommended resort to visit. It’s about a 40 minutes journey from Harbin City by bus.</p>
					<p>Name in Chinese: 哈尔滨二龙山滑雪场<br />
					Address: Erlong Mountain Ski Area, Binzhou Town, Bin County, Heilongjiang Province</p>',
        		),
				array(
        			'category1' => 'The Jade Dragon Snow Mountain Ski Resort',
        			'image' => '/images/citytours/a14.jpg',
                   'description' => '<p>The Jade Dragon Snow Mountain Ski Resort is in the east of the Jade Dragon Snow Mountain which is a popular attraction in Lijiang, Yunnan Province. The resort is only 20 miles away from Lijiang Ancient Town which is one of World Culture Heritages. The Jade Dragon Snow Mountain Ski Resort is 1000 meters long from east to west and 600 meters wide from south to north.</p>
				   <p>Covered in snow throughout the year, the resort has 8 snow months from November to June. The best time to go skiing is from November to March every year. The altitude of ski resort is between 4500 meters to 4700 meters. With good snow quality, it is suitable for skiing all over the year. The resort is well equipped with advanced ski facilities from America and Canada. Travelers can take a series of snow activities such as alpine skiing, motorcycle on the snow and sleds.</p>
				   <p>Name in Chinese: 玉龙雪山旅游滑雪场<br />
				   Address: Among the Jade Dragon Snow Mountain, Lijiang, Yunnan Province</p>',
        		),
				array(
        			'category1' => 'Nanshan International Ski Resort in Beijing',
        			'image' => '/images/citytours/a15.jpg',
                   'description' => '<p>Located in the south of Miyun District, Beijing Nanshan International Ski Resort is a popular holiday resort all the year round. Covering an area of more than 4000 mu, the resort is the largest and the most advanced ski resort close to Beijing. There are 21 trails for skiing lovers and professional ski sportsmen. Grass skiing, a series of water activities, aquaplane and glide are popular in the resort.</p>
				   <p>With a help of Austria Mellow Company, the resort has Nanshan Mellow Park which is the first snowboarding theme Park. Besides, a lot of skiing equipments are imported from Canada, American, Germany, South Korea and Austria. The seasons for skiing start at Mid December to March. Nanshan Skiing School has more than 40 excellent skiing instructors, and there are Austria skiing instructors in Nanshan International Snowboarding and Ski School run by the its partner Austria Veneer Association(ASA).</p> 
				   <p>Name in Chinese:北京南山滑雪场<br />
				   Address: Shengshuitou Village, Henanzhai Town, Miyun District, Beijing</p>',
        		),
				array(
        			'category1' => 'Shennongjia Ski Resort in Hubei',
        			'image' => '/images/citytours/a16.jpg',
                   'description' => '<p>Shenongjia Ski Resort is an important part of Shennongjia National Forest Park which is located in northwest Hubei Province. About 30 miles from Muyu County, it is open to the public in 2004. The resort is the first large-scale natural alpine ski resorts in Middle China. Occupying an area of more than 1000 acres, it is a great place to go skiing, join outdoor adventures and sightseeing.</p>
				   <p>The resort offers trails for beginners and middle-level skiers with slopes from 5 to 15 degrees. With an “S”shape, Shennongjia Ski Resort offers a safe and interesting journey. It is a good place to go skiing in the south China. Due to its golden location, Shengnongjia Ski Resort has outstanding natural scenery. Travelers can both go skiing and see beautiful landscape in the national forest park.</p>
				   <p>Name in Chinese: 湖北神农架旅游滑雪场<br />
				   Address: Shennongjia National Forest Park, Hubei Province</p>',
        		),
				array(
        			'category1' => 'Xiling Snow Mountain Ski Resort in Chengdu',
        			'image' => '/images/citytours/a17.jpg',
                   'description' => '<p>Chengdu Xiling Snow Mountain Ski Resort is the largest and best-equipped alpine ski resort in South China. With a height of 5364 meters, the highest peak in Chengdu -the Big Snow Mountain is covered by snow in all seasons. With a convenient highway system, it takes 2 hours from the downtown of Chengdu to the resort.</p>
				   <p>With an altitude between 2,200 and 2,400 meters, the resort owns an advanced snow-making system. Xiling has 7 international-standard trails for ski lovers. Travelers can take part in a lot of entertainment programs such as skiing and grass ski. Grass skiing is nice to try in summer. And grass-bob, grass cross-country mobile, grass hovercraft are held on a 50,000-acre grass land. There are 20 entertainment theme parks offering services for travelers with all kinds of snow activities. The snow season of Xiling Snow Mountain Ski Resort is from Mid December to March.</p>
				   <p>Name in Chinese: 成都西岭雪山滑雪场<br />
				   Address: Xiling Snow Mountain Scenic Spot, Xiling Town, Chengdu, Sichuan Province</p>',
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

       <div class="recommendnew">
         <div class="tab-menu">
           <ul>
             <li class="dq"><strong>Recommend China Winter Tours</strong><span></span></li>
           </ul>
        </div>
        <div class="recolist">
         <ul>
             <li><a href="/travel/china-3-days-classic-harbin-ice-festival-tour-883.html">3 Days Classic Harbin Ice Festival Tour</a></li>
             <li><a href="/travel/china-5-days-harbin-yabuli-tour-from-beijing-by-bullet-train-905.html">5 Days Harbin Yabuli Tour from Beijing by Bullet Train</a></li>
             <li><a href="/travel/china-5-days-harbin--yabuli-ski-holidays-by-train-895.html">5 Days Harbin &amp; Yabuli Ski Holidays by Train</a></li>
             <li><a href="/travel/china-10-days-beijing-harbin-mt-huangshan-winter-tour-902.html">10 Days Beijing, Harbin, Mt Huangshan Winter Tour</a></li>
             <li><a href="/travel/china-11-days-classic-china-winter-tour-903.html">11 Days Classic China Winter Tour</a></li>
         </ul>
         </div>
       </div>
       
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
        <div id="TA_selfserveprop799" class="TA_selfserveprop">
<ul id="vdOR3kv" class="TA_links nxpFftqNU">
<li id="rObcNYyLZ2c" class="ecPLYkyiUu">25 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=799&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>  
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
