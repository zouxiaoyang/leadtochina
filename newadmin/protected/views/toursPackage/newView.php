<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/view.css');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/slide.js');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox-0.5.min.js');
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/jquery.lightbox-0.5.css');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lazyload.js');
?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:9px 0px 12px 0px;}
#tab-menu{z-index:999;width:920px;}
#featured {
  OVERFLOW: hidden;  POSITION: relative;
}
#featured .word {
  PADDING-RIGHT: 5px;padding-left:5px;z-index: 10;left: 0px; padding-bottom: 5px; width: 870px; color: #fff; bottom: 0px; padding-top: 5px; position: absolute; height: 32px;text-align: center;display:none;
}


#topstory {
  MARGIN-TOP: 5px; MARGIN-left: 5px; BACKGROUND: #fff; FLOAT: left; WIDTH: 490px; HEIGHT: 237px
}
#highlight {
  PADDING-RIGHT: 5px; PADDING-LEFT: 5px; FLOAT: left; PADDING-BOTTOM: 5px; WIDTH: 470px; PADDING-TOP: 5px
}

#thumbs a.current{border:1px solid #8c4600;}

.tips_title{color:#666;margin-bottom:3px;}
.tips p{padding-bottom:6px;}
#tab5 {
   background: none repeat scroll 0 0 #FFFFFF;
    height: auto;
    margin: 10px 0;
    overflow: hidden;
    padding: 10px 0;
    width: 100%;
}
.smallpic ul li{line-height:87px;overflow:hidden;}

.smallpic ul li a img{vertical-align:middle;width:87px}


.nobg{
  background: none repeat scroll 0 0 transparent !important;
  color: #2487D2;
  padding-right: 15px;
}

