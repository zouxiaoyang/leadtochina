<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>
<style type="text/css">
<!--
 .errorMessage{display:none}
#CDSWIDSSP .widSSPData{ width:187px; padding: 7px 4px;}
#CDSWIDSSP.widSSPnarrow .widSSPData .widSSPBranding dd{ width:187px;}
#CDSWIDSSP .widSSPData .widSSPAll .widSSPWriteReview{ padding-left:4px; margin-top:4px;}
#CDSWIDSSP .widSSPData .widSSPH18{ font-size:14px;}
 -->
</style>

<div class="clear"></div>
<div class="content1">
   <div class="menu-three" style="display:none"><a href="#">TOURS</a><a class="dq" href="#">CUSTOMIZE</a><a href="#">TRAVEL GUIDE</a></div>
   <div class="clear"></div>
   <div id="left">
      <div class="Adoption_txt" id="adoption_tab_1">It is an exciting time when you had response from China welfare house that a baby is waitting for you. So you have to spent time to learn about your new baby’s birth country by reading travel guides and through interest research to make sure that you can arrange the whole process smoothly. HFV travel with mature travel system can ease your worries by offering precise information, travel package and related services. Besides, take in the sights, smells, and sounds of your child’s culture and visit some locations such as Beijing, Xian, Shanghai, or Guilin. Enriching your adoption trip with some more cultural insights is an experience you will always appreciate.</div>
      <form action="<?php echo Yii::app()->createUrl('adoption/saveorder')?>" name="adoptionOrder" id="adoptionOrder" method="post">
      <input type="hidden" name="YII_CSRF_TOKEN" value="<?php echo Yii::app()->request->csrfToken; ?>" />
      <div class="title_img"><img src="/images/adoption/adoption_r3_c13.jpg" width="714" height="48" /></div>
      <div class="Adoption_txt">Please inform us your child’s birthplace and activities you would like us to arrange at the birthplace. In general, we will arrange 1-2 days stop so that you can visit local orphanage and a local family. If you have already arranged activities, please let us know, so we can provide you with better service. <span style="color:#8c4600; font-weight:bold;">Please indicate the SWI &amp; City Name properly.</span></div>
<div class="Select_field_box">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="right"><strong>Birthplace &amp; Activities :</strong></td>
        <td><label for="textfield"></label>
          <input name="birthplace" type="text" class="text_field" style="width:530px;" id="birthplace" /></td>
      </tr>
    </table>
</div>
<div class="title_img"><img src="/images/adoption/adoption_r7_c13.jpg" alt="" width="714" height="48" /></div>
<div class="Adoption_txt">If you have 4 days, we would recommend 1-2 hottest tourist cities such as Beijing or Xian for best tour pace and quality. If you have 7 days or so, we would recommend Golden Triangle Cities (Beijing, Xian and Shanghai) for you. 10 days, you can combine natural Guilin, comfort Yangtze Cruise, exotic Yunnan, mysterious Tibet etc., to those three cities.</div>
<div class="Recommended_img">
  <ul>
    <li><img src="/images/adoption/adoption_r15_c13.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Beijing" />
      <label for="checkbox"></label>
      Beijing</li>
    <li><img src="/images/adoption/adoption_r15_c22.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Xian" />
      <label for="checkbox6"></label>
      <label for="checkbox2"></label>
      Xian</li>
    <li><img src="/images/adoption/adoption_r15_c31.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Chengdu" />
      <label for="checkbox7"></label>
      <label for="checkbox3"></label>
      Chengdu</li>
    <li><img src="/images/adoption/adoption_r18_c37.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Guangzhou" />
      <label for="checkbox9"></label>
      <label for="checkbox"></label>
      Guangzhou</li>
    <li><img src="/images/adoption/adoption_r18_c31.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Shanghai" />
      <label for="checkbox3"></label>
      Shanghai</li>
    <li><img src="/images/adoption/adoption_r15_c36.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Guilin" />
      <label for="checkbox8"></label>
      <label for="checkbox4"></label>
      Guilin</li>
    <li><img src="/images/adoption/adoption_r18_c36.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Yangtze River" />
      <label for="checkbox4"></label>
      <label for="checkbox4"></label>
      Yangtze River</li>
    <li><img src="/images/adoption/adoption_r18_c22.jpg" alt="" />
      <input type="checkbox" name="city[]" value="Hong Kong" />
      <label for="checkbox2"></label>
      <label for="checkbox2"></label>
      Hong Kong</li>
  </ul>
