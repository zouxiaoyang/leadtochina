<?php 
  $this->setPageTitle("Cheap China Tours, China Tours Cheap, China Budget Tours");
  Yii::app()->clientScript->registerMetaTag('keywords',"cheap china tours, cheap tours to china, china budget tours, china tours cheap,  discount china tours");
  Yii::app()->clientScript->registerMetaTag('description',"Collection of Cheap China tours including Beijing, Xi'an, Shanghai, Tibet, Guilin and famous attractions...Unbeatable price, un
     forgettable trip!");

Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinatours.css'); ?>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="/chinatour">China Tours</a> Cheap China Tours</div>
<div class="clear"></div>
<div class="main">
    <div class="right" style="float:left;">
          <?php $this->Widget('application.components.widgets.SearchChinaTours'); ?>
          <?php $this->renderPartial('/common/chinaThemeTours');?>
          <div class="note3">
            <?php $this->renderPartial('/common/customizeTour');?>
          </div>
          <div class="note3">
            <?php $this->renderPartial('/message/_contactUs',array(
                'model'=>$message,
            )); ?>
          </div>
          <div class="note3"><?php $this->renderPartial('/common/tripAdvisor');?></div>
    </div>
    <div class="left" style="float:right; margin-right:0px;">
       <div class="package_main">
           <h1>Cheap China Tours</h1>
           <div class="number">1</div>
           
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('33');?>
              <h2 style="padding:0px; margin:0px;"><a href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Exploration Tour to Yunnan Minority</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
     <div> <strong>Duration:</strong> 7 Days<br>
       <strong>Destinations:</strong> Kunming, Dali, Lijiang <br>
       <strong>Highlights:</strong> Stone Forest, Yi Minority Village, Erhai Lake, Three Pagodas, Dali Old Town, Black Dragon Pool, Dongba Culture Exhibition Museum, Dayan Old Town, Yufeng Si, Jade Dragon Snow Mountain, etc.<br>
       <strong>Reasons to Recommend: </strong> the torch festival of Yi Minority Village, landscape of lakes and mountains like Erhai Lake, the cultural buildings like Dayan Old Town
       </div>
     </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_2.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
           
       <div style="display:none;" id="packid01">
      
      <strong>Tips:</strong><br>
1、Yunnan temperature is about 20 degrees in day and about 10 degrees at night from May to October. The temperature is lower from November to next April, about 15 degrees in day and 7 degrees at night. You’d better take a sweater or a coat.<br>
2、The weather is changeable in Yunnan. Don’t forget to take an umbrella.<br>
3,、You’d better to bring skin care due to the ultraviolet rays and high elevation.
         </div>
         
      <div class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid01')"> Read More &raquo; </span>
         <!--  <label>
              <input type="button" onclick="dishidden('packid01')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note1_over-->
        
        
        <!--note2-->
        <div class="number">2</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('14');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">China Golden Tour</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
     <div style="padding-right:3px;"><strong>Duration:</strong> 7 Days<br>
       <strong>Destinations:</strong> Beijing, Xi’an, Shanghai<br>
       <strong>Highlights:</strong>Forbidden City, Summer Palace, Badaling Great Wall, Temple of Heaven, Terra-Cotta Warriors, Wild goose pagoda, City Wall, Shaanxi Historical Museum, Qin Tombs, etc.<br>
       <strong>Reasons to Recommend: </strong> Chinese cultural relic like Summer Palace in Beijing, Terra-Cotta Warriors in Xi’an, Yuyuan Garden in Shanghai, local delicious snacks like Peking Roast Duck, Mutton
       </div>
      
      
      
    </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_3.jpg"></td>
  </tr>
</tbody></table>
 </div>
   
           
       <div style="display:none;" id="packid02">
         and Bread Pieces in Soup.<br>
       <strong>Tips:</strong><br>
1、Please prepare the sports shoes for Badaling Great Wall in Beijing city.<br>
2、Convenient transportation among Beijing, Xi’an and Shanghai cities, such as train and airplane.<br>
3、Moderate temperature in the above three cities.
         </div>
         
      <div style=" margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid02')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid02')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label>  -->
        </div>
        
        </div>
        <!--note2_over-->
        
        
        
        <!--note3-->
        <div class="number">3</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('85');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Tibet Full View Tour</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
 
      <div> <strong>Duration:</strong> 10 Days<br>
       <strong>Destinations:</strong> Lhasa, Gyangtse, Shigatse, Dingri, Everest Base Camp<br>
       <strong>Highlights:</strong>Drepung Monastery, Norbulingka,Park, Potala Palace, Sera Monastery, Jokhang Temple, Barkhor Street, Yamdrok Yumtso Lake, Palkhor Monastery, Everest Base Camp<br>
        <strong>Reasons to Recommend: </strong>basic knowledge about religion like Buddhist Jokhang Temple, culture and custom of mysterious Tibet Autonomous District like
       </div>
      
      
      
    </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_4.jpg"></td>
  </tr>
</tbody></table>

             </div>
             
  
           
       <div style="display:none;" id="packid03">
       Potala Palace Tibetan food like cheese momo and stewed lamb with radish.<br>
      <strong>Tips:</strong>
1、It’s necessary to bring the sun cream, sunglasses, lip pomade and so on due to the intense sunlight and dry air in Tibet.<br>
2、Altitude reaction is normal, and you should have more rest and proper diet; sometimes you should take some medical to release the reaction, which is not available to the old.<br>
3、 You’d better take some snacks and biscuits in case that you’re hungry on the way to Tibet.
         </div>
         
      <div style="margin-top:3px;" class="label">
            <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid03')"> Read More &raquo; </span>
           <!-- <label>
              <input type="button" onclick="dishidden('packid03')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note3_over-->
        
        
        
        <!--note4-->
        <div class="number">4</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('59');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Colorful Yunnan Highlights Tour</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
     <div><strong>Duration:</strong> 9 Days<br>
       <strong>Destinations:</strong> Kunming, Dali, Lijiang, Shangri-La <br>
       <strong>Highlights:</strong>Stone Forest, Three Pagodas, Dali Old Town, Houses of Bai People, Jade Dragon Mountain, Tiger Leaping Gorge, First Bend of the Yangtze River, Songzanlin Temple, Golden Temple, etc.<br>
        <strong>Reasons to Recommend: </strong>the festivals, food, costumes of ethnic minority Bai and the beautiful scenery spots like Stone Forest.
        </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_5.jpg"></td>
  </tr>
</tbody></table>
 </div>
         
       <div style="display:none;" id="packid04">
      
      <strong>Tips:</strong><br>
 1、The principle food of Bai minority is rice or wheat; and the local drink is “Cook Tea”.<br>
2、Take an umbrella in case of the changeable weather in Yunnan province.<br>
3、Yunnan has a moderate climate all the year round, and it is suitable to anyone.
         </div>
         
      <div class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid04')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid04')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note4_over-->
  
  
      
        <!--note5-->
        <div class="number">5</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('73');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Minority Experience of Sister’s Meal Festival</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div><strong>Duration:</strong> 9 Days<br>
       <strong>Destinations:</strong> Shanghai, Guiyang, Kaili. Shidong, Guiyang, Beijing<br>
       <strong>Highlights:</strong> Jade Buddha Temple, Yuyuan Garden, Bund, Oriental Pearl Tower, Qingyan Ancient Town, Qianling Park, Folk Museum, Temple of Heaven, Summer Palace, etc.
       <br>
       <strong>Reasons to Recommend: </strong>minority Guiyang, historical and cultural Beijing city like Temple of Heaven, urban Shanghai like Oriental Pearl Tower; and local snacks.
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_6.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid05">
    <strong>Tips:</strong><br>