.oneleft table tr td.bold {
    width: 120px;
}
-->
</style>
<!--  index start  -->
<div id="index">
    <!--  menu-tours start  -->
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> 
      <?php if($category->section == 'com_ctours'):?> 
        <a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> <?php elseif($category->section == 'com_cntours'):?> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> 
      <?php endif;?> 

      <?php if($category->title == 'Beijing Tours'):?>
          <a class="nobg" href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>"><?php echo $category->title;?></a>
      <?php elseif($category->title == 'Shanghai Tours'):?>
          <a class="nobg" href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>"><?php echo $category->title;?></a>
      <?php elseif(trim($category->title) == 'Best China Tour'):?>
          <a class="nobg" href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>"><?php echo $category->title;?></a>
      <?php elseif($category->title == 'Fujian Tulou Tours'):?>
        <a class="nobg" href="/travel/fujian-tulou-tours"><?php echo $category->title;?></a>
      <?php elseif(strpos($category->title, ' Tours') !== false):?>
          <a class="nobg" href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>SiteUtils::stringURLSafe($category->title)));?>"><?php echo $category->title;?></a>
      <?php elseif($category->title=='China Adopt Tour'):?>
        <a class="nobg" href="/travel/adoption">China Adoption Tour</a> 
      <?php else:?>
        <?php echo $category->title;?>
      <?php endif;?>
    </div>
    <!--  menu-tours end  -->
    
    <!--  one start  -->
    <div class="one" style="margin-bottom:15px;">
    <table>
    <tr>
    <td>
       <!--  oneleft start  -->
       <div class="oneleft">
           <h2><?php echo $packageInfo->name;?></h2>
           <table border="0" cellspacing="0" cellpadding="0" style="width:583px;">
             <tbody>
                 <tr>
                     <td width="121" class="bold">DESTINATIONS:</td>
                   <td width="462"><?php echo $packageInfo->route;?></td>
                </tr>
                 <tr>
                     <td class="bold">TOUR CODE:</td>
                     <td><?php echo $packageInfo->package_code;?></td>
                 </tr>
                 <tr>
                     <td class="bold">DEPARTURES:</td>
                     <td><?php echo $packageInfo->departs;?></td>
                 </tr>
                 <tr>
                     <td class="bold">TOUR TYPE:</td>
                     <td><?php echo $packageInfo->package_tour_type;?></td>
                 </tr>
                 <?php if(empty($packageInfo->price)):?>

                 <?php else:?>
                 <tr>
                     <td class="bold">PRICE:</td>
                     <td>From <strong><?php echo SiteUtils::getCurrencyPrice($packageInfo->price);?></strong> p/p Include: <?php echo strip_tags($packageInfo->tour_intro);?></td>
                 </tr>
                 <?php endif;?>
                 <tr>
                     <td class="bold">FEATURES:</td>
                     <td><?php echo  SiteUtils::mb_truncate_text($packageInfo->attractions, 110);?></td>
                 </tr>

                 <tr>
                     <td colspan="2">
                         <form id="orderForm" method="post" action="/index.php?option=com_order" style="float:left;margin:12px 10px 0 0;">
                            <input type="hidden" name="pcid" value="<?php echo $packageInfo->id;?>" />
                            <input type="hidden" name="unit_price" value="<?php echo $packageInfo->price;?>" />
                            <input type="hidden" name="pagetitle1" value="<?php echo $packageInfo->name;?>"/>
                            <input type="image" src="/images/view/quote.jpg" />
                        </form>
                        
                        <a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank" style="float:left" ><img src="/images/view/livechat.jpg" /></a> 
                        <span>
                          <a href="http://facebook.com/lead2china" target="_blank"><img src="/images/view/f.png" /></a>
                          <a href="http://twitter.com/leadtochina" target="_blank"><img src="/images/view/t.png" /></a>
                          <a href="http://www.youtube.com/user/OnlineChinaTours1" target="_blank"><img src="/images/view/y.png" /></a>
                        </span>
                     </td>
                 </tr>
             </tbody>
           </table>    
       </div>
       <!--  oneleft end  -->
       </td>
       <td width="317" align="center" valign="middle" >
       <!--  oneright start  -->
        <img src="<?php echo '/'.$packageInfo->filedir.$packageInfo->ufile;?>" />
       </td>
       </tr>
       </table>
       <!--  oneright end  -->
    </div>
    <!--  one end  -->
    
    <!--  menu-table start  -->
    <div style="height:35px;clear:both;">
    <div class="menu-table" id="tab-menu">
       <ul>
          <li class="dq" onclick="_tab.change('tab1', this);"><a href="#itinerary">Full Itinerary</a></li>
          <?php if(empty($packageInfo->price)):?>

          <?php else:?>
          <li onclick="_tab.change('tab2', this);"><a href="#price">Price Details</a></li>
          <?php endif;?>
          <li onclick="_tab.change('tab3', this);"><a href="#gallery">Virtual Gallery</a></li>
          <li onclick="_tab.change('tab4', this);"><a href="#reviews">Reviews</a></li>
          <!-- <li onclick="_tab.change('tab5', this);"><a href="#qa">Q &amp; A</a></li>  -->
          <?php if($category->title=='China Adopt Tour'):?>
            <li onclick="_tab.change('tab6', this);"><a href="#tips_new">Return Trip Guide</a></li>
          <?php else:?>
            <li onclick="_tab.change('tab6', this);"><a href="#tips_new">Tips</a></li>
          <?php endif;?>
<?php if($category->title=='China Adopt Tour'):?>
  <li class="tesu"><a href="<?php echo Yii::app()->createUrl("adoption/customizeAdoption");?>"> <img src="/images/view/tailor-made.png" /></a></li>
<?php else:?>
          <li class="tesu"><a href="javascript:;" onclick="openWindow();"> <img src="/images/view/tailor-made.png" /></a></li>