</div>
<div class="more_cities">More Destinations</div>
<div class="more_unfold"><img src="/images/adoption/adoption_r20_c18.jpg" width="16" height="8" /></div>
<div class="Recommended_city">
  <ul class="more_cities_ul">
    <li><input type="checkbox" name="city[]" value="Yangshuo" /> Yangshuo</li>
    <li><input type="checkbox" name="city[]" value="Suzhou" /> Suzhou</li>
    <li><input type="checkbox" name="city[]" value="Hangzhou" /> Hangzhou</li>
    <li><input type="checkbox" name="city[]" value="Huangshan" /> Huangshan</li>
    <li><input type="checkbox" name="city[]" value="Tibet" /> Tibet</li>
    <li><input type="checkbox" name="city[]" value="Datong" /> Datong</li>
    <li><input type="checkbox" name="city[]" value="Luoyang" /> Luoyang</li>
    <li><input type="checkbox" name="city[]" value="Lijiang" /> Lijiang</li>
    <li><input type="checkbox" name="city[]" value="Longsheng" /> Longsheng</li>
    <li><input type="checkbox" name="city[]" value="Xiamen" /> Xiamen</li>
    <li><input type="checkbox" name="city[]" value="Dali" /> Dali</li>
    <li><input type="checkbox" name="city[]" value="Kunming" /> Kunming</li>
    <li><input type="checkbox" name="city[]" value="Jiuzhaigou" /> Jiuzhaigou</li>
    <li><input type="checkbox" name="city[]" value="Silk Road" /> Silk Road</li>
    <li><input type="checkbox" name="city[]" value="Zhangjiajie" /> Zhangjiajie</li>
    <li><input type="checkbox" name="city[]" value="Pingyao" /> Pingyao</li>
  </ul>
</div>
<div class="Recommended_field_box">
  <label for="textfield3"></label>
  <input name="other_city" type="text" class="Recommended_field" id="other_city" value="other city" />
</div>
<div class="title_img"><img src="/images/adoption/adoption_r22_c13.jpg" alt="" width="714" height="48" /></div>
<div class="Adoption_txt">Here, we select some high value activities for family tourists, especially for children. Have a memorable China holiday!</div>
<div class="Activities_img_bok">
  <div class="Activities_img_left">
    <div class="Activities_img"><img src="/images/adoption/adoption_r24_c12.jpg" width="171" height="117" /></div>
    <div class="Activities_img_title">
      <input type="checkbox" name="activities_for_families[]" value="Learning Chinese" />
      Learning Chinese</div>
    <div class="Activities_img_txt">You will learn some practical Chinese words for greeting, introduction and identifying Objects.</div>
  </div>
  <div class="Activities_img_right">
    <div class="Activities_img"><img src="/images/adoption/adoption_r24_c30.jpg" alt="" width="170" height="117" /></div>
    <div class="Activities_img_title">
      <input type="checkbox" name="activities_for_families[]" value="Kungfu Show" />
      <label for="checkbox34"></label>
      Kungfu Show </div>
    <div class="Activities_img_txt">The Legend of Kung Fu tells a story of a boy overcomes difficulties and becomes a Kungfu master</div>
  </div>
</div>
<div class="Activities_Scenic" style="padding:10px 0px 10px 5px; width:709px;">
  <ul class="Activities_Scenic_ul">
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Amusement Park" />
      Amusement Park</li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Acrobatic Show" /> Acrobatic Show</li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Disneyland in HK" />
      Disneyland in HK</li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Giant Panda Visit" />
      Giant Panda Visit</li>
  </ul>
  <ul class="Activities_Scenic_ul">
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Drawing China’s Paintings" />
      Drawing China’s Paintings</li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Visiting Giant Panda" />
      Visiting Giant Panda              </li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Face Changing Performance" />
      Face Changing Performance</li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Local School Visit" />
      Local School Visit</li>
  </ul>
  <ul class="Activities_Scenic_ul">
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Learning Paper Cut" />
      Learning Paper Cut</li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Make and Fly Kite" />
      Make and Fly Kite</li>
      <li>
      <input type="checkbox" name="activities_for_families[]" value="ide Bike on City Wall" />
      Ride Bike on City Wall</li>
     <li>
      <input type="checkbox" name="activities_for_families[]" value="Learn Making Beancurd" />
      Learn Making Beancurd</li>
  </ul>
  <ul class="Activities_Scenic_ul2">
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Shaolin Martial Art School" />
      Shaolin Martial Art School</li>
    <li>
      <input type="checkbox" name="activities_for_families[]" value="Chimelong Water Park in" />
      Chimelong Water Park in </li>
      <li>
      <input type="checkbox" name="activities_for_families[]" value="Native Family Visit" />
      Native Family Visit </li>
      <li>
      <input type="checkbox" name="activities_for_families[]" value="Learn Making Terracotta Warriors" />
      <span>Making Terracotta Warriors</span></li>
  </ul>
  <div class="clear"></div>
  <span style="display:block; color:#000;">Other Activities</span>
  <textarea id="other_activities" name="other_activities" cols="" rows="" style="width:695px; height:50px; border:1px solid #ccc; color:#ccc;"></textarea>
