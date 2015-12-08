<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/template.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/tours.css');?>
<div id="menu-home"><strong>You are here: </strong><a href="/">Home</a><a href="<?php echo Yii::app()->createUrl('cityTours/index');?>">City Tours</a>Beijing Tours </div>
<div id="top-button">
    <a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank"><img src="/images/newhomepage/livechat.jpg" style="margin-bottom:2px" alt="" /></a>
   <a href="#header"><img src="images/newhomepage/top-button.jpg" alt="" /></a></div>
<div id="content-tour">

  <!-- beijing-shanghai  left start  -->
    <?php if($is_beijing_shanghai):?>
    <div class="left">
      <div class="tailpic"><a href="/index.php?option=com_diy&template=customize1&view=customize"><img src="/images/newhomepage/tailpic.jpg" alt="" /></a></div>
      <div class="left-list">
          <div class="city-guide">Shanghai Tours</div>
          <div class="list01">
            <ul>
              <?php foreach($city_tours as $v):?>
                <?php $url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v['id'],'title'=>SiteUtils::stringURLSafe($v['name'])));?>
                <li><a href="<?php echo $url;?>" title="<?php echo $v['name'];?>"><?php echo SiteUtils::mb_truncate_text($v['name'],40);?></a></li>
              <?php endforeach;?>
            </ul>
          </div>
      </div>
      <div class="left-list">
          <div class="city-guide">Shanghai City Guide</div>
          <div class="list02">
            <ul>        
            <li class="fact"><a title="Shanghai facts" href="/shanghai/facts.html">Shanghai Facts</a></li>  
            <li class="Attraction"><a title="Shanghai Attractions" href="/shanghai/attractions.html">Shanghai Attractions</a></li>        
            <li class="shopping"><a title="Shanghai  Shopping" href="/shanghai/shopping.html">Shanghai Shopping </a></li>        
            <li class="Nightlife"><a title="Shanghai  Nightlife" href="/shanghai/nightlife.html">Shanghai Nightlife</a></li>           
            <li class="tour"><a title="Shanghai  Tours" href="/shanghai/tours/">Shanghai Tours</a></li>                   
            <li class="food"><a title="Shanghai  Food" href="/shanghai/food-&amp;-restaurants.html">Shanghai Food &amp; Restaurants</a></li>        
            <li class="tip"><a title="Shanghai  Travel Tips" href="/shanghai/travel-tips.html">Shanghai Travel Tips</a></li>       
            <li class="Climate"><a title="Shanghai  Travel Tips" href="/shanghai/climate.html">Shanghai Climate</a></li>        
            <li class="Transportation"><a title="Shanghai  Transportations" href="/shanghai/transportations.html">Shanghai Transportations</a></li>                            <li class="hotel"><a title="Shanghai  hotel" href="/hotel/shanghai-hotels/">Shanghai Hotel</a></li>              
            </ul>
          </div>
      </div>
    </div>
    <?php endif;?>
  <!-- beijing-shanghai  left end  -->
  
  
  <!-- beijing-xian  left start  -->  
    <?php if($is_beijing_xian):?>
    <div class="left">
      <div class="tailpic" style="width:270px; height:144px"><a href="/index.php?option=com_diy&template=customize1&view=customize"><img src="/images/newhomepage/tailpic3.jpg" alt="" /></a></div>
      <div class="left-list">
          <div class="city-guide">Xi'an City Tours</div>
          <div class="list01">
            <ul>
              <?php foreach($city_tours as $v):?>
                <?php $url=Yii::app()->createUrl('toursPackage/view',array('id'=>$v['id'],'title'=>SiteUtils::stringURLSafe($v['name'])));?>
                <li><a href="<?php echo $url;?>" title="<?php echo $v['name'];?>"><?php echo SiteUtils::mb_truncate_text($v['name'],40);?></a></li>
              <?php endforeach;?>
            </ul>
          </div>
      </div>
      <div class="left-list">
          <div class="city-guide">Xi'an City Guide</div>
          <div class="list02">
            <ul>
            <li class="fact"><a title="Xian facts" href="/xian/facts.html">Xian Facts</a></li>
            <li class="Attraction"><a title="Xian Attractions" href="/xian/attractions.html">Xian Attractions</a></li>
            <li class="shopping"><a title="Xian  Shopping" href="/xian/shopping.html">Xian Shopping </a></li>
            <li class="Nightlife"><a title="Xian  Nightlife" href="/xian/nightlife.html">Xian Nightlife</a></li>
            <li class="tour"><a title="Xian  Tours" href="/xian/tours/">Xian Tours</a></li>
            <li class="food"><a title="Xian  Food" href="/xian/food-&amp;-restaurants.html">Xian Food &amp; Restaurants</a></li>
            <li class="tip"><a title="Xian  Travel Tips" href="/xian/travel-tips.html">Xian Travel Tips</a></li>
            <li class="Climate"><a title="Xian  Travel Tips" href="/xian/climate.html">Xian Climate</a></li>
            <li class="Transportation"><a title="Xian  Transportations" href="/xian/transportations.html">Xian Transportations</a></li>
            <li class="hotel"><a title="Xian  hotel" href="/hotel/xian-hotels/">Xian Hotel</a></li>
            </ul>
          </div>
      </div>
    </div>
    <?php endif;?>
  <!-- beijing-xian  left end  --> 
  
  
  <!-- beijing-xian-shanghai  left start  -->  
    <?php if($is_beijing_xian_shanghai):?>
    <div class="left">
      <div class="left-list">
          <div class="city-guide">China Tours from Beijing</div>
          <div class="list01">
            <ul>
                <?php $display_desination_arr = array(1,2,5,6,7,10,11);?>
                <?php foreach($display_desination_arr as $v):?>
                  <li><a href="<?php echo Yii::app()->createUrl('cityTours/search',array('title'=>'beijing'));?>?des=<?php echo $v.'_'.urlencode($destination[$v]);?>"><?php echo $destination[$v];?>(<?php echo $destination_count[$v];?>)</a></li>
                <?php endforeach;?>
            </ul>
          </div>
      </div>
      <div class="left-list">
          <div class="city-guide">China Guide</div>
          <div class="list01">
            <ul>
                <li><a href="/china-guide/city-guide/">China City Guide</a></li>
                <li><a href="/china-guide/attractions/">China Attraction Guide</a></li>
                <li><a href="/china-guide/culture/">Chinese Culture</a></li>
                <li><a href="/china-guide/travel-tools/">China Travel Tools</a></li>
                <li><a href="/china-guide/travel-tips/">China Travel Tips</a></li>
                <li><a href="/things-to-do/">Things to Do in China</a></li>
            </ul>
          </div>
      </div>
      <div class="tailpic" style="width:270px; height:136px"><a href="/tour/diytours.html"><img src="/images/newhomepage/tailpic1.jpg" alt="" /></a></div>
    </div>
    <?php endif;?>
  <!-- beijing-xian-shanghai  left end  --> 
  
  
  <!-- great wall  left start  -->  
    <?php if($is_great_wall):?>
    <div class="left">
	<div class="left-list">
          <div class="city-guide">Great Wall Tours by Section</div>
          <div class="list01">
		    <ul>
				<?php foreach($one_category_arr as $k=>$v):?>
                <li><a href="#great_wall<?php echo $k;?>"><?php echo $v;?></a> (<?php echo count($tour_list[$k]);?>)</li>
				<?php endforeach;?>
           
            </ul>
          </div>
      </div>
	  <div class="left-list">
          <div class="city-guide">Great Wall Travel Guide</div>
          <div class="list01">
            <ul>
                <li><a href="/great-wall/composition.html">Great Wall Composition</a></li>
                <li><a href="/great-wall/overview.html">Great Wall Overview</a></li>
                <li><a href="/great-wall/history.html">Great Wall History</a></li>
                <li><a href="/great-wall/construction.html">Great Wall Construction</a></li>
                <li><a href="/great-wall/great-wall-travel-tips.html">Great Wall Travel Tips</a></li>
            </ul>
          </div>
      </div>
      <div class="tailpic" style="width:270px; height:133px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('cityTours/airView');?>"><img src="/images/newhomepage/tailpic2.jpg" alt="" /></a></div>
   <?php $this->renderPartial('/message/_greatWallMessageForm',array('model'=>$message));?>
    </div>
    <?php endif;?>
  <!-- great wall  left end  --> 
    
    <div class="right01">
       <?php foreach($one_category_ids as $catid):?>
       <div class="toursnew">
          <h2 id="great_wall<?php echo $catid;?>"><?php if($one_category_arr[$catid]=="Private Tour"||$one_category_arr[$catid]=="Group Tour"){ echo "Beijing Xi'an Shanghai ".$one_category_arr[$catid];}else{ echo $one_category_arr[$catid];}?></h2>
          <div class="left-pic"><a href="#"><img src="/images/beijingtours/list/<?php echo $one_category_desc[$catid]['image'];?>" alt="" /></a></div>
          <div class="pic-right">
             <p><?php echo $one_category_desc[$catid]['description'];?></p>
          </div>
          <div class="clear"></div>
          <div class="list-new">
             <?php if($two_category_arr):?>

               <?php $two_category_ids = array_keys($two_category_arr);
                foreach($two_category_arr as $two_catid=>$two_category_name):?>
                 <ul>
                     <li class="titlenew"><?php echo $two_category_name;?>:</li>
                      <?php foreach((array)$tour_list[$catid] as $tour):?>
                        <?php 
                       
                          $url=Yii::app()->createUrl('toursPackage/view',array('id'=>$tour['id'],'title'=>SiteUtils::stringURLSafe($tour['name'])));
                          $two_category = explode(',', $tour['two_category']);
                        ?>
                         <?php if(in_array($two_catid, $two_category)):?>
                         <li><a <?php if($tour['hot_tour']):?>class="hot"<?php endif;?> title="<?php echo $tour['name'];?>" href="<?php echo $url;?>" <?php if($tour['hot_tour']):?>class="tour_hot"<?php endif;?>><?php echo $tour['name'];?></a><span>From <b><?php echo SiteUtils::getCurrencyPrice($tour['price']);?> </b> p/p</span></li>
                         <?php endif;?>
                      <?php endforeach;?>
                 </ul>
              <?php endforeach;?>

             <?php else:?>
                   <ul>
                      <?php foreach((array)$tour_list[$catid] as $tour):?>
                        <?php 
                          $url=Yii::app()->createUrl('toursPackage/view',array('id'=>$tour['id'],'title'=>SiteUtils::stringURLSafe($tour['name'])));
                          $two_category = explode(',', $tour['two_category']);
                        ?>
                         <li><a <?php if($tour['hot_tour']):?>class="hot"<?php endif;?> title="<?php echo $tour['name'];?>" href="<?php echo $url;?>" <?php if($tour['hot_tour']):?>class="tour_hot"<?php endif;?>><?php echo $tour['name'];?></a><span>From <b><?php echo SiteUtils::getCurrencyPrice($tour['price']);?> </b> p/p</span></li>
                      <?php endforeach;?>
                  </ul>

             <?php endif;?>
          </div>
       </div>

      <?php endforeach;?>
      
    </div>

</div>
<script>
$(document).ready(function(){
	$("li.titlenew").parent("ul").each(function(){
		if($(this).find("li").length==1){
				$(this).hide();
			}
		});
});

function reloadcode(obj){
$(obj).attr('src','/index.php?option=com_verifycode&rand='+Math.random());
} 

</script>
<?php if($id==2):?>
<!-- Google Code for &#30331;&#24405;&#36807;BEIJING XIAN TOURS -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "27nHCIr3_AIQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=27nHCIr3_AIQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php endif;?>