<?php endif;?>
          <li class="tesu"><a href="javascript:;" onclick="$('#orderForm').submit();"><img src="/images/view/inquiry.png" alt="" /></a></li>
       </ul>
    </div>
    </div>
    <!--  menu-table end  -->
    
    <!--  itinerary start  -->
    <a name="itinerary" id="itinerary">  </a>

    <div class="itinerary" id="tab1">
        <!--  it-left start  -->
        <div class="it-left">
          <?php foreach($packageDesc as $k=>$v):?>
          <?php
            $temp_title="";
            if(!empty($v->hotel_name)){
              $temp_hotel= mysql_real_escape_string(trim($v->hotel_name));
              $hotel_res = Yii::app()->db->createCommand("SELECT id FROM jos_cos_hotel  WHERE name LIKE '$temp_hotel'")->queryAll();
              if($hotel_res){
                $temp_title=trim(strtolower($temp_hotel));
                $temp_title =str_replace(chr(32),"-",$temp_title);
              }
            }
            if($temp_title==""){
              $hotel_html=$v->hotel_name;
            }else{
               $hotel_html="<a href='/travel/".SiteUtils::stringURLSafe($v->hotel_name).'-'.$hotel_res[0]['id']."'  target='_blank'> {$v->hotel_name}</a>";
            }
            
            $hot_arr=explode(" ",$v->hotel_grade_str);
            $hotel_symbol="";
            for($x=0;$x<$hot_arr[0];$x++){
              $hotel_symbol.="★";
            }
            
          ?>
            <!--  days start  -->
            <div class="days">
                <!--  daystitle start  -->
                <div class="daystitle"><h2><strong>Day<?php echo $k+1;?>  <?php echo $v->today_route;?></strong> <img style="display:none;" src="/images/top10/flight.png" alt=""></h2> <span></span></div>
                <!--  daystitle end  -->

                <!--  dayscontent start  -->
                <div class="dayscontent">
                  <div class="dayscont">
                  <p>
                   <?php echo $v->activities;?>
                  </p>
                  <ul>
                     <li>Meals: <?php echo $v->eat_standard;?></li>
                     <?php if($v->hotel_grade_str):?>
                     <li class="accommod" style="display:none">Accommodation:
                      <?php //if($v->hotel_grade_str):?>
                       <?php echo $hotel_html;?><strong><?php echo $hotel_symbol;?></strong>
                        <?php //echo str_replace("Start","Star",$v->hotel_grade_str);?>
                      <?php //endif;?>
                     </li>
                    <?php endif;?>
                    <!-- <li class="optional">Optional Activities:</li>-->
                  </ul>
                  </div>
                </div>
                <!--  dayscontent end  -->
            </div>
            <!--  days end  -->
          <?php endforeach;?>          
           
        </div>
        <!--  it-left end  -->
        
        <!--  it-right start  -->
        <div class="it-right">
          <ul>
            <?php foreach($recommendPackagePic as $k=>$v):?>
              <?php 
                $pic_dir = str_replace('uploads', 'images/uploads', $v->pic_dir); 
                /*
                if($packageInfo->days == 1){
                  if($k>2) break;
                }elseif($packageInfo->days >=2 && $packageInfo->days<= 6){
                  if($k>4) break;
                }else{
                  if($k>8) break;
                }
                */
              ?>
              <?php if($k==0 && $v->pic_path):?>
                <li><img style="width:155px;" src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '235x175');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
              <?php elseif($k == 1 && $v->pic_path):?>
                <li class="margin"><img style="width:155px" src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '235x175');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
              <?php elseif($k == 2 && $v->pic_path):?>
                <li class="big"><img src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '314x314');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
              <?php elseif($k == 3 && $v->pic_path):?>
                <li><img style="width:155px" src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '155x155');?>" /><?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
              <?php elseif($k == 4 && $v->pic_path):?>
                <li class="margin"><img style="width:155px" src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '155x155');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
             
              <?php elseif($k==5 && $v->pic_path):?>
              <li class="big"><img src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '314x314');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
                
              <?php elseif($k == 6 && $v->pic_path):?>
                <li><img style="width:155px;" src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '155x155');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
              <?php elseif($k == 7 && $v->pic_path):?>
                <li class="margin"><img style="width:155px;" src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '155x155');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
              <?php elseif($k == 8 && $v->pic_path):?>
                <li class="big"><img src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '314x314');?>" /> <?php if($v->pic_alt):?><span><?php echo $v->pic_alt;?></span><?php endif;?></li>
              <?php endif;?>
            <?php endforeach;?>
          </ul>
        </div>
        <!--  it-right end  -->
    </div>
    <!--  itinerary end  -->
    
    <!--  virtual start  -->

    <a name="gallery" id="gallery">&nbsp;</a>
    <div class="virtual" id="tab3" style="display:none;">
       <div class="bigpic" id="featured">
          <div class="leftbutton"><img class="play_prev" src="/images/view/left.png" /></div>
           <?php $img_arr= array(); foreach($packagePic as $k=>$v):?>
            <?php 
              $pic_dir = str_replace('uploads', 'images/uploads', $v->pic_dir);
              $img_arr[] = '"img_'.$k.'"';

            ?>
            <div id="image_img_<?php echo $k;?>" <?php if($k!=0):?>style="display:none"<?php endif;?> class="bigphoto"><img style="height:400px;" src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '503x400');?>" alt="<?php echo $v->pic_alt;?>" />
                  <div class="word"><font class="word_text"><?php echo $v->pic_alt;?></font></div>
            </div>
           <?php endforeach;?>
          <div class="rightbutton"><img class="play_next" src="/images/view/right.png" /></div>
       </div>
       <div class="smallpic" id="thumbs">
          <div class="smallleft"><img class="play_prev" id="play_prev" src="/images/view/leftsmall.png" /></div>
          <ul>
           <?php foreach($packagePic as $k=>$v):?>
             <?php $pic_dir = str_replace('uploads', 'images/uploads', $v->pic_dir);?>
             <li <?php if($k >=8):?>style="display:none"<?php endif;?>><a id="thumb_img_<?php echo $k;?>" href="#thumb_img_<?php echo $k;?>"><img src="<?php echo ImageUtils::getThumbnail($pic_dir.$v->pic_path, '100x120');?>" /></a></li>
           <?php endforeach;?>
          </ul>
          <div class="smallright"><img class="play_next" src="/images/view/rightsmall.png" /></div>
       </div>
       
       <script type=text/javascript>var target = [<?php echo implode(',', $img_arr);?>];</script>
    </div>
    <!--  virtual end  -->
    
    <!--  reviews start  -->
    <a name="reviews" id="reviews"> &nbsp; </a>
    <div class="reviews" id="tab4" style="display:none;">
       
       <!--  releft start  -->
       <div class="releft">
          <div class="client"><a href="<?php echo Yii::app()->createUrl('reviews/share',array('tour_id'=>$packageInfo->id));?>" target="_blank"><img src="/images/view/share.png" /></a></div>
          
          <?php foreach((array)$share_reviews as $v):?>
          <ul>
             <li class="pic">
              <?php if($v['index_pic']):?> <img style="width:150px;" src="<?php echo Reviews::UPLOAD_PATH.$v['index_pic'];?>" />
              <?php else:?>
                <img style="width:150px;" src="/images/view/Reviews.jpg" />
              <?php endif;?>
             </li>
             <li class="desc"><?php echo $v['description'];?>
             <span>Asked by <strong><?php echo $v['name'];?></strong>(<?php echo date('M.d, Y', strtotime($v['dateline']));?>)</span></li>
          </ul>
          <?php endforeach;?>
       </div>
       <!--  releft end  -->
       
       <!--  reright start  -->
       <div class="reright">
          <div class="trips"><a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html" target="_blank"><img src="/images/view/trip.jpg" /></a></div>
          <div class="local"><img src="/images/view/local.jpg" alt="" /></div>
          <div class="service">
             
             <?php foreach ((array)$testimonial as $k=>$v):?>
             <div class="second">
                <div class="second01">
                    <ul id="testimonial">
                        <li class="pic1">
                          <img src="/images/view/pic2.jpg" alt="" />
                            <a href="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]" title="<?php echo $v['title'];?>"><img src="/images/about/enlarge.jpg" /></a>
                        </li>
                        <li class="time"><?php echo date('Y/m/d',$v['created']);?></li>
                        <li class="name"><span>Name:</span><?php echo $v['name']; ?><br />
                            <span>Country:</span><?php echo $v['nationnality'];?>
                        </li>
                    </ul>
                   </div>
              </div>
             <div class="firstbottom"></div>
             <?php endforeach;?>

          </div>
       </div>
       <!--  reright end  -->
    </div>
    <!--  reviews end  -->
    
    <!--  tips start  -->
    
    <a id="tips_new" name="tips_new" style="display:block;"> &nbsp; </a>
    
    
   

      <?php if($category->title=='China Adopt Tour'):?>
       <div class="tips_new" id="tab6" style=" display:none;margin-top:-28px;">
       <ul>
          <li><a href="/travel/adoption-guide/doc-required-for-orphanages-visit-177">Doc for SWI Visit</a></li>
          <li><a href="/travel/adoption-guide/tips-for-a-homeland-orphanage-visit-172">Tips for SWI Visit</a></li>
          <li><a href="/travel/adoption/orphanageList">List of China SWI</a></li>
          <li><a href="/travel/adoption/storyIndex">Latest Travel Stories</a></li>
       </ul>
       <ul class="long">
          <li><a href="/travel/adoption-guide/pre-trip-preparation-for-your-china-travel-178">Pre-Trip Preparation for Your China Travel</a></li>
          <li><a href="/travel/adoption-guide/when-and-why-to-travel-back-to-china-175">When and Why to Travel Back to China</a></li>
          <li><a href="/travel/adoption-guide/hot-china-travel-destinations-for-kids-129">Hot China Travel Destinations for Kids</a></li>
          <li><a href="/travel/adoption-guide/tips-for-tour-with-kids-120">Tips for Tour with Kids</a></li>
       </ul>
       <ul>
          <li><a href="/travel/adoption-guide/tips-during-the-trip-176">Tips during the Trip</a></li>
          <li><a href="/travel/adoption-guide/how-to-book-and-get-promotions-174">How to Book and Get Promotions</a></li>
          <li><a href="/travel/adoption-guide/travel--shopping-tips-126">Travel &amp; Shopping Tips</a></li>
       </ul>
     <?php else:?>
     <div class="tips" id="tab6" style=" display:none;margin-top:10px;">
         <p><strong>Tips for this Tour</strong>
        <?php echo $packageInfo->tips;?>
        
       <p><strong>General Tips for Touring China</strong></p>
       
        <p>
          <span class="tips_title">About the Itinerary</span>
          1. It is flexible to change the duration, attractions, Starting and Ending cities according to your interests. Besides, all of the tour packages exclude the     international airfares. As the China Visa, we cannot apply for you for we are a China inbound travel compnay. However, we can send the invitation letter      with our company's official seal to you after you booked the tour from us, which could help you get China Visa from China embassy easily. 
        </p>
        <p>2. As the Cell phone SIM Card, you can have it at airport, some Newspaper kiosk, and China Mobile outlet for 100 RMB without showing ID Card or Passport. The    SIM Card is available to give domestic and international call. However, it's only available in mainland China, not Hong Kong. For the Iphone, China Unicom    is better as you can get 3G.  </p>

        <p>
          <span class="tips_title">About the Meal</span>
          1. For the breakfast, it is offered by the hotel you stay, usually Chinese and Western buffet breakfast. As the lunch, we offer 50RMB per person for a         standard Chinese meal at a nice tourist restaurant. Our guide will help you to balance each meal such as your taboo, your preference and avoid repeated       food. You have to pay for the extra cost if you want to take better or more. The meals on Yangtze Cruise are fixed Chinese and Western Buffet. </p>

        <p>
          <span class="tips_title">About the Hotel</span>
          1. All the hotels can be replaced by your favorite ones. And the hotels we offered here usually are twin bed rooms. If you want to have King size bed room or    suite, please let your trip advisor know. Besides, all the accommodation are quoted on two persons sharing one room. The room supplement must be paid if      you want to have a single room.</p>

        <p>2. Most hotels we offered in our tour package have WIFI in the lobby, and some of which have WIFI in hotel rooms. If you need the WIFI in your room, please make sure with your trip advisor.</p>

        <p>
          <span class="tips_title">About Shopping</span>
          1. We have non-shopping private tour and tour with carefully selected shops. For tour with shops, the price will be lower, and you will enter one or two       shops in every tourist city. The shops could be jade, silk, pearl, Chinese tea etc., all of which have strong China's character and is worthy to buy. Each    shop will take you around 45 minutes. We proise there is no compulsory consumption at all. You get the situation in your hands.</p>

        <p>2. Department stores, supermarkets, boutiques, hotel and restaurants in most cities of China do accept the credit card with the sigh of Mastercard, VISA and    JCB. However, it does generate commission charge. Please check the regulations with your bank manager.</p>



        <p>
          <span class="tips_title">About the Flight</span>
          1. All domestic flight we offered is the economic class. For the economic class flight, you can carry hand luggages no more than 5 Kgs for free. The total of    free registered luggage is no more than 20 Kg. Excess luggage will charge yousome extra fees, be aware of that.</p>

        

        <p>
          <span class="tips_title">About Travel Insurance</span>
          1. The insurance provided by us is called Travel Agencies' Liability Insurance, which covers accidents occurring during the activities arranged by travel       agency. It does not cover mishaps or physical problems occuring outside the guided tour period or caused by clients themsevles, so we do suggest you       purchase personal insurance in your country.</p>


        <p>
           <span class="tips_title">About Tipping Guide</span>
          1. Four group of 1-4 passengers, recommend US$ 5 per tourist per day for guide, and US$ 2 per tourist per day for guide; For group of 5 and above, recommend     US$ 2 per tourist per day for guide, and US$1 per tourist per day for driver. Besides, we highly recommend you to tip every day to enourge better service     from them in the next coming days. However, if you have genuine reason not to tip, don't.</p>

        

        <p>
          <span class="tips_title">About Payment Guide</span>
          1. The deposit of tour package accounts for 30% of the total quotation, and the balance should be paid 20 days before your tour date. Payment methods we    accept include Bank Transfer and Paypal, Visa, and Money Bookers and so on. More details you can check the <a href="http://www.leadtochina.com/payment-guide/" target="_blank">Payment Guide</a> page. Moreover, Children have their own discounts, please contact with your trip advisor.</p>
        <?php endif;?>
    </div>
    <!--  tips end  -->
    
    
    <!--  price start  -->
    <div style="clear:both;"></div>
    <a name="price" id="price" style="margin-top:1px;">&nbsp;</a>
    <div style="clear:both;"></div>

     <?php if(empty($packageInfo->price)):?>

     <?php else:?>
    <div class="price" id="tab2">
        <!--  price-left start  -->
        <div class="price-left">
           <!--  price-title start  -->
           <iframe src="<?php echo Yii::app()->createUrl('toursPackage/price', array('id'=>$packageInfo->id));?>" width="582px" height="175px" scrolling="no" frameborder=0></iframe>
            
              <!--  price1 start  -->
              <div class="price1">
                  <?php
                    $include = strip_tags($packageInfo->price_include);
                    $include_arr = preg_split("/\d+\.*/",$include);

                    $exclude = strip_tags($packageInfo->price_exclude);
                    $exclude_arr = preg_split("/\d+\.*/",$exclude);                
                  ?>
                  <!--  inclusions start  -->
                  <div class="inclusions">
                     <h2><img src="/images/view/inclusions.png" /></h2>
                     <ul>
                       <?php if($category->title=='China Adopt Tour'):?>
                       <li> Entrance fees to all sites listed on the itinerary.</li>
                       <li> Hotels as specified in the itinerary.</li>
                       <li> In-country airfare and train fare.</li>
                       <li> Well-equipped commercial vehicle with excellent private guide and driver accompanied on your tour between airports, train stations, scenic spots and hotels.</li>
                       <li> Buffet breakfast, Chinese lunch or dinner as listed in the itinerary.</li>
                       <li> Scheduled sightseeing activities and shows.</li>
                       <li> The insurance is China Life Tourist Accident/Casualty Insurance.</li>
                       <li> Chinese government taxes and the city construction fees on your travel tour.</li>
                       <?php else:?>
                        <?php foreach($include_arr as $v):?>
                          <?php if($v):?>
                            <li><?php echo $v;?></li>
                          <?php endif;?>
                        <?php endforeach;?>
                       <?php endif;?>
                     </ul>
                  </div>
                  <!--  inclusions end  -->
                  
                  <!--  exclusion start  -->
                  <div class="exclusion">
                     <h2><img src="/images/view/exclusion.png" /></h2>
                     <ul>
                       <?php if($category->title=='China Adopt Tour'):?>
                        <li> International Airfare</li>
                        <li> Visa application fee</li>
                        <li> A few meals not explicitly listed in the final itinerary</li>
                        <li> Tipping of tour guides, drivers, hotel porters, and rickshaw drivers</li>
                        <li> The cost of holding the panda and taking a picture is additional to the entry fee </li>
                        <li> Personal gifts to the orphanage staff and officials</li>
                        <li> Single room supplement</li>
                        <li> Provincial Civil Affair Bureau orphanage visit filing fee</li>
                        <li> Excess Baggage Charges.</li>
                       <?php else:?>
                         <?php foreach($exclude_arr as $v):?>
                          <?php if($v):?>
                            <li><?php echo $v;?></li>
                          <?php endif;?>
                        <?php endforeach;?>
                       <?php endif;?>
                     </ul>
                  </div>
                  <!--  exclusion end  -->
              </div>
              <!--  price1 end  -->
              <div class="table-bottom" style="display:none;"><img src="/images/view/bg1.png" /></div>
        </div>
        <!--  price-left end  -->
        
        <!--  price-right start  -->
        <div class="price-right">
           <h2><img src="/images/view/notes.png" alt="" /></h2>
           <p>The guide prices shown are designed to offer you with a broad indication of how much to budget for your trip. If you are looking for a cheaper or higher budget than this, we may still be able to help you. Prices are generally for using economy flights based on two people sharing one standard room. There are many factors which will influence the price, please send enquiry and get exact quote from our trip consultants. </p>
           <div class="clear"></div>
           <div class="line"></div>
           <h2><img src="/images/view/value.png" alt="" /></h2>
           <p>We believe that value for money is important; we hope you will travel with LeadtoChina again. When comparing prices, ensure you are comparing like for like often there may be a cheaper option, but there may be hidden extras or the quality may not be as good. You can get honest price &amp; service here.</p>
        </div>
        <!--  price-right end  -->
    </div>
    <?php endif;?>
    <!--  price end  -->
    
