<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
include_once (dirname(__FILE__).DS.'jv_tools.php');
$server_host=$_SERVER['HTTP_HOST'];
$host_arr=explode(".",$server_host);
if(strpos($server_host,"onlinechinatours")!==false){
	$logo_url="/templates/jv_news_ii/images/black/logo.png";
}else{
	if(count($host_arr)==3){	
		$logo_url="/templates/jv_news_ii/images/black/logo.png";
	}elseif(count($host_arr)==2){
		$logo_url="/templates/jv_news_ii/images/black/logo.png";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
$option=$_REQUEST['option'];
if($option=="com_chinacityguide" OR $option=="com_searchcity" OR $_SERVER['REQUEST_URI']=='/index.php?option=com_cruise&view=cruisecalendar&Itemid=66'){
$headerstuff=$this->getHeadData();
//var_dump($headerstuff);
//exit;
foreach($headerstuff['scripts'] as $key=>$value){
	if($key=="/media/system/js/mootools.js"){
		unset($headerstuff['scripts']['/media/system/js/mootools.js']);
	}
} 
foreach($headerstuff['styleSheets'] as $key=>$value){
	if($key=="/templates/jv_news_ii/css/default.css"){
		unset($headerstuff['styleSheets'][$key]);
	}
} 
$this->setHeadData($headerstuff);
}
?>
<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>
<link rel="stylesheet" href="<?php echo $jvTools->baseurl() ; ?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $jvTools->baseurl() ; ?>templates/system/css/general.css" type="text/css" />
	<?php //if($gzip == "true") : ?>
    <link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css.php" type="text/css" />
	<?php // else: ?>
    <link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/template.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/typo.css" type="text/css" />
	<?php //endif; ?>
	<link href="<?php echo $jvTools->parse_jvcolor_cookie(); ?>" rel="stylesheet" type="text/css" />
	<script src="/js/jquery-1.4.js"></script>
	<script type="text/javascript">
		var baseurl = "<?php echo $jvTools->baseurl() ; ?>";
		var jvpathcolor = '<?php echo $jvTools->templateurl(); ?>css/colors/';
		var tmplurl = '<?php echo $jvTools->templateurl();?>';
		var CurrentFontSize = parseInt('<?php echo $jvTools->getParam('jv_font');?>');
    jQuery = jQuery.noConflict();
	</script>
	
	<!--[if lte IE 6]>
	<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>css/ie6.css" type="text/css" />
	<script type="text/javascript" src="<?php echo $jvTools->templateurl() ?>js/ie_png.js"></script>
	<script type="text/javascript">
	window.addEvent ('load', function() {
	   ie_png.fix('.png');
	});
	</script>
	<![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="<?php echo $jvTools->templateurl(); ?>/css/ie7.css" type="text/css" />
	<![endif]-->
  
  <!--[if lte IE 6]>
<style type="text/css">
table {border-collapse:collapse;margin:0; padding:0;}
.menu ul li a.hide, .menu ul li a:visited.hide {display:none;}
.menu ul li a:hover { background:url(images/newindex/menuabg.jpg) repeat-x; color:#000; display:block;}
.menu ul li a:hover ul {display:block; position:absolute; top:48px; left:0; width:158px; background:#fbe5cd; padding:5px 9px 12px 9px; overflow:hidden;}
.menu ul li ul li{ width:155px; height:28px; border-bottom:1px dashed #d0b495; padding-left:3px;background:none;}
.menu ul li a:hover ul li a {color:#3f3f3f; font-size:12px; text-align:left; margin:0px; padding:0px; line-height:28px; background:none; display:block; height:28px; padding-left:10px; background:url(images/newindex/menua1.jpg) left center no-repeat; font-family:Arial, Helvetica, sans-serif; }
.menu ul li a:hover ul li a:hover {color:#000; background:url(images/newindex/menua1.jpg) left center no-repeat;}
</style>
<![endif]--> 
</head>
<body id="bd" class="fs<?php echo $jvTools->getParam('jv_font'); ?> <?php echo $jvTools->getParam('jv_display'); ?> <?php echo $jvTools->getParam('jv_display_style'); ?>">
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
	<?php if (($menustyle == 'split' || $menustyle == 'submoo') && ($menu->hasChild(1))): ?>
	<div id="jv-submainmenu" class="clearfix">
		<div class="jv-wrapper" >
			<div id="jv-submainmenu-inner">
				<?php $menu->show(1,6); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
			
	<?php if($this->countModules('slideshow')) : ?>
	<div id="jv-userwrap1" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-userwrap1-inner" >
				<jdoc:include type="modules" name="slideshow" />
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php if($this->countModules('top')) : ?>
	<div id="jv-userwrap2" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-top" class="clearfix">
				 <jdoc:include type="modules" name="top" style="jvxhtml"  />
			</div>		
		</div>	
	</div>
	<?php endif; ?>
        
	<?php
		$spotlight = array ('col1','col2','col3','maintop');
		$botsl1 = $jvTools->calSpotlight($spotlight,$jvTools->isOP()?100:99,'%');
		if( $botsl1 ) :
	?>
	<div id="jv-column" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-column-inner">
            <div id="maintop">
            <jdoc:include type="modules" name="maintop" style="jvxhtml" />
            </div>
				<?php if($this->countModules('col1')) : ?>
				<div id="jv-col1" class="jv-user jv-box<?php echo $botsl1['col1']['class']; ?>">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="col1" style="jvxhtml" />
					</div>
				</div>
				<?php endif; ?>
				
				<?php if($this->countModules('col2')) : ?>
				<div id="jv-col2" class="jv-user jv-box<?php echo $botsl1['col2']['class']; ?>">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="col2" style="jvxhtml" />
					</div>
				</div>
				<?php endif; ?>
				<?php if($this->countModules('col3')) : ?>
				<div id="jv-col3" class="jv-user jv-box<?php echo $botsl1['col3']['class']; ?>">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="col3" style="jvxhtml" />
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php
	$spotlight = array ('user1','user2','user3','user4');
	$consl = $jvTools->calSpotlight($spotlight,$jvTools->isOP()?100:100,'%');
	if( $consl) :
	?>
	<div id="jv-userwrap3" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-userwrap3-inner">
				<?php if($this->countModules('user1')) : ?>
				<div id="jv-user1" class="jv-user jv-box<?php echo $consl['user1']['class']; ?>" style="width: <?php echo $consl['user1']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user1" style="jvxhtml" />
					</div>
				</div>
				<?php endif; ?>
				
				<?php if($this->countModules('user2')) : ?>
				<div id="jv-user2" class="jv-user jv-box<?php echo $consl['user2']['class']; ?>" style="width: <?php echo $consl['user2']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user2" style="jvxhtml" />
					</div>
				</div>
				<?php endif; ?>
				
				<?php if($this->countModules('user3')) : ?>
				<div id="jv-user3" class="jv-user jv-box<?php echo $consl['user3']['class']; ?>" style="width: <?php echo $consl['user3']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user3" style="jvxhtml" />
					</div>
				</div>
				<?php endif; ?>
				
				<?php if($this->countModules('user4')) : ?>
				<div id="jv-user4" class="jv-user jv-box<?php echo $consl['user4']['class']; ?>" style="width: <?php echo $consl['user4']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user4" style="jvxhtml" />
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>  
	
	<?php if($this->countModules('breadcrumb')) : ?>
	<div id="jv-breadcrumb" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-breadcrumb-inner">
				<strong><?php echo JText::_('You are here:')?></strong> <jdoc:include type="modules" name="breadcrumb" />
			</div>
		</div>
	</div>
	<?php endif; ?>
	

	<?php if($this->countModules('pagedes')) : ?>
	<div id="jv-breadcrumb" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-breadcrumb-inner">
				 <jdoc:include type="modules" name="pagedes" />
			</div>
		</div>
	</div>
	<?php endif; ?>	

	<!-- MAINBODY -->
	<div id="jv-mainbody" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-mainbody-inner">

				<!-- CONTAINER -->
				<div id="jv-container" class="clearfix">
					<div id="jv-inside<?php echo $jv_width;?>">
                    
                    
                         
						<div id="jv-left-content">
                                 <?php if($this->countModules('lefttop')) : ?>
                        <div id="main-left-top">
                        <jdoc:include type="modules" name="lefttop" style="xhtml" />
                         </div>
                         <?php endif; ?>
							<?php if($jv_left) : ?>
							<div id="jv-left"><jdoc:include type="modules" name="left" style="jvxhtml" /></div>
							<?php endif; ?>
							
							<div id="jv-content">
								<div id="jv-content-inner">


									<?php if($this->countModules('user5')) : ?>
										<div id="jv-user5" class="clearfix">
											<jdoc:include type="modules" name="user5" style="jvxhtml" />
										</div>
									<?php endif; ?>
									
									<div id="jv-component" class="clearfix">
										<jdoc:include type="message" />
										<jdoc:include type="component" />
									</div>
		
								   <?php if($this->countModules('user6')) : ?>
									   <div id="jv-user6" class="clearfix">
											<jdoc:include type="modules" name="user6" style="jvxhtml" />
									   </div>
									<?php endif; ?>
									
									
									<?php
										$spotlight = array ('col4','col5','col6');
										$botsl1 = $jvTools->calSpotlight($spotlight,$jvTools->isOP()?100:99,'%');
										if( $botsl1 ) :
									?>
									<div id="jv-userwrap4" class="clearfix">
										<div id="jv-userwrap4-inner">
											<?php if($this->countModules('col4')) : ?>
											<div id="jv-col4" class="jv-user jv-box<?php echo $botsl1['col4']['class']; ?>" style="width: <?php echo $botsl1['col4']['width']; ?>;">
												<div class="jv-box-inside">
													<jdoc:include type="modules" name="col4" style="jvxhtml" />
												</div>
											</div>
											<?php endif; ?>
											
											<?php if($this->countModules('col5')) : ?>
											<div id="jv-col5" class="jv-user jv-box<?php echo $botsl1['col5']['class']; ?>" style="width: <?php echo $botsl1['col5']['width']; ?>;">
												<div class="jv-box-inside">
													<jdoc:include type="modules" name="col5" style="jvxhtml" />
												</div>
											</div>
											<?php endif; ?>
											<?php if($this->countModules('col6')) : ?>
											<div id="jv-col6" class="jv-user jv-box<?php echo $botsl1['col6']['class']; ?>" style="width: <?php echo $botsl1['col6']['width']; ?>;">
												<div class="jv-box-inside">
													<jdoc:include type="modules" name="col6" style="jvxhtml" />
												</div>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						
            <?php if($jv_right && JRequest::getVar('pg_category_catid')==77)://beijing/tours templates right?>
			<?php include_once "city_tours/beijing.php" ?>
              
						<?php elseif($jv_right) : ?>
						<div id="jv-right">
							<div id="jv-right-top"><jdoc:include type="modules" name="right" style="jvxhtml" /></div>
							<?php
								$spotlight = array ('right_col1','right_col2');
								$botsl2 = $jvTools->calSpotlight($spotlight,$jvTools->isOP()?100:99, '%');
								if( $botsl2 ) :
							?>
							<div id="jv-right-col" class="clearfix">
								<?php if($this->countModules('right_col1')): ?>
									<div id="jv-right-col1" class="jv-user jv-box<?php echo $botsl2['right_col1']['class']; ?>" style="width:<?php echo $botsl2['right_col1']['width']; ?>;">
										<div class="jv-box-inside">
											<jdoc:include type="modules" name="right_col1" style="jvxhtml" />
										</div>
									</div>
								<?php endif; ?>
								<?php if($this->countModules('right_col2')) : ?>
									<div id="jv-right-col2" class="jv-user jv-box<?php echo $botsl2['right_col2']['class']; ?>" style="width:<?php echo $botsl2['right_col2']['width']; ?>;">
										<div class="jv-box-inside">
											<jdoc:include type="modules" name="right_col2" style="jvxhtml" />
										</div>
									</div>
								<?php endif; ?>
							</div>
							<?php endif; ?>
							<div id="jv-right-bottom"><jdoc:include type="modules" name="right_bottom" style="jvxhtml" /></div>
						</div>
						<?php endif; ?>

					</div>
				</div>
				<!-- END CONTAINER -->

            </div>
        </div>
    </div>
	<!-- END MAINBODY -->

	<?php
		$spotlight = array ('user7','user8','user9','user10');
		$botsl2 = $jvTools->calSpotlight($spotlight,$jvTools->isOP()?100:99, '%');
		if( $botsl2 ) :
	?>
	<div id="jv-userwrap5" class="clearfix">
		<div class="jv-wrapper">
			<div id="jv-userwrap5-inner">
			<?php if($this->countModules('user7')): ?>
				<div id="jv-user7" class="jv-user jv-box<?php echo $botsl2['user7']['class']; ?>" style="width:<?php echo $botsl2['user7']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user7" style="jvxhtml" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($this->countModules('user8')) : ?>
				<div id="jv-user8" class="jv-user jv-box<?php echo $botsl2['user8']['class']; ?>" style="width:<?php echo $botsl2['user8']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user8" style="jvxhtml" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($this->countModules('user9')) : ?>
				<div id="jv-user9" class="jv-user jv-box<?php echo $botsl2['user9']['class']; ?>" style="width:<?php echo $botsl2['user9']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user9" style="jvxhtml" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($this->countModules('user10')) : ?>
				<div id="jv-user10" class="jv-user jv-box<?php echo $botsl2['user10']['class']; ?>" style="width:<?php echo $botsl2['user10']['width']; ?>;">
					<div class="jv-box-inside">
						<jdoc:include type="modules" name="user10" style="jvxhtml" />
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
</div>
<div class="clear"></div>
<?php include("footer.php");?>
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

<script   language="javascript">  
  function   closeall()  
  {  
	  document.getElementById("livechat").style.visibility="hidden"; 
	  return ;
  }  
</script>
<!-- </div> -->
</body>
</html>
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61919467-1', 'auto');
  ga('send', 'pageview');

</script>
