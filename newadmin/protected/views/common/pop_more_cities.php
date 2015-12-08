
<div id="more_cities" class="more-indexcont" style="display:none;">
 <h2><b>MORE CITIES</b> <span id="close-index"><img src="/images/newhomepage/close2.jpg" alt="" /></span></h2> 
  <div class="list-city">
     <div class="tab_menu">
        <span class="dq">A-G</span>
        <span>H-N</span>
        <span>O-T</span>
        <span>U-Z</span>
     </div>
     <ul class="tab01">
      <li><input type="checkbox" name="city2[]"  value="Beijing"> Beijing</li>
      <li><input type="checkbox" name="city2[]"  value="Changsha"> Changsha</li>
      <li><input type="checkbox" name="city2[]"  value="Chengde"> Chengde</li>
      <li><input type="checkbox" name="city2[]"  value="Chengdu"> Chengdu</li>
      <li><input type="checkbox" name="city2[]"  value="Chongqing"> Chongqing</li>
      <li><input type="checkbox" name="city2[]"  value="Dali"> Dali</li>
      <li><input type="checkbox" name="city2[]"  value="Dalian"> Dalian</li>
      <li><input type="checkbox" name="city2[]"  value="Datong"> Datong</li>
      <li><input type="checkbox" name="city2[]"  value="Dunhuang"> Dunhuang</li>
      <li><input type="checkbox" name="city2[]"  value="Guangzhou"> Guangzhou</li>
      <li><input type="checkbox" name="city2[]"  value="Guilin"> Guilin</li>
      <li><input type="checkbox" name="city2[]"  value="Guiyang"> Guiyang</li>
    </ul>
    <ul class="tab02" style="display:none;">
      <li><input type="checkbox" name="city2[]"  value="Haikou"> Haikou</li>
      <li><input type="checkbox" name="city2[]"  value="Hangzhou"> Hangzhou</li>
      <li><input type="checkbox" name="city2[]"  value="Harbin"> Harbin</li>
      <li><input type="checkbox" name="city2[]"  value="Hefei"> Hefei</li>
      <li><input type="checkbox" name="city2[]"  value="Hohhot"> Hohhot</li>
      <li><input type="checkbox" name="city2[]"  value="Hong Kong"> Hong Kong</li>
      <li><input type="checkbox" name="city2[]"  value="Huangshan"> Huangshan</li>
      <li><input type="checkbox" name="city2[]"  value="Jiuzhaigou"> Jiuzhaigou</li>
      <li><input type="checkbox" name="city2[]"  value="Kaili"> Kaili</li>
      <li><input type="checkbox" name="city2[]"  value="Kashgar"> Kashgar</li>
      <li><input type="checkbox" name="city2[]"  value="Kunming"> Kunming</li>
      <li><input type="checkbox" name="city2[]"  value="Lanzhou"> Lanzhou</li>
      <li><input type="checkbox" name="city2[]"  value="Lijiang"> Lijiang</li>
      <li><input type="checkbox" name="city2[]"  value="Longsheng"> Longsheng</li>
      <li><input type="checkbox" name="city2[]"  value="Luoyang"> Luoyang</li>
      <li><input type="checkbox" name="city2[]"  value="Macau"> Macau</li>
      <li><input type="checkbox" name="city2[]"  value="Nanjing"> Nanjing</li>
    </ul>
    <ul class="tab03" style="display:none;">
      <li><input type="checkbox" name="city2[]"  value="Pingyao"> Pingyao</li>
      <li><input type="checkbox" name="city2[]"  value="Qinhuangdao"> Qinhuangdao</li>
      <li><input type="checkbox" name="city2[]"  value="Qingdao"> Qingdao</li>
      <li><input type="checkbox" name="city2[]"  value="Sanjiang"> Sanjiang</li>
      <li><input type="checkbox" name="city2[]"  value="Sanya"> Sanya</li>
      <li><input type="checkbox" name="city2[]"  value="Shanghai"> Shanghai</li>
      <li><input type="checkbox" name="city2[]"  value="Shangri-la"> Shangri-la</li>
      <li><input type="checkbox" name="city2[]"  value="Shenzhen"> Shenzhen</li>
      <li><input type="checkbox" name="city2[]"  value="Silk Road"> Silk Road</li>
      <li><input type="checkbox" name="city2[]"  value="Suzhou"> Suzhou</li>
      <li><input type="checkbox" name="city2[]"  value="Tianjin"> Tianjin</li>
      <li><input type="checkbox" name="city2[]"  value="Tibet(Lhasa)"> Tibet(Lhasa)</li>
      <li><input type="checkbox" name="city2[]"  value="Turpan"> Turpan</li>
    </ul>
    <ul class="tab04" style="display:none;">
      <li><input type="checkbox" name="city2[]"  value="Urumqi"> Urumqi</li>
      <li><input type="checkbox" name="city2[]"  value="Wuhan"> Wuhan</li>
      <li><input type="checkbox" name="city2[]"  value="Xiamen"> Xiamen</li>
      <li><input type="checkbox" name="city2[]"  value="Xian"> Xian</li>
      <li><input type="checkbox" name="city2[]"  value="Xining"> Xining</li>
      <li><input type="checkbox" name="city2[]"  value="Yangshuo"> Yangshuo</li>
      <li><input type="checkbox" name="city2[]"  value="Yangtze River"> Yangtze River</li> 
      <li><input type="checkbox" name="city2[]"  value="Yichang"> Yichang</li>
      <li><input type="checkbox" name="city2[]"  value="Zhangjiajie"> Zhangjiajie</li>
      <li><input type="checkbox" name="city2[]"  value="Zhangmu"> Zhangmu</li>
      <li><input type="checkbox" name="city2[]"  value="Zhengzhou"> Zhengzhou</li>     
     </ul>
     <div class="clear"></div>
     <div class="confirm">
     <textarea class="choose_city" name="choose_city" cols="" rows="" readonly=ture></textarea>
      <span><a style="margin-bottom:8px;background:none; width:74px; height:31px; padding:0px;" onclick="submit_form();" href="javascript:;"><img src="/images/newhomepage/confirm.jpg" /></a>
      <a style="background:none; width:74px; height:31px; padding:0px;" href="javascript:;" id="index_city_reset"><img src="/images/newhomepage/cancel.jpg" alt="" /></a></span>
     </div>
  </div>  
</div>

<script>
(function($){
  $("#choose_days").change(function(){
    $("#menu_days").val($(this).val());
  })
  
  $("#choose_price").change(function(){
    $("#menu_price").val($(this).val());
  })

  $("input[name='city2[]']").click(function(){
     var choose_city_string = [];
     $("input[name='city2[]']:checked").each(function(){
     choose_city_string.push($(this).val());
     choose_city_string.sort();
     $.unique(choose_city_string); 
       $("#menu_city").val(choose_city_string.join('|'));
       $("textarea.choose_city").val(choose_city_string.join(','));
      
     })
  })

  $("#more_index,#close-index").click(function(){
    $("#more_cities").toggle();
  })

  $("#index_city_reset").click(function(){
    $("input[name='city2[]']").attr("checked",false);
    $("textarea.choose_city").val('');
  })

  $(".list-city .tab_menu span").click(function(){
    $(".list-city .tab_menu span").removeClass("dq");
    $(this).addClass("dq");
    var index = parseInt($(".list-city .tab_menu span").index(this))+1;
    $(".list-city").find("ul").hide();
    $(".list-city").find(".tab0"+index).show();
  })
})(jQuery);

function submit_form(){ 
  document.toursearchpanelform.submit()
}
</script>
