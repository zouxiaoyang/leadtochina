<?php
	$packageGrage=array(
		'1'=>'Budget',
		'2'=>'Standard',
		'3'=>'Luxury'
	);
	$bestChinaToursId=array(
		'1'=>array(
				'1'=>array(14,18,17),	//id
				'2'=>array(1,3,2)),		//1=>Budget,2=>Standard,3=>Luxury
		'2'=>array(
				'1'=>array(21,29,22),
				'2'=>array(1,3,2)),
		'3'=>array(
				'1'=>array(42,54),
				'2'=>array(1,2)),
		'4'=>array(
				'1'=>array(59,64,61),
				'2'=>array(1,3,2)),
		'5'=>array(
				'1'=>array(31,34,36),
				'2'=>array(1,3,2)),
	);

  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/chinatours.css'); 
  $this->setPageTitle("Best China Tours, China Best Tours, Top China Tours");
  Yii::app()->clientScript->registerMetaTag('keywords',"best china tour, china best tours, tours to china, china trip, tours china, china travel agent");
  Yii::app()->clientScript->registerMetaTag('description',"China Travel Company offering China best tours to Beijing, Xian, Guilin, Yangtze Cruise, Tibet and other hot destinations with great value.");

?>

<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="/chinatour">China Tours</a> Best China Tours</div>
<div class="clear"></div>
<div class="main">
    <div class="right" style="float:left;">
          <?php $this->Widget('application.components.widgets.SearchChinaTours'); ?>
          <?php $this->renderPartial('/common/chinaThemeTours'); ?>
          <div class="note3"> <?php $this->renderPartial('/common/customizeTour'); ?></div>
          <div class="note3">
            <?php $this->renderPartial('/message/_contactUs',array(
                'model'=>$message,
            )); ?>
          </div>
  		    <div class="note3"> <?php $this->renderPartial('/common/tripAdvisor'); ?></div>
    </div>
    <div class="left" style="float:right; margin-right:0px;">
       <div class="package_main">
           <h1>Best China Tours</h1>
           <div class="number">1</div>
           <div class="note1">
                <div class="tit_01"><h2>China Golden Tour<span>(Beijing,Xian,Shanghai)</span></h2></div>
             <div class="img_note">
               <table width="100%" cellspacing="0" cellpadding="0" border="0">   
                   <tbody>
                      <tr>
                         <td valign="top">
           <span style="line-height:45px; padding-left:15px;"><h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('1572');?></h3></span>
           <?php $packageList=ToursPackage::model()->findAllByPk($bestChinaToursId[1][1]);?>
           <?php foreach ($packageList as $k=>$tour):?>
           <div class="list1">
               <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                     <tr>
                        <td><?php echo $packageGrage[$bestChinaToursId[1][2][$k]];?></td>
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
              <div><strong>Highlights：</strong> Forbidden City, Summer Palace, Badaling Great Wall, Temple of Heaven, Terra-Cotta Warriors, Big Wild Goose Pagoda,Shaanxi Historical Museum, Qin Tombs, Yuyuan Garden, Oriental Pearl TV  Tower etc.</div>
                </td>
                <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/best_03_12.jpg"></td>
             </tr>
          </tbody>
        </table>
      </div>
       <div style="display:none;" id="packid01"><br>
        <strong>Tips:</strong><br>
         1 The distance among attractions is far away with each other, so better join in a group tour or take private tour.<br>
         2 Attractions in these metropolises occupy a large area, so comfortable shoes are must.<br>
         3 During some major holidays and festivals, there will be many flower shows and temple fairs, as well as the crowded tourists, so choose the right days to tour these cities.<br>
         4 The most attractions are the ancient palaces, temples, and mausoleums, If you don’t like it, please customize your own China tour.<br>
         5 Basically, the best tourist season is March, when flowers are blossoming.
         </div>
         
      <div class="label">
              <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold; " id="button" name="button" onclick="dishidden('packid01')"> Read More &raquo; </span> 
        </div>
        
        </div>
        <!--note1_over-->

        <!--note2-->
        <div class="number">2</div>
           <div class="note1">
             <div class="tit_01">
              <h2 style="padding:0px; margin:0px;">China Essence Tour<span>(Beijing, Xian, Guilin, Yangshuo, Guilin, Shanghai)</span></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;">
      <h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('1814');?></h3>
      </span>
     <?php $packageList=ToursPackage::model()->findAllByPk($bestChinaToursId[2][1]);?>
      <?php foreach ($packageList as $k=>$tour):?>
      <div class="list1">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
             <tbody>
                <tr>
                   <td><?php echo $packageGrage[$bestChinaToursId[2][2][$k]];?></td>
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
      <div><strong>Highlights：</strong>Forbidden City, Summer Palace, Great Wall, Terra-Cotta Warriors, Wild Goose Pagoda, Li River Cruise, Elephant Trunk Hill, Yuyuan Garden, Jade Buddha Temple, Oriental Pearl TV Tower, etc.</div>
      
      
      
    </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/best_11.jpg"></td>
  </tr>
