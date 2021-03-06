<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/promotion.css'); ?>
<style type="text/css">
<!--
#content{ padding:9px 0px 12px 0px; width:961px;}
#month-table li{cursor:pointer;}
-->
</style>
<!--  index start  -->
<div class="index">
    <!--  menu-home start  -->
    <div class="menu-home">
       <!--  menu-tours start  -->
       <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('promotion');?>">Promotion Area</a>  Monthly Special Offer</div>
       <!--  menu-tours end  -->
       
       <!--  menu-right start  -->
       <div id="menu-right">I am: <a href="<?php echo Yii::app()->createUrl('promotion/regularCustomers');?>">Regular Customer</a> | 
        <a href="<?php echo Yii::app()->createUrl('promotion/payViaPaypal');?>">PayPal Benefits</a> | 
        <a href="<?php echo Yii::app()->createUrl('promotion/earlyBirdDiscounts');?>">Early Bird Discounts</a>
      </div>
       <!--  menu-right end  -->
    </div>
    <!--  menu-home end  -->
</div>
<!--  index end  -->

<!--  index1 start  -->
<div class="index1">
   <!--  proleft start  -->
   <div id="proleft">
      <div class="leftlist">
          <?php $this->renderPartial('_leftMenu');?>
      </div>
      <div class="trust">
            <ul>
                <li><a href="/member-pata"><img src="/images/top10/PATA.jpg" alt="" /></a> <span>We are the member of PATA</span></li>
                <li><a href="http://www.tripadvisor.com/ShowTopic-g303685-i10955-k5494171-Has_anyone_used_the_hefei_full_view_travel_service-Huangshan_Anhui.html" target="_blank"><img src="/images/top10/TRIP.jpg" /></a> <span>96% people want to travel with us again</span></li>
            </ul>
        </div>
   </div>
   <!--  proleft end  -->
   
   <!--  proright start  -->
   <div id="proright">
      <!--  monthly start  -->
         <div class="monthly">
            <div class="month-menu" id="month-menu"><h2><?php echo date("M");?></h2></div>
            <div class="month-table" id="month-table" style="display:none;"><ul>
                <li style="border-left:none;" class="visit1"><span>Jan.</span></li>
                <li class="visit1"><span>Feb.</span></li>
                <li class="visit1"><span>Mar.</span></li>
                <li class="visit1"><span>Apr.</span></li>
                <li style="border-left:none;" class="visit1"><span>May.</span></li>
                <li class="dq"><span>Jun.</span></li>
                <li><span>Jul.</span></li>
                <li><span>Aug.</span></li>
                <li style="border-left:none; border-bottom:none;"><span>Sep.</span></li>
                <li style=" border-bottom:none;"><span>Oct.</span></li>
                <li style=" border-bottom:none;"><span>Nov.</span></li>
                <li style=" border-bottom:none;"><span>Dec.</span></li>
             </ul></div>
         </div>
      <!--  monthly end  -->
      
      <!--  rightcont start  -->
         <div class="rightcont">
              <!--  monthlist start  -->
              <div class="monthlist" id="monthlist">
                <?php if($tours):?>
                  <?php foreach($tours as $v):?>
                  <ul>
                      <li class="pic"><a href="<?php echo $v->url();?>"><img src="/<?php echo $v->filedir.$v->pic;?>" style="width:213px;height:137px" /></a></li>
                      <li class="name"><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
                      <li><?php echo $v->route;?></li>
                      <li><span><?php echo SiteUtils::getCurrencyPrice($v->price_yuan);?></span><h2><?php echo SiteUtils::getCurrencyPrice($v->price);?></h2><a href="#"><img src="/images/promotion/inquiry.png" alt="" /></a></li>
                      <li><strong>Highlights:<?php echo SiteUtils::mb_truncate_text($v->recommand_reason,165);?></strong> 

                      </li>
                  </ul>
                  <?php endforeach;?>
                <?php endif;?>
              </div>
              <!--  monthlist end  -->
              <div class="monthlistb"></div>
         </div>
         <!--  rightcont end  -->
      <div class="monthtitle">Monthly Special Offer</div>
      <!--  rightcont start  -->
      <div class="rightcont">
         <!--  protext start  -->
        <div class="protext" style="padding-top:0px;">
           <p style="padding-top:0px;">
             1. It cannot be enjoyed with other benefits.<br />
             2. You are suggested to pay the quotation in full.<br />
             3. Quality of the tour service is guaranteed.
           </p>
         </div>
         <!--  protext end  -->
                     
         <!--  same start  -->
         <div class="same">
            <h2><img src="/images/promotion/book.jpg" alt="" /></h2>
            <ul>
               <li>Regular Customers Benefits is valid for all the China tours, city tours, China tours with Yangtze Cruise, except the Yangtze Cruise Ship, hotel, train &amp; flight booking and Monthly Special Offer. Besides, it can be enjoyed with the Early Bird Discounts, PayPal Benefits and Face book Benefits.</li>
               <li>Acceptable ways of paying are PayPal, Credit Card via PayPal, Bank Transfer, Money Booker, Visa, T/T. You are advised to pay by PayPal or by Credit Card via PayPal, for we have promotions for those ways.</li>
               <li>All the online works done from LeadtoChina are free at any time, such as answer your inquiry; customize the tour to meet your interests.</li>
               <li>Lower price doesn't mean we would low the quality of the service. Our primary concern is always for our customers' satisfaction with an emphasis on quality. Welcome for any monitoring.</li>
               <li>LeadtoChina reserves the right to make the final decision regarding amount of discount.</li>
            </ul>
            <h2><img src="/images/promotion/find.jpg" alt="" /></h2>
            <ul>
               <li style="background:none; width:100%; padding:2px 0px;">So you want to find the China tour package now? </li>
               <li>Prefer longer time and more destinations and some inspires? then you must need check <a href="/travel/china-tours/">China tours</a></li>
               <li> Limited by time and destination? single <a href="/travel/city-tours/">city tour</a> will be nice. </li>
               <li>Want to make China tours by yourself? then you are suggested to check <a href="/travel/china-diy-tours">DIY China tour</a>, with simple 5 steps to have a unique China tour experience.</li>
               <li>Pass all the steps, just tell the trip advisor what you are interested in, and then click <a href="http://messenger.providesupport.com/messenger/travelthing.html" target="_blank">Live Chat</a> to talk with us.</li>
            </ul>
         </div>
         <!--  same end  -->
      </div>
      <!--  rightcont end  -->
   </div>
   <!--  proright end  -->
</div>
<!--  index1 end  -->
<div class="clear"></div>
<div class="index">
   <div id="tab5">
      <div class="quest-title"><img alt="" src="/images/promotion/question.jpg"></div>
       <!--  question start  -->
        <?php echo $this->renderPartial("_question");?>
       <!--  question end  -->
</div>
</div>
<div class="clear"></div>
<?php echo $this->renderPartial("_bottomMenu");?>

<script type="text/javascript">
  $(function(){
    $("#month-menu").click(function(){
      $("#month-table").toggle();
    })

    $("#month-table li").click(function(){
      var month = $("#month-table li").index(this);
      $.get("<?php echo Yii::app()->createUrl('promotion/getMonthRecommendTours');?>", {month:month}, function(ret){
        $("#monthlist").html(ret);
      })      

    })
  })
</script>