<img class="img-responsive" src="/images/adoption/banner_<?php echo strtolower($res['name']);?>.jpg"  alt="" />
<div class="container">
    <h2 class="page-title13">About&nbsp;<?php echo $res['name'];?></h2>
    <div class="adoption-province-about">
        <?php echo $res['description']; ?>
        <ul>
        	<li>
            	<img  src="/images/anhui-fact.gif" />
            	<span><?php echo $res['name'];?>&nbsp;Facts</span>
            </li>
            <li>
            	<img  src="/images/anhui-food.gif" />
            	<span><?php echo $res['name'];?>&nbsp;Food</span>
            </li>
            <li>
            	<img  src="/images/anhui-climate.gif" />
            	<span><?php echo $res['name'];?>&nbsp;Climate</span>
            </li>
            <li>
            	<img  src="/images/anhui-transport.gif" />
            	<span><?php echo $res['name'];?>&nbsp;Transportations</span>
            </li>
        </ul>
    </div>
</div>
<div class="adoption-province-collection">
	<div class="container">
    	<h2 class="page-title14">Collection of <?php echo $res['name'];?>&nbsp;Orphanages</h2>
    	<p>Based in China, Lead to China works closely with Chinese Government and Social Welfare Institutes throughout China. This section 
contains detailed information like each orphanage address, photos, travel stories, visit arrangement, and travel tips. </p>
		<ul>
		<?php $ii=1;?>
		<?php foreach($adoption_info as $v):?>
				<?php if($ii==1 || ($ii-1)%6==0):?>
					<li>
				<?php endif;?>
					<a href="<?php echo Yii::app()->createUrl('adoption/index',array('id'=>$v['id']));?>"><?php echo $v['orphanage_name'];?></a>          
				<?php echo ($ii%6==0)?'</li>':'';?>
			<?php $ii++;?>
		<?php endforeach;?>
        </ul>
    </div>
</div>
<div class="container">
	<h2 class="page-title13" > Get Inspirations</h2>
    <p style="text-align:center;">Having no idea how to start your China homeland tour? Don't worry! You can get inspirations from our hand-picked private tour, 
or join the group tour with other families, even let us to customize a trip for you.
	</p>
    <div class="col-sm-6 col-md-4">
    	<div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
				<div class="field-content tour-photo">
					<?php $pic_dir = $packageProvince['filedir'];?>
                	<a href="#">
						<img src="<?php echo ImageUtils::getThumbnail($pic_dir.$packageProvince['pic'], '360x263');?>">
					</a>
                </div>
				<h2 class="field-content tour-title"><a href="<?php echo Yii::app()->createUrl('toursDetail/index', array('id'=>$packageProvince['id'], 'name'=>SiteUtils::stringURLSafe($packageProvince['name'])));?>"><?php echo $packageProvince['name'];?></a></h2>
				<div class="views-field views-field-title-2 tour-title-2"> <a href="<?php echo $packageProvince['url'];?>"><?php echo $packageProvince['name'];?></a> </div>
				<p class="field-content tour-meta"></p>
				<div class="field-content tour-summary">
                    <?php $recommand_reason=explode(',', $packageProvince['recommand_reason']); ?>
                    <ul>
						<li title="<?php echo $recommand_reason[0];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[0],80);?></li> 
                           <li class="rtwo" title="<?php echo $recommand_reason[1];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[1],80);?></li>
                           <li class="rthree" title="<?php echo $recommand_reason[2];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[2],80);?></li>
                           <li class="rfour" title="<?php echo $recommand_reason[3];?>"><?php echo SiteUtils::mb_truncate_text($recommand_reason[3],80);?></li>
                    </ul>
					<a href="<?php echo Yii::app()->createUrl('toursDetail/index', array('id'=>$packageProvince['id'], 'name'=>SiteUtils::stringURLSafe($packageProvince['name'])));?>" class="views-more-link"> Read more...</a></div>
				<p class="field-content tour-read-more"><a href="<?php echo Yii::app()->createUrl('toursDetail/index', array('id'=>$packageProvince['id'], 'name'=>SiteUtils::stringURLSafe($packageProvince['name'])));?>">Read More</a></p> 
        </div>
	</div>
    <div class="col-sm-6 col-md-4">
    	<div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
				<div class="field-content tour-photo">
                	<a href="#">
                		<img width="350" height="240" src="/images/adoption-Inspirations01.png" />
                    </a>
                </div>
				<h2 class="field-content tour-title"><a href="/travel/adoption/2016-group-tour">2016 Summer Break Tour</a></h2>
				<div class="views-field views-field-title-2 tour-title-2"> <a href="/travel/8-days-standard-china-golden-triangle-tour-%28by-flight%29-17.html">Small Group to Join in: 2016 Summer Break Tours</a> </div>
				<p class="field-content tour-meta"></p>
				<div class="field-content tour-summary">Beijing-Xi'an-Chengdu-Birth City<br />
