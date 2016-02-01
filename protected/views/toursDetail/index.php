<script type="text/javascript" src="http://maps.google.com/maps?file=api&v=2&hl=en&oe=utf-8&key=AIzaSyDWKEHpILWp1n7UZ5XUymY3rhiwKFGtzA8"></script>
<script type="text/javascript" src='/js/map/map.js'></script>
<script type="text/javascript" src='/js/map/iframeResizer.min.js'></script>
<!-- <script type="text/javascript" src='/js/map/map-1.js'></script> --> 
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <h1 class="page-title05"><?php echo $ress['name'];?></h1>
      <span>Tour Route: <?php echo $ress['route'];?> Tour</span>
      <div class="pro-detail-block"> <img src="<?php echo '/'.$ress['filedir'].$ress['ufile'];?>" />
        <div class="pro-text01">
          <p><?php echo $ress['recommand_reason'];?></p>
        </div>
        <div class="pro-detail-tab"> 
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"> <a href="#itinerary" data-toggle="tab">itinerary</a> </li>
			<?php 
				$arr_price = unserialize($ress['price_serialize']);
				$arr_price = array_filter($arr_price);
				if(!empty($arr_price)):
			?>
				<li><a href="#price" data-toggle="tab">price</a></li>
			<?php endif;?>
            <?php if($ress['package_type']!=2):?>
				<li><a href="#map" data-toggle="tab">map</a>
			<?php endif; ?>
            <li><a href="#photos" data-toggle="tab">photos</a></li>
            <li><a href="#trip-notes" data-toggle="tab">trip notes</a></li>
            <li><a href="#ask-answer" data-toggle="tab">ask & answer</a></li>
             <li class="last"><a href="#inquire" data-toggle="tab">inquire</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="itinerary">
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">TOUR CODE</label>
                <div class="inner-tab-text01"><?php echo $ress['package_code'];?></div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">DEPARTURE DATES</label>
                <div class="inner-tab-text01"><?php echo $ress['departs'];?></div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">TOUR TYPE</label>
                <div class="inner-tab-text01"><?php echo $ress['package_tour_type'];?></div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">DETAILED ITINERARY</label>
                <div class="inner-tab-text01"> 
					<?php $i=1;foreach($router as $ro){ ?>
						  <b><?php echo 'Day '.$i.' '.$ro['today_route'];?></b>
						  <p><?php echo strip_tags($ro['activities']);?></p>
						  <i> Meals: <?php echo $ro['eat_standard'];?> </i><br />
					 <?php $i++;} ?>
              </section>
            </div>
			<?php 
				if(!empty($arr_price)):
			?>
            <div class="tab-pane fade" id="price">
            	<section class="clearfix inner-tab-block01">
                	<label class="inner-tab-title01">TOUR PRICE</label>
                	<div class="inner-tab-text01">
                		<table class="table price-table01">
       	             		<thead>
                    			<tr>
                      <th>Travel Period</th>
                      <th style="border-left:1px solid #fff;border-right:1px solid #fff;">2-5  travelers</th>
                      <th>6-9 travelers</th>
                    </tr>
                  			</thead>
                  			<tbody>
                    			<tr>
                      <td>Dec.1- Feb.28</td>
                      <td><?php echo $arr_price[1];?></td>
                      <td><?php echo $arr_price[2];?></td>
                    </tr>
                     <tr>
                      <td>Mar.1- Nov.30</td>
                     <td><?php echo $arr_price[6];?></td>
                      <td><?php echo $arr_price[7];?></td>
                    </tr>
                  			</tbody>
                	</table>
                  </div>  
              	</section> 
              	<section class="clearfix inner-tab-block01">
                	<label class="inner-tab-title01">IMPORTANT NOTES</label>
                	<div class="inner-tab-text01">
					<p><?php //echo $ress['price_instruction'];?> 1. The price is based on stay in China four star hotels. If you want to deduct, upgrade or downgrade the hotel, please indicate this while sending the inquiry.<br />
2. You will enjoy more discounts if there is more people join the tour.<br />
3. Prices may vary according to your travel time and are higher in the high season, e.g. Labor's Day (Apr 29-May 5, 2014), China National Day Holiday (Sep 29-Oct 8, 2014), and Chinese Spring Festival (Jan 28-Feb 7, 2014).</p>  
                </div>
              	</section>
              	<section class="clearfix inner-tab-block01">
              		<label class="inner-tab-title01">PRICE INCLUDES</label>  
                    <div class="inner-tab-text01">
                     	  <p><?php echo $ress['price_include'];?></p>
                     </div>
              	</section>    
              	<section class="clearfix inner-tab-block01">
              		<label class="inner-tab-title01">PRICE EXCLUDES</label>  
                 	<div class="inner-tab-text01">
					 <p><?php echo $ress['price_exclude'];?></p>  
                 </div>
              	</section>    
               	<section class="clearfix inner-tab-block01">
               		<label class="inner-tab-title01">TAILOR MADE</label> 
                    <div class="inner-tab-text01">
                    	<p>Interested in this itinerary but would like to make changes to the
