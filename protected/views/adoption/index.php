<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <h1 class="page-title05"><?php echo $res['orphanage_name'];?></h1>
      <a href="<?php echo Yii::app()->createUrl('adoption/showMaps',array('city_name'=>$res['city_name'],'id'=>$res['apt_id']));?>"><img src="/images/map-ico01.gif" /></a> &nbsp;<span>Address: <?php echo $res['address'].'&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;Postal Code:&nbsp;'.$res['postal_code'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone No:&nbsp;'.$res['tel'];?></span>
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
					<p>Prior to your orphanage visit application submission, please make sure you have the following documents ready:</p><p>A copy of each visitor's passports</p><p>A copy of the adoption certificate or the notarized adoption documents (<a target="_self" href="http://www.leadtochina.com/travel/images/adoption1.pdf">Sample documents in PDF</a>)</p><p>An orphanage visit application letter (Sample documents in PDF)</p><p><br></p>
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
                	<label class="inner-tab-title01">Birth City & Orphanage Guide </label>
                	<div class="inner-tab-text01"><?php echo $res['des'];?></div>
              	</section>
            </div>
            <div class="tab-pane fade" id="ask-answer">
             	<section class="clearfix inner-tab-block01">
              	<label class="inner-tab-title01">Return Trip Guide</label>
                <div class="inner-tab-text01">
                Revisiting the orphanage is the important aspect of your homeland heritage trip, what do we need to prepare for this part? Here are some tips for your reference:
                </div>
                </section>
                <section class="clearfix inner-tab-block01">
                	<label class="inner-tab-title01">Expectation of the SWI visiting</label>
                 	<div class="inner-tab-text01">
                	<p>Depending on the size of the SWI and how often visitors return, a visit could can be a highly anticipated event by the staff, or a routine, minor inconvenience to the day to day running of the institution. </p>
                    <p>You will want to discuss this aspect of reality with your child and prepare her or him for what it might be like, based on what you know.  It is good to talk to your child about what to expect and then what to do if things turn out differently than you expect. It is important to develop an attitude of flexibility and focus on enjoying the experience rather than to get set on things going a certain way, since things don’t always go exactly as planned on any trip or daily life experience.  A small gift is always appropriate for the effort expended by the director and or staff to accommodate the visiting family.</p>

                 </div>                
             	</section>
                 <section class="clearfix inner-tab-block01">
                 	<label class="inner-tab-title01">New/Old Orphanage</label>
                    <div class="inner-tab-text01">
                    	<p>Since it may be several years after an adoption, it’s not unusual that the orphanage moved to a new place. Remember it’s normal, natural, time will not stand still, just as your children changed dramatically from she/he was a baby when just there.</p>
                        <p>If you are interested in visit both of the orphanages, we are happy to facilitate it, you can follow the previous footprint to recall your excitement when you look at your children at first time.  </p>
                    </div>
                 </section>
                 <section class="clearfix inner-tab-block01">
                 	<label class="inner-tab-title01">Finding Site</label>
                     <div class="inner-tab-text01">
                     <p>We usually arrange visiting the finding site for families if have the Notarial Certificate of the finding place. The finding site usually is at the front of hospital/orphanage/government agencies, etc. Please note that there places may be changed also.</p>
                     <p>Since visiting the finding site is the most emotional part of the trip, it’s a personal decision for each family and only you can make the decision if you want to accomplish it.</p>
                     </div>
                 </section>
                  <section class="clearfix inner-tab-block01">
                  	<label class="inner-tab-title01">Foster Family/Caregiver</label>
                     <div class="inner-tab-text01">
                     	<p>We always arrange the meeting with the previous caregiver/ foster family. If you have the information of the previous caregiver, we will try our best to find her. Please do remember that it’ll be some years after your adoption, the caregiver may be moved away or be retired. If the caregiver is still working in the orphanage, the director will happy to facilitate the connection.</p>
                        <p>Also please note that the caregiver may take care of more than one hundred babies in the orphanage, so that she may not remember your child well. </p>
                     </div>
                  </section>
                   <section class="clearfix inner-tab-block01">
                   	<label class="inner-tab-title01">Have lunch together with the staff</label>
                     <div class="inner-tab-text01">
                     	<p>If your family is interested or inclined to invite the orphanage director to lunch, it is proper to invite others in the meeting as well.  This would usually be one or two of the directors' assistants.  If you want to invite the caregiver or nanny, then you should extend that invitation through the director to show the proper respect that the position merits. Your guide will handle this for you, but inviting the staff through the director follows proper etiquette for the situation. Some of the orphanages offer the free lunch while the others request about USD90-USD150 for the extra charge. You may ask our trip consultant before you travel.</p>
                     </div>                    
                   </section>
                   
                   <section class="clearfix inner-tab-block01">
                   	<label class="inner-tab-title01">Gifts</label>
                     <div class="inner-tab-text01">
                     	<p>When visiting an orphanage, it is appropriate to prepare some gifts for the director/staff and the children. You can invite the director, the staff or the caregiver to have lunch together or prepare fruit basket for them, for their effort expended to accommodate the visiting family. </p>
                        <p>As for the gifts to kids, you can prepare some snacks, candy, books, school backpacks, toys and so on. Usually, you can buy them when arrival at the orphanage place, the guide can escort you.</p>
                        <p>If you want to donate something more valuable and not sure what is needed for the orphanage, you can first learn it from the director and then purchase them from the local market. Some SWI will issue a donation certificate to you but not every SWI will do this.</p>
                     </div>                    
                   </section>
            </div>
            <div class="tab-pane fade" id="inquire">
              	<section class="clearfix inner-tab-block01">
                	<label class="inner-tab-title01">Making an Inquiry</label>
                	<div class="inner-tab-text01">
                		<p>Any part of this itinerary can be altered to fit your need, e.g. accommodation, add/skip city, tour length...
							Click below to tell us what you're looking for:</p>
                        <a class="large-button" href="/travel/adoption/adoption-customize/">Inquire about this trip</a>
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
		<?php if(!empty($article)):?>
            <section class="clearfix">
              	<!--<div class="view-block-pro-detail">-->
                	<div class="adoption-right-block01">
						<h3 class="title01">Travel Stories of This Orphanage</h3>
						<?php foreach($article as $art):?>
							<div class="adoption-review-item" >
								<div class="feature-image">
									<img alt="" src="/images/adoption01.jpg"  />
									<div class="header">
										<span><?php echo $art['title'];?></span>
										<span>Date: <?php echo date('M dS, Y',strtotime($art['date']));?></span>
									</div>
								</div>
								<div class="body">
									<p><?php echo substr(strip_tags($art['content']),0,300);?>...</p>
									<a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleDetail',array('ar_id'=>$art['id']));?>" class="see-more02 f-right">See more >></a>
									<div class="clear"></div>
								</div>                   
							</div>
					<?php endforeach;?>
                </div>
            </section>
		<?php endif;?>
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