<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); 
$this->setPageTitle("Beijing Xian Shanghai Tours");
Yii::app()->clientScript->registerMetaTag('keywords','');
Yii::app()->clientScript->registerMetaTag('description','');
?>
<style type="text/css">
<!--
 .errorMessage{display:none}
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
#left{ width:170px; height:auto; float:left; margin-top:15px; padding:0px 3px 15px 0px;}
#right{ width:737px; height:auto; float:right; margin-top:15px;}
.textleftnew{ width:100%;}
.textleftnew h2{ font-size:18px;}
.rightlist h2{ width:163px; height:25px; background:#999999; border-left:4px solid #8c4600; color:#fff; font-size:14px; font-weight:normal; padding-left:3px; line-height:25px; display:block; white-space:nowrap; text-shadow:1px 0px 0px #666;}
.rightlist ul{width:150px;}
.rightlist ul.tesu{ width:160px;}
.textleftnew a{ text-decoration:none; color:#0417d0; background:url(/images/beijing_shanghai/libg.jpg) left center no-repeat; padding-left:10px; line-height:24px; width:30%; display:block; float:left; white-space:nowrap;}
.textleftnew a:hover{ color:#000;}
.tourlist1 h2{ font-size:16px;}
.online-step ul{ width:157px; height:auto; float:left; padding:10px 6px 10px 7px;}
#CDSWIDSSP .widSSPData{ width:160px; padding:7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:153px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px; margin-top:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> Beijing Xian Shanghai Tours</div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/banner6.jpg" alt="" /></div> 
    <!--  right start  -->
    <div id="right">
         <!--  text start  -->
         <div class="textnew">
           <div class="textleftnew">
              <h2>Beijing Xian Shanghai Tours</h2>
              <p>If you are planning your first trip to China, it will be the best choice for tour Beijing, Xian and Shanghai. From the three destinations, you will explore the Great Wall and Forbidden City in Beijing, the Terracotta Warriors in Xian, and of course the modern sites in Shanghai.</p>
              <p style="padding-top:5px;"><strong>Tour Type</strong><br />
              <a href="#one">Beijing Xian Shanghai Tours</a>
              <a href="#two">Shanghai Xian Beijing Tours</a>
              <a href="#three">Beijing Xian Shanghai Extended Tours</a></p>
            </div>
            <!-- <div class="callbutton"><a href="/travel/china-diy-tours"><img src="/images/beijing_shanghai/call.png"></a></div> -->
        </div>
        <!--  text end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2 id="one">Beijing+Xian+Shanghai Tours <span>(Private Tours)</span></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic16.jpg" alt="" ></div>
           <div class="listcontent1"><p>If you are landing on Beijing airport, these tours will be a great choice. You may take flight or train to see the mysteries of the Great Wall, the Forbidden City and the Terra Cotta Warriors and The Bund in Shanghai. Tours from budget to luxury are offered with best price.</p></div>
           <div class="listul">
             <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(17,18,14,72,430)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
             ?>
              <ul>
                     <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?> <?php if($tour->id==17):?><img alt="" src="/images/citytours/hot.gif"><?php endif;?></a>
                           <span><strong>DESTINATIONS:</strong> <?php echo $tour->route;?></span>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
                      
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2 id="two">Shanghai+Xian+Beijing Tours <span>(Private Tours)</span></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic17.jpg" alt="" ></div>
           <div class="listcontent1"><p>The below tours are particularly designed for those who only have a shorter vacation time, but would like to visit as many China's highlights as you possibly can in a limited time frame with a balance of time, sites, and a budget. You can start the China's golden triangle tour from Shanghai. This Beijing Xian Shanghai tour will be a really unforgettable experience in your life.</p></div>
           <div class="listul">
              <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(578,519)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
              ?>
              <ul>
                       <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>DESTINATIONS:</strong> <?php echo $tour->route;?></span>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
        <!--  tourlist start  -->
        <div class="tourlist1">
           <h2 id="three">Beijing+Xian+Shanghai Extended Tours <span>(Private Tours)</span></h2>
           <div class="listpic1"><img src="/images/beijing_shanghai/pic18.jpg" alt="" ></div>
           <div class="listcontent1"><p>As we know, Beijng, Xian and Shanghai are the most popular destinations for international tourists in China. If you have longer vacation time, you may pay a visit to the Guilin, Tibet, Yangtze River, Chengdu and Lijiang...besides the golden triangle Tour. Here are some pacakges for you.
</p></div>
           <div class="listul">
              <?php 
                  $criteria = new CDbCriteria;
                  $criteria -> select = 'id,name,city_num,attractions,route';
                  $criteria -> condition = "id in(22,54,713,93,60,58,722)";
                  $criteria -> order = "days asc";
                  $tours = ToursPackage::model() -> findAll($criteria); 
              ?>
              <ul>
                     <?php foreach($tours as $tour):?>
                       <li><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('title'=>SiteUtils::stringURLSafe($tour->name),'id'=>$tour->id));?>"><?php echo $tour->name;?></a>
                           <span><strong>DESTINATIONS:</strong> <?php echo $tour->route;?></span>
                           <span><strong>FEATURES:</strong> <?php echo SiteUtils::mb_truncate_text($tour->attractions,200);?></span>
                       </li>
                     <?php endforeach;?>
              </ul>
           </div>
        </div>
        <!--  tourlist end  -->
        
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
    <!--  right end  -->
    
    <!--  left start  -->
    <div id="left">
        <!--  rightlist start  -->
        <div class="rightlist">
            <!-- <h2 style="height:23px;"><img src="/images/beijing_shanghai/title01.jpg" alt="" /></h2>  -->
            <h2>Recommended Tours</h2>
            <ul>
              <li><a href="/travel/city-beijing-tours">Beijing Tours</a></li>
              <li><a href="/travel/city-xian-tours">Xian Tours</a></li>
              <li><a href="/travel/city-shanghai-tours">Shanghai Tours</a></li>
              <li><a href="/travel/beijing-shanghai-tours">Beijing Shanghai Tours</a></li>
              <li><a href="/travel/beijing-xian-tours">Beijing Xian Tours</a></li>
              <li><a href="/travel/shanghai-xian-tours">Shanghai Xian Tours</a></li>
              <li><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours">Beijing Datong Xian</a></li>
              <li><a href="/travel/yangtzecruise/">Yangtze River Cruise</a></li>
              <li><a href="/travel/china-tibet-tours">Tibet Impression</a></li>
            </ul>
        </div>
        <!--  rightlist end  -->
        
        <!--  tripcontent start  -->
        <div class="tripcontent">
        <div id="TA_selfserveprop799" class="TA_selfserveprop">
<ul id="vdOR3kv" class="TA_links nxpFftqNU">
<li id="rObcNYyLZ2c" class="ecPLYkyiUu">25 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=799&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>  
    </div>  
    <!--  tripcontent end  -->   
    
       <!--  online-step start  -->
        <div class="online-step">
            <h2><img src="/images/beijing_shanghai/onlinetitle.jpg" alt="" /></h2>
            <ul>
                <li><img src="/images/citytours/step1.png" alt="" /></li>
                <li><img src="/images/citytours/step2.png" alt="" /></li>
                <li><img src="/images/citytours/step3.png" alt="" /></li>
                <li><img src="/images/citytours/step4.png" alt="" /></li>
                <li><img src="/images/citytours/step5.png" alt="" /></li>
            </ul>
         </div>  
         <!--  online-step end  --> 
    </div>
    <!--  left end  -->
</div>
<!--  index end  -->

<script>
var _cityTours = {
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

 <!-- Google Code for &#30331;&#24405;&#36807;BEIJING TOURS -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "xYT9COLs_AIQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=1.000000&amp;label=xYT9COLs_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


