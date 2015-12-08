<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/adoption1.css');?>
<style type="text/css">
<!--
 .errorMessage{display:none}
 .ad-guide ul li,.culture ul li{ width:299px; height:auto; float:left; display:block; border-bottom:1px dashed #a59f9f; padding:6px 0px 6px 8px; background:url(/images/adoption/abg.jpg) left center no-repeat;}
-->
</style>
<div id="adoption">
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Adoption</div>
   <div id="banner"><img src="/images/adoption/bannernew.jpg" alt="" /></div>
   <!--  text start  -->
   <div id="text">
       <p>We really appreciate the families with adopted Chinese children. Thanks very much for your kindness to rebuild a loving home for them. Our China tour packages customized for adoptive families offer parents and children a better and deeper understanding of China including Chinese culture, tourism, language, local life etc.  Besides, we will try our best to provide services such as accommodation, translation, car rental, special activities, return visits to orphanage and birthplace etc. You will find the right service on our website whether you are a single family or multiple families.</p>
   </div>
   <!--  text end  -->
   
   <!--  fixed start  -->
   <div class="fixed">
      <div class="title"><img src="/images/adoption/fixed.jpg" alt="" /></div>
      <!--  fix start  -->
      <div class="fix">
          <table cellspacing="0" cellpadding="0">
            <tbody>
                <tr class="trtop">
                   <td>Name</td>
                   <td>Price</td>
                   <td>Days</td>
                   <td>Starting Date</td>
                   <td>Ending Date</td>
                   <td>Status</td>
                 </tr>
                 <tr>
                   <td><a href="/travel/china-13-days-panda-group-tours-shanghai-to-guilin-to-chengdu-to-beijing-754.html" target="_blank">13 Days Panda Group Tours (Shanghai to Guilin to Chengdu to Beijing) </a></td>
                   <td>$1920</td>
                   <td>13 Days</td>
                   <td>15/10/2013 </td>
                   <td>28/10/2013</td>
                   <td>open</td>
                 </tr>
                 <tr>
                   <td><a href="/travel/china-12-days-henan-group-tour-shanghai-to-zhengzhou-to-kaifeng-to-dengfeng-to-luoyang-to-beijing-755.html" target="_blank">12 Days Henan Group Tour (Shanghai to Zhengzhou to Kaifeng to Dengfeng to Luoyang to Beijing)</a></td>
                   <td>$1880</td>
                   <td>12 Days</td>
                   <td>16/10/2013</td>
                   <td>27/10/2013</td>
                   <td>open</td>
                 </tr>
                 <tr>
                   <td><a href="/travel/china-12-days-confucius-group-tour-beijing-to-jinan-to-qufu-to-taian-to-weifang-to-qingdao-756.html" target="_blank">12 Days Confucius Group Tour (Beijing to Jinan to Qufu to Tai'an to Weifang to Qingdao)</a></td>
                   <td>$1645</td>
                   <td>12 Days</td>
                   <td>23/10/2013</td>
                   <td>4/11/2013</td>
                   <td>open</td>
                 </tr>
                 <tr>
                   <td><a href="/travel/china-13-days-mountain-top-group-tour-beijing-to-lijiang-to-dali-to-kunming-757.html" target="_blank">13 Days Mountain Top Group Tour (Beijing to Lijiang to Dali to Kunming)</a></td>
                   <td>$2315</td>
                   <td>13 Days</td>
                   <td>23/10/2013</td>
                   <td>5/11/2013</td>
                   <td>open</td>
                 </tr>
                 <tr>
                   <td><a href="/travel/china-11-days-yangtze-group-tour-beijing-to-yangtze-cruise-to-shanghai-758.html" target="_blank">11 Days Yangtze Group Tour (Beijing to Yangtze Cruise to Shanghai)</a></td>
                   <td>$1655</td>
                   <td>11 Days</td>
                   <td>23/10/2013</td>
                   <td>4/11/2013</td>
                   <td>open</td>
                 </tr>
               </tbody>
             </table>
      </div>
      <!--  fix end  -->
      
      <!--  fixright start  -->
      <div class="fixright">
        <img src="/images/adoption/adoptionpic.jpg" alt="" />
        <p>Not interested in the tour we prepared? Have your own plans? Please try <a href="<?php echo Yii::app()->createUrl("adoption/customizeAdoption");?>" target="_blank">Customize Adoption Travel</a> and make unqiue tour for your kids.</p>
      </div>
      <!--  fixright end  -->
   </div>
   <!--  fixed end  -->
   
   <!--  adoptionleft start  -->
   <div id="adoptionleft">
      <!--  province start  -->
      <div class="province">
          <div class="title"><img src="/images/adoption/province.jpg" alt="" /></div>
           <?php $this->renderPartial("allProvince");?>
      </div>
      <!--  province end  -->
      
      <!--  ad-guide start  -->
      <div class="ad-guide">
         <div class="title"><img src="/images/adoption/ad-guide.jpg" alt="" /></div>
              <ul>
                <?php foreach($chinaAdoptionGuide as $v):?>
                <li><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>" target="_blank"><?php echo $v->title;?></a></li>
                <?php endforeach;?>
              </ul>
          </ul>
      </div>
      <!--  ad-guide end  -->
      
      <!--  culture start  -->
      <div class="culture">
          <div class="title"><img src="/images/adoption/culture.jpg" alt="" /></div>
          <ul>
              <?php foreach($chinaAdoptionCulture as $v):?>
<li><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" title="<?php echo $v->title;?>" target="_blank"><?php echo SiteUtils::mb_truncate_text($v->title,45);?></a></li>
              <?php endforeach;?>
          </ul>
      </div>
      <!--  culture end  -->
      <div class="clear"></div>
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
                            'itemView'=>'//cityTours/_chinaTripQuestion',
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
                         <td><textarea name="message" cols="" rows=""></textarea>
                         <span class="qmessage_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"><input type="checkbox" name="" value="" style=" float:none; width:auto; border:none;"> Do you want to book a tour / hotel / wi-fi.etc</td>
                      </tr>
                      <tr>
                         <td><span>Your Name:</span> <input name="username" type="text" />
                         <span class="qusername_error errorMessage">It can't be blank.</span>
                         </td>
                      </tr>
                      <tr>
                         <td><span>E-mail:</span> <input name="email" type="text" />
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
   <!--  adoptionleft end  -->
   
   
   <!--  adoptionright start  -->
   <div id="adoptionright">
      <div class="title"><img src="/images/adoption/latest.jpg" alt="" /></div>
      <?php foreach($chinaGuideArticle as $v):?>
      <ul>
         <li class="pic"><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>">
         <img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH.$v->image, '226x102')?>"  /></a></li>
         <li><a href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>SiteUtils::stringURLSafe($v->title),'id'=>$v->id));?>" target="_blank"><?php echo $v->title;?></a>
             <?php echo mb_substr(strip_tags($v->description),0, 100);?>...  <a class="more" href="<?php echo Yii::app()->createUrl('adoption/adoptionList', array('title'=>$v->title,'id'=>$v->id));?>" target="_blank">More&raquo;</a>
         </li>
      </ul>
      <?php endforeach;?>

      
      <div class="links">
         <a href="http://leadtochina.blogspot.com" target="_blank"><img src="/images/adoption/b1.jpg" alt="" /></a>
         <a href="http://facebook.com/lead2china" target="_blank"><img src="/images/adoption/f1.jpg" alt="" /></a>
         <a href="http://twitter.com/leadtochina" target="_blank"><img src="/images/adoption/t1.jpg" alt="" /></a>
         <a style="margin-right:0px;" href="http://www.youtube.com/user/OnlineChinaTours1" target="_blank"><img src="/images/adoption/y1.jpg" alt="" /></a>
      </div>
   </div>
   <!--  adoptionright end  -->
   
</div>
<script type="text/javascript">
var fb_param = {};
fb_param.pixel_id = '6008814570501';
fb_param.value = '0.00';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6008814570501&amp;value=0" /></noscript>

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



