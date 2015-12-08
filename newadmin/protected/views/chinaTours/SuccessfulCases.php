<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/studenttour.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/js/jqueryUi/jquery.ui.core.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/koala.min.1.5.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css');
$this->setPageTitle("China Student Tours Successful Cases, China Student Tours Feedback");
Yii::app()->clientScript->registerMetaTag('keywords','Successful Cases of School Trips to China, Successful Cases of Educational Tours to China');
Yii::app()->clientScript->registerMetaTag('description','Here are some selected successful cases of China student tours of Lead to China for your reference.'); ?>
<style type="text/css">
#content{ background:#eee; margin:0; padding-top:5px;}
</style>
<div id="content">
 <div class="stu_content">
  <div class="stu_menu-tours">
  <strong>You are here:</strong>  <a href="/">Home</a>  <a href="/travel/china-tours">China Tours</a>  <a href="/travel/china-student-tours">China Student Tours</a>  Successful Cases</div>
  <div class="clear"></div>

  <?php require_once('_stu_focus.php');?>
  
  <div class="stu_menu">
   <ul>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/studentTours');?>">SUGGESTED ITINERARIES</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/culturalExchange');?>">CULTURAL ACTIVITIES</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/cooperation');?>">COOPERATION</a></li>
    <li class="dq"><a href="">SUCCESSFUL CASES</a></li>
    <li><a href="<?php echo Yii::app()->createUrl('chinaTours/WhyUs');?>">WHY US</a></li>
   </ul>
  </div>
  <div class="clear"></div>
  <div class="stu_midtxt">
   <div class="stu_midtxt_lef">
    <p class="stu_midtxt_lef1">SUCCESSFUL CASES</p>
    <p class="stu_midtxt_lef2">Based on long and profound history, splendid and manifold culture, fascinating customs, beautiful and diverse landscapes, China has increasingly become a popular destination for student tours. Our tours are well-designed for students to learn the real China. These remarkable, life-changing class trips contribute to the cultural, social, and educational development of each student. Here are some selected student tour cases for your reference. 

</p>
   </div>
   <div class="stu_midtxt_rig">
    <p><img src="/images/studenttour/stu_pata.jpg" /></p>
    <p><a href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_Tours_Beijing_Private_One_day_Tour-Hefei_Anhui.html" target="_blank"><img src="/images/studenttour/stu_trip.jpg" /></a></p>
    <p><img src="/images/studenttour/stu_cnta.jpg" /></p>
   </div>
  </div>
  <div class="clear"></div>
  <div class="stu_midcase">
    <div id="tab" class="g_tab">
          <ul class="tabTit g_tabbar">
            <li class="current" onclick="edit_port(this,0)">CUSTOMERS GALLERY<span class="downArr"></span></li>
            <li onclick="edit_port(this,1)">CUSTOMERS VIDEOS<span class="downArr"></span></li>
          </ul>
          <div class="clear"></div>
<div class="indexmaindiv" id="indexmaindiv_0">
 <div class="indexmaindiv1 clearfix" >
  <div class="stylesgoleft" id="goleft"></div>
   <div class="maindiv1 " id="maindiv1" style="margin-top:10px;">
	 <ul id="count1">
	 <?php if(count($img_list)>0){foreach($img_list as $k1=>$r1): ;?>
	  <li><img src="<?php echo ImageUtils::getThumbnail(ImgVideo::UPLOAD_PATH.$r1['file_name'], '260x175');?>" /></li>
     <?php endforeach;}?>
     </ul>
    </div>
    <div class="stylesgoright" id="goright"></div>
  </div>
</div>
<div class="indexmaindiv" id="indexmaindiv_1" style=" display:none">
 <div class="indexmaindiv1 clearfix" >
  <div class="stylesgoleft" id="goleft"></div>
   <div class="maindiv1 " id="maindiv1">
	 <ul id="videoLi">
	 <?php if(count($video_list)>0){foreach($video_list as $k2=>$r2):?>
	  <li> <a target="_blank" class="videoPic" href="<?php echo $r2['http_url'];?>"> <img src="<?php echo ImageUtils::getThumbnail(ImgVideo::UPLOAD_PATH.$r2['file_name'], '260x175');?>" /> <span class="playBtn"></span> <span class="videoTime"><?=$r2['duration']?></span> </a></li>
     <?php endforeach;}?>
     </ul>
    </div>
    <div class="stylesgoright" id="goright"></div>
  </div>
