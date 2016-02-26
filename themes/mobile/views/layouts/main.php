<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<!-- blueprint CSS framework -->
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,700italic,italic,regular&amp;subset=latin" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<?php   
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/mobile/main.css');
		Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/mobile/bootstrap.min.css');
		Yii::app()->clientScript->registerCoreScript('jquery');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap/bootstrap.min.js');
	?>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
this is a mobile layouts
<div id="page">
	<div class="header-content">
		<div id="header" class="row" >
			<div id="logo" class="col-md-6 col-sm-3 hidden-xs " >
				<?php //echo CHtml::encode(Yii::app()->name); ?>
				<a href="/"><img src="/images/mobile/logo.png"  /></a>
			</div>			
			<div class="col-md-6 col-sm-9 col-xs-12 pull-right">
            <nav style="z-index:99999" role="navigation" class="navbar navbar-default navbg">
              <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                 <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="navbar-brand visible-xs">                       
                 <a href="/" rel="nofollow">Home</a> 
                 </div>
              </div>
              <div id="example-navbar-collapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav" id="yw0">
					<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="/travel/china-tours">CHINA TOURS</a>
						<ul class="dropdown-menu">
							<li><a href="/travel/best-china-tours">Top 10 China Tours</a></li>
							<li><a href="/travel/family-tours">China Family Tours</a></li>
							<li><a href="/travel/china-train-travel">China Train Travel</a></li>
							<li><a href="/travel/adoption">China Homeland Tours</a></li>
							<li><a href="/travel/beijing-xian-tours">Beijing Xian Tours</a></li>
							<li><a href="/travel/shanghai-xian-tours">Shanghai Xian Tours</a></li>
							<li><a href="/order/china-diy-tours">Customize China Tour</a></li>
						</ul>
					</li>
					<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="/travel/city-tours"> DESTINATIONS</a>
						<ul class="dropdown-menu">
							<li><a href="/travel/city-beijing-tours">Beijing Tours</a></li>
							<li><a href="/travel/city-shanghai-tours">Shanghai Tours</a></li>
							<li><a href="/travel/city-xian-tours">Xian Tours</a></li>
							<li><a href="/travel/city-huangshan-tours">Huangshan Tours</a></li>
							<li><a href="/travel/city-zhangjiajie-tours">Zhangjiajie Tours</a></li>
							<li><a href="/travel/city-guilin-tours">Guilin Tours</a></li>
							<li><a href="/travel/city-zhangye-tours">Zhangye Tours</a></li>
						</ul>
					</li>
					<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="/travel/adoption">HERITAGE TOURS</a>
						<ul class="dropdown-menu">
							<li><a href="/travel/adoption#provin ce_map">Provincial Reunion Tour</a></li>
							<li><a href="/travel/adoption/beijingXianChengduItinerary">2016 Group Tour</a></li>
							<li><a href="/travel/adoption/orphanageList">China Orphanage List</a></li>
							<li><a href="/travel/adoption/storyIndex">Families' Travel Stories</a></li>
							<li><a href="/travel/adoption/special-activities.html">Featured Activites</a></li>
							<li><a href="/travel/adoption/resource">Resources</a></li>
							<li><a href="/travel/adoption/adoption-customize">Creat Your Return Trip</a></li>
						</ul>
					</li>
					<li class="dropdown "><a data-toggle="dropdown" class="dropdown-toggle" href="/travel/cruise-port"> SHORE EXCURSIONS </a>
						<ul class="dropdown-menu">
							<li><a href="/travel/cruise-port/tianjin-port-excursion-5">Tianjin Port Excursion</a></li>
							<li><a href="/travel/cruise-port/shanghai-port-excursion-6">Shanghai Port Excursion</a></li>
							<li><a href="/travel/cruise-port/dalian-port-excursion-7">Dalian Port Excursion</a></li>
							<li><a href="/travel/cruise-port/xiamen-port-excursion-11">Xiamen Port Excursion</a></li>
							<li><a href="/travel/cruise-port/hong-kong-port-excursion-13">Hong Kong Port Excursion</a></li>
						</ul>
					</li>
					<li class="dropdown last"><a class="dropdown-toggle inquire-block " href="#"> <span> INQUIRE NOW</span> </a>
				</li></ul>
			
			</div>
            </nav>
          </div>			
		</div> 
		<!-- header -->		
		<div class="clear"></div>
	</div>
	<div id="header-clear">
		<div class="container clearfix">
			<header role="banner" class="clearfix">
				<div id="header-clear-wrapper">
					<div class="container clearfix"></div>
				</div>
			</header>
		</div>
	</div>
	<?php echo $content; ?>
	<div class="clear"></div>
	<div id="footer">
		<div class="foot-block01 hidden-xs">
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
				<div class="row hidden-xs">
					<div class="col-md-8 company-about"> <b>leadtochina.com</b> <span>Address: RM.504 Spring NO.9 Xinhua Xuefu Shitai Road Hefei City, Anhui, China</span><br />
						<span>Copyright © 2008. All Rights Reserved to Lead To China</span> </div>
					<div class="col-md-2 footer-links">
						<h4>COMPANY INFO</h4>
						<a href="#">About Us</a> <a href="/site/contact">Contact Us </a> <a href="#">Feedback</a> <a href="#">Newsletter</a> <a href="#">Promotion</a> <a href="#">Tours Brochure</a> </div>
					<div class="col-md-2 footer-links">
						<h4>CUSTOMER CENTER</h4>
						<a href="#">Payment Guide</a> <a href="#">Terms & Conditions</a> <a href="#">Privacy Policy</a> <a href="#">24/7 Care in China</a> <a href="#">FAQ's</a> </div>
				</div>
			</div>
			<div class="visible-xs">
     			<p class="zy_foottext2">Copyright © 2008. All Rights Reserved to Lead To China</p>
     		 </div>
		</div>
	</div>
	<!-- footer -->
</div>
<!-- page -->
</body>
</html>
