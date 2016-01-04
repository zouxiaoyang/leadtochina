<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <h1 class="page-title05"><?php echo $res['orphanage_name'];?></h1>
      <a href="<?php echo Yii::app()->createUrl('adoption/showMaps',array('city_name'=>$res['city_name'],'id'=>$res['apt_id']));?>"><img src="/images/map-ico01.gif" /></a> &nbsp;<span>Address: <?php echo $res['address'].','.$res['city_name'].',China&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal Code:&nbsp;'.$res['postal_code'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone No:&nbsp;'.$res['tel'];?></span>
      <div class="pro-detail-block"> <img src="/images/adoption-views-banner01.jpg" />
        <div class="pro-text01">
          <p><?php echo $res['public_content'];?></p>
        </div>
        <div class="pro-detail-tab"> 
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"> <a href="#itinerary" data-toggle="tab">ORPHANAGE VISIT</a> </li>
            <li><a href="#photos" data-toggle="tab">photos</a></li>
            <li><a href="#trip-notes" data-toggle="tab">Area Guide</a></li>
            <li><a href="#ask-answer" data-toggle="tab">RETURN TRIP GUIDE</a></li>
             <li class="last"><a href="#inquire" data-toggle="tab">inquire</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="itinerary">
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">ITINERARY FYR</label>
                <div class="inner-tab-text01"> 
						  <p>
							Day 1: <?php echo $res['day1'];?>
						  </p>
						   <p>
							Day 2: <?php echo $res['day2'];?>
						  </p>
						   <p>
							Day 3: <?php echo $res['day3'];?>
						  </p>
						  <p>
							Day 4: <?php echo $res['day4'];?>
						  </p>
					</div>
              </section>
			  <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01">IMPORTANT NOTES</label>
                <div class="inner-tab-text01"> 
					<?php echo $res['description'];?>
				</div>
              </section>
           </div>
            <div class="tab-pane fade" id="photos">
              	<section class="clearfix inner-tab-block01">
					<div class="photo-block">
					<?php 
						foreach($pics as $pic):
					?>
                	<a class="example-image-link" href="<?php echo '/'.AdoptionOrphanageAddressPic::UPLOAD_PATH.$pic['pic'];?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                    	<img class="example-image" src="<?php echo ImageUtils::getThumbnail(AdoptionOrphanageAddressPic::UPLOAD_PATH.$pic['pic'], '240x150');?>" alt=""  width="240" height="150" />
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
                	<div class="inner-tab-text01"><?php echo $res['des'];?></div>
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
         	<section class="clearfix">
             <div class="top-block01">
             	<p>With years of experience working with children in orphanages all over China, Lead to China is uniquely qualified to offer a special homeland experience for you. 
					You will:</p>
				<ul>
					<li>Visit the orphanage, foster family and finding site</li>
					<li>Learn about birth country culture</li>
					<li>Get the first hand price from local agency</li>
				</ul>
            </div>
			</section>
             <section class="clearfix ">
            		<div class="top-block02">
            		<p class="center-button">
        				<a href="<?php echo Yii::app()->createUrl('adoption/adoptionDiy');?>" class="large-button" >Help Me Creat My Trip</a><br>
        				<span class="tour-sidebar-inquire-aftertext">Free travel guide & quotation within 24 hrs!</span>
    				</p>
                    </div>
            </section>
            <section class="clearfix">
              	<!--<div class="view-block-pro-detail">-->
                	<div class="adoption-right-block01">
                	<h3 class="title01">Travel Stories of This Orphanage</h3>
                    <div class="adoption-review-item" >
                    	<div class="feature-image">
           					<img alt="" src="/images/adoption01.jpg"  />
                            <div class="header">
                            	<span>2015 Private Visit to Guipin & Nanning SWI </span>
                                <span>Date: Aug 08th, 2015</span>
                            </div>
						</div>
                        <div class="body">
                        	<p>Amanda is a university professor from Canada. She adopted her daughter Andaya from Guiping SWI in Guangxing province. Now Andaya is nine years old, Amanda asked us to arrange a heritage tour for her family (her daughter Amanda, her son Kian and her mother) from August 8th to 10th... </p>
                            <a href="#" class="see-more02 f-right">See more >></a>
                            <div class="clear"></div>
                        </div>                   
                    </div>   
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