</div>
<div class="Activities_bottom"><img src="/images/adoption/adoption_r26_c12.jpg" width="714" height="9" /></div>
<div class="search_results_bok">
  <div class="search_results_right"><strong>Birthplace:</strong><span id="birthplace2" style="margin-left:5px"></span><br />
    <strong>Activities:</strong><span id="activities2" style="margin-left:5px"></span><br />
    <strong>Tourism Cities:</strong><span id="tourism_cities" style="margin-left:5px"></span><br />
  </div>
</div>
<div class="tour_date_box">
  <div class="tour_date_1">Tour Date</div>
  <div class="tour_date_2">Starting Date</div>
  <div class="tour_date_3">
    <label for="select2"></label>
    <input type="text" class="Wdate" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})" name="starting_date">
  </div>
  <div class="tour_date_2">Ending Date</div>
  <div class="tour_date_4">
    <input type="text" class="Wdate" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})" name="ending_date">
  </div>
</div>
<div class="tour_date_box">
  <div class="tour_date_1s">Passengers
  </div>
  <div class="div">
    <div class="tour_date_2">Adults(&gt;12)</div>
    <div class="tour_date_3">
      <label for="select2"></label>
      <select name="adults" class="selec_day">
        <?php for($i=1;$i<=30;$i++):?>
        <option value="<?php echo $i;?>" <?php if($i==2):?>selected="selected"<?php endif;?>><?php echo $i;?></option>
        <?php endfor;?>
      </select>
    </div>
    <div class="tour_date_2">Children(0-12)</div>
    <div class="tour_date_4">
      <label for="select2"></label>
      <select name="children" class="selec_day">
       <?php for($i=0;$i<=30;$i++):?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php endfor;?>
      </select>
    </div>
  </div>
  <div class="div">
    <div class="tour_date_2">Babies(1-2)</div>
    <div class="tour_date_3">
      <label for="select2"></label>
      <select name="infant" class="selec_day">
          <?php for($i=0;$i<=12;$i++):?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php endfor;?>
      </select>
    </div>
  </div>
</div>
<div class="tour_date_box">
  <div class="tour_date_1">Hotel Class</div>
  <div class="tour_date_2">Star</div>
  <div class="tour_date_3">
    <label for="select2"></label>
    <select name="star"  class="selec_day">
      <option selected="selected" value="3 star">-----   3 star   -----</option>
      <option value="4 star">-----   4 star   -----</option>
      <option value="5 star">-----   5 star   -----</option>
      <option value="No Need">-----   No Need   -----</option>
    </select>
  </div>
  King Bed
  <input type="checkbox" name="roomClass[]" value="King Bed"  />
  Twin Beds
  <input type="checkbox" name="roomClass" value="Twin Beds"  />
  Add One Bed
  <input type="checkbox" name="roomClass" value="Add One Bed"  />
</div>
<div class="tour_date_box">
  <div class="tour_date_1">Guide Language</div>
  <label for="radio6"></label>
  <label for="checkbox48"></label>
  <div class="tour_date_5">English
    <input name="guide_language[]" value="english" type="checkbox" checked="checked" />
    <label for="checkbox48"></label>
    &nbsp;&nbsp;Chinese
    <input name="guide_language[]" value="Chinese" type="checkbox" />
    <label for="checkbox49"></label>

    <label for="checkbox49"></label>
    &nbsp;&nbsp;Spainish
    <input name="guide_language[]" value="French" type="checkbox"  />
    <label for="checkbox50"></label>
  </div>
  <div class="tour_date_2">Other</div>
  <div class="tour_date_4">
    <label for="select2"></label>
    <label for="textfield4"></label>
    <input name="guide_language[]" type="text"  class="selec_day" value="" />
  </div>
