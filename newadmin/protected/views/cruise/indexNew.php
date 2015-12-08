 <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/yangtzenew.css'); ?>

<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jqueryUi/jquery.ui.core.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jqueryUi/jquery.ui.datepicker.js');?>

<?php Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/jquery.zxxbox.3.0-min.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/myfocus-2.0.1.min.js');?>
<script type="text/javascript">
  myFocus.set({
  	id:'myFocus',//ID
  	pattern:'mF_fancy'//style
  });
</script>
<style type="text/css">
  <!--
  #myFocus{ position:relative; width:660px; height:280px; overflow:hidden;}
  #wrapBar{display:none !important;}
  .wrap_title{ display:none;}
  .fixpic{width:430px;height:190px;}
  .searchnew{ margin-top:0px;}
  .shipsnew h2 a{ color:#2b1906;}
.shipsnew h2 a:hover{ color:#8c4600; text-decoration:underline !important;}
#CDSWIDSSP{ width:100% !important}
#CDSWIDSSP .widSSPData .widSSPInformation{padding: 8px 0 10px;}
#CDSWIDSSP .widSSPData .widSSPReviews .widSSPH11{ padding-top:6px;}
#CDSWIDSSP .widSSPData .widSSPAll{ margin-bottom:0px;}
#CDSWIDSSP .widSSPData .widSSPH11{ padding: 5px 0 3px;}
#CDSWIDSSP .widSSPData .widSSPBranding{ margin-bottom:3px;}
  -->
 
</style>

<div id="contentnew">
    <!--  banner1 start   -->
    <div id="banner1">
        <!--  ppt start   -->
        <div class="pptone">
             <div id="myFocus">
                <div class="pic">
                  <ul>
                     <li><a href="/travel/yangtzecruise/victoria-sophia-63.html"><img src="/images/yangtze/ppt01.jpg" thumb="" alt="" text="" /></a></li>
                     <li><a href="/travel/yangtzecruise/39/victoria-jenna"><img src="/images/yangtze/ppt02.jpg" thumb="" alt="" text="" /></a></li>
                     <li><a href="/travel/yangtzecruise/ms-yangtze-1-22.html"><img src="/images/yangtze/ppt03.jpg" thumb="" alt="" text="" /></a></li>
                     <li><a href="/travel/yangtzecruise/30/yangtze-explorer"><img src="/images/yangtze/ppt04.jpg" thumb="" alt="" text="" /></a></li>
                  </ul>
                </div>
             </div>
        </div>
        <!--  ppt end   -->
        
        <!--  choose start   -->
        <div class="choose">
           <h2><img src="/images/yangtze/choose.png" alt="" /></h2>
           <ul>
              <li>Best price for Yangtze Cruises ships and China cruise tours</li>
              <li>Money back service guarantee</li>
              <li>100% High Recommended from Trip Advisor</li>
              <li>No forced and hidden charge</li>
              <li>Get quote and itinerary within 12hs</li>
           </ul>
        </div>
        <!--  choose end   -->
        <div class="clear"></div>
        <!--  test start   -->
        <div class="text"><span><p>Yangtze river cruise is a best way to experience China's stunning landscapes, dynamic culture and exceptional architecture. 4-5 star luxury <a style="color: #2487D2;text-decoration: underline;" href="<?php echo Yii::app()->createUrl('cruise/ships');?>">cruise ships</a> are offered with great value.</p></span></div>
        <!--  text end   -->
    </div>
    <!--  banner1 end   -->
    
    <!--  middle start   -->
    <div id="middle">
        <div id="left">
          <!--  ships start   -->
          <div class="ships">
              <div class="shipstitle"><img src="/images/yangtze/shipsnew.png" alt="" /></div>
              <!--  shipscontent start   -->
              <div class="shipscontent">
                 <div class="shipsnew">
                      <h2><a href="/travel/yangtzecruise/ships/category-list?category=3" style="text-decoration:none;">Victoria Cruises</a></h2>
                      <p class="shipsnew_txt1">As the only American-managed cruises on the Yangtze River, they know what the western customers really want, and provide the outstanding onboard services. Their fleet of luxurious, five-star vessels host high-class, relaxing, and popular Yangtze cruises.</p>
                      <ul>
                      <li class="pic"><a href="/travel/yangtzecruise/ships/category-list?category=3"><img src="/images/yangtze/symbol1.jpg" alt="" /></a></li>
                         <li>
                            <ol>
                              <?php foreach($cruises as $v):?>
                                <?php if($v->category == 3):?>
                                <li><a href="<?php echo Yii::app()->createUrl("cruise/view", array('id'=>$v->id,'name'=>SiteUtils::stringURLSafe($v->cruise_name)));?>"><?php echo $v->cruise_name;?></a><span class="star<?php echo $v->cruise_grade;?>"></span><strong><b>US<?php echo $v->uplowprice;?></b></strong></li>
                                <?php endif;?>
                              <?php endforeach;?>
                            </ol>
                         </li>
                      </ul>
                 </div>
                 
                 <div class="shipsnew">
                      <h2><a href="/travel/yangtzecruise/ships/category-list?category=1" style="text-decoration:none;">President Cruises</a></h2>
                      <p class="shipsnew_txt1">The cheapest in the 5-star cruise ships. President Series Cruises is the only luxury fleet integrated with national restaurant and tourism management. Moreover, all ships are family friendly designed which is the top choice for families with kids.</p>
                      <ul>
                         <li class="pic"><a href="/travel/yangtzecruise/ships/category-list?category=1"><img src="/images/yangtze/symbol2.jpg" alt="" /></a></li>
                         <li>
                            <ol>
                                <?php foreach($cruises as $v):?>
                                  <?php if($v->category == 1):?>
                                  <li><a href="<?php echo Yii::app()->createUrl("cruise/view", array('id'=>$v->id,'name'=>SiteUtils::stringURLSafe($v->cruise_name)));?>"><?php echo $v->cruise_name;?></a><span class="star<?php echo $v->cruise_grade;?>"></span><strong><b>US<?php echo $v->uplowprice;?></b></strong></li>
                                  <?php endif;?>
                                <?php endforeach;?>
                            </ol>
                         </li>
                      </ul>
                 </div>
                 
                 <div class="shipsnew">
                      <h2><a href="/travel/yangtzecruise/ships/category-list?category=2" style="text-decoration:none;">New Century</a></h2>
                      <p class="shipsnew_txt1">Century Cruises offers a first class river cruising experience with the highest level of comfort and the most personalized service aboard its contemporary, well-reputed fleet of ships. New Century Cruises (Century Star and Century Diamond)takes passenger's possible demands well into consideration in cabin design. </p>
                      <ul>
                         <li class="pic"><a href="/travel/yangtzecruise/ships/category-list?category=2"><img src="/images/yangtze/symbol3.jpg" alt="" /></a></li>
                         <li>
                            <ol>
                               <?php foreach($cruises as $v):?>
                                <?php if($v->category == 2):?>
                                <li><a href="<?php echo Yii::app()->createUrl("cruise/view", array('id'=>$v->id,'name'=>SiteUtils::stringURLSafe($v->cruise_name)));?>"><?php echo $v->cruise_name;?></a><span class="star<?php echo $v->cruise_grade;?>"></span><strong><b>US<?php echo $v->uplowprice;?></b></strong></li>
                                <?php endif;?>
                              <?php endforeach;?>
                            </ol>
                         </li>
                      </ul>
                 </div>
                 
                 <div class="shipsnew">
                      <h2><a href="/travel/yangtzecruise/ships/category-list?category=4" style="text-decoration:none;">Gold Cruises</a></h2>
                      <p class="shipsnew_txt1">Yangtze Gold Cruise is one of the newest and most luxurious cruise series sailing on the Yangtze River. With the functional and complete facilities onboard, offering guests the unmatched comfort, the mot personalized service & ultimate cruise experience.</p>
                      <ul>
                         <li class="pic"><a href="/travel/yangtzecruise/ships/category-list?category=4"><img src="/images/yangtze/symbol4.jpg" alt="" /></a></li>
                         <li>
                            <ol>
                               <?php foreach($cruises as $v):?>
                                <?php if($v->category == 4):?>
                                <li><a href="<?php echo Yii::app()->createUrl("cruise/view", array('id'=>$v->id,'name'=>SiteUtils::stringURLSafe($v->cruise_name)));?>"><?php echo $v->cruise_name;?></a><span class="star<?php echo $v->cruise_grade;?>"></span><strong><b>US<?php echo $v->uplowprice;?></b></strong></li>
                                <?php endif;?>
                              <?php endforeach;?>
                            </ol>
                         </li>
                      </ul>
                      <div class="more"><a href="/travel/yangtzecruise/ships/">&raquo; more cruise ships</a></div>
                 </div>
              </div>
              <!--  shipscontent end   -->
          </div>
          <!--  ships end   -->
          
          <!--  tours start   -->
          <div class="tours">
              <div class="shipstitle"><img src="/images/yangtze/tours.png" alt="" /></div>
              <!--  tourslist start   -->
              <div class="tourslist1">
                 <ul>
                    <li class="pic"><img src="/images/yangtze/ship02.jpg" alt="" /><span><a href="javascript:showTreasures('1');"><img src="/images/yangtze/viewnew.png" alt="" /></a></span></li>
                    <li class="dest"><h2>Fantastic Yangtze River Cruise</h2>
                        <strong>Destination:</strong> Beijing, Chongqing, Yangtze River, Yichang, Shanghai
                    </li>
                    <li class="days"><span><a href="/tour/yct-10.html">Budget: 8 days</a> <?php echo SiteUtils::getCurrencyPrice(1998);?></span>
                        <span><a href="/tour/yct-11.html">Standard: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2275);?></span>
                        <span><a href="/tour/yct-12.html">Luxury: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2432);?></span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img src="/images/yangtze/spring.jpg" alt="" />
                                        <img src="/images/yangtze/summer.jpg" alt="" /> 
                                        <img src="/images/yangtze/autumn.jpg" alt="" />           
                    </li>
                 </ul> 
              </div>
              <!--  tourslist end   -->
              <!--  tourslist start   -->
              <div class="tourslist1" style=" margin-right:0px;">
                 <ul>
                    <li class="pic"><img src="/images/yangtze/ship01.jpg" alt="" /><span><a href="javascript:showTreasures('2');"><img src="/images/yangtze/viewnew.png" alt="" /></a></span></li>
                    <li class="dest"><h2>Memorable Yangtze River Experience</h2>
                        <strong>Destination:</strong> Beijing, Xian, Chongqing, Yangtze River, Yichang and Shanghai
                    </li>
                    <li class="days"><span><a href="/tour/bct-10.html">Budget: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2018);?></span>
                        <span><a href="/tour/bct-11.html">Standard: 11 days</a> <?php echo SiteUtils::getCurrencyPrice(2661);?></span>
                        <span><a href="/tour/yct-09.html">Luxury: 11 days</a> <?php echo SiteUtils::getCurrencyPrice(2707);?></span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img src="/images/yangtze/spring.jpg" alt="" />
                                        <img src="/images/yangtze/summer.jpg" alt="" /> 
                                        <img src="/images/yangtze/autumn.jpg" alt="" />          
                    </li>
                 </ul>  
              </div>
              <!--  tourslist end   -->
              <div class="clear"></div>
              <!--  tourslist start   -->
              <div class="tourslist1" style="margin-bottom:0px;">
                 <ul>
                    <li class="pic"><img src="/images/yangtze/ship03.jpg" alt="" /><span><a href="javascript:showTreasures('3');"><img src="/images/yangtze/viewnew.png" alt="" /></a></span></li>
                    <li class="dest"><h2>Memorable Yangtze Tour from Shanghai</h2>
                        <strong>Destination:</strong> Shanghai,Yangtze River, Guilin, Yangshuo, Xian, Beijing
                    </li>
                    <li class="days"><span><a href="/index.php?option=com_showpc&view=default&pcid=701">Budget: 7 days</a> <?php echo SiteUtils::getCurrencyPrice(1025);?></span>
                        <span><a href="/index.php?option=com_showpc&view=default&pcid=702">Standard: 12 days</a> <?php echo SiteUtils::getCurrencyPrice(1520);?></span>
                        <span><a href="/index.php?option=com_showpc&view=default&pcid=703">Luxury: 14 days</a> <?php echo SiteUtils::getCurrencyPrice(2290);?></span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img src="/images/yangtze/spring.jpg" alt="" />
                                        <img src="/images/yangtze/summer.jpg" alt="" /> 
                                        <img src="/images/yangtze/autumn.jpg" alt="" />       
                    </li>
                 </ul> 
              </div>
              <!--  tourslist end   -->
              <!--  tourslist start   -->
              <div class="tourslist1" style=" margin-right:0px; margin-bottom:0px">
                 <ul>
                    <li class="pic"><img src="/images/yangtze/ship04.jpg" alt="" /><span><a href="javascript:showTreasures('4');"><img src="/images/yangtze/viewnew.png" alt="" /></a></span></li>
                    <li class="dest"><h2>Yangtze Cruise from Hong Kong</h2>
                        <strong>Destination:</strong> Hong Kong, Chongqing, Yangtze River, Yichang, Shanghai, Xian, Beijing
                    </li>
                    <li class="days"><span><a href="/tour/yct-01.html">Budget: 10 days</a> <?php echo SiteUtils::getCurrencyPrice(2540);?></span>
                        <span><a href="/tour/yct-02.html">Standard: 11 days</a> <?php echo SiteUtils::getCurrencyPrice(2759);?></span>
                        <span><a href="/tour/yct-03.html">Luxury: 12 days</a> <?php echo SiteUtils::getCurrencyPrice(2880);?></span>
                    </li>
                    <li class="seasons"><h3>RECOMMENDED SEASONS</h3>
                                        <img src="/images/yangtze/spring.jpg" alt="" />
                                        <img src="/images/yangtze/summer.jpg" alt="" /> 
                                        <img src="/images/yangtze/autumn.jpg" alt="" />          
                    </li>
                 </ul>  
              </div>
              <!--  tourslist end   -->
              <div class="more"><a href="/travel/yangtze-river-tours">&raquo; more China tour packages</a></div>
          </div>
          <!--  tours end   -->
        </div>
        <div id="right">
            <?php $this->renderPartial('_rightSearch');?>
            <div class="calnew">
               <div class="callist">
                   <table cellspacing="0" cellpadding="0" border="0">
                     <tbody>
                      <?php 
                        $month_arr = array_chunk(range(1,12),4);
                      ?>
                      <?php foreach($month_arr as $arr):?>
                        <tr>
                            <?php foreach($arr as $v):?>
                            <td <?php if($v%4 == 0):?> style="border-right:none;" <?php endif;?>>
                              <?php if(date("m") == $v):?>
                              <a style="background:#dbdada; display:block;" href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php elseif(date("m")<$v):?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php else:?>
                              <?php echo date('M',strtotime(date("Y-".$v."-d")));?>
                              <?php endif;?>
                              </td>
                            <?php endforeach;?>
                        </tr>
                      <?php endforeach;?>

                     </tbody>
                   </table>
                   <?php if(date('m')==12):?>
                   <?php 
                   	$years =date('Y')+1;
                   ?>
                   <p class="callist_2015"> <span><?=$years?></span></p>
                   <table cellspacing="0" cellpadding="0" border="0">
                     <tbody>
                      <?php 
                        $month_arr = array_chunk(range(1,12),4);
                      ?>
                      <?php foreach($month_arr as $arr):?>
                        <tr>
                            <?php foreach($arr as $v):?>
                            <td <?php if($v%4 == 0):?> style="border-right:none;" <?php endif;?>>
                              <?php if(date('m',strtotime(date($years.'-'.$v."-d"))) == $v):?>
                              <a style="background:#dbdada; display:block;" href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date($years.'-'.$v."-d")));?></a>
                              <?php elseif(date('m',strtotime(date($years.'-'.$v."-d")))<$v):?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date($years.'-'.$v."-d")));?></a>
                              <?php else:?>
                              <?php echo date('M',strtotime(date($years.'-'.$v."-d")));?>
                              <?php endif;?>
                              </td>
                            <?php endforeach;?>
                        </tr>
                      <?php endforeach;?>

                     </tbody>
                   </table>
                   <?php endif;?>
               </div>
            </div>
            <div class="spots">
                <h2><a href="/yangtze-river/">Yangtze River Scenic Sports</a></h2>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                   <tr>
                      <td><a href="/yangtze-river/qutang-gorge.html"><img src="/images/yangtze/spots01.jpg" alt="" /></a></td>
                      <td><a href="/yangtze-river/wuxia-gorge.html"><img src="/images/yangtze/spots02.jpg"  alt="" /></a></td>
                   </tr>
                   <tr>
                      <td><a href="/yangtze-river/xiling-gorge.html"><img src="/images/yangtze/spots03.jpg" alt="" /></a></td>
                      <td><a href="/yangtze-river/three-gorge-dam.html"><img src="/images/yangtze/spots04.jpg" alt="" /></a></td>
                   </tr>
                   <tr>
                      <td colspan="2"><a href="/yangtze-river/shibaozhai.html"><img src="/images/yangtze/spots05.jpg" alt="" /></a></td>
                   </tr>
                  </tbody>
                </table>
            </div>
            <div class="faq">
               <h2><a href="/travel/faq/25/Information+about+Yangtze+River+Cruise" target="_blank">Yangtze River Faqs</a></h2>
               <ul>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=2" target="_blank">What is the on board smoking policy?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=3" target="_blank">Do the cabins have safes?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=10" target="_blank">Are there laundry services aboard?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=12" target="_blank">Are special diets catered for?</a></li>
                <li><a href="/travel/faq/27/Onn+Board+Experience?faqnum=14" target="_blank">Do the staffs onboard speak English?</a></li>
              </ul>
            </div>
            
            <!--  question start   -->
        <div class="question">
           <div class="title"><img src="/images/yangtze/title_new.jpg" alt=""  height="76"/></div>
           <!--  submit start   -->
           <div class="submit">
            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'message-form',
              'enableAjaxValidation'=>false,
            )); ?>
           <table border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td colspan="2" style="font-size:10px; padding-bottom:0px;">We will reply you within one working day.</td>
              </tr>
              <tr>
                <td colspan="2">
                  <?php echo $form->textArea($model,'message'); ?>
                  <?php //echo $form->error($model,'message'); ?>
                </td>
              </tr>
              <tr>
                <td>Your Name:</td>
                <td>
                  <?php echo $form->textField($model,'username'); ?>
              <?php //echo $form->error($model,'username'); ?>             </tr>
              <tr>
                <td>Your Email:</td>
                <td>
                    <?php echo $form->textField($model,'email'); ?>
                    <?php //echo $form->error($model,'email'); ?>
                </td>
              </tr>
              <tr>
                <td>Verify Code:</td>
                <td>
                  <?php echo $form->textField($model,'verifyCode',array('size'=>'10','style'=>' width:70px;float:left;')); ?>
                  <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer;float:left;'))); ?>
                  <?php //echo $form->error($model,'verifyCode');?>
                </td>
              </tr>
              <tr>
                <td colspan="2"> <input type="checkbox" checked style="width:5px;height:5px;" /> I agree with <a href="/privacy-policy.html" target="_blank" style="color: #352E2C;text-decoration: underline;">Privacy Policy</a></td>
              </tr>
              <tr>
                <td colspan="2">
                  <?php echo CHtml::imageButton("/images/yangtze/submit.png", array('style'=>'border:0; width:119px; height:33px')); ?>
                </td>
              </tr>
              </tbody>
           </table>
           <?php $this->endWidget(); ?>
           </div>
           <!--  submit end   -->
        </div>
        <!--  question end   -->
   <!-- code start -->
  <div class="code" style="clear:both; padding-top:15px; width:245px">
      <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
     
  </div>
    <!-- code end -->
        <script>
  $(function(){
    var Message_message_default_value = "Pls leave your travel date, group size, destinations, hotel and ship class here.";
    $("#Message_message").val(Message_message_default_value);
    $("#Message_message").css("color","#999");
    $("#Message_message").click(function(){
      if($(this).val() == Message_message_default_value){
        $("#Message_message").val("");
      }
    })
  })