</div>
<!--  index end  -->
<div class="clear"></div>
<a name="qa" id="qa">&nbsp;</a>
<!--  index1 start  -->
<div id="tab5">
    <div class="quest-title"><img src="/images/view/question.jpg" alt="" /></div>
    <!--  question start  -->
    <div class="question">
      <?php if($dataProvider->totalItemCount):?>
      <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_questionNew',
        'pager'=>array(
          'cssFile'=>False,
          'header'=>'',
        ),
        'template'=>"{items}\n{pager}",
      )); ?>
     <?php endif;?>
      
    
      <?php $this->renderPartial('/question/_formNew',array(
        'questionModel'=>$questionModel,
        'question_type' => 2,
      )); ?>  
    </div>
    <!--  question end  -->
</div>
<!--  index1 end  -->

<?php if($route_list):?>
<!--  may start  -->
<div class="may" id="similar_tour">
    <h2><img src="/images/view/may.png" /></h2>
    <?php foreach ($route_list as $k=>$v):?>
    <ul>
      <li class="pic">
        <a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$v['id'], 'title'=>SiteUtils::stringURLSafe($v['name'])));?>">
         <img class="lazy" style="width:213px;height:266px;" src="/images/grey.gif" data-original="/<?php echo $v['filedir'];?>/<?php  if($v['pic_big']) echo $v['pic_big']; else echo $dv['pic'];?>" />
        </a>
        <ol>
           <li><strong>DURATION:</strong> <?php echo $v['days'];?> Days</li>
           <li><strong>DESTINATION:</strong> <?php echo $v['route'];?></li>
           <li><strong>PRICE:</strong> From <b><?php echo SiteUtils::getCurrencyPrice($v['price']);?></b> p/p</li>
           <li><strong>PRICE INCLUDE:</strong> <?php echo $v['tour_intro'];?></li>
        </ol>
      </li>
      <li class="name"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$v['id'], 'title'=>SiteUtils::stringURLSafe($v['name'])));?>"><?php echo $v['name'];?></a></li>
     </ul>
    <?php endforeach;?>
