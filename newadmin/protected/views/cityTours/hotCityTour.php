<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/template.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/tours.css'); ?>
<?php 
  include_once(SITEROOT.'/config/beijingtours.php');
  $request_uri = Yii::app()->createUrl('cityTours/search', array('title'=>$title)).'?';
  //var_dump($destination_intro);
?>
<style>
ul li a.hot {
    background: url("/images/newhomepage/hot.gif") no-repeat scroll right transparent ;
    color: #757575;
    float: left;
    line-height: 16px;
    width:320px !important;
    padding: 3px 40px 3px 0px;
    text-decoration: underline;
}
</style>
<div id="menu-home"><strong>You are here: </strong><a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a>Beijing Tours </div>
<div id="content-tour">
  <div class="tobanner">
     <div class="tobanner-top"><span>Beijing Tours Search</span><span class="closenew" style="display:none"><img src="/images/newhomepage/span-close.jpg" alt="" /></span></div>
       <div class="tobanner-cont" id="search_conditions">
           <ul id="choose_day">
              <li class="weight">By Duration:</li>              
              <?php foreach($days as $k=>$v):?>            
              <?php $link_days = http_build_query(array('days'=>$v.'_bj'));?>
              <li><a href="<?php  echo $request_uri.$link_days; ?>"><?php echo $v;?></a></li>              
              <?php endforeach;?>
           </ul>
           <ul id="choose_des">
              <li class="weight">By Destination:</li>
              <li>
                 <ol class="alignment">
                    <?php foreach($destination as $k=>$v):?>
                      <?php $link_des= http_build_query(array('des'=>$k.'_'.$v));?>
                      <li><a href="<?php echo $request_uri.$link_des;?>"><?php echo $v;?><span>(<?php echo $destination_count[$k];?>)</span></a></li>
                    <?php endforeach;?>
                    <li><a href="/travel/cruise-port#tianjinPort">Tianjin Port to Beijing<span>(9)</span></a></li>
                    <li><a href="#other_side_tour" onclick="_bj.change_url()">Other Beijing Side Tours</a></li>
                 </ol>
              </li>
           </ul>
           <ul id="choose_tour_type">
              <li class="weight">By Tour Type:</li>
              <?php foreach($tour_type as $k=>$v):?>
              <?php $link_tour_type = http_build_query(array('tour_type'=>$k.'_'.$v));?>
               <li><a href="<?php echo $request_uri.$link_tour_type;?>"><?php echo $v;?></a></li>
              <?php endforeach;?>
           </ul>
           <ul id="choose_price">
              <li class="weight">By Price:</li>
              <?php foreach($price as $k=>$v):?>
              <?php $link_price = http_build_query(array('price'=>$k.'_bj'.$v));?>
              <li><a href="<?php echo $request_uri.$link_price;?>"><?php echo $v;?></a></li>
              <?php endforeach;?>
           </ul>           
           <ul id="choose_group">
              <li class="weight">By Group:</li>
              <li>
                <ol>
                  <?php foreach($groups as $k=>$v):?>
                    <?php $link_group = http_build_query(array('group'=>$k.'_'.$v));?>
                    <li><a href="<?php echo $request_uri.$link_group;?>"><?php echo $v;?></a></li>
                  <?php endforeach;?>
                </ol>
              </li>
           </ul>
           <ul id="choose_transportation">
              <li class="weight">By Transportation:</li>
              <li>
                 <ol>
                     <?php foreach($vehicles as $k=>$v):?>
                        <?php $link_transportation = http_build_query(array('transportation'=>$k.'_'.$v));?>
                        <li><a href="<?php echo $request_uri.$link_transportation; ?>"><?php echo $v;?></a></li>
                     <?php endforeach;?>
                 </ol>
             </li>
           </ul>
           <ul id="choose_theme">
              <li class="weight">By Theme:</li>
              <li>
                <ol>
									<?php foreach($themes as $k=>$v):?>
                    <?php $link_theme = http_build_query(array('theme'=>$k.'_'.$v));?>
                    <li><a href="<?php echo $request_uri.$link_theme;?>"><?php echo $v;?></a></li>
                    <?php endforeach;?>
                 </ol>
              </li>
           </ul>
           <div class="advanced"><a style="float:left; display:block; width:390px; height:24px;display:none" href="/index.php?option=com_activity" target="_blank"><img src="/images/newhomepage/free.jpg" alt="" /></a><a href="javascript:;" onClick="_bj.search_condition(this)">Simple Search</a> &raquo;  <span>or</span>  <a href="/index.php?option=com_diytour">Tailor Make a Beijing Tour</a></div>
       </div>