1、Guiyang Miao minority likes wearing silver ornaments in hands, necks, heads. <br>
2、When you are in Miao family for meat, remember not to have the chicken liver, chicken giblets, drumstick and cockscomb.<br>
3、Principle food of Miao minority is rice, such as the fried glutinous rice cake.
         </div>
         
      <div class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid05')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid05')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note5_over-->
        
        
        <!--note6-->
        <div class="number">6</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('21');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">China Essence Tour</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
    <div> <strong>Duration:</strong>9 Days<br>
       <strong>Destinations:</strong>Beijing, Xi’an, Guilin, Yangshuo, Shanghai<br>
       <strong>Highlights:</strong>Summer Palace, Badaling Great Wall, Temple of Heaven, Terra-Cotta Warriors, City Wall, Qin Tombs, Li River Cruise, Elephant Trunk Hill, Yuyuan Garden, Jade Buddha Temple, Bund, etc.<br>
       <strong>Reasons to Recommend: </strong>cultural tourist attractions like Badaling Great Wall in Beijng, City Wall in Xi’an, Jade Buddha Temple in Shanghai, landscape of water
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_7.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid06">
        and mountains like Li River, Elephant Trunk Hill; foreigner hottest spot like Yangshuo.<br>
       <strong>Tips:</strong><br>
  1、Have a taste of local delicious food, such as Peking Roast Duck, Xi’an Pita Bread Soaked in Lamb Soup, Guilin Rice Noodles and so on.<br>
