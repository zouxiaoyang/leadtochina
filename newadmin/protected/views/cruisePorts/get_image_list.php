<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="description" content="" />
</head>

<body>

<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Verdana, Geneva, sans-serif}
/*焦点图*/
.mod18{width:680px;height:456px;margin:20px auto;position:relative;background:#f7f7f7;}
.mod18 .btn{position:absolute;width:15px;height:70px;top:386px;cursor:pointer;z-index:99;font-size:50px;font-weight:bold;}
.mod18 .prev{left:0;background:url(/images/images/prevBtn.png) no-repeat;}
.mod18 #prevTop,.mod18 #nextTop{top:213px;width:46px;height:48px;}
.mod18 #prevTop{background:url(/images/images/prevBtnTop.png) 0 0 no-repeat;}
.mod18 #nextTop{background:url(/images/images/nextBtnTop.png) 0 0 no-repeat;}
.mod18 .next{right:0;background:url(/images/images/nextBtn.png) no-repeat;}
.mod18 li{float:left;}
.mod18 .cf li{position:relative;color:#fff;}
.mod18 .cf a{display:block;width:680px;height:380px;position:absolute;color:#fff;}
.mod18 .cf li span{display:block;width:640px;position:absolute;left:0;bottom:0;padding:10px 20px;line-height:22px;text-align:left;background:rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient( GradientType = 0,startColorstr = "#60000000",endColorstr = "#60000000"); font-size:16px;}
.mod18 .picBox{height:380px;position:relative;overflow:hidden;}
.mod18 .picBox ul{height:380px;position:absolute;}
.mod18 .picBox li{width:680px;height:380px;}
.mod18 .listBox{width:642px;height:100px;margin:0 auto;position:relative;padding:6px 0 10px;overflow:hidden;}
.mod18 .listBox ul{height:100px;position:absolute;}
.mod18 .listBox li{width:129px;height:70px;cursor:pointer;position:relative;}
.mod18 .listBox li i{display:none;}
.mod18 .listBox li a{display:block;width:124px;height:70px;}
.mod18 .listBox li img{width:124px;height:70px;}
.mod18 .listBox .on img{width:118px;height:64px;border:3px solid #ff6600;}
.mod18 .listBox .on i{display:block;}
.datebox_cont1_off{ position: absolute; right: 0; top: 0}
</style>
<script src="/travel/js/jquery.min.js" type="text/javascript"></script>
<script>
$(function(){
  $("#cboxclose").click(function(){
	parent.jQuery.colorbox.close();
  })

})
</script>
<div class="datebox_cont1_off"><a id="cboxclose" href=""><img src="/images/cruisePorts/date_off1.jpg"/></a></div> 
<div class="mod18">
	<span id="prev" class="btn prev"></span>
	<span id="next" class="btn next"></span>
	<span id="prevTop" class="btn prev"></span>
	<span id="nextTop" class="btn next"></span>
	<div id="picBox" class="picBox">
		<ul class="cf">
			<?php if($cruise_pic):?>
				<?php foreach ($cruise_pic as $k=>$v):?>
					<li>
						<img width="680px" height="380px" src="<?php echo ImageUtils::getThumbnail(Cruisepic::UPLOAD_PATH.$v->pic_path, '680x380')?>" alt="<?php echo $v->pic_alt;?>" /> <span><?php echo $v->pic_alt;?></span>
					</li>
				<?php endforeach;?>
			<?php endif;?>
		</ul>
	</div>
	
	<div id="listBox" class="listBox">
		<ul class="cf">
			<?php if($cruise_pic):?>
				<?php foreach ($cruise_pic as $k=>$v):?>
					<li <? if($k==0):?> class="on"<?php endif;?>><i class="arr2"></i><img width="118" height="64" src="<?php echo ImageUtils::getThumbnail(Cruisepic::UPLOAD_PATH.$v->pic_path, '118x64')?>" alt="<?php echo $v->pic_alt;?>" /></li>
				<?php endforeach;?>
			<?php endif;?>
		</ul>
	</div>
	
</div>

<script type="text/javascript">
(function(){
	function G(s){
		return document.getElementById(s);
	}
	
	function getStyle(obj, attr){
		if(obj.currentStyle){
			return obj.currentStyle[attr];
		}else{
			return getComputedStyle(obj, false)[attr];
		}
	}
	
	function Animate(obj, json){
		if(obj.timer){
			clearInterval(obj.timer);
		}
		obj.timer = setInterval(function(){
			for(var attr in json){
				var iCur = parseInt(getStyle(obj, attr));
				iCur = iCur ? iCur : 0;
				var iSpeed = (json[attr] - iCur) / 5;
				iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
				obj.style[attr] = iCur + iSpeed + 'px';
				if(iCur == json[attr]){
					clearInterval(obj.timer);
				}
			}
		}, 30);
	}

	var oPic = G("picBox");
	var oList = G("listBox");
	
	var oPrev = G("prev");
	var oNext = G("next");
	var oPrevTop = G("prevTop");
	var oNextTop = G("nextTop");

	var oPicLi = oPic.getElementsByTagName("li");
	var oListLi = oList.getElementsByTagName("li");
	var len1 = oPicLi.length;
	var len2 = oListLi.length;
	
	var oPicUl = oPic.getElementsByTagName("ul")[0];
	var oListUl = oList.getElementsByTagName("ul")[0];
	var w1 = oPicLi[0].offsetWidth;
	var w2 = oListLi[0].offsetWidth;

	oPicUl.style.width = w1 * len1 + "px";
	oListUl.style.width = w2 * len2 + "px";

	var index = 0;
	
	var num = 5;
	var num2 = Math.ceil(num / 2);

	function Change(){

		Animate(oPicUl, {left: - index * w1});
		
		if(index < num2){
			Animate(oListUl, {left: 0});
		}else if(index + num2 <= len2){
			Animate(oListUl, {left: - (index - num2 + 1) * w2});
		}else{
			Animate(oListUl, {left: - (len2 - num) * w2});
		}

		for (var i = 0; i < len2; i++) {
			oListLi[i].className = "";
			if(i == index){
				oListLi[i].className = "on";
			}
		}
	}
	
	oNextTop.onclick = oNext.onclick = function(){
		index ++;
		index = index == len2 ? 0 : index;
		Change();
	}

	oPrevTop.onclick = oPrev.onclick = function(){
		index --;
		index = index == -1 ? len2 -1 : index;
		Change();
	}

	for (var i = 0; i < len2; i++) {
		oListLi[i].index = i;
		oListLi[i].onclick = function(){
			index = this.index;
			Change();
		}
	}
	
})()
</script>

</body>
</html>