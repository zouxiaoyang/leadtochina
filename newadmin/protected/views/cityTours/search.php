<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.zxxbox.3.0-min.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.floatDiv.js');?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/template.css'); ?>
<?php
include_once(SITEROOT.'/config/beijingtours.php');
$request_uri = Yii::app()->createUrl('cityTours/search',array('title'=>$title)).'?';
?>
<style type="text/css"> 
  .air_note2_new .title1 {
    background: url("/images/newhomepage/right_title_03.jpg") no-repeat scroll 0 0 transparent;
    color: #fff;
    font-size: 14px;
    height: 39px;
    line-height: 39px;
    padding-left: 16px;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-weight:bold;
  }
  .mod_des {
    padding: 12px;
  }
  .mod_des span {
    color: #333333;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
  }
  .mod_des ul li {
    background-repeat: no-repeat;
    border-bottom: 1px dotted #CCCCCC;
    font-size: 12px;
    font-weight: bold;
    list-style-image: none;
    list-style-type: none;
    padding-bottom: 8px;
    padding-top: 8px;
  }
  .mod_des ul li a:hover {
    background-color: #FF9900;
    color: #FFFFFF;
    font-weight: bold;
    padding: 3px 5px;
    text-decoration: none;
  }
  .mod_des ul {
    padding-left: 6px;
  }
  .tourism_rightnew1{ width:100%; margin:0 auto; border-top: 1px solid #666; padding-top:35px;}
  .tourism_rightnew1 .tourism_title1{ background:url(/images/tourism/right_title1_03.jpg) no-repeat left; width:184px; height:38px; line-height:38px; text-align:center; font-size:18px; color:#474747;}
  .tourism_rightnew1 .tourism_note1{ border:1px #d9d9d9 solid; padding:10px;}
  tourism_rightnew1 .tourism_note1 span{ display:block; margin-bottom:20px;}
  .tourism_rightnew1 .tourism_span1{ background:#f1f1f1; padding:8px;}
  .tourism_rightnew1 .tourism_span2{ text-align:center;}
  .tobanner-cont ul li a{cursor:pointer;}
  .wrap_bar,.wrap_title{display:none !important;}
  .wrap_body{ border-top:none;}
  #jv-right-new,#jv-left-new{ margin-top:20px;}
  
</style>


<div id="menu-home"><strong>You are here: </strong><a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a> Beijing Tours </div>
    
<div id="content_new">
<div class="tobanner">
       <div class="tobanner-top" id="top"><span>Beijing Tours Search</span><span class="closenew" style="display:none"><img src="/images/newhomepage/span-close.jpg" alt=""></span></div>
       <div class="tobanner-cont">
           <ul id="choose_day">
              <li class="weight">By Duration:</li>
              <?php $query = $this->query;  unset($query['days']);  $remove_link_days = http_build_query($query);?>
              <li><a href="<?php echo $request_uri.$remove_link_days;?>" <?php if(!$this->day):?>class="select-new" <?php endif;?>>All</a></li>
              <?php foreach($days as $k=>$v):?>
              <?php $link_days = http_build_query(array_merge($this->query,array('days'=>$v.'_bj')));?>
              <li><a href="<?php echo $request_uri.$link_days; ?>" <?php if($this->day==$k):?>class="select-new" <?php endif;?>><?php echo $v;?></a></li>
              <?php endforeach;?>
           </ul>
           <ul>
              <li class="weight">By Price:</li>
              <?php $query = $this->query;  unset($query['price']); $remove_link_price = http_build_query($query);?>
              <li><a href="<?php echo $request_uri.$remove_link_price;?>" <?php if(!$this->price):?>class="select-new" <?php endif;?>>All</a></li>
              <?php foreach($price as $k=>$v):?>
              <?php $link_price = http_build_query(array_merge($this->query,array('price'=>$k.'_bj'.$v)));?>
              <li><a href="<?php echo $request_uri.$link_price;?>" <?php if($this->price==$k):?>class="select-new" <?php endif;?>><?php echo $v;?></a></li>
              <?php endforeach;?>
           </ul>
           <ul id="choose_des">
              <li class="weight">By Destination:</li>
              <?php $query = $this->query;unset($query['des']);$remove_link_des = http_build_query($query);?>
              <li><a href="<?php echo $request_uri.$remove_link_des;?>" <?php if($this->des==0):?>class="select-new" <?php endif;?>>All</a></li>
              <li>
                 <ol class="alignment">
                    <?php foreach($destination as $k=>$v):?>
                      <?php $link_des= http_build_query(array_merge($this->query,array('des'=>$k.'_'.$v)));?>
                      <li><a href="<?php echo $request_uri.$link_des;?>" <?php if($this->des==$k):?>class="select-new" <?php endif;?>><?php echo $v;?><span>(<?php echo $destination_count[$k];?>)</span></a></li>
                    <?php endforeach;?>
                </ol>
              </li>
           </ul>
           <ul id="choose_tour_type">
             <li class="weight">By Tour Type:</li>
             <?php $query = $this->query;unset($query['tour_type']);$remove_link_tour_type = http_build_query($query);?>
              <li><a href="<?php echo $request_uri.$remove_link_tour_type;?>" <?php if($this->tour_type==0):?>class="select-new" <?php endif;?>>All</a></li>
              <?php foreach($tour_type as $k=>$v):?>
              <?php $link_tour_type = http_build_query(array_merge($this->query,array('tour_type'=>$k.'_'.$v)));?>
               <li><a href="<?php echo $request_uri.$link_tour_type;?>" <?php if($this->tour_type==$k):?>class="select-new" <?php endif;?>><?php echo $v;?></a></li>
              <?php endforeach;?>
           </ul>
           <ul id="choose_group">
              <li class="weight">By Group:</li>
              <?php $query = $this->query;unset($query['group']);$remove_link_group = http_build_query($query);?>
              <li><a href="<?php echo $request_uri.$remove_link_group;?>" class="select-new" <?php if($this->group==0):?>class="select-new" <?php endif;?>>All</a></li>
              <li>
                <ol>
                   <?php foreach($groups as $k=>$v):?>
                    <?php $link_group = http_build_query(array_merge($this->query,array('group'=>$k.'_'.$v)));?>
                    <li><a href="<?php echo $request_uri.$link_group;?>" <?php if($this->group==$k):?>class="select-new" <?php endif;?>><?php echo $v;?></a></li>
                   <?php endforeach;?>
                </ol>
              </li>
           </ul>
           <ul id="choose_transportation">
              <li class="weight">By Transportation:</li>
              <?php $query = $this->query;unset($query['transportation']);$remove_link_transportation = http_build_query($query);?>
              <li><a href="<?php echo $request_uri.$remove_link_transportation;?>" <?php if($this->transportation==0):?>class="select-new" <?php endif;?>>All</a></li>
              <li>
                 <ol>
                   <?php foreach($vehicles as $k=>$v):?>
                        <?php $link_transportation = http_build_query(array_merge($this->query,array('transportation'=>$k.'_'.$v)));?>
                        <li><a href="<?php echo $request_uri.$link_transportation; ?>" <?php if($this->transportation==$k):?>class="select-new" <?php endif;?>><?php echo $v;?></a></li>
                     <?php endforeach;?>
                  </ol>
             </li>
           </ul>
           <ul id="choose_theme">
              <li class="weight">By Theme:</li>
              <?php $query = $this->query;unset($query['theme']);$remove_link_theme = http_build_query($query);?>
              <li><a href="<?php echo $request_uri.$remove_link_theme;?>" <?php if($this->theme==0):?>class="select-new" <?php endif;?>>All</a></li>
              <li>
                <ol>
                    <?php foreach($themes as $k=>$v):?>
                    <?php $link_theme = http_build_query(array_merge($this->query,array('theme'=>$k.'_'.$v)));?>
                    <li><a href="<?php echo $request_uri.$link_theme;?>" <?php if($this->theme==$k):?>class="select-new" <?php endif;?>><?php echo $v;?></a></li>
                    <?php endforeach;?>
                </ol>
              </li>
           </ul>
       </div>
</div>
<div class="clear"></div>
  <div id="jv-right-new">
    <div id="jv-right-top">                  
      <div class="moduletable">
        <div class="modulecontent">
          <div class="video_new" style="display:none;"></div>
          <div class="air_note2_new">
            <div class="pic_new"><a href="/index.php?option=com_diytour" target="_blank"><img src="/images/newhomepage/beijing-tours.jpg" alt=""></a></div>
          </div>
      <div class="air_note2_new">
            <div class="pic_new"><a href="<?php echo Yii::app()->createUrl('cityTours/airView');?>" target="_blank"><img src="/images/newhomepage/air-new.jpg" alt=""></a></div>
          </div>


          <div class="air_note2_new" style="display:none;">
              <div class="title1">Latest Questions</div>
              <div class="not_new01">
                <div class="question_new">
                  <ul>
                    <li><span>1.</span><a href="/tour/md-08.html">test 2013-2-20... <span class="time-new">[ 2013-02-20 ]</span><br><span>12 days Chinese Essence Minority Budget Tour </span></a></li>
                    <li><span>2.</span><a href="/tour/md-08.html">Test question... <span class="time-new">[ 2013-02-20 ]</span><br><span>12 days Chinese Essence Minority Budget Tour </span></a></li>
                    <li><span>3.</span><a href="/tour/bct-10.html">fdsfalert(1);... <span class="time-new">[ 2013-02-19 ]</span><br><span>10 days China Train Tour with Yangtze River</span></a></li>
                    <li><span>4.</span><a href="/tour/bct-05.html">Add test question one... <span class="time-new">[ 2013-01-23 ]</span><br><span>10 days Standard China Essence Tour</span></a></li>
                    <li><span>5.</span><a href="/tour/bct-05.html">test 2222... <span class="time-new">[ 2013-01-23 ]</span><br><span>10 days Standard China Essence Tour</span></a></li>
                  </ul>
                </div>
              </div>
              <div><img border="0" src="/images/newhomepage/right1_10.jpg"></div>
          </div>





<div class="air_note2_new">
    <div class="mod_des" style="padding:0px;">
    <span style="background:url(/images/newhomepage/right_title_03.jpg) no-repeat; width:270px; height:39px; display:block; padding:0px 0px 0px 16px; line-height:35px; ">Beijing <span style="color:#fff;
         font-weight:normal;">City Guide</span></span>
    <div id="contentleft" style="width:248px; height:auto; padding:6px 10px 15px 10px; border:1px solid #E2E2E2; border-top:none; border-bottom:none;background:#F8F8F8;">

          <ul class="leftNav">
            <li class="fact"><a href="/beijing/facts.html" title="Beijing facts">Beijing Facts</a></li>
            <li class="Attraction"><a href="/beijing/attractions.html" title="Beijing Attractions">Beijing Attractions</a></li>
            <li class="shopping"><a href="/beijing/shopping.html" title="Beijing  Shopping">Beijing Shopping </a></li>
            <li class="Nightlife"><a href="/beijing/nightlife.html" title="Beijing  Nightlife">Beijing Nightlife</a></li>
            <li class="tour"><a href="/beijing/tours/" title="Beijing  Tours">Beijing Tours</a></li>
            <li class="food"><a href="/beijing/food-&amp;-restaurants.html" title="Beijing  Food">Beijing Food &amp; Restaurants</a></li>
            <li class="tip"><a href="/beijing/travel-tips.html" title="Beijing  Travel Tips">Beijing Travel Tips</a></li>
            <li class="Climate"><a href="/beijing/climate.html" title="Beijing  Travel Tips">Beijing Climate</a></li>
            <li class="Transportation"><a href="/beijing/transportations.html" title="Beijing  Transportations">Beijing Transportations</a></li>       
            <li class="hotel"><a href="/hotel/beijing-hotels/" title="Beijing  hotel">Beijing Hotel</a></li>
            <li class="Car"><a href="/travel/rental/car-rental" title="Beijing  hotel">Beijing Car Rental</a></li>
            <li class="Guide"><a href="/travel/rental/guide-rental" title="Beijing  hotel">Beijing Tour Guide Rental</a></li>
          </ul>
    </div>
    <div style="width:100%; height:auto; float:left; padding:0px; margin:0px;"><img src="/images/right1_10.jpg"></div>
    </div>
</div>

    <div class="note3">
      <?php $this->renderPartial('/common/tripAdvisor');?>
    </div>


    <div class="air_note2_new" style=" margin-top:10px;">
    <span style="margin-left:35px;"><a href="/hotel/beijing-hotels/" target="_blank"><img border="0" src="/images/tourism/hotel_03.jpg"></a></span>
    <span style="margin-left:15px; margin-right:15px;"><a href="/travel/rental/guide-rental" target="_blank"><img border="0" src="/images/tourism/guide_03.jpg"></a></span>
    <span><a href="/travel/rental/car-rental" target="_blank"><img border="0" src="/images/tourism/car_03.jpg"></a></span>
  
  </div>


        </div>
      </div>
    </div>
    <div id="jv-right-bottom"></div>
  </div>

  <div id="jv-left-new">
    <div id="new-add-content">
      <div class="conditions"><b>Selected Conditions:</b>
        <ul>
              <li id="select01">
                  <?php if($this->day):?>
                  <div><span><?php if($this->day == 99) echo $days[99];else echo $days[(int)$this->day];?></span>
                    <a href="<?php echo $request_uri.$remove_link_days;?>"><img class="close01" src="/images/newhomepage/smallclose.jpg" /></a></div>
                 <?php endif;?>
              </li>
              <li id="select02">
                  <?php if($this->price):?>
                  <div><span><?php echo $price[(int)$this->price];?></span><a href="<?php echo $request_uri.$remove_link_price;?>"><img class="close01" src="/images/newhomepage/smallclose.jpg" /></a></div>
                <?php endif;?>
              </li>
              <li id="select03">
                  <?php if($this->des):?>
                  <div><span><?php echo $destination[(int)$this->des];?></span><a href="<?php echo $request_uri.$remove_link_des;?>"><img class="close01" src="/images/newhomepage/smallclose.jpg" /></a></div>
                <?php endif;?>
              </li>
              <li id="select04">
                 <?php if($this->tour_type):?>
                  <div><span><?php echo $tour_type[(int)$this->tour_type];?></span><a href="<?php echo $request_uri.'?'.$remove_link_tour_type;?>"><img class="close01" src="/images/newhomepage/smallclose.jpg" /></a></div>
                 <?php endif;?>
              </li>
              <li id="select05">
                  <?php if($this->group):?><div><span><?php echo $groups[(int)$this->group];?></span><a href="<?php echo $request_uri.$remove_link_group;?>"><img class="close01" src="/images/newhomepage/smallclose.jpg" /></a></div>
                 <?php endif;?>
              </li>
              <li id="select06">
                  <?php if($this->transportation):?>
                  <div><span><?php echo $vehicles[(int)$this->transportation];?></span><a href="<?php echo $request_uri.$remove_link_transportation;?>"><img class="close01" src="/images/newhomepage/smallclose.jpg" /></a></div>
                 <?php endif;?>
              </li>
              <li id="select07">
                 <?php if($this->theme):?>
                  <div><span><?php echo $themes[(int)$this->theme];?></span><a href="<?php echo $request_uri.$remove_link_theme;?>"><img class="close01" src="/images/newhomepage/smallclose.jpg" /></a></div>
                 <?php endif;?>
              </li>
        </ul>  
      </div>
      <div class="price-menu"><span>Beijing Tour Packages</span><span class="choices"><em id="choices"><?php echo $dataProvider->totalItemCount;?></em> choices!</span>
        <?php if($this->order == 'price_down'):?>
          <a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'price_up')));?>" style="cursor:pointer;">Price ↓</a>
        <?php else:?>
          <a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'price_down')));?>" style="cursor:pointer;">Price ↑</a>
        <?php endif;?>
        <?php if($this->order == 'day_down'):?>
          <a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'day_up')));?>" style="cursor:pointer;">Days ↓</a>
        <?php else:?>
          <a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'day_down')));?>" style="cursor:pointer;">Days ↑</a>
        <?php endif;?>
        <?php if($this->order == 'reviews_down'):?>
          <a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'reviews_up')));?>" style="cursor:pointer;">Reviews ↓</a>
        <?php else:?>
        <a href="<?php echo $request_uri.http_build_query(array_merge($this->query,array('order'=>'reviews_down')));?>" style="cursor:pointer;">Reviews ↑</a>
        <?php endif;?>

      </div>
    <div class="clear"></div>
         <div id="list-tour">
        <div class="list-tour">
            <?php if($dataProvider->totalItemCount):?>
              <?php $this->widget('zii.widgets.CListView', array(
                 'dataProvider'=>$dataProvider,
                 'itemView'=>'_search_list',
                 'ajaxUpdate'=>false,
                  'pager'=>array(
                    'cssFile'=>False,
                    'header'=>'',
                  ),
                 'template'=>"{items}\n{pager}",
               )); ?>
            <?php else:?>
                <div class="result-new"><h2>Sorry, <span>O</span> results found according to your requirements.</h2>
                <p>You can re-search the itinerary by changing some conditions.</p></div>
            <?php endif;?>

          </div>
          <div class="clear"></div>
          <div class="page-tour" style="display:none"><a href="#">&lt;&lt;</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">Next Page &gt;&gt;</a> <span>To <input type="text" name="" style="border:1px solid #999; width:40px; height:15px;"> page <a href="#">sure</a></span></div>
           
                               
        </div>
  </div> 
