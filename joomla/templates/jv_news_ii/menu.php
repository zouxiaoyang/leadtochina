<?php
//var_dump($_SERVER['REQUEST_URI']);
//var_dump($_GET["tmpl"]);
if($_GET["tmpl"] != 'index_new'&&$_SERVER['REQUEST_URI']!='/citytour/'&&$_SERVER['REQUEST_URI']!='/chinatour/'&&$_SERVER['REQUEST_URI']!='/chinatour'&&$_SERVER['REQUEST_URI']!='/citytour'):?>
<script type="text/javascript" src="/about/js/webwidget_slideshow_dot.js"></script>
<div class="logo"><a href="/"><img src="/new/images/logo.png" alt="" /></a></div>
<div class="logorightindex"><a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newindex/chat.jpg" alt="" /></a></div>
<?php endif;?>
<style>
.menu ul li:hover ul.special-menu2{display:block; position:absolute; top:48px; left:-65px; width:600px; background:url(/images/newhomepage/ulbg.png) #fbe5cd right bottom no-repeat; padding:5px 0px 3px 8px; overflow:hidden; border:1px solid #d5ba9d; height:225px;}
.menu ul li:hover ul.special-menu2 ul{width:100%; height:auto; float:left; margin:0px; padding:4px 0px; border-bottom:1px dashed #b0afad; border-top:1px dashed #b0afad; margin-bottom:5px; border-left:none; border-right:none; position:static;}
.menu ul li:hover ul.special-menu2 ul li{width:17%; white-space:nowrap; float:left; list-style:none; color:#4c4c4c; margin:0px 5px 1px 0px; padding:2px 5px 1px 3px;height:18px; line-height:18px; border-bottom:none;}
.menu ul li:hover ul li{ width:155px; height:28px; border-bottom:1px dashed #d0b495; padding-left:3px; margin:0px; background:none; padding-right:0px;}
.menu ul li:hover ul.special-menu2 li ul li{  height:auto; float:left; border-bottom:1px dashed #c5bcb3; margin:0px 20px 0px 0px; padding:1px 0px 1px 12px;background:url(/images/newhomepage/linew.jpg) left center no-repeat;}
.menu ul li:hover ul.special-menu2 li ul li a{color:#3f3f3f; text-align:left; margin:0px; padding:0px; line-height:24px; display:block; height:24px; background:none; font-size:11px; text-decoration:none; display:block;}
.menu ul li:hover ul.special-menu2 li.listnew-0{ width:170px; height:auto; border-bottom:none; padding:0px; margin:0px; background:none; margin-right:14px; float:left;}
.menu ul li:hover ul.special-menu2 li.listnew-0 ul{ width:100%; height:220px; float:left; margin:0px; top:0px; border-top:none; border-bottom:none; border-left:none; padding:0px; border-right:1px solid #e1ceb8;}
.menu ul li:hover ul.special-menu2 li.listnew-0 ul li{ width:142px;}
.menu ul li:hover ul.special-menu2 li.listnew-0 ul li.titleul{ width:154px; height:auto; float:left; border-bottom:1px dashed #d0a16e; color:#a72d24; font-size:13px; padding:0px; margin:0px; line-height:24px; background:none; font-weight:bold;}
.menu ul li:hover ul.special-menu2 li.listnew-01{ width:175px; height:auto; border-bottom:none; padding:0px; margin:0px; background:none; margin-right:14px; float:left;}
.menu ul li:hover ul.special-menu2 li.listnew-01 ul{ width:100%; height:220px; float:left; margin:0px; top:0px; border-top:none; border-bottom:none; border-left:none; padding:0px; border-right:1px solid #e1ceb8;}
.menu ul li:hover ul.special-menu2 li.listnew-01 ul li{ width:150px;}
.menu ul li:hover ul.special-menu2 li.listnew-01 ul li.titleul{ width:162px; height:auto; float:left; border-bottom:1px dashed #d0a16e; color:#a72d24; font-size:13px; padding:0px; margin:0px; line-height:24px; background:none; font-weight:bold;}
.menu ul li:hover ul.special-menu2 li ul li.titleul,.menu ul li:hover ul.special-menu2 li.list-4 h3{ width:100%; height:auto; float:left; border-bottom:1px dashed #d0a16e; color:#a72d24; font-size:13px; padding:0px; margin:0px; line-height:24px; background:none; font-weight:bold;}
.menu ul li:hover ul.special-menu2 li ul li a.hot{ color:#3f3f3f; text-align:left; margin:0px; padding:0px; line-height:24px; display:block; height:24px; background:url(/images/newhomepage/hot.gif) right top no-repeat;}
.menu ul li:hover ul.special-menu2 li ul li a.new{ color:#3f3f3f; text-align:left; margin:0px; padding:0px; line-height:24px; display:block; height:24px; background:url(/images/newhomepage/new_3.gif) right center no-repeat;}
.menu ul li:hover ul.special-menu2 li ul li.picmenu{ width:138px; height:57px; border:none; padding:0px; background:none; margin:10px 0px 0px 0px;}
.menu ul li:hover ul.special-menu2 li ul li.picmenu a{ height:57px;}
.menu ul li:hover ul.special-menu2 li ul li a:hover{ color:#000; text-decoration:underline;}
.menu ul li:hover ul.special-menu2 li.list-2{ width:215px; height:auto; border-bottom:none; padding:0px; margin:0px; background:none; float:left;}
.menu ul li:hover ul.special-menu2 li.list-2 ul li.titleul{ width:200px; height:auto; float:left; border-bottom:1px dashed #d0a16e; color:#a72d24; font-size:13px; padding:0px; margin:0px; line-height:24px; background:none; font-weight:bold;}
.menu ul li:hover ul.special-menu2 li.list-2 ul{ width:200px; height:220px; float:left; padding:0px 14px 20px 0px; display:block; margin:0px; top:0px; border:none; background:none;}
.menu ul li:hover ul.special-menu2 li.list-2 ul li{ width:184px;}

</style>
<div class="menu">
       <ul>
           <li><a class="hide" href="/">Home</a>
				      <ul>
                    <li><a href="/about-us/" target="_blank">About Us</a></li>
				           	<li><a href="/contact-us/" target="_blank">Contact Us</a></li>
                    <li><a href="/travel/online-payments.html" target="_blank">Payment Guide</a></li>
                    <li><a href="/travel/faq" target="_blank">FAQ</a></li> 
                    <li><a href="/newsletter" target="_blank">News Letter</a></li>
                    <li><a href="/travel/guest-reviews">Customers' Reviews</a></li>
                    <li><a href="/travel/promotion">Promotion</a></li>
              </ul>
           </li>
           <li><a class="hide" href="/chinatour/">China Tours</a>
               <ul id="special-menu" class="special-menu">
                      <li class="listnew-01">
                         <ul>
                             <li class="titleul">Classic China</li>
                             <li><a href="/travel/best-china-tours">Top 10 China Tours</a></li>
                             <li><a href="/travel/yangtze-river-tours">Yangtze Cruise Tour</a></li>
<!--                         <li><a href="/travel/china-tibet-tours">China Tibet Tours</a></li>
-->                          <li><a href="/travel/china-student-tours">China Student Tours</a></li>
                             <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai Tours</a></li>
                             <li><a href="/chinatour/">All China Theme Tours</a></li>
                         </ul>
                      </li>
                      <li class="list-0">
                                <ul>
                                  <li class="titleul">Short Stay Tours</li>
                                  <li><a href="/travel/beijing-shanghai-tours">Beijing Shanghai Tours</a></li>                
                                  <li><a href="/travel/beijing-xian-tours">Beijing Xian Tours</a></li>
                                  <li><a href="/travel/shanghai-xian-tours">Shanghai Xian Tours</a></li>
                                  <li><a href="/travel/shanghai-to-huangshan-tours.html">Shanghai Huangshan Tours</a></li>
                                  <li><a href="/travel/cruisePorts/tianjinCruisePort">Tianjin Port to Beijing</a></li>
                               </ul>
                      </li>
                      <li class="listnew-0">
                                <ul>
                                    <li class="titleul">China Tours from</li>
                                    <li><a href="/travel/city-beijing-tours">Beijing</a></li>
                                   <li><a href="/travel/city-shanghai-tours">Shanghai</a></li>
                                  <li><a href="/travel/china-search?starting_city=hongkong">Hong Kong</a></li>
                             <li><a href="/travel/china-tours-from-australia">Australia</a></li>
                             <li><a href="/travel/china-tours-from-south-africa">South Africa</a></li>
                               </ul>
                      </li>
                      <li class="list-2">
                                <ul>
                                    <li class="titleul">Hot Deals</li>
                                    <li><a href="/travel/china-8-day-beijing-xian-shanghai-17.html">8-day Beijing Xian Shanghai</a></li>                
                                    <li><a href="/travel/china-11-day-tour-with-yangtze-cruise-54.html">11-day Tour with Yangtze Cruise</a></li>
                                    <li><a href="/travel/china-10-day-beijing-xi'an-guilin-shanghai-22.html">10-day Beijing, Xi'an, Guilin, Shanghai</a></li>
                                    <li class="picmenu"><a href="/index.php?option=com_diy&amp;template=customize_index"><img alt="" src="/images/newhomepage/tailor01.png"></a></li>
                               </ul>
                      </li>
                    </ul>
          </li>
          <li><a class="hide" href="/citytour/">City Tours</a>
                  <ul>
                      <li><a href="/beijing/tours/">Beijing Tours</a></li>
                      <li><a href="/xian/tours/">Xian Tours</a></li>
                      <li><a href="/shanghai/tours/">Shanghai Tours</a></li>
                      <li><a href="/huangshan/tours/">Huangshan Tours</a></li>
                      <li><a href="/travel/city-chengdu-tours">Chengdu Tours</a></li>
                      <li><a href="/guilin/tours/">Guilin Tours</a></li>
                    </ul>
             </li>
            <li class="hot"><a href="/travel/china-diy-tours"><span>DIY Tours</span><b style="position:absolute; width:35px; text-align:right; z-index:2; float:right; top:0px;"><img src="/images/newindex/01_03.png"  border="0"/></b></a></li>
            <li style="z-index:1"><a class="hide" href="/beijing/tours/">Beijing Tours</a>
<ul class="special-menu2">
  <li class="listnew-01">
    <ul>
      <li class="titleul">Beijing City Tours</li>
      <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">Beijing Private Tours</a></li>
      <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">Beijing Coach Tours</a></li>
      <li><a href="/beijing/tours?v=list&id=1">Great Wall Tours</a></li>
      <li><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">72 Hours Visa Free Tour</a></li>
      <li><a href="/travel/search-beijing-tours?theme=110_Beijing+Musilm+Tour">Beijing Muslim Tours</a></li>
      <li><a href="/travel/search-beijing-tours?theme=114_Airport+Stop+Tour">Beijing Layover Tour</a></li>
      <li><a href="/travel/air">Beijing Helicopter Tour</a></li>
    </ul>
  </li>
  <li class="listnew-0">
    <ul>
      <li class="titleul">Beijing Side Trips</li>
      <li><a href="/travel/beijing-xian-tours">Beijing Xian Tours</a></li>
      <li><a href="/travel/beijing-shanghai-tours">Beijing Shanghai Tours</a></li>
      <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai</a></li>
      <li><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours">Beijing Datong Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=19_beijing_pingyao_tours">Beijing Pingyao Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=10_Beijing+Luoyang+Tours">Beijing Luoyang Tours</a></li>
      <li><a href="/travel/cruise-port/tianjin-port-port-excursion-5">Tianjin Port Excursions</a></li>
    </ul>
  </li>
  <li class="list-2">
    <ul>
     <li class="titleul" style="height:25px;"></li>
      <li><a href="/travel/search-beijing-tours?des=8_Beijing+Chengde+Tours">Beijing Chengde Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=7_Beijing+Qinhuangdao+Tours">Beijing Qinhuangdao Tours</a></li>
      <li><a href="/travel/china-winter-tours">Beijing Harbin Tours</a></li>
      <li><a href="/travel/city-huangshan-tours#3">Beijing Huangshan Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=18_beijing_inner_mongolia_tours">Beijing Inner Mongollia</a></li>
      <li><a href="/travel/search-beijing-tours?des=11_Beijing+Guilin+Tours">Beijing Guilin Tours</a></li>
      <li><a href="/travel/search-beijing-tours?des=14_Hong+Kong+to+Beijing+Tour">Beijing Hong Kong Tours</a></li>
    </ul>
  </li>
</ul>
            </li>            
            <li><a class="hide" href="/travel/yangtzecruise/">Yangtze Cruise</a>
                  <ul class="special-menu1">
                      <li class="list-0">
                         <ul>
                             <li class="titleul"><a href="/travel/yangtzecruise/ships/">Yangtze Cruise Ships</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=3">Victoria Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=1">President Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=2">New Century</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=4">Gold Cruises</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=5">Overseas Cruise</a></li>
                             <li><a href="/travel/yangtzecruise/ships/category-list?category=6">Yangtze Explorer</a></li>
                         </ul>
                      </li>
                      <li class="list-3">
                                <ul>
                                  <li class="titleul"><a href="/travel/yangtze-river-tours">Yangtze Cruise Tours</a></li>
                                  <li><a href="/travel/yangtzecruise/yangtzetour-from-chongqing.html">Cruise from Chongqing</a></li>                
                                  <li><a href="/travel/yangtzecruise/yangtzetour-from-shanghai.html">Cruise from Shanghai</a></li>      
                                  <li><a href="/travel/yangtzecruise/calendar">Yangtze Cruise Calendar 2014</a></li>      
                                  <li class="calendarmenu"><table cellspacing="0" cellpadding="0" border="0">
                     <tbody>
                      <?php 
                        $month_arr = array_chunk(range(1,12),4);
                      ?>
                      <?php foreach($month_arr as $arr):?>
                        <tr>
                            <?php foreach($arr as $v):?>
                            <td <?php if($v%4 == 0):?> style=" margin-right:0px;" <?php endif;?>>
                              <?php if(date("Y")==2015 && date("m") == $v):?>
                              <a style=" background:#8c4600; color:#fff; height:20px;" href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php elseif(date("m")<$v):?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php else:?>
                              <a href="/travel/yangtzecruise/calendar?month=<?php echo $v;?>"><?php echo date('M',strtotime(date("Y-".$v."-d")));?></a>
                              <?php endif;?>
                              </td>
                            <?php endforeach;?>
                        </tr>
                      <?php endforeach;?>

                     </tbody>
                   </table></li>      
                               </ul>
                      </li>
                      <li class="list-2">
                                <ul>
                                    <li class="titleul"><a href="/travel/yangtzecruise/china-river-cruises.html">China Cruise Tours</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name1">Yangtze River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name2">Guilin Li River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name3">Shanghai Huangpu River Cruise</a></li>
                                    <li><a href="/travel/yangtzecruise/china-river-cruises.html#name4">Southeast Water Town Cruise</a></li>
                                    <li><a href="/travel/cruisePorts/tianjinCruisePort">Tianjin Port Excursions</a></li>
                                    <li><a href="/travel/cruise-port/shanghai-cruise-port">Shanghai Port Excursions</a></li>
                               </ul>
                      </li>
                    </ul>
              </li>
              <li><a href="/travel/adoption" class="hide">Heritage Tours</a>
                  <ul>
                      <li><a href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1">2015 GROUP TOUR I</a></li>
                      <li><a href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2">2015 GROUP TOUR II</a></li>
                      <li><a href="/travel/adoption/orphanageVisit">Orphanage Visits</a></li>
                      <li><a href="/travel/adoption-customize">Customize Your Own Tour</a></li>
                      <li><a href="/travel/adoption/privateTours">Private Tours by Province</a></li>
                    </ul>
              </li>
              <!--<li><a href="/china-flight/">Flights</a></li>-->
              <li class="lastmenu"><a class="hide" href="/china-guide/">China Guide</a>
                  <ul>
                    <li><a href="/china-guide/city-guide/">China City Guide</a></li>
                    <li><a href="/china-guide/attractions/">China Attraction Guide</a></li>
                    <li><a href="/china-guide/culture/">Chinese Culture</a></li>
                    <li><a href="/china-guide/travel-tools/">China Travel Tools</a></li>
                    <li><a href="/china-guide/travel-tips/">China Travel Tips</a></li>
                    <li><a href="/things-to-do/">Things to Do in China</a></li>
                    <li style="display:none"><a href="/travel/hotel">China Hotels</a></li>
                  </ul>
                  
              </li>
         </ul>    
</div>
<script type="text/javascript">
(function($){
  $("#more-select").click(function(){
    $("#choose_more_cities").show();
  });
  $("#close-none01").click(function(){
    $("#choose_more_cities").hide();
  });
	/*
  $("#choose_days").change(function(){
    $("#menu_days").val($(this).val());
  })
	
  $("#choose_price").change(function(){
    $("#menu_price").val($(this).val());
  })
	*/ 
  $("input[name='city2[]']").click(function(){
     var choose_city_string = [];
     $("input[name='city2[]']:checked").each(function(){
       choose_city_string.push($(this).val());
	   choose_city_string.sort();
	   $.unique(choose_city_string); 
       $("#menu_city").val(choose_city_string.join(','));
       $("#choose_city2").val(choose_city_string.join(','));
     })
   })

   $("#city_reset").click(function(){
      $("input[name='city2[]']").attr("checked",false);
      $("#choose_city2").val("");
   }) 
		
	 $("#mySelInput").click(function(){
				$("#choose_days").toggle();	
	 })
	 $("#choose_days li a").click(function(){
	 		$("#menu_days").val($(this).text());
			$("#choose_days").toggle();
			$("#mySelInput").html($(this).text());
	 })
	 
	 $("#mySelInputPrice").click(function(){
				$("#choose_price").toggle();
	 })
	 
	 $("*").live("click",function(){
	 		if(this.id!='mySelInput') {$("#choose_days").hide();};
			if(this.id!='mySelInputPrice') {$("#choose_price").hide();}
	 })

	 
	 $("#choose_price li a").click(function(){
	 		$("#menu_price").val($(this).text());
			$("#choose_price").toggle();
			$("#mySelInputPrice").html($(this).text());
	 })
   if($("#demo3").html()){
	 $("#demo3").webwidget_slideshow_dot({
                    slideshow_time_interval: '3500',
                    slideshow_window_width: '424',
                    slideshow_window_height: '79',
                    slideshow_title_color: '#FFF',
                    soldeshow_foreColor: '#7799BB',
                    directory: 'images/'
                });
   }
		
}(jQuery));

function submit_form()
{ 
  document.toursearchpanelform.submit()
}
</script>
