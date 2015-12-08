<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/shanghai.css'); ?>
<style type="text/css">
<!--
#content{ width:926px; height:auto; padding:10px 21px 10px 14px;}
.how-to ul li{ padding-bottom:6px;}
-->
</style>
<!--  index1 start  -->
<div id="index1">
   <!--  menu-tours start  -->
   <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('shanghaiXianTours/index');?>">Shanghai Xian Tours</a> How to Book & Take Train</div>
   <!--  menu-tours end  -->
   <div id="banner"><img src="/images/beijing_shanghai/banner4.jpg" alt="" /></div> 
   <div class="clear"></div>
    <!--  left start  -->
    <div id="left1">
        <!--  list start  -->
        <div id="list1">
           <?php echo $this->renderPartial("_left");?>
        </div>
        <!--  list end  -->    
    </div>
    <!--  left end  -->
    
    <!--  right start  -->
    <div id="right1">
      <div class="titlename">How to Book &amp; Take Train</div>
      <div class="righttable">
         <div class="how-to">
<h2>How to Book &amp; Take the Train in China</h2>
<p>Step 1: Contact us and leave your destinations, time request<br />
Step 2: Get quote online and make payment by PayPal or Visa<br />
Step 3: Delivery the tickets to you according to your request<br />
Step 4: Get remind before you depart<br />
Step 5: Get ready for your train trip<br />
Step 6: Enter into the railway station<br />
Step 7: Find the right waiting room<br />
Step 8: Board the Train<br />
Step 9: Get off and find way out of the station<br />
</p>

<h2>Tips</h2>
<ul>
  <li><span>1.</span> <b>The announcements in the railway stations are broadcast in Chinese, but in some big cities like Xian, Beijing and 
    Shanghai, they are also broadcasted in English, and bilingual signs in both Chinese and English will be helpful.</b></li>
   <li><span>2.</span> <b>Trains stop at stations just long enough for people to get on and off. For that reason it is wise not to get off 
    during your journey for any reason as it may well leave before you can get back on board.</b></li>
   <li><span>3.</span> <b>Most overnight trains have a dining car where you can purchase a meal. There are also trolleys service selling 
    items of food, drink, snacks, magazines and other small items, regularly goes back and forth through the aisles 
    during a journey.</b> </li>
    <li><span>4.</span> <b>Be prepared to cope with the crowds and some inconvenience, rail travel in China is a cultural experience to be 
    enjoyed; it is bound to be memorable!</b></li>
    <li><span>5.</span> <b>Be careful to guard against theft. Keep your luggage safe and take the valuable items in your carry-on bags 
    rather than in the suitcases.</b> </li>
    <li><span>6.</span> <b>Never give personal information to strangers</b></li>
    <li><span>7.</span> <b>Avoid using public phones near the station, as some of the owner will play tricks on the phone in order to ask 
    for more money.</b></li>
    <li><span>8.</span> <b>Never accept food or drinks given by a stranger.</b></li>
</ul>
</div>
      </div>
    </div>
    <!--  right end  -->
</div>
<!--  index1 end  -->