hotels, destinations, sites, or anything else? Contact us here to customize this itinerary just for you.</p>
                    
                    </div>
               	</section>        
            </div>
		<?php endif;?>
			<?php if($ress['package_type']!=2):?>
				<div class ="tab-pane fade" id="map" style="width:100%;min-height:450px;display:block;"></div>
			<?php endif;?>

            <div class="tab-pane fade" id="photos">
              	<section class="clearfix inner-tab-block01">
				<div class="photo-block">
					<?php 
						//foreach($ress as $res):
						$ress['lightbox'] = str_replace('，',',',$ress['lightbox']);
						$pics = explode(',',$ress['lightbox']);
						$pics = array_filter($pics);
					//	var_dump($pics[1]);exit;
						foreach($pics as $pic):
							list($city_name,$jingdian) = explode('_',trim($pic));
							list($dian,$bs) = explode('-',$jingdian);
							$alt = isset($ligboxalt[$city_name.'_'.$dian])?$ligboxalt[$city_name.'_'.$dian]:'';
						?>
						<a class="example-image-link" href="/uploads/lightbox/<?php echo $city_name;?>/<?php echo $pic;?>.jpg" data-lightbox="example-set" data-title="<?php echo $alt;?>">
								<img class="example-image" src="<?php echo '/uploads/lightbox/'.$city_name.'/'. $city_name.'_'.$dian.'-'.str_replace('B','S',$bs).'.jpg';?>" alt="<?php echo $alt;?>" title="<?php echo $alt;?>" width="240" height="150" />
							 </a>
					<?php endforeach;?>
			</div>
     				<link rel="stylesheet" href="/css/lightbox.css" />
			 		<script src="/js/lightbox.min.js"></script>
              	</section>
            </div>
            <div class="tab-pane fade " id="trip-notes">
              	<section class="clearfix inner-tab-block01">
                	<label class="inner-tab-title01">About the Itinerary</label>
                	<div class="inner-tab-text01"> It is flexible to change the duration, attractions, starting and ending cities according to your interests. Also the tour can be extended or shorten as your preference, just let your trip consultant know. <br />
 All of the tour packages exclude the international airfares. We suggest you can book it one your own. You can compare the price between OTAs (Expedia, Priceline, Sky scanner...) and the airlines. When you have a confirmed date, set alarm and compare it always.<br />
 As the China Visa, we cannot apply for you as we are an China inbound travel company. However, we can send you our invitation letter with our company's official seal to you after you booked the tour from us, which could assist you to get China Visa from China embassy easily. Usually, we suggest you to apply the visa about one month or one month and a half before your travel date.
</div>
              	</section>
                <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About the Meal</label>
                <div class="inner-tab-text01"> For the breakfast, it is offered by the hotel you stay, usually Chinese and Western buffet breakfast. As for the lunch, we offer 80RMB per person for a standard Chinese meal at a nice tourist restaurant. If you want to order other kind of meals, such as vegetarian, Muslim meals, Indian Meals, please let your trip consultant know. Dinner usually will be left for you to choose the food you prefer. Our guide will help you to balance each meal such as your taboo, your preference and avoid repeated food. You have to pay for the extra cost if you want to take better or more. The meals on Yangtze Cruise are fixed Chinese and Western Buffet. </div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About the Hotel</label>
                <div class="inner-tab-text01">All the hotels can be replaced by your favorite ones or you can book your own hotels. And the hotel room we offered here usually is standard with twin beds. If you want to have king-size bed room or suite, please let your trip advisor know. Besides, all the accommodation are quoted on two persons sharing one room. The room supplement must be paid if you want to have a single room.<br />
* Most hotels we offered in our tour package have WIFI in the lobby, and some of which have WIFI in hotel rooms. If you need the WIFI in your room, please make sure with your trip advisor.</div>
              </section>
                <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About Shopping</label>
                <div class="inner-tab-text01">We have non-shopping private tour and tour with carefully selected shops. For tour with shops, the price will be lower, and you will enter one or two shops in every tourist city. The shops could be jade, silk, pearl, Chinese tea etc., all of which have strong China's character and is worthy to buy. Each shop will take you around 45 minutes. We promise there is no compulsory consumption at all. You get the situation in your hands.