</div>     


<!-- comparison-->
<div id="template" style="display:none">
   <div><table width="100%" cellspacing="0" cellpadding="0" border="0"> 
   <tbody>
    <tr>
      <td width="3%" valign="top"><label> <input type="checkbox" value="{{id}}" checked="ckecked" name="tour_id[]"></label></td>
      <td colspan="2"><a href="#"><span>{{tour_title}}</span></a></td> 
    </tr> 
    <tr>
      <td>&nbsp;</td>
      <td width="57%" class="org"><strong>{{tour_price}}</strong></td> 
      <td width="40%"><a href="javascript:;" class="delete-new" onclick="_comparison.delete_tour(this, '{{id}}')">Delete</a></td> 
    </tr>
    </tbody>
   </table></div>
</div>

<div class="duibi" id="duibi" style="display:none">
<form name="comparison_form" action="/index.php?option=com_pgcategory&amp;task=comparison" target="_blank" method="post">
   <h4><span class="f_right" onclick="_comparison.close();">X</span>Product Comparison</h4>
   <ul id="tour_comparison">
    <p>only 3 tours maximum can be compared each time</p>
   </ul>
   <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody>
     <tr>
      <td height="60" align="center"><img width="121" height="29" onclick="_comparison.submit()" style="cursor: pointer;" id="btnContrast1" src="/images/newhomepage/db.jpg"></td>
     </tr>
  </tbody>
   </table>
