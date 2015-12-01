  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cruiseport.css'); ?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>

  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>


  <?php if($cur_port):?>
    <?php $this->setPageTitle($cur_port->cityName. " Port Faq"); ?>
  <?php else:?>
    <?php $this->setPageTitle("Cruise Port Faq"); ?>
  <?php endif;?>
<style type="text/css">
<!--
#content{ background:#fff;}
-->
</style>
      <div class="cru_content">
      <div class="cru_menu-tours">
          <strong>You are here:</strong><a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('cruisePorts/index2');?>">International Cruise</a> Cruise Faq
      </div>
<div class="clear"></div>

      <div class="cru_banner">
      </div>
   <div class="cru_cruise">
   <div class="cru_view_content">
   <div class="cru_portintr_cont1_left">
   <div class="cru_portintr_cont1_left1">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">FAQS</span></p>
   <ul>
    <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/cruiseFaq', array("id"=>999,"name"=>SiteUtils::stringURLSafe('Cruise Faq')));?>" <?php if(999==$_GET['id']):?> class="selected1" <?php endif;?>>Cruise Port Faq</a></li>
    <?php foreach($cruise_port_list as $k=>$v):?>
        <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/cruiseFaq', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>" <?php if($v->id==$_GET['id']):?> class="selected1" <?php endif;?>><?php echo $v->cityName;?> Faq</a></li>
     <?php endforeach;?>
   </ul>
   </div>
   <div class="cru_portintr_cont1_left1 cru_mt10">
    <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">China Cruise Port Guide</span></p>
   <ul>
   <?php foreach($cruise_port_list as $k=>$v):?>
     <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/portIntroduction', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"><?php echo $v->cityName;?> Guide</a></li>
   <?php endforeach;?>
   </ul>
   </div>

    <div class="cru_portintr_cont1_left1 cru_mt10">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">Cruise Name</span></p>
   <ul>
      <?php foreach($cruise_list as $k=>$v):?>
        <li><a href="<?php echo Yii::app()->createUrl("cruisePorts/CruiseView", array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->name)));?>"><?php echo $v->name;?><?php if($k==1):?><img src="/images/citytours/hot.gif"><?php endif;?></a></li>
      <?php endforeach;?>
   </ul>
   </div>
<!--   <div> <p style="padding-top:10px; clear:both "><a href="#"><img src="/images/cruisePorts/trip.jpg" width="200" height="129" /></a></p></div>
-->
<?php /*?>    <div class="cru_portintr_cont1_left1 cru_mt10">
   <p class="cru_portintr_cont1_left1_tit"><span class="cru_portintr_cont1_bg"></span><span class="cru_portintr_cont1_tit1">Dock Port</span></p>
   <ul>
     <?php foreach($cruise_port_list as $k=>$v):?>
        <li><a href="<?php echo Yii::app()->createUrl('cruisePorts/portExcursion', array("id"=>$v->id,"name"=>SiteUtils::stringURLSafe($v->cityName)));?>"><?php echo $v->cityName;?></a></li>
     <?php endforeach;?>
   </ul>
   </div>
<?php */?>
<div class="cru_mt10">
    <div class="code">
     <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
  </div>
   </div>   
   </div>
   <div class="cru_faq_content_right">
   <div class="cru_faq_content_right1">
   <div class="cru_faq_title">
   <p class="cru_faq_title_txt"><strong><?php if($_GET['id'] == 999):?> Cruise Port <?php else:?> <?php echo $cur_port->cityName;?><?php endif;?> FAQ</strong></p><span></span>
   <p class="cru_faq_title_line"></p>
   </div>
<div class="cru_faq_content_right1_cont">
<div class="cru_faq_content_right1_pad">
<div class="faq-list">
              <div id="yw0" class="list-view">
                <div class="items">
                  <?php foreach($cur_faq_list as $v):?>
                  <div class="faqname"><span><a href="javascript:;"><?php echo $v->title;?></a></span></div>
                  <div class="faqdesc">
                    <p> <?php echo $v->content;?></p>
                  </div>
                  <?php endforeach;?>
                </div>
              </div>
            </div>
            </div>
</div>
   
      </div>
   <div class="clear"></div>   
   <div class="cru_view_cont1_right">
    <?php $this->renderPartial("_order", array('model'=>$model,'cruise_list'=>$cruise_list));?>
   <div class="cru_view_cont1_right2">
  <div class="cru_view_cont1_right2_head" style="display:none;">
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
   </div>
   
   </div> 
<div class="clear"></div>   
</div>
<div class="clear"></div>   