<br />
* Department stores, supermarkets, boutiques, hotel and restaurants in most cities of China do accept the credit card with the sigh of MasterCard, VISA and JCB. However, it does generate commission charge. Please check the regulations with your bank manager.</div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About Baggage Allowance</label>
                <div class="inner-tab-text01">All domestic flight we offered is the economic class, which you can carry one hand-on luggage no more than 5 kg for free. The total of free registered luggage is no more than 20kg. Excess luggage will charge you some extra fees, be aware of that. The free registered luggage allowance in China domestic train is 20kg.  </div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About Travel Insurance</label>
                <div class="inner-tab-text01">The insurance provided by us is called Travel Agencies' Liability Insurance, which covers accidents occurring during the activities arranged by travel agency. It does not cover mishaps or physical problems occurring outside the guided tour period or caused by clients themsevles, so we highly suggest you purchase the full coverage travel insurance from your country of origin.
</div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About Tipping Guide</label>
                <div class="inner-tab-text01"> For group of 1-4 passengers, recommend US$ 4-8 per tourist per day for guide, and US$ 2-5 per tourist per day for guide; for group of 5 and above, recommend US$ 2-5 per tourist per day for guide, and US$2-4 per tourist per day for driver. Besides, we highly recommend you to tip every day to encourage better service from them in the next coming days. However, if you have genuine reason not to tip, don't.</div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About Payment Guide</label>
                <div class="inner-tab-text01"> Usually, the deposit of tour package accounts for 30% of the total quotation, and the balance should be paid 30 days before your tour date. Payment methods we accept include Bank Transfer and PayPal, Credit Card and so on. More details you can check the Payment Guide page. Moreover, Children who are less than 12 y/o have their own discounts, please contact with your trip advisor.</div>
              </section>
                           
            </div>
            
            <div class="tab-pane fade" id="ask-answer">
             <section class="clearfix inner-tab-block01">
              	<div class="question-detail">
                	<div class="quest-one">
           				<div class="direction"><img alt="" src="/images/question1.png"  /></div>
           				<!--  describe start  -->
           				<div class="describe">
            				<p>can you include flights from bangkok<br>
                            Asked by <span>parmanand b kassen</span> (Oct.21, 2015)</p>
           				</div>
           				<!--  describe end  -->
           				<!--  ask start  -->
             			<div class="ask"><p><span>Trip consultant</span> (Oct.21, 2015) replied: <br>
                  		That's okay. We have sent you the package including international flights. Please kindly check your email address</p>
             			</div>
             			<!--  ask end  -->
                  </div>
                </div>
             </ssection>
            </div>
            <div class="tab-pane fade" id="inquire">
              	<section class="clearfix inner-tab-block01">
                	<label class="inner-tab-title01">Making an Inquiry</label>
                	<div class="inner-tab-text01">
                		<p>Any part of this itinerary can be altered to fit your need, e.g. accommodation, add/skip city, tour length...
							Click below to tell us what you're looking for:</p>
                        <a class="large-button" href="/node/add/triprequest/1966959">Inquire about this trip</a>
                	</div>
                </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    	 <div class="pro-detail-block-right">
         	<section class="clearfix ">
            	<div class="top-block01">
            	<p>If you want to make some change about this itinerary, let us customize a private China tour for you to meet your requirements. You will get:</p>
            	<ul>
                	<li>100% tailor-made trip</li>
                    <li>Quality service at best value</li>
                    <li>Authentic travel experiences</li>
                </ul>
                </div>
            </section>
            <section class="clearfix ">
            		<div class="top-block02">
            		<p class="center-button">
        				<a href="<?php echo Yii::app()->createUrl('order/index');?>" class="large-button" >Help Me Creat My Trip</a><br>
        				<span class="tour-sidebar-inquire-aftertext">Free travel guide & quotation within 24 hrs!</span>
    				</p>
                    </div>
            </section>
            <section class="clearfix">
              	<div class="view-block-pro-detail">
                	<h3 class="title01">Reviews of this Travel Agency</h3>
                    <div class="view-content">
				<?php if(!empty($reviews)):?>
					<?php foreach($reviews as $key=>$review){ ?>
                    	<div class="views-row">
							<?php if(!empty($review['pic'])):?>
								<?php foreach($review['pic'] as $v){?>
									<img src="/newadmin/images/reviews/<?php echo $v['pic'];?>" />
								<?php } ?>
								<?php else:?>
									<img src="/images/view/Reviews.jpg" style="width:106px;height:106px;"/>
									<img src="/images/view/Reviews.jpg" style="width:106px;height:106px;"/>
							<?php endif;?>	
                             <span class="text01"><a href="#">Luxury Italy Vacation Review: Southern Italy, Sicily, Amalfi Coast</a></span>
                             <span class="text02">
                             	<a href="<?php echo Yii::app()->createUrl('reviews/index',array('tid'=>$key,'packageid'=>$ress['id']));?>"> "<?php echo (strlen(strip_tags($review['des']))>=150)?substr(strip_tags($review['des']),0,150).'...':strip_tags($review['des']);?></a>
                                 <a class="views-more-link" href="<?php echo Yii::app()->createUrl('reviews/index',array('tid'=>$key,'packageid'=>$ress['id']));?>"><?php echo (strlen(strip_tags($review['des']))>=150)?'read more':''; ?></a>
                             </span>
                             <span class="star clearfix"><img src="/images/5star.png" /> by <?php echo $review['name'];?>. </span>
                        </div>
						<?php } ?>
					<?php endif;?>
                    </div>
                </div>
            </section>
         </div>
    </div>
  </div>
