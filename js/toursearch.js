function Hotelcheck()
 {
   		var dateTimeStart=document.getElementById("left1_tboxDeparting"); 
        var dateTimeEnd=document.getElementById("left1_tboxReturning");
        var d1 = new Date(dateTimeStart.value.replace(/-/g, "/")); 
        var d2 = new Date(dateTimeEnd.value.replace(/-/g, "/")); 
    	if (document.getElementById("tboxDeparting").value== "mm-dd-yyyy     "||document.getElementById("tboxDeparting").value== "") 
		{
		    alert('Please select Check-in  the time');
		    return false;
		}
	    if (document.getElementById("tboxReturning").value== "mm-dd-yyyy      "||document.getElementById("tboxReturning").value== "") 
		{
		    alert('Please select Check-out  the time');
		    return false;
		}
		if (Date.parse(d1) - Date.parse(d2) >= 0) { 
            alert('Please Make sure you enter the start and end dates'); 
        return false; 
        }
 }
		function Hotelcheck()
            {
   		var dateTimeStart=document.getElementById("left1_tboxDeparting"); 
        var dateTimeEnd=document.getElementById("left1_tboxReturning");
        var d1 = new Date(dateTimeStart.value.replace(/-/g, "/")); 
        var d2 = new Date(dateTimeEnd.value.replace(/-/g, "/")); 
    	if (document.getElementById("left1_tboxDeparting").value== "mm-dd-yyyy     "||document.getElementById("left1_tboxDeparting").value== "") 
		{
		    alert('Please select Check-in  the time');
		    return false;
		}
	    if (document.getElementById("left1_tboxReturning").value== "mm-dd-yyyy      "||document.getElementById("left1_tboxReturning").value== "") 
		{
		    alert('Please select Check-out  the time');
		    return false;
		}
		if (Date.parse(d1) - Date.parse(d2) >= 0) { 
            alert('Please Make sure you enter the start and end dates'); 
        return false; 
        }
 }
 
 window.onerror = function() 
{  
return true; 
} 
     
function checkd() 
{
    var obj=document.getElementsByName("sc");
    var cl =obj.length;
    var sc ="";
    for(var ii=0;ii<cl;ii++){
        if(obj[ii].checked)sc=sc+obj[ii].value+", ";
    }
	document.toursearchpanelform.Left1$volcity.value=sc;
}
document.write ('<script language="javascript" type="text/javascript" src="js/jquery.boxy.js"></script>');
var allDialogs = [];
var seq = 0;
var bottomclose = '<div class="boxy_bottom"><a onclick="Boxy.get(this).hide(); return false" class="close">CLOSE X</a></div>';
function iframe(url,w,h)
{
	return '<iframe id="Dialog-iframe" frameborder="0" src="'+url+'" style="width: '+w+'px; height: '+h+'px;" ></iframe>';
}
function CreateBoxy(tit,cnt,options)
{
	options = $.extend({title: tit}, options || {});
	var dialog = new Boxy(cnt, options);
	allDialogs.push(dialog);
	return false;
}
function ShowIFrame(title,url,w,h,closeplace)
{
	var options;
	var cnt = iframe(url,w,h);
	 if(closeplace=='bottom')
	{
		options = {fixed: false,modal: true,closeable: false}
		cnt = cnt + bottomclose;
	}
	return CreateBoxy(title,cnt,options);
}
$(function(){
        $(".Menubox2 ul>li").hover(function(){
            $(this).addClass("hovers").siblings().removeClass("hovers");
            var $indexv=$(".Menubox2 ul>li").index(this);
         $(".Contentbox2>div").eq($indexv).show().siblings().hide();
        
        });
        $(".Menubox4 ul>li").hover(function(){
         $(this).addClass("hovers").siblings().removeClass("hovers");
            var $indexu=$(".Menubox4 ul>li").index(this);
             $(".Contentbox4>div").eq($indexu).show().siblings().hide();
        });
         $(".Menubox5 ul>li").hover(function(){
            $(this).addClass("hovers").siblings().removeClass("hovers");
            var $indexv=$(".Menubox5 ul>li").index(this);
         $(".Contentbox5>div").eq($indexv).show().siblings().hide();
        
        });
         var tailormatoin=$(".tailormade");
if(tailormatoin.length>0)
{
    tailormatoin.mouseover(function(){
   $(this).css("cursor","pointer");
})
tailormatoin.click(function(){
    window.location.href="Customize-China-Tours/";
})}
     });
var currentlid;
function AddClass() {
        var hidclass = document.getElementById("Head1_hidclass").value;
        this.document.getElementById(hidclass).className = 'current';  
}
setTimeout("AddClass()",50);
function onNaviShow(elm) {
            jQuery("[class^=menu]", jQuery(elm).siblings("li")).hide();
            jQuery("[class^=menu]", jQuery(elm)).show();
            jQuery(elm).siblings("li").attr("class", "");
            jQuery(elm).attr("class", "current");
        }
        function onNaviHide(elm) {
            jQuery(elm).attr("class", "");
        }
