<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/yangtze3.css'); ?>

<div id="content">
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> 
    <a href="/travel/yangtzecruise">Yangtze Cruise</a>
    <a class="last" href="/travel/yangtzecruise/ships">Yangtze Cruise Ships</a>
</div>
<div class="add-new">
<div class="cruise_nav">
        <h2><?php echo $model->cruise_name;?> <span style=" display:inline-block; padding-bottom:3px;" class="star<?php echo $model->cruise_grade;?>"></span> Tips</h2>
  <?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?>
  </div>

<!-- tips start -->
<div id="c08">
<p><strong>Check Emails before Cruise</strong>
Please read the Yangtze cruise confirmation we sent to you carefully and please note your mailbox 3 Days before your tour, for it occurs any slight change caused by uncontrollable reasons. It will be much more convenient if you can leave your cell phone number to us for emergent calls.</p>
<p><strong>Boarding Documents &amp; Boarding Time &amp; Boarding Pier</strong>
Boarding Documents: <br />
The booking system of the Yangtze cruise is just like the electronic flight tickets, you just need to show your valid passport to the receptionist in the ship.</p>  
<p><strong>Boarding Time and Boarding Pier:</strong></p>
<p>4-day Chongqing to Yichang downstream cruise <br />
Boarding time is 17:00—20:30, the ship sails around 21:00—22:00 from Chongqing</p>
<p>5-day Yichang to Chongqing upstream cruise<br />
Boarding time is 17:00—00:00, the ship does not sail until next day morning from Yichang </p>
<p>7-day Chongqing to Shanghai downstream cruise<br />
Boarding time is 08:00—09:30AM, the ship sails around 10:00 AM</p>
<p>9-day Shanghai to Chongqing upstream cruise<br />
Boarding time is 15:00—16:30, the ship sails around 17:00 from Wusongkou Port of Shanghai.</p>
<p><strong>Transfer between Airport and Pier</strong>
Note: The quotation we offered above doesn'tinclude any transfer between airport or railway station to pier in any city.</p>
<p>Private Transfer: Lead to china can offer private transfer with tour guide or without tour guide in Chongqing (Airport/Railway Station to Pier), Yichang (Airport/Railway Station to Pier), and Shanghai (Airport/Railway Station/Downtown to Wusongkou Port). Besides, the type of the vehicles will depend on the scale of your group. As the specific costs, you can contact with our trip advisor.</p>
<p><strong>The Advantage of our Private Transfer:</strong>
1. Waiting aside all the time, do not need to worry about the time schedule and the bad transfer experience<br />
2. Quality control and effective response from Lead to China.  </p>
<p><strong>Note:</strong>
If you want to hire local porters to carry your luggage in either Chongqing or Yichang, the price should be RMB10 per person. Please do confirm the price with the porters before using their service.</p>
<p><strong>Cabin Arrangement</strong>
Guests cannot designate cabins beforehand, for allthe cabins are arranged by the ship company. However, you can upgrade yourcabins to higher floor when doing the check in procedure. The fees of upgrading cabins would be different according to different ship companies. Moreover, if you have any problem with your cabin afer check in the ship, please let the ship receptionist know as soon as possible.</p>
<p>Extra Bed: Not all ships can hold an extra bed, soif you need, please inquire your travel advisor before you taking tour fromLead to China.</p>
<p><strong>Service Onboard</strong>
Drinks: Wines are not a part of the free drinks, only beer and some soft drinks are provided for free on ship. Drinks on the ship can be expensive; if necessary you can prepare some drinks or snacks before boarding the ship. </p>
<p>Foods: Some ships provide mostly buffet meals but some provide mostly table meals, it depends on which ship you are taking. Ifyou have any diet habit, please kindly let us know or let the ship receptionist know, so that the according arrangement can be made.</p>
<p>Elevator: Not every ship has elevator, if you needto know this, please kindly inquire your travel consultant or check the shipcompany official website. </p>
<p>Medical Service: There will be a clinic on the ship, but their service can be very expensive, please kindly note it. </p>
<p>Internet Service: The ship does not have wifi, butthe business center has internet service available and it is pay-for, the price will be different according to different ships.</p>
<p>Hair-dryer: The ships do not have hair dryer ineach room, only some hairdryers available at the front desk which you canborrow for free.</p>
<p>Adaptor: If you want to charge some electronic products and without bringing the adaptor, you may check with the ship front desk to see they have the right adaptor on ship, but bring the right adaptor from home is convenient for your China or Yangtze tour.</p>
<p><strong>Ship Tips</strong>
Almost all the 4 to 5-star ships require acompulsory ship tip which is required to be paid when checking in at the reception counter; it is the regulation of the ship companies which passengers are supposed to follow. The tip amount differs from different cruise lines and will be specified in our confirmation letter, please kindly note this so that inconvenience can be avoided.</p>

</div>
<!-- tips end -->


<!-- warm note start -->
<div id="c09"><p><strong>Optional Excursions</strong>
Besides the listed shore excursions listedin your itinerary, there usually will be 2 optional shore excursions in eachcruise term and it is not part of the cruise itinerary, the cost is aroundRMB260=USD42/per person per optional shore excursion, and the optional shoreexcursions differ from different cruise lines, and it is not compulsory.</p>
<p>Physical-Challenge: Some shore excursionslike “Fengdu Ghost City”needs some steps climbing; it might a bit challenging to same visitors who haveproblems with steps, in this case visitors can stay on the ship without join inthe shore excursion (no refund). And booking a ship with elevator will be moreconvenient actually. Please kindly note it.</p>
<p><strong>Weather</strong>
Yangtze River will be a kind of foggy from the latter half of October to nextMarch or so, and sometimes it might be foggy in summer time. And the rainyseason of Yangtze will be July to August or so.</p>

<p>Note: if you book flights by yourselves,please kindly consider these weather factors and book the suitable timingfight, or we can assist you to book the flights, more details please inquireyour travel consultant.</p>

<p><strong>Payment Guide</strong>
Generally the deposit of your packageaccounts for 30% of the total quotation. Take your tour package and group sizeinto consideration, your travel consultant can adjust it accordingly. Thebalance needs to be paid 20 days before your tour date. In addition, differentpayment methods demand different transfer fees.</p>

<p>Payment methods include Bank Transfer andPaypal, Visa, and Money Bookers. Details please see the <a href="http://www.leadtochina.com/payment-guide/">Payment Guide Terms and Conditions</a>.</p>
</div> 
<!-- warm note end -->

</div>
<div class="bottom-menu"><?php echo $this->renderPartial("_cruiseNav", array('model'=>$model));?></div>
</div>