</div>          
        </div>
  
  </div>
  <div class="clear"></div>
  <div class="stu_midmail">
  <div class="fbList">
<?php if($data):?>
    <?php foreach($data as $v):?>
    	<?php 
		$pics = array();
    	$sql = "select * from {{reviews_pic}} where published=1 and tid='{$v['id']}'";
        $pics = Yii::app()->db->createCommand($sql)->queryAll();?>
<div class="fbR thisYear">
  <div class="fbArr"></div>
  <div class="fbDot"></div>
  <div class="fbYear"><?php echo $v['name'];?></div>
  <div class="bd"> Date: <?=date("F j, Y",strtotime($v['dateline']))?> <img class="fbImg" height="260" <?php if($pics[0]['pic']):?>src="<?php echo ImageUtils::getThumbnail(Reviews::UPLOAD_PATH.$pics[0]['pic'], '500x700');?>" <?php else:?> src="/images/view/Reviews.jpg" style="width:150px;height:112px;" <?php endif;?>/>
    <ul>
      <li>Clients: <?=$v['name']?></li>
      <li>Country: <?=$v['nationality']?></li>
    </ul>
    <?=$v['description'];?>
  </div>
</div>
<?php endforeach;?>
<div class="pager">
  <?php
  $this->widget('CLinkPager', array(
      'currentPage'=>$pages->getCurrentPage(),
      'itemCount'=>$item_count,
      'pageSize'=>$page_size,
      'maxButtonCount'=>5,
      //'nextPageLabel'=>'My text >',
      'header'=>'',
      'htmlOptions'=>array('class'=>'pages'),
  ));
  ?>
</div>
<?php endif;?>
</div>
  
  </div>

 </div>

</div>
<script type="text/javascript">
$(function(){
	scroll_bar(0);
})
function edit_port(i,a){
	$("#tab li" ).removeClass("current");
	$(i).addClass("current");
	var inx = parseInt($("#tab li").index(i));
	$(".indexmaindiv").hide();	$("#indexmaindiv_"+inx).show();
	scroll_bar(a);
}
function scroll_bar(i) {
	var oBtnLeft = document.getElementById("goleft");
	var oBtnRight = document.getElementById("goright");
	var oDiv = document.getElementById("indexmaindiv_"+i);
	var oDiv1 = document.getElementById("maindiv1");
	var oUl = oDiv.getElementsByTagName("ul")[0];
	var aLi = oUl.getElementsByTagName("li");
	var now = -3 * (aLi[0].offsetWidth + 13);
	oUl.style.width = aLi.length * (aLi[0].offsetWidth + 13) + 'px';
	oBtnRight.onclick = function () {
		var n = Math.floor((aLi.length * (aLi[0].offsetWidth + 13) + oUl.offsetLeft) / aLi[0].offsetWidth);

		if (n <= 3) {
			move(oUl, 'left', 0);
		}
		else {
			move(oUl, 'left', oUl.offsetLeft + now);
		}
	}
	oBtnLeft.onclick = function () {
		var now1 = -Math.floor((aLi.length / 3)) * 3 * (aLi[0].offsetWidth + 13);

		if (oUl.offsetLeft >= 0) {
			move(oUl, 'left', now1);
		}
		else {
			move(oUl, 'left', oUl.offsetLeft - now);
		}
	}
	var timer = setInterval(oBtnRight.onclick, 5000);
	oDiv.onmouseover = function () {
		clearInterval(timer);
	}
	oDiv.onmouseout = function () {
		timer = setInterval(oBtnRight.onclick, 5000);
	}

};

function getStyle(obj, name) {
	if (obj.currentStyle) {
		return obj.currentStyle[name];
	}
	else {
		return getComputedStyle(obj, false)[name];
	}
}

function move(obj, attr, iTarget) {
	clearInterval(obj.timer)
	obj.timer = setInterval(function () {
		var cur = 0;
		if (attr == 'opacity') {
			cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
		}
		else {
			cur = parseInt(getStyle(obj, attr));
		}
		var speed = (iTarget - cur) / 4;
		speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
		if (iTarget == cur) {
			clearInterval(obj.timer);
		}
		else if (attr == 'opacity') {
			obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
			obj.style.opacity = (cur + speed) / 100;
		}
		else {
			obj.style[attr] = cur + speed + 'px';
		}
	}, 30);
}
</script>

