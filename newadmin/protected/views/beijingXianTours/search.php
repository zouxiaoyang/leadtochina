<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); 
  $this->setPageTitle($title);
Yii::app()->clientScript->registerMetaTag('keywords','xian tours from beijing, beijing to xian tours, tours from beijing to xian,  travel from beijing to xian');
Yii::app()->clientScript->registerMetaTag('description','Here we are offering you 1-8 days Beijing to Xian Tours, Xian tours from Beijing, Xian Terra Cotta Warrior tours, Beijing city & side tour with lowest price.');
  $request_uri = Yii::app()->createUrl('shanghaiBeijingTours/search',array('title'=>$_GET['title']));
?>
<style type="text/css">
<!--
#index1{ padding-bottom:15px;}
#left{ float:right; margin-top:15px;}
#right{ float:left;  margin-top:15px;}
#list ul li.title_new{width:216px; height:25px; background:#999999; border-left:4px solid #8c4600; color:#fff; font-size:14px; font-weight:bold; padding-left:8px; line-height:25px; display:block; white-space:nowrap; text-shadow:1px 0px 0px #666; margin-top:10px;}
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a> <?Php echo $title;?></div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/banner2.jpg" alt="" /></div> 
    <div class="clear"></div>
    <!--  right start  -->
    <div id="right">
         <!--  side start  -->
         <div class="side" style="display:none">
                        <h2><img src="/images/beijing_shanghai/side.jpg" alt="" /></h2>
                        <div class="side-tours">
                           <ul class="tesu">
                              <li class="title1">By Theme:</li>
                              <li class="dqall"><a href="#">All</a></li>
                              <li class="tours1">
                                 <ol>
                                    <li><a href="#">Beijing to Shanghai</a></li>
                                    <li><a href="#">Shanghai to Beijing</a></li>
                                    <li><a href="#">Beijing+Shanghai+Other</a></li>
                                    <li><a href="#">Beijing and Shanghai</a></li>
                                 </ol>"
                    </li>
                  </ul>
                  
                  <ul>
                     <li class="title1">Duration:</li>
                     <li class="dqall"><a href="#">All</a></li>
                     <li class="tours1">
                        <ol class="day">
                           <li><a href="#">Half Day</a></li>
                           <li><a href="#">1 Day</a></li>
                           <li><a href="#">2 Days</a></li>
                           <li><a href="#">3 Days</a></li>
                           <li><a href="#">4 Days</a></li>
                           <li><a href="#">5 Days</a></li>
                           <li><a href="#">6-7 Days</a></li>
                           <li><a href="#">8-10 Days</a></li>
                        </ol>
                    </li>
                  </ul>
                  
                  <ul>
                     <li class="title1">Tour Type:</li>
                     <li class="dqall"><a href="#">All</a></li>
                     <li class="tours1">
                        <ol>
                           <li><a href="#">Private Tours</a></li>
                           <li><a href="#">Join Groups</a></li>
                        </ol>
                    </li>
                  </ul>
                  
                  <ul>
                     <li class="title2">Transportations:</li>
                     <li class="dqall"><a href="#">All</a></li>
                     <li class="tours2">
                        <ol>
                           <li><a href="#">Train</a></li>
                           <li><a href="#">Flight</a></li>
                        </ol>
                    </li>
                  </ul>
                  
                  <ul>
                     <li class="title1">By Price:</li>
                     <li class="dqall"><a href="#">All</a></li>
                     <li class="tours1">
                        <ol>
                           <li><a href="#">Below $201-$500</a></li>
                           <li><a href="#">$501-$1000</a></li>
                           <li><a href="#">Above $1001</a></li>
                        </ol>
                    </li>
                  </ul>
               </div>
         </div>
         <!--  side end  -->
         
         <!--  select start  -->
         <div class="select">
            <!--  choices start  -->
            <div class="choices">
            <h2><span><?php echo $title;?></span></h2>
            <ul style="width:280px;">
               <?php if($dataProvider->totalItemCount):?>
                <?php if($this->order == 'price_down'):?>
                <li><a href="<?php echo $request_uri.'?order=price_up';?>" style="cursor:pointer;">Price ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo $request_uri.'?order=price_down';?>" style="cursor:pointer;">Price ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'day_down'):?>
                  <li><a href="<?php echo $request_uri.'?order=day_up';?>" style="cursor:pointer;">Days ↓</a></li>
                <?php else:?>
                  <li><a href="<?php echo $request_uri.'?order=day_down';?>" style="cursor:pointer;">Days ↑</a></li>
                <?php endif;?>
                <?php if($this->order == 'reviews_down'):?>
                  <li><a href="<?php echo $request_uri.'?order=reviews_up';?>" style="cursor:pointer;">Reviews ↓</a></li>
                <?php else:?>
                <li><a href="<?php echo $request_uri.'?order=reviews_down';?>" style="cursor:pointer;">Reviews ↑</a></li>
                <?php endif;?>
              <?php endif;?>
            </ul>
         </div>
         <!--  choices end  -->
         
         <!--  tour-list start  -->
         <div class="tour-list">
               <div class="list-view" id="yw1">
                  <div class="items">
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
                  </div>
                 
               </div>                   
        </div>
         <!--  tour-list end  -->
     </div>
         <!--  select end  -->         
         <div class="tailor"><a href="/travel/china-diy-tours"><img src="/images/beijing_shanghai/tailor.jpg" alt="" /></a></div>
    </div>
    <!--  right end  -->
    
    <!--  left start  -->
    <div id="left">
        <!--  list start  -->
        <div id="list">
            <ul>
               <!-- <li class="title" style="margin-top:0px;"><img src="/images/beijing_shanghai/title9.jpg" alt="" /></li> -->
               <li class="title_new" style="margin-top:0px;">Beijing Xian Tours</li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing to Xian Tour by Flight')));?>">Xian Tour from Beijing by Air</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing to Xian Tour by Train')));?>" style="white-space: nowrap;">Xian Tour from Beijing by Train</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing and Xian Tours')));?>">Beijing and Xian Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/search', array('title'=>SiteUtils::stringURLSafe('Beijing Xian Extended Tour')));?>">Beijing Xian Extended Tour</a></li>
               <!-- <li class="title"><img src="/images/beijing_shanghai/title10.jpg" alt="" /></li> -->
               <li class="title_new">Xian Tours</li>
               <li><a href="/travel/city-xian-tours#xian-private-tour">Xian Private Tour</a></li>
               <li><a href="/travel/city-xian-tours#xian-group-tour">Xian Group Tour</a></li>
               <li><a href="/travel/city-xian-tours#xian-side-tours">Xian Side Tours</a></li>
               <li><a href="/travel/shanghai-xian-tours">Shanghai Xian Tour</a></li>
               <!-- <li class="title"><img src="/images/beijing_shanghai/title11.jpg" alt="" /></li> -->
               <li class="title_new">Beijing Tours</li>
               <li><a href="/travel/search-beijing-tours?tour_type=1_Private+Tours">Beijing Private Tour</a></li>
               <li><a href="/travel/search-beijing-tours?tour_type=2_Join+Groups">Beijing Coach Tour</a></li>
               <li><a href="/beijing/tours?v=list&id=1">Great Wall Tours</a></li>
               <li><a href="/travel/search-beijing-tours?theme=113_72+Hours+Visa+Free+Tour">72 Hours Visa Free Tour</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tour</a></li>
               <li><a href="/travel/beijing-xian-shanghai-tours">Beijing Xian Shanghai</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('cityTours/list', array('title'=>'beijing-tours'));?>#from-beijing">China Tours from Beijing</a></li>
               <!-- <li class="title"><img src="/images/beijing_shanghai/title12.jpg" alt="" /></li> -->
               <li class="title_new">Beijing Xian Transport</li>
               <li><a href="<?php echo Yii::app()->createUrl("beijingXianTours/flightSchedule");?>">Flight Timetable &amp; Ticket</a></li>
               <li><a href="<?php echo Yii::app()->createUrl("beijingXianTours/trainSchedule");?>">Train Timetable &amp; Ticket</a></li>
               <!-- <li class="title"><img src="/images/beijing_shanghai/title13.jpg" alt="" /></li> -->
               <li class="title_new">Xian Travel Guide</li>
               <li><a href="/travel/china-xian-facts-guide-42">Xian Facts</a></li>
               <li><a href="/travel/china-xian-attractions">Xian Attractions</a></li>
               <li><a href="/travel/xian-hotels-180">Xian Hotel</a></li>
               <li><a href="/xian/map.html">Xian Maps</a></li>
               <li><a href="/travel/china-xian-climate-guide-266">Xian Climate</a></li>
               <li><a href="/travel/china-xian-transportations-guide-264">Transportations</a></li>
               <li><a href="/travel/china-xian-travel-tips-guide-265">Xian Travel Tips</a></li>
               <li><a href="/travel/china-xian-food-restaurants-guide-41">Food &amp; Restaurants</a></li>
               <li><a href="/travel/china-xian-nightlife-guide-43">Xian Nightlife</a></li>
            </ul>
        </div>
        <!--  list end  -->      
        
        <!--  quick start  -->
          <?php $this->renderPartial('/message/_form2',array(
            'model'=>$message,
          )); ?>
        <!--  quick end  -->
    </div>
    <!--  left end  -->
</div>
<!--  index end  -->


<!-- Google Code for Beijing Xian -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001932638;
var google_conversion_label = "J5LECJrvhgcQ3o7h3QM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1001932638/?value=0&amp;label=J5LECJrvhgcQ3o7h3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
