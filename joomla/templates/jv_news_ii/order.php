<?php
  include_once (dirname(__FILE__).DS.'jv_tools.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>China Tour Package Reservation Form, Book China Tour</title>
  <link href="/templates/jv_news_ii/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="/templates/jv_news_ii/jv_menus/jv_moomenu/jv.moomenu.css" type="text/css" />

<?php if(!$_GET['test']):?>
    <link rel="stylesheet" href="/travel/js/jqueryUi/jquery.ui.core.css" type="text/css" />
    <script src="/travel/js/jquery-1.4.3.min.js"></script>
    <script src="/travel/js/jqueryUi/jquery.ui.core.js"></script>
    <script src="/travel/js/jqueryUi/jquery.ui.datepicker.js"></script>
<!--
    <link rel="stylesheet" href="/travel/css/jqueryui.css" />
    <script src="/travel/js/jquery.min.js"></script>
    <script src="/travel/js/tcg.calendar.js"></script>
-->
<?php else:?>
<script src="/travel/js/jquery-1.4.3.min.js"></script>
<link rel="stylesheet" href="/templates/jv_news_ii/js/My97DatePicker/skin/WdatePicker.css" type="text/css" />
<script type="text/javascript" src="/templates/jv_news_ii/js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/templates/jv_news_ii/js/My97DatePicker/calendar.js"></script>
<script type="text/javascript" src="templates/jv_news_ii/js/My97DatePicker/config.js"></script>
<?php endif;?>
<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css.php" type="text/css" />
<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css" type="text/css" />
</head>
<body id="bd" class="fs3">
<!-- <div class="festival2014">  -->
<!-- <div class="christmas"></div>  -->
<div id="header">
<div class="head">
        
       <?php include("menu.php");?>
</div>
</div>
<div class="clear"></div>
<div class="contentnew">
  <div class="leftspace">
          

  <!-- MAINBODY -->
  <div id="jv-mainbody" class="clearfix">
    <div class="jv-wrapper">
      <div id="jv-mainbody-inner">
        <!-- CONTAINER -->
        <div id="jv-container" class="clearfix">
          <div id="jv-inside<?php echo $jv_width;?>">
            <jdoc:include type="component" />
          </div>
        </div>
        <!-- END CONTAINER -->
        </div>
     </div>
  </div>
  <!-- END MAINBODY -->

  </div>
  </div>
</div>
<div class="clear"></div>
<?php include("footer.php");?>


<?php if(strpos($server_host,'leadtochina.lab') === false):?>
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61919467-1', 'auto');
  ga('send', 'pageview');
</script>
<?php endif;?>
<!-- </div> -->
</body>
</html>