</form>
</div>


<div id="loading" style="z-index:1001;left:100px; top:100px; width:230px; height:auto; border:1px solid #d0d1d3; background:url(/templates/jv_news_ii/images/loading.gif) #fff 17px 15px no-repeat; padding:5px 30px 15px 60px; display:none; font-size:14px; color:#000;">
  <p>Searching, Please Wait...</p>
</div>

<script type="text/javascript">
  (function($){
  $("#more").click(function(){
      $(".not_morelist").show();
    });
    
    $("#close_new").click(function(){
      $(".not_morelist").hide();
    });
  
  $(".closenew").click(function(){
    $(".tobanner").hide();
  });
  
  })(jQuery);

  var _comparison = {
  choose_tourids:[],
  add_tour:function(obj,id){
    if($.inArray(id, this.choose_tourids) != -1){
      alert("This tour has already existed.");
      return;
    }
    if(this.choose_tourids.length &amp;gt;=3){
      alert("Only 3 tours maximum can be compared each time.");
      return;
    }
    this.choose_tourids.push(id);
    var template = $('#template').html();
    var content_template = '';
    var tour_title = $(obj).parents("ul").find("li:eq(1)").find("a").html();
    var tour_price = $(obj).parents("ul").find("li:eq(1)").find("b").html();

    content_template = "&amp;lt;li&amp;gt;" + template.replace( /{{tour_title}}/, tour_title).replace(/{{tour_price}}/, tour_price).replace(/{{id}}/g, id)+"&amp;lt;/li&amp;gt;";
    $(content_template).appendTo($("#tour_comparison"));
    $("#duibi").floatdiv({right:"230px",top:"115px"}).show();
  }, 
    delete_tour:function(obj, id){
    var id = parseInt(id);
    var inx = $.inArray(id, this.choose_tourids);
    if(inx != -1){
      this.choose_tourids.splice(inx, 1);
    }
    $(obj).parents("li").remove();
  },
  close:function(){
    $(".duibi").hide();
    $("#tour_comparison").html('');
    this.choose_tourids = [];
  },
    submit: function(){
      if($("#duibi").find("input[name='tour_id[]']:checked").length &amp;lt; 2){
      alert("At Least 2 tours for comparison");
      return;
    } 
    document.forms['comparison_form'].submit();
  }
  }

