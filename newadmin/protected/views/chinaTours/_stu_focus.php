<div id="fsD1" class="stu_focus">
	<div id="D1pic1" class="fPic">
		<div class="fcon"> <a href=""><img src="/images/studenttour/stu_banner2.jpg" /></a></div>
		<div class="fcon"> <a href=""><img src="/images/studenttour/stu_banner1.jpg" /></a></div>
		<div class="fcon"> <a href=""><img src="/images/studenttour/stu_banner3.jpg" /></a></div>
	</div>
	<div class="fbg">
		<div class="D1fBt" id="D1fBt"> <a href="javascript:void(0)" class="current"><i>1</i></a> <a href="javascript:void(0)"><i>2</i></a> <a href="javascript:void(0)"><i>3</i></a></div>
	</div>
</div>
<script type="text/javascript">
	Qfast.add('widgets', { path: "<?php echo Yii::app()->request->baseUrl;?>/js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
	Qfast(false, 'widgets', function () {
		K.tabs({
			id: 'fsD1',   //½¹µãÍ¼°ü¹üid  
			conId: "D1pic1",  //** ´óÍ¼Óò°ü¹üid  
			tabId:"D1fBt",  
			tabTn:"a",
			conCn: '.fcon', //** ´óÍ¼ÓòÅäÖÃclass       
			auto: 1,   //×Ô¶¯²¥·Å 1»ò0
			effect: 'fade',   //Ð§¹ûÅäÖÃ
			eType: 'click', //** Êó±êÊÂ¼þ
			pageBt:true,//ÊÇ·ñÓÐ°´Å¥ÇÐ»»Ò³Âë
			bns: ['.prev', '.next'],//** Ç°ºó°´Å¥ÅäÖÃclass                          
			interval: 3000  //** Í£¶ÙÊ±¼ä  
		}) 
	})  
</script>