2、The transportations among the above cities are quite convenient. You can reach the destination easily.<br>
3、Suitable shoes and clothes for 9 days tour.
         </div>
         
      <div style="margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid06')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid06')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label>  -->
        </div>
        
        </div>
        <!--note6_over-->
        
        
        
       <!--note7-->
        <div class="number">7</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('53');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Memorable Yangtze River Experience</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div><strong>Duration:</strong> 10 Days<br>
      <strong>Destinations:</strong>Beijing, Chongqing, Yangtze River, Yichang, Shanghai<br>
       <strong>Highlights:</strong> Tiananmen Square, Forbidden City, Summer Palace, Badaling Great Wall, Changling Tombs, Temple of Heaven, Terra-Cotta Warriors, Wild goose pagoda, City Wall, etc.<br>
       <strong>Reasons to Recommend: </strong>scenery spots around Yangtze River like Three Gorges, historical and cultural relics such as Changling Tomb in Beijing, Wild Goose
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_8.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid07">
        Pagoda in Xi’an.<br>
  <strong>Tips:</strong><br>
 1、When you want the Yangtze Cruise tour, please be careful and slow to board on the cruise.<br>
2、Take a taste on the Chaffy Dish in Chongqing, a little spicy.<br>
3、Please bring the skin care because of the dry air in north parts of China. In addition, don’t forget to take a coat of the difference temperature at day and night.
         </div>
         
      <div class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid07')"> Read More &raquo; </span>
          <!--  <label>
              <input type="button" onclick="dishidden('packid07')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note7_over-->
        
        
        
        <!--note8-->
        <div class="number">8</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('42');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">China Golden Tour with Splendid Yangtze River Cruise</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div><strong>Duration:</strong> 10 Days<br>
      <strong>Destinations:</strong>Beijing, Xian, Chongqing, <br>
      Yangtze River, Yichang, Shanghai
       <strong><br>
       Highlights:</strong> Forbidden City, Summer Palace, Badaling Great Wall, Terra-Cotta Warriors, <br>
       Wild goose pagoda, Shaanxi Historical <br>
       Museum, Qutang Gorge, Three Gorges Dam, Jade Buddha Temple, etc.<br>
      <strong>Reasons to Recommend: </strong>adventure <br>
      attractions like Badaling Great Wall in Beijing, water projects like Qutang Gorge, 
      </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_9.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid08">
       Chinese cultural relics like Jade Buddha Temple.<br>  
        <strong>Tips:</strong> <br>
      1、Suitable shoes for 10 days long journey<br>  
  especially the Badaling Great Wall. <br>    
 1、Suitable shoes for 10 days long journey, especially the Badaling Great Wall. <br>
2、You can taste the Chaffy Dish in Chongqing, Roast Duck in Beijing and other famous delicious local snacks.<br>
3、Chongqing Chaffy Dish is very hot and spicy, you’d better not try if you don’t eat spicy food.
         </div>
         
      <div style=" margin-top:3px;" class="label">
         <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid08')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid08')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note8_over-->
        
        
       <!--note9-->
        <div class="number">9</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('50');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">China Yangtze River Sightseeing</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div>
      <strong>Duration:</strong> 8 Days<br>
      <strong>Destinations:</strong>Beijing, Chongqing, Yangtze River, Yichang, Shanghai<br>
       <strong>Highlights:</strong> Tiananmen Square, Forbidden City, Summer Palace, Badaling Great Wall, Changling Tombs, Temple of Heaven, Fengdu Ghost City, Wu Gorge, Qutang Gorge, Xiling Gorge, etc.<br>
       <strong>Reasons to Recommend: </strong>mysterious Yangtze River, modernized city Shanghai like Bund, capital city Beijng like Tiananmen Square.
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_10.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid09">
     <strong>Tips:</strong><br>
        1、Please be careful to board if you choose the cruise to Yangtze River.<br>
