  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>

  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>
  <?php $this->setPageTitle("International Cruise "); $array_status=array(1=>'Start',2=>'Passby',3=>'Terminal');?>
<style type="text/css">
<!--
#content{ background:#fff;}
#ui-datepicker-div{font-size:12px;}
-->
</style>
      <div class="cru_content">
      <div class="cru_menu-tours">
          <strong>You are here:</strong><a href="/">Home</a>  International Cruise
      </div>
      <div class="clear"></div>
      <div class="cru_banner">
      </div>
      <div class="cru_intro_txt">
      With the dramatically developing China Cruise market, more and more international Cruise liners select Chinese harbors to their homeports and some of the cruises have already been to China in plenty of times, such as Voyager of the Seas, Regent Seven Seas Voyager, Crystal Symphony. Meanwhile, out of love to China's culture and exotic attractions, more and more overseas' tourists are no long satisfied with Cruising China, some of them disembark and follow the steps of Lead to China to explore the beautiful China.
      </div>
   <div class="cru_cruise">
     <div class="cru_cruise_title">
     <p class="cru_cruise_title_txt"><strong>Cruise to China Schedule  2015/2016</strong></p><span></span>
     <p class="cru_cruise_title_line"></p>
     </div>
     <div class="cru_cruise_content">
     <div class="cru_cruise_content_left">
       <ul id="cruise_list">
        <?php foreach($cruise_list as $k=>$v):?>
          <li><a href="#" <?php if($k===0):?>class="selected"<?php endif;?>><?php echo $v->name;?></a></li>
        <?php endforeach;?>
       </ul>
     </div>
     <div class="cru_cruise_content_right">

    <?php foreach($cruise_list as $k=>$v):?>
     <div class="tab<?php echo $k+1;?> tabflag" <?php if($k>0):?> style="display:none" <?php endif;?>>
     <div class="cru_cruise_content_right_intro">
        <?php echo $v->intro;?>
        <!--
        <p class="cru_fl"><img src="/images/cruisePorts/voyageroftheseas_1.jpg" width="142" height="88" /></p>
        <p class="cru_right_intro_txt">One of the most sedate vessels, Crystal Symphony underwent three major refurbishments and did great work to give voyagers better cruising experiences. It's definitely one the incredible places to experience the beauty of life and relax yourself without the burden of earthliness.  Crystal Cruises offers luxury cruises to Alaska, Caribbean, Europe, Mexico, Asia, Australia. China harbor cities in the Crystal Symphony's Asian Routes: Dalian, Sanya, Shanghai, Tianjin, Xiamen, Hong Kong, Yantai</p>
        -->
     <p style="padding-top:5px"> <span class="cru_right_intro_img"><a href="<?php echo Yii::app()->createUrl("cruisePorts/CruiseView", array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->name)));?>" style="font-weight:bold"><?php echo $v->name;?> China Onshore Excursions</a></span></p>
     </div>
      <div class="cru_cruise_content_right_time">
      <table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#cccccc">
        <tr>
            <th height="25" align="center" bgcolor="#dddddd" scope="col">Arrive </th>
            <th height="25" align="center" bgcolor="#dddddd" scope="col">Depart </th>
            <th height="25" align="center" bgcolor="#dddddd" scope="col">Status </th>
            <th height="25" align="center" bgcolor="#dddddd" scope="col">Port Excursion</th>
        </tr>

        <?php $schedule_arr = unserialize($v->schedule);?>
        <?php if(is_array($schedule_arr)):?>
          <?php foreach($schedule_arr['arrive'] as $k2=>$v2):?>
        
          <tr>
            <td height="25" bgcolor="#FFFFFF" align="center"><?php echo $schedule_arr['arrive'][$k2]?></td>
            <td height="25" bgcolor="#FFFFFF" align="center"><?php echo $schedule_arr['depart'][$k2]?></td>
            <td height="25" bgcolor="#FFFFFF" align="center"><?php echo $array_status[$schedule_arr['status'][$k2]]?></td>
            <td height="25" bgcolor="#FFFFFF" align="center"><a href="<?php echo $schedule_arr['url'][$k2];?>"><?php echo $schedule_arr['port'][$k2]?></a></td>
          </tr>
          <?php endforeach;?>
        <?php endif;?>
      </table>
      </div>
      </div>
    <?php endforeach;?>
     </div>
   </div>
   </div>