</div>
<?php 
if($ress['package_type']!=2 && !empty($ress['map_city'])){
	$arr_route = explode(',',$ress['map_city']);
	$arr_la_ln=array();
	
	if(Yii::app()->cache->get('ss_'.$ress['id'])){
	  $arr_la_ln = Yii::app()->cache->get('ss_'.$ress['id']);
	}else{
		foreach($arr_route as $city){
			$ch = curl_init();
			$city1 = str_replace(' ','',$city);
			$city1 = trim(ucwords($city));
			curl_setopt($ch, CURLOPT_URL, 'http://maps.google.com/maps/api/geocode/json?address='.$city1.'&sensor=false&language=en&bounds=false'); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$ss = curl_exec($ch);
			$ss = json_decode($ss,true);
			$ss = $ss['results'][0];
			$lat = $ss['geometry']['location']['lat'];
			$lng = $ss['geometry']['location']['lng'];
			$arr_la_ln[$city]=array(
				'lat'=>$lat,
				'lng'=>$lng
			);
		}
		// add to cache;
		Yii::app()->cache->set('ss_'.$ress['id'],$arr_la_ln); 
	}
}
?>
<?php if($ress['package_type']!=2 && !empty($ress['map_city'])){ ?>
<script>
        doControls = function () {
            map.enableDoubleClickZoom();
            map.enableContinuousZoom();
            map.addControl(new GLargeMapControl());
        };
        doPre = function () {
			// start;icon;
			<?php 
				$arr_route = array_filter($arr_route);
				$cnt = count($arr_route);
				if($cnt>1){

				for($j=0;$j<($cnt-1);$j++){ 
					$city_start = $arr_route[$j];	
					$city_end = $arr_route[$j+1];	
					
				?>
				<?php 
					if($j==0){	
				?>
					map.addOverlay(makeFullMapIcon(new GLatLng(<?php echo $arr_la_ln[$city_start]['lat'];?>,<?php echo $arr_la_ln[$city_start]['lng'];?>), 414, 1,588847));
					bounds.extend(new GLatLng(31.217499,121.462097));
				<?php } ?>
					bounds.extend(new GLatLng(<?php echo $arr_la_ln[$city_start]['lat'];?>,<?php echo $arr_la_ln[$city_start]['lng'];?>));

					map.addOverlay(makeFullMapIcon(new GLatLng(<?php echo $arr_la_ln[$city_end]['lat'];?>,<?php echo $arr_la_ln[$city_end]['lng'];?>), 424, <?php echo $j+2;?>,588847));

			<?php	}	?>
				bounds.extend(new GLatLng(<?php echo $arr_la_ln[$city_end]['lat'];?>,<?php echo $arr_la_ln[$city_end]['lng'];?>));
			<?php } ?>
        };
        doPost = function () {		
		<?php 
				$arr_route = array_filter($arr_route);
				$cnt = count($arr_route);
				if($cnt>1){
				for($i=0;$i<($cnt-1);$i++){ 
					$city_start = $arr_route[$i];	
					$city_end = $arr_route[$i+1];
				?>
					map.addOverlay(new GPolyline([new GLatLng(<?php echo $arr_la_ln[$city_start]['lat'];?>,<?php echo $arr_la_ln[$city_start]['lng'];?>), new GLatLng(<?php echo $arr_la_ln[$city_end]['lat'];?>,<?php echo $arr_la_ln[$city_end]['lng'];?>)],'#000000', 5, 1, null));

					map.addOverlay(plane([new GLatLng(<?php echo $arr_la_ln[$city_start]['lat'];?>,<?php echo $arr_la_ln[$city_start]['lng'];?>), new GLatLng(<?php echo $arr_la_ln[$city_end]['lat'];?>,<?php echo $arr_la_ln[$city_end]['lng'];?>)], 379, 28871266));
				<?php } ?>
		<?php } ?>
        };
        var progZoom = 10;
        //var webPath = "http://www.kensingtontours.com/Content/assets/maps/";
		 var webPath = "http://zouyiquan.test.cc/assets/maps/";
		initializeMap();
        loaded();
    </script>
<?php } ?>
<script>
	$(function(){
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		// 获取已激活的标签页的名称
		var activeTab = $(e.target).text(); 
				if(activeTab=='map'){
					$('#map').show();
				}else{
					$('#map').hide();
				}
			});
		});
</script>