2、You’d better prepare enough cash to taste local delicious snacks, like Peking Roast Duck.<br>
3、You’d better to take a coat or sweater in order to do not get a cold for the difference temperature at day and night.
         </div>
         
      <div style="margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid09')"> Read More &raquo; </span>
         <!--  <label>
              <input type="button" onclick="dishidden('packid09')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label>  -->
        </div>
        
        </div>
        <!--note9_over-->
        
        
        <!--note10-->
        <div style="padding:3px 0px 0px 3px;" class="number">10</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('67');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Yunnan &amp; Guizhou Minorities Culture Tour</a></h2>
             </div>

             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div>
     <strong>Duration:</strong> 13 Days<br>
      <strong>Destinations:</strong>  Beijing, Kunming, Lijiang, Lunan, Xingyi, Guiyang, Kaili, Shanghai <br>
      <strong>Highlights:</strong>Temple of Heaven, Forbidden City, Summer Palace, Badaling Great Wall, Changling Tomb, Baisha Village, Baisha Murals, Rock Joseph's Former Residence in Yuhu Village, etc.<br>
     <strong>Reasons to Recommend: </strong>minority cultures and festivals of Miao Village and Buyi People Village, Chinese traditional building like Qingyan Old Town, Wooden
      </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_11.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid10">
      Stilt House cultural relics like Forbidden City in Beijing.<br>
    <strong>Tips:</strong><br>
  1、You have to take suitable shoes and clothes for the 13 days long trip.br/&gt;
2、The transportations among Beijing, Kunming, Lijiang, Guiyang, Shanghai cities are very convenient. You can choose the airplane or the train to all the above cities.br/&gt;
3、It’s not polite to have not finish the rice in the bowl when you eat in the Miao Village family.
         </div>
         
      <div style="margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid10')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid10')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note10_over-->
        
        
        <!--note11-->
        <div style="padding:3px 0px 0px 3px;" class="number">11</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('25');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Yangtze River Cruise Experience</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div>
      <strong>Duration:</strong> 9 Days<br>
      <strong>Destinations:</strong>Hong Kong, Chongqing, Yangtze, Yichang, Xian, Beijing
      <br>
      <strong>Highlights:</strong>Fengdu Ghost City, Wu Gorge, Xiling Gorge, Qutang Gorge, Shengnong Stream, Three Gorges Dam, Yuyuan Garden, Jade Buddha Temple, Bund, Oriental Pearl Tower, etc.<br>
        <strong>Reasons to Recommend: </strong>adventure cruise tour in Yangtze River, ancient culture like Summer Palace in Beijing, Fengdu Ghost City in Chongqing, international
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_12.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid11">
        stadium like Disney Land in Hong Kong.<br>
       <strong>Tips:</strong><br>
1、When choose the cruise to the Yangtze River, you’d better board on the cruise carefully and take a coat in case of the cold wind from the river. <br>
2、You’d better prepare enough cash to have local snacks; and shopping in the Hong Kong, you can pay in credit. <br>
3、You can go to Hongkong by train or ferry from Shenzhen.
         </div>
         
      <div class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid11')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid11')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label>  -->
        </div>
        
        </div>
        <!--note11_over-->
        
        
        <!--note12-->
        <div style="padding:3px 0px 0px 3px;" class="number">12</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('31');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">China Golden Tour with Holy Land</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div>
      <strong>Duration:</strong> 10 Days<br>
       <strong>Destinations:</strong>  Beijing, Xian, Lhasa, Shigatse, Lhasa, Shanghai<br>
       <strong>Highlights:</strong> Forbidden City, Summer Palace, Badaling Great Wall, Terra-Cotta Warriors, Wild goose pagoda, City Wall, Potala Palace, Jokhang Temple, Drepung Monastery, etc.<br>
       <strong>Reasons to Recommend: </strong>holy land tour in Tibet, ancient cultural and historical tour like Forbidden City in Beijing, Terra-Cotta Warriors in Xi’an, modern Shanghai like 
       
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_13.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid12">
       Oriental Pearl Tower.<br>
  <strong>Tips:</strong><br>