</script>
        </div>
    </div>
    <!--  middle end   -->
    
    <!--  banner2 start   -->
    <div id="banner2">
        <div class="text1">
           <img src="/images/yangtze/guide.jpg" alt="" /> <p>Nearly 6300 km, winding its way through 11 provinces into the East Sea, the Yangtze River is the symbol and spirit of China. Meanwhile, Yangtze River Cruise is the best way to appreciate the panorama of the grand Yangtze River.</p>
        </div>
        <div class="banner3"><img src="/images/yangtze/bannernew.jpg" alt="" /></div>
        <div class="wonderful">
            <ul>
               <li><img src="/images/yangtze/01.jpg" alt="" /><strong>Comfort and Safety Guest Room</strong>Standard room with twin beds is well equipped with Picture Window or Private Balcony, Central Air-conditioning, 24 hours hot water, satellite TV, Phone, Small Refrigerator, bar etc. 
               </li>
               <li><img src="/images/yangtze/04.jpg" alt="" /><strong>Thoughtful Star Level Services</strong>All the crew on the cruise is professional service staff trained by Hotel Management Training Center, ready to help you in 24 hours with smile. 
               </li>
               <li style="margin-right:0px;"><img src="/images/yangtze/03.jpg" alt="" /><strong>Cate Tour</strong>The rich Chinese &amp; Western breakfast buffet and marvelous Sichuan cuisines, as well as the unique Yangtze aquatic products, will please your appetite. Personal appetite is respected here too! 
               </li>
               <li><img src="/images/yangtze/02.jpg" alt="" /><strong>Relaxed Ways to Enjoy Scenery</strong>Yangtze Cruise has Indoor Viewing Hall and the whole floor Viewing Deck for tourists to use. The Observation deck, front and rear leisure deck on the top are equipped with beach chairs or cafe bar, give you 360 degrees to enjoy the beautiful Three Gorges.
               </li>
               <li><img src="/images/yangtze/05.jpg" alt="" /><strong>Strong Local Characteristic Onshore Sightseeing</strong>All the attractions included in the package have strong local characteristics. Three Gorges Dam, Fengdu Ghost Town, Shibao Town, Shennong Strem or Lesser Three Gorges are the must see attractions. 
               </li>
               <li style="margin-right:0px;"><img src="/images/yangtze/06.jpg" alt="" /><strong>Rich and Colorful Recreational activities</strong>The cultural and recreational activities on the cruise, the Cultural Lecture, Dancing &amp; Sing Performance, Taiji Exercise, Mahjong Competition etc., will highlight your stay on Yangtze cruise. 
               </li>
            </ul>
        </div>
    </div>
    <!--  banner2 end   -->
