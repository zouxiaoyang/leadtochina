<!--<script type="text/javascript" src="http://maps.google.com/maps?file=api&v=2&hl=en&oe=utf-8&key=AIzaSyDWKEHpILWp1n7UZ5XUymY3rhiwKFGtzA8"></script>
<script type="text/javascript" src='/js/map/map.js'></script>-->
<script type="text/javascript" src='/js/map/iframeResizer.min.js'></script>
<!-- <script type="text/javascript" src='/js/map/map-1.js'></script> --> 
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <h1 class="page-title05"><?php echo $ress['name'];?></h1>
      <span>Tour Route: <?php echo $ress['route'];?> Tour</span>
      <div class="pro-detail-block"> <img src="/images/pro-detail.jpg" />
        <div class="pro-text01">
          <p><?php echo $ress['recommand_reason'];?></p>
        </div>
        <div class="pro-detail-tab"> 
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"> <a href="#itinerary" data-toggle="tab">itinerary</a> </li>
            <li><a href="#price" data-toggle="tab">price</a></li>
            <li><a href="#map" data-toggle="tab">map</a>
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
						  <p><?php echo str_replace(array('<b>','</b>','<strong>','</strong>'),array('<em>','</em>','<em>','</em>'),$ro['activities']);?></p>
						  <i> Meals: <?php echo $ro['eat_standard'];?> </i><br />
					 <?php $i++;} ?>
              </section>
            </div>
			<?php $arr_price = unserialize($ress['price_serialize']);?>
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
					<p><?php echo $ress['price_instruction'];?></p>  
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

            <div class ="tab-pane fade" id="map" style="width:100%;min-height:450px;display:block;"></div>

            <div class="tab-pane fade" id="photos">
              	<section class="clearfix inner-tab-block01">
					<div class="photo-block">
                	<a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                    	<img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-3.jpg" alt=""  width="240" height="150" />
                     </a>
                     <a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-4.jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard.">
                     	<img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-4.jpg" alt="" width="240" height="150" />
                     </a>
      				<a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-5.jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing.">
                    	<img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-5.jpg" alt="" width="240" height="150" />
                    </a>
      				<a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-6.jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close.">
                    	<img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-6.jpg" alt="" width="240" height="150" />
                    </a>
    		</div>
     				<link rel="stylesheet" href="/css/lightbox.css" />
			 		<script src="/js/lightbox.min.js"></script>
              	</section>


            </div>
            <div class="tab-pane fade " id="trip-notes">
              	<section class="clearfix inner-tab-block01">
                	<label class="inner-tab-title01">About the Itinerary</label>
                	<div class="inner-tab-text01"> 1. It is flexible to change the duration, attractions, starting and ending cities according to your interests. Also the tour can be extended or shorten as your preference, just let your trip consultant know. <br />
2. All of the tour packages exclude the international airfares. We suggest you can book it one your own. You can compare the price between OTAs (Expedia, Priceline, Sky scanner...) and the airlines. When you have a confirmed date, set alarm and compare it always.<br />
3. As the China Visa, we cannot apply for you as we are an China inbound travel company. However, we can send you our invitation letter with our company's official seal to you after you booked the tour from us, which could assist you to get China Visa from China embassy easily. Usually, we suggest you to apply the visa about one month or one month and a half before your travel date.
</div>
              	</section>
                <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About the Meal</label>
                <div class="inner-tab-text01"> For the breakfast, it is offered by the hotel you stay, usually Chinese and Western buffet breakfast. As for the lunch, we offer 80RMB per person for a standard Chinese meal at a nice tourist restaurant. If you want to order other kind of meals, such as vegetarian, Muslim meals, Indian Meals, please let your trip consultant know. Dinner usually will be left for you to choose the food you prefer. Our guide will help you to balance each meal such as your taboo, your preference and avoid repeated food. You have to pay for the extra cost if you want to take better or more. The meals on Yangtze Cruise are fixed Chinese and Western Buffet. </div>
              </section>
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About the Hotel</label>
                <div class="inner-tab-text01">* All the hotels can be replaced by your favorite ones or you can book your own hotels. And the hotel room we offered here usually is standard with twin beds. If you want to have king-size bed room or suite, please let your trip advisor know. Besides, all the accommodation are quoted on two persons sharing one room. The room supplement must be paid if you want to have a single room.<br />
* Most hotels we offered in our tour package have WIFI in the lobby, and some of which have WIFI in hotel rooms. If you need the WIFI in your room, please make sure with your trip advisor.</div>
              </section>
                <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">About Shopping</label>
                <div class="inner-tab-text01"> * We have non-shopping private tour and tour with carefully selected shops. For tour with shops, the price will be lower, and you will enter one or two shops in every tourist city. The shops could be jade, silk, pearl, Chinese tea etc., all of which have strong China's character and is worthy to buy. Each shop will take you around 45 minutes. We promise there is no compulsory consumption at all. You get the situation in your hands.
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
                             	<a href="<?php echo Yii::app()->createUrl('reviews/index',array('tid'=>$key,'packageid'=>$ress['id']));?>"> "<?php echo (strlen(strip_tags($review['des']))>=150)?substr(strip_tags($review['des']),150).'...':strip_tags($review['des']);?></a>
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

