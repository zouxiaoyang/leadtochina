  $(function(){
    $(".faqname").click(function(){
      $(".faqdesc").slideUp();
      $(this).next().slideDown();
    })
  })

var _cruise = (function($){
    return {
        recommendTab:function(sq){    		
			$("div[id^='cruise_recommend_']").hide();
			$("#cruise_recommend_"+sq).show();
			$("#cruise_change_tab").find("li>span").attr("class","small");
			$("#cruise_change_tab").find("li>span").eq(sq-1).attr("class","smalldq");
        }
    }   
}(jQuery));