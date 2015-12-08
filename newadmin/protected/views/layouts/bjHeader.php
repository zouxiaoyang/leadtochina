<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jv.moomenu.css" />
  <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/colorbox.css'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.colorbox.js');?>
  <style>
	<!--
  #cboxClose{display:none !important;}
	.menu ul li:hover ul {width:190px;}
	.menu ul li:hover ul li{ width:187px; white-space:nowrap;}
	.menu ul li:hover ul li a { width:177px;}
	.menu ul li a,.menu ul li a:visited { padding:0px 24px;}
	.menu ul li.lastmenu a{ padding:0px 24px;}
	.menu ul li:hover ul.newul{width:380px;}
	.menu ul li:hover ul.newul li{ width:187px;}
	.menu ul li:hover ul.newul li a { width:177px;}
	.menu ul li:hover ul.special-menu{left:-532px;}
	.menu ul li:hover ul.special-menu li ul li a.hot{ color:#3f3f3f; text-align:left; margin:0px; padding:0px; line-height:24px; display:block; height:24px; background:url(/images/newhomepage/hot.gif) right top no-repeat;}
	.menu ul li:hover ul.special-menu li.list-2 ul li{ width:140px;}
	.menu ul li:hover ul.special-menu li.list-2 ul li a{ width:140px;}
	.menu ul li:hover ul.special-menu li.list-3 ul li{ width:158px;}
	.menu ul li:hover ul.special-menu li.list-3 ul li a{ width:158px;}
	-->
	</style>
</head>
<body id="bd" class="fs3">
<div id="feedback"><a href="javascript:;" onclick="_feedback.pop_step1();"><img src="/images/index/feedback.png"  /></a></div>
<?php $request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>'beijing-tours')).'?'; ?>

