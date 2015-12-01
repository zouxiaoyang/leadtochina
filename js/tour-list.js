$(function(){
    hide_search();
	$("input[name=ToursSort]").click(function(){
        $("#form1").submit();
    });
    var SearchScValue = $("form[name=toursearchpanelform] #city").val().split(",");
    $("form[name=toursearchpanelform] input[type=checkbox]").each(function(i){
        for(ii=0;ii<SearchScValue.length;ii++){
            if($(this).val().trim()==SearchScValue[ii].trim())
            {$(this).attr("checked","true")}
        }
    })
});
function show_tour_map(para){
	var tn = "";
		tn = $(para).attr("href").replace("#", "");
	var map_url = "<iframe src='/tour/tourmap.asp?Adname=" + tn + "' name='tour-map' width='425' marginwidth='0' height='380' marginheight='0' scrolling='no' frameborder='0'>"
	$("#facebox .content").html("map_url");
}
function write_in_map(v){
	$("#facebox .content").html(v);
}
function hide_search(){}

function ds(_s){
	if ($("#"+_s).css("display")=="block") return false;
	$("#d1").fadeOut(800);
	$("#d2").fadeOut(800);
	$("#"+_s).slideDown(800);
	
}
function checkd(){
	var obj=document.getElementsByName("sc");
	var cl =obj.length;
	var sc ="";
	for(var ii=0;ii<cl;ii++){
		if(obj[ii].checked)sc=sc+obj[ii].value+", ";
	}
	document.toursearchpanelform.city.value=sc;
}
$(function(){$(".closeAds").click(function(){$(".flights2China").hide();});});

// show more value guarantee info
		   $(function(){
					  
			   var uuseridwinPIE= $(".moreInfo"),TSuuseridwin;
			  // $(".valueGuarantee").css("cursor", "pointer")
			   uuseridwinPIE.prev().hover(function(){
				 
					var te = $(this), ps = te.position(), tp = (te.height()+ 5  + ps.top) + "px", tl = ps.left + "px";//te.height()* 2
					te.next().css({
						position: "absolute",
						top: tp,
						left: tl,
						display: "block",
						 "background-color": "#FFF",
						  "z-index":1000
					  });
					},function(){TSuuseridwin= setTimeout("$('.moreInfo').hide()" ,300)}); 
		   
		   uuseridwinPIE.hover(function(){if(TSuuseridwin)clearTimeout(TSuuseridwin);$(this).show();},function(){$(this).hide();});//
		  });