</div>
<div class="treasures1" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2>Fantastic Yangtze River Cruise</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;">Beijing, Chongqing, Yangtze River, Yichang, Shanghai</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>A better and comfort way to enjoy China's stunning landscapes, dynamic culture and exceptional architecture? It must be the Yangtze River Cruise, which is often part of China Tour with Great Wall and Frobidden City in Beijing, Yuyuan Garden and Bund in Shanghai.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/tour/yct-10.html">Budget: 8 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(1998);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/tour/yct-11.html">Standard:10 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2275);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/tour/yct-12.html">Luxury: 10 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2432);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free1.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map1.jpg" alt="" /></div>
      </div>
<div class="treasures2" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2>Memorable Yangtze River Experience</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;">Beijing, Xian, Chongqing, Yangtze River, Yichang and Shanghai</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>Xian, equivalent to ancient Roman Empire's capital-Rome, is one of eight ancient capitals in China's history. It is the ancient capitals of 13 dynasties with 3100 years history, which means Xian has numerous cultural relics, such as Terracotta Warriors, City Wall, Big Wild Goose Pagoda Etc,.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/tour/bct-10.html">Budget: 10 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2018);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/tour/bct-11.html">Standard:11 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2661);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/tour/yct-09.html">Luxury: 11 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2707);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map2.jpg" alt="" /></div>
      </div>
