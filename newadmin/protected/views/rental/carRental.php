<link rel="stylesheet" type="text/css" href="/travel/css/rental.css" />
<div id="content">
   <div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="/beijing/tours/">Beijing Tour</a> Car Rental</div>
   <div id="main">
      <div id="rental">
           <div class="txt">
              <h2>Beijing Car Rental</h2>
              <p>First time traveling in Beijing and need vehicle with experienced native driver? Hey, HFV has something to tell you. We have a variety of car models and offer Beijing car rental service include Business cars,travel cars, exhibition cars, private car, marry cars, beijing airport & railway station pick up and see off service, Tianjin Xinjiang port pick up and see off service etc,.</p>
			  <p>After you booked our service, you will be met by our driver at the place and the time you required, and he/she will dirve you to the places you specified. With you own personal vehicle and driver and guaranteed arrangement, your family, friends, children will enjoy the every second in the tour. So, why not sing a song in the vehicle? Why not have a picnic near the Great Wall surrounded by mountains and trees with vehicle waiting beside? Why not have Beijing Car Rental services right now?</p>
           </div>
           <div class="prices">
               <table cellspacing="0" cellpadding="0">
                   <tr>
                      <td colspan="11" class="top">Prices for Rental</td>
                   </tr>
                   <tr>
                      <td colspan="11" align="center"><strong>Vehicle , Car , Van and Coach Rental Rates in <span>USD</span></strong></td>
                   </tr>
                   <tr class="title">
                   	  <td>Options</td>
                     <?php foreach (Rental::$carRentalList as $k=>$v):?>
                      <td><?php echo $v;?></td>
                     <?php endforeach;?>
                   </tr>
                   <?php foreach ($carRentalList as $v):?>
                   <?php $rentalList=unserialize($v->price_serialize)?>
                   <tr>
                      <td><?php echo $v['name'];?>  <img src="<?php echo ImageUtils::getThumbnail(Rental::UPLOAD_PATH.$v['pic'], '71x57')?>" alt="<?php echo $v['alt'];?>" /></td>
                      <?php foreach ($rentalList as $v1):?>
                      <td><?php echo $v1==''?'/':$v1;?></td>
                      <?php endforeach;?>
                   </tr>
                   <?php endforeach;?>
               </table>
           </div>
           <div class="quick" id="orderForm">
              <h2>Quick Book or Inquiry</h2>
              <div class="clear"></div>
              <?php $this->renderPartial('_orderForm',array('model'=>$model));?>
           </div>
           <div class="note">
             <h2>Booking Note</h2>
             <div class="clear"></div>
             <span>
                <b>1. Important Notice on Airport and Train Transfer</b><br />
                1)If you want to have dinner or night performances with car waited aside, you have to pay extra CNY100-200.<br />
                2) If your flight or train departs from Beijing before 8:00am or after 11:00pm, and arrives at Beijing before 8:00am or after 11:00pm, extra charge CNY50-200 will be added to each car transfer.<br />
                3) Your driver with English Speaking tour guide will meet you at the airport or train station holding a piece of paper with your name and transfer to your specified destinations.<br />
                
                <b>2. Important Notice on Car Rental to the Great Wall</b><br />
                1) The Great Wall car rental service above is limited within 8 hours. Usually, it's enough to tour one section of Great Wall. However, if you want to add other nearby attractions to the Great wall car rental service, you may have to pay the extra hour fees. Please double check the time with your trip advisor.<br />
                
                <b>3. Tour Guide Service</b><br />
                Car rental service have the vehicle you chose and a licensed driver, if you want to have a nominated language tour guide service, please check the <a href="<?php echo Yii::app()->createUrl('Rental/guideRental')?>" >Beijing Tour Guide Rental</a><br />
                
                <b>4. How about the vehicles?</b><br/>
                All the vehicles have License, Insurance, Air-conditioning, and can carry standard luggage. <br/>
				1-2 traveling Party: we offer cars<br/>
				3-5 traveling Party: we offer vans<br/>
				6-15 travelling Party: we offer 22-seat coach<br/>
				16-25 traveling Party: we offer 33-seat coach<br/>
				26-45 traveling party: we offer 55-seat coach<br/>
				
				<b>5. How about the driver?</b><br/>
				The drivers have the official licenses with at least 3 years' actual driving experience and are familar with the region. They observe local traffic regulations and select the most dynamic route.<br/>
				
				<b>6. Do I have to tip my driver or tour guide?</b><br/>
				Tipping is not compulsory, but tipping is expected by drivers, tour guides and hotel portage. Following tipping standard is only for your referance:<br/>
				About US$ 5 per day (per tourist) for guide, US$ 2 per day (per tourist) for driver is standard. Of course, give more if you're feeling generous, but if you find a genuine reason not to tip, don't.<br/>
            </span>
           </div>
           <?php $this->renderPartial('_topBeijingTours');?>
      </div>
   </div>
</div>