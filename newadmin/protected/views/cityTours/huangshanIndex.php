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
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <?php echo $cityInfo->name;?> Tours</div>
    <div id="banner"><img src="/images/citytours/banner_<?php echo strtolower($cityInfo->name);?>.jpg" alt="" ></div>
    <div class="clear"></div>
    <!--  left start  -->
    <div id="left">
        <!--  text start  -->
        <div class="text">
           <div class="textleft">
              <h2><?php echo $cityIntro->title;?></h2>
              <p><?php echo $cityIntro->description;?></p>
              <span style="display:none">Show More <img src="/images/citytours/down.png" ></span>
            </div>
            <div class="callbutton"><a href="<?php echo Yii::app()->createUrl("chinaTours/quickCustomizeTours", array('city'=>$cityInfo->name));?>"><img src="/images/citytours/call.png" ></a></div>
        </div>
        <!--  text end  -->
        
        <!--  toplist start  -->
        <div class="toplist">
          <?php $this->renderPartial("_cityTopTour", array('cityInfo'=>$cityInfo));?>
        </div>
        <!--  toplist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Huangshan Yellow Mountain Tours <a id="1"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>Known as the most beautiful mountain in China, Huangshan features its peculiar shapes of the peaks, weather-shaped Huangshan Pine trees, sea of mysterious clouds and magical-heeling springs. It is one of UNESCO World Heritage Sites in China. Besides, the ancient Hongcun village and She County will add their own special touch to a very memorable trip.</p></div>
           <div class="clear"></div>
            <?php 
            $tourids = array(233,236,232,234,778,777,235);
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
           <h2>Shanghai Huangshan Tours<a id="2"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>Travel to Huangshan from Shanghai? Now there are three ways for you. You may take 1-hour flight, 3-4 hours private van, 5-6 hour city bus, or 12-15 hours train from Shanghai to Huangshan. <a href="<?php echo Yii::app()->createUrl('cityTours/flightTimetable', array('title'=>'huangshan-from-shanghai'));?>">&raquo; More details</a></p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(874,875,876,877,149,780,448,779);
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Beijing Huangshan Tours<a id="3"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>You can travel Huangshan from Beijing by train, flight and bus. It takes you only about 2 hours by flight while it takes you about 20 hours by train. On the other hand, train is much cheaper than airplane, costing you only about 512RMB for a soft sleeper. Meanwhile, there is a 17 hours long distance bus trip between Beijing Huangshan. <a href="<?php echo Yii::app()->createUrl('cityTours/flightTimetable', array('title'=>'huangshan-from-beijing'));?>">&raquo; More details</a></p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(390,878,1060,879,865,848,461,174,782,458,783);
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>

           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>Hangzhou Huangshan Tours<a id="4"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>Travel to Huangshan from Hangzhou? Here we offer you 3-7 days Hangzhou Huangshan tours by private van and city bus. We can arrange private guide and driver to pick you up from Hangzhou airport or hotel. <a href="<?php echo Yii::app()->createUrl('cityTours/flightTimetable', array('title'=>'huangshan-from-hangzhou'));?>">&raquo; More</a></p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(880,881,237,868,882);
            $this->renderPartial("_single_city_list", array("tourids"=>$tourids));
           ?>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlistnew">
           <h2>China Tours Including Huangshan<a id="5"></a></h2>
           <div class="newlist">
           <div class="listtext"><p>As a part of beautiful Jiangnan area, Huangshan is one of the highlights of this most graceful area of China. It has many neighbors worth visiting such as Hangzhou, Suzhou, Nanjing, Yangtze River, Guilin, Chengdu and Yunnan etc. Besides you may customize your own China and Huangshan tours from our service. <a href="/index.php?option=com_diy&template=customize_index">Customize now</a></p></div>
           <div class="clear"></div>
           <?php 
            $tourids = array(871,846,873,849,872,866,850,870,867,864);
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
