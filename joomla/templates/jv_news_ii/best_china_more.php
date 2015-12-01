<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
include_once (dirname(__FILE__).DS.'jv_tools.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css.php" type="text/css" />
<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css" type="text/css" />
<script src="/js/jquery.js"></script>
<script src="/js/jquery.zxxbox.3.0-min.js"></script>

<script type="text/javascript" src="/about/js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="/about/js/mf-pattern/mF_games_tb.js"></script>
<script src="js/jquery.lightbox-0.5.min.js" type="text/javascript"></script>
<script src="/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<style type="text/css">
/*=========mF_games_tb========*/
.mF_games_tb_wrap{width:400px; height:282px; float:left; border:1px solid #fcd6c4; padding:9px;}
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
body{ background:url(/templates/jv_news_ii/css/mainbj0.jpg) repeat;}
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
</head>
<body id="bd" class="fs3  ">
<div id="header">
  <div class="head">
	   <?php include("menu.php");?>
</div>
</div>
<div class="clear"></div>
<div id="jv-wrapper" >
  <div id="jv-wrapper-inner" >
   <div class="contentnew">
<!--contact_begin-->
<div class="contact">
  	<?php if($this->countModules('breadcrumb')) : ?>
	<div id="jv-breadcrumb" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-breadcrumb-inner">
				<strong><?php echo JText::_('You are here:');?></strong> <jdoc:include type="modules" name="breadcrumb" />
			</div>
		</div>
	</div>
	<?php endif; ?>
  <!--note_begin--> 
 

<jdoc:include type="component" />
 
</div> 
<!--contact_over-->

<div style="z-index:9; display:none;right:2px;bottom:1px;height:122px;width:192px;overflow:hidden;position:fixed;_position:absolute; _margin-top:expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);" id="BottomMsg">
            <div  id="livechat">
              <div style="position: relative;top: 11px;left: 160px;"><a href="javascript:closeall();" rel="nofollow"><img src="/images/close_over.png" /></a></div>
              <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
              <div id="cive7N" style="z-index:100;position:absolute"></div>
              <div id="scve7N" style="display:inline"></div>
              <div id="sdve7N" style="display:none"></div>
              <script type="text/javascript">var seve7N=document.createElement("script");seve7N.type="text/javascript";var seve7Ns=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/travelthing/safe-standard.js?ps_h=ve7N&ps_t="+new Date().getTime();setTimeout("seve7N.src=seve7Ns;document.getElementById('sdve7N').appendChild(seve7N)",1)</script>
              <noscript>
              <div style="display:inline"><a rel="nofollow" href="http://www.providesupport.com?messenger=travelthing">Live Chat Support</a></div>
              </noscript>
              <!-- END ProvideSupport.com Graphics Chat Button Code -->
            </div>
          </div>

<div id="top-button">
  <a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newhomepage/livechat.jpg" alt=""style="margin-bottom:2px" /></a>
  <a href="#header"><img src="/images/newhomepage/top-button.jpg" /></a>
</div>


<script   language="javascript">  
function closeall(){
  document.getElementById("livechat").style.visibility="hidden"; 
  return ;
}  
</script>
</div>
</div>
<div class="clear"></div>
<?php include("footer.php");?>
</div>
</body>

<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61919467-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
