<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinaGuide.css'); ?>
<style type="text/css">
<!--
#content{ width:961px; height:auto; padding:0px;}
-->
</style>
<div id="menu-guide"><strong>You are here: </strong>
	<a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">China Guide</a>
	<a href="<?php echo Yii::app()->createUrl('chinaGuide/cityInfo', array('cityname'=>$_GET['cityname']));?>"><?php echo $cityInfo->name;?></a>
	<?php echo $cityInfo->name . ' ' . $_GET['title'];?>
</div>

<!--  guide start  -->
<div id="guide">
    <!--  guide-left start  -->
    <div id="guide-left">
       <div class="text">
          <h1><?php echo($guideContent->title);?></h1>
			   	<?php echo($guideContent->introtext);?>
			  	<?php echo($guideContent->fulltext);?>
       </div>
    </div>
    <!--  guide-left end  -->
    
    <!--  guide-right start  -->
    <div id="guide-right">
        <!--  right1 start  -->
        <div class="right1">
          <?php $this->renderPartial('/common/cityGuide',array('cityName'=>$cityInfo->name,'cityId'=>$cityInfo->id));?>
        </div>
        <!--  right1 end  -->
        <!--  right1 start  -->
       	<?php echo $this->renderPartial('/common/weather', array('cityInfo'=>$cityInfo));?> 
        <!--  right1 end  -->
        <!-- <div class="rightbottom"></div> -->
        <div class="right4"><?php echo $this->renderPartial('/common/customizeTour');?></div>
    </div>
    <!--  guide-right end  -->
</div>
<!--  guide end  -->

<!-- Google Code for HOME Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "m02eCNre_AIQ3o7h3QM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1001932638/?value=0&amp;label=m02eCNre_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
