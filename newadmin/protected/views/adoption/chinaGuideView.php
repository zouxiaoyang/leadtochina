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
        <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/chinaguide');?>">China Guide</a> <?php echo $chinaGuideDetail->title;?></div>
		<!-- adoption-left start  -->
 		<?php $this->renderPartial('left');?>
        <!-- adoption-left end  -->
        
        <!-- adoption-right start  -->
        <div id="adoption-right">
            <!-- china-guide start  -->
            <div class="text">              
                 <h2><?php echo $chinaGuideDetail->title;?></h2>
                 <?php echo $chinaGuideDetail->description;?>     
            </div>
            <!-- china-guide end  -->
  
            <?php $this->renderPartial('noteBook');?>
        </div>
        <!-- adoption-right end  -->
     </div>
     <!-- content end  -->
  </div>
  <!-- leftspace end  -->
</div>
<!-- contentnew end  -->
</body>
</html>
