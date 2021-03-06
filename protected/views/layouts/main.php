<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css"  href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" />
<!-- blueprint CSS framework -->
 <!-- <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,700italic,italic,regular&amp;subset=latin" media="all"/> -->
 <link type="text/css" rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:300,700,700italic,italic,regular&amp;subset=latin" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<?php   
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/main.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.min.css');
		Yii::app()->clientScript->registerCoreScript('jquery');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap/bootstrap.min.js');
	?>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
<div id="page">
  <div class="header-content">
    <div id="header">
      <div id="logo">
        <?php //echo CHtml::encode(Yii::app()->name); ?>
        <a href="/"><img src="/images/logo.png" /></a></div>
    </div>
    <!-- header -->
    <div class="index-menu">
      <div id="mainmenu" >
	  <?php 
			$tianjin_port = Yii::app()->createUrl('port/PortExcursion',array('city_name'=>'tianjin-port','id'=>5));
			$shanghai = Yii::app()->createUrl('port/PortExcursion',array('city_name'=>'shanghai-port','id'=>6));
			$dalian = Yii::app()->createUrl('port/PortExcursion',array('city_name'=>'dalian-port','id'=>7));
			$xiamen = Yii::app()->createUrl('port/PortExcursion',array('city_name'=>'xiamen-port','id'=>11));
			$hongkong = Yii::app()->createUrl('port/PortExcursion',array('city_name'=>'hong-kong-port','id'=>13));
			// beijing ->xian 
			$beijingtoxian = Yii::app()->createUrl('destions/sideTrips',array('city_name'=>'beijing-xian'));
			// shanghai ->xian 
			$shanghaitoxian = Yii::app()->createUrl('destions/sideTrips',array('city_name'=>'shanghai-xian'));
			// china tours 
			$bestchinatours = Yii::app()->createUrl('bestChinaTours/index');
			$chinatours = Yii::app()->createUrl('bestChinaTours/chinaTours');
			$familytours = Yii::app()->createUrl('bestChinaTours/familyTours');
			$yangtzerivertours = Yii::app()->createUrl('bestChinaTours/yangtzeriverTours');
			//destions
			$citytours = Yii::app()->createUrl('destions/index');
	  ?>
        <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'CHINA TOURS', 'url'=>array($chinatours),
					'items'=>array(
						array('label'=>'Top 10 China Tours', 'url'=>array($bestchinatours)),
						array('label'=>'China Family Tours', 'url'=>array($familytours)),
						array('label'=>'China Train Travel', 'url'=>array('/travel/china-train-travel/')),
						array('label'=>'China Homeland Tours', 'url'=>array('/travel/adoption/')),
						// array('label'=>'Yangtze River Cruise', 'url'=>array($yangtzerivertours)),
						array('label'=>'Beijing Xian Tours', 'url'=>array($beijingtoxian)),
						array('label'=>'Shanghai Xian Tours', 'url'=>array($shanghaitoxian)),
						array('label'=>'Customize China Tour', 'url'=>array('/order/new_order/')),
					)
				),
				array('label'=>' DESTINATIONS', 'url'=>array($citytours),
					'items'=>array(
						array('label'=>'Beijing Tours', 'url'=>array('/travel/city-beijing-tours')),
						array('label'=>'Shanghai Tours', 'url'=>array('/travel/city-shanghai-tours')),
						array('label'=>'Xian Tours', 'url'=>array('/travel/city-xian-tours')),
						array('label'=>'Huangshan Tours', 'url'=>array('/travel/city-huangshan-tours')),
						// array('label'=>'Yangtze River Cruise', 'url'=>array($yangtzerivertours)),
						array('label'=>'Zhangjiajie Tours', 'url'=>array('/travel/city-zhangjiajie-tours')),
						array('label'=>'Guilin Tours', 'url'=>array('/travel/city-guilin-tours')),
						array('label'=>'Zhangye Tours', 'url'=>array('/travel/city-zhangye-tours')),
					)
				),
				array('label'=>'HERITAGE TOURS', 'url'=>array('/travel/adoption/'),
					'items'=>array(
						array('label'=>'Provincial Reunion Tour', 'url'=>array('/travel/adoption#provin ce_map/')),
						array('label'=>'2016 Group Tour', 'url'=>array('/travel/adoption/beijingXianChengduItinerary/')),
						array('label'=>'China Orphanage List', 'url'=>array('/travel/adoption/orphanageList/')),
						array('label'=>'Families\' Travel Stories', 'url'=>array('/travel/adoption/storyIndex/')),
						array('label'=>'Featured Activites', 'url'=>array('/travel/adoption/special-activities.html')),
						array('label'=>'Resources', 'url'=>array('/travel/adoption/resource/')),
						array('label'=>'Creat Your Return Trip', 'url'=>array('/travel/adoption/adoption-customize/')),
					)
				),
				array('label'=>' SHORE EXCURSIONS ', 'url'=>array('/travel/cruise-port/'),
						'items'=>array(
						array('label'=>'Tianjin Port Excursion', 'url'=>array(
							$tianjin_port
						)),
						array('label'=>'Shanghai Port Excursion', 'url'=>array(
							$shanghai
						)),
						array('label'=>'Dalian Port Excursion', 'url'=>array(
							$dalian
						)),
						array('label'=>'Xiamen Port Excursion', 'url'=>array(
							$xiamen
						)),array('label'=>'Hong Kong Port Excursion', 'url'=>array(
							$hongkong
						))
						),
					),
				),
		)); ?>
      </div>
      <div class="inquire-block"> <a onclick="window.open('http://messenger.providesupport.com/messenger/travelthing.html', '_blank','menubar=0,location=0,scrollbars=auto,resizable=1,status=0,width=650,height=680')" href="javascript:void(0)">
			<span> INQUIRE NOW</span></a>
	</div>
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
            <div class="support-call"> <span>Tour Enquiry: </span>+86-551-63868882 </div>
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
            <a href="/about-us">About Us</a> 
			<a href="/site/contact">Contact Us </a> 
			<a href="#">Feedback</a> 
			<a href="/newsletter/">Newsletter</a> 
			<a href="#">Promotion</a> 
			<a href="/Emergency-Response.html">Tours Brochure</a> </div>
          <div class="col-md-2 footer-links">
            <h4>CUSTOMER CENTER</h4>
            <a href="/paymentguide.htm">Payment Guide</a> <a href="/travel/terms-and-conditions.html">Terms & Conditions</a> <a href="/privacy-policy.html">Privacy Policy</a> <a href="/Emergency-Response.html">24/7 Care in China</a> <a href="#">FAQ's</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
</div>
<!-- page -->
</body>
</html>
