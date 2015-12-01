
document.writeln("<div id=\"TA_selfserveprop57\" class=\"TA_selfserveprop\">");
document.writeln("<ul id=\"cRdCeow\" class=\"TA_links c10yrEjgoJe4\">");
document.writeln("<li id=\"bbnjEfl1w\" class=\"pGspxqGdE6Rq\">");
document.writeln("<a target=\"_blank\" href=\"http://www.tripadvisor.com/\"><img src=\"http://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png\" alt=\"TripAdvisor\"/></a>");
document.writeln("</li></ul></div>");
document.writeln("<script src=\"http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=57&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=false&amp;border=true\"></script>");



$(function(){
	var intervalId = window.setInterval(function(){
	 		$("#TA_selfserveprop57").find(".widSSPH18").html("Lead to China Tours").show();
	 		$("#TA_selfserveprop57").find(".widSSPBranding dd").hide();
			$('.index_class .widSSPData').css('border-color','#FFF');
	 		if($("#TA_selfserveprop57").find(".widSSPH18").html() != null) clearInterval(intervalId);
	 },1000);

})
