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
        <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Tours</a> <a href="<?php echo Yii::app()->createUrl('adoption/homeland');?>">Homeland Tours</a> <?php echo $homeLandView->title;?></div>
        <!-- adoption-left start  -->
		<?php $this->renderPartial('left');?>
        <!-- adoption-left end  -->
        
        <!-- adoption-right start  -->
        <div id="adoption-right">
            <!-- text1 start  -->
            <div class="text1">
               <h2><?php echo $homeLandView->title;?></h2>
               <h3 style="display:none;">
                 <span>Last Updated on Monday ,16 May 2011 09:14</span>
		             <a rel="nofollow" href="#"><img alt="PDF" src="/images/M_images/pdf_button.png"></a>
                 <a rel="nofollow" href="#"><img alt="Print" src="/images/M_images/printButton.png"></a>
                 <a href="#"><img alt="E-mail" src="/images/M_images/emailButton.png"></a>
               </h3>
               <h3 id="rate_deny" style="color:red;display:none;"><b>You already rated this Article today!</b></h3>
               <div class="clear"></div>
               <table border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                     <td width="65%">User Rating:
                     <?php if($homeLandView->rate_time==0):?>
                     <img id="rate_star" src="/images/M_images/rating_star0.png">
                     <?php else:?>
                     <img id="rate_star" src="/images/M_images/rating_star<?php echo floor($homeLandView->rate_value/$homeLandView->rate_time);?>.png">
                     <?php endif;?>
                      / <b id="rate_time"><?php if($homeLandView->rate_time==0) echo "0"; else echo $homeLandView->rate_time;?></b></td>
                     <td width="35%"> <div class="addthis_toolbox addthis_default_style"> <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4d3cdb303668116a" class="addthis_button_compact">Share&nbsp;|</a> <a class="addthis_button_preferred_1"></a> <a class="addthis_button_preferred_2"></a> <a class="addthis_button_preferred_3"></a> <a class="addthis_button_preferred_4"></a></div>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d3cdb303668116a"></script>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">Poor
					<input type="radio" value="1" name="rate_value" alt="vote 1 star"/>
					<input type="radio" value="2" name="rate_value" alt="vote 2 star"/>
					<input type="radio" value="3" name="rate_value" alt="vote 3 star"/>
					<input type="radio" value="4" name="rate_value" alt="vote 4 star"/>
					<input type="radio" checked="checked" value="5" name="rate_value" alt="vote 5 star"/>
					Best 
					<input class="button" type="button" name="submit_vote" id="submit_vote"/></td>
                  </tr>
               </table>
               <div class="clear"></div>
              <?php echo $homeLandView->description;?> 
            </div>
            <!-- text1 end  -->

            <!-- anhui2 start  -->
            <div class="anhui2">
               <ul>
               <?php if ($packageProvince->url) $url = $packageProvince['url']; else $url = "/index.php?option=com_showpc&view=default&Itemid=137&pcid=" . $packageProvince['id'];?>
                  <li style="width:84px;"><a href="<?php echo Yii::app()->createUrl('adoption/homeLandView',array('id'=>$provinceArticle[1]->id,'provinceid'=>$provinceid));?>"><img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH . $provinceArticle[1]->image, '84x100');?>" alt="" /> <h2><?php echo $provinceArticle[1]->title;?></h2></a></li>
                  <li style="width:89px;"><a href="<?php echo Yii::app()->createUrl('adoption/homeLandView',array('id'=>$provinceArticle[2]->id,'provinceid'=>$provinceid));?>"><h2 style="color:#c71005;"><?php echo $provinceArticle[2]->title;?></h2> <img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH . $provinceArticle[2]->image, '89x90');?>" alt="" /></a></li>
                  <li style="width:95px;"><a href="<?php echo Yii::app()->createUrl('adoption/homeLandView',array('id'=>$provinceArticle[3]->id,'provinceid'=>$provinceid));?>"><img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH . $provinceArticle[3]->image, '88x94');?>" alt="" /> <h2 style="color:#0d1731;"><?php echo $provinceArticle[3]->title;?></h2></a></li>
                  <li style="width:147px;"><a href="<?php echo Yii::app()->createUrl('adoption/homeLandView',array('id'=>$provinceArticle[4]->id,'provinceid'=>$provinceid));?>"><h2 style="color:#b78500;"><?php echo $provinceArticle[4]->title;?></h2> <img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH . $provinceArticle[4]->image, '147x80');?>" alt="" /></a></li>
                  <li style="width:180px;"><a href="<?php echo $url;?>"><img src="<?php echo ImageUtils::getThumbnail(AdoptionContent::UPLOAD_PATH . $provinceArticle[5]->image, '120x60');?>" width="100" height="80" /> <h2 style="color:#205ac9;"><?php echo Province::model()->findByPk($provinceid)->name;?> Reunion Tour</h2></a></li>
               </ul>
            </div>
            <!-- anhui2 end  -->
            
            <!-- list3 start  -->
            <div class="list3">
              <?php $this->renderPartial('allProvince');?>
            </div>
            <!-- list3 end  -->
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
<script>
$('#submit_vote').click(function(){
	var articleId=<?php echo $homeLandView->id;?>;
	var rate_value=$("input[name='rate_value']:checked").val();
	$.get("<?php echo Yii::app()->createUrl('adoption/rate')?>",{rateValue:rate_value,articleId:articleId},function(ret){
			if(ret=='cookieDeny'){
				$('#rate_deny').show();
			}else{
				var retArr=ret.split('-');
				var retValue=Math.ceil(retArr[1]/retArr[0]);		
				$('#rate_star').attr("src","/images/M_images/rating_star"+retValue+".png");			
				$('#rate_time').html(retArr[0]);
			}
		});
});
</script>
