<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); 
  $this->setPageTitle($title);
  Yii::app()->clientScript->registerMetaTag('keywords','shanghai xian tour, xian tours from shanghai, shanghai tour from xian, shanghai and xian tour packages');
  Yii::app()->clientScript->registerMetaTag('description','1-8 days Shanghai & xian tours by Flight, Xian tours from Shanghai by train/ flight, Shanghai city and side tours from Xian and customize service.');
  $request_uri = Yii::app()->createUrl('shanghaiBeijingTours/search',array('title'=>$_GET['title']));
?>
<style type="text/css">
<!--
#index1{ padding-bottom:15px;}
#left{ float:right; margin-top:15px;}
#right{ float:left;  margin-top:15px;}
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/index');?>">Shanghai Xian Tours</a> <?Php echo $title;?></div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/banner5.jpg" alt="" /></div> 
    <div class="clear"></div>
    <!--  right start  -->
    <div id="right">
         
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
               <li class="title" style="margin-top:0px;"><img src="/images/beijing_shanghai/title15.jpg" alt="" /></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'xian-tours-from-shanghai'));?>">Xian Tours from Shanghai</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'shanghai-tours-from-xian'));?>">Shanghai Tours from Xian</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'shanghai-xian-tours'));?>">Shanghai and Xian Tours</a></li>
               <li class="title"><img src="/images/beijing_shanghai/title16.jpg" alt="" /></li>
               <li><a href="/travel/city-xian-tours">Terra-cotta Warriors</a></li>
               <li><a href="/travel/city-xian-tours#xian-private-tour">Xian Private Tours</a></li>
               <li><a href="/travel/city-xian-tours#xian-group-tour">Xian Group Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'xian-side-tours'));?>">Xian Side Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('beijingXianTours/index');?>">Beijing Xian Tours</a></li>
               <li class="title"><img src="/images/beijing_shanghai/title17.jpg" alt="" /></li>
               <li><a href="/travel/city-shanghai-tours">Shanghai City Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/search', array("title"=>'shanghai-side-tours'));?>">Shanghai Side Tours</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiBeijingTours/index');?>">Beijing Shanghai Tours</a></li>
               <li><a href="/travel/china-search?starting_city=shanghai#result">China Tours from Shanghai</a></li>
               <!--
               <li class="title"><img src="/images/beijing_shanghai/title18.jpg" alt="" /></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/flightSchedule');?>">Flight Timetable & Ticket</a></li>
               <li><a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/trainSchedule');?>">Train Timetable & Ticket</a></li>
                -->
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
