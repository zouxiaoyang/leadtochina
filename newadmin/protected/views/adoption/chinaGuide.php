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
        <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> China Guide</div>
		<!-- adoption-left start  -->
 		<?php $this->renderPartial('left');?>
        <!-- adoption-left end  -->
        <?php 
        	$chinaGuideArr=array();
        	foreach ($chinaGuideArticle as $k=>$v){
        		if(trim($v->title)=='China Guide'){
        			$chinaGuideArr['index']=$v;
        		}elseif(trim($v->title)=='China Visa'){
        			$chinaGuideArr['visa']=$v;
        		}elseif(trim($v->title)=='China Chronology'){
        			$chinaGuideArr['chronology']=$v;
        		}elseif(trim($v->title)=='Chinese Holidays'){
        			$chinaGuideArr['holidays']=$v;
        		}elseif(trim($v->title)=='China Food Guide'){
        			$chinaGuideArr['food']=$v;
        		}elseif(trim($v->title)=='Travel & Shopping Tips'){
        			$chinaGuideArr['shopping']=$v;
        		}elseif(trim($v->title)=='Travel Preparations'){
        			$chinaGuideArr['preparations']=$v;
        		}elseif(trim($v->title)=='China Children Welfare Centers'){
        			$chinaGuideArr['children']=$v;
        		}elseif(trim($v->title)=='Attractions for Kids'){
        			$chinaGuideArr['attractions']=$v;
        		}elseif(trim($v->title)=='Doc Required'){
        			$chinaGuideArr['docrequired']=$v;
        		}
        	}
        ?>
        <!-- adoption-right start  -->
        <div id="adoption-right">
            <!-- china-guide start  -->
            <div class="china-guide">
                <!-- guide start  -->
                <div class="guide">
                     <!-- text3 start  -->
                     <div class="text3">                                        
                       <h2><?php echo $chinaGuideArr['index']->title;?></h2>
                       <?php echo $chinaGuideArr['index']->description;?>                     
                     </div>
                     <!-- text3 end  -->
                </div>
                <!-- guide end  -->
            </div>
            <!-- china-guide end  -->
            
            <!-- culture start  -->
            <div id="culture">
               <h2>China Culture  &amp; Attractions</h2>
               <ul>
                  <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['holidays']->id));?>"><img src="/images/adoption/holiday.jpg" alt="" /> <span>Chinese Holidays</span></a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['food']->id));?>"><img src="/images/adoption/food.jpg" alt="" /> <span>China Food Guide</span></a></li>
                  <li style="margin-right:0px;"><a href="/climate/"><img src="/images/adoption/temperature.jpg" alt="" /> <span>Temperature Guide</span></a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['chronology']->id));?>"><img src="/images/adoption/chronology.jpg" alt="" /> <span>Chronology</span></a></li>
                  <li><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['attractions']->id));?>"><img src="/images/adoption/kids.jpg" alt="" /> <span>Attractions For Kids</span></a></li>
               </ul>
            </div>
            <!-- culture end  -->
            
            <!-- travel start  -->
            <div class="travel">
               <h2>Travel to China</h2>
               <ul>
                   <li><img src="/images/adoption/visa.jpg" alt="" /> <a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['visa']->id));?>"><span>China Visa</span></a><a href="/china-maps/"><span>China Map</span></a></li>
                   <li><img src="/images/adoption/house.jpg" alt="" /> <a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['preparations']->id));?>"><span>Travel Preparations</span></a><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>128));?>"><span>Welfare House</span></a></li>
                   <li style="margin-right:0px;"><img src="/images/adoption/shopping.jpg" alt="" /> <a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['shopping']->id));?>"><span>Travel &amp;  Shopping Tips</span></a><a href="<?php echo Yii::app()->createUrl('adoption/chinaguideview', array('id'=>$chinaGuideArr['docrequired']->id));?>"><span>Travel Docs Required</span></a></li>
               </ul>
            </div>
            <!-- travel end  -->
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