</div>
<div class="clear"></div>
<!-- top start -->
<div id="top">
    <div class="toptitle1" style="display:none;"><a href="http://www.leadtochina.com/tour/beijing-tour/bjc-01.html">Hefei Full View Travel Company offers <span>$99 Beijing 4 Days Coach Tour</span>, excludes Hotel.</a></div> 
    <div class="toptitle">Top Beijing Tours</div>  
    <div class="clear"></div>
    <!-- top-list start -->
    <div class="top-list">
    
    	<?php foreach ($topBeijingTours as $k=>$v):?>
    	<?php $price_array=unserialize($v->price_serialize);
    				$url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));?>
       <ul>
           <li class="pic2">
           
           <a href="<?php echo $url;?>"><img src="/<?php echo $v->filedir.$v->pic_beijing_top;?>" title="<?php echo $v->name;?>" alt="<?php echo $v->name;?>" /></a>
           
           </li>
           <li class="name"><a href="<?php echo $url;?>"><?php echo $v->name;?></a></li>
           <li class="price01"><b>From</b> <h2><?php echo SiteUtils::getCurrencyPrice($price_array[1]);?></h2>/per person  <span style=" display:none;"><?php echo $v->price_yuan;?></span><br>
                                          <em>Save:<span class="save"><?php echo SiteUtils::getCurrencyPrice(abs($v->price_yuan-$price_array[1]));?></span></em></li>
           <li class="client"><a href="<?php echo $url;?>#photo">Client Photos</a> <span><a href="<?php echo $url;?>#reviews">[Reviews <?php echo $v->reviews;?>]</a></span></li>
       </ul>       
      <?php endforeach;?>
    </div>
    <!-- top-list end -->
    <!-- tours-list start -->
    <div class="tours-list">
      <div class="listone">
         <div class="one-title"><span>Great Wall Tours</span><a href="<?php echo Yii::app()->createUrl('cityTours/best', array('title'=>'beijing-tours','id'=>1));?>">more+</a></div>
         <div class="one-cont">
            <div class="pic-desc"><a href="<?php echo $request_uri_list;?>&id=1"><img src="/images/beijingtours/<?php echo $destination_intro[1]['image'];?>" alt="" /></a><span><?php echo SiteUtils::mb_truncate_text($destination_intro[1]['description'],300);?></span></div>
            <ul>
           	<?php $n=0; foreach ($beijingToursList as $k=>$v):?>
            		<?php
            		if($v['recommend']==1):
            			$destination_array=explode(',',$v->destination_addr);            			      			
            			if(in_array('1', $destination_array)&&$n<4):
					    		$url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));
					    		$price_array=unserialize($v->price_serialize);
					    	?>
                <li><a <?php if($v->hot_tour==1):?>class="hot"<?php endif;?> href="<?php echo $url;?>" title="<?php echo $v->name;?>"><?php echo SiteUtils::mb_truncate_text($v->name,35);?></a><span>From <b><?php echo SiteUtils::getCurrencyPrice($price_array[1]);?></b> p/p</span></li>
              		<?php $n++; endif;?>
              	<?php endif;?>
            <?php endforeach;?>
            </ul>
         </div>
      </div> 
      <div class="listone">
         <div class="one-title"><span>Beijing Xi'an Tours</span><a href="<?php echo Yii::app()->createUrl('cityTours/best', array('title'=>'beijing-tours','id'=>2));?>">more+</a></div>
         <div class="one-cont">
            <div class="pic-desc"><a href="<?php echo $request_uri_list;?>&id=2"><img src="/images/beijingtours/<?php echo $destination_intro[2]['image'];?>" alt="" /></a><span><?php echo $destination_intro[2]['description'];?></span></div>
            <ul>
            <?php $n=0; foreach ($beijingToursList as $k=>$v):?>
            		<?php
            		if($v['recommend']==1):
            			$destination_array=explode(',',$v->destination_addr);            			      			
            			if(in_array('2', $destination_array)&&$n<4):
					    		$url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));
					    		$price_array=unserialize($v->price_serialize);
					    	?>
                <li><a <?php if($v->hot_tour==1):?>class="hot"<?php endif;?> href="<?php echo $url;?>" title="<?php echo $v->name;?>"><?php echo SiteUtils::mb_truncate_text($v->name,35);?></a><span>From <b><?php echo SiteUtils::getCurrencyPrice($price_array[1]);?></b> p/p</span></li>
              		<?php $n++; endif;?>
              	<?php endif;?>
            <?php endforeach;?>    
            </ul>
         </div>
      </div>  
      <div class="listone">
         <div class="one-title"><span>Beijing Private Tours</span><a href="<?php echo $request_uri?>tour_type=1_Private+Tours">more+</a></div>
         <div class="one-cont">
            <div class="pic-desc"><a href="<?php echo $request_uri?>?v=search&option=com_pgcategory&tour_type=1_Private+Tours"><img src="/images/beijingtours/<?php echo $private_intro['image'];?>" alt="" /></a><span><?php echo $private_intro['description'];?></span></div>
            <ul>
             <?php $n=0; foreach ($beijingToursList as $k=>$v):?>
            		<?php
            		if($v['recommend']==1&&$v->beijing_tour_type==1&&$n<4):
            			$destination_array=explode(',',$v->destination_addr);            	
					    		$url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));
					    		$price_array=unserialize($v->price_serialize);
					    	?>
                <li><a <?php if($v->hot_tour==1):?>class="hot"<?php endif;?> href="<?php echo $url;?>" title="<?php echo $v->name;?>"><?php echo SiteUtils::mb_truncate_text($v->name,35);?></a><span>From <b><?php echo SiteUtils::getCurrencyPrice($price_array[1]);?></b> p/p</span></li>
              		<?php $n++; endif;?>              	
            <?php endforeach;?>    
            </ul>
         </div>
      </div> 
      <div class="listone">
         <div class="one-title"><span>Beijing Group Tours</span><a href="<?php echo $request_uri?>tour_type=2_Join+Groups">more+</a></div>
         <div class="one-cont">
            <div class="pic-desc"><a href="<?php echo $request_uri?>?v=search&option=com_pgcategory&tour_type=2_Join+Groups"><img src="/images/beijingtours/<?php echo $group_intro['image'];?>" alt="" /></a><span><?php echo $group_intro['description'];?></span></div>
            <ul>
            <?php $n=0; foreach ($beijingToursList as $k=>$v):?>
            		<?php
            		if($v['recommend']==1&&$v->beijing_tour_type==2&&$n<4):
            			$destination_array=explode(',',$v->destination_addr);            	
					    		$url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));
					    		$price_array=unserialize($v->price_serialize);
					    	?>
                <li><a <?php if($v->hot_tour==1):?>class="hot"<?php endif;?> href="<?php echo $url;?>" title="<?php echo $v->name;?>"><?php echo SiteUtils::mb_truncate_text($v->name,35);?></a><span>From <b><?php echo SiteUtils::getCurrencyPrice($price_array[1]);?></b> p/p</span></li>
              		<?php $n++; endif;?>              	
            <?php endforeach;?>    
            </ul>
         </div>
      </div>  
    </div>
    <!-- tours-list end -->
    <!-- side start -->
     <div class="side">
        <div class="side-title">Beijing Side Tours</div>
        <div class="menu-side">
          <ul>
             <li><a href="javascript:;" onclick="_bj.ajax_load_tours(5, this)">Beijing Shanghai</a></li>
             <li><a href="javascript:;" onclick="_bj.ajax_load_tours(11, this)">Beijing Guilin</a></li>
             <li><a href="javascript:;" onclick="_bj.ajax_load_tours(6, this)">Beijing Datong</a></li>
             <li><a href="javascript:;" onclick="_bj.ajax_load_tours(8, this)">Beijing Chengde</a></li>
             <li class="other"><a href="javascript:;" onclick="_bj.ajax_load_tours(12, this)">Beijing Xi'an Shanghai</a></li>      
             <li class="other"><a href="javascript:;" id="other_side_tour" onclick="_bj.ajax_load_tours(0, this)">Other Beijing Side Tour</a></li>
          </ul>
        </div>
        
        <div class="side-cont" id="side-cont">
          <div id="c05">
             <div class="desc05">It is a marvelous combination of the China's Economic and Cultural center to see it's profound and historical past, nice present and prosperous future. You will be amazed by it's marvelous past as well as it's fast development of this country.</div>
             <div class="list-side">
                 <div class="pic05"><img src="/images/beijingtours/Beijing+Shanghai_2.jpg" alt="" width="194" height="152" /></div>
                 <div class="tour-list">
                    <ul>
                       <?php $n=0; foreach ($beijingToursList as $k=>$v):?>
					            		<?php
					            		if($v->recommend==1):
					            			$tour_type_array=explode(',',$v->destination_addr);            			      			
					            			if(in_array('5', $tour_type_array)&&$n<4):
					            			$url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v->id,'title'=>SiteUtils::stringURLSafe($v->name)));
					    							$price_array=unserialize($v->price_serialize);
										    	?>
													<li><p><a href="<?php echo $url;?>" title="<?php echo $v->name;?>"><?php echo SiteUtils::mb_truncate_text($v['name'],60);?></a> Destinations: <?php echo $v->route;?></p>
                            <span>From <b><?php echo SiteUtils::getCurrencyPrice($price_array[1]);?> p/p</b><em style="display:none;">/per person</em></span></li>					              		
                            <?php $n++; endif;?>
					              	<?php endif;?>
					            <?php endforeach;?>                         
                    </ul>
                 </div>
             </div>
             <div class="more5"><a href="<?php echo Yii::app()->createUrl('cityTours/best', array('title'=>'beijing-tours','id'=>5));?>">More <span>Beijing Shanghai</span> Tours</a></div>
          </div>
        </div>
        
     </div>    
    <!-- side end -->
    
    <!-- tailor start -->
    <div class="tailor"><a href="/index.php?option=com_diy&template=customize1&view=customize"><img src="/images/newhomepage/tailorbg.jpg" alt="" /></a></div>
    <!-- tailor end -->
