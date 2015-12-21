<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<!-- blueprint CSS framework -->
<!-- <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,700italic,italic,regular&amp;subset=latin" media="all"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<script>
	!function(a,b){b.behaviors.zicassoAboutUsAnimation={attach:function(){function b(b){a(b.selector+"> div:gt(0)").hide(),setTimeout(function(){a(b.selector+"> div:first").fadeOut(1500).next().fadeIn(1500).end().appendTo(b.selector)},b.pauseTime)}function c(){setTimeout(function(){b(f),b(g),b(h),b(i),b(j),b(k),l++,l>0&&c()},5e3)}var d=2e3,e=250,f={selector:"#zicasso-about-slideshow-top-small",pauseTime:d},g={selector:"#zicasso-about-slideshow-middle-small",pauseTime:d+e},h={selector:"#zicasso-about-slideshow-bottom-small",pauseTime:d+2*e},i={selector:"#zicasso-about-slideshow-left-big",pauseTime:d+e},j={selector:"#zicasso-about-slideshow-left-bottom-big",pauseTime:d+2*e},k={selector:"#zicasso-about-slideshow-right-big",pauseTime:d};b(f),b(g),b(h),b(i),b(j),b(k);var l=1;c()}}}
</script>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
<div id="page">
  <div class="header-content">
    <div id="header">
      <div id="logo">
        <?php //echo CHtml::encode(Yii::app()->name); ?>
        <img src="/images/logo.png" /></div>
    </div>
    <!-- header -->
    <div class="index-menu">
      <div id="mainmenu" >
        <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'CHINA TOURS', 'url'=>array('/travel/china-tours'),
					'items'=>array(
						array('label'=>'Top 10 China Tours', 'url'=>array('/travel/best-china-tours/')),
						array('label'=>'Short Stays in China', 'url'=>array('/travel/family-tours')),
						array('label'=>'Yangtze River Cruise', 'url'=>array('/travel/family-tours')),
						array('label'=>'China Homeland Tours', 'url'=>array('/travel/adoption')),
						array('label'=>'China Senior Tours', 'url'=>array('/travel/family-tours')),
						array('label'=>'China Family Tours', 'url'=>array('/travel/family-tours')),
						array('label'=>'China Educational Trips', 'url'=>array('/travel/family-tours')),
						array('label'=>'China Train Travel', 'url'=>array('/travel/family-tours')),
						array('label'=>'China Tours from', 'url'=>array('/travel/family-tours')),
						array('label'=>'Customize China Tour', 'url'=>array('/travel/family-tours')),
					)
				),

				array('label'=>' DESTINATIONS', 'url'=>array('/site/page', 'view'=>'about'),'items'=>array(
					array('label'=>'DESTINATIONS1', 'url'=>array('/site/index')),
					array('label'=>'DESTINATIONS2', 'url'=>array('/site/index')),
				)),

				array('label'=>'HERITAGE TOURS', 'url'=>array('/site/contact'),
					'items'=>array(
						array('label'=>'Provincial Reunion Tour', 'url'=>array('/travel/adoptionbyprovince')),
						array('label'=>'China Orphanage List', 'url'=>array('/travel/family-tours')),
						array('label'=>'Creat Your Return Trip', 'url'=>array('/travel/family-tours')),
						array('label'=>'Families\' Travel Stories', 'url'=>array('/travel/family-tours')),
						array('label'=>'Featured Activites', 'url'=>array('/travel/family-tours')),
					)
				),
				array('label'=>' SHORE EXCURSIONS ', 'url'=>array('/site/contact')),
				
			),
		)); ?>
      </div>
      <div class="inquire-block"> <span> INQUIRE NOW</span> </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="header-clear">
    <div class="container clearfix">
      <header role="banner" class="clearfix">
        <div id="header-clear-wrapper">
          <div class="container clearfix"> &nbsp; </div>
        </div>
      </header>
    </div>
  </div>
  <?php echo $content; ?>
  
  <div class="clear"></div>
  <div id="footer">
    <div class="foot-block01">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="support-call"> <span>For Booking:</span>+86-551-63868882 </div>
            <div class="support-call02"> <span>During Travel:</span> +86-551-65355416 </div>
            <div class="support-mail"> <span>Email:</span> <a style="color: #FFF" href="mailto:service@leadtochina.com">service@leadtochina.com</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-content02">
      <div class="container">
        <div class="row">
          <div class="col-md-8 company-about"> <b>leadtochina.com</b> <span>Address: RM.504 Spring NO.9 Xinhua Xuefu Shitai Road Hefei City, Anhui, China</span><br />
            <span>Copyright © 2008. All Rights Reserved to Lead To China</span> </div>
          <div class="col-md-2 footer-links">
            <h4>COMPANY INFO</h4>
            <a href="#">About Us</a> <a href="#">Contact Us </a> <a href="#">Feedback</a> <a href="#">Newsletter</a> <a href="#">Promotion</a> <a href="#">Tours Brochure</a> </div>
          <div class="col-md-2 footer-links">
            <h4>CUSTOMER CENTER</h4>
            <a href="#">Payment Guide</a> <a href="#">Terms & Conditions</a> <a href="#">Privacy Policy</a> <a href="#">24/7 Care in China</a> <a href="#">FAQ's</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
</div>
<!-- page -->
</body>
</html>
