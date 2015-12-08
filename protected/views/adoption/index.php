<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <h1 class="page-title05"><?php echo $res['orphanage_name'];?></h1>
      <span>Tour Route: <?php echo $res['address'].','.$res['city_name'].',China&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal Code:&nbsp;'.$res['postal_code'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone No:&nbsp;'.$res['tel'];?></span>
      <div class="pro-detail-block"> <img src="/images/pro-detail.jpg" />
        <div class="pro-text01">
          <p><?php echo $res['public_content'];?></p>
        </div>
        <div class="pro-detail-tab"> 
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"> <a href="#itinerary" data-toggle="tab">ORPHANAGE VISIT</a> </li>
            <li><a href="#photos" data-toggle="tab">photos</a></li>
            <li><a href="#trip-notes" data-toggle="tab">trip notes</a></li>
            <li><a href="#ask-answer" data-toggle="tab">RETURN TRIP GUIDE</a></li>
             <li class="last"><a href="#inquire" data-toggle="tab">inquire</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="itinerary">
              <section class="clearfix inner-tab-block01">
                <label class="inner-tab-title01"><?php echo $res['or_name'];?></label>
                <div class="inner-tab-text01"> 
						  <p>
							day 1: <?php echo $res['day1'];?>
						  </p>
						   <p>
							day 2: <?php echo $res['day2'];?>
						  </p>
						   <p>
							day 3: <?php echo $res['day3'];?>
						  </p>
						  <p>
							day 4: <?php echo $res['day4'];?>
						  </p>

              </section>
            </div>
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
                	<div class="inner-tab-text01"><?php echo $res['description'];?></div>
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
         	<section class="clearfix">We understand that an orphanage visit is perhaps the most important part of homeland travel.
					With years of experience working with children in orphanages all over China, Lead to China is uniquely qualified to offer a special homeland experience for you. 
					You will:
					<ul>
						<li>Visit the orphanage, foster family and finding site</li>
						<li>Learn about birth country culture</li>
						<li>Get the first hand price from local agency</li>
					</ul>
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