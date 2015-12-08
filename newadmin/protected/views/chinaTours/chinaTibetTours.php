<?php
	$packageGrage=array(
		'1'=>'Budget',
		'2'=>'Standard',
		'3'=>'Luxury'
	);
	$chinaTibetToursId=array(
		'1'=>array(
				'1'=>array(78,79),	//id
				'2'=>array(1,2)),		//1=>Budget,2=>Standard,3=>Luxury
		'2'=>array(
				'1'=>array(82,83,84),
				'2'=>array(1,2,3)),
		'3'=>array(
				'1'=>array(85,87,88),
				'2'=>array(1,2,3)),		
	);
?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinatours.css'); ?>
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="/chinatour">China Tours</a> China Tibet Tours</div>
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
           <h1>China Tibet Tours</h1>
           <div class="number">1</div>
           
           <div class="note1">
             <div class="tit_01">
              <h2 style="padding:0px; margin:0px;">Tibet Mysterious Tour
              <span>(Beijing, Xian, Yichang, Chongqing, Lhasa, Chengdu, Guilin, Yangshuo, Hong Kong)</span></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('4114');?></h3></span>
      <?php $packageList=ToursPackage::model()->findAllByPk($chinaTibetToursId[1][1]);?>
           <?php foreach ($packageList as $k=>$tour):?>
           <div class="list1">
               <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                     <tr>
                        <td><?php echo $packageGrage[$chinaTibetToursId[1][2][$k]];?></td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><img width="14" height="29" src="/images/tourism/best_07_31.jpg"></td>
                        <td><?php echo $tour->days;?>days</td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><img width="16" height="29" src="/images/tourism/best_08_33.jpg"></td>
                        <td><?php echo SiteUtils::getCurrencyPrice($tour->price);?></td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tour->id,'title'=>SiteUtils::stringURLSafe($tour->name)));?>"><img border="0" src="/images/tourism/more0032.png"></a></td>
                     </tr>
                   </tbody>
                </table>
            </div>
           <?php endforeach;?> 
  <div style="padding-right:"><strong>Highlights：</strong>Potala Palace, Norbulingka, Drepung Monastery, Research Base of Giant Panda Breeding, the Bund, Oriental Pearl Tower, Tiananmen Square, Summer Palace, Badaling Great Wall, Terracotta Warriors; Peking Roast Duck, Qingke, Beef and mutton, Mashed Yak Meat.
 </div>
      
</td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/tibet_1.jpg"></td>
  </tr>
</tbody></table>
</div>
        
           
<div style="display:none;" id="packid01">
    <strong>Reasons to Recommend:</strong><br>
        This route allows you to go through mysterious Tibet to appreciate blooming flowers in Nyingchi and enjoy the view of Chinese capital-Beijing as well as the most modern metropolis-Shanghai, meanwhile, lovely giant pandas in Sichuan are there waiting to say hello to you.<br>
        <strong>Tips:</strong><br>
         1、High altitude sickness: rest and drink more water.<br>
         2、Cultural taboo and consideration: Tibetan monks are highly respected; don’t touch or remove anything on an altar and don't wear shorts or short skirts or smoke in a monastery; don't take photos during a prayer meeting; dogs, donkeys and horses are forbidden to eat in Tibet.<br>
         3、Money &amp; Credit Card: In Tibet, the only place to change foreign currency and travelers cheques is Bank of China, to bring enough RMB cash is wiser.<br>
         4、Equipment: do bring some warm clothes: it is cold at night.<br>
         5、Medicine: Bring some commonly-used medicine, like Aspirin or paracetamol, Cold and Flu tablets, band-aid with you.
         </div>
         
      <div class="label">
            <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid01')"> Read More » </span>
            <!-- <label>
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
              <h2 style="padding:0px; margin:0px;">Tibet Culture Discovery Tour<span>(Beijing, Lhasa, Chengdu, Shanghai)</span></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('3025');?></h3></span>
      <?php $packageList=ToursPackage::model()->findAllByPk($chinaTibetToursId[2][1]);?>
           <?php foreach ($packageList as $k=>$tour):?>
           <div class="list1">
               <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                     <tr>
                        <td><?php echo $packageGrage[$chinaTibetToursId[2][2][$k]];?></td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><img width="14" height="29" src="/images/tourism/best_07_31.jpg"></td>
                        <td><?php echo $tour->days;?>days</td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><img width="16" height="29" src="/images/tourism/best_08_33.jpg"></td>
                        <td><?php echo SiteUtils::getCurrencyPrice($tour->price);?></td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tour->id,'title'=>SiteUtils::stringURLSafe($tour->name)));?>"><img border="0" src="/images/tourism/more0032.png"></a></td>
                     </tr>
                   </tbody>
                </table>
            </div>
           <?php endforeach;?> 
      <div style="padding-right:"><strong>Highlights：</strong>Potala Palace, Jokhang Temple, Tibetan customs, Tibetan Dancing Show, Temple of Heaven, Summer Palace, Badaling Great Wall, Terracotta Warriors and Horses Museum, City Wall, Three
      </div>
    </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/tibet_2.jpg"></td>
  </tr>
