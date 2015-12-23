<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$server_host=$_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>
 <link rel="stylesheet" href="/templates/jv_news_ii/jv_menus/jv_moomenu/jv.moomenu.css" type="text/css" />
<script src="/js/jquery-1.4.js"></script>
<link rel="stylesheet" href="/templates/jv_news_ii/css/template.css.php" type="text/css" />
<link rel="stylesheet" href="/templates/jv_news_ii/css/template.css" type="text/css" />
</head>
<body id="bd" class="fs3">
<div id="header"> 
 <div class="head"> 
<div class="logo" style="height:47px; width:382px; padding: 26px 0 0 5px;"><a href="/"><img src="/new/images/logo.png" alt="" /></a></div>
<div class="logorightindex"><a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newindex/chat.jpg" alt="" /></a></div>
<?php include("menu.php");?>
</div>
</div>
<div class="clear"></div>
<div style="width:100%;"> 
	  <jdoc:include type="component" />
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

<div id="top-button">
 <!-- <a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newindex/live.png" alt=""style="margin-bottom:10px" /></a>-->
 <a href="#" onclick="window.open('http://messenger.providesupport.com/messenger/travelthing.html', 
'_blank','menubar=0,location=0,scrollbars=auto,resizable=1,status=0,width=650,height=680')"> 
<img src="http://www.leadtochina.com/images/chat-button.gif" style="border:0px" alt=""/></a>
  <a href="javascript:;" onclick="AddFavorite('http://www.leadtochina.com','LeadToChina')"><img src="/images/newindex/favorites.png" alt=""style="margin-bottom:10px" /></a>
  <a href="#header"><img src="/images/newindex/topnew.png" /></a>
</div>

<script   language="javascript">  
  function   closeall()  
  {  
    document.getElementById("livechat").style.visibility="hidden"; 
      return ;
  }  
</script>
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

</body>
</html>