</script>

<!-- Google Code for &#30331;&#24405;&#36807;BEIJING TOURS Remarketing List -->
<script type="text/javascript">
/* &amp;lt;![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "xYT9COLs_AIQ3o7h3QM";
var google_conversion_value = 0;
/* ]]&amp;gt; */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script><img width="1" height="1" border="0" src="http://www.googleadservices.com/pagead/conversion/1001932638/?random=1361431251384&amp;cv=7&amp;fst=1361431251384&amp;num=1&amp;fmt=3&amp;value=0&amp;label=xYT9COLs_AIQ3o7h3QM&amp;bg=ffffff&amp;hl=en&amp;guid=ON&amp;u_h=768&amp;u_w=1366&amp;u_ah=708&amp;u_aw=1366&amp;u_cd=24&amp;u_his=16&amp;u_tz=480&amp;u_java=false&amp;u_nplug=23&amp;u_nmime=34&amp;url=http%3A//fl.leadtochina.lab/travel/searchBeijing&amp;frm=0"><img width="1" height="1" border="0" src="http://www.googleadservices.com/pagead/conversion/1001932638/?random=1361430382182&amp;cv=7&amp;fst=1361430382182&amp;num=1&amp;fmt=3&amp;value=0&amp;label=xYT9COLs_AIQ3o7h3QM&amp;bg=ffffff&amp;hl=en&amp;guid=ON&amp;u_h=768&amp;u_w=1366&amp;u_ah=708&amp;u_aw=1366&amp;u_cd=24&amp;u_his=45&amp;u_tz=480&amp;u_java=false&amp;u_nplug=23&amp;u_nmime=34&amp;ref=http%3A//fl.leadtochina.lab/beijing/tours%3Fv%3Dsearch%26option%3Dcom_pgcategory%26days%3D8-10+Days_bj%26price%3D6_bjAbove+%2524601%26des%3D2_Beijing+Xian+Tours%26transportation%3D4_Air&amp;url=http%3A//fl.leadtochina.lab/beijing/tours%3Fv%3Dsearch%26option%3Dcom_pgcategory%26days%3D8-10+Days_bj%26price%3D6_bjAbove+%2524601%26des%3D5_Beijing+Shanghai+Tours%26transportation%3D4_Air&amp;frm=0">
<noscript>
&amp;lt;div style="display:inline;"&amp;gt;
&amp;lt;img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1001932638/?value=0&amp;amp;amp;label=xYT9COLs_AIQ3o7h3QM&amp;amp;amp;guid=ON&amp;amp;amp;script=0"/&amp;gt;
&amp;lt;/div&amp;gt;
</noscript>
</div>