<script>
        doControls = function () {
            map.enableDoubleClickZoom();
            map.enableContinuousZoom();
            map.addControl(new GLargeMapControl());
        };

        doPre = function () {
			// start;icon;
            map.addOverlay(makeFullMapIcon(new GLatLng(39.91395,116.383667), 414, 1,588847));
			bounds.extend(new GLatLng(39.91395,116.383667));
				map.addOverlay(makeFullMapIcon(new GLatLng(34.263459,108.952103), 424, 4,588847)
				);
			bounds.extend(new GLatLng(34.263459,108.952103));
				map.addOverlay(makeFullMapIcon(new GLatLng(31.217499,121.462097), 422, 5,588847)
				);
			bounds.extend(new GLatLng(31.217499,121.462097));infoMarkers[414] = makeInfoMapIcon(new GLatLng(39.91395,116.383667), 414, 1);mm.addMarker(infoMarkers[414], 0, 17);infoMarkers[417] = makeInfoMapIcon(new GLatLng(25.286921,110.286255), 417, 1);mm.addMarker(infoMarkers[417], 0, 17);infoMarkers[420] = makeInfoMapIcon(new GLatLng(29.645095,91.134338), 420, 1);mm.addMarker(infoMarkers[420], 0, 17);infoMarkers[422] = makeInfoMapIcon(new GLatLng(31.217499,121.462097), 422, 1);mm.addMarker(infoMarkers[422], 0, 17);infoMarkers[424] = makeInfoMapIcon(new GLatLng(34.263459,108.952103), 424, 1);mm.addMarker(infoMarkers[424], 0, 17);infoMarkers[427] = makeInfoMapIcon(new GLatLng(22.389444,114.167175), 427, 1);mm.addMarker(infoMarkers[427], 0, 17);infoMarkers[439] = makeInfoMapIcon(new GLatLng(24.777072,110.499115), 439, 1);mm.addMarker(infoMarkers[439], 0, 17);infoMarkers[749] = makeInfoMapIcon(new GLatLng(20.9,107.2), 749, 1);mm.addMarker(infoMarkers[749], 0, 17);infoMarkers[750] = makeInfoMapIcon(new GLatLng(21.022742,105.850096), 750, 1);mm.addMarker(infoMarkers[750], 0, 17);infoMarkers[753] = makeInfoMapIcon(new GLatLng(16.466667,107.6), 753, 1);mm.addMarker(infoMarkers[753], 0, 17);infoMarkers[775] = makeInfoMapIcon(new GLatLng(13.362222,103.859722), 775, 1);mm.addMarker(infoMarkers[775], 0, 17);infoMarkers[777] = makeInfoMapIcon(new GLatLng(21.166667,94.883333), 777, 1);mm.addMarker(infoMarkers[777], 0, 17);infoMarkers[779] = makeInfoMapIcon(new GLatLng(21.98,96.08), 779, 1);mm.addMarker(infoMarkers[779], 0, 17);infoMarkers[782] = makeInfoMapIcon(new GLatLng(19.883333,102.133333), 782, 1);mm.addMarker(infoMarkers[782], 0, 17);infoMarkers[790] = makeInfoMapIcon(new GLatLng(18.788889,98.983333), 790, 1);mm.addMarker(infoMarkers[790], 0, 17);infoMarkers[792] = makeInfoMapIcon(new GLatLng(9.5,100), 792, 1);mm.addMarker(infoMarkers[792], 0, 17);infoMarkers[822] = makeInfoMapIcon(new GLatLng(5.4,100.233333), 822, 1);mm.addMarker(infoMarkers[822], 0, 17);infoMarkers[1112] = makeInfoMapIcon(new GLatLng(-7.801389,110.364444), 1112, 1);mm.addMarker(infoMarkers[1112], 0, 17);infoMarkers[1718] = makeInfoMapIcon(new GLatLng(37.55,126.983333), 1718, 1);mm.addMarker(infoMarkers[1718], 0, 17);infoMarkers[1722] = makeInfoMapIcon(new GLatLng(25.05,121.33), 1722, 1);mm.addMarker(infoMarkers[1722], 0, 17);infoMarkers[5073] = makeInfoMapIcon(new GLatLng(16.890556,97.633333), 5073, 1);mm.addMarker(infoMarkers[5073], 0, 17);
        };

        doPost = function () {
          //  map.addOverlay(new GPolyline([new GLatLng(39.91395,116.383667), new GLatLng(39.91395,116.383667)], "#000000", 5, 1, null));
			map.addOverlay(new GPolyline([new GLatLng(39.91395,116.383667), new GLatLng(34.263459,108.952103)], "#000000", 5, 1, null));
			map.addOverlay(plane([new GLatLng(39.91395,116.383667), new GLatLng(34.263459,108.952103)], 379, 28871266));
			// map.addOverlay(new GPolyline([new GLatLng(34.263459,108.952103), new GLatLng(34.263459,108.952103)], "#000000", 5, 1, null));
			map.addOverlay(new GPolyline([new GLatLng(34.263459,108.952103), new GLatLng(31.217499,121.462097)], "#FF0000", 3, 0.70, null));
			map.addOverlay(plane([new GLatLng(34.263459,108.952103), new GLatLng(31.217499,121.462097)], 379, 28871266));
			// map.addOverlay(new GPolyline([new GLatLng(31.217499,121.462097), new GLatLng(31.217499,121.462097)], "#000000", 5, 1, null));
        };

        var progZoom = 0;
        //var webPath = "http://www.kensingtontours.com/Content/assets/maps/";
		 var webPath = "http://zouyiquan.test.cc/assets/maps/";
		initializeMap();
        loaded();
    </script>
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