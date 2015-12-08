<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/new.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/template.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/jquery.lightbox-0.5.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.zxxbox.3.0-min.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/myfocus-2.0.1.min.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/mf-pattern/mF_games_tb.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox-0.5.min.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/My97DatePicker/WdatePicker.js');?>

<style>
  #myFocus{ width:396px; height:204px;}
  #jv-breadcrumb-inner{ height:26px; overflow:hidden;}
  .tab_nav{
    bottom:0;
    top:0;
    position:fixed;
    z-index:3;
  }
  /*=========mF_games_tb========*/
  .mF_games_tb_wrap{width:400px; height:284px; float:left; border:1px solid #fcd6c4; padding:8px;}
  .mF_games_tb { width:418px;}
  .mF_games_tb .pic{position:absolute;top:0;left:0;}
  .mF_games_tb .pic li{position:absolute;width:100%;height:100%;overflow:hidden;display:none;}
  .mF_games_tb .pic li a img{ width:433px; height:227px;}
  .mF_games_tb .thumb{position:absolute;bottom:0;left:0;overflow:hidden;}
  .mF_games_tb .thumb ul{position:absolute;top:0;left:0;}
  .mF_games_tb .thumb ul li{position:relative;float:left;overflow:hidden;cursor:pointer;}
  .mF_games_tb .thumb ul li a{display:block; border:3px solid #bdb5b1; margin:10px 4px;}
  .mF_games_tb .thumb ul li img{position:relative; z-index:1;width:100%;height:100%;}
  .mF_games_tb .thumb ul li.current{background:url(/images/newhomepage/ar.gif) center 5px no-repeat;}
  .mF_games_tb .thumb ul li.current a{border-color:#FF8C00;}
  .mF_games_tb .txt li{position:absolute;z-index:2;width:100%;height:38px;line-height:38px;display:none;}
  .mF_games_tb .txt li a{display:block;position:relative;z-index:1;color:#fff;padding-left:16px;font-size:14px;font-weight:bold;text-decoration:none;}
  .mF_games_tb .txt li b{display:block;height:100%;width:100%;position:absolute;top:0;left:0;background:#000;filter:alpha(opacity=30);opacity:0.3;}
  .mF_games_tb .prev,.mF_games_tb .next{font:bold 28px/28px arial; width:11px; height:18px; overflow:hidden; position:absolute; z-index:4; left:0;bottom:30px; cursor:pointer;}
  .mF_games_tb .next{left:auto;right:0;}
  .mF_games_tb .prev a,.mF_games_tb .next a{display:block;color:#bbb;text-align:center;text-decoration:none;}
  .mF_games_tb .prev a:hover,.mF_games_tb .next a:hover{color:#f60;}

  <!--
  body{ background:url(<?php echo Yii::app()->request->baseUrl;?>/mainbj0.jpg) repeat;}
  li{ list-style:none;}
  .clear{ width:0px; height:0px; line-height:0px; font-size:0px; clear:both;}
  img{ border:none;}
  .box{ width:940px; margin:0 auto; padding:10px; background:#d6d6d6; font-size:13px;}
  .clear{ width:0px; height:0px; line-height:0px; font-size:0px; clear:both;}
  .contact{ width:961px; background:#eeeeee; margin:0 auto; padding-bottom:10px; padding-top:10px;}
  .note{ width:932px; margin:0 auto; background:#fff; border:1px #CCCCCC solid; padding:8px; margin-top:10px;}
  .note h2{ font-size:20px; color:#333333; margin:0px; margin-bottom:10px; padding:0px; padding-bottom:8px; border-bottom:1px #999999 dashed;}
  .note h2 b{ font-size:13px; font-family:Arial, Helvetica, sans-serif; font-weight:normal; color:#6b6b6b;}
  .note h2 b span{ color:#010101;}
  .note .left{ width:308px; float:left;}
  .note .left span{ display:block;  line-height:30px;}
  .note .left .bor{ border-bottom:1px #ccc solid;}
  .note .left .but{ margin-top:15px; margin-bottom:15px;}

  .note .right{ float:right; width:603px;}
  .note .right h3{ font-size:16px; color:#333333; padding:0px; padding-bottom:5px; margin:0px;}
  .note .right .Frame table{ border-collapse:collapse;}
  .note .right .Frame table td{ background:#e1e1e1; border:solid 1px #fff; padding:5px; color:#343434;}
  .note .right .Frame table td .tit{ background:#7f7f7f; color:#FFFFFF;}
  .note .right .hot{ color:#ff6900; margin-top:8px; margin-bottom:10px;}
  .note .right .hot span{ font-size:18px; color:#dd5f01; padding:0px; margin:0px; display:block; line-height:30px;}
  .black{ color:#000000; font-size:13px;}
  .STYLE1 {color: #333333}
  .STYLE2 {color: #FFFFFF}
  .tab{ margin-top:30px; margin-bottom:30px;}
  .tab01 a{ width:102px; height:35px; line-height:35px; font-size:14px; font-weight:bold; display:block; padding-left:6px;}
  .tab01 a:link{ color:#FFFFFF; background:url(/images/bestindex/tab01_31.jpg) no-repeat; text-decoration:none;}
  .tab01 a:visited{ color:#FFFFFF; background:url(/images/bestindex/tab01_31.jpg) no-repeat; text-decoration:none;}
  .tab01 a:hover{ color:#535353; background:url(/images/bestindex/tab02_31.jpg) no-repeat; text-decoration:none;}
  .tab01 a:active{ color:#535353; background:url(/images/bestindex/tab02_31.jpg) no-repeat; text-decoration:none;}

  .tab02 a{ width:152px; height:35px; line-height:35px; font-size:14px; font-weight:bold; display:block; padding-left:6px;}
  .tab02 a:link{ color:#FFFFFF; background:url(/images/bestindex/tab03_33.jpg) no-repeat; text-decoration:none;}
  .tab02 a:visited{ color:#FFFFFF; background:url(/images/bestindex/tab03_33.jpg) no-repeat; text-decoration:none;}
  .tab02 a:hover{ color:#535353; background:url(/images/bestindex/tab04_33.jpg) no-repeat; text-decoration:none;}
  .tab02 a:active{ color:#535353; background:url(/images/bestindex/tab04_33.jpg) no-repeat; text-decoration:none;}

  .tab03 a{ width:139px; height:35px; line-height:35px; font-size:14px; font-weight:bold; display:block; padding-left:6px;}
  .tab03 a:link{ color:#FFFFFF; background:url(/images/bestindex/tab05_35.jpg) no-repeat; text-decoration:none;}
  .tab03 a:visited{ color:#FFFFFF; background:url(/images/bestindex/tab05_35.jpg) no-repeat; text-decoration:none;}
  .tab03 a:hover{ color:#535353; background:url(/images/bestindex/tab06_35.jpg) no-repeat; text-decoration:none;}
  .tab03 a:active{ color:#535353; background:url(/images/bestindex/tab06_35.jpg) no-repeat; text-decoration:none;}

  .tab04 a{ width:158px; height:35px; line-height:35px; font-size:14px; font-weight:bold; display:block; padding-left:6px;}
  .tab04 a:link{ color:#FFFFFF; background:url(/images/bestindex/tab07_37.jpg) no-repeat; text-decoration:none;}
  .tab04 a:visited{ color:#FFFFFF; background:url(/images/bestindex/tab07_37.jpg) no-repeat; text-decoration:none;}
  .tab04 a:hover{ color:#535353; background:url(/images/bestindex/tab08_37.jpg) no-repeat; text-decoration:none;}
  .tab04 a:active{ color:#535353; background:url(/images/bestindex/tab08_37.jpg) no-repeat; text-decoration:none;}

  .tabnote{ margin-bottom:40px;}
  .tabnote .title{ color:#707070; border-bottom:1px #beddef solid; font-size:14px; margin-bottom:10px; padding:0px; line-height:30px;}
  .tabnote .title strong{ font-size:18px; color:#0c6cb9; padding-right:8px;}
  .tabnote .title .col{ color:#a46400;}
  .tabnote .nott img{ padding-right:10px;}

  .tabnote1{ margin-bottom:20px;}
  .tabnote1 .title1{ color:#707070; border-bottom:1px #beddef solid; font-size:16px; font-weight:bold; margin-bottom:10px; padding:0px; line-height:30px;}
  .tabnote2{ margin-bottom:20px; border-bottom:1px #999999 dashed; padding-bottom:20px;}
  .tabnote2 strong{ color:#1181c7;}
  .tabnote2 .title2{ font-style:italic;}
  .tabnote2 .ask{ background:#e4e4e4; border:1px #dbdada solid; margin-top:15px;}
  .tabnote3{ margin-bottom:30px; margin-top:40px;}
  .tabnote3 .title3{ font-size:20px; color:#545454;}

  .tabnote4{}
  .tabnote4 span{ display:block;text-align:center; width:20px; height:20px; margin-right:10px; float:left;}
  .tabnote4 span a{ color:#FFFFFF; text-align:center; display:block;}
  .tabnote4 span a:link{ color:#FFFFFF; background:#50b3f6; border:1px #bdbdbd solid; text-decoration:none;}
  .tabnote4 span a:visited{ color:#FFFFFF; background:#50b3f6; border:1px #bdbdbd solid; text-decoration:none;}
  .tabnote4 span a:hover{ color:#fff; background:#636363; border:1px #bdbdbd solid; text-decoration:none;}
  .tabnote4 span a:active{ color:#fff;  background:#636363; border:1px #bdbdbd solid; text-decoration:none;}
  .solidbox { width:937px; margin-top:30px;}
  .STYLE3 {color: #ff9c00}
  .STYLE4 {
    color: #a46400;
    font-weight: bold;
  }
  .STYLE5 {font-weight: bold}
  #focus_m{position:relative;width:420px;height:300px; overflow:hidden; border:3px #CCCCCC solid; background:#ccc;margin-left:100px}.f_img_roll{width:350px;height:300px;position:relative;}.f_img_roll img{position:absolute;left:0;top:0;width:350px;height:300px;}.f_img_tree{position:absolute;width:75px;height:300px;right:3px;top:0;}.f_img_tree div{position:absolute;z-index:201;top:3px;right:0;width:75px;height:47px;}
  .f_img_tree ul{margin:0;padding:0;list-style:none;position:absolute;right:0;}.f_img_tree li{width:60px;height:45px;margin-top:4px;margin-bottom:4px;}.f_img_tree img{width:54px;height:39px;border:3px solid #999;vertical-align:top;}.f_con{color:#fff;height:70px;}.f_con .f_title{font-size:14px;height:30px;line-height:30px;margin-top:5px;font-weight:bold;text-align:center;}.f_con .f_title a:link,.f_con .f_title a:visited{color:#fff;text-decoration:none}.f_con .f_title a:hover{text-decoration:underline}.f_con .f_con{font-size:12px;padding:0 10px;height:40px;line-height:150%;}

  .answerbox{ width:594px; border:3px #b2b2b2 solid; padding:1px; float:left; margin-top:15px; display:block;}
  .answerbox .box_title{ background:url(/images/box/box1_03.jpg) repeat-x; height:47px; font-size:18px; color:#2c2c2c;}
  .answerbox .box_tab{ margin-top:10px; margin-bottom:20px;}
  .answerbox input{ border:1px #999999 solid;}
  .answerbox textarea{ border:1px #999999 solid;}
  .counter{display:none;}
  .answerbox{margin:0px !important;}
  -->
</style>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a>
<?php if($category->section == 'com_ctours'):?>
<a href="/citytour<?php //echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a>
<?php elseif($category->section == 'com_cntours'):?>
<a href="/chinatour<?php //echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a>
<?php endif;?>
<?php echo $category->title;?>
</div>

<div id="main">
<div class="content-one">
  <h2><?php echo $packageInfo->name;?><span> (Destination: <?php echo $packageInfo->route;?>)</span></h2>
  <div class="clear"></div>
  <div id="myFocus">
    <div class="loading"><img src="/images/about/loading.gif" alt="Please wait ..." /></div>
    <div class="pic">
      <ul>
        <?php foreach($packagePic as $v):?>
        <li>
          <a href="#">
          <img src="/<?php echo $v->pic_dir.$v->pic_path;?>" thumb="" alt="<?php echo $v->pic_alt;?>" text="<?php echo $v->pic_alt;?>" />
          </a>
        </li>
        <?php endforeach;?>
      </ul>
    </div>
  </div>
  <div class="photo-right">
    <div class="itinerary">
      <ul>
        <li>
          <div class="addthis_toolbox addthis_default_style" style="height:16px; overflow:hidden; margin-top:10px;"> 
            <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d3cdb303668116a" class="addthis_button_compact">Share&nbsp;|</a> 
            <a class="addthis_button_preferred_1"></a> 
            <a class="addthis_button_preferred_2"></a> 
            <a class="addthis_button_preferred_3"></a> 
            <a class="addthis_button_preferred_4"></a>
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d3cdb303668116a"></script></li>
        <li>Tour Code : <span><?php echo $packageInfo->package_code;?></span></li>
        <li>Tour Type : <span><?php echo $packageInfo->package_tour_type;?></span></li>
        <li>Duration : <span><?php if($packageInfo->days==0){echo "Half Day";}elseif($packageInfo->days==1){echo "1 Day";}else{echo $packageInfo->days." Days";}?></span></li>
        <li>Departure Date : <span>Daily</span></li>
      </ul>
    </div>
    <div class="itinerary-img"><img src="<?php echo '/'.$packageInfo->filedir.$packageInfo->ufile;?>"></div>
    <div class="clear"></div>
    <div class="quote">
      <ul>
        <li>From:<span><?php echo SiteUtils::getCurrencyPrice($packageInfo->price);?></span> p/p</li>
        <li>
          <form id="orderForm" method="post" action="/index.php?option=com_order">
            <input type="hidden" name="pcid" value="<?php echo $packageInfo->id;?>" />
            <input type="hidden" name="unit_price" value="<?php echo $packageInfo->price;?>" />
            <input type="hidden" name="pagetitle1" value="<?php echo $packageInfo->name;?>"/>
            <input type="image" src="/images/newhomepage/quote1.jpg" />
          </form>
        </li>
        <li><a href="#price-tit" style="margin-right:10px;">Price detail</a><a href="/payment-guide/" target="_blank">Payment Guide</a></li>
      </ul>
    </div>
    <div class="promotion">
      <?php
      $default_content = "Book from Facebook Save $10;Repeat Customers,Save 13%;Get Souvenirs Made by Full-view";
      $promotions = $packageInfo->promotion ? $packageInfo->promotion : $default_content;
      $promotions_arr = explode(';', $promotions);
      ?>
      <ul>
        <li class="tit">Promotion</li>
        <?php foreach($promotions_arr as $v):?>
        <li><?php echo $v;?></li>
        <?php endforeach;?>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php if($packageInfo->recommand_reason && $packageInfo->attractions):?>
<div class="content-two">
  <div class="recommended">
    <div class="rtitle">Recommended Reason:</div>
    <div class="clear"></div>
    <?php
    $recommand_reason=explode(',', $packageInfo->recommand_reason);
    ?>
    <ul>
      <li><span><?php echo $recommand_reason[0];?></span></li>
      <li class="rtwo"><span><?php echo $recommand_reason[1];?></span></li>
      <li class="rthree"><span><?php echo $recommand_reason[2];?></span></li>
      <li class="rfour"><span><?php echo $recommand_reason[3];?></span></li>
    </ul>
  </div>
  <div class="visitnew">
    <div class="rtitle">Highlight:</div>
    <div class="clear"></div>
    <?php
    $attractions=explode(',', $packageInfo->attractions);
    ?>
    <ul>
      <?php foreach ($attractions as $k=>$v): if($k>7) break;?>
      <li><span><?php echo $v;?></span></li>
      <?php endforeach;?>
    </ul>
  </div>
</div>
  <?php endif;?>

<div id="tab_nav" style="clear:both"></div>
<div class="content-three">
<div style="height:35px">
  <div class="tab-menu" id="tab-menu">
    <ul>
      <li class="tab1hover" id="tab1" onclick="change_tab_style(this);"><a href="#tab_nav">Itinerary</a></li>
      <li class="tab2" id="tab2" onclick="change_tab_style(this);"><a href="#pricenew">Prices</a></li>
      <li class="tab3" id="tab3" onclick="change_tab_style(this);"><a href="#tips_nav">Tips</a></li>
      <li class="tab5" id="tab5" onclick="change_tab_style(this);"><a href="#question_nav">Questions(<?php echo $dataProvider->totalItemCount;?>)</a></li>
      <li class="tab4" id="tab4"><a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html" target="_blank">Reviews on Trip Advisor</a></li>

    </ul>
    <div class="live-now">
      <a href="javascript:;" onclick="$('#orderForm').submit();" style="margin-left:8px;">
      <img src="/images/newhomepage/tabinquiry.jpg" alt="" /></a>

      <a href="http://messenger.providesupport.com/messenger/travelthing.html"><img src="/images/newhomepage/tablive.jpg" alt="" /></a>
    </div>
  </div>
</div>
<div id="itinerary">
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
  <div class="days">
      <h2>Day<?php echo $k+1;?> <span><?php echo $v->today_route;?></span></h2>
      <ul>
        <li class="days-pic">
          <?php if($v->ufile):?>
          <?php $package_des_img='/'.$v->filedir."thumb"."/"."thumb_".$v->ufile;?>
          <img src="<?php echo $package_des_img;?>" width="196" height="151" alt="" />
          <?php else:?>
          <img src="/images/noimg.jpg" />
          <?php endif;?>
        </li>
        <li class="days-desc"><?php echo $v->activities;?><br />
          <?php if($v->hotel_grade_str):?>
            Accommodation: <span><?php echo $hotel_html;?><strong><?php echo $hotel_symbol;?></strong>(<?php echo str_replace("Start","Star",$v->hotel_grade_str)
            ;?>)</span>
          <?php endif;?>
        </li>
        <li class="days-meal"><?php echo $v->eat_standard;?></li>
      </ul>
    </div>
 <?php endforeach;?>
</div>

<div class="clear"></div>
<h2 id="pricenew">&nbsp;</h2>
<div class="clear"></div>
<?php
$price_array=unserialize($packageInfo->price_serialize);
$price_array_2013=unserialize($packageInfo->price_serialize_1);
?>
<div id="price">
  <div id="price-left">
    <div id="price-tit">
      <ul>
        <li id="change_sd13" class="sd13">2013 Price</li>
      </ul>
    </div>
    <div id="c13">
      <div class="price-cont">
        <h2 class="bird"><span>Save</span> 5% , Book 3 months<span> before departure</span></h2>
        <div class="clear"></div>
        <div class="date-price">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
            <tr class="top-price">
              <td style="color:#272727; font-size:14px; background:#f0d7bf;">Date &amp; Price</td>
              <td style="background:#f0d7bf;">2-5People</td>
              <td style="background:#f0d7bf;">6-9People</td>
              <td style="background:#f0d7bf;">&ge;10People</td>
              <td style="background:#f0d7bf;">Solo Occupancy</td>

            </tr>
            <tr>
              <td>Nov.1 - Mar. 31</td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[1]).".00";?></span></td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[2]).".00";?></span></td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[3]).".00";?></span></td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[4]).".00";?></span></td>
            </tr>
            <tr>
              <td >Apr.1 - Oct.31</td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[6]).".00";?></span></td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[7]).".00";?></span></td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[8]).".00";?></span></td>
              <td><span><?php echo SiteUtils::getCurrencyPrice($price_array_2013[9]).".00";?></span></td>
            </tr>
            </tbody>
          </table>
          <div class="clear"></div>
          <ul>
            <li>Price  based in US dollar</li>
            <li style="text-align:right;"><a href="http://www.xe.com" target="_blank"><img src="/images/newhomepage/money.jpg" alt="" /></a></li>
          </ul>
        </div>
        <div class="reservation">
          <h2 style=" background:#f0d7bf;">Reservation Procedures</h2>
          <div class="clear"></div>
          <div class="step"><img src="/images/newhomepage/step.jpg" alt="" /></div>
        </div>

      </div>
    </div>
  </div>
  <div id="price-right">
    <div id="a01-new">
      <span id="c01" class="sd01">Price Inclusion</span>
      <span id="c02" class="sd02">Price Exclusion</span>
    </div>
    <div id="c01-new">
      <ul>
        <?php echo $packageInfo->price_include;?>
      </ul>
    </div>
    <div id="c02-new" style="display:none">
      <ul>
        <?php echo $packageInfo->price_exclude;?>
      </ul>
    </div>
  </div>
</div>

<div id="quick-book">
<div id="a3">
  <ul>
    <li id="change_sd06" class="sd06">Quick Book Or Inquiry</li>
    <li id="change_sd07" class="sd07">Customize This Trip</li>
    <li style=" color:#ba5e31; width:auto; font-size:12px; float:right; background:url(/images/deng_03.png) no-repeat left center; padding-left:20px; cursor:auto;">The Quotation without Hotel please contact with HFV Trip Advisor. </li>
  </ul>
</div>
<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'tours-package-form',
  'enableClientValidation'=>true,
)); ?>
<div id="c06">
  <div id="thoughts">
    
      <div class="thought-left">
        <div class="personalInfo">
          <label> Full Name: <b style="color:#c67141;">*</b></label>
          <input type="hidden" name="Order[ordertype]" value="19"/>
          <select name="Order[gender]" id="Gender_1" style="width:70px;">
            <option value="Mr."> Mr.</option>
            <option value="Ms."> Ms.</option>
          </select>
          <?php echo $form->textField($model,'full_name',array('style'=>"width:197px;")); ?>
          <?php echo $form->error($model,'full_name'); ?>
        </div>
        <div class="personalInfo">
          <label> Email Address: <b style="color:#c67141;">*</b></label>
          <?php echo $form->textField($model,'email', array('class'=>'email')); ?>
          <?php echo $form->error($model,'email'); ?>
        </div>
        <div class="personalInfo">
          <label> Telephone:</label>
          <?php echo $form->textField($model,'phone', array('class'=>'telephone')); ?>
          <?php echo $form->error($model,'telephone');?>
        </div>
        <div class="personalInfo">
          <label>Tour Starting Date:</label>
          <?php echo $form->textField($model,'entry_date',array('onclick'=>"WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'})",'class'=>'
Wdate'));?>
          <?php echo $form->error($model,'entry_date');?>
        </div>
        <div class="personalInfo" style="display:none">
          <label>Verify Code:</label>
          <input id="validity_02" type="text" name="validity" style="width:78px; float:left; margin-right:5px;"> 

        </div>
      </div>
      <div class="thought-right">
        <div class="bookingDetail">
          <table width="50%" cellspacing="0" cellpadding="0" border="0" style=" float:left;">
            <tbody>
            <tr>
              <td>Adults(&gt;12)<br>
                <?php
                for($i=1;$i<31;$i++) $arr[$i]=$i;
                echo $form->dropDownList($model,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                ?>
              </td>
              <td>Children(2-12)<br>
                <?php
                unset($arr);
                for($i=0;$i<31;$i++) $arr[$i]=$i;
                echo $form->dropDownList($model,'children', $arr);
                ?>
              </td>
              <td>Babies(0-2)<br>
                <?php
                unset($arr);
                for($i=0;$i<12;$i++) $arr[$i]=$i;
                echo $form->dropDownList($model,'infant', $arr);
                ?>
              </td>
            </tr>
            <tr>
              <td colspan="3">Additional Requirements:(Optional)</td>
            </tr>
            <tr>
              <td colspan="3">
                <?php echo $form->textArea($model,'other_message', array('class'=>'simpleinfoBox'));?>
                <div style="color:#666">Note:If you have our Promotion Code, please submit it in the Addtional Requirements to get further discount, thanks.</div>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class="otherRequest01" style="margin:0px 0px 10px;">
          <div class="submitButton">
            <input type="hidden" name="ajax" value="1" />
            <?php echo CHtml::ajaxSubmitButton('',CHtml::normalizeUrl(array('','render'=>true)),
            array(
              'dataType'=>'json',
              'type'=>'post',
              'success'=>'function(data) {
                                       $("#AjaxLoader").hide();
                                      if(data.status=="success"){
                                       location.href="/succeed.html";
                                      }else{
                                        $.each(data, function(key, val) {
                                          $("#"+key+"_em_").text(val);
                                          $("#"+key+"_em_").show();
                                        });
                                      }
                                  }',
                                  'beforeSend'=>'function(){
                                    $("#AjaxLoader").show();
                                  }'
            ),array('id'=>'submit_button_2','class'=>'form_button','style'=>'background:url(/images/newhomepage/confirm-submit-button.jpg) left center no-repeat; width:189px; height:37px; border:none;')); ?>
            <div id="AjaxLoader" style="display:none">submiting...</div>
            <span>Reply within 12  Hours</span>
          </div>
        </div>
      </div>
  </div>
</div>
 <?php $this->endWidget(); ?>

<div id="c07" style="display:none;">
  <div id="custom-city">
    
    <?php echo CHtml::beginForm();?>
      <h2><b>Hotel Choice</b></h2>
      <ul>
        <li><input name="hotel" type="radio" value="Luxury" />Luxury</li>
        <li><input name="hotel" type="radio" value="Standard" />Standard</li>
        <li><input name="hotel" type="radio" value="Super Deluxe" />Super Deluxe</li>
        <li><input name="hotel" type="radio" value="Budget" />Budget</li>
        <li><input name="hotel" type="radio" value="No Need" />No Need</li>
      </ul>
      <h2>Dietetic Requirement</h2>
      <ul>
        <li><input name="dietetic" type="radio" value="General" />General</li>
        <li><input name="dietetic" type="radio" value="Vegetarian Meals" />Vegetarian Meals</li>
      </ul>
      <h2>Guide Language</h2>
      <ul>
        <li><input name="language" type="radio" value="English" />English</li>
        <li><input name="language" type="radio" value="French" />French</li>
        <li><input name="language" type="radio" value="Chinese" />Chinese</li>
        <li><input name="language" type="radio" value="Italian" />Italian</li>
        <li><input name="language" type="radio" value="Korean" />Korean</li>
        <li><input name="language" type="radio" value="German" />German</li>
        <li><input name="language" type="radio" value="Spanish" />Spanish</li>
        <li class="last">Other<input style="width:80px;background-color: #FFFFFF; border-color: #5E5E5E #B7B7B7 #B7B7B7 #5E5E5E; border-style: solid; border-width: 1px; line-height: 1.2; padding: 3px;" name="language_other" type="text" /></li>
      </ul>
      <h2>Other Requests</h2>
      <div>
        <?php echo $form->textArea($model,'other_message', array('style'=>'width:99%; height:60px; color:#8b8a8a; padding:4px 3px; border:1px solid #dfdfdf; background:#fcfcfc; font-size:13px; margin-top:10px;'));?>
      </div>
      <div class="again">
        <div class="thought-left">
          <div class="personalInfo">
            <label> Full Name: <b style="color:#c67141;">*</b></label>
            <select name="Order[gender]" id="gender_cus" style="width:70px;">
              <option value="Mr."> Mr.</option>
              <option value="Ms."> Ms.</option>
            </select>
            <input type="hidden" name="Order[ordertype]" value="19"/>
            <input type="text" name="Order[full_name]" id="full_name_cus" style="width:197px;">
            <div id="full_name_err" class="errorMessage" style="display:none">Please input your full name!</div>
          </div>
          <div class="personalInfo">
            <label> Email Address: <b style="color:#c67141;">*</b></label>
            <input id="email_cus" class="email" type="text" maxlength="150" name="Order[email]">
            <div id="email_err" class="errorMessage" style="display:none">Please input your email correctly!</div>
          </div>
        </div>

        <div class="thought-right">
          <div class="bookingDetail">
            <table width="50%" cellspacing="0" cellpadding="0" border="0" style=" float:left;">
              <tbody>
              <tr>
                <td>Adults(&gt;12)<br>
                  <?php
                  unset($arr);
                  for($i=1;$i<31;$i++) $arr[$i]=$i;
                  echo $form->dropDownList($model,'adults', $arr, array('options'=>array('2'=>array('selected'=>true))));
                  ?>
                </td>
                <td>Children(2-12)<br>
                  <?php
                  unset($arr);
                  for($i=0;$i<31;$i++) $arr[$i]=$i;
                  echo $form->dropDownList($model,'children', $arr);
                  ?>
                </td>
                <td>Babies(0-2)<br>
                  <?php
                  unset($arr);
                  for($i=0;$i<12;$i++) $arr[$i]=$i;
                  echo $form->dropDownList($model,'infant', $arr);
                  ?>
                </td>
              </tr>
              <tr>
                <td colspan="3"><div class="personalInfo">
                <label>Tour Starting Date:<b style="color:#c67141;">*</b></label>
                <input type="text" name="entry_date" onclick="WdatePicker({dateFmt:'MM/dd/yyyy',minDate:'%y-%M-%d',lang:'en'});" class="Wdate" id="entry_date_cus">
                </td>
                </td>
              </tr>
              </tbody>
            </table>
          </div>

        </div>
        <div class="clear"></div>
        <div class="submitButton">
          <?php echo CHtml::imageButton("/images/newhomepage/confirm-submit-button.jpg",array('id'=>'submit-pop-order', 'style'=>"border:none; float:left; width:187px; height:37px;cursor:pointer;")); ?> <span>Reply within 12  Hours</span>
        </div>
      </div>

    <?php echo CHtml::endForm();?>
  </div>
</div>
</div>
<div style="clear:both"></div>
<h2 id="tips_nav">&nbsp;&nbsp;</h2>
<div style="clear:both"></div>

<div id="tips">
  <div id="a04">
    <span id="m08" class="sd08"><a style="cursor:pointer;">Tips</a></span>
    <span id="m09" class="sd09"><a style="cursor:pointer;">Warm Note</a></span>
  </div>
  <div id="c08">
    <?php if(0)://if($packageInfo->tips):?>
      <?php echo $packageInfo->tips;?>
    <?php else:?>
    <p>1. It is flexible to change the itinerary in Days, Attractions, and Starting & Ending Cities etc. <br />
      2. All the hotels can be replaced by your favorite ones. Besides, the hotels are quoted on two persons sharing one room. The room supplement must be paid if you want to have a single room.<br />
      3. All of the tour packages exclude the international airfares. Tell us if you need them.<br />
      4. We offer 50RMB per person for a standard Chinese meal in a nice restaurant during the trip;
      You have to pay for the extra cost if you want to take Western buffet or better meals. The meals on Yangtze River Cruise are fixed Chinese and Western Buffet. <br />
      5. Cancellation received up to 15 days before departure and no incurred fees generated, 100% refund of all monies paid.<br />
      6. Children have their own discounts, please contact with your trip advisor.<br />
      7.We can sent the invitation letter with our official seal to you after you booked the tour from us, which could help you get the China Visa easily.<br />
      8. Most department stores, supermarkets and boutiques in China accept the credit card with the sign of MasterCard, VISA and JCB. But it does generate commission charge. Please check the regulations with your bank. </p>
    <?php endif;?>
  </div>
  <div id="c09" style="display:none;">
    <p><strong>Tipping Guide</strong><br />
      If you stay a couple of days in the same hotel it's not such a bad idea to tip the staff who clean your room - US$ 2 should be enough.<br />
      If you take a day tour with a group - the guides and drivers are paid next to nothing. Typically, travelers on minibus tours will pool together to collect a communal tip separately for guide and driver.</p>
    <p><b>1. For group of 1-4 passengers, recommend tipping policy is:</b><br />
      About US$ 5 per day (per tourist) for guide, US$ 2 per day (per tourist) for driver is standard. Of course, give more if you're feeling generous, but if you find a genuine reason not to tip, don't.</p>
    <p><b>2. For group of 5 passengers and above, recommend tipping policy is:</b><br />
      About US$ 2 per day (per tourist) for guide, US$ 1 per day (per tourist) for driver is standard. Of course, give more if you're feeling generous, but if you find a genuine reason not to tip, don't.</p>
    <p><b>3. Tip everyday, or tip at the end of the trip?</b><br />
      We highly recommend you to tip every day, when you go back to the hotel and say bye-bye to your tour guide and driver. It is a good chance to encourge better service in the next coming days. </p>
    <p>
      <strong>Payment Guide</strong><br />
      Generally the deposit of your package accounts for 30% of the total quotation. Take your tour package and group size into consideration, your travel consultant can adjust it accordingly. The balance needs to be paid 20 days before your tour date. In addition, different payment methods demand different transfer fees.<br />
      Payment methods include Bank Transfer and Paypal, Visa, and Money Bookers. Details please see the <a href="/payment-guide/" target="_blank">Payment Guide Terms and Conditons</a>
    </p>
  </div>
</div>

<div class="clear"></div>
<h2 id="question_nav">&nbsp;&nbsp;</h2>
<div class="clear"></div>

</div>

<div id="question">
  <div id="a05">
    <ul>
      <li id="m10" class="sd10"><a style="cursor:pointer;">Questions</a></li>
      <li id="m11" class="sd11"><a style="cursor:pointer;">Reviews</a></li>
    </ul>
  </div>
  <div id="c10">
    <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_question',
    'pager'=>array(
      'cssFile'=>False,
      'header'=>'',
    ),
    'template'=>"{items}\n{pager}",
  )); ?>
    <div class="tabnote3">
      <?php $this->renderPartial('/question/_form',array(
      'questionModel'=>$questionModel,
      'question_type' => 2,
    )); ?>

  </div>
  </div>

  <div id="c11" style=" display:none;">
    <?php if($testimonial):?>
    <div id="reviews">
      <div id="gallery">
        <ul>
          <?php foreach ((array)$testimonial as $k=>$v):?>
          <?php if($k==0):?>
            <li class="pic-client">
              <a href="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]" title="<?php echo $v['title'];?>"><img src="/uploads/testimonisal/thumb/thumb_<?php echo $v['pic_name'];?>" /><span class="virtual" style="float:left;">Virtual Gallery</span></a>
              </li>
            <?php endif;?>
          <?php if($k>0):?>
            <li><a href="/uploads/testimonisal/<?php echo $v['pic_name'];?>" rel="lightbox[suzhou]" title="<?php echo $v['title'];?>"></a></li>
            <?php endif;?>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
    <?php else:?>
    <div id="reviews">
      <div class="tit-top">Our Clients Say</div>
      <div class="clear"></div>
      <div class="no-reviews"><img src="/images/newhomepage/no-reviews.jpg" alt="" /></div>
    </div>
    <?php endif;?>

    <span style="float:right; height:178px; text-align:right; padding-right:15px; width:200px;">
              <a href="<?php echo Yii::app()->createUrl('reviews/share', array('tour_id'=>$packageInfo->id));?>"><img style="width:163px; height:178px; border:none; padding:0px; margin:0px; float:right;" src="/images/reviews/reviews.jpg" alt="" /></a></span>
  </div>
</div>
<?php $i=1; if($route_list):?>
<div id="related">
  <div class="relate-title"><span>You May Also Like</span></div>
  <div class="clear"></div>
  <ul>
    <?php foreach ($route_list as $k=>$v):?>
      <li>
        <a style="white-space:nowrap;" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$v['id'], 'title'=>SiteUtils::stringURLSafe($v['name'])));?>" title="<?php echo $route_tours;?>"><?php echo $v['name'];?>
        <b>(Destination: <?php echo $v['route'];?>)</b></a> <span>From <strong>
        <?php echo SiteUtils::getCurrencyPrice($v['price']);?></strong> / p.p</span>
      </li>
    <?php $i++; endforeach;?>
  </ul>
</div>
  <?php endif;?>
</div>

<div class="answerbox" id="pop_reply" style="display:none;">
  <div class="box_title">
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="47" align="left">Your answer to <span id="to_reply_name"></span></td>
        <td align="right"><img src="images/box/box2_06.jpg" onclick="closewin()" /></td>
      </tr>
    </table>
  </div>
  <div class="box_tab">
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="57%" height="35">You can post as a member (<a style="color:#C56D3F; text-decoration:underline; font-weight:bold;" href="#">Login</a> first) or a guest! <span style="color:#FF0000">*</span>Name:</td>
        <td width="43%"><label>
          <input name="reply_username" type="text" id="reply_username" size="24" />
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <textarea name="reply_content" id="reply_content" cols="" rows="5" style="width:575px;"></textarea>
        </label></td>
      </tr>
      <tr>
        <td height="30" colspan="2">No more than 2,000 characters, please.</td>
      </tr>
      <tr>
        <td colspan="2"><label>
          <input type="hidden" name="reply_postid" id="reply_postid" value="" />
          <input type="button" onclick="replay_message()" name="button5" id="button5" value=""
                 style="background:url(images/box/box3_11.jpg) no-repeat; width:53px; height:22px; border:0px;" />
        </label></td>
      </tr>
    </table>
  </div>
</div>

</div>


<!--
<div id="breadcrumb_currency" style="display:none;">
  <div style="position:relative;">
    <div id="dollar" class="currency">
      <span><img src="/images/country/US.jpg" alt="" /><b>USD-United States Dollar</b></span>
      <ul style="display:none;">
        <li val="1"><img src="/images/country/US.jpg" alt="" /><b>USD-United States Dollar</b></li>
        <li val="2"><img src="/images/country/china.jpg" alt="" /><b>CNY - Chinese Yuan</b></li>
        <li val="3"><img src="/images/country/Eur.jpg" alt="" /><b>EUR - Euro</b></li>
        <li val="4"><img src="/images/country/Japan.jpg" alt="" /><b>JPY-Japanese Yen</b></li>
        <li val="5"><img src="/images/country/India.jpg" alt="" /><b>INR-Indian Rupee</b></li>
        <li val="6"><img src="/images/country/Russia.jpg" alt="" /><b>SUR-Russian Ruble</b></li>
        <li val="8"><img src="/images/country/Britain.jpg" alt="" /><b>GBP-Pound Sterling</b></li>
        <li val="9"><img src="/images/country/Canada.jpg" alt="" /><b>CAD-Canadian Dollar</b></li>
        <li val="10"><img src="/images/country/Australia.jpg" alt="" /><b>AUD-Australian Dollar</b></li>
      </ul>
    </div>
  </div>
</div>  -->
</div>
<script type="text/javascript">
myFocus.set({
  id:'myFocus',
  pattern:'mF_games_tb'
});
(function($){
  $('#gallery a').lightBox();

  $('#a01-new span').click(function(){
    $('#c01-new').hide();
    $('#c02-new').hide();
    var display_id = '#'+this.id+'-new';
    $(display_id).show();
  })

  $("#change_sd06").click(function(){
    $("#change_sd06").removeClass("sd06hover");
    $("#change_sd06").addClass("sd06");
    $("#change_sd07").removeClass("sd07hover");
    $("#c06").show();
    $("#c07").hide();
  });

  $("#change_sd07").click(function(){
    $("#change_sd06").addClass("sd06hover");
    $("#change_sd07").addClass("sd07hover");
    $("#c06").hide();
    $("#c07").show();
  });

  $("#m08").click(function(){
    $("#m08").removeClass("sd08hover");
    $("#m08").addClass("sd08");
    $("#m09").removeClass("sd09hover");
    $("#c08").show();
    $("#c09").hide();
  });

  $("#m09").click(function(){
    $("#m08").addClass("sd08hover");
    $("#m09").addClass("sd09hover");
    $("#c08").hide();
    $("#c09").show();
  });

  $("#m10,#tab5").click(function(){
    $("#m10").removeClass("sd10hover");
    $("#m10").addClass("sd10");
    $("#m11").removeClass("sd11hover");
    $("#c10").show();
    $("#c11").hide();
  });

  $("#m11,#tab4").click(function(){
    $("#m10").addClass("sd10hover");
    $("#m11").addClass("sd11hover");
    $("#c10").hide();
    $("#c11").show();
  });

  $("#c01").click(function(){
    $("#c01").removeClass("sd02");
    $("#c01").addClass("sd01");
    $("#c02").removeClass("sd01");
    $("#c02").addClass("sd02");
  });
  $("#c02").click(function(){
    $("#c01").removeClass("sd01");
    $("#c01").addClass("sd02");
    $("#c02").addClass("sd01");
  });

  $("#custon-new").click(function(){
    $("#custom-tour").show();
  })
  $("#close_new").click(function(){
    $("#custom-tour").hide();
  })

  $("#submit-pop-order").click(function(){
    if($("input[name='hotel']:checked").length == 0){
      alert('Please choose hotel choice');
      return false;
    }
    if($("#full_name_cus").val() == ''){
      alert('Please enter your full name.');
      $("#full_name_cus").focus();
      return false;
    }
    var email = $("#email_cus").val();
    var reg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
    if(!reg.test(email)){
      alert('Please input your correct email.');
      $("#email_cus").focus();
      return false;
    }
  
    if($("#entry_date_cus").val()==""){
      alert('Please input tour starting date.');
      $("#entry_date_cus").focus();
      return false;
    }
    document.forms["adminForm"].submit();
  })


  
  var itinerary_top = $("#tab_nav").offset().top - 204;
  var price_top = $("#pricenew").offset().top - 280;
  var tips_top = $("#tips_nav").offset().top - 280;
  var question_top = $("#question_nav").offset().top - 280;
 

  $(window).scroll(function(){
    var top = 0;
    top = $(window).scrollTop();
    if(top >= itinerary_top){
      $("#tab-menu").addClass("tab_nav");
    }else{
      $("#tab-menu").removeClass("tab_nav");
    }
    if(top >= question_top) {
      removeTabHover();
      $("#tab5").attr("class","tab5hover");
    }else if(top >= tips_top){
      removeTabHover();
      $("#tab3").attr("class","tab3hover");
    }else if(top >= price_top){
      removeTabHover();
      $("#tab2").attr("class","tab2hover");
    }else if(top >= itinerary_top){
      removeTabHover();
      $("#tab1").attr("class","tab1hover");
    }

  })

  function removeTabHover(){
    $.each([1,2,3,4,5], function(i,val){
      $("#tab"+val).attr("class","tab"+val);
    });
    $("#tab1").attr("class","tab1");
  }

  // insert modify cureency type
  $("#menu-home").append($("#breadcrumb_currency").html());
}(jQuery))

function chkaskmessage(){
  var ask_content = $("#ask_content").val();
  var ask_username = $("#ask_username").val();
  var ask_email = $("#ask_email").val();
  var package_id = $("#package_id").val();
  if(ask_content == '') {alert('Submission failed!Please enter content!"');return false;}
  if(ask_username == '') {alert('Submission failed!Please enter your name!"');return false;}
  if(!/(\S)+[@]{1}(\S)+[.]{1}(\w)+/.test(ask_email)) {
    alert('Submission failed!Please enter correct email!"');return false;
  }
  $.post('/index.php?option=com_reply&task=saveAskQuestion&packageid=<?php echo $packageInfo->id;?>', {username: ask_username, content: ask_content, email: ask_email,question_type:2, question_type_id: package_id}, function(ret){
    if(ret == 'ok') {
      alert('Submission success');
      $("#ask_content,#ask_username,#ask_email,#package_id").val('');
    }
    else alert('Submission failed');
  })
}

function replay_message(){
  var reply_content = $("#reply_content").val();
  var reply_username = $("#reply_username").val();
  var postid = $('#reply_postid').val();
  if(postid == '') {alert('error, please refresh page!');return;}
  if(reply_content == '') {alert('Submission failed!Please enter content!"');return false;}
  if(reply_username == '') {alert('Submission failed!Please enter your name!"');return false;}
  $.post('/index.php?option=com_reply&task=saveAskQuestion', {username: reply_username, content: reply_content, postid: postid, question_type:2}, function(ret){
    if(ret == 'ok') {alert('Submission success');closewin();}
    else alert('Submission failed');
  })
}

function pop_reply(postid, username){
  $('#reply_postid').val(postid);
  $('#to_reply_name').html(username);
  $("#pop_reply").zxxbox(
    { bar: false,
      bgclose: false,
      bg: false
    }
  );
}

function closewin(){
  $.zxxbox.hide();
}


function change_tab_style(obj){
  $(obj).parent("ul").find("li").each(function(index){
    var newClass="tab"+(index+1);
    $(this).attr("class","");
    $(this).addClass(newClass);
  });
  var thisstyle=$(obj).attr("class");
  $(obj).attr("class",thisstyle+"hover");
}
</script>