<div id="header">
  <div class="head">
        <div class="logo"><a href="/"><img src="/new/images/logo.png" alt="" /></a></div>
        <div class="logorightindex"><a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newindex/chat.jpg" alt="" /></a></div>
        <div class="menu">
         <ul>
             <li><a class="hide" href="/">Home</a></li>
             <li><a class="hide" href="<?php echo Yii::app()->request->baseUrl;?>/city-beijing-tours">Beijing Tours</a>
                <ul class="newul">
                      <li><a href="<?php echo $request_uri . 'tour_type=1_Private+Tours';?>">Beijing Private Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'tour_type=2_Join+Groups';?>">Beijing Group Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=12_World+Heritage';?>">Beijing World Heritage Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=69_Temples';?>">Beijing Temples Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=29_Modern+Site';?>">Beijing Modern Site Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=16_Night+Tours';?>">Beijing Night Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=37_Local+Feature';?>">Beijing Local Feature Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=63_Season+Tours';?>">Beijing Season Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=87_TCM+Study+Tour';?>">Beijing TCM Study Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=74_Shopping+Tour';?>">Beijing Shopping Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=89_No-shopping+Tour';?>">Beijing No-shopping Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=113_72+Hours+Visa+Free+Tour';?>">72 Hours Visa Free Tour</a></li>
                      <li><a href="<?php echo $request_uri . 'theme=110_Beijing+Musilm+Tour';?>">Beijing Muslim Tours</a></li>
                      <li><a href="<?php echo Yii::app()->request->baseUrl;?>/adoption/homelandprovince/1">Beijing Adoption Tours</a></li>
                </ul>
             </li>
             <li><a class="hide" href="/beijing/tours?v=list&id=1">Great Wall Tours</a>
                <ul>
                      <li><a href="/beijing/tours?v=list&id=1#great_wall1">Mutianyu Great Wall Tour</a></li>
                      <li><a href="/beijing/tours?v=list&id=1#great_wall2">Badaling Great Wall Tour</a></li>
                      <li><a href="/beijing/tours?v=list&id=1#great_wall3">Jinshanling Great Wall Tour</a></li>
                      <li><a href="/beijing/tours?v=list&id=1#great_wall5">Gubeikou Great Wall Tour</a></li>
                      <li><a href="/beijing/tours?v=list&id=1#great_wall6">Simatai Great Wall Tour</a></li>
                      <li><a href="/beijing/tours?v=list&id=1#great_wall7">Huanghuacheng Great Wall Tour</a></li>
                </ul>
             </li>
             <li><a class="hide" href="#">Side Tours</a>
                <ul>
                      <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
                      <li><a  href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'des=8_Beijing+Chengde+Tours';?>">Beijing Chengde Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'des=6_Beijing+Datong+Tours';?>">Beijing Datong Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'des=11_Beijing+Guilin+Tours';?>">Beijing Guilin Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'des=15_Beijing+Harbin+Tours';?>">Beijing Harbin Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'des=10_Beijing+Luoyang+Tours';?>">Beijing Luoyang Tours</a></li>

                      <li><a href="<?php echo $request_uri . 'des=7_Beijing+Qinhuangdao+Tours';?>">Beijing Qinhuangdao Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'des=9_Beijing+Tianjin+Tours';?>">Beijing Tianjin Tours</a></li>
                      <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai Tours</a></li>
                      <li><a href="<?php echo $request_uri . 'des=14_Hong+Kong+to+Beijing+Tour';?>">Hong Kong to Beijing Tours</a></li>
                </ul>
             </li>
             <li><a class="hide" href="/chinatour">China Tours</a>
                 <ul class="special-menu" id="special-menu">
                      <li class="list-0">
                         <ul>
                             <li class="titleul">Classic China</li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/top10Tours');?>">Top 10 China Tours</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/yangtzeRiverTours');?>">Yangtze Cruise Tour</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/tibetTours');?>">China Tibet Tours</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('adoption');?>">China Heritage Tours</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">All China Theme Tours</a></li>
                         </ul>
                      </li>
                      <li class="list-0">
                                <ul>
                                  <li class="titleul">Short Stay Tours</li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>                
                                  <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/index');?>">Shanghai Xian Tours</a></li>
                                  <li><a href="<?php echo Yii::app()->createUrl('shanghaiHuangshanTours/index');?>">Shanghai Huangshan Tours</a></li>
                                  <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port to Beijing</a></li>
                               </ul>
                      </li>
                      <li class="list-0">
                                <ul>
                                    <li class="titleul">China Tours from</li>
                                    <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>">Beijing Tours</a></li>
                                   <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'shanghai-tours'));?>">Shanghai Tours</a></li>
                                  <li><a href="/travel/china-search?starting_city=hongkong">Hong Kong</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/australiaTours');?>">Australia</a></li>
                             <li><a href="<?php echo Yii::app()->createUrl('chinaTours/southAfrica');?>">South Africa</a></li>
                               </ul>
                      </li>
                      <li class="list-2">
                                <ul>
                                    <li class="titleul">Hot Deals</li>
                                    <li><a href="/travel/china-8-day-beijing-xian-shanghai-17.html">8-day Beijing Xian Shanghai</a></li>                
                                    <li><a href="/travel/china-11-day-tour-with-yangtze-cruise-54.html">11-day Tour with Yangtze Cruise</a></li>
                                    <li><a href="/travel/china-10-day-beijing-xi'an-guilin-shanghai-22.html">10-day Beijing, Xi'an, Guilin, Shanghai</a></li>
                                    <li class="picmenu"><a href="/travel/china-diy-tours"><img src="/images/newhomepage/tailor01.png" alt="" /></a></li>
                               </ul>
                      </li>
                    </ul>
             </li>             
             <li><a class="hide" href="<?php echo Yii::app()->createUrl('Rental/carRental');?>">Car Rental</a></li>
             <li class="lastmenu"><a class="hide" href="<?php echo Yii::app()->createUrl('Rental/guideRental');?>">Guide Rental</a></li>
         </ul>    
  </div>
  </div>
</div>
<div class="clear"></div>
<div class="contentnew">
   <div id="content1">
    <div><?php echo $content; ?></div>
   </div>
</div>
<div class="clear"></div>
<?php $this->renderPartial('//layouts/footer');?>

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

</body>
</html>
