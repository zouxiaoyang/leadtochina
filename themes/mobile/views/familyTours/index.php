<style>
ul.nav-tabs {
	width: 140px;
	margin-top: 20px;
	border-radius: 0;
	background: transparent;
	z-index: 999;
	border: 0;
	box-shadow:0;
}
ul.nav-tabs li {
	margin: 0;
	border:none;
}
ul.nav-tabs li:first-child {
	border-top: none;
}
ul.nav-tabs li a {
	border:none;
	text-transform:capitalize;
	font-weight:normal;
	margin: 0;
	padding: 8px 16px;
	border-radius: 0;
	background:transparent;
	color: #d56d21;
}
ul.nav-tabs li a:hover {
	background: transparent;
	color: #d56d21;
	border-left: 1px solid #d56d21;
}
ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover {
	border:none;
	color: #d56d21;
	border-left: 1px solid #d56d21;
	background:transparent;
}
ul.nav-tabs li:first-child a {
	border-radius:0;
}
ul.nav-tabs li:last-child a {
	border-radius: 0 0 4px 4px;
}
ul.nav-tabs.affix {
	top:55px; /* set the top position of pinned element */
}
@media screen and (min-width: 992px) and (max-width: 1199px) {
 ul.nav-tabs {
 width: 180px; /* set nav width on medium devices */
}
}
@media screen and (min-width: 1200px) {
 ul.nav-tabs {
 width: 220px; /* set nav width on large devices  */
}
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<img class="img-responsive" src="/images/familytours-banner01.jpg"  />
<div class="container">
  <div class="crumbs">
    <h5>
      <?php 
	$this->widget('zii.widgets.CBreadcrumbs',
		array('links'=>array(
			//'Sample post'=>array('post/view', 'id'=>12),
			'Family Tours'=>array('travel/family-tours/'),
			//'Edit'
				),
			
			)); ?>
    </h5>
  </div>
  <div class="row">
    <div class="col-sm-9">
      <h3 class="page-title03">China Family Tour with Kids</h3>
      <div id="section1">
        <p>Travelling is the perfect way to open up a child’s world to possibility and wonder. China is that rare place that looks to the future while embracing its past which means it is a perfect destination for a family vacation. </p>
        <p>Lead to China provides most popular China family tours which covering the major highlights of China, such as the Great Wall, Forbidden City and the Terracotta Warriors in Xi'an as well as to many of the out-of-the way places not in the regular tourist itinerary. Exploring China with kids is a great adventure. To offer you a stress-free holiday, we take care of all the details, transportation, accommodations, most meals and activities.</p>
      </div>
      <hr>
      <div id="section2">
        
          <h4 id="a" class="page-title04">Why do a family tour with Lead to China?</h4>
          <div class="col-md-2 family-why01"> <img  src="/images/family-ico01.jpg" alt=""  /></div>
          <div class="col-md-10">
            <p><strong>Just for families: </strong>The clue’s in the title. These trips are for families only (including any aunts, uncles or cousins who’d like to come along, of course). As long as you’re travelling with a child under the age of 18, you’re a family in our eyes. </p>           
          </div>
          <div class="col-md-2 family-why01"> <img  src="/images/family-ico02.jpg" alt=""  /></div>
          <div class="col-md-10"> <strong>Flexible private tour:</strong> Our family tours are all specially designed by parents with both fun and safety in mind. Time isn't wasted waiting for a big group, hopping on and off buses or negotiating unfamiliar cities. Leave all the hassles up to us and spend your time relaxing and enjoying all the amazing places and activities with the kids.
           
          </div>
          <div class="col-md-2 family-why01"> <img  src="/images/family-ico03.jpg" alt=""  /></div>
          <div class="col-md-10"> <strong>Family-friendly Activities:</strong>Kids often have wildly different needs than adults, which is why we don’t just adapt our grown-up itineraries for smaller travellers. Our family tour provides you many age-appropriate activities. You will have a change to watch a Kungfu performance, make dumpling with a local family, cycling along the countryside, get up close to pandas, paint Panda t-shirts or even learn how to apply facial makeup for the Beijing Opera.
           
          </div>
          <div class="col-md-2 family-why01"> <img  src="/images/family-ico04.jpg" alt=""  /></div>
          <div class="col-md-10">
            <p><strong>Hotels that keep kids in mind:</strong>The hotels on your family journey have been especially selected for their family-friendly amenities. Wherever possible, your accommodations offer swimming pools and free Internet access, and many feature in-room game systems or game rooms, where kids can hang out after the day's activities. </p>
            
          </div>
      
      </div>
      <div id="section3">
        <div class="row">
          <h4 id="b" class="page-title04">Where can we take a family adventure?</h4>
		<?php foreach($ress as $res):?>
		<?php 
			$href = Yii::app()->createUrl('toursDetail/index',array('name'=>str_replace(array(' ',' '),array('-','-'),strtolower($res['name'])),'id'=>$res['id']));
		?>
          <div class="views-row views-row-1 views-row-odd views-row-first tour-preview">
            <div class="field-content tour-photo"><a href="<?php echo $href;?>"><img width="350" height="240"  src="<?php echo '/'.$res['filedir'].$res['pic']?>" ></a></div>
            <h2 class="field-content tour-title"><a href="<?php echo $href;?>"><?php echo $res['name'];?></a></h2>
            <div class="views-field views-field-title-2 tour-title-2"> <a href="<?php echo $href;?>"><?php echo $res['name'];?></a> </div>
            <p class="field-content tour-meta"></p>
          	<div class="field-content tour-summary"><?php echo $res['recommand_reason'];?><a class="views-more-link" href="<?php echo $href;?>"> Read more...</a></div>
            <p class="field-content tour-read-more"><a href="<?php echo $href;?>">Read More</a></p>
          </div>
	<?php endforeach;?>

        </div>
      </div>
      <div id="section4">
        <div class="row">
          <h2 id="c" class="page-title04">FAQs</h2>
          <h3> <span class="page-title07">Top Tips</span> </h3>
          <div class="col-md-4"> <img  src="/images/family-img01.jpg" alt=""  /><br>
            &nbsp;</div>
          <div class="col-md-8">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseOne')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseOne">1.Where to go in China with the Kids?<span class="pull-right"> <i class="fa fa-plus-circle collapseOne" style="display:none;"></i> <i class="fa fa-minus-circle"></i> </span></a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body"> China is BIG, and there is so much to see and experience. Beijing, Xian and Shanghai will be the top destinations for your first time family trip. Apart from Beijing, Xian and Shanghai, there are many great places for your family to explore, such as Guilin, Chengdu, Yangtze River and Luoyang. Guilin has amazing natural countryside landscape, which is a great place to take a family cycling. Chengdu attracts millions of people each year to see the cute Giant Pandas and taste impressive Sichuan cuisine. Taking a relaxing and fun Yangtze River cruise is very popular among families. You can explore amazing scenery and culture while enjoying pleasant onboard life. Luoyang might not be as popular as other places, but it offers the most authentic Kungfu culture. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseTwo')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseTwo">2.Which is the best month for traveling to China with our family?<span class="pull-right"> <i class="fa fa-plus-circle collapseTwo"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body"> China is a big country. No matter what season of year, there is always a place in China that is worth visiting. If you travel with infants or toddlers, April, May, September and October will be recommended since the weather is nicest all year around. However for teenagers, just go when you can and make enough preparations. China is waiting for you all year around. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseThree')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseThree"> 3.What kinds of activities in China are best suited to children?<span class="pull-right"> <i class="fa fa-plus-circle collapseThree"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body"> There are many interesting and popular activities for children to do in China, such as watch a Kungfu show, fly kite, cycling on the Ancient City Wall, the panda experience and Shanghai Disneyland. What's more, just tell us needs and we will customize a unique trip for you. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="section5">
        <div class="row">
          <h2 id="food"> <span class="page-title07">Food</span> </h2>
          <div class="col-md-4"> <img  src="/images/family-img02.jpg" alt=""  /><br>
            &nbsp;</div>
          <div class="col-md-8">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseFour')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseFour">1.Will my children like the food?<span class="pull-right"> <i class="fa fa-plus-circle collapseFour" style="display:none;"></i> <i class="fa fa-minus-circle"></i> </span></a> </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse in">
                  <div class="panel-body"> There is enormous variety of food available in China, including Western food, fast food, vegetarian food and sea food. It is almost certain that there will be dishes your children like to eat. Our guides are experienced in helping select dishes they will like. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseFive')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseFive">2.What if my child has a food allergy?<span class="pull-right"> <i class="fa fa-plus-circle collapseFive"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body"> We try to accommodate all food requirements, so make sure you advise us at the time of booking. Although we endeavor to have alternative options available, it may be difficult in some restaurants to determine if foods are 100% allergen-free. We advise that you take the same precautions as you would when eating out at a restaurant in your home country, and maybe take along snacks that you know are safe as a precaution. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseSix')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseSix"> 3.Is there always a vegetarian option?<span class="pull-right"> <i class="fa fa-plus-circle collapseSix"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                  <div class="panel-body"> There is usually a vegetarian option available, and most picnic and buffet-style meals will have lots of salads, rice dishes and breads. If you are strict vegetarian, please do mention it to our travel experts. We will arrange it according to your needs. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseSeven')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseSeven"> 4.Are we going to use the chopsticks?<span class="pull-right"> <i class="fa fa-plus-circle collapseSeven"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse">
                  <div class="panel-body"> Preferably before you leave home! Chopsticks will be the norm at regular restaurants, some might have forks and knives if you ask for them, mainly in the big cities. Eating with chopsticks is not difficult, but when learning it might take a little practice to get the hang of it. Bring your own forks and knives will be a better choice. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="section6">
        <div class="row">
          <h2 id="accomm"> <span class="page-title07">Accommodation</span> </h2>
          <div class="col-md-4"> <img  src="/images/family-img04.jpg" alt=""  /><br>
            &nbsp;</div>
          <div class="col-md-8">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseEight')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseEight">1.Where to Stay in China?<span class="pull-right"> <i class="fa fa-plus-circle collapseEight" style="display:none;"></i> <i class="fa fa-minus-circle"></i> </span></a> </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse in">
                  <div class="panel-body"> To ensure you enjoy good rest during holiday, we carefully select family-friendly hotels, taking into consideration factors like Trip Advisor reviews, our previous customer feedback, location, availability of swimming pool and inter-connecting rooms, etc. For example, some boutique-style accommodation like Yangshuo Mountain Retreat is highly recommended since they are often managed by westerners or well-travelled, English-speaking locals, they have high service standards and easily accommodate families. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseNine')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseNine">2.Shall we get interconnecting rooms?<span class="pull-right"> <i class="fa fa-plus-circle collapseNine"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse">
                  <div class="panel-body"> We use our carefully selected comfortable hotels for our family holiday and we will take interconnecting rooms as the first consideration when booking hotel rooms for you. If not available, we at least promise adjacent rooms for you. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="section7">
        <div class="row" style="padding-bottom:80px;">
          <h2 id="#health"> <span class="page-title07">Health and Safety</span> </h2>
          <div class="col-md-4"> <img  src="/images/family-img03.jpg" alt=""  /><br>
            &nbsp;</div>
          <div class="col-md-8">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseTen')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseTen">1.Should I bring a first aid kit?<span class="pull-right"> <i class="fa fa-plus-circle collapseTen" style="display:none;"></i> <i class="fa fa-minus-circle"></i> </span></a> </h4>
                </div>
                <div id="collapseTen" class="panel-collapse collapse in">
                  <div class="panel-body"> While not required, it’s always good to be prepared for any little bumps or bruises along the way. Without going overboard, we recommend bringing a supply of Band-Aids and disinfectant, some paracetamol, motion sickness tablets (if necessary), hydrolytes (or something similar) and any personal medical items that might be needed throughout the duration of the trip. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseEleven')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseEleven">2.How safe is the transport?<span class="pull-right"> <i class="fa fa-plus-circle collapseEleven"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseEleven" class="panel-collapse collapse">
                  <div class="panel-body"> We regularly check all of our vehicles to ensure that they adhere to strict safety requirements. Moreover, the safety seat for child will be offered on request. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseTwelve')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseTwelve"> 3.Can we drink the water?<span class="pull-right"> <i class="fa fa-plus-circle collapseTwelve"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseTwelve" class="panel-collapse collapse">
                  <div class="panel-body"> Bring your own water bottles, preferably those that can be attached to a backpack or stroller. Be aware that tap water is not drinkable anywhere in China, but purified water is easy to find in hotels and restaurants. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title" onclick="showH('collapseThirteen')"> <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseThirteen">4. What are the toilets facilities like?<span class="pull-right"> <i class="fa fa-plus-circle collapseThirteen"></i> <i class="fa fa-minus-circle" style="display:none;"></i> </span></a> </h4>
                </div>
                <div id="collapseThirteen" class="panel-collapse collapse">
                  <div class="panel-body"> Chances are you will be faced with one of those squat toilets at least once during your travels once you venture outside the five-star and luxury hotel realm.<br />
                    For kids, if totally unexpected, it could be quite upsetting, especially for girls. So best thing is to be prepared and remember, the kids will be watching you. If you act like this is the most normal thing, they won't fuss as much. Always carry toilet paper or tissues with you. The lack of it seems to be the rule rather than the exception in China. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-tabs nav-stacked" data-offset-top="450" data-spy="affix">
        <li class="active"><a href="#section1">Why do an Intrepid family tour?</a></li>
        <li><a href="#section2">Where can we take a family adventure?</a></li>
        <li><a href="#section3">A taste of whats in store...</a></li>
        <li><a href="#section4">FAQs</a></li>
        <li><a href="#section5">Food</a></li>
        <li><a href="#section6">Accommodation</a></li>
        <li><a href="#section7">Health and Safety</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="top10tours-bottom-block">
  <div class="container">
    <div class="link-block01  col-md-4"> <span class="title">Flexible</span>
      <ul>
        <li>All tours can be customized</li>
        <li>Easy to make last minute changes</li>
        <li>No risk of forced shopping</li>
        <li>Expert destination advice </li>
      </ul>
    </div>
    <div class="link-block01  col-md-4"> <span class="title">Authentic</span>
      <ul>
        <li>Excellent from planning to executing</li>
        <li>EHand-Picked hotels & restaurants </li>
        <li>Quality service at best value</li>
        <li>24/7 care while you are in China</li>
      </ul>
    </div>
    <div class="link-block01  col-md-4"> <span class="title">Professional</span>
      <ul>
        <li>We understand China well</li>
        <li>Experienced English speaking tour guides</li>
        <li>We treat others the way we want to be treated</li>
        <li>Keep our services at world-leading levels</li>
      </ul>
    </div>
  </div>
</div>
<script type="text/javascript">
		function showH(o){
				$('#'+o).on('shown.bs.collapse', function () {
					$('.'+o).hide();
					$('.'+o).next().show();
				})
				$('#'+o).on('hidden.bs.collapse', function () {
					$('.'+o).show();
					$('.'+o).next().hide();
				})
			if(o!='collapseOne'&& o!='collapseFour' && o!='collapseEight'&& o!='collapseTen'){
				$('.collapseOne').show();
				$('.collapseOne').next().hide();
			}
		}
</script>