<div class="treasures3" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2 style="font-size:16px;">Memorable Yangtze Tour from Shanghai</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;"> Shanghai,Yangtze River, Guilin, Yangshuo, Xian, Beijing</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>Owing to its gifted geographic location, Shanghai has become a well--known sea and river port, boasting easy accesses to a vast hinterland. With a population reaching to 200million, Shanghai is the largest city of China, and also an international metropolis serving as the most influential economic, financial, international trade, cultural, science and technology center in East China.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/index.php?option=com_showpc&view=default&pcid=701">Budget: 7 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(1025);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/index.php?option=com_showpc&view=default&pcid=702">Standard:12 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(1520);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/index.php?option=com_showpc&view=default&pcid=703">Luxury: 14 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2290);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free1.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map31.jpg" alt="" /></div>
      </div>
<div class="treasures4" style="display:none;">
           <div class="trea-close" onclick="$.zxxbox.hide();"><img src="/images/yangtze/close.png" alt="" /></div>
           <div class="trea-left">
              <h2>Yangtze Cruise from Hong Kong</h2>
              <table border="0" cellspacing="0" cellpadding="0">
                 <tr>
                     <td><strong>Touring Route:</strong> <span style="display:block; float:right; width:267px;">Hong Kong, Chongqing, Yangtze River, Yichang, Shanghai, Xian, Beijing</span></td>
                 </tr>
                 <tr>
                     <td style="color:#191919; border-bottom:1px dashed #adacac; padding-top:0px;"><img src="/images/deng_03.png" alt="" /> <strong style=" color:#744311; float:none;">Note:</strong>The Direction of Tour Route is flexible to Change. </td>
                 </tr>
                 <tr>
                     <td>Hong Kong has been always one of the world's most popular tours for its incredible landscape, shopping and food paradise, and multiple cultures. It has so many wonderful places to visit that one can hardly take all of them at one time or even through a lifetime, a little small in size though.</td>
                 </tr>
                 <tr>
                     <td style="padding-top:0px;">
                        <ul>
                           <li><a href="/tour/yct-01.html">Budget: 10 days <br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2540);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li><a style=" width:108px;" href="/tour/yct-02.html">Standard:11 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2759);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                           <li style="margin-right:0px;"><a href="/tour/yct-03.html">Luxury: 12 days<br />
                           From:<span><?php echo SiteUtils::getCurrencyPrice(2880);?></span><br />
                           <img src="/images/yangtze/check.jpg" alt="" /></a>
                           </li>
                        </ul>
                     </td>
                 </tr>
                 <tr>
                     <td><img src="/images/yangtze/free.jpg" alt="" /></td>
                 </tr>
              </table>
           </div>
           <div class="trea-right"><img src="/images/yangtze/map4.jpg" alt="" /></div>
      </div>
