<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/promotion.css'); ?>
<style type="text/css">
<!--
#content{ padding:9px 0px 12px 0px; width:961px;}
-->
</style>
<!--  index start  -->
<div class="index">
    <!--  menu-home start  -->
    <div class="menu-home">
       <!--  menu-tours start  -->
       <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('promotion');?>">Promotion Area</a> Regular Customer</div>
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
      <!--  rightcont start  -->
      <div class="rightcont">
         <!--  protext start  -->
         <div class="protext">
            <div class="propic">
               <img src="/images/promotion/regular.jpg" alt="" />
               <div class="prodesc"><h2>Regular Customer</h2>
                   <span>Author: Leadtochina</span> <span>Time: 2013-08-20</span> <span>Hits: 1000</span>                      
               </div>
            </div>
            <div class="clear"></div>
            <p>1. Book Tour 3 Months before the start, a 7% discount will be offered. <br />
               2. Book Tour 2 Months before the start, a 4% discount will be offered.<br />
               3. Pay via PayPal or credit card through PayPal, save $15 USD at every $ 300 USD.<br />
               4. Click Like button and be our Fan on our Face book, saves $15 USD (only available at the total costs of $600 USD).<br />
               5. Not Available if the Tour Quotation less than $500</p>
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