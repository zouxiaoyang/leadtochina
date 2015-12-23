jQuery.fn.floatdiv=function(location){
	var isIE6=false;
	var Sys = {};
    var ua = navigator.userAgent.toLowerCase();
    var s;
    (s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1] : 0;
	if(Sys.ie && Sys.ie=="6.0"){
		isIE6=true;
	}
	var windowWidth,windowHeight;
	if (self.innerHeight) {
		windowWidth=self.innerWidth;
		windowHeight=self.innerHeight;
	}else if (document.documentElement&&document.documentElement.clientHeight) {
		windowWidth=document.documentElement.clientWidth;
		windowHeight=document.documentElement.clientHeight;
	} else if (document.body) {
		windowWidth=document.body.clientWidth;
		windowHeight=document.body.clientHeight;
	}
	return this.each(function(){
		var loc;
		var wrap=jQuery("<div></div>");
		var top=-1;
		if(location==undefined || location.constructor == String){
			switch(location){
				case("rightbottom"):
					loc={right:"0px",bottom:"-2px"};
					break;
				case("leftbottom"):
					loc={left:"0px",bottom:"0px"};
					break;	
				case("lefttop"):
					loc={left:"0px",top:"0px"};
					top=0;
					break;
				case("righttop"):
					loc={right:"0px",top:"0px"};
					top=0;
					break;
				case("middletop"):
					loc={left:windowWidth/2-$(this).width()/2+"px",top:"0px"};
					top=0;
					break;
				case("middlebottom"):
					loc={left:windowWidth/2-$(this).width()/2+"px",bottom:"0px"};
					break;
				case("leftmiddle"):
					loc={left:"0px",top:windowHeight/2-$(this).height()/2+"px"};
					top=windowHeight/2-$(this).height()/2;
					break;
				case("rightmiddle"):
					loc={right:"0px",top:windowHeight/2-$(this).height()/2+"px"};
					top=windowHeight/2-$(this).height()/2;
					break;
				case("middle"):
					var l=0;
					var t=0;
					l=windowWidth/2-$(this).width()/2;
					t=windowHeight/2-$(this).height()/2;
					top=t;
					loc={left:l+"px",top:t+"px"};
					break;
				default:
					location="rightbottom";
					loc={right:"0px",bottom:"-2px"};
					break;
			}
		}else{
			loc=location;
			var str=loc.top;
			str=str.replace("px","");
			top=str;
		}
		/*fied ie6 css hack*/
		if(isIE6){
			if (top>=0)
			{
				wrap=jQuery("<div style=\"top:expression(documentElement.scrollTop+"+top+");\"></div>");
			}else{
				wrap=jQuery("<div style=\"top:expression(documentElement.scrollTop+documentElement.clientHeight-this.offsetHeight);\"></div>");
			}
		}
		jQuery("body").append(wrap);
		wrap.css(loc).css({position:"fixed",
			z_index:"999"});
		if (isIE6)
		{
			
			wrap.css("position","absolute");
		}
		jQuery(this).appendTo(wrap);
	});
};