Departure: July 04th, 2016<br />
$2000 for Adult, Kid Travel Free!<a href="/travel/adoption/2016-group-tour" class="views-more-link"> Read more...</a></div>
				<p class="field-content tour-read-more"><a href="/travel/adoption/2016-group-tour">Read More</a></p> 
        </div>
	</div>
    <div class="col-sm-6 col-md-4">
    	<div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
				<div class="field-content tour-photo">
                	<a href="#">
                		<img width="350" height="240" src="/images/adoption-Inspirations02.png" />
                    </a>
                </div>
				<h2 class="field-content tour-title"><a href="/travel/adoption/adoption-customize/">Customize Your Own Return Trip</a></h2>
				<div class="views-field views-field-title-2 tour-title-2"> <a href="/travel/8-days-standard-china-golden-triangle-tour-%28by-flight%29-17.html">Customize Service: Just Need the Orphanage Visit?</a> </div>
				<p class="field-content tour-meta"></p>
				<div class="field-content tour-summary">It is another option for those who want a more flexible time frame to work with as well as independence in where you want to go. We'd be happy to guide you regarding any of our programs. <a href="/travel/adoption/diy" class="views-more-link"> Read more...</a></div>
				<p class="field-content tour-read-more"><a href="/travel/adoption/adoption-customize/">Read More</a></p> 
        </div>
	</div>
    <p class="clearfix" ></p>
    <h2 class="page-title13 clearfix" >Tips for a China Orphanage Visit</h2>
    <div class="adoption-tips clearfix">
    	<div class="f-left" style="width:67%">
        	<p>When you plan to have a China return trip, you'd better prepare a gift for other children in the orphanage. 
You can ask our travel consultant about the details and buy some gifts several days before your trip or you can buy that after your arrival in China if you're inconvenient for the excessive baggage. The guide from LeadtoChina will give you proper suggestions and help you to buy these. If you're confused about what items the SWI need, here are some good examples: snacks, or a basket of fruit, backpack, books or other school supplies. You are also suggested to buy fans and air conditioning in summer in some poor SWI. Most of the SWI will give you a present in return for memory.</p>
			<p>Many families care about the donation, and if you want to do this, we suggest you to exchange the donated money for RMB and show this to the director of the SWI. Some SWI will issue a donation certificate to you but not every SWI will do this.
            </p>
            <p>
            According to the size of the SWI and the frequency of the families' return, the visit can be the most important
thing for the staff or a small part of the orphanage's routine work. You can talk to your child about the actual 
situation you've known to let them make enough preparations. You'd better tell them what will happen and 
what to do if things are not the same as they expected. They should keep a flexible attitude towards life and 
enjoy the process instead of following a certain model to start as things are not exactly what we think and this 
is very important. One more important point which is often ignored is that most of the orphanage children 
always have various special needs. It is better to consider this before visiting and your child should know that 
some children in the SWI have physical or mental disability. All these can provide a better atmosphere for 
the children with special needs in the orphanage during your return visit. 
            </p>
            <p>
            If you'd love to invite the orphanage director to lunch, please don't forget other people in the SWI as they 
are usually the director's assistants. If you want to invite the caregiver or nanny, you'd better extend the 
invitation through the director to request the consent out of courtesy. Our guide can help you to do this and 
convey your invitation accurately and politely. What's more, some of the orphanages will offer you free lunch 
but many SWI will charge you for about 100 USD as lunch fee. You can inquire about this through your trip 
consultant before travelling.
            </p>
            <p>
            At last, some Chinese individuals act turgidly in front of you for not losing face. But most people follow 
traditional Chinese values, modesty and gentleness. Bearing this in mind can help you deal with problems 
in different situations successfully during your return visit.
            </p>
        </div>
        <img  src="/images/adoption-tips-img01.png" class="f-right" />
        
    </div>
    
</div>