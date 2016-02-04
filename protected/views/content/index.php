<div class="container">
	<div class="row">
		<div class="crumbs">
			<h5>
				<div class="breadcrumbs">
				<a href="/">Home</a> » <a href="#">China Homeland Travel</a> » <a href="#">Travel Story</a>
				<div>
			</h5>
		</div>
		<div class="col-sm-12 col-md-9">
			<div class="pro-detail-block">
				<div class="reviews-list01-block reviews-list01-block02 clearfix">
					<?php /*?> <div class="group-left"> <img width="250px" height="170px" src="/newadmin/images/uploads/adoption/<?php echo $res['pic'];?>" /></div><?php */?>
					<div class="group-right">
						<h1><?php echo $res['title'];?></h1>
						<i>Travel Date:<?php echo date('M dS, Y',strtotime($res['created']));?></i> </div>
				</div>
				<div class="pro-detail-tab adoption-article-detail">
					<?php /*?><ul id="myTab" class="nav nav-tabs">
                <li class="active"> <a href="#itinerary" data-toggle="tab">TRAVEL STORY</a> </li>
              </ul><?php */?>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="itinerary"><?php echo $res['introtext'];	?></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="pro-detail-block-right adoption-review-right">
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
						<p class="center-button"> <a href="<?php echo Yii::app()->createUrl('order/index');?>" class="large-button" >Help Me Creat My Trip</a><br>
							<span class="tour-sidebar-inquire-aftertext">Free travel guide & quotation within 24 hrs!</span> </p>
					</div>
				</section>
				<div class="top-block02"> <a href="http://www.tripadvisor.com/ShowUserReviews-g297403-d3824010-r282839157-Lead_to_China_Tours_Day_Tour-Hefei_Anhui.html#CHECK_RATES_CONT"><img src="/images/travel-review-right-img01.jpg" /></a> </div>
			</div>
		</div>
	</div>
</div>