<script>

var _cruise = {
  inx:1,
  showYear:function(obj){
    $(obj).find("ul").toggle();
  },
  chooseYear:function(inx){
    if(inx == 1){
      $("#2013_table").show();
      $("#2014_table").hide();
      $("#current_year").html("2013");
    }else if(inx == 2){
      $("#2013_table").hide();
      $("#2014_table").show();
      $("#current_year").html("2014");
    }
  }
}
function showTreasures(num){
	//$('.treasures'+num).show();
	$('.treasures'+num).zxxbox(
			{ bar: true,
			  bgclose: true,
			  bg: true
		    }
	);
}

$(function(){
  $("#cruise_ships_scroll").find("li").hover(function(){
    $("#cruise_ships_scroll").find("li").each(function(){
      var i = $("#cruise_ships_scroll").find("li").index(this)+1;
      $(this).removeClass("ppt"+i+'dq').addClass("ppt"+i);
    })
    _cruise.inx = $("#cruise_ships_scroll").find("li").index(this)+1;
    $(this).removeClass("ppt"+_cruise.inx).addClass("ppt"+_cruise.inx+"dq");
    $(".big1,.big2,.big3,.big4").hide();
    $(".big"+_cruise.inx).show();
  },function(){
   
  });

  $(".big1,.big2,.big3,.big4").find(".biglist").find("ul li").click(function(){
      var originSrc = $(this).find("img").attr("originSrc");
      var imgLink = $(this).find("img").attr("imgLink");
      $(".big"+_cruise.inx).find(".bigpic .fixpic").html('<a target="_blank" href="'+imgLink+'"><img src="'+originSrc+'" /></a>');
       $(".big"+_cruise.inx).find(".biglist ul li").removeClass("dq");
      $(this).addClass("dq");
  });
})
</script>
