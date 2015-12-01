<?php 
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/newbeijing1.css'); 
Yii::app()->clientScript->registerScriptFile(yii::app()->request->baseUrl.'/js/jquery.soChange.js');
$request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>$title)).'?';
?>
<style type="text/css">
.contentnew{ background:#eee; overflow:hidden; font-size:12px; margin-top:8px; padding-bottom:15px;}
.errorMessage{display:none}
</style>
<div class="content-beijing">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="/travel/city-tours">City Tours</a> Beijing Tours</div>
    <div id="banner"><img alt="" src="/images/citytours/banner_beijing.jpg" /></div>
    
    <div class="text">
         <div class="aoptees">
     <div class="aopteesleft"><h2>DISCOVER THE CAPITAL CITY OF CHINA FROM HERE</h2>
                         We are offering the most qualified Beijing tour itineraries with competitive prices. 
     </div>
     <div class="aopteesright">
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Flead2china&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21&amp;appId=132342830175639" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe> </div>
   </div> 
   <div class="recommend">
      <ul>
         <li><a href="/travel/day-tours-in-beijing"><img src="/images/beijingtours/new/pic1.jpg" alt="" /><span><strong>Day Tours in Beijing</strong>1-7 days private tour packages, Great Wall, 72 hrs Free-visa tour ...</span></a></li>
         <li><a href="/travel/beijing-side-trips"><img src="/images/beijingtours/new/pic2.jpg" alt="" /><span><strong>Beijing Side Trips</strong>Xian, Shanghai, Datong, Tianjin, Harbin, Inner Mogolia, Chengde, Luoyang ...</span></a></li>
         <li><a href="/index.php?option=com_diytour"><img src="/images/beijingtours/new/pic3.jpg" alt="" /><span><strong>DIY Beijing Tours</strong>Free to design your own trip, We create you a unique experience</span></a></li>
         <li style="margin-right:0px;"><a href="/travel/china-guide/beijing-city-guide"><img src="/images/beijingtours/new/pic4.jpg" alt="" /><span><strong>Beijing Travel Guide</strong>Beijing facts, hotel, climate, transportation, food, attractions</span></a></li>
      </ul>
   </div>
    </div>
    
    <div class="clear"></div> 
    <!--  left start  -->
    <div id="left">
        <div class="chinamenu">
         <ul>
            <li class="dq" id="best_private_tours_tab"><strong>Beijing Private Tours</strong><span></span></li>
            <li id="best_coach_tours_tab"><strong>Beijing Coach Tours</strong><span></span></li>
            <li id="beijing_side_trips_tab"><strong>Beijing Side Trips</strong><span></span></li>
         </ul>
       </div>
       <?php
        $tour_ids = array(103,944,333,312,345);
       ?>
       <div class="beijing_list" id="tourcontent0">
           <?php $tours = ToursPackage::model()->findAllByPk($tour_ids); ?>
           <?php foreach($tours as $v):?>
           <ul>
               <li class="pic"><a href="<?php echo $v->url();?>"><img src="/<?php echo $v->filedir;?>/<?php echo $v->pic;?>"></a></li>
               <li>
                  <ol>
                     <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
                     <li class="picleft">Destination: <?php echo $v->route;?><br />
                      <!--Included: <?php echo strip_tags($v->tour_intro);?><br /> -->
            	     Highlights: <?php echo SiteUtils::mb_truncate_text($v->attractions,170);?></li>
                     <li class="picright"><span>[Reviews <a href="<?php echo $v->url();?>"><?php echo $v->reviews;?></a>]</span>
                                   <span>From <strong><?php echo SiteUtils::getCurrencyPrice($v->price);?></strong></span>
                                   <a href="<?php echo $v->url();?>" class="details"><img src="/images/beijingtours/new/inquiry.png" alt="" /></a>
              </li>
                  </ol>
              </li>
           </ul>
          <?php endforeach;?>
          <div class="more_add"><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours"><img src="/images/beijingtours/new/more_add.jpg" alt="" /></a></div>
       </div>

       <?php $tour_ids2 = array(90,356,575,589,223);?>
       <div class="beijing_list" id="tourcontent1" style="display:none">
           <?php $tours2 = ToursPackage::model()->findAllByPk($tour_ids2); ?>
           <?php foreach($tours2 as $v):?>
           <ul>
               <li class="pic"><a href="<?php echo $v->url();?>"><img src="/<?php echo $v->filedir;?>/<?php echo $v->pic;?>"></a></li>
               <li>
                  <ol>
                     <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
                     <li class="picleft">Destination: <?php echo $v->route;?><br />
                     <!-- Included: <?php echo strip_tags($v->tour_intro);?><br /> -->
            	     Highlights: <?php echo SiteUtils::mb_truncate_text($v->attractions,170);?></li>
                     <li class="picright"><span>[Reviews <a href="<?php echo $v->url();?>"><?php echo $v->reviews;?></a></span>
                                   <span>From <strong><?php echo SiteUtils::getCurrencyPrice($v->price);?></strong></span>
                                   <a href="<?php echo $v->url();?>" class="details"><img src="/images/beijingtours/new/inquiry.png" alt="" /></a>
              </li>
                  </ol>
              </li>
           </ul>
          <?php endforeach;?>
          <div class="more_add"><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups"><img src="/images/beijingtours/new/more_add.jpg" alt="" /></a></div>
       </div>
       
       <div class="side_content" id="tourcontent2" style="display:none;">
           <ul>
        <li class="pic"><a href="/travel/beijing-shanghai-tours"><img alt="" src="/images/beijingtours/new/pic6.jpg"><span>Beijing Shanghai Tours</span></a></li>
                        <li><a href="/travel/china-2-days-beijing-tours-from-shanghai-by-flight-351.html">2 Days Beijing Tours from Shanghai by Flight</a></li>
                <li><a href="/travel/china-3-days-beijing-tours-from-shanghai-by-flight-352.html">3 Days Beijing Tours from Shanghai by Flight</a></li>
                <li><a href="/travel/china-3-days-shanghai-tours-from-beijing-by-bullet-train-round-trip-411.html">3 Days Shanghai Tours from Beijing by Bullet Train (Round Trip)</a></li>
                <li class="view"><a href="/travel/beijing-shanghai-tours">View Beijing Shanghai Tours Full List</a></li>
      </ul>
      
      <ul>
        <li class="pic"><a href="/travel/beijing-xian-tours"><img alt="" src="/images/beijingtours/new/pic7.jpg"><span>Beijing Xi'an Tours</span></a></li>
                        <li><a href="/travel/china-2-days-standard-xian-tours-from-beijing-by-flight-152.html">2 Days Standard Xian Tours from Beijing by Flight </a></li>
                <li><a href="/travel/china-1-day-xian-tours-by-overnight-fast-train-trip-410.html">1 Day Xi'an Tours by Overnight Fast Train Trip</a></li>
                <li><a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-flight-562.html">1 Day Terracotta Warriors Tours from Beijing by Flight</a></li>
                <li class="view"><a href="/travel/beijing-xian-tours">View Beijing Xi'an Tours Full List</a></li>
      </ul>
      
      <ul>
        <li class="pic"><a href="/travel/cruisePorts/tianjinCruisePort"><img alt="" src="/images/beijingtours/new/pic8.jpg"><span>Beijing Tianjin Tours</span></a></li>
                        <li><a href="/travel/china-2-days-standard-xian-tours-from-beijing-by-flight-152.html">2 Days Standard Xian Tours from Beijing by Flight </a></li>
                <li><a href="/travel/china-1-day-xian-tours-by-overnight-fast-train-trip-410.html">1 Day Xi'an Tours by Overnight Fast Train Trip</a></li>
                <li><a href="/travel/china-1-day-terracotta-warriors-tours-from-beijing-by-flight-562.html">1 Day Terracotta Warriors Tours from Beijing by Flight</a></li>
                <li class="view"><a href="/travel/cruisePorts/tianjinCruisePort">View Beijing Tianjin Tours Full List</a></li>
      </ul>
      
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=12_Beijing+Xian+Shanghai+Tours"><img alt="" src="/images/beijingtours/new/pic9.jpg"><span>Beijing Xi'an Shanghai</span></a></li>
                        <li><a href="/travel/china-8-days-china-golden-standard-tour-17.html">8 Days China Golden Standard Tour</a></li>
                <li><a href="/travel/china-9-days-train-tour-across-the-golden-triangle-72.html">9 Days Train Tour Across the Golden Triangle</a></li>
                <li><a href="/travel/china-9-days-shanghai-xian-beijing-private-tour-578.html">9 Days Shanghai Xian Beijing Private Tour</a></li>
                <li class="view"><a href="/travel/search-beijing-tours?des=12_Beijing+Xian+Shanghai+Tours">View Beijing Xi'an Shanghai Full List</a></li>
      </ul>
      
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours"><img alt="" src="/images/beijingtours/new/pic10.jpg"><span>Beijing Datong Tours</span></a></li>
                        <li><a href="/travel/china-6-days-beijing-datong-pingyao-xian-private-tour-372.html">6 Days Beijing, Datong, Pingyao, Xian Private Tour</a></li>
                <li><a href="/travel/china-2-days-beijing-datong-private-tour-376.html">2 Days Beijing, Datong Private Tour</a></li>
                <li><a href="/travel/china-4-days-beijing-datong-private-tour-385.html">4 Days Beijing, Datong Private Tour</a></li>
                <li class="view"><a href="/travel/search-beijing-tours?des=6_Beijing+Datong+Tours">View Beijing Datong Tours Full List</a></li>
      </ul>
      
      <ul>
        <li class="pic"><a href="/travel/search-beijing-tours?des=10_Beijing+Luoyang+Tours"><img alt="" src="/images/beijingtours/new/pic11.jpg"><span>Beijing Luoyang Tours</span></a></li>
                        <li><a href="/travel/china-3-days-beijing-luoyang-tour-by-bullet-train-382.html">3 Days Beijing Luoyang Tour by Bullet Train</a></li>
                <li><a href="/travel/china-3-days-beijing-luoyang-tour-round-trip-by-air-387.html">3 Days Beijing Luoyang Tour - Round Trip by Air</a></li>
                <li class="view"><a href="/travel/search-beijing-tours?des=10_Beijing+Luoyang+Tours">View Beijing Luoyang Tours Full List</a></li>
      </ul>
      <div class="more_add" style=" padding-left:9px;"><a href="/travel/beijing-side-trips"><img src="/images/beijingtours/new/more_add.jpg" alt="" /></a></div>
       </div>
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right">
       <?php $this->renderPartial("_message");?>
       <div class="tripcont">
           <div id="TA_selfserveprop475" class="TA_selfserveprop">
<ul id="l6BhK7bvATl" class="TA_links g2MkIx9">
<li id="w6TX2X" class="GN8ZBPkFh">
<a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=475&amp;locationId=3824010&amp;lang=en_US&amp;rating=true&amp;nreviews=2&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true"></script>
       </div>
    </div>
    <!--  right end  -->
</div>
<script type="text/javascript">
  var _bj = (function($){
    return {
      changetab:function(obj){
        var ul_obj = $(obj).parents(".tours").find(".title > ul");
        ul_obj.find("li").removeClass("dq");
        $(obj).addClass("dq");
        var inx = ul_obj.find("li").index(obj);
        var tours_div_obj = $(obj).parents(".tours").find(".tabstyle");
        tours_div_obj.hide();
        tours_div_obj.eq(inx).show();
      },
      searchtab:function(obj){
        var span_obj = $(obj).parents(".right1").find("h2 > span");
        span_obj.removeClass("dq");
        var inx = span_obj.index(obj);
        $(obj).addClass("dq");
        $(obj).parents(".right1").find("div.search").hide();
        $(obj).parents(".right1").find("div.search").eq(inx).show();
      },
    }
  }(jQuery));

$(function(){
  $(".chinamenu").find("ul > li").click(function(){
    var obj = $(".chinamenu").find("ul > li");
    var inx = obj.index(this);
    $(".chinamenu").find("ul > li").removeClass("dq");
    obj.eq(inx).addClass("dq");
    $("div[id^=tourcontent]").hide();
    $("#tourcontent"+inx).show();
  })
  
})
 </script>
<!-- Google Code for &#30331;&#24405;&#36807;BEIJING TOURS -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "xYT9COLs_AIQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=1.000000&amp;label=xYT9COLs_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