</tbody></table>
 </div>
   
<div style="display:none;" id="packid02">
 Gorges Dam, Qutang gorge, Giant Pandas, local food, snacks and souvenirs, Peking Opera.<br>
 <strong>Reasons to Recommend:</strong>This route is a collection of Chinese elite cities, it will not only satisfy your desire for novelty in Tibet, but will also allow you to enjoy profound culture in Beijing, modern architectures in Hong Kong, Terracotta Warriors in Xi’an, picturesque views in Guilin and Yangshuo, maybe the most exciting item is to standing by the side of the Three Gorges Dam to witness the such a grand dam.<br>
        <strong>Tips:</strong><br>
         1、This trip route lasts as long as 17 days, take necessary personal items with you: passport, sunscreen cream, etc.<br>
         2、Be prepared well for your Lhasa visit, take high altitude sickness, cultural diversity, religious taboo and peculiar local custom into consideration.<br>
         3、The weather is diverse from Lhasa to Hong Kong, cool in Tibet while warm in Guilin, Yangshuo and Hong Kong, bring suitable clothes with you.
         </div>
         
      <div class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid02')"> Read More » </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid02')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note2_over-->
        
        
        
        <!--note3-->
        <div class="number">3</div>
           <div class="note1">
             <div class="tit_01">
              <h2 style="padding:0px; margin:0px;">Tibet Full View Tour<span>(Lhasa, Gyangtse, Shigatse, Dingri, Everest Base Camp, Shigatse, Lhasa)</span></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;"><h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('1959');?></h3></span>
      <?php $packageList=ToursPackage::model()->findAllByPk($chinaTibetToursId[3][1]);?>
           <?php foreach ($packageList as $k=>$tour):?>
           <div class="list1">
               <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                     <tr>
                        <td><?php echo $packageGrage[$chinaTibetToursId[3][2][$k]];?></td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><img width="14" height="29" src="/images/tourism/best_07_31.jpg"></td>
                        <td><?php echo $tour->days;?>days</td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><img width="16" height="29" src="/images/tourism/best_08_33.jpg"></td>
                        <td><?php echo SiteUtils::getCurrencyPrice($tour->price);?></td>
                        <td width="4" align="left"><img src="/images/tourism/best_05_29.jpg"></td>
                        <td><a target="_blank" href="<?php echo Yii::app()->createUrl('toursPackage/view', array('id'=>$tour->id,'title'=>SiteUtils::stringURLSafe($tour->name)));?>"><img border="0" src="/images/tourism/more0032.png"></a></td>
                     </tr>
                   </tbody>
                </table>
            </div>
           <?php endforeach;?> 
<div style="padding-right:3px;"><strong>Highlights：</strong>Drepung Monastery, Norbulingka Park, Potala Palace, Sera Monastery, Jokhang Temple, Barkhor Street, Yamdrok Yumtso Lake, Palkhor Monastery, Everest Base Camp, 
</div>
  </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/tibet_3.jpg"></td>
  </tr>
</tbody></table>
</div>
             
        
<div style="display:none;" id="packid03">
yummy Tibetan food and snacks, peculiar Tibetan customes.<br>
 <strong>Reasons to Recommend:</strong>This route includes best views of Tibet, including Lhasa, Gyangtse, Shigatse, Dingri, Everest Base Camp and Shigatse, where you can both appreciate the tranquil and sacred land as well as experience local lifestyles.<br>
<strong>Tips:</strong><br>
         1、The best time to visit Tibet is from April to October, when it is warm and sunny.<br>
         2、Since Tibet is situated in high-altitude plateau, it maybe not that fit for those in poor health, high-altitude sickness should be first taken into consideration. <br>
         3、Cultural taboo and religious respect should be paid special attention in Tibet.<br>
         4、The temperature is warm in the noon while cold in early morning and late night, so keep warm, in case of getting cold.
</div>
         
      <div class="label">
          <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid03')"> Read More » </span>
          <!-- <label>
              <input type="button" onclick="dishidden('packid03')" name="button" id="button" value=""  
              style="background:url(/images/tourism/best_09_43.jpg) no-repeat; width:105px; height:29px; border:0px;"/>
            </label> -->
        </div>
        
        </div>
        <!--note3_over-->
 
      
             
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

function dishidden(strid){

	if(document.getElementById(strid).style.display=="none"){
	
		document.getElementById(strid).style.display="block";
	
	}else{
	
	document.getElementById(strid).style.display="none";
	}

}
 
</script>

</div>
    </div>        
</div>
