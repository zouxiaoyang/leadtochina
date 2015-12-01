<link rel="stylesheet" type="text/css" href="/travel/css/muslim.css" />
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('muslimTour/index')?>">Muslim Tours</a> China Muslim Tour Package</div>
<div id="left-muslim">
   <?php $this->renderPartial("/muslimTour/_leftMenu");?>
   <?php //$this->renderPartial('/message/_hotelMessageForm',array('model'=>$message));?>
</div>

<div id="right-muslim">
   <div class="text">
       <h2>China Muslim Tour Packages</h2>
       <p>Taking a Muslim Tour in China is a easy way to understand the Muslim culture. Besides, tour with HFV Muslim experts to enjoy the well-known Muslim sites and share the knowledge of Islam, dinning features and other aspect of Muslim life, you will have an in-depth understanding about the Muslim, as well as the ordinary locals real life in China with our China Muslim Tours.</p>
	   <br/>
	   <p>HFV China Muslim Tour Packages are carefully arranged for travelers to visit the ancient mosques, taste delicious Muslim food and explore the lifestyle there too. Here listed below are some typical China Muslim Tours in different themes.</p>
   </div>
   <div class="category">
   <?php $chinaMuslimTourCategory=MuslimPackages::$chinaMuslimTourCategory;
   		 unset($chinaMuslimTourCategory[0]);?>
   <?php foreach ($chinaMuslimTourCategory as $k=>$v):?>
       <ul id="chinamuslim<?php echo $k;?>">
          <li class="pic"><a><img src="/images/muslim/chinaMuslimTour0<?php echo $k;?>.jpg" alt="<?php echo $v;?>" /></a></li>
          <li class="name"><a><?php echo $v;?></a><?php echo MuslimPackages::$chinaMuslimTourDes[$k];?></li>
          <li>
             <ol>
             <?php foreach ((array)$muslimChinaTourList[$k] as $k1=>$v1):?>
             <?php if ($v1['url']) $url = $v1['url']; else $url = "/index.php?option=com_showpc&view=default&Itemid=137&pcid=" . $v1['id'];?>
                 <li><a href="<?php echo $url;?>" title="<?php echo $v1['name'];?>" target="_blank"><?php echo $v1['name'];?></a> <span>From <strong><?php echo SiteUtils::getCurrencyPrice($v1['price']);?></strong> p/p</span></li>
			 <?php endforeach;?>
             </ol>
          </li>
       </ul>
   <?php endforeach;?>
   </div>
</div>
<script>
	$(document).ready(function(){
		$("#chinamuslim1 li ol").find("li:gt(4)").hide();
		$("#chinamuslim1 li ol").append("<span id='showMore'><b style='cursor:pointer;width:265px;margin-top:5px;float:right;color:red;'>Show More Classical China Muslim Tour</b></span>");
	});
	$("#showMore").live('click',function(){
		$("#chinamuslim1 li ol").find("li:gt(4)").show();
		$(this).remove();
		$("#chinamuslim1 li ol").append("<span id='hideMore'><b style='cursor:pointer;width:260px;margin-top:5px;float:right;color:red;'>Hide More Classical China Muslim Tour</b></span>");
	});
	$("#hideMore").live('click',function(){
		$("#chinamuslim1 li ol").find("li:gt(4)").hide();
		$("#chinamuslim1 li ol").append("<span id='showMore'><b style='cursor:pointer;width:265px;margin-top:5px;float:right;color:red;'>Show More Classical China Muslim Tour</b></span>");
		$(this).remove();
	});
</script>