</div>
<div class="Personal_Information_box">
  <div class="Personal_Information_title">Your Personal Information</div>
  <div class="Personal_Information_input">
    <div class="Personal_Information_input_left">
      <div class="Personal_left">Full Name: *</div>
      <div class="Personal_left">
        <label for="select3"></label>
        <select name="gender" class="Personal_field2">
            <option value="Mr."> Mr.</option>
            <option value="Ms."> Ms.</option>
        </select>
        <input name="fullName" id="fullName" type="text" class="Personal_field" />
      </div>
    </div>
    <div class="Personal_Information_input_right">
      <div class="Personal_right">Email Address:*</div>
      <div class="Personal_right">
        <label for="select3"></label>
        <label for="textfield5"></label>
        <input name="email" id="email" type="text" class="Personal_field3" style="margin-top:2px;"  />
      </div>
    </div>
  </div>
  <div class="Personal_Information_input">
    <div class="Personal_Information_input_left">
      <div class="Personal_left">Contact Phone Number:</div>
      <div class="Personal_left">
        <label for="textfield6"></label>
        <input name="phone" type="text" class="Personal_field3" />
      </div>
    </div>
  </div>
  <div class="Personal_Information_input">Additional Requirements:(Optional):</div>
  <div class="Personal_Information_input">
    <textarea name="otherMessage" rows="8" class="Personal_field4" style="float:left;"></textarea>
  </div>
  <div class="Personal_Information_input">Note:If you have our Promotion Code,please submit it in the Addtional Requirements to get further discount, thanks</div>
  <div class="Personal_Information_input">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img id="submit_button" src="/images/adoption/adoption_r36_c17.jpg" width="203" height="33" /></td>
        <td><img src="/images/adoption/adoption_r37_c26.jpg" width="70" height="25" /></td>
        <td><img src="/images/adoption/adoption_r36_c29.jpg" width="108" height="27" /></td>
      </tr>
      <tr>
        <td height="30"><em>No booking fees!</em></td>
        <td height="30">Security Certified!</td>
        <td height="30">Privacy Protected!</td>
      </tr>
    </table>
  </div>
</div>
</form>
<div class="tour_date_"></div>
   </div>
   
   
 <div id="right">
    <!--  whynew start  -->
    <div class="whynew">
     <h2><img src="/images/adoptionNew/why.png" alt="" /></h2>
     <ul>
      <li>Professional English Speaking Tour Guide with Extensive Knowledge</li>
      <li>Barrier-free China Orphanage Visiting</li> 
      <li>Tailor made China Tour to your EVERY interest</li>
     </ul>
  </div>
  <!--  whynew end  -->
  <div class="tripcont">
     <div id="TA_selfserveprop615" class="TA_selfserveprop">
<ul id="pjQ1mD" class="TA_links sInonea2Xy">
<li id="HLOzwM3H8" class="k51uGkW1Cy4">31 reviews of <a target="_blank" href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_tours-Hefei_Anhui.html">Lead to China tours</a> in Hefei</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=615&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>
  </div>   
 </div>
   
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
  var _adoption = {
    default_other_activities_value:'Any other activities you want us to arrange for you, please input it here.',
    choose_city:[],
    changeTab:function(id,obj){
      $("#adoption_tab_1,#adoption_tab_2").hide();
      $("#adoption_tab_"+id).show();
      if(id == 1){
        $("#Adoption_title1").removeClass("Adoption_title").addClass("Adoption_titledq");
        $("#Adoption_title2").removeClass("Adoption_title2dq").addClass("Adoption_title2");
        $("#adoptionOrder").show();
      }else{
        $("#Adoption_title1").removeClass("Adoption_titledq").addClass("Adoption_title");
        $("#Adoption_title2").removeClass("Adoption_title2").addClass("Adoption_title2dq");
        $("#adoptionOrder").hide();
      }
    }
  }

  $('#submit_button').click(function(){
       var reg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
       if($('#fullName').val()==''){
               alert('Please input your full name!');
               $('#fullName').focus();
               return;
       }
  
       if(!reg.test($('#email').val())){
               alert('Please input your email correctly!');
               $('#email').focus();
               return false;
       }

       var other_activities = $("#other_activities").val();
       if(other_activities == _adoption.default_other_activities_value){
          $("#other_activities").val("");
       }
  
       $('#adoptionOrder').submit();
  })

  $(function(){
    $("#birthplace").keyup(function(){
        $("#birthplace2").html($(this).val());
    })

    $("#activities").keyup(function(){
      $("#activities2").html($(this).val());
    })

    $("input[name='city[]']").click(function(){
      _adoption.choose_city = [];
      $("input[name='city[]']:checked").each(function(){
          _adoption.choose_city.push($(this).val());
      })
      $("#tourism_cities").html( _adoption.choose_city.join(','));
    })

    $("#other_city").focus(function(){
      if($(this).val() == 'other city') $(this).val('');
    })

    $("#other_city").keyup(function(){
      var other_city = $(this).val();
      
      $("#tourism_cities").html( _adoption.choose_city.join(',') + ',' + other_city);
    })

    if($(this).val() == '') $("#other_activities").val(_adoption.default_other_activities_value);
    $("#other_activities").focus(function(){
      if($(this).val() == _adoption.default_other_activities_value) $("#other_activities").val("");
    })
    $("#other_activities").blur(function(){
      if($(this).val() == "") $("#other_activities").val(_adoption.default_other_activities_value);
    })

  })
</script>