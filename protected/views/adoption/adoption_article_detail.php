<div class="container">
  <div class="row">
  <div class="crumbs">
	<h5><div class="breadcrumbs">
	<a href="/">Home</a> » <a href="#">China Homeland Travel</a> » <a href="#">Travel Story</a><div></h5>
	</div>
    	<div class="col-sm-12 col-md-9">
          <div class="pro-detail-block">
            <div class="reviews-list01-block reviews-list01-block02 clearfix">
           <?php /*?> <div class="group-left"> <img width="250px" height="170px" src="/newadmin/images/uploads/adoption/<?php echo $res['pic'];?>" /></div><?php */?>
            <div class="group-right">
                <h1><?php echo $res['title'];?></h1>
                <i>Travel Date:&nbsp;<?php echo date('M dS, Y',strtotime($res['date']));?></i>
            </div>
          </div>
            <div class="pro-detail-tab adoption-article-detail"> 
              <?php /*?><ul id="myTab" class="nav nav-tabs">
                <li class="active"> <a href="#itinerary" data-toggle="tab">TRAVEL STORY</a> </li>
              </ul><?php */?>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="itinerary"><?php echo $res['content'];	?></div> 
              </div>
            </div>
          </div>
      </div>
      	<div class="col-sm-3">
      <div class="pro-detail-block-right adoption-review-right">
        <section class="clearfix">
          <div class="top-block01"> <span>Why Lead to China</span>
            <label>We take care of all your personalized needs.</label>
            <label>We have managed to help thousands of adoptive families arrange their perfect vacations in China. </label>
            <label>We work closely with Chinese government and orphanages throughout China. </label>
            <br />
            <br />
            <p class="center-button"> <a class="large-button" href="/travel/china-diy-tours/">Plan Your Trip Today</a><br>
            </p>
          </div>
        </section>
        <div class="top-block02"> <a href="http://www.tripadvisor.com/ShowUserReviews-g297403-d3824010-r282839157-Lead_to_China_Tours_Day_Tour-Hefei_Anhui.html#CHECK_RATES_CONT"><img src="/images/travel-review-right-img01.jpg" /></a> </div>
      </div>
    </div>
  </div>
</div>