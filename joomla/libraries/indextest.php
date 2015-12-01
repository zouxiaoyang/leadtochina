<?php
include("configuration.php");


$route_config=new JConfig();
$route_localhost=$route_config->host;
$route_user=$route_config->user;
$route_pw=$route_config->password;

$link = mysql_connect($route_localhost,$route_user, $route_pw) or die('Could not connect: ' . mysql_error());

mysql_select_db('joomla') or die('Could not select database');
$res=mysql_query("SELECT id,title,alias  FROM jos_content WHERE sectionid=1 ORDER BY id DESC LIMIT 10");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="china travel, china tours, travel china, china travel agent" />
  <meta name="description" content="China Travel Agent offering China Tours, Yangtze Cruise Travel, China Flights, China Hotels Booking and huge China Travel Guide Info." />
  <title>China Tours, China Travel, China Travel Agent</title>
  <link href="/templates/jv_news_ii/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="/css/index.css" type="text/css" />
  <link rel="stylesheet" href="http://www.leadtochina.com/templates/jv_news_ii/jv_menus/jv_moomenu/jv.moomenu.css" type="text/css" />
  

 
<link rel="stylesheet" href="http://www.leadtochina.com/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="http://www.leadtochina.com/templates/system/css/general.css" type="text/css" />
	    <!--link rel="stylesheet" href="http://www.leadtochina.com/templates/jv_news_ii/css/template.css.php" type="text/css" /-->
	    <!--  link rel="stylesheet" href="http://www.leadtochina.com/templates/jv_news_ii/css/default.css" type="text/css" />-->
    <link rel="stylesheet" href="http://www.leadtochina.com/templates/jv_news_ii/css/template.css" type="text/css" />
    <link rel="stylesheet" href="http://www.leadtochina.com/templates/jv_news_ii/css/typo.css" type="text/css" />
		<link href="http://www.leadtochina.com/templates/jv_news_ii//css/colors/black.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="/modules/mod_jaslideshow2/assets/themes/minisite/style.css" type="text/css" />
  <link rel="stylesheet" href="/modules/mod_jaslideshow2/assets/themes/minisite/mod_jaslideshow2.css" type="text/css" />
  <script type="text/javascript" src="/media/system/js/mootools.js"></script>

  <script type="text/javascript" src="/components/com_acymailing/js/acymailing_module.js"></script>
  <script type="text/javascript" src="/css/mod_hometopchinatours/ad.js"></script>
  <script type="text/javascript" src="/modules/mod_jaslideshow2/assets/script.js"></script>


	<script type="text/javascript">
		var baseurl = "http://www.leadtochina.com/";
		var jvpathcolor = 'http://www.leadtochina.com/templates/jv_news_ii/css/colors/';
		var tmplurl = 'http://www.leadtochina.com/templates/jv_news_ii/';
		var CurrentFontSize = parseInt('3');
	</script>
	<script src="http://www.leadtochina.com/templates/jv_news_ii/js/jv.script.js" type="text/javascript" language="javascript"></script>
	<!--[if lte IE 6]>
	<link rel="stylesheet" href="http://www.leadtochina.com/templates/jv_news_ii/css/ie6.css" type="text/css" />
	<script type="text/javascript" src="http://www.leadtochina.com/templates/jv_news_ii/js/ie_png.js"></script>
	<script type="text/javascript">
	window.addEvent ('load', function() {
	   ie_png.fix('.png');
	});
	</script>
	<![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="http://www.leadtochina.com/templates/jv_news_ii//css/ie7.css" type="text/css" />
	<![endif]-->
 
<script type="text/javascript"> 
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16576385-4']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>

<style type="text/css">


#gmap {display:block; width:550px; height:453px; background:url(images/ditu/map.jpg) no-repeat; position:relative; margin:0 auto 2em auto;}
#gmap a {color:#000; font-family:arial, sans-serif; font-size:1.2em; font-weight:bold; text-transform:uppercase;}

a#title2, a#title2:visited {display:block; width:550px; height:453px; padding-top:260px; position:absolute; left:0; top:0; cursor:default; text-decoration:none;}
* html a#title2 {height:453px; he\ight:0;}/*IE6.0以下中显示*/
#gmap a#title2:hover {background:transparent url(group_col.gif) no-repeat 0 0; overflow:visible; color:#c00;}


a#xj {display:block; width:206px; height:0; padding-top:156px; overflow:hidden; position:absolute; left:14px; top:63px;}
* html a#xj {height:156px; he\ight:0;text-indent:-9000px;}
a#xj:hover {background:transparent url(images/ditu/xj1.gif) no-repeat 0 0;overflow:visible;text-indent:-9000px;}


a#xz {display:block; width:200px; height:0; padding-top:124px; overflow:hidden; position:absolute; left:37px; top:207px;}
* html a#xz {height:124px; he\ight:0;}
a#xz:hover {background:transparent url(images/ditu/xz.gif) no-repeat  0 0;overflow:visible;text-indent:-9000px;}


a#qh {display:block; width:132px; height:0; padding-top:96px; overflow:hidden; position:absolute; left:147px; top:184px;}
* html a#qh {height:96px; he\ight:0;}
a#qh:hover {background:transparent url(images/ditu/qh.gif) no-repeat 0 0; height:-20px; overflow:visible;text-indent:-9000px;}


a#gs {display:block; width:148px; height:0; padding-top:123px; overflow:hidden; position:absolute; left:187px; top:149px;}
* html a#gs {height:123px; he\ight:0;}
a#gs:hover {background:transparent url(images/ditu/gsh.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#lmg {display:block; width:226px; height:0; padding-top:196px; overflow:hidden; position:absolute; left:234px; top:17px;}
* html a#lmg {height:196px; he\ight:0;}
a#lmg:hover {background:transparent url(images/ditu/lm.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#hlj {display:block; width:116px; height:0; padding-top:106px; overflow:hidden; position:absolute; left:420px; top:13px;}
* html a#hlj {height:106px; he\ight:0;}
a#hlj:hover {background:transparent url(images/ditu/hlj.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#nx {display:block; width:34px; height:0; padding-top:47px; overflow:hidden; position:absolute; left:290px; top:191px;}
* html a#nx {height:47px; he\ight:0;}
a#nx:hover {background:transparent url(images/ditu/nx.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#jl {display:block; width:88px; height:0; padding-top:59px; overflow:hidden; position:absolute; left:436px; top:96px;}
* html a#jl {height:59px; he\ight:0;}
a#jl:hover {background:transparent url(images/ditu/jl.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#ln {display:block; width:61px; height:0; padding-top:53px; overflow:hidden; position:absolute; left:423px; top:129px;}
* html a#ln {height:53px; he\ight:0;}
a#ln:hover {background:transparent url(images/ditu/ll.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#sd {display:block; width:69px; height:0; padding-top:45px; overflow:hidden; position:absolute; left:396px; top:198px;}
* html a#sd {height:45px; he\ight:0;}
a#sd:hover {background:transparent url(images/ditu/sd.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#hb {display:block; width:58px; height:0; padding-top:81px; overflow:hidden; position:absolute; left:377px; top:146px;}
* html a#hb {height:81px; he\ight:0;}
a#hb:hover {background:transparent url(images/ditu/heb.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#bj {display:block; width:17px; height:0; padding-top:18px; overflow:hidden; position:absolute; left:394px; top:167px;}
* html a#bj {height:18px; he\ight:0;}
a#bj:hover {background:transparent url(images/ditu/bj.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#tj {display:block; width:15px; height:0; padding-top:20px; overflow:hidden; position:absolute; left:406px; top:175px;}
* html a#tj {height:20px; he\ight:0;}
a#tj:hover {background:transparent url(images/ditu/tj.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#shx {display:block; width:55px; height:0; padding-top:93px; overflow:hidden; position:absolute; left:303px; top:188px;}
* html a#shx {height:93px; he\ight:0;}
a#shx:hover {background:transparent url(images/ditu/shx.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#sx {display:block; width:37px; height:0; padding-top:73px; overflow:hidden; position:absolute; left:350px; top:173px;}
* html a#sx {height:73px; he\ight:0;}
a#sx:hover {background:transparent url(images/ditu/sx.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#hn {display:block; width:62px; height:0; padding-top:56px; overflow:hidden; position:absolute; left:351px; top:224px;}
* html a#hn {height:56px; he\ight:0;}
a#hn:hover {background:transparent url(images/ditu/hl.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#js {display:block; width:56px; height:0; padding-top:50px; overflow:hidden; position:absolute; left:409px; top:232px;}
* html a#js {height:50px; he\ight:0;}
a#js:hover {background:transparent url(images/ditu/js.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#ah {display:block; width:52px; height:0; padding-top:63px; overflow:hidden; position:absolute; left:397px; top:239px;}
* html a#ah {height:63px; he\ight:0;}
a#ah:hover {background:transparent url(images/ditu/ah.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#sh {display:block; width:10px; height:0; padding-top:7px; overflow:hidden; position:absolute; left:460px; top:273px;}
* html a#sh {height:7px; he\ight:0;}
a#sh:hover {background:transparent url(images/ditu/sh.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#zj {display:block; width:40px; height:0; padding-top:50px; overflow:hidden; position:absolute; left:433px; top:275px;}
* html a#zj {height:50px; he\ight:0;}
a#zj:hover {background:transparent url(images/ditu/zj.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#jx {display:block; width:51px; height:0; padding-top:67px; overflow:hidden; position:absolute; left:388px; top:297px;}
* html a#jx {height:67px; he\ight:0;}
a#jx:hover {background:transparent url(images/ditu/jx.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#hj {display:block; width:47px; height:0; padding-top:59px; overflow:hidden; position:absolute; left:414px; top:313px;}
* html a#hj {height:59px; he\ight:0;}
a#hj:hover {background:transparent url(images/ditu/hj.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#gd {display:block; width:81px; height:0; padding-top:63px; overflow:hidden; position:absolute; left:350px; top:352px;}
* html a#gd {height:63px; he\ight:0;}
a#gd:hover {background:transparent url(images/ditu/gd.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#hl {display:block; width:25px; height:0; padding-top:21px; overflow:hidden; position:absolute; left:338px; top:418px;}
* html a#hl {height:21px; he\ight:0;}
a#hl:hover {background:transparent url(images/ditu/hal.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#gx {display:block; width:80px; height:0; padding-top:59px; overflow:hidden; position:absolute; left:294px; top:343px;}
* html a#gx {height:59px; he\ight:0;}
a#gx:hover {background:transparent url(images/ditu/gx.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#gz {display:block; width:62px; height:0; padding-top:52px; overflow:hidden; position:absolute; left:284px; top:312px;}
* html a#gz {height:52px; he\ight:0;}
a#gz:hover {background:transparent url(images/ditu/gz.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#yn {display:block; width:92px; height:0; padding-top:92px; overflow:hidden; position:absolute; left:218px; top:313px;}
* html a#yn {height:92px; he\ight:0;}
a#yn:hover {background:transparent url(images/ditu/yn.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#sc {display:block; width:111px; height:0; padding-top:96px; overflow:hidden; position:absolute; left:222px; top:250px;}
* html a#sc {height:96px; he\ight:0;}
a#sc:hover {background:transparent url(images/ditu/sc.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#cq {display:block; width:51px; height:0; padding-top:47px; overflow:hidden; position:absolute; left:299px; top:275px;}
* html a#cq {height:47px; he\ight:0;}
a#cq:hover {background:transparent url(images/ditu/chq.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#hun {display:block; width:56px; height:0; padding-top:65px; overflow:hidden; position:absolute; left:339px; top:298px;}
* html a#hun {height:65px; he\ight:0;}
a#hun:hover {background:transparent url(images/ditu/hn.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#hub {display:block; width:82px; height:0; padding-top:49px; overflow:hidden; position:absolute; left:332px; top:261px;}
* html a#hub {height:49px; he\ight:0;}
a#hub:hover {background:transparent url(images/ditu/hb.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}


a#tw {display:block; width:17px; height:0; padding-top:40px; overflow:hidden; position:absolute; left:462px; top:347px;}
* html a#tw {height:40px; he\ight:0;}
a#tw:hover {background:transparent url(images/ditu/tw.gif) no-repeat 0 0; overflow:visible;text-indent:-9000px;}

.city_title{ font-weight:bold; color:#af0606; text-decoration:underline; display:block; font-size:16px;}
.city_title a:link{ color:#af0606; text-decoration:none;}
.city_title a:visited{ color:#af0606; text-decoration:none;}
.city_title a:hover{ color:#000; text-decoration:underline;}
.city_title a:active{ color:#000; text-decoration:underline;}

</style>


</head>
<body id="bd" class="fs3  ">
<div id="jv-wrapper">
  <div id="jv-toppanel">
    <div id="jv-topmenu">
      <ul class="menu">
        <li class="item29 first"><a href="/about-us/" rel="nofollow"><span>About us</span></a></li>
        <li class="item18 last"><a href="http://www.leadtochina.com/contact-us/" rel="nofollow"><span>Contact us</span></a></li>
      </ul>
    </div>
  </div>
  <div id="jv-wrapper-inner">
    <div id="jv-header" class="clearfix">
      <div class="jv-wrapper">
        <div id="jv-header-inner">
          <div id="jv-logo"> <span class="png"><a href="http://www.leadtochina.com/" title="LeadtoChina"> </a> </span> </div>
          <div id="jv-banner">
            <p><a href="/custom-china-tour/" target="_self"><img src="/images/stories/topbann.png" border="0" /></a></p>
          </div>
        </div>
      </div>
    </div>
    <div id="jv-mainmenu" >
      <div class="jv-wrapper">
        <div id="jv-mainmenu-inner">
          <div class="menusys_moo">
            <ul id="menusys_moo">
              <li class="first-item hasChild"><a href="http://www.leadtochina.com"  class=' item' id="menusys1" title="Home"><span class="menusys_name">Home</span></a>
                  <ul>
                    <li class="first-item"><a href="/travel-news/"  class=' item' id="menusys53" title="Travel News"><span class="menusys_name">Travel News</span></a></li>
                    <li class=""><a href="/about-us/" rel="nofollow"  class=' item' id="menusys101" title="About Us"><span class="menusys_name">About Us</span></a></li>
                    <li class=""><a href="/payment-guide/"  class=' item' id="menusys141" title="Payment Guide"><span class="menusys_name">Payment Guide</span></a></li>
                    <li class="last-item"><a href="/save-money-on-china-trip.html"  class=' item' id="menusys176" title="How to Save Money"><span class="menusys_name">How to Save Money</span></a></li>
                  </ul>
              </li>
              <li class=" hasChild"><a href="http://www.leadtochina.com/tour/"  class=' item' id="menusys54" title="China Tours"><span class="menusys_name">China Tours</span></a>
                  <ul>
                    <li class="first-item"><a href="/tour/best-china-tours/"  class=' item' id="menusys55" title="Best China Tours"><span class="menusys_name">Best China Tours</span></a></li>
                    <li class=""><a href="/custom-china-tour/"  class=' item' id="menusys178" title="Customize China Tours"><span class="menusys_name">Customize China Tours</span></a></li>
                    <li class=""><a href="/tour/cheap-china-tours/"  class=' item' id="menusys183" title="Cheap China Tours"><span class="menusys_name">Cheap China Tours</span></a></li>
                    <li class=""><a href="/tour/silk-road-tours/"  class=' item' id="menusys58" title="Silk Road Tours"><span class="menusys_name">Silk Road Tours</span></a></li>
                    <li class=""><a href="/tour/yangtze-river-tours/"  class=' item' id="menusys57" title="Yangtze River Tours"><span class="menusys_name">Yangtze River Tours</span></a></li>
                    <li class=""><a href="/tour/small-group-tours/"  class=' item' id="menusys56" title="Small Group Tours"><span class="menusys_name">Small Group Tours</span></a></li>
                    <li class=""><a href="/tour/china-tibet-tours/"  class=' item' id="menusys59" title="China Tibet Tours"><span class="menusys_name">China Tibet Tours</span></a></li>
                    <li class=""><a href="/tour/minority-discovery/"  class=' item' id="menusys60" title="Minority Discovery"><span class="menusys_name">Minority Discovery</span></a></li>
                    <li class=""><a href="/tour/traveltochina/"  class=' item' id="menusys179" title="Customers' Tour Packages"><span class="menusys_name">Customers' Tour Packages</span></a></li>
                    <li class=""><a href="/tour/special-china-tours/"  class=' item' id="menusys117" title="Special China Tours"><span class="menusys_name">Special China Tours</span></a></li>
                    <li class="last-item"><a href="/tour/china-student-travel/"  class=' item' id="menusys185" title="Educational Summer Vacation"><span class="menusys_name">Educational Summer Vacation</span></a></li>
                  </ul>
              </li>
              <li class=" hasChild"><a href="/citytour/"  class=' item' id="menusys61" title="City Tours"><span class="menusys_name">City Tours</span></a>
                  <ul>
                    <li class="first-item"><a href="/beijing/tours/"  class=' item' id="menusys62" title="Beijing Tours"><span class="menusys_name">Beijing Tours</span></a></li>
                    <li class=""><a href="/shanghai/tours/"  class=' item' id="menusys63" title="Shanghai Tours"><span class="menusys_name">Shanghai Tours</span></a></li>
                    <li class=""><a href="/xian/tours/"  class=' item' id="menusys64" title="Xian Tours"><span class="menusys_name">Xian Tours</span></a></li>
                    <li class=""><a href="/guilin/tours/"  class=' item' id="menusys65" title="Guilin Tours"><span class="menusys_name">Guilin Tours</span></a></li>
                    <li class=""><a href="/hangzhou/tours/"  class=' item' id="menusys119" title="Hangzhou Tours"><span class="menusys_name">Hangzhou Tours</span></a></li>
                    <li class=""><a href="/hongkong/tours/"  class=' item' id="menusys118" title="Hong Kong Tours"><span class="menusys_name">Hong Kong Tours</span></a></li>
                    <li class="last-item"><a href="/lhasa/tours/"  class=' item' id="menusys120" title="Lhasa Tours"><span class="menusys_name">Lhasa Tours</span></a></li>
                  </ul>
              </li>
              <li class=" hasChild"><a href="/yangtzecruise/"  class=' item' id="menusys66" title="Yangtze Cruise"><span class="menusys_name">Yangtze Cruise</span></a>
                  <ul>
                    <li class="first-item"><a href="/yangtzecruise/ships/"  class=' item' id="menusys67" title="Yangtze Cruise Ships"><span class="menusys_name">Yangtze Cruise Ships</span></a></li>
                    <li class="last-item"><a href="/yangtzecruise/calendar.html"  class=' item' id="menusys68" title="Yangtze Cruise Calendar"><span class="menusys_name">Yangtze Cruise Calendar</span></a></li>
                  </ul>
              </li>
              <li class=" hasChild"><a href="/hotel/"  class=' item' id="menusys69" title="Hotels"><span class="menusys_name">Hotels</span></a>
                  <ul>
                    <li class="first-item"><a href="/hotel/beijing-hotels/"  class=' item' id="menusys70" title="Beijing Hotels"><span class="menusys_name">Beijing Hotels</span></a></li>
                    <li class=""><a href="/hotel/shanghai-hotels/"  class=' item' id="menusys71" title="Shanghai Hotels"><span class="menusys_name">Shanghai Hotels</span></a></li>
                    <li class=""><a href="/hotel/guangzhou-hotels/"  class=' item' id="menusys72" title="Guangzhou Hotels"><span class="menusys_name">Guangzhou Hotels</span></a></li>
                    <li class=""><a href="/hotel/guilin-hotels/"  class=' item' id="menusys121" title="Guilin Hotels"><span class="menusys_name">Guilin Hotels</span></a></li>
                    <li class=""><a href="/hotel/xian-hotels/"  class=' item' id="menusys122" title="Xian Hotels"><span class="menusys_name">Xian Hotels</span></a></li>
                    <li class="last-item"><a  id="menusys123" title="Other China Hotels"><span class="menusys_name">Other China Hotels</span></a></li>
                  </ul>
              </li>
              <li class=""><a href="/china-flight/"  class=' item' id="menusys73" title="Flights"><span class="menusys_name">Flights</span></a></li>
              <li class=" hasChild"><a href="/china-guide/"  class=' item' id="menusys124" title="China Guide"><span class="menusys_name">China Guide</span></a>
                  <ul>
                    <li class="first-item"><a href="/china-guide/city-guide/"  class=' item' id="menusys125" title="China City Guide"><span class="menusys_name">China City Guide</span></a></li>
                    <li class=""><a href="/china-guide/attractions/"  class=' item' id="menusys126" title="China Attraction Guide"><span class="menusys_name">China Attraction Guide</span></a></li>
                    <li class=""><a href="/china-guide/culture/"  class=' item' id="menusys127" title="Chinese Culture"><span class="menusys_name">Chinese Culture</span></a></li>
                    <li class=""><a href="/china-guide/travel-tools/"  class=' item' id="menusys128" title="China Travel Tools"><span class="menusys_name">China Travel Tools</span></a></li>
                    <li class=""><a href="/china-guide/travel-tips/"  class=' item' id="menusys129" title="China Travel Tips"><span class="menusys_name">China Travel Tips</span></a></li>
                    <li class="last-item"><a href="/things-to-do/"  class=' item' id="menusys131" title="Things to Do in China"><span class="menusys_name">Things to Do in China</span></a></li>
                  </ul>
              </li>
              
               <li class="">
               <a href="#"  class=' item' id="menusys73" title="DIY Tours "><span class="menusys_name">DIY Tours </span></a>
              </li>
              
              <div style=" position:absolute; width:790px; margin:0 auto; text-align:right;"><img src="01_03.png" /></div>
            </ul>
          </div>
        </div>
      </div>
    </div>

<div id="maintop">
                              <div class="moduletable">
						<div class="modulecontent">
<div class="ja-slidewrap_minisite" id="ja-slide-164" style="visibility:hidden">
  <div class="ja-slide-main-wrap">

    <div class="ja-slide-main">
            <div class="ja-slide-item"><img src="http://www.leadtochina.com/image/banner/banner1.jpg"  alt="Best Destination in Autumn -- Guilin Parallel Heaven, beautiful nature in Guilin will seize your soul. In gentle autumn sunshine, enjoy a tranquil cruise on Lijiang River..."/>
      <div class="ja-slide-desc"><h3 style="font-size:28px; padding:0px; margin:0px;">Best Destination in Autumn -- Guilin</h3><p style="padding:0px; margin:0px;">Parallel Heaven, beautiful nature in Guilin will seize your soul. In gentle autumn sunshine, enjoy a tranquil cruise on Lijiang River...</p></div>      </div>						
            <div class="ja-slide-item"><img src="http://www.leadtochina.com/image/banner/banner2.jpg"  alt="Discover Ecosystem Guizhou"/>
      <div class="ja-slide-desc"><h3 style="font-size:28px; padding:0px; margin:0px;">Discover Ecosystem Guizhou</h3><p style="padding:0px; margin:0px;">Shanghai-Guiyang-Anshun-Guiyang-Kaili-Rongjiang-Zhaoxing-Sanjiang-Longsheng-Guilin-Yangshuo-Guilin-Shanghai</p></div>      </div>						
          
            <div class="ja-slide-item"><img src="http://www.leadtochina.com/image/banner/banner3.jpg"  alt="Helicopter Cruise"/>
      <div class="ja-slide-desc"><h3 style="font-size:28px; padding:0px; margin:0px;">Helicopter Cruise</h3><p style="padding:0px; margin:0px;">Bird View Beijing in the Blue Air</p></div>      </div>						
          </div>		  

    <div class="maskDesc" style="display: block; position: absolute; width: 500px; height: 50px; bottom: 0px; visibility: visible; opacity: 0.9;"><div class="inner" ><a class="readon" title="" href="http://www.leadtochina.com/air.html"><span>Read More</span></a></div></div>

  
 
  <div class="ja-slide-buttons clearfix" style="margin-left:20px;">
     <span class="ja-slide-prev"> Previous</span>
    <span class="ja-slide-next">Next </span>
  </div>

  </div>
  
    
    

</div>

<script type="text/javascript">
  var Ja_direction = '';
  var cookie_path = '/';
  var cur_template_name = 'jv_news_ii';
  var Ja_maskAlignment = 'bottom';
  window.addEvent('load', function(){
	 
	   if(typeof(tmpl_name) =='undefined')
	   {
		  cookie_path = "jv_news_ii_direction";
	   }
	   else
	   {
		  cookie_path = tmpl_name+"_direction";
	   }
		Ja_direction = Cookie.get(cookie_path);
		if(Ja_direction == "")
		{
			Ja_direction = 'ltr';

		}
	   var style_l_value = 'auto';
	   if(cur_template_name == 'ja_norite')
	   {
			style_l_value = '0';
	   }
	   if(Ja_direction == 'rtl')
		{
			setStyleLinkWithRTLDirection();
			$('ja-slide-164').getElement(".ja-slide-main").setStyle('left',style_l_value);
			$('ja-slide-164').getElement(".ja-slide-main").setStyle('right','auto');
			if(Ja_maskAlignment == 'right')
			{
				Ja_maskAlignment == 'left';
			}
			else if(Ja_maskAlignment == 'left')
			{
				Ja_maskAlignment == 'right';
			}
		}
    new JASlideshow2('ja-slide-164', {	
                startItem: 0,
                showItem: 4,
                itemWidth: 20,
                itemHeight: 20,
                mainWidth: 980,
                mainHeight: 284,
				maskWidth: 980,
				maskHeigth:284,
                duration: 400,
                transition: Fx.Transitions.Quad.easeInOut,
                animation: 'fade',
				animationRepeat: 'true',
                thumbOpacity:0.8,			
                maskOpacity: 0.9,
                buttonOpacity: 0.4,
                showDesc: 'desc-readmore',
                descMode: 'always',
                readmoretext: 'Read More',
                overlap: 1,
                navigation:'',
                urls:['/guilin/tours/','/tour/package-tour-to-china-76.html',''],
				targets:['blank','blank'],
				autoPlay: true,
				
				interval: 5000,
				maskAlignment: Ja_maskAlignment,
				languageDirection:( typeof Ja_direction == 'string') ? Ja_direction : '',
				maskerTransStyle:'opacity',
				maskerTrans:Fx.Transitions.quartOut,
				navePos:'horizontal'	
              });
  });
</script>	

<script type="text/javascript" language="javascript">
 function setStyleLinkWithRTLDirection()
 {
    var links = document.getElementsByTagName ('link');
		var script = document.createElement('link');
	script.setAttribute('type', 'text/css');
	script.setAttribute('rel', 'stylesheet');
	script.setAttribute('href', 'http://www.leadtochina.com/modules/mod_jaslideshow2/assets/themes/default/mod_jaslideshow2_rtl.css');
	document.getElementsByTagName("head")[0].appendChild(script);
 }	
</script>	</div>
	</div>

        
            </div>

  <!--div class="logo_menu">


    
    
  
   <div class="banner"><img src="images/newhomepage/banner_06.jpg" /></div>
  
  </div-->


    <div class="main">




	


      <!--left-->
      <div class="left">
        <div class="left1">
          <div class="list1">
          <div><img src="/images/newhomepage/list1_18.jpg" /></div>
          <div class="note link1">
            <span id="besttour_pic"><img src="/images/newhomepage/1-big.jpg" /></span>
            <div class="list">
            <h2>Best Tour Deals This Month</h2>
            <div class="tab"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="tourone">
  <tr>
    <td width="81" height="54" align="left" valign="middle">
    <a href="http://www.leadtochina.com/tour/bct-02.html"><img src="/images/newhomepage/1-small.jpg" width="71" height="54"  border="0"/></a></td>
    <td align="left" valign="top"><span class="col_1"><a href="http://www.leadtochina.com/tour/bct-02.html">8 Days China Golden Tour&nbsp; </a></span><a href="http://www.leadtochina.com/tour/bct-02.html"> from <span class="col_2">USD638</span></a><span class="col_2"></span><br />
      Beijing, Xian, Shanghai</td>
  </tr>
</table>
</div>

<div class="tab1"><table width="100%" border="0" cellspacing="0" cellpadding="0"  id="tourtwo">
  <tr>
    <td width="81" align="left" valign="top"><a href="http://www.leadtochina.com/tour/bct-05.html"><img src="/images/newhomepage/2-small.jpg" width="71" height="54"  border="0"/></a></td>
    <td align="left" valign="top"><span class="col_1"><a href="http://www.leadtochina.com/tour/bct-05.html">10 Days China Essence Tours&nbsp;</a></span><a href="http://www.leadtochina.com/tour/bct-05.html">from <span class="col_2">USD1050</span></a><span class="col_2"></span><br />
      Beijing, Xian, Guilin, Yangshuo, Guilin, Shanghai</td>
  </tr>
</table>
</div>


<div class="tab1"><table width="100%" border="0" cellspacing="0" cellpadding="0"   id="tourthree">
  <tr>
    <td width="81" align="left" valign="top"><a href="http://www.leadtochina.com/tour/bct-11.html"><img src="/images/newhomepage/3-small.jpg" width="71" height="54"  border="0"/></a></td>
    <td align="left" valign="top"><span class="col_1"><a href="http://www.leadtochina.com/tour/bct-11.html">11 Days China Golden Tour with Yangtze Cruise</a></span><a href="http://www.leadtochina.com/tour/bct-11.html">&nbsp; from <span class="col_2">USD1260</span></a><span class="col_2"></span><br />
      Beijing, Xian, Chongqing, Yangtze River, Yichang and Shanghai</td>
  </tr>
</table>
</div>


<div class="tab1"><table width="100%" border="0" cellspacing="0" cellpadding="0"  id="tourfour">
  <tr>
    <td width="81" align="left" valign="top"><a href="http://www.leadtochina.com/tour/bct-08.html"><img src="/images/newhomepage/4-small.jpg" width="71" height="54" border="0" /></a></td>
    <td align="left" valign="top"><a href="http://www.leadtochina.com/tour/bct-08.html"><span class="col_1">13 Days China Golden Trip with Tibet</span>&nbsp; from <span class="col_2">USD1409</span></a><br />
      Beijing, Xian, Lhasa, Shigatse, Lhasa, Shanghai</td>
  </tr>
</table>
</div>


<div class="tab1"><table width="100%" border="0" cellspacing="0" cellpadding="0"  id="tourfive">
  <tr>
    <td width="81" align="left" valign="top"><a href="http://www.leadtochina.com/tour/md-06.html"><img src="/images/newhomepage/5-small.jpg" width="71" height="54"  border="0"/></a></td>
    <td align="left" valign="top"><span class="col_1"><a href="http://www.leadtochina.com/tour/md-06.html">10 Days Guizhou Minority Experience Travel&nbsp;</a></span><a href="http://www.leadtochina.com/tour/md-06.html"> from <span class="col_2">USD800</span></a><span class="col_2"></span><br />
      Guiyang, Anshun, Kaili, Rongjiang, Sanjiang, Longsheng and Guilin </td>
  </tr>
</table>
</div>

<div class="tab1">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="164" align="left"><a href="http://www.leadtochina.com/tour/"><img src="/images/newhomepage/list6_33.jpg" width="140" height="26" /></a></td>
      <td width="52" align="left"><!--img src="/images/newhomepage/list7_36.jpg" onclick="javascript:movefrontpic();" width="17" height="17" /><img src="/images/newhomepage/list8_36.jpg" onclick="javascript:movepic();" width="17" height="17"  style="margin-left:10px;"/--></td>
      <td width="60" align="left"></td>
    </tr>
  </table>
</div>

<!--script type="text/javascript">
var x
var y=1;
var j=5;
var arraykey;
var mypics = new Array();
mypics['tourone'] = "/images/newhomepage/1-big.jpg";
mypics['tourtwo'] = "/images/newhomepage/2-big.jpg";
mypics['tourthree'] = "/images/newhomepage/3-big.jpg";
mypics['tourfour'] = "/images/newhomepage/4-big.jpg";
mypics['tourfive'] = "/images/newhomepage/5-big.jpg";
var arrkey = new Array();
var searchkey;
var searchgro;
arrkey[1]="tourone";
arrkey[2]="tourtwo";
arrkey[3]="tourthree";
arrkey[4]="tourfour";
arrkey[5]="tourfive";




function movepic(){
	y++;
	switch(y){
		case 1:
			arraykey="tourone";
			break;
		case 2:
			arraykey="tourtwo";
			break;
		case 3:
			arraykey="tourthree";
			break;
		case 4:
			arraykey="tourfour";
			break;
		case 5:
			arraykey="tourfive";
			break;
	
	}
	if(y==5){
		y=0;
	}
	document.getElementById("besttour_pic").innerHTML="";
	document.getElementById("besttour_pic").innerHTML="<img src='"+mypics[arraykey]+"'>";
	for (x in arrkey){
		if(arrkey[x]==arraykey){
			searchkey=x;
		}

	
	
	}
	searchgro=searchkey-1;
	if(searchgro==0){
	
		searchgro=5;

	}
	document.getElementById(arrkey[searchgro]).style.background="";
	document.getElementById(arraykey).style.background="black";
}


function movefrontpic(){



	y--;

	if(y==0){
		y=5;
	}
	switch(y){
		case 1:
			arraykey="tourone";
			break;
		case 2:
			arraykey="tourtwo";
			break;
		case 3:
			arraykey="tourthree";
			break;
		case 4:
			arraykey="tourfour";
			break;
		case 5:
			arraykey="tourfive";
			break;
	
	}

	document.getElementById("besttour_pic").innerHTML="";
	document.getElementById("besttour_pic").innerHTML="<img src='"+mypics[arraykey]+"'>";
	for (x in arrkey){
		if(arrkey[x]==arraykey){
			searchkey=x;
		}

	
	
	}
	
	searchgro=searchkey+1;
	if(searchgro==6){
	
		searchgro=1;

	}
	alert(searchgro);
	return;
	document.getElementById(arrkey[searchgro]).style.background="";
	document.getElementById(arraykey).style.background="black";




}


function defaultpic(){
	document.getElementById("tourone").style.background="black";
}
defaultpic();
</script-->




            </div>
          </div>
          <div><img src="/images/newhomepage/list3_24.jpg" /></div>
        </div>
          <!--list1_over-->
          <div class="list2">
            <h2 class="link5"><a href="http://www.leadtochina.com/custom-china-tour/">Customize China Tours</a></h2>
            <span><img src="/images/newhomepage/list9_28.jpg" /></span>
            <div class="fon link2">
              <p>LeadtoChina is a leading China travel agent that offers over 300 packages and China travel tailor-make.</p>
              <ul>
                <li>You will get:</li>
                <li>>> One-to-one private trip consultant</li>
                <li>>> Free and professional travel advice</li>
                <li>>> Personal package suit your request</li>
                <li>>> Honest price without hidden fees</li>
                <li>>> Supervalue China tour experience</li>
              </ul>
            </div>
          </div>
          <div class="list3">
            <div class="title1 link6"><a href="http://www.leadtochina.com/tour/">China Theme Tours</a></div>
            <div class="note">
              <div class="Frame  link4">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="48%" class="bor_left"><img src="/images/newhomepage/list13_16.jpg"  />&nbsp;<a href="http://www.leadtochina.com/tour/best-china-tours/">Best China Tours</a></td>
                    <td width="52%"><img src="/images/newhomepage/list14_16.jpg"  />&nbsp;<a href="http://www.leadtochina.com/tour/cheap-china-tours/">Cheap China Tours</a></td>
                  </tr>
                  <tr>
                    <td class="bor_left"><img src="/images/newhomepage/list15_25.jpg" />&nbsp;<a href="http://www.leadtochina.com/tour/silk-road-tours">Silk Road Adventure</a></td>
                    <td><img src="/images/newhomepage/list16_25.jpg"/>&nbsp; <a href="http://www.leadtochina.com/tour/yangtze-river-tours/">Yangtze Cruise Tour</a></td>
                  </tr>
                  <tr>
                    <td class="bor_left"><img src="/images/newhomepage/list16_33.jpg"  /><a href="http://www.leadtochina.com/tour/small-group-tours">&nbsp;Small Group Tours</a></td>
                    <td><img src="/images/newhomepage/list17_33.jpg"  /> <a href="http://www.leadtochina.com/tour/china-tibet-tours/">&nbsp;China Tibet Tours</a></td>
                  </tr>
                  <tr>
                    <td class="bor_left"><img src="/images/newhomepage/list18_41.jpg"  />&nbsp;<a href="http://www.leadtochina.com/tour/minority-discovery/">&nbsp;Minority Discovery</a></td>
                    <td><img src="/images/newhomepage/list19_44.jpg"  />&nbsp;&nbsp;<a href="http://www.leadtochina.com/tour/special-china-tours/">Special China Tours</a></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="bor_left"><img src="/images/newhomepage/list20_49.jpg"  />&nbsp;&nbsp;&nbsp;<a href="http://www.leadtochina.com/tour/china-student-travel/">Educational Summer Vacation</a></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="bor_left"><img src="/images/newhomepage/list22_55.jpg"  />&nbsp;<a href="http://www.leadtochina.com/tour/traveltochina/">Previous Clients' Packages</a></td>
                  </tr>
                </table>
              </div>
              <div class="link3">
                <h3><a href="http://www.leadtochina.com/citytour/">China City Tours</a></h3>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="30%"><a href="http://www.leadtochina.com/beijing/tours/">Beijing Tours</a></td>
                    <td width="34%"><a href="http://www.leadtochina.com/shanghai/tours/">Shanghai Tours</a><a href="#"></a></td>
                    <td width="36%"><a href="http://www.leadtochina.com/xian/tours">Xian Tours</a></td>
                  </tr>
                  <tr>
                    <td><a href="http://www.leadtochina.com/guilin/tours/">Guilin Tours</a></td>
                    <td><a href="http://www.leadtochina.com/hangzhou/tours/">Hangzhou Tours</a><a href="#"></a></td>
                    <td><a href="http://www.leadtochina.com/hongkong/tours/">Hong Kong Tours</a></td>
                  </tr>
                  <tr>
                    <td><a href="http://www.leadtochina.com/lhasa/tours/">Lhasa Tours</a></td>
                    <td><a href="http://www.leadtochina.com/huangshan/tours/">Huangshan Tours</a></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
            <div><img src="/images/newhomepage/list12_12.jpg" /></div>
          </div>
        </div>
        <div style="clear: both;"></div>
        <div class="left2 link3">
          <div class="title1 link6"><a href="http://www.leadtochina.com/things-to-do/">Things to do in China</a></div>
          <div  class="note">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="65" height="52" align="left" valign="top"><img src="/images/newhomepage/list25_77.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-4-chinese-gardens.html">Top 4 Chinese Gardens</a></td>
                <td width="65" height="52" align="left" valign="top"><img src="/images/newhomepage/list29_79.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-8-noted-chinese-cuisine.html">Top 8 Noted Chinese<br />
                  Cuisines</a></td>
                <td width="65" height="52" align="left" valign="top"><img src="/images/newhomepage/list33_81.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-10-china-cities-to-find-chinese-beauties.html">Top 10 China Cities to <br />
                  Find Chinese Beauties</a></td>
              </tr>
              <tr>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list26_84.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-5-lakes-in-china.html">Top 5 Lakes in China</a></td>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list30_88.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-8-subject-live-performance-in-china.html">Top 8 Subject-live <br />
                  Performance in China</a></td>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list34_90.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-10-china-mountains.html">Top 10 China Mountains</a></td>
              </tr>
              <tr>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list27_86.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/best-10-sites-for-singles-travel-tours.html">Best 10 Sites for <br />
                  Singles Travel Tours</a></td>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list31_92.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-10-places-to-visit-in-tibet.html">Top 10 Places to Visit<br />
                  in Tibet</a></td>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list35_94.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-5-food-which-can-add-your-weight.html">Top 5 Foods to Add <br />
                  Your  Weight</a></td>
              </tr>
              <tr>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list28_88.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/7-most-wonderful-chinese-folk-houses.html">7 Most Wonderful <br />
                  Chinese Folk Houses</a></td>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list32_96.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/top-10-china-featured-hotels-.html">Top 10 China Featured <br />
                  Hotels</a></td>
                <td height="52" align="left" valign="top"><img src="/images/newhomepage/list36_98.jpg" width="60" height="35" /></td>
                <td height="52" align="left" valign="top"><a href="/china-guide/china-top-ten-places-for-lovers.html">China Top Ten Places <br />
                  for Lovers</a></td>
              </tr>
            </table>
          </div>
        </div>
        <div style="clear:both"></div>
        <div class="map">
         <div class="title1 link6"><a href="http://www.leadtochina.com/china-guide/city-guide/">China City Guide</a></div>
		  <div class="link3">
    <div  id="ditu_layer1" style="display: none; position: absolute; z-index: 1;" >


        </div>


<!--各省份HTML-->
<div id="ditu_bj" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/beijing/">Beijing</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> <a href="/beijing/food-&-restaurants.html">Peking (Beijing) Roasted Duck (Beijing Kaoya)</a> 
Noodle with Bean Sauce (Zha Jiang Mian)</br>
         <span style="font-weight:bold; color:#1b1b1b;">Top Attractions:</span><a href="/forbidden-city/">Forbidden City</a> ,
<a href="/summer-palace/"> Summer Palace</a>, <a href="/great-wall/">Great Wall</a></br>
         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/beijing-tour/bjp-01.html">4 Days Beijing Sightseeing Tour</a>
<a href="/tour/bct-04.html"> 9 Days Beijing, Xian, Guilin, Yangshuo, Guilin, Shanghai Tours</a>

      
      </div>
</div>




<div id="ditu_tj" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/tianjin/">Tianjin</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span>  
<a href="/tianjin/food-&-restaurants.html">Eight Great Bowls (Ba Da Wan)</a> 
Goubuli Steamed Stuffed Bun (Goubuli Baozi) 
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Top Attractions:</span>
<a href="/tianjin/attraction/haihe-river.html">Haihe River</a>,

<a href="/tianjin/attraction/huangyaguan-pass.html">  Huangyaguan Pass</a></br>
         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/tianjin-tour/tjp-02.html">2 Days Tianjin Popular Tourr</a>
<a href="/tour/tianjin-tour/tjs-01.html"> 1 Day Tianjin Side Trip to Baoding</a>

      
      </div>
</div>


<div id="ditu_chq" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/chongqing/">Chongqing</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span>  
 Chongqing Hotpot, Maoxuewang 
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Top Attractions:</span>
<a href="/chongqing/attraction/dazu-grottoes.html"> Dazu Grottoes</a>,

<a href="/chongqing/attraction/chongqing-people-hall.html">Chongqing People Hall</a></br>
         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/chongqing-tour/cqp-02.html">4 Days Chongqing Highlights Tour</a>
<a href="/tour/bct-11.html"> 11 Days Beijing, Xian, Chongqing, Yangtze River, Yichang and Shanghai Tours</a>

      
      </div>
</div>


<div id="ditu_shh" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/shanghai/">Shanghai</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span>  
<a href="/shanghai/food-&-restaurants.html">Shanghai Crab (Da Zha Xie)</a>, Ba Bao La Jiang (Eight Treasure Spicy Sauce) 
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Top Attractions:</span>
<a href="/shanghai/attraction/huangpu-river-night-cruise.html">  Huang Pu River Night Cruise</a>,

<a href="/shanghai/attraction/the-bund.html"> The Bund</a></br>
         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/shanghai-tour/shp-02.html">3 Days Shanghai Highlights Tour</a>
<a href="/tour/suzhou-tour/shs-05.html"> 5 Days Shanghai,Suzhou, Zhouzhuang Tour</a>

      
      </div>
</div>




<div id="ditu_hk" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/hongkong">Hongkong</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/hongkong/food-&-restaurants.html">Seafood</a>, Cantonese medicinal soups


</br>
         <span style="font-weight:bold; color:#1b1b1b;">Top Attractions:</span>
<a href="/hongkong/attraction/victoria-peak.html">  Victoria Peak</a>,

<a href="/hongkong/attraction/hong-kong-disneyland.html"> Hong Kong Disneyland</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/hongkong-tour/hkp-03.html">4 Days Family Trip to Hong Kong</a>
<a href="/tour/hongkong-tour/hks-03.html"> 4 Days Hong Kong Side Tour to Guilin</a>

      
      </div>
</div>

<div id="ditu_macau" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/macau/">Macau</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/hongkong/food-&-restaurants.html">Seafood</a>, Cantonese medicinal soups


</br>
         <span style="font-weight:bold; color:#1b1b1b;">Top Attractions:</span>
<a href="/hongkong/attraction/victoria-peak.html">  Victoria Peak</a>,

<a href="/hongkong/attraction/hong-kong-disneyland.html"> Hong Kong Disneyland</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/hongkong-tour/hkp-03.html">4 Days Family Trip to Hong Kong</a>
<a href="/tour/hongkong-tour/hks-03.html"> 4 Days Hong Kong Side Tour to Guilin</a>

      
      </div>
</div>

<div id="ditu_xj" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
         <span class="city_title"><a href="http://www.leadtochina.com/xinjiang/">Xinjiang</a></span> 
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/turpan/food-&-restaurants.html">The Roasted Whole Lamb</a>, The Thin Skin Baozi


</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/kashgar/">Kashgar</a>, <a href="/turpan/">Turpan</a>, <a href="/urumqi/">Urumqi</a>

</br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/kashgar-tour/ksp-02.html">4 Days Xinjiang Crossing Desert Tour</a>
<a href="/tour/kashgar-tour/ksp-01.html"> 1 Day Kashagar Cultural Tour</a>

      
      </div>
</div>



<div id="ditu_gs" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
        <span class="city_title"><a href="http://www.leadtochina.com/gansu/">Gansu</a></span> 
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/lanzhou/food-&-restaurants.html">Beef Noodles</a>, Sanpaotai Tea

</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/dunhuang/">Dunhuang</a>, <a href="lanzhou">Lanzhou</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/dunhuang-tour/dhp-01.html">3 Days Dunhuang Adventure Tour</a>
<a href="/tour/dunhuang-tour/dhp-03.html"> 2 Days Wonderful Dunhuang Tour</a>

      
      </div>
</div>



<div id="ditu_shx" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
        <span class="city_title"><a href="http://www.leadtochina.com/shanxi/">Shanxi</a></span> 
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/datong/food-&-restaurants.html">Datong Instant boiled Lamb</a>, Cat Ear Noodles

</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/pingyao/">Pingyao</a>, <a href="/datong/">Datong</a>, <a href="/taiyuan/">Taiyuan</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/pingyao-tour/pyp-02.html">2 Days Pingyao Standard Tours</a>
<a href="/tour/pingyao-tour/pys-02.html"> 2 Days Pingyao Side Tour to Taiyuan</a>

      
      </div>
</div>



<div id="ditu_ln" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/liaoning/">Liaoning</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/dalian/food-&-restaurants.html">Steamed Sea Bream</a>, Stir-fried Prawn
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/dalian/">Dalian</a>, <a href="/lvshun/">Lvshun</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/dalian-tour/dlp-02.html">2 Days Dalian Standard Tour</a>
<a href="/tour/dalian-tour/dls-01.html"> 1 Day Dalian Side Trip to Lvshun </a>

      
      </div>
</div>


<div id="ditu_im" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/innermongolia/">Inner Mongolia</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/hohhot/food-&-restaurants.html">All-Fish Banquet (Quan Yu Yan)</a>, Roasted Lamb (Kao Quan Yang)
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/hohhot/">Hohhot</a>, <a href="/baotou/">Baotou</a>, Grassland</br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/hohhot-tour/hhp-02.html">3 Days Hohhot Discovery Vacation</a>
<a href="/tour/hohhot-tour/hhs-01.html"> 2 Days Hohhot Side Trip to Baotou </a>

      
      </div>
</div>



<div id="ditu_hlj" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/heilongjiang/">Heilongjiang</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/harbin/food-&-restaurants.html">Mushroom Chicken Soup</a>, Braised Salmon 
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/harbin/">Harbin</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/harbin-tour/hrbp-04.html">4 Days Harbin Ice Wonderworld Tour</a>
<a href="/tour/harbin-tour/hrbp-02.html"> 2 Days Harbin Memorable Travel </a>

      
      </div>
</div>





<div id="ditu_tibet" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/tibet/">Tibet</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/lhasa/food-&-restaurants.html">Beef and Mutton</a>, Mashed Yak Meat 
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/lhasa/">Lhasa</a>, <a href="/lhasa/">Shigatse</a>, Gyantse</br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/lhasa-tour/lss-06.html">7 Days Lhasa-Gyantse- Shigatse Experience Tour</a>
<a href="/tour/lhasa-tour/lsp-01.html"> 4 Days Lhasa Essential Trip </a>

      
      </div>
</div>


<div id="ditu_shhx" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/shaanxi/">Shaanxi</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/xian/food-&-restaurants.html">Yangrou Paomo</a>, haanxi Liangpi (Cold Noodles)  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/xian/">Xian</a>, <a href="/huashan/">Huashan</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/xian-tour/xau-01.html">5 Days Feature Travel to Xian</a>
<a href="/tour/xian-tour/xas-02.html"> 4 Days Xian Side Tour to Mount Huashan </a>

      
      </div>
</div>


<div id="ditu_hn" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/henan">Henan</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/luoyang/food-&-restaurants.html">Luoyang Water Banquet (flowing banquet)</a>, Zhangji Roast Chicken  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/luoyang/">Luoyang</a>, <a href="/kaifeng/">Kaifeng</a>, <a href="/zhengzhou/">Zhengzhou</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/zhengzhou-tour/zzp-02.html">2 Days Zhengzhou Standard Tours</a>
<a href="/tour/luoyang-tour/lyp-03.html"> 3 Days Luoyang Full-view Tour </a>

      
      </div>
</div>



<div id="ditu_sich" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/sichuan/">Sichuan</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/chengdu/food-&-restaurants.html">Hotpot</a>, Mapo Bean Curd  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/chengdu/">Chengdu</a>, <a href="/jiuzhaigou/">Jiuzhaigou</a>, Leshan, Emei</br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/jiuzhaigou-tour/jzgp-02.html">4 Days Jiuzhaigou Luxury Tour</a>
<a href="/tour/chengdu-tour/cdp-01.html"> 3 Days Chengdu City Tours </a>

      
      </div>
</div>



<div id="ditu_hub" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/hubei/">Hubei</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/wuhan/food-&-restaurants.html">Steamed Wuchang Fish</a>, Wangji Chicken Soup 
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/wuhan/">Wuhan</a>, <a href="/yichang/">Yichang</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/wuhan-tour/whp-01.html">2 Days Tour to Wuhan</a>
<a href="/tour/wuhan-tour/whp-02.html"> 2 Days Wuhan Tour from Yichang </a>

      
      </div>
</div>






<div id="ditu_ah" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/anhui/">Anhui</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/huangshan/food-&-restaurants.html">Stewed soft shell turtle with ham</a>, amboo shoots cooked with sausage and dried mushroom 
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/huangshan/">Huangshan</a>, <a href="/huangshan/attraction/mt-jiuhua.html">Jiuhuashan</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/huangshan-tour/hsp-01.html">3 Days Huangshan Yellow Mountain Tour</a>
<a href="/tour/huangshan-tour/hsp-04.html"> 6 Days Huangshan and Huizhou Culture Tour </a>

      
      </div>
</div>




<div id="ditu_js" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/jiangsu/">Jiangsu</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/nanjing/food-&-restaurants.html">Nanjing Salted Duck (Nanjing Yanshui Ya)</a>, Eight Delicacies Soup (Qingtang Bazhen)  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/nanjing/">Nanjing</a>, <a href="/suzhou/">Suzhou</a>, <a href="/suzhou/attraction/zhouzhuang.html/">Zhouzhuang</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/suzhou-tour/szp-07.html">4 Days Luxury Suzhou and Zhouzhuang Travel</a>
<a href="/tour/suzhou-tour/szs-03.html">5 Days Suzhou Side Trip to Xitang and Hangzhou </a>

      
      </div>
</div>


<div id="ditu_yn" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/yunnan/">Yunnan</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/dali/food-&-restaurants.html">Stewed Carp Casserole</a>, Steamed Chicken  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/dali/">Dali</a>, <a href="/kunming/">Kunming</a>, <a href="/lijiang/">Lijiang</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/dali-tour/dls-03.html">7 Days Colorful Tour to Kunming, Dali and Lijiang </a>
<a href="/tour/dali-tour/dls-02.html">6 Days Kunming, Dali Classic Travel </a>
<a href="/tour/lijiang-tour/ljp-04.html">4 Days Lijiang In-Depth Travel </a>
      
      </div>
</div>



<div id="ditu_hun" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/hunan/">Hunan</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/changsha/food-&-restaurants.html">Thrice Wrapped Chicken</a>, Yolkless Eggs with Mushroom  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/changsha/">Changsha</a>, <a href="/zhangjiajie/">Zhangjiajie</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/zhangjiajie-tour/zjjs-02.html">5 Days Zhangjiajie Hiking and Fenghuang Village Tour </a>
<a href="/tour/changsha-tour/csp-02.html">7 Days Hunan Full View Tour </a>

      
      </div>
</div>



<div id="ditu_zhj" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/zhejiang/">Zhejiang</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/hangzhou/food-&-restaurants.html">West Lake Vinegar Fish (Xi Hu Cu Yu)</a>, Dongpo Pork (Dong Po Rou)  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/hangzhou/">Hangzhou</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/hangzhou-tour/hzp-01.html">3 Days Hangzhou Sightseeing Tour </a>
<a href="/tour/hangzhou-tour/hzp-02.html">7 Days Hangzhou and Mt. Putuo Tour </a>

      
      </div>
</div>



<div id="ditu_gx" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/guangxi/">Guangxi</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/guilin/food-&-restaurants.html">Stewed duck with gingko</a>, Yangshuo Beer Fish  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/guilin/">Guilin</a>, <a href="/yangshuo/">Yangshuo</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/guilin-tour/glp-01.html">4 Days Guilin Yangshuo Private Tour </a>
<a href="/tour/guilin-tour/glp-02.html">6 Days Guilin,Yangshuo and Longsheng Tour </a>

      
      </div>
</div>

<div id="ditu_gd" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/guangdong/">Guangdong</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/guangzhou/food-&-restaurants.html"> Sweet Baked Pork with Honey Juice (Mi zhi cha shao)</a>, Roasted Goose (Shao’e)  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/guangzhou/">Guangzhou</a>, <a href="/shenzhen/">Shenzhen</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/guangzhou-tour/gzp-04.html">2 Days Guangzhou City Tour </a>
<a href="/tour/guangzhou-tour/gzp-03.html">1 Day Guangzhou Shopping Tour </a>

      
      </div>
</div>



<div id="ditu_hhn" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/hainan/">Hainan</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/guangzhou/food-&-restaurants.html"> Wenchang Chicken (Wenchang Ji)</a>, Dongshan Lamb (Dongshan Yang)  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/sanya/">Sanya</a>, <a href="/haikou/">Haikou</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/sanya-tour/syp-02.html">3 Days Sanya Vacation</a>
<a href="/tour/haikou-tour/hkp-01.html">1 Day Haikou City Tour </a>

      
      </div>
</div>

<div id="ditu_hb" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/hebei/">Hebei</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/chengde/food-&-restaurants.html"> Red bean gruel</a>, Youmian noodles  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
 <a href="/chengde/">Chengde</a>, <a href="/qinhuangdao/">Qinhuangdao</a></br>

         <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/chengde-tour/cdp-02.html">2 Days Chengde Essence Tours</a>
<a href="/tour/pingyao-tour/pyp-02.html">2 Days Pingyao Standard Tours</a>

      
      </div>
</div>


<div id="ditu_nx" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/ningxia/">Ningxia</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/yinchuan/food-&-restaurants.html">  Sweet and Sour Yellow River carp</a>, Steamed Lamb   
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/yinchuan/">Yinchuan</a>

     
      </div>
</div>


<div id="ditu_qh" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/qinghai/">Qinghai</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/xining/food-&-restaurants.html">  Lamb Tenderloin</a>, Mutton Eaten with Fingers   
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/xining/">Xining</a>

     
      </div>
</div>


<div id="ditu_jl" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/jilin/">Jilin</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/changchun/food-&-restaurants.html">  Korea Cold Noodle (Chaoxian Leng Mian)</a>, Ginseng Chicken Cooked with Maotai Wine (Ren Shen Mao Tai Ji)   
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/changchun/">Changchun</a>

     
      </div>
</div>



<div id="ditu_shd" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/shandong/">Shandong</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/shangdong/food.html">  Seafood</a>, Shandong Cuisine   
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/qingdao/">Qingdao</a>, <a href="/jinan/">Jinan</a><br />
 <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/qingdao-tour/qdp-02.html">1 Day Qingdao Highlights Tour</a>
<a href="/tour/qingdao-tour/qdp-01.html">4 Days Beautiful Qingdao Tours</a>
     
      </div>
</div>


<div id="ditu_gzhou" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/guizhou/">Guizhou</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/guiyang/food-&-restaurants.html">Lian'ai Doufu Guo</a>, Chang Wang Mian   
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/guiyang/">Guiyang</a><br />
 <span style="font-weight:bold; color:#1b1b1b;">Recommended Routes:</span><a href="/tour/md-04.html">6 Days Guiyang, Anshun, Kaili and Zhenyuan Tours</a>
<a href="/tour/md-06.html">10 Days Guiyang, Anshun, Kaili, Rongjiang, Sanjiang, Longsheng and Guilin Tours</a>
     
      </div>
</div>



<div id="ditu_jx" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/jiangxi/">Jiangxi</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/nanchang/food-&-restaurants.html">Spicy hotchpotch</a>, Nanchang rice noodle   
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/nanchang/">Nanchang</a><br />

     
      </div>
</div>
<div id="ditu_fj" style="display:none;">
      <div style="width:300px; background:#e5e0cd; border:1px #b7ae84 solid; text-align:left; padding:5px;" >
      <span class="city_title"><a href="http://www.leadtochina.com/fujian/">Fujian</a></span>
         <span style="font-weight:bold; color:#1b1b1b;">Feature Diets:</span> 
<a href="/xiamen/food-&-restaurants.html">Seafood (Hai xian)</a>, Medicinal Meals (Yao shan)  
</br>
         <span style="font-weight:bold; color:#1b1b1b;">Hot Destinations:</span>
<a href="/fuzhou/">Fuzhou</a>, <a href="/xiamen/">Xiamen</a><br />

     
      </div>
</div>

	<dl id="gmap">
		<dd><a id="xj" title="Xinjiang" 
             onmouseover="showTours('ditu_xj',event);">Xinjiang</a></dd>	
		<dd><a id="xz" title="Tibet" 
             onmouseover="showTours('ditu_tibet',event);">Tibet</a></dd>
		<dd><a id="qh" title="Qinghai" 
             onmouseover="showTours('ditu_qh',event);">Qinghai</a></dd>		
		<dd><a id="gs" title="Gansu" 
             onmouseover="showTours('ditu_gs',event);">Gansu</a></dd>
		<dd><a id="lmg" title="Inner Mongolia" 
             onmouseover="showTours('ditu_im',event);">Inner Mongolia</a></dd>
		<dd><a id="hlj" title="Heilongjiang" 
             onmouseover="showTours('ditu_hlj',event);">Heilongjiang</a></dd>	
		<dd><a id="jl" title="Jilin" 
             onmouseover="showTours('ditu_jl',event);">Jilin</a></dd>
		<dd><a id="ln" title="Liaoning" 
             onmouseover="showTours('ditu_ln',event);">Liaoning</a></dd>
		<dd><a id="sd" title="Shandong"  
             onmouseover="showTours('ditu_shd',event);">Shandong</a></dd>
		<dd><a id="hb" title="Hebei"  
             onmouseover="showTours('ditu_hb',event);">Hebei</a></dd>
		<dd><a id="sx" title="Shanxi" 
             onmouseover="showTours('ditu_shx',event);">Shanxi</a></dd>
		<dd><a id="bj" title="Beijing" 
             onmouseover="showTours('ditu_bj',event);" >Beijing</a></dd>
		<dd><a id="tj" title="Tianjin"
             onmouseover="showTours('ditu_tj',event);">Tianjin</a></dd>
		<dd><a id="shx" title="Shannxi" 
             onmouseover="showTours('ditu_shhx',event);">Shannxi</a></dd>		
		<dd><a id="nx" title="Ningxia" 
             onmouseover="showTours('ditu_nx',event);">Ningxia</a></dd>	
		<dd><a id="hn" title="Henan"
             onmouseover="showTours('ditu_hn',event);">Henan</a></dd>	
		<dd><a id="js" title="Jiangsu" 
             onmouseover="showTours('ditu_js',event);">Jiangsu</a></dd>
		<dd><a id="ah" title="Anhui" 
             onmouseover="showTours('ditu_ah',event);">Anhui</a></dd>
		<dd><a id="sh" title="Shanghai" 
             onmouseover="showTours('ditu_shh',event);">Shanghai</a></dd>
		<dd><a id="zj" title="Zhejiang" 
             onmouseover="showTours('ditu_zhj',event);">Zhejiang</a></dd>	
		<dd><a id="jx" title="Jiangxi" 
             onmouseover="showTours('ditu_jx',event);">Jiangxi</a></dd>
		<dd><a id="hj" title="Fujian"
             onmouseover="showTours('ditu_fj',event);">Fujian</a></dd>
		<dd><a id="gd" title="Guangdong" 
             onmouseover="showTours('ditu_gd',event);">Guangdong</a></dd>
		<dd><a id="hl" title="Hainan" 
             onmouseover="showTours('ditu_hhn',event);">Hainan</a></dd>
		<dd><a id="gx" title="Guangxi" 
             onmouseover="showTours('ditu_gx',event);">Guangxi</a></dd>	
		<dd><a id="gz" title="Guizhou" 
             onmouseover="showTours('ditu_gzh',event);">Guizhou</a></dd>
		<dd><a id="yn" title="Yunnan" 
             onmouseover="showTours('ditu_yn',event);">Yunnan</a></dd>	
		<dd><a id="sc" title="Sichuan" 
             onmouseover="showTours('ditu_sich',event);">Sichuan</a></dd>
		<dd><a id="cq" title="Chongqing" 
             onmouseover="showTours('ditu_chq',event);">Chongqing</a></dd>
		<dd><a id="hun" title="Hunan" 
             onmouseover="showTours('ditu_hun',event);">Hunan</a></dd>		
		<dd><a id="hub" title="Hubei" 
             onmouseover="showTours('ditu_hub',event);">Hubei</a></dd>
		<dd><a id="tw" title="Taiwan" 
             onmouseover="showTours('ditu_tw',event);">Taiwan</a></dd>
	
	</dl>
</div>
        </div>
      </div>
      <!--left_over-->
      <!--right-->
      <div class="right">
        <div class="note1">
          <div class="title1">Tours Search</div>
          <form name="searchform" method="get" action="/index.php">
            <div class="not">
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="30" colspan="6" align="left"><label>
              <select name="price" id="price " style="width:245px;">
               
                 <option value="0">- Price Per Person -</option>
                <option value="1000">US$1,000 Or less</option>
                <option value="1000-2000">US$1,000-2,000</option>
 
                <option value="2000-3000">US$2,000-3,000</option>
                <option value="3000-4000">US$3,000-4,000</option>
                <option value="4000-5000">US$4,000-5,000</option>
                <option value="5000-6000">US$5,000-6,000</option>
                <option value="6000">More than US$6,000</option>
               </select>

                  </label></td>
                </tr>
                <tr>
                  <td height="30" colspan="6" align="left">  <select name="selDays" id="selDays" style="width:245px;">
                <option value="0"> - Length of Tour - </option>
                <option value="1-4">1-4 days</option>
                <option value="5-9">5-9 days</option>
                <option value="10-14">10-14 days</option>
                <option value="15-19">15-19 days</option>
 
                <option value="20-24">20-24 days</option>
                <option value="24">More Than 24 days</option>
              </select></td>
                </tr>
                <tr>
                  <td height="30" colspan="6">Hot Cities:</td>
                </tr>
                <tr>
                  <td><label>
                    <input class="singleselect" type="checkbox" name="sc" value="Beijing" onclick="checkd()">
                  </label></td>
                  <td>Beijing</td>
                  <td><label>
<input class="singleselect" type="checkbox" name="sc" value="Shanghai" onclick="checkd()">
</td>
                  <td>Shanghai</td>
                  <td><label>
                     <input class="singleselect" type="checkbox" name="sc" value="Xian" onclick="checkd()">

                  </label></td>
                  <td>Xian</td>
                </tr>
                <tr>
                  <td><label>
                     <input class="singleselect" type="checkbox" name="sc" value="Guilin" onclick="checkd()">

                  </label></td>
                  <td>Guilin</td>
                  <td><label>
                    <input class="singleselect" type="checkbox" name="sc" value="Lhasa" onclick="checkd()">

                  </label></td>
                  <td>Lhasa</td>
                  <td><label>
<input class="singleselect" type="checkbox" name="sc" value="Yangtze" onclick="checkd()">

                  </label></td>
                  <td>Yangtze</td>
                </tr>
                <tr>
                  <td height="30" colspan="6">Select More Cities</td>
                </tr>
                <tr>
                  <td colspan="6"><label >
				  <textarea  name="city"  cols="28" style="height:80px;" id="city" ></textarea>

 <input type="hidden" name="Itemid" id="Itemid" value="151">
<input type="hidden" name="option" id="option" value="com_msearch">
          <input type="hidden" name="task" id="task" value="search">
                   
                  </label></td>
                </tr>
                <tr>
                  <td height="50" colspan="6" align="right"><label>
                    <input type="button" name="button" onclick="javascript:document.searchform.submit()" id="button" value=""  style="background:url(/images/newhomepage/right4_15.jpg) no-repeat; width:99px; height:33px; border:0px;"/>
                  </label></td>
                </tr>
              </table>
            </div>
             <div><img src="/images/newhomepage/right1_10.jpg" /></div>
          </form>
<script> 
    function checkd() 
{
    var obj=document.getElementsByName("sc");
    var cl =obj.length;
    var sc ="";
    for(var ii=0;ii<cl;ii++){
        if(obj[ii].checked)sc=sc+obj[ii].value+", ";
    }
    document.searchform.city.value=sc;
}    
</script>
         
        </div>
       <div class="note2"><a href="http://www.leadtochina.com/save-money-on-china-trip.html"><img src="/images/newhomepage/right3_29.jpg" /></a></div>
        <div class="note3">
          <div class="title1 link7"><a href="http://www.leadtochina.com/china-guide/">China Travel Guide</a></div>
          <div class="not link3">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center"><img src="/images/newhomepage/right11_101.jpg" width="65" height="41" /></td>
                <td align="center"><img src="/images/newhomepage/right12_101.jpg" width="44" height="44" /></td>
                <td align="center"><img src="/images/newhomepage/right13_101.jpg" width="41" height="47" /></td>
              </tr>
              <tr>
                <td height="32" align="center"><a href="/hotel/">Hotel</a></td>
                <td align="center"><a href="/china-flight/">Flight</a></td>
                <td align="center"><a href="/china-guide/culture/">Culture</a></td>
              </tr>
              <tr>
                <td align="center"><img src="/images/newhomepage/right14_119.jpg" width="49" height="47" /></td>
                <td align="center"><img src="/images/newhomepage/right15_121.jpg" width="47" height="41" /></td>
                <td align="center"><img src="/images/newhomepage/right16_119.jpg" width="51" height="51" /></td>
              </tr>
              <tr>
                <td height="32" align="center"><a href="/china-guide/attractions/">Attraction</a></td>
                <td align="center"><a href="/china-maps/">Map</a></td>
                <td align="center"><a href="/climate/">Weather</a></td>
              </tr>
              <tr>
                <td align="center"><img src="/images/newhomepage/right17_144.jpg" width="36" height="39" /></td>
                <td align="center"><img src="/images/newhomepage/right18_144.jpg" width="39" height="39" /></td>
                <td align="center"><img src="/images/newhomepage/right19_150.jpg" width="38" height="35" /></td>
              </tr>
              <tr>
                <td height="32" align="center"><a href="/travel-tools/china-visa.html">Visa</a></td>
                <td align="center"><a href="/china-guide/travel-tips/">Travel Tips</a></td>
                <td align="center"><a href="/china-guide/travel-tools/">Travel tools</a></td>
              </tr>
            </table>
          </div>
          <div><img src="/images/newhomepage/right1_10.jpg" /></div>
        </div>
<div style="z-index:9;right:2px;bottom:1px;height:122px;width:192px;overflow:hidden;position:fixed;_position:absolute; _margin-top:expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);" id="BottomMsg">
 
 
<div  id="livechat"><div style="position: relative;top: 31px;left: 110px;"><a href="javascript:closeall();" rel="nofollow"><img src="/images/close_over.png" /></a></div>
<!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
<div id="cive7N" style="z-index:100;position:absolute"></div><div id="scve7N" style="display:inline"></div><div id="sdve7N" style="display:none"></div><script type="text/javascript">var seve7N=document.createElement("script");seve7N.type="text/javascript";var seve7Ns=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/travelthing/safe-standard.js?ps_h=ve7N&ps_t="+new Date().getTime();setTimeout("seve7N.src=seve7Ns;document.getElementById('sdve7N').appendChild(seve7N)",1)</script><noscript><div style="display:inline"><a rel="nofollow" href="http://www.providesupport.com?messenger=travelthing">Live Chat Support</a></div></noscript>
<!-- END ProvideSupport.com Graphics Chat Button Code -->
 
</div>
</div>
<script   language="javascript">  
   
  function   closeall()  
  {  
	  
	  document.getElementById("livechat").style.visibility="hidden"; 
          //document.getElementById("livechat").style.display="block";  
		  return ;
 
  }  
  </script>
        <div class="note4 link3">
         <div class="title1 link7"><a href="http://www.leadtochina.com/travel-news/">China News</a></div>
          <div class="not">
            <div>
              <!--table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><a href="#">Hachette Convertibles <br />
                    Fleet converge at Ordos</a></td>
                  <td align="right"><img src="/images/newhomepage/right10_138.jpg" width="112" height="55" /></td>
                </tr>
              </table-->
              <ul>
			  <?php while($row=mysql_fetch_array($res)){
			  
				echo "<li>·<a href=\"/news/{$row['alias']}.html\">{$row['title']}</a></li>";
			  
			  }
			  
			  mysql_free_result($res);
			  ?>

              </ul>
            </div>
          </div>
           <div><img src="/images/newhomepage/right1_10.jpg" /></div>
        </div>
        <!--  
   <div><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="#"><img src="/images/newhomepage/right5_142.jpg" width="46" height="46" border="0"/></a></td>
    <td><a href="#"><img src="/images/newhomepage/right6_142.jpg" width="47" height="46" border="0"/></a></td>
    <td><a href="#"><img src="/images/newhomepage/right7_142.jpg" width="46" height="46" border="0"/></a></td>
    <td><a href="#"><img src="/images/newhomepage/right8_142.jpg" width="46" height="46" border="0"/></a></td>
    <td><a href="#"><img src="/images/newhomepage/right9_142.jpg" width="46" height="46" border="0"/></a></td>
  </tr>
</table>
</div>-->
        <div style=" clear:both;"></div>
       
      <?php

     function GetIP() {     

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {     

         //如果变量是非空或非零的值，则 empty()返回 FALSE。     
            $IP = explode(',',$_SERVER['HTTP_CLIENT_IP']);     

         }     

         elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {     

            $IP = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);     

        }     

        elseif (!empty($_SERVER['REMOTE_ADDR'])) {     

            $IP = explode(',',$_SERVER['REMOTE_ADDR']);     

         }     

        else {     

             $IP[0] = 'None';     
         }     

        return $IP[0];     

    } 




 function GetAddIsp($ip) {     

        $IP = $ip;     

         $AddIsp = mb_convert_encoding(file_get_contents('http://open.baidu.com/ipsearch/s?tn=ipjson&wd='.$IP),'UTF-8','GBK');     

        //mb_convert_encoding() 转换字符编码。     

         if (preg_match('/noresult/i',$AddIsp)) {     
            $AddIsp = 'None';     

        }     

         else {     

            $Sta = stripos($AddIsp,$IP) + strlen($IP) + strlen('来自');     

            $Len = stripos($AddIsp,'"}')-$Sta;     

           $AddIsp = substr($AddIsp,$Sta,$Len);     

       }     

         $AddIsp = explode(' ',$AddIsp);     

        return $AddIsp;     

    }  


function GetArea($ip){  

   

    $url = "http://www.ip138.com/ips8.asp?ip=".$ip."&action=2";  

     $contents = file_get_contents($url);  

    preg_match_all('|<li>本站主数据：.*</li>|',$contents,$rsR);  

    $rsR[0][0] = str_replace("<li>本站主数据：", "", $rsR[0][0]);  

     $pos = strpos($rsR[0][0],'</li>');  

     $Area = substr_replace($rsR[0][0],'',$pos);  

     return $Area;  

  }  


	   function GetLang() {     

         $Lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);     

         //使用substr()截取字符串，从 0 位开始，截取4个字符     

         if (preg_match('/zh-c/i',$Lang)) {     

        //preg_match()正则表达式匹配函数     

             $Lang = '简体中文';     

        }     

        elseif (preg_match('/zh/i',$Lang)) {     

             $Lang = '繁體中文';     

         }     

        else {     

             $Lang = 'English';     

        }     

         return $Lang;     

     }
	 $lang=GetLang();

	$getip=GetIP();

	//$geteara=GetAddIsp($getip);

	


	 if($lang=="English"){
		
		if($getip!='61.190.32.74'){
	  ?>
	   <div class="note5 link3">
           <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="https://www.facebook.com/pages/Online-China-Tours/155901011101674?ref=pb" data-width="270" data-show-faces="true" data-stream="false" data-header="false"></div>


        </div>
		<?php 
		}
		}
		?>
      </div>
      <!--right_over-->
    </div>
    <div id="jv-bottom" class="clearfix">
      <div id="jv-bottom-inner">
        <div class="jv-wrapper">
          <div id="jv-userwrap7" class="clearfix">
            <div class="jv-wrapper">
              <div id="jv-userwrap7-inner">
                <div id="jv-copyright">
                  <div id="jv-copyright-inner"> Copyright &copy; 2008 - 2011 <a href="http://www.leadtochina.com" title="LeadtoChina">LeadtoChina</a>. All rights reserved.</div>
                </div>
                <div id="jv-footer">
                  <div id="jv-footer-inner">
                    <!-- Place this tag in your head or just before your close body tag -->
                    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                    <!-- Place this tag where you want the +1 button to render -->
                    <g:plusone size="medium"></g:plusone>
                    <ul class="menu">
                      <li class="item44 first"><a href="/contact-us/" rel="nofollow"><span>Contact Us</span></a></li>
                      <li class="item47"><a href="/links.html"><span>Links</span></a></li>
                      <li class="item134 last"><a href="/sitemap.html" rel="nofollow"><span>Sitemap</span></a></li>
                    </ul>
                    <!--<div>Copyright &#169; 2011 LeadtoChina. All Rights Reserved.</div-->
                    <div></div>
                    <p><img src="/images/stories/logos.png" border="0" style="float: right;" /></p>
                    <p style="color:#999">Hotline:+86-551-65355443 +86-551-65355416(International) +1-818-757-6986(US)<br />
                      Fax:+86-551-65355401<br />
                      Address:6th Floor, No19, Tianzhi Road, Gaoxin District, Hefei, Anhui Province, China<br />
                      E-mail:<a href="mailto:service@leadtochina.com">service@leadtochina.com</a> (Both emails are for tour/hotel/flight booking)<br />
                      MSN: online-china-tours@hotmail.com<br />
                      License NO.:L-AH000952</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   <script type="text/javascript"> 
    function showTours(dtmc,evt){ 
     var x,y; 
     x = (evt.clientX+document.body.scrollLeft+document.documentElement.scrollLeft+5)-140; 
     y = evt.clientY+document.body.scrollTop+document.documentElement.scrollTop+5; 
     document.getElementById("ditu_layer1").style.left = x+'px'; 
     document.getElementById("ditu_layer1").style.top = y+'px'; 
	 document.getElementById("ditu_layer1").innerHTML="";
     document.getElementById("ditu_layer1").innerHTML = document.getElementById(dtmc).innerHTML; 
     document.getElementById("ditu_layer1").style.display = "block"; 
    } 
    function hiddenTours(dtmc){ 
     document.getElementById("ditu_layer1").innerHTML = ""; 
     document.getElementById("ditu_layer1").style.display = "none"; 
    } 
    </script>
