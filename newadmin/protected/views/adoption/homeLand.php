<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
<title></title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jv.moomenu.css" type="text/css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/adoption.css" type="text/css" />

<style type="text/css">
<!--
#myFocus{ width:245px; height:169px; float:left; margin-top:15px;}
-->
</style>
</head>
<body id="bd" class="fs3">
<div id="header">
  <div class="head">
		
  </div>
</div>
<div class="clear"></div>
<!-- contentnew start  -->
<div class="contentnew">
  <!-- leftspace start  -->
  <div class="leftspace"> 
     <!-- content start  -->
     <div id="content">
        <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Tours</a> Homeland Tours</div>
        <!-- adoption-left start  -->
		<?php $this->renderPartial('left');?>
        <!-- adoption-left end  -->
        
        <!-- adoption-right start  -->
        <div id="adoption-right">
            <!-- text start  -->
            <div class="text">
               <h2><?php echo $homeLandArticle->title;?></h2>
               <?php echo $homeLandArticle->description;?>
            </div>
            <!-- text end  -->
            <div class="picture"><img src="/images/adoption/pic.jpg" alt="" /></div>
            <!-- list2 start  -->
            <div class="list2">              
               <?php $this->renderPartial('allProvince');?>
            </div>
            <!-- list2 end  -->
          <?php $this->renderPartial('noteBook');?>
        </div>
        <!-- adoption-right end  -->
     </div>
     <!-- content end  -->
  </div>
  <!-- leftspace end  -->
</div>
<!-- contentnew end  -->
<script type="text/javascript">
var fb_param = {};
fb_param.pixel_id = '6008814570501';
fb_param.value = '0.00';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6008814570501&amp;value=0" /></noscript>
</body>
</html>