</tbody></table>

             </div>
             
  
           
       <div style="display:none;" id="packid03"><br>
       <strong>Reasons to Recommend:</strong> The thousands of treasures in the Forbidden City fully witness some sections of China’s long history, as Great Wall and Terra Cotta Warriors show the world the splendid and mysterious China. Meanwhile, as green mountains and rivers become more and more precious in China, Guilin with Li River become the precious of the precious.<br>
        
         <strong>Tips:</strong><br>
         1、There are many undeveloped sections of Great Wall in Beijing and Hebei Province, and according to statistics released by China’s related government, more than 70% wild Sections of undeveloped sections of Great Wall started to collapse for uncontrolled quarrying, so do not trek along the Great Wall to some far away sections. <br>
         2、The Best Tourist seasons to Guilin are the March-April and August. During the March-April, the mountains are encircled by mist with light rain, giving you a feeling of in fairyland. Meanwhile, March is the flowers blossoming season. August only belongs to the fragrant Osmanthus. Wherever you are in Guilin, you can smell that sweet fragrance, and the unique Guilin Osmanthus Cake which tastes so sweet.<br>
         3、While in Yangshuo, enjoying the Impression Sanjie Liu is a must. When hundreds of performers dance on the water face of Li River, with mountains as the background, the scene is very spectacular.
         </div>
         
      <div class="label">
              <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid03')"> Read More &raquo; </span>
        </div>
        
        </div>
        <!--note2_over-->
        
        
        
        <!--note3-->
        <div class="number">3</div>
           <div class="note1">
             <div class="tit_01">
              <h2 style="padding:0px; margin:0px;">Classic China Tour with Yangtze River<span>(Beijing, Xian, Chongqing, Yangtze River,Yichang,Shanghai)</span></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;">
      <h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('2018');?></h3>
      </span>
      <?php $packageList=ToursPackage::model()->findAllByPk($bestChinaToursId[3][1]);?>
      <?php foreach ($packageList as $k=>$tour):?>
      <div class="list1">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
             <tbody>
                <tr>
                   <td><?php echo $packageGrage[$bestChinaToursId[3][2][$k]];?></td>
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
      <div><strong>Highlights：</strong>Forbidden City, Summer Palace, Badaling Great Wall, Terra-Cotta Warriors, Wild Goose Pagoda, Shaanxi Historical Museum, Outang Gorge, Three Gorges Dam, Jade Buddha Temple, Oriental Pearl TV Tower etc.<br>
<strong>Reasons to Recommend:</strong>Needless to</div>
      
      
      
    </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/best_12.jpg"></td>
  </tr>
</tbody></table>

             </div>
         
       <div style="display:none;" id="packid04">
        say the great achievements Beijing, Xian and Shanghai created in recent years, as the traditional tourist triangle, Beijing, Xian and Shanghai are the places where you can find the 5,000 years history with numerous miracles. Yangtze River Cruise shows tourists the marvelous natural China’s mountains and rivers.<br>
        
         <strong>Tips:</strong><br>
         1、Generally speaking, April-November is the right season to tour China, except May 1st-3rd International Labor Day and October1st-7th National Holiday. <br>
         2、Some Well known attractions, such as Forbidden City, Temple of Heaven, Terracotta Warriors Museum and Great Wall do have Voice Guide Equipment which could give you a better way to enjoy the attractions with China’s splendid history.<br>
         3、As part of Yangtze River Cruise, the Shennong Stream is one of the five National AAAAA attractions, here you can enjoy skiff cruise dragging by boat trackers, group of waterfalls, cliff coffin, plank road, stalagmite and karst caves etc. 
         </div>
         
      <div class="label">
              <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid04')"> Read More &raquo; </span>
        </div>
        
        </div>
        <!--note3_over-->
  
  
      
        <!--note4-->
        <div class="number">4</div>
           <div class="note1">
             <div class="tit_01">
              <h2 style="padding:0px; margin:0px;">Colorful Yunnan Highlights Tour<span>(Kunming, Dali, Lijiang, Shangri-La)</span></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;">
      <h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('1549');?></h3>
      </span>
     <?php $packageList=ToursPackage::model()->findAllByPk($bestChinaToursId[4][1]);?>
      <?php foreach ($packageList as $k=>$tour):?>
      <div class="list1">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
             <tbody>
                <tr>
                   <td><?php echo $packageGrage[$bestChinaToursId[4][2][$k]];?></td>
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
      <div><strong>Highlights：</strong>Stone Forest, Three Pagodas, Dali Old Town, Houses of Bai People, Jade Dragon Mountain, Tiger Leaping Gorge, First Band of the Yangtze River, Songzanlin Temple, Daguan Park, Murals in Baisha</div>
      
      
      
    </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/best_13.jpg"></td>
  </tr>