</div>
<!-- top end -->
</div>

<script>
jQuery = jQuery.noConflict();
(function($){
  $("div.menu-side ul li:first a").addClass("dqmenu");
}(jQuery))


var _bj = (function($){
  return {
    change_url:function(){
      $("#other_side_tour").parents("ul").find("li a").removeClass("dqother").removeClass("dqmenu");
      _bj.ajax_load_tours(0);
      $("#other_side_tour").addClass('dqother'); 
    },
    ajax_load_tours:function(destination, obj){
        if(obj){
          $(obj).parents("ul").find("li a").removeClass("dqother").removeClass("dqmenu");
          if(destination == 0 || destination == 12){
             $(obj).addClass('dqother'); 
          }else{
           $(obj).addClass('dqmenu'); 
          }
        }
        $.get("<?php echo Yii::app()->createUrl('cityTours/ajaxLoadtours')?>",{destination_id:destination},function(ret){
            $("#side-cont").html(ret);
        });

    },
    search_condition:function(obj){
      if($(obj).html()=="Advanced Search"){
        $(obj).html("Simple Search");
        $("#search_conditions").find("ul:gt(2)").show();
      }else if($(obj).html()=="Simple Search"){
        $(obj).html("Advanced Search");
        $("#search_conditions").find("ul:gt(2)").hide();
      }
   }
  } 
}(jQuery));
</script>