1、Suitable shoes for 10 days long tour, especially the Badaling Great Wall<br>
2、The altitude reaction in Tibet is a normal phenomenon; don’t worry. You just need to have some rest, walk slowly, drink some water, and keep good attitude. <br>
3、Remember to bring the sun cream, sunglasses to prevent the intense ultraviolet rays in Tibet.
         </div>
         
      <div style=" margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid12')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid12')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note12_over-->
        
        
        <!--note13-->
        <div style="padding:3px 0px 0px 3px;" class="number">13</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('59');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Fantastic Yangtze River Cruise</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div>  <strong>Duration:</strong> 11 Days<br>
       <strong>Destinations:</strong>  Beijing, Chengdu, Chongqing, Yangtze River, Yichang, Shanghai <br>
       <strong>Highlights:</strong> Tiananmen Square, Forbidden City, Summer Palace, Badaling Great Wall, Changling Tombs, Temple of Heaven, Giant Panda Breeding Research Base, Du Fu’s Cottage, Wenshu Temple, etc.<br>
       <strong>Reasons to Recommend: </strong>exciting Cruise tour in Yangtze River, national treasure giant panda in Chengdu, adventure Fengdu 
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_14.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid13">
       Ghost City in Chongqing, Du Fu’s Cottage to commemorate great poet Dufu, delicious food like Sichuan noodles with peppery sauce.<br>
       <strong>Tips:</strong><br>
 1、We suggest have the cruise to tour the Yangtze River. In addition, you’d better board on the cruise slowly and carefully.<br>
2、Suitable shoes for 11 days long trip, especially hiking the Badaling Great Wall<br>
3、Transportations among the destinations of attractions are quite convenient, such as train and airline.
         </div>
         
      <div style="margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid13')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid13')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note13_over-->
        
        
        <!--note14-->
        <div style="padding:3px 0px 0px 3px;" class="number">14</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('82');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Tibet Culture Discovery Tour</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;">
      <h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3>
      </span>
  
      <div>   <strong>Duration:</strong> 11 Days<br>
       <strong>Destinations:</strong>Beijing, Lhasa, Chengdu, Shanghai <br>
       <strong>Highlights:</strong> Tiananmen Square, Summer Palace, Badaling Great Wall, Potala Palace, Norbulingka, Drepung Monastery, Research Base of Giant Panda Breeding, Bund, Oriental Pearl Tower<br>
        <strong>Reasons to Recommend: </strong> giant panda in Chengdu, mysterious Lhasa like Potala Palace, cultural Beijing like Badaling Great Wall, Shanghai Bund.
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_15.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid14">
        <strong>Tips:</strong><br>
  1、Do not worry about the altitude reaction; you just need some sleep, some water, and some medicine to release the reaction.<br>
2、Prepare the suitable shoes and clothes for the 11 days long journey.<br>
3、Suggest to fly to Lhasa and back by train. If you go by train, please prepare some biscuits along the train way.
     </div>
         
      <div style="margin-top:3px;" class="label">
         <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid14')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid14')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note14_over-->
        
        
       <!--note15-->
        <div style="padding:3px 0px 0px 3px;" class="number">15</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('52');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Chinese Essence Minority Tour</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;">
      <h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3>
      </span>
  
      <div><strong>Duration:</strong> 12 Days<br>
      <strong>Destinations:</strong>Beijing, Xian, Kunming, Dali, Lijiang, Shanghai
       <strong><br>
       Highlights:</strong> Temple of Heaven, Tiananmen Square, Forbidden City, Summer Palace, Badaling Great Wall, Changling Tomb, Shaanxi Historical Museum, Big Wild Goose Pagoda, City Wall, etc.<br>
        <strong>Reasons to Recommend: </strong>customs and festivals of Yi Minority Village, cultural relics like Forbidden City in Beijing, Big Wild Goose Pagoda in Xi’an, natural
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_16.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid15">
        landscape like Jade Dragon Snow Mountain in Kunming, Buddhist temple like Jade Buddha Temple in Shanghai.<br>
          <strong>Tips:</strong><br>
  1、Yunnan weather is changeable and please remember to bring an umbrella.<br>
