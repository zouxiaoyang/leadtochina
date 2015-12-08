<div class="content1">
   <div class="menu-three">
      <a class="dq" href="<?php echo Yii::app()->createUrl('adoption/OrphanageTours', array('id'=>$_GET['id']));?>">TOURS</a>
      <a href="<?php echo Yii::app()->createUrl('adoption/customizeAdoption');?>" target="_blank">CUSTOMIZE</a>
      <a href="<?php echo Yii::app()->createUrl('adoption/OrphanageTravelGuide', array('id'=>$_GET['id']));?>">TRAVEL GUIDE</a></div>
   <div class="clear"></div>
   <div class="swicity">
      <div class="swicityleft">
         <!--  swi-city start  -->
        <div class="swi-city">
        <table cellspacing="1" cellpadding="0" border="0">
          <tbody>
            <tr>
               <td colspan="2" style="background:#f7e7d7; color:#8c4600; font-weight:bold; font-size:14px; text-align:center;">SWI CITY VISITS (ORPHANAGE)</td>
            </tr>
            <tr>
               <td width="73"><strong>Day 1</strong></td>
              <td width="906">Our guide will pick you up upon arrival in the capital city of your child's home province and meet the guide for transfer to your hotel. <br />
              Enjoy free time the rest of the day.</td>
            </tr>
            <tr>
               <td><strong>Day 2</strong></td>
               <td>Breakfast. Transfer to the SWI (orphanage) city, visit your child's home orphanage and meet with people related to your child's adoption. If you desire, host a lunch or dinner for the orphanage director and staff. Explore the local area with your guide. If needed, locate and visit the place where your child was found or visit your child's former foster family (if applicable and pending special permission). <br />
Our guide will escort you back to the provincial capital city or overnight in the SWI city.</td>
            </tr>
            <tr>
               <td><strong>Day 3</strong></td>
               <td>Breakfast. Explore the local area with your guide and visit places where local children frequent or local places of interests.</td>
            </tr>
            <tr>
               <td><strong>Day 4</strong></td>
               <td>Breakfast. Our guide will send you off for your next destination. </td>
            </tr>
            <tr>
               <td><strong>Note:</strong></td>
               <td>We take care of obtaining the approval for your visit to the orphanage. Please email us the copy of Adoption registration certificate</td>
            </tr>
            <tr>
               <td><strong>Fee:</strong></td>
               <td>1. Tour Package Fee: Various case by case. Please <a href="/contact-us/" target="_blank">contact us</a> for pricing.<br />
Provincial Civil Affairs Fee for filing the orphanage visit petition: Varies by province.</td>
            </tr>
          </tbody>
        </table>
     </div>
        <!--  swi-city end  -->
      </div> 
      
      <div class="swicityright"><a href="/travel/adoption/china-orphange-trips"><img src="/images/adoptionNew/tailor.jpg" alt="" /></a></div>
   </div>   
   
   <!--  packages start  -->
   <div class="packages">
     <h2>Private/Group Tour Packages</h2>
     <div class="clear"></div>
       <table cellspacing="1" cellpadding="0" border="0">
          <tbody>
            <tr>
               <td class="title2">Tour Name</td>
               <?php if($packageProvince):?> 
                <td><a href="<?php echo $packageProvince->url();?>"><?php echo $packageProvince->name;?></a>
                   (Destination: <?php echo $packageProvince->route;?>)              
                </td>
               <?php endif;?>
               <td><a href="/travel/adoption/beijingXianGuilinItinerary">2015 Winter Promotion</a>
                   (Destination: Beijing, Xi'an, Guilin)</td>
               <td><a href="/travel/adoption/beijingXianChengduItinerary">2016 Summer Promotion</a>
                   (Destination: Beijing, Xi'an, Chengdu)</td>
            </tr>
            <tr>
               <td class="title2">Departure Date</td>
               <td>Every day</td>
               <td>12/19/2015</td>
               <td>07/04/2016</td>
            </tr>
            <tr>
               <td rowspan="2" class="title2">Price</td>
               <?php if($packageProvince):?> 
               <td>Adult Price: <strong>$<?php echo $packageProvince->price;?> p/p</strong><br />
               Children (&lt;12): Save 15% of Adult Price
               <a href="<?php echo $packageProvince->url();?>#price">Price Details</a></td>
                <?php endif;?>
               <td>Adult price (ages 12 & over): <strong>$1850</strong><br />
                Adoptee: <strong>FREE*</strong> - no age limit<br />
               Each additional child <bR />(ages 0-11): <strong>$1450</strong>
               <a href="/travel/adoption/beijingXianGuilinDatePrice">Price Details</a></td>
               <td>Adult price (ages 12 & over): <strong>$2000</strong><br />
                Adoptee: <strong>FREE*</strong> - no age limit<br />
               Each additional child <bR />(ages 0-11): <strong>$1600</strong>
               <a href="/travel/adoption/beijingXianChengduDatePrice">Price Details</a></td>
            </tr>
            <tr>
               <td><b>PRICE INCLUSIONS:</b>
               Entrance fees, Meals as listed, Guide &amp; driver, Hotel, Domestic flight &amp; train tickets<br />
               <b>PRICE EXCLUSIONS:</b> 
               China entry visa fees, International airfare, Tips for guides and drivers, Orphanage visiting fees 
</td>
               <td><b>PRICE INCLUSIONS:</b>
               Entrance fees, Meals as listed, Guide &amp; driver, Hotel, Domestic flight &amp; train tickets<br />
               <b>PRICE EXCLUSIONS:</b> 
               China entry visa fees, International airfare, Tips for guides and drivers, Orphanage visiting fees </td>
               <td><b>PRICE INCLUSIONS:</b>
               Entrance fees, Meals as listed, Guide &amp; driver, Hotel, Domestic flight &amp; train tickets<br />
               <b>PRICE EXCLUSIONS:</b> 
               China entry visa fees, International airfare, Tips for guides and drivers, Orphanage visiting fees</td>
            </tr>
            <tr>
               <td class="title2">Feature</td>
               <td>Private guide/driver/vehicle, No others join you, Choose hotel from budget to luxury, Flexible to make changes, No forced Shopping, Great value of your money.
               <?php if($packageProvince):?><a class="button" href="<?php echo $packageProvince->url();?>"><img src="/images/adoptionNew/view.png" /></a> <?php endif;?></td>
               <td>Fixed departure time, itinerary and hotels, SWI visiting after the group trip , Share and communicate with other adoptive families, Save Money.
                  <a class="button" href="/travel/adoption/11-day-beijing-xian-chengdu-guilinyangshuo-guangzhou-shanghai-orphanage-province-tour-1"><img src="/images/adoptionNew/view.png" /></a>               </td>
               <td>Fixed departure time, itinerary and hotels, SWI visiting after the group trip , Share and communicate with other adoptive families, Save Money.
                  <a class="button" href="/travel/adoption/12-days-beijing-xian-guilin-yangshuo-orphanage-province-guangzhou-2"><img src="/images/adoptionNew/view.png" /></a>               </td>
            </tr>
          </tbody>
       </table>
  </div>
   <!--  packages end  -->
</div>
