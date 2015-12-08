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
        <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('adoption/index');?>">China Adoption Tours</a> Theme Tours</div>
        <!-- adoption-left start  -->
		<?php $this->renderPartial('left');?>
        <!-- adoption-left end  -->
        
        <!-- adoption-right start  -->
        <div id="adoption-right">
            <!-- text start  -->
            <div class="text">
            <?php foreach ($themeTourArticle as $k=>$v):?>
            	<?php if($v->title=="Theme Tours"):?>
               <h2><?php echo $v->title;?></h2>
               	   <?php echo $v->description;?>
            	<?php endif;?>
            <?php endforeach;?>
            </div>
            <!-- text end  -->
            
            <!-- text2 start  -->
            <div class="text2">
               <img src="/images/adoption/pic3.jpg" alt="" />
               <p><span><a href="<?php echo Yii::app()->createUrl('adoption/tipstravel')?>">Tips for touring china with kids</a></span><br />
               Traveling with children may be more challenging since children are inherently vivacious, mischievous, active and easily bored. Needless to say infants or toddlers, need much more special and attentive care, placing much responsibility on adults. So sometimes a trip with kids can be an interesting test of patience and preparedness. But never worry about this. China is always glad to extend a welcome to your lovely children. With the right preparation, travel with kids can bring you a happy and enjoyable experience. </p>
            </div>
            <!-- text2 end  -->
            
            <!-- recommend-menu start  -->
            <div class="recommend-menu">
                <ul>
                   <li class="dq">Recommended Things to do</li>
                   <li>Recommended China Tours</li>
                </ul>
            </div>
            <!-- recommend-menu end  -->
            <!-- things start  -->
            <div class="things">
               <?php foreach ($themeTourArticle as $k=>$v):?>
               		<?php if($v->title=="Recommended Things to Do"):?>
               		<?php echo $v->description;?>
               		<?php endif;?>
               <?php endforeach;?>            
            </div>
            <!-- things end  -->
            <!-- tours start  -->
            <div class="tours" style="display:none;">
            <?php foreach (AdoptionPackage::$theme_category['description'] as $k=>$v):?>   
               <div class="title1"><a href="#"><?php echo $theme_category['title'][$k];?></a></div> 
               <ul>
                  <li class="pic"><a href="#"><img src="/images/adoption/recommendpic_0<?php echo $k;?>.jpg" alt="" /></a></li>
                  <li>
                      <ol>
                          <li class="describe"><?php echo $v;?></li>
                          <?php foreach ((array)$themePackage[$k] as $v2):?>
                          <?php if ($v2['url']) $url = $v2['url']; else $url = "/index.php?option=com_showpc&view=default&Itemid=137&pcid=" . $v2['id'];
					        	$price_array=unserialize($v2['price_serialize']);
					        ?>
                          <li><a href="<?php echo $url;?>" title="<?php echo $v2['name'];?>"><?php echo substr($v2['name'],0,45);?>...</a><span>From <strong>$<?php echo $price_array[1]?></strong>p/p</span></li>
                          <?php endforeach;?>
                      </ol>
                  </li>
               </ul>                  
              <?php endforeach;?>       
            </div>
            <!-- tours end  -->            
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
<script>
$('.recommend-menu').find('ul>li').click(function(){
	$('.recommend-menu').find('ul>li').attr('class','');
	$(this).attr('class','dq');
	if($(this).index()=='0'){
		$('.things').show();
		$('.tours').hide();
	}else{
		$('.things').hide();
		$('.tours').show();
	}
});
</script>