</div>
<!--  may end  -->
<?php endif;?>

<?php if(strpos($packageInfo->theme, "11") !== false): //adoption theme category?>
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

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "Lk_RCPKljQUQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=Lk_RCPKljQUQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php elseif($category->title == "Yangtze Cruise Tour"):?>
  <!-- Google Code for yangtzecruise -->
  <!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1001932638;
    var google_conversion_label = "Fa-4COqxjgQQ3o7h3QM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
  <noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=Fa-4COqxjgQQ3o7h3QM&amp;guid=ON&amp;script=0"/>
  </div>
  </noscript>
<?php endif;?>
<script>
    $(function() {
        var elm = $('#tab-menu');
        var startPos = $(elm).offset().top;
        $.event.add(window, "scroll", function() {
            var p = $(window).scrollTop();
            $(elm).css('position',((p) > startPos) ? 'fixed' : 'static');
            $(elm).css('top',((p) > startPos) ? '0px' : '');
        });

        $("img.lazy").lazyload({
            threshold:30,
            effect : "fadeIn"
        })

         $('#testimonial a').lightBox();
    });

  _tab = {
    change:function(tabid, obj){
      if(tabid == 'tab1' || tabid == 'tab2'){
        $("#tab1,#tab2,#tab3,#tab4,#tab6,#similar_tour").hide();
        $("#tab1").show();
        $("#tab2").show();

      }else{
        $("#tab1,#tab2,#tab3,#tab4,#tab6,#similar_tour").hide();
        $("#"+tabid).show();
      }

      if(tabid == 'tab1'){
        //$("#tab5").show();
        $("#similar_tour").show();
      }


      
      $(obj).parents("ul").find("li").removeClass("dq");
      $(obj).addClass("dq");
    }
  }

    function openWindow(){
        window.open('<?php echo Yii::app()->createUrl("toursPackage/popOrder", array("id"=>$packageInfo->id));?>','newwindow','height=800,width=920,top=0,left=0,toolbar=no,menubar=no,scrollbars=yes,resizable=no,location=no,status=no')
    }
</script>

 <?php if($category->title == 'Beijing Tours'):?>
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
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=xYT9COLs_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php else:?>
  <!-- Google Code for HOME -->
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 1001932638;
  var google_conversion_label = "m02eCNre_AIQ3o7h3QM";
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
  <div style="display:inline;">
  <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=m02eCNre_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
  </div>
  </noscript>
<?php endif;?>
