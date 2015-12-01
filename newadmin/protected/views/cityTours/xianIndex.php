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
.listone{ height:274px;}
.tourlistnew ul li.pic img{ display:inline-block;}
.tourlistnew ul li img{ display:none;}
.tourlistnew ul li.hotul a img{ display:inline-block; width:22px; height:11px; padding-right:8px;}
</style>
<!--  index start  -->
<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> Xian Tours</div>
    <div id="banner"><img src="/images/citytours/banner_xian.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
        <!--  text start  -->
        <div class="text" style="margin-bottom:0;">
           <div class="textleft" style="width:490px;">
              <h2><?php echo $cityIntro->title;?></h2>
              <p><?php echo $cityIntro->description;?></p>
              <span style="display:none">Show More <img src="/images/citytours/down.png" ></span>
            </div>
            <div class="callbutton" style="width:170px;"><a href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_Tours_Beijing_Private_One_day_Tour-Hefei_Anhui.html" target="_blank"><img src="/images/citytours/xian_trip.jpg" ></a></div>
        </div>
        <!--  text end  -->
        
        <!--  toplist start  -->
        <div class="toplist" style="margin:0; height:0">
          <?php $this->renderPartial("_cityTopTour", array('cityInfo'=>$cityInfo));?>
        </div>
        <!--  toplist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Xian Private Tour<a id="1"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>Located in the south of the Guanzhong Plain and the capital of the Shaanxi Province in China, the city of Xian reflects and recalls the rich and remarkable Chinese civilization and culture. Take a Xian Tour with us to witness the 2500-years-old history of China!</p></div>
           <div class="clear"></div>
            <?php 
            $tourids = array(559,570,560,89,105,203,161);
            $tours = ToursPackage::getToursByIds($tourids);
           ?>  
           <?php foreach($tours as $v):?>
             <ul>
                <li class="pic"><a href="<?php echo $v->url();?>"><img src="/<?php echo $v->filedir;?>/<?php if($v->pic_big) echo $v->pic_big; else echo $v->pic;?>" /></a></li>
                <li <?php if(in_array($v->id, array(232))):?> class="hotul"<?php endif;?>><a href="<?php echo $v->url();?>"><?php echo $v->name;?> <img src="/images/citytours/hot.gif" alt="" /></a> 
                        <span><strong>FEATURES:</strong> <?php echo strip_tags($v->attractions);?></span> 
                </li>
             </ul>
            <?php endforeach;?>
           </div>
        </div>
        <!--  tourlist end  -->
         
         <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Xian Coach Tour<a id="2"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>If you are traveling alone, want to make some new foreign friends, and want to find somebody to travel with you to share the happy time of Xi'an sightseeing. Then taking a Xian Group tour with us, that means other individual tourists like you will join the same Xian tour and as a result you all will enjoy better prices than private tours for the same scenic spots.</p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(705,97,98);
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Xian Side Tours<a id="3"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>There are a large number of great cities and tourist spots to visit around Xian. With developed transportation, you will find a side tour add more excellence to your Xian trip.</p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(747,746,749,1020,160,748,154,750 );
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>

           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Beijing Xian tour<a id="4"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>Being capital of the China, Beijing is the nation's political, economic, cultural, educational and international trade and communication center, which means it has numerous sights to see and things to do. Between Beijing and Xian, there are 10 daily high-speed trains and 10 overnight fast trains, and over 20 daily flights. The 1.5 hours flight makes it possible to have one day Beijing and Xian round trip.</p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(152,326,327,409,410,562,571);
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Shanghai Xian Tour<a id="5"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>Shanghai has a rich collection of buildings and structures of various architectural styles. Besides, as the economic center of China, it is worth visiting. Shanghai and Xian is about 1210 kms apart, 2 hours by flight or 13 hours by overnight train. It is possible to take one day Shanghai and Xian round trip.</p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(512,731 ,732, 733, 734, 735 ,736, 513 );
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>
           </div>
        </div>
        <!--  tourlist end  -->

        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Xian China Tours<a id="5"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>As one of the top tourist cities & oldest cities in China, Xian is one of the top three China golden triangle cities with other two are Beijing and Shanghai. Besides, China is a vast land with so many marvels in the name of natural scenery, ethnic minorities and exotic world. The majestic Yangtze River, religious Tibet and colorful Yunnan do give you more to experience.</p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array( 14, 72, 93, 714 );
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  questions start  -->
        <div class="questions">
           <div class="ques-menu">
              <ul>
                 <li class="dq">Top Trip Faqs</li>
              </ul>
           </div>
           
           <!--  common-questuon start  -->
           <div class="common-questuon" id="questionTab2">

             <div class="tripleft">
               <!--  answer start  -->
                  <div class="answer">
                        <?php if($chinaTripQuestion->totalItemCount):?>
                          <?php $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$chinaTripQuestion,
                            'itemView'=>'_chinaTripQuestion',
                            'pager'=>array(
                              'cssFile'=>False,
                              'header'=>'',
                            ),
                            'template'=>"{items}\n{pager}",
                          )); ?>
                         <?php endif;?>
                  </div>
                  <!--  answer end  -->
                </div>

                  <!--  tripright start  -->
              <div class="tripright">
                <h2>Planning a trip ? Ask us here</h2>
                <div class="clear"></div>
                <table border="0" cellspacing="0" cellpadding="0">
                   <tbody>
                      <tr>
                         <td><textarea name="message" id="qmessage" cols="" rows=""></textarea>
                         <span class="qmessage_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><input type="checkbox" name="" value="" style=" float:none; width:auto; border:none;"> Do you want to book a tour / hotel / flights.etc</td>
                      </tr>
                      <tr>
                         <td><span>Your Name:</span> <input name="username" id="qusername" type="text" />
                         <span class="qusername_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td><span>E-mail:</span> <input name="email" id="qemail" type="text" />
                         <span class="qemail_error errorMessage">Please enter correct email.</span>
                         </td>
                      </tr>
                      <tr>
                         <td><input type="button" value="" name="yt0" style="height:40px;border:0px;cursor:pointer;background:url(/images/view/submit.png) left center no-repeat; dispaly:block; width:221px;" class="form_button" onclick="_cityTours.submitMessage(this);"></td>
                      </tr>
                   </tbody>
                 </table>
              </div>
              <!--  tripright end  -->
           </div>
           <!--  common-questuon end  -->
        </div>
        <!--  questions end  -->
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right">
     <?php echo $this->renderPartial('timetable/_xian_left', array('cityInfo'=>$cityInfo));?>
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