</tbody></table>

             </div>
        
       <div style="display:none;" id="packid05">Village etc.<br>
       <strong>Reasons to Recommend:</strong>The pure and beautiful wild scenery, colorful Culture of plenty of ethnic minority groups with comfortable climate all year round attract numerous tourists every year. Besides, flowers in Yunnan Province are also well known the world for its great color and variety. Besides, the Impression Lijiang is also worth visiting. <br>
        
         <strong>Tips:</strong><br>
         1、The best tourist season is spring as flowers start to blossom. Meanwhile, the sunshine is very strong; better bring some sun block, hat, sun glasses etc.<br>
         2、The distance among attractions is rather long, so carsick medicine is a must.<br>
         3、Major diets in Yunnan are spicy, so better eat little and drink more water to keep health.<br>
         4、Yunnan is hometown of many ethnic minority groups in China. Besides, they have many taboos. So better take advice from your tour guide and advisor before going.
         </div>
         
      <div class="label">
              <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid05')"> Read More &raquo; </span>
        </div>
        
        </div>
        <!--note4_over-->


         <!--note5-->
        <div class="number">5</div>
           <div class="note1">
             <div class="tit_01">
              <h2 style="padding:0px; margin:0px;">Splendid China Tour<span>(Beijing, Xian, Lhasa, Shigatse, Lhasa, Shanghai)</span></h2>
             </div>
             <div class="img_note">
             
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td valign="top">
      <span style="line-height:45px; padding-left:15px;">
     <h3>Full Price From：<?php echo SiteUtils::getCurrencyPrice('2899');?></h3>
      </span>
     <?php $packageList=ToursPackage::model()->findAllByPk($bestChinaToursId[5][1]);?>
      <?php foreach ($packageList as $k=>$tour):?>
      <div class="list1">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
             <tbody>
                <tr>
                   <td><?php echo $packageGrage[$bestChinaToursId[5][2][$k]];?></td>
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
      <div><strong>Highlights：</strong>Forbidden City, Summer Palace, Badaling Great Wall, Temple of Heaven, Terra-Cotta Warriors, Big Wild Goose Pagoda, Xian City Wall, Potala Palace, Jokhang Temple, Yuyuan Garden, Oriental Pearl TV Tower etc.</div>
      
      
      
    </td>
    <td width="374"><img width="360" height="254" style="padding:7px; margin-bottom:10px;" src="/images/tourism/best_10.jpg"></td>
  </tr>
</tbody></table>

             </div>
   
           
       <div style="display:none;" id="packid02">
       <br>
      <strong>Reasons to Recommend:</strong> These attractions are the essences of China’s 5,000 years Culture. Meanwhile, These World Cultural Heritages are the highlights of China Tours. Besides, the highly-developed hotels, transportations and other infrastructures guaranteed you a wonderful China Tour. If you want to know the past and current China, then you must pay visit to Great Wall, TerraCotta-Warriors, Potala Palace and the Bund etc.<br>
        <strong>Tips:</strong><br>
         1、The highly developed metro system with fully concerned guideposts in Beijing, Xian and Shanghai release tourists from the worry of being lost. However, the premise is Not the Rush Hour.<br>
         2、If you take plane, you can tour Tibet from March to November. However, the real best Tibet Tourist season is July and August. The Cole Flowers blossom in July and Lhasa holds the grand Shoton Festival with unpacking huge pictures of Buddha.<br>
         3、The best ways to enter Tibet are taking plane, Qingzang Railway and Qingzang highway (Xining-Lhasa). It is no recommended to drive car during the rainy season (June-October). Consult your doctor whether you are ready to enter Tibet or not.<br>
         </div>
         
      <div class="label">
         <span style="margin-top:20px; display:block; color:#ff6000; cursor:pointer; font-weight:bold;" id="button" name="button" onclick="dishidden('packid02')"> Read More &raquo; </span>
        </div>
        
        </div>
        <!--note5_over-->
  
             
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