2、You can comply with the customs of Yi minority. In addition, you can enjoy the Torch Performance of Yi minority.<br>
3、Bring some skin care and drink more water due to the dry air in Beijing and Xi’an.
         </div>
         
      <div style="margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid15')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid15')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note15_over-->
        
        
        <!--note16-->
        <div style="padding:3px 0px 0px 3px;" class="number">16</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('62');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Picturesque Dream Tour of Yangtze River</a></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
      <div><strong>Duration:</strong> 12 Days<br>
      <strong>Destinations:</strong>Hong Kong, Guilin, Yangshuo, Guilin, Chongqing, Yangtze River, Yichang, Shanghai, Beijing
       <strong><br>
       Highlights:</strong>The Stanley Market, Victoria Peak, Repulse Bay, The Avenue of Star, Li River Cruise, West Street, Elephant Trunk Hill, Seven Star Park, Reed Flute Cave, Fengdu Ghost City, Wu Gorge,etc.<br>
         <strong>Reasons to Recommend: </strong>cruise tour in Yangtze River, lakes and mountains like Li River in Guilin, Scenery spots like Victoria
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_17.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid16">
        Bay in Hong Kong, Chinese relics like Summer Palace in Beijing, Bund in Shanghai, international street in Yangshuo.<br>
       <strong>Tips:</strong><br>
 1、Take an umbrella in case of the weather in Guilin.<br>
2、Prepare enough clothes and the suitable shoes for the 12 days long journey. <br>
3、Prepare enough cash to taste local well-known delicious food, such as Cross Bridge Rice Noodles in Guilin, Chaffy Dish in Chongqing, Roast Duck in Beijing.
      </div>
         
      <div style=" margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid16')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid16')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note16_over-->
        
        
        <!--note17-->
        <div style="padding:3px 0px 0px 3px;" class="number">17</div>
           <div class="note1">
             <div class="tit_01">
             <?php $tourInfo=ToursPackage::model()->findByPk('78');?>
              <h2 style="padding:0px; margin:0px;"><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tourInfo->id,'title'=>SiteUtils::stringURLSafe($tourInfo->name)));?>">Tibet Mysterious Tour</a></h2>
             </div>
             <div style="padding-right:3px;" class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From: <?php echo SiteUtils::getCurrencyPrice($tourInfo->price);?></h3></span>
  
      <div> <strong>Duration:</strong> 17 Days<br>
       <strong>Destinations:</strong>  Beijing, Xi”an, Yichang, Chongqing, Lhasa, Chengdu, Guilin, Yangshuo, Hong Kong <br>
       <strong>Highlights:</strong> Temple of Heaven, Summer Palace, Badaling Great Wall, Terracotta Warriors and Horses Museum, City Wall, Three Gorges Dam, Qutang gorge, Research Base of Giant Panda Breeding, etc.<br>
       <strong>Reasons to Recommend: </strong>holy Lhasa like Buddhist Jokhang Temple, Research Base
       
       </div>
   </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/cheap_18.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid17">
        of Giant Panda Breeding in Chengdu historical and cultural relics like Badaling Great Wall in Beijing, water projects like Three Gorges Dam.<br>
       <strong>Tips:</strong><br>
1、Prepare enough clothes and the suitable shoes for the 17 days long journey.<br>
2、The altitude reaction in Tibet is normal. You need to walk slowly, have some sleep and water, and keep good in mind. You should take thick clothes due to the difference temperature at day and night.<br>
3、Remember to bring the sun cream, sunglasses and so on to release the hurt caused by the dry air and the intense sunlight.

         </div>
         
      <div style="margin-top:3px;" class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid17')"> Read More &raquo; </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid17')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note17_over-->
  
             
   <form action="/index.php?option=com_order" method="post" name="bookForm">
 
 
 
<input type="hidden" value="" id="pcid" name="pcid">
 
 
 
</form>


        
        <script type="text/javascript"> 
 
function OnlineOrder(str){
	
 
	
	document.forms['bookForm'].submit();
	
 
}
function gototopbut(){
	
	window.location.href="#packageinfo";
 
}
 
</script>



 

<script>
function dishidden(strid){

	if(document.getElementById(strid).style.display=="none"){
	
		document.getElementById(strid).style.display="block";
	
	}else{
	
	document.getElementById(strid).style.display="none";
	}

}
</script>
        
       
<!--right_note_over-->
 </div>
    </div>        
</div>