<div class="clear"></div>   
<div class="cru_cruise">
   <div class="cru_port_title">
   <p class="cru_port_title_txt"><strong>Cruises Ports & Excursions</strong></p><span></span>
   <p class="cru_cruise_title_line"></p>
   </div>
<div class="clear"></div>   
   <div class="cru_cruise_content">
   <div class="cru_port_content_left">
   <ul id="cruise_list1">
     <?php foreach($cruise_port_list as $k=>$v):?>
      <li><a href="#"><span class="cru_img<?php echo $k+1;?>"></span><?php echo $v->cityName;?></a></li>
     <?php endforeach;?>
   </ul>
   <p style="padding-top:15px; clear:both "><a href="#"><img src="/images/cruisePorts/trip.jpg" width="175" height="129" /></a></p>
   </div>
   <div class="cru_cruise_content_right">

   <?php foreach($cruise_port_list as $k=>$v):?>
   <div class="sab<?php echo $k+1;?> sabflag" <?php if($k>0):?> style="display:none" <?php endif;?>>
   <div class="cru_port_content_right_intro">
   <p class="" style="padding-bottom:5px"><span class="cru_right_intro_img"><a href="<?php echo Yii::app()->createUrl('cruisePorts/portIntroduction', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>" style="font-weight:bold"><?php echo $v->cityName;?> Introduction</a></span></p>
    <div class="cru_port_right_intro_txt"><?php echo $v->tourIntro;?></div>
    <p style="margin:5px 0px"><span class="cru_right_intro_img"><a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>" style="font-weight:bold"><?php echo $v->cityName;?> Onshore Excursions</a></span></p></div>
    <div class="cru_port_content_right_pas">
    <ul>

      <?php 
          $tour_ids = $v->tourIds;
          $tours = ToursPackage::model()->findAll(array(
           'select' => 'id,name,price,filedir,cruise_recommend_pic',
           'condition' => "id in($tour_ids)",
           'order' => 'days asc',
          ));
      ?>
      <?php foreach($tours as $v2):?>
      <li>
        <p><img src="/<?php echo $v2->filedir;?>/<?php echo $v2->cruise_recommend_pic;?>"></p>
        <p class="cru_col1 cru_hei"><a href="<?php echo $v2->url();?>"><?php echo $v2->name;?></a></p>
        <p><?php if($v2->price!=0):?>from <span class="cru_col2">US$<?php echo $v2->price; ?></span><?php endif;?></p>
      </li>
      <?php endforeach;?>

    </ul>
    </div>
   </div>
  <?php endforeach;?>
   </div>
   </div>
   
   </div>  
   <div class="clear"></div>   
   <div class="cru_cruise_ind">
   <div class="cru_portintr_cont1_left">
   <div class="cru_portintr_cont1_left1 cru_mt10">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">City Tours</span></p>
   <ul>
     <li><a href="/travel/city-tianjin-tours">Tianjin Tours</a></li>
     <li><a href="/travel/city-shanghai-tours">Shanghai Tours</a></li>
     <li><a href="/travel/city-hong-kong-tours">Hongkong Tours</a></li>
     <li><a href="/travel/city-dalian-tours">Dalian Tours</a></li>
     <li><a href="/travel/city-xiamen-tours">Xiamen Tours</a></li>
     <li><a href="/travel/city-sanya-tours">Sanya Tours</a></li>
     <li><a href="/travel/city-guangzhou-tours">Guangzhou Tours</a></li>
     <li><a href="/travel/city-haikou-tours">Haikou Tours</a></li>
     <li><a href="/travel/city-qingdao-tours">Qingdao Tours</a></li>
   </ul>
   </div>
   <div class="cru_portintr_cont1_left1 cru_mt10">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">FAQS</span></p>
   <ul>
        <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/cruiseFaq', array("id"=>999,"name"=>SiteUtils::stringURLSafe('Cruise Faq')));?>">Cruise Port Faq</a></li>
    <?php foreach($cruise_port_list as $k=>$v):?>
        <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/cruiseFaq', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"><?php echo $v->cityName;?> Faq</a></li>
     <?php endforeach;?>
   </ul>
   </div>
   <div class="cru_mt10">
       <div class="code" style="width:190px">
      <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
  </div>
</div>
   </div>
   <div class="cru_cont1_right">
   <?php $this->renderPartial("_order", array('model'=>$model,'cruise_list'=>$cruise_list));?>
   <div class="cru_view_cont1_right2">
   <div class="cru_view_cont1_head" style="display:none">
   <div class="cru_view_writecont">
                  <table border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td colspan="3" class="cru_wit_tit1">Write Your Question</td>
                      </tr>
                      <tr>
                        <td colspan="3">You can post as a member!</td>
                      </tr>
                      <tr>
                        <td colspan="3"><textarea rows="5" cols="65" style="border:1px #CCCCCC solid"></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td class="tesu">Your Name:
                          <input size="15" maxlength="128" style="border:1px #CCCCCC solid;" type="text" />
                          </td>
                        <td class="tesu">E-mail:
                          <input style="border:1px #CCCCCC solid;" type="text" maxlength="130" />
                          </td>
                        <td class="tesu"><input id="button" class="form_button" style="height:25px;border:0px;cursor:pointer;background:url(/images/cruisePorts/submit.png) no-repeat; dispaly:block;width:179px" type="submit"  value="" />
                         
                         </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
   </div>
   <div class="cru_view_cont1_right2_foot" style="display:none">
   <div class="cru_view_cont1_right2_foot1">
   <div style="width:500px">
   <p class="cru_ques1">Q:jasmine <span>Asked on 11:05 AM May. 29 2014</span></p>
   <p class="cru_ques2">How much will it cost for one day to travel by van or mini bus from Tianjin Port to Beijing City to see Tian.</p></div>
   <div class="cru_ques3"><p class="cru_ques3a"><span>Thanks for your inquiry from us. Regarding the one day tour from cruise, we can arrange the day tour: Mutianyu Great Wall, Tiananmen Square and Forbidden City and then transfer you back to the cruise. For the quotation, I will send it to your email. Besides, kindly inform you the more persons, the cheaper per person for the quotation. Please note.</span> </p><p class="cru_ques3b"></p><p class="cru_ques3c"></p></div>
   </div>
   <div class="cru_line"></div>
<div class="cru_view_cont1_right2_foot1">
   <div style="width:500px">
   <p class="cru_ques1">Q:jasmine <span>Asked on 11:05 AM May. 29 2014</span></p>
   <p class="cru_ques2">How much will it cost for one day to travel by van or mini bus from Tianjin Port to Beijing City to see Tian.</p></div>
   <div class="cru_ques3"><p class="cru_ques3a"><span>Thanks for your inquiry from us. Regarding the one day tour from cruise, we can arrange the day tour: Mutianyu Great Wall, Tiananmen Square and Forbidden City and then transfer you back to the cruise. For the quotation, I will send it to your email. Besides, kindly inform you the more persons, the cheaper per person for the quotation. Please note.</span> </p><p class="cru_ques3b"></p><p class="cru_ques3c"></p></div>
   </div>   
   </div>
   
   </div>
   </div>
   
   </div>
   <div class="clear"></div>   
       
      </div>
<script>
$(function(){
  $("#cruise_list li").find("a").click(function(){
    return false;
  })
  $("#cruise_list li").hover(function(){
    $("#cruise_list li").find("a").removeClass("selected");
    $(this).find("a").addClass("selected");
    var inx = parseInt($("#cruise_list li").index(this))+1;
    $(".tabflag").hide();
    $(".tab"+inx).show();
  },function(){
    $(this).find("a").addClass("selected");
  })

  $("#cruise_list1 li").find("a").click(function(){
    return false;
  })
  $("#cruise_list1 li").hover(function(){
    $("#cruise_list1 li").find("a").removeClass("selected1");
    $(this).find("a").addClass("selected1");
    var inx = parseInt($("#cruise_list1 li").index(this))+1;
    $(".sabflag").hide();
    $(".sab"+inx).show();
  },function(){
    $(this).find("a").addClass("selected1");
  })
